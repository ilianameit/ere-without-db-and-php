<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/magicquotes.inc.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

if (!userIsLoggedIn())
{
  include 'login.html.php';
  exit();
}

if (!userHasRole('Администратор'))
{
  $error = 'Отказано в доступе. У Вас нет привилегии Редактор ЭРЭ';
  include '../accessdenied.html.php';
  exit();
}

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>РМ ЭРЭ</title>
	<link rel="stylesheet" href="../../css/admin.css">

  </head>
  <body>
  
		<?php 
			//$sql ="SELECT DISTINCT DrwNum,erekompl.idere ,ererazdel.ln, skkompl.idsk, skrazdel.ln as skln FROM sap left JOIN erekompl ON ( erekompl.kompl= sap.DrwNum) left JOIN ererazdel ON ( erekompl.idere= ererazdel.id) left join skkompl ON ( sap.DrwNum = skkompl.kompl) left join skrazdel ON (skkompl.idsk= skrazdel.id) ";
			
			$sql='SELECT DISTINCT erekompl.idere,skkompl.idsk FROM erekompl LEFT JOIN skkompl ON (skkompl.kompl = erekompl.kompl) UNION ALL SELECT erekompl.idere,skkompl.idsk FROM erekompl RIGHT JOIN skkompl ON (skkompl.kompl = erekompl.kompl) WHERE erekompl.kompl IS NULL';
			$statement = $pdo->prepare($sql);
				$statement->execute();
				$idereidsk = $statement->fetchAll();
				
			foreach ($idereidsk as  $head){
			//	echo $row['idere'].' ';
			//	echo $row['idsk'].' <br>';
			
		$idere=$head['idere'];
		$idsk=$head['idsk'];
		if (!empty($idere) && !empty($idsk)) {		
		
		
		echo "<div class='skruk-table'>";
		echo "	<div class='skruk__head'>Руководство</div><div class='skruk__head'>Сервисная книжка</div>";
		echo "	<div class=''>".$idere."</div><div class=''>".$idsk."</div>";
		echo "	<div>";
		echo "		<ul>";
			$sql="SELECT DISTINCT LN FROM `ererazdel` WHERE id ='$idere' ORDER BY `ererazdel`.`LN` ASC";	
			$statement = $pdo->prepare($sql);
				$statement->execute();
				$ereln = $statement->fetchAll();
			foreach ($ereln as  $lnere){
				echo "			<li>".$lnere['LN']."</li>";	
			}
					
		echo "		</ul>";
		echo "	</div>";
		
		echo "	<div>";
		echo "		<ul>";
			$sql="SELECT LN FROM `skrazdel` where id='$idsk' ORDER BY `skrazdel`.`LN` ASC";
			$statement = $pdo->prepare($sql);
				$statement->execute();
				$skln = $statement->fetchAll();
			foreach ($skln as  $lnsk){
				echo "			<li>".$lnsk['LN']."</li>";	
			}
		echo "		</ul>";
		echo "	</div>";
			$stmt=$pdo->query("SELECT count(*) LN FROM ererazdel where id ='$idere'");
			$countlnere = $stmt->fetch(PDO::FETCH_NUM)[0];
		//echo "	<div>";
			
		//		echo "<span>".$countlnere."</span>";	
			
		//echo "	</div>";
			$stmt=$pdo->query("SELECT count(*) LN FROM skrazdel where id ='$idsk'");
			$countlnsk = $stmt->fetch(PDO::FETCH_NUM)[0];
		//echo "	<div>";
			
		//		echo "<span>".$countlnsk."</span>";	
			
		//echo "	</div>";
		
		
		echo"<div class='skruk__ln'>";
			if($countlnere===$countlnsk) {
				$sts=$pdo->query("SELECT count(*) FROM ererazdel INNER JOIN skrazdel ON ererazdel.LN = skrazdel.LN where ererazdel.id='$idere' and skrazdel.id='$idsk'");
				$countbothln = $sts->fetch(PDO::FETCH_NUM)[0];
					if($countbothln===$countlnere){
						echo"<p class='stata stat--ok'>Языки руководства и сервисной книжки совпадают</p>";
					} else {
						echo"<p class='stata stat--difference'>Различия языков руководства и сервисной книжки</p>";
					}
			}else {echo"<p class='stata stat--shortage'>Нехватка загруженных  руководства и сервисной книжки</p>";}
		echo"</div>";
		
		
		echo "		<div class='skruk__kompls'>";
		echo "			<ul> 
				<li>Общие комплектации:</li><br/>";
		
		
		
		
		$sql="SELECT DISTINCT DrwNum,erekompl.idere , skkompl.idsk FROM sap left JOIN erekompl ON ( erekompl.kompl= sap.DrwNum) left JOIN ererazdel ON ( erekompl.idere= ererazdel.id) left join skkompl ON ( sap.DrwNum = skkompl.kompl) left join skrazdel ON (skkompl.idsk= skrazdel.id) WHERE
			
			erekompl.idere = '$idere' and skkompl.idsk ='$idsk'
			
			ORDER BY `sap`.`DrwNum` ASC";
			
			
			//$sql="SELECT DISTINCT erekompl.idere, erekompl.kompl, skkompl.idsk FROM erekompl LEFT JOIN skkompl ON (skkompl.kompl = erekompl.kompl) UNION ALL SELECT erekompl.idere, erekompl.kompl, skkompl.idsk   FROM erekompl RIGHT JOIN skkompl ON (skkompl.kompl = erekompl.kompl) WHERE erekompl.kompl IS NULL and idere ='$idere' AND idsk='$idere'";
			$statement = $pdo->prepare($sql);
				$statement->execute();
				$kompls = $statement->fetchAll();
			foreach ($kompls as  $kompl){
				echo "			<li>".$kompl['DrwNum']."</li>";	
			}	


		echo "			</ul>";
		echo "		</div>";
		echo "</div>";

		}
		}			
		?>
  </body>
  </html>