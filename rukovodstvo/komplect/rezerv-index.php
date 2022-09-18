<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

$lang = $_SESSION['LN'];
$sql2 = "SELECT * FROM page_ere where LN = '$lang' -- ";
		$statement2 = $pdo->prepare($sql2);
		$statement2->execute();
		$res2 = $statement2->fetchAll();
		foreach ($res2 as $r2) {}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../../css/ruk.css">
<title><?php echo htmlspecialchars($r2['title'], ENT_QUOTES, 'UTF-8') ?></title>
<style>
html 
{
 overflow: auto;
}
body{
background-image: none;
background-color: white;
}
html, body, div, iframe 
{
color:black;
font-family: Verdana, sans-serif; 
font-size:22px;
 margin: 0px; 
 padding: 0px; 
 height: 100%; 
 border: none;
}
iframe 
{
 display: block; 
 width: 100%; 
 border: none; 
 overflow-y: auto; 
 overflow-x: hidden;
}
.btn{
font-family: Verdana, sans-serif; 
}
    </style>
</head>
<body>
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

 
try {
	$kompl = $_COOKIE['Coockie-kompl'];
	$lang = $_SESSION['LN'];
	$sql = "SELECT * FROM erekompl INNER JOIN ererazdel ON erekompl.idere = ererazdel.id WHERE kompl = '$kompl' AND LN = '$lang' -- ";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $res1 = $statement->fetchAll();

    foreach ($res1 as $rw1) {
		
    }
	
if(isset($_POST['name'])) {
	$search = $_POST['name'];
}
echo "
	<div id='preview-docs'  >
		<div class='acor-container read'>
		<input type='checkbox' name='chacor' id='chacor1'/>
			<label for='chacor1'>".htmlspecialchars($r2['razdel'], ENT_QUOTES, 'UTF-8')."</label>
			<div class='acor-body'>
				<ul class='countlist'>
				".( !empty($rw1['vv']) ? "<li><button class='btn'  name='name' id='b1'><p>".htmlspecialchars($r2['r1'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['ep']) ? "<li><button class='btn'  name='name' id='b2'><p>".htmlspecialchars($r2['r2'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['ks']) ? "<li><button class='btn'  name='name' id='b3'><p>".htmlspecialchars($r2['r3'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['ea']) ? "<li><button class='btn'  name='name' id='b4'><p>".htmlspecialchars($r2['r4'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['eax']) ? "<li><button class='btn'  name='name' id='b5'><p>".htmlspecialchars($r2['r5'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['tho']) ? "<li><button class='btn'  name='name' id='b6'><p>".htmlspecialchars($r2['r6'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['vn']) ? "<li><button class='btn'  name='name' id='b7'><p>".htmlspecialchars($r2['r7'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['xa']) ? "<li><button class='btn'  name='name' id='b8'><p>".htmlspecialchars($r2['r8'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['ta']) ? "<li><button class='btn'  name='name' id='b9'><p>".htmlspecialchars($r2['r9'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['ga']) ? "<li><button class='btn'  name='name' id='b10'><p>".htmlspecialchars($r2['r10'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['yt']) ? "<li><button class='btn'  name='name' id='b11'><p>".htmlspecialchars($r2['r11'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				</ul>
			</div>
			
				<input type='checkbox' name='chacor' id='chacor2' />
			<label for='chacor2'>".htmlspecialchars($r2['pril'], ENT_QUOTES, 'UTF-8')."</label>
			<div class='acor-body'>
				<ul class='countlist'>
				".( !empty($rw1['pril1'])  ? "<li><button id='p1' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril1'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril2'])  ? "<li><button id='p2' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril2'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril3'])  ? "<li><button id='p3' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril3'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril4'])  ? "<li><button id='p4' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril4'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril5'])  ? "<li><button id='p5' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril5'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril6'])  ? "<li><button id='p6' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril6'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril7'])  ? "<li><button id='p7' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril7'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril8'])  ? "<li><button id='p8' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril8'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril9'])  ? "<li><button id='p9' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril9'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril10'])  ? "<li><button id='p10' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril10'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril11'])  ? "<li><button id='p11' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril11'])."</p></button></li>" : "" )."
				".( !empty($rw1['pril12'])  ? "<li><button id='p12' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['pril12'])."</p></button></li>" : "" )."
				</ul>
			</div>
			
				<input type='checkbox' name='chacor' id='chacor3' />
			<label for='chacor3'>".htmlspecialchars($r2['dop'], ENT_QUOTES, 'UTF-8')."</label>
			<div class='acor-body'>
				<ul class='countlist'>
				".( !empty($rw1['dop1'])  ? "<li><button id='d1' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop1'])."</p></button></li>" : "" )."
				".( !empty($rw1['dop2'])  ? "<li><button id='d2' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop2'])."</p></button></li>" : "" )."
				".( !empty($rw1['dop3'])  ? "<li><button id='d3' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop3'])."</p></button></li>" : "" )."
				".( !empty($rw1['dop4'])  ? "<li><button id='d4' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop4'])."</p></button></li>" : "" )."
				".( !empty($rw1['dop5'])  ? "<li><button id='d5' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop5'])."</p></button></li>" : "" )."
				".( !empty($rw1['dop6'])  ? "<li><button id='d6' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop6'])."</p></button></li>" : "" )."
				".( !empty($rw1['dop7'])  ? "<li><button id='d7' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop7'])."</p></button></li>" : "" )."
				".( !empty($rw1['dop8'])  ? "<li><button id='d8' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop8'])."</p></button></li>" : "" )."
				".( !empty($rw1['dop9'])  ? "<li><button id='d9' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop9'])."</p></button></li>" : "" )."
				".( !empty($rw1['dop10'])  ? "<li><button id='d10' class='btn'  name='name' ><span></span><p>".str_replace("-", " ", $rw1['dop10'])."</p></button></li>" : "" )."
				</ul>
			</div>
		</div>
	</div>	
	<div id='btn-open-preview'><div></div></div>
	";

