<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

//if(isset($_POST['service'])) {
	//$service = $_POST['service'];
	//}

try {
	if(isset($_POST['search_btn'])) {
	$kat = $_POST['search_btn'];
	}
	
	
	$search = $_COOKIE['Coockie'];
	$kompl = $_COOKIE['Coockie-kompl'];
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

$sql = "SELECT * FROM vinkom NATURAL JOIN proba where VIN LIKE '$search'";  
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
	foreach ($result_array as $result_row) {
		
		
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
<a class="back" href="../menu.php"></a>

<form  style="text-align:center;z-index:999" action="" method="post">
<div class="btn-group">
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


<div class="ossss" style="width:90%;margin: 0 auto;">

	<div class="raschet-image">
	</div>
<?php
	echo "<div align='center' class='raschet-block'>";
	echo "<p class='raschet-to'>Минимальная &nbsp; ориентировочная стоимость ТО: <span style='color:#34f6ff;margin-left:3%;'>";echo (round($sum, 0)+($result_row["$kat"]*2000))*1.2;echo ' ₽</span></p>';
	echo "<p class='raschet-to'>Максимальная ориентировочная стоимость ТО: <span style='color:#34f6ff;margin-left:3%;'>";echo (round($sum, 0)+($result_row["$kat"]*3000))*1.2;echo ' ₽</span></p>';
//	echo $result_row["$kat"];echo ' трудоемкость для проверки';
	echo "<p class='raschet-to-2'>Стоимость расчитана<span style='color:#34f6ff;margin-left:3%;'>без учета мойки</span></p>";
	echo "<p class='raschet-to-2'>Стоимость расчитана<span style='color:#34f6ff;margin-left:3%;'>без учета НДС</span></p>";
	echo '</div>';
?>

</div>



</body>
<script src="../js/js-libary.js"></script>

</html>
<!--


<label>₽</label>
<input type="text" onkeyup="check();" id="zagol" name="service"><br><br><br>



<script>
function check() {
  if ($('#service').val() != '')     $('.func').removeAttr('disabled');   else
    $('.func').attr('disabled','disable'); }

</script>




-->
