<?php
	sleep(3);
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
	session_start();

	if(isset($_POST['search_btn'])) {
	$search = $_POST['search'];
	setcookie("Coockie-vin",$search, time()+3600);header("Refresh: 0");
	}

		$sql = "SELECT VIN_SAP, DrwNum FROM sap where VIN_SAP LIKE '%$search' -- ";
		$statement = $pdo->prepare($sql);
		$statement->execute();
		$res = $statement->fetchAll();
		foreach ($res as $r) {}
		
		$lang = $_SESSION['LN'];
		$sql2 = "SELECT * FROM page_vin where LN = '$lang' -- ";
		$statement2 = $pdo->prepare($sql2);
		$statement2->execute();
		$lns = $statement2->fetchAll();
		foreach ($lns as $ln) {}

		
		
		

			if (!empty($res) && $_COOKIE['counter'] < 3) {
				$_SESSION['join'] = TRUE;
				$kompl = $r['DrwNum'];
				setcookie("Coockie-kompl",$kompl, time()+3600);header("Refresh: 0");
				header("Location: menu.php");exit();
			} else {
				
				$count = 0;
				if (isset($_COOKIE['counter'])) $count = $_COOKIE['counter']; $count++;
				setcookie("counter",$count, time()+60);
				
				if($_COOKIE['counter']>2)
					{
						$vinerror = $ln['errorhack']; //"Запросы заблокированы, повторите попытку через пару минут."
						header("Location: vin.php");
						setcookie("vinerror",$vinerror, time()+10);
					} else {
						$vinerror = $ln['errorvin']; //"Выбранный VIN отсутствует в базе данных!"
						header("Location: vin.php");
						setcookie("vinerror",$vinerror, time()+10);
					}
			}
?>							
