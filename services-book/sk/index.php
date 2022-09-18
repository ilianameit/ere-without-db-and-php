<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';


$lang = $_SESSION['LN'];

$sql2 = "SELECT * FROM page_sk where LN = '$lang' -- ";
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
	<link rel="shortcut icon" href="../../../img/favicon.png" type="image/x-icon">
	<link rel="icon" href="../../../img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../../../css/menu.css">
<title><?php echo htmlspecialchars($r2['title'], ENT_QUOTES, 'UTF-8') ?></title>

</head>
<body class='docframe'>
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

try {
	$kompl = $_COOKIE['Coockie-kompl'];
	$lang = $_SESSION['LN'];
	$sql = "SELECT * FROM skkompl INNER JOIN skrazdel ON skkompl.idsk = skrazdel.id WHERE kompl = '$kompl' AND LN = '$lang' -- ";
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
				".( !empty($rw1['vp']) ? "<li><button class='btn'  name='name' id='b1'><p>".htmlspecialchars($r2['r1'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['predpp']) ? "<li><button class='btn'  name='name' id='b2'><p>".htmlspecialchars($r2['r2'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['ga']) ? "<li><button class='btn'  name='name' id='b3'><p>".htmlspecialchars($r2['r3'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				
				".( !empty($rw1['vidto']) ? "<li><button class='btn'  name='name' id='b4'><p>".htmlspecialchars($r2['r4'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['kp']) ? "<li><button class='btn'  name='name' id='b5'><p>".htmlspecialchars($r2['r5'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['grafto']) ? "<li><button class='btn'  name='name' id='b6'><p>".htmlspecialchars($r2['r6'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				
				".( !empty($rw1['pwork']) ? "<li><button class='btn'  name='name' id='b7'><p>".htmlspecialchars($r2['r7'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				".( !empty($rw1['spisok']) ? "<li><button class='btn'  name='name' id='b8'><p>".htmlspecialchars($r2['r8'], ENT_QUOTES, 'UTF-8')."</p></button></li>" : "" )."
				</ul>
			</div>
			<input type='checkbox' name='chacor' id='chacor2' />
			<label for='chacor2'>".htmlspecialchars($r2['vkl'], ENT_QUOTES, 'UTF-8')."</label>
			<div class='acor-body'>
				<ul class='countlist'>
					".( !empty($rw1['vkl1']) ? "<li><button class='btn'  name='name' id='vk1'><p>".str_replace("-", " ", $rw1['vkl1'])."</p></button></li>" : "" )."
					".( !empty($rw1['vkl2']) ? "<li><button class='btn'  name='name' id='vk2'><p>".str_replace("-", " ", $rw1['vkl2'])."</p></button></li>" : "" )."
					".( !empty($rw1['vkl3']) ? "<li><button class='btn'  name='name' id='vk3'><p>".str_replace("-", " ", $rw1['vkl3'])."</p></button></li>" : "" )."
					".( !empty($rw1['vkl4']) ? "<li><button class='btn'  name='name' id='vk4'><p>".str_replace("-", " ", $rw1['vkl4'])."</p></button></li>" : "" )."
				</ul>
			</div>
			
		</div>
	</div>	
	<div id='btn-open-preview'><div></div></div>
	";

echo "<div id='doc-frame' ><iframe  width='100%' height='100%' style='border:none;' allowtransparency src='".$search."' #zoom=160></iframe></div>";


$format=str_replace('s-b/','', $search);
$str=strpos($format, "/");
$dir=substr($format, 0, $str);

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
$(document).ready(function() {$("#b1").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ){echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['vp']."";}  else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["vp"]."";}?>");});});

$(document).ready(function() {$("#b2").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['predpp']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["predpp"]."";}?>");});});

$(document).ready(function() {$("#b3").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['ga']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["ga"]."";}?>");});});

$(document).ready(function() {$("#b4").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['vidto']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["vidto"]."";}?>");});});

$(document).ready(function() {$("#b5").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['kp']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["kp"]."";}?>");});});

$(document).ready(function() {$("#b6").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['grafto']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["grafto"]."";}?>");});});

$(document).ready(function() {$("#b7").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['pwork']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["pwork"]."";}?>");});});

$(document).ready(function() {$("#b8").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['spisok']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["spisok"]."";}?>");});});

//vkladish
$(document).ready(function() {$("#vk1").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['vkl1']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["vkl1"]."";}?>");});});

$(document).ready(function() {$("#vk2").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['vkl2']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["vkl2"]."";}?>");});});

$(document).ready(function() {$("#vk3").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['vkl3']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["vkl3"]."";}?>");});});

$(document).ready(function() {$("#vk4").on('click', function(){$("#doc-frame iframe").attr("src","<?php if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {echo "s-b/".$dir."/".$rw1['LN']."/".$rw1['vkl4']."";} else {echo "/services-book/pdfjs/web/viewer.html?file=/services-book/sk/s-b/".$dir."/".$rw1["LN"]."/".$rw1["vkl4"]."";}?>");});});

</script>

</html>