<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php';	
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php htmlout($pageTitle); ?></title>
	<link rel="stylesheet" href="css/style.css">
	<script src="../../js/js-libary.js"></script>
		<link rel="stylesheet" href="css/chosen.css">
  </head>

  <body class="main">
  
	
		
		<form action="?<?php htmlout($action); ?>" method="post" enctype="multipart/form-data">
			<div class="heading">
				<h1>Панель администратора</h1>
				<h1><?php htmlout($pageTitle); ?></h1>
			</div>
	<div class="main"> 	
			<div class="manual-text "id="kompl-manual-text">
		  
<?php 
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

	$sql = "SELECT * FROM ererazdel";
		$statement = $pdo->prepare($sql);
		$statement->execute();
		$result_array = $statement->fetchAll();
			
	echo "<div class='manual-line'><div class='left-kompl'><p>Руководство:</p></div><div class='right-kompl'><div class='right-input-text right-kompl-input-text'><input class='no-arrow-data' name='idere' list='idere'><datalist id='idere'>";
	foreach ($result_array as $result_row) {
	echo ' <option value="'.$result_row['id'].'">'.$result_row['id'].'</option>';
	}
	echo '</input></datalist></div></div></div>';
?>

<?php 
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

	$sql = "SELECT DISTINCT DrwNum, idere FROM sap left JOIN erekompl ON erekompl.kompl = sap.DrwNum where idere IS NULL";
		$statement = $pdo->prepare($sql);
		$statement->execute();
		$result_array = $statement->fetchAll();
			
	echo "<div class='manual-line'><div class='left-kompl'><p>Комплектация:</p></div><div class='right-kompl'><div class='right-kompl-input-text'><select data-placeholder='Выберите комплектации...' class='chosen-select' name='kompl[]' id='kompl' multiple tabindex='1'>";
	foreach ($result_array as $result_row) {
	echo ' <option value="'.$result_row['DrwNum'].'">'.$result_row['DrwNum'].'</option>';
	}
	echo '</select></div></div></div>';
?>

				<div class="manual-line line-center" >
				  <div class="button-add button-bind" id="komp-bind">
					<input class = "save text-center" type="submit" value="<?php htmlout($button); ?>">
				  </div>
				 </div>
			</div>
		</form>
		<a href="index.php" class="back"><img src="img/back.png"/></a>
	</div>
	
  </body>
  
  <script src="js/chosen.jquery.js" type="text/javascript"></script>
  <script src="js/init.js" type="text/javascript" ></script>
  
</html>
