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
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<script src="css/swiper-bundle.min.js"></script>
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

.hidden {
  opacity: 0;
  transition: all 0.5s linear;
}
.swiper-slide-active .text1 {opacity:1;}
.swiper-slide-active .text2 {opacity:1;}
.swiper-slide-active .text3 {opacity:1;}
.swiper-slide-active .text4 {opacity:1;}
.swiper-slide-active .text5 {opacity:1;}
.swiper-slide-active .text6 {opacity:1;}
.swiper-slide-active .text7 {opacity:1;}
.swiper-slide-active .text8 {opacity:1;}
.swiper-slide-active .text9 {opacity:1;}
.swiper-slide-active .text10 {opacity:1;}

.ere1 {position:relative;width:100%; background: linear-gradient(to left, transparent, #29BBE0);border: 2px solid transparent;border-image: linear-gradient(to right, #29BBE0 , #29BBE0);-moz-border-image: -moz-linear-gradient(to right, #29BBE0 , #29BBE0);-webkit-border-image: -webkit-linear-gradient(to right, #29BBE0 , #29BBE0);border-image-slice: 1;margin:0 auto;}
.ere2 {position:relative;width:80%; background: linear-gradient(to left, transparent, #29BBE0);border: 2px solid transparent;border-image: linear-gradient(to right, #29BBE0 , #29BBE0);-moz-border-image: -moz-linear-gradient(to right, #29BBE0 , #29BBE0);-webkit-border-image: -webkit-linear-gradient(to right, #29BBE0 , #29BBE0);border-image-slice: 1;margin:4% auto;}

.text1, .text2, .text3, .text4, .text5, .text6, .text7, .text8, .text9, .text10 {color:white;font-size:18px;text-align:center;position:relative;transition: all 0.5s linear 0.5s;}
.znachenie-to {text-align:center;color:white;font-size:60px;margin:15%;}
.znachenie {color:white;font-size:24px;text-align:center;position:relative;top:50px;}
</style>

<body style="background-image: url(img/fon.png);">
<div class="name"><h1>Расчёт стоимости ТО</h1><?php echo "<h2>Комплектация: <span style='color:#34f6ff;'>".$result_row["kompl"]."</span></h2>";?></div>
<a class="back" href="../menu.php"><img width="20px;" src="../img/backback.png"/></a>


<!--
<form id="form"  style="text-align:center;z-index:999" action="" method="post">
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
-->
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


<div class="ossss" style="width:95%;position:relative;height:100%;margin: 0 auto;">
<?php

try{
			$client = new SoapClient('https://web-1c.kamaz.ru/wsGOA/ws/CarInfo?wsdl', array('login' => "WSUserCarInfo", 'password'  => "CarInfo2018", "exceptions"=>1));  
			
			$VINTC = 'XTC651154F1330482';
			
			$result = $client->SendInfo(array( 'VINTC' => $VINTC));
			$xml_request = $result->return;
			if($xml_request != ''){
				$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>'.$xml_request );
				echo "<div style='width:40%;float:left;'>";
				echo "<div style='width:50%;float:left;'>";
				echo "<p style='color:white;font-size:20px;'>ПОДБОР ТО</p>";
				echo "<p class='raschet-to-2'>Дата производства</p>";
				echo "<p class='raschet-to-2'>Назначенная категория эксплуатации</p>";
				echo "</div>";
				echo "<div style='width:50%;float:left;'>";
				echo "<p style='color:white;font-size:20px;'>NJ</p>";
				
				foreach($xml as $prop => $row){
					foreach($row as $znach => $value1){
						foreach($value1 as $option => $rad){
	
					
					echo "<p style='color:white;font-size:20px;'>"; echo ($rad -> Value[13]); echo "</p>";
					
				}}}
				
					 
				}echo "</div>";echo "</div>";
	
			unset($client);
		}catch (SoapFault $s){
			die('ERROR: [' . $s->faultcode . '] ' . $s->faultstring);
		}catch (Exception $e){
			die('ERROR: ' . $e->getMessage());
		}
?>
<!--
	<div style="width:40%;float:left;">
		<p style="color:white;font-size:20px;">ПОДБОР ТО</p>
		<p class="raschet-to-2">Дата производства</p>
		<p class="raschet-to-2">Назначенная категория эксплуатации</p>
		<p class="raschet-to-2">Дата последнего ТО (пробег)</p>
		<p class="raschet-to-2">Назначенный межсервисный интервал</p>
		<p class="raschet-to-2">Текущий пробег</p>
		<p class="raschet-to-2">Текущие моточасы</p>
		<div style="position:relative;float:left;height:100%;width:100%">
			<div style="width:50%;position:relative;float:left;">
				<p style="color:white;font-size:16px;text-align:center;">Данные заполнены с телематики</p>
			</div>
			<div style="width:50%;position:relative;float:left;">
				<img style="" width="30%" src="img/active.png"/>
			</div>
		</div>
	</div>
-->
<div style="width:50%;float:left;margin-top:7%;">
	<section class="swiper-container">
    <div class="swiper-wrapper">
        <div id="a1" class="swiper-slide">
            <div class="swiper-content ere1">
					<p class="swiper-title znachenie-to" data-swiper-parallax="1%" data-swiper-parallax-scale=".7">ТО2500</p><br>
			</div>
			<div class="ere2">
					<p class='text1 hidden'><?php echo (round($sum, 0)+($result_row["$kat"]*2000))*1.2; echo " ₽";?> - <?php echo (round($sum, 0)+($result_row["$kat"]*3000))*1.2; echo " ₽";?></p>
			</div>
			<div class="ere2">
					<p class='text1 hidden'><?php echo ($Akat-$probeg)-(($Akat-$probeg)*0.1);echo " км.";?> - <?php echo ($Akat-$probeg)+(($Akat-$probeg)*0.1); echo " км.";?></p>
			</div>
        </div>
        <div id="a2" class="swiper-slide">
            <div class="swiper-content ere1">
					<p class="swiper-title znachenie-to" data-swiper-parallax="1%" data-swiper-parallax-scale=".7">ПТО</p><br>
			</div>
			<div class="ere2">
					<p class='text2 hidden'>1</p>
			</div>
			<div class="ere2">
					<p class='text2 hidden'>2</p>
			</div>
        </div>
    </div>
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
	<div class="swiper-pagination"></div>
</section>
	</div>


</div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</html>
<script>
var sliderSelector = '.swiper-container',
options = {
    init: false,
    loop: false,
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides : true,
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 100,
        stretch: 120,
        depth: 60,
        modifier: 1,
        slideShadows : true,
    },
    grabCursor: false,
    parallax: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 0
        },
        767: {
            slidesPerView: 2,
            spaceBetween: -80
        }        
        }
};
var mySwiper = new Swiper(sliderSelector, options);
mySwiper.init();
</script>
<script>
function check() {
  if ($('#service').val() != '')     $('.func').removeAttr('disabled');   else
    $('.func').attr('disabled','disable'); }

</script>






