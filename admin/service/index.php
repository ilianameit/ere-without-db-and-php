<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/magicquotes.inc.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

if (!userIsLoggedIn())
{
  include '../login.html.php';
  exit();
}

if (!userHasRole('Сервисник'))
{
  $error = 'Отказано в доступе. У Вас нет привилегии сервисника';
  include '../accessdenied.html.php';
  exit();
}




include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
if (isset($_GET['otchet']))
{
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
$pageTitle = 'Отчёт';
  $mail = $_GET['otchet'];
include 'otchet.html.php';
 exit();
}
try   
  {
  $mail = $_POST['nummail'];

 if(isset($_POST['checkvins']))
		{
	$listvin = "'" .implode("','" , $_POST['checkvins']). "'";

	$sql = "UPDATE infovin SET stata = '1'  WHERE vin in ($listvin) and mnomer = '$mail'";
			$s = $pdo->prepare($sql);
			$s->execute();
		}
	
	 
			if(isset($_POST['vinszero'])){
				$listzero = "'" .implode("','" , $_POST['vinszero']). "'";
				$sql = "UPDATE infovin SET stata = '0'  WHERE vin in ($listzero) and mnomer = '$mail'";
			$s = $pdo->prepare($sql);
			$s->execute();
			}
			
			
			
			if(isset($_POST['statmess'])){
				$sql = "UPDATE infomessage SET status = '1'  WHERE id = '$mail'";
				$s = $pdo->prepare($sql);
				$s->execute();
			}
			
			
			$stmq = $pdo->query("SELECT count( distinct stata) FROM sap INNER JOIN infovin ON infovin.vin = sap.VIN_SAP where mnomer='$mail'"); // подсчет
$countst = $stmq->fetch(PDO::FETCH_NUM)[0];
		$sql = "SELECT DISTINCT stata FROM sap INNER JOIN infovin ON infovin.vin = sap.VIN_SAP where mnomer='$mail'";
				$statement = $pdo->prepare($sql);
				$statement->execute();
				$result_stata = $statement->fetchAll();
	 	//if(){}
				foreach ($result_stata as $stat) {
				
					if($stat['stata']==1 and $countst==1){
						$sql = "UPDATE infomessage SET status = '1'  WHERE  id = '$mail'";
						$state = $pdo->prepare($sql);
						$state->execute();
						
					} else{
						$sql = "UPDATE infomessage SET status = '0'  WHERE  id = '$mail'";
						$state = $pdo->prepare($sql);
						$state->execute();
					}
				}
		
	



	
  } catch (PDOException $e)
  {
    $error = 'Ошибка: В обновлении vin '.$mail.'';
    include 'error.html.php';
    exit();
  }
  
  try   
  {
	 $vin = $_POST['numvin'];
	 if(isset($_POST['checkmails']))
		{
	$listmail = "'" .implode("','" , $_POST['checkmails']). "'";

	$sql = "UPDATE infovin SET stata = '1'  WHERE mnomer in ($listmail) and vin = '$vin'";
			$s = $pdo->prepare($sql);
			$s->execute();
		}
	
	 
			if(isset($_POST['mailszero'])){
				$listzero = "'" .implode("','" , $_POST['mailszero']). "'";
				$sql = "UPDATE infovin SET stata = '0'  WHERE mnomer in ($listzero) and vin = '$vin'";
			$s = $pdo->prepare($sql);
			$s->execute();
			}
			
			
			$sqlst ="SELECT DISTINCT mnomer, stata, nazvanie FROM sap INNER JOIN infovin ON infovin.vin = sap.VIN_SAP INNER JOIN infomessage on infovin.mnomer=infomessage.id where vin='$vin'  "; 
			$statementst = $pdo->prepare($sqlst);
				$statementst->execute();
				$stvin = $statementst->fetchAll();
			foreach ($stvin as $st) { 
				$nums= $st['mnomer'];
			
				$stmv = $pdo->query("SELECT count( distinct stata) FROM sap INNER JOIN infovin ON infovin.vin = sap.VIN_SAP where mnomer='$nums'"); // подсчет
				$countv = $stmv->fetch(PDO::FETCH_NUM)[0];
						$sql = "SELECT DISTINCT stata FROM sap INNER JOIN infovin ON infovin.vin = sap.VIN_SAP where mnomer='$nums'";
								$statement = $pdo->prepare($sql);
								$statement->execute();
								$result_statavin = $statement->fetchAll();
								foreach ($result_statavin as $statv) {
								
									if($statv['stata']==1 and $countv==1){
										$sql = "UPDATE infomessage SET status = '1'  WHERE  id = '$nums'";
										$state = $pdo->prepare($sql);
										$state->execute();
										
									} else{
										$sql = "UPDATE infomessage SET status = '0'  WHERE  id = '$nums'";
										$state = $pdo->prepare($sql);
										$state->execute();
									}
								}
			}
			
			
	 
  }catch (PDOException $e)
  {
    $error = 'Ошибка: В обновлении письма '.$mail.'';
    include 'error.html.php';
    exit();
  }


//  header('Location: .');
 //exit();


include 'vin.php';

?>