echo "<div id='doc-frame' ><iframe  width='100%' height='100%' style='border:none;' allowtransparency src=".$search."></iframe></div>";


$str=strpos($search, "/");
$dir=substr($search, 0, $str);

}
 
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
?> 

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $(".acor-container .btn").click(function () {
        $(".btn").removeClass("active");
        $(this).addClass("active");     
    });
});

</script>
<script>
$(document).ready(function() {
	$("#btn-open-preview").click(function () { 
		//$("#preview-docs").toggle(0000).toggleClass('active');
		$("#preview-docs").toggleClass('active');
		 //$("#doc-frame").css('width', '81%');

		});
});		
</script>
<script>
$(document).ready(function() {$("#b1").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['vv'];?>#zoom=160");});});
$(document).ready(function() {$("#b2").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['ep'];?>#zoom=160");});});
$(document).ready(function() {$("#b3").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['ks'];?>#zoom=160");});});
$(document).ready(function() {$("#b4").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['ea'];?>#zoom=160");});});
$(document).ready(function() {$("#b5").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['eax'];?>#zoom=160");});});
$(document).ready(function() {$("#b6").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['tho'];?>#zoom=160");});});
$(document).ready(function() {$("#b7").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['vn'];?>#zoom=160");});});
$(document).ready(function() {$("#b8").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['xa'];?>#zoom=160");});});
$(document).ready(function() {$("#b9").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['ta'];?>#zoom=160");});});
$(document).ready(function() {$("#b10").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['ga'];?>#zoom=160");});});
$(document).ready(function() {$("#b11").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['yt'];?>#zoom=160");});});

$(document).ready(function() {$("#p1").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril1'];?>#zoom=160");});});
$(document).ready(function() {$("#p2").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril2'];?>#zoom=160");});});
$(document).ready(function() {$("#p3").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril3'];?>#zoom=160");});});
$(document).ready(function() {$("#p4").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril4'];?>#zoom=160");});});
$(document).ready(function() {$("#p5").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril5'];?>#zoom=160");});});
$(document).ready(function() {$("#p6").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril6'];?>#zoom=160");});});
$(document).ready(function() {$("#p7").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril7'];?>#zoom=160");});});
$(document).ready(function() {$("#p8").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril8'];?>#zoom=160");});});
$(document).ready(function() {$("#p9").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril9'];?>#zoom=160");});});
$(document).ready(function() {$("#p10").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril10'];?>#zoom=160");});});
$(document).ready(function() {$("#p11").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril11'];?>#zoom=160");});});
$(document).ready(function() {$("#p12").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['pril12'];?>#zoom=160");});});

$(document).ready(function() {$("#d1").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop1'];?>#zoom=160");});});
$(document).ready(function() {$("#d2").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop2'];?>#zoom=160");});});
$(document).ready(function() {$("#d3").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop3'];?>#zoom=160");});});
$(document).ready(function() {$("#d4").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop4'];?>#zoom=160");});});
$(document).ready(function() {$("#d5").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop5'];?>#zoom=160");});});
$(document).ready(function() {$("#d6").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop6'];?>#zoom=160");});});
$(document).ready(function() {$("#d7").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop7'];?>#zoom=160");});});
$(document).ready(function() {$("#d8").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop8'];?>#zoom=160");});});
$(document).ready(function() {$("#d9").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop9'];?>#zoom=160");});});
$(document).ready(function() {$("#d10").on('click', function(){$("#doc-frame iframe").attr("src","<?php echo $dir;?>/<?php echo $rw1['LN'];?>/<?php echo $rw1['dop10'];?>#zoom=160");});});
</script>

</html>
