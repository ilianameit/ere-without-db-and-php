<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';


try {

if(isset($_POST['probeg'])) {
	$probeg = $_POST['probeg'];
	}


	if(isset($_POST['search_btn'])) {
	$kat = $_POST['search_btn'];
	}
	

	$search = $_COOKIE['Coockie'];
	$kompl = $_COOKIE['Coockie-kompl'];


// РАСЧЁТ

	$sql = "SELECT * FROM `proba-to2500` where kompl = '$kompl'";  // $sql = "SELECT * FROM `proba-to2500`"; 65801-0000001-T5
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
	
	$sum = 0;
	
    foreach ($result_array as $result_row) {
		
		$sum += ((float)$result_row['cost']/(float)$result_row['ed-izm'])*(float)$result_row["$kat"];
    }




}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
?> 
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <?php echo "<title>Комплектация: ".$result_row["kompl"]."</title>";?>
</head>
<style>

button {font-size: 32px;background-color: transparent;color:#929191;cursor:pointer;-webkit-transform: skewX(-15deg); -webkit-transition-duration: 0.4s;transition-duration: 0.4s;border: 2px solid #439396;border-top:none;padding:15px;float:left;}
button:hover {color: #34f6ff;background-color: rgba(52, 246, 255, 0.5);border-left: 2px solid #34f6ff;border-right: 2px solid #34f6ff;}
.btn-group {display: inline-block;}
button {outline: none !important;}
.active {color:red;}


</style>

<body style="background-image: none;">
<div class="name"><h1>Расчёт стоимости ТО</h1><?php echo "<h2>Комплектация: <span style='color:#34f6ff;'>".$result_row["kompl"]."</span></h2>";?></div>
<a class="back" href="../menu.php"><img width="20px;" src="../img/backback.png"/></a>

<form  style="text-align:center;z-index:999" action="" method="post">
<div class="btn-group"><?php echo "<p style='color:white'> $probeg км</p>"; ?>
<input type="text" onkeyup="check();" id="zagol" name="probeg"><br><br><br>
<button class="func 1f left-bord" name="search_btn" value="to2500">ТО2500</button>
<button class="func 2f" name="search_btn" value="pto" >ПТО</button>
<button class="func 3f" name="search_btn" value="2to" >2ТО</button>
<button class="func 4f" name="search_btn" value="3to" >3ТО</button>
<button class="func 5f" name="search_btn" value="1raz-god" >1раз в год</button>
<button class="func 6f" name="search_btn" value="1raz-2goda" >1 раз в 2 года</button>
<button class="func 7f" name="search_btn" value="1raz-3goda" >1 раз в 3 года</button>
<button class="func 8f right-bord" name="search_btn" value="sto" >СТО</button>
</div>
</form>

<?php 
// Определение пробега
	
	$sql = "SELECT * FROM `porba-probeg` WHERE kompl='$kompl' AND Akat >= '$probeg' LIMIT 1"; 
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
	foreach ($result_array as $result_row) {
	}
	$to2500 = $result_row["to2500"];
	$pto = $result_row["pto"];
	$to2 = $result_row["2to"];
	$to3 = $result_row["3to"];
	$raz1 = $result_row["1raz-god"];
	$raz2 = $result_row["1raz-2goda"];
	$raz3 = $result_row["1raz-3goda"];
	$sto = $result_row["sto"];
	$Akat = $result_row["Akat"];
	
	
	$sql = "SELECT * FROM `proba-to2500` where kompl = '$kompl'";  // $sql = "SELECT * FROM `proba-to2500`"; 65801-0000001-T5
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
	
	$sum = 0;
	
    foreach ($result_array as $result_row) {
		
		//  $sum += (((float)$result_row['cost']/(float)$result_row['ed-izm'])*(float)$to2500)+(((float)$result_row['cost']/(float)$result_row['ed-izm'])*(float)$pto)+(((float)$result_row['cost']/(float)$result_row['ed-izm'])*(float)$to2)+(((float)$result_row['cost']/(float)$result_row['ed-izm'])*(float)$to3);
		  $sum += (((float)$result_row['cost']/(float)$result_row['ed-izm'])*(float)$result_row["$to2500"])+(((float)$result_row['cost']/(float)$result_row['ed-izm'])*(float)$result_row["$pto"])+(((float)$result_row['cost']/(float)$result_row['ed-izm'])*(float)$result_row["$to2"])+(((float)$result_row['cost']/(float)$result_row['ed-izm'])*(float)$result_row["$to3"]);
    }
?>

<?php 
// Трудоёмкость

$sql = "SELECT * FROM vinkom NATURAL JOIN proba where VIN LIKE '$search'";  
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
	foreach ($result_array as $result_row) {
    }
?>
<div class="ossss" style="width:90%;margin: 0 auto;">

	<div class="raschet-image">
	</div>
<?php
	echo "<div align='center' class='raschet-block'>";
	echo "<p class='raschet-to'>Через ~";echo ($Akat-$probeg);echo "км. необходимо пройти техобслуживание:</p>";
	echo "<p class='raschet-to'>Минимальная &nbsp; ориентировочная стоимость ТО: <span style='color:#34f6ff;margin-left:3%;'>";echo (round($sum, 0)+(($result_row["$to2500"]*2000)+($result_row["$pto"]*2000)+($result_row["$to2"]*2000)+($result_row["$to3"]*2000)))*1.2;echo ' ₽</span></p>';
	echo "<p class='raschet-to'>Максимальная ориентировочная стоимость ТО: <span style='color:#34f6ff;margin-left:3%;'>";echo (round($sum, 0)+(($result_row["$to2500"]*3000)+($result_row["$pto"]*3000)+($result_row["$to2"]*3000)+($result_row["$to3"]*3000)))*1.2;echo ' ₽</span></p>';
//	echo $result_row["$kat"];echo ' трудоемкость для проверки';
	echo "<p class='raschet-to-2'>Стоимость расчитана<span style='color:#34f6ff;margin-left:3%;'>без учета мойки</span></p>";
	echo "<p class='raschet-to-2'>Стоимость расчитана<span style='color:#34f6ff;margin-left:3%;'>без учета НДС</span></p>";
	echo '</div>';
?>

</div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</html>

<script>
function check() {
  if ($('#service').val() != '')     $('.func').removeAttr('disabled');   else
    $('.func').attr('disabled','disable'); }

</script>






