<!DOCTYPE html>
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
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<script src="css/swiper-bundle.min.js"></script>
	<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <?php echo "<title>Комплектация: ".$result_row["kompl"]."</title>";?>
</head>

<body id="rsto">
<div class="heading">
	<h1>Расчёт стоимости ТО</h1>
	<?php echo "<p>Комплектация: <span>".$result_row["kompl"]."</span></p>";?>
</div>
<a class="back" href="../menu.php"></a>

<!--

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
<div class="main_to">
	<div class="left">
		<p class="p-head">Подбор ТО:</p>
		<div class="raschet-to-2"><p>Дата производства</p><p class="val">10.12.2021</p></div>
		<div class="raschet-to-2"><p>Назначенная категория эксплуатации</p><p class="val">II</p></div>
		<div class="raschet-to-2"><p>Дата последнего ТО (пробег)</p><p class="val">19.03.2015 (95000 km.)</p></div>
		<div class="raschet-to-2"><p>Назначенный межсервисный интервал</p><p class="val">10600</p></div>
		<div class="raschet-to-2"><p>Текущий пробег</p><p class="val">100000</p></div>
		<div class="raschet-to-2"><p>Текущие моточасы</p><p class="val">100</p></div>
		<div style="display:none;" class="raschet-to-2"><p>Текущий пробег</p><input class="val" placeholder="введите данные" type="text" name="" id="probeg" value=""></div>
		<div style="display:none;" class="raschet-to-2"><p>Текущие моточасы</p><input class="val" placeholder="введите данные" type="text" name="" id="motoh" value=""></div>
				
		<div  class="telematika">
			<div class="p-head" >
				<p>Данные заполнены с телематики</p>
			</div>
			<div class="status_ico">
				<img src="../img/rsto-active.png"/>
				 <!--<img src="../img/rsto-no-active.png"/> -->
			</div>
		</div>
		
		<div class="yznat-stoim">
			<p class="border">Узнать стоимость ТО</p>
			<p class='poyasn'>Стоимость зависит от региона проведения работ и стоимости нормо-часа.</p>
		</div>
		
	</div>
	
<div class="right" >
	<section class="swiper-container rsto">
    <div class="swiper-wrapper">
        <div id="a1" class="swiper-slide">
            <div class="swiper-content ere1">
					<p class="swiper-title znachenie-to" data-swiper-parallax="1%" data-swiper-parallax-scale=".7">ТО2500</p><br>
			</div>
			<div class="ere2">
					<p class='text1 hidden'>1</p>
			</div>
			<div class="ere2">
					<p class='text1 hidden'>2</p>
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
		<div id="a3" class="swiper-slide">
            <div class="swiper-content ere1">
					<p class="swiper-title znachenie-to" data-swiper-parallax="1%" data-swiper-parallax-scale=".7">2ТО</p><br>
			</div>
			<div class="ere2">
					<p class='text2 hidden'>1</p>
			</div>
			<div class="ere2">
					<p class='text2 hidden'>2</p>
			</div>
        </div>
		<div id="a4" class="swiper-slide">
            <div class="swiper-content ere1">
					<p class="swiper-title znachenie-to" data-swiper-parallax="1%" data-swiper-parallax-scale=".7">3ТО</p><br>
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
	
	<div id="inter-ser">Межсервисный интервал</div>
	<div class="swiper-pagination"></div>
</section>
	</div>


</div>
<div class="stoim">
			<p class=sum>Итог: <span>1800-2600</span> руб.*</p>
			<p class="poyasn-sum">Стоимость рассчитана без учета мойки и НДС.</p>
</div>	


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</html>
<script>
var sliderSelector = '.swiper-container',
options = {
	variableWidth: true,
   init: false,
    loop: false,
   speed: 800,
    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides : true,
     effect: 'coverflow',
    coverflowEffect: {
        rotate: 50,
       stretch: 0,
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
            spaceBetween: 100 
        },
        761: {
            slidesPerView: 2,
            spaceBetween: 50
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






