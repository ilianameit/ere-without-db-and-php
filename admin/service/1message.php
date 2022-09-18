<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
	
if (!empty($_POST['choice'])) {
	
	$choice = $_POST['choice'];

}	
	
try {
	
	$sql = "SELECT * FROM infomessage inner join infovin ON infomessage.id = infovin.mnomer inner join sap ON infovin.vin = sap.VIN_SAP WHERE mnomer='$choice'";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
	
} 
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
	
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
	<link rel="icon" href="../../img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../../css/admin.css">
  </head>
  <body>
     <a class="back" href="../"></a>
	<div class="heading">
		<!--<h1>Рабочее место сервесного центра</h1>-->
		<p class="m-0 num-mess">Письмо:<span><?php echo $choice; ?></span></p>
	</div>
	
	<form action="">
	<div class="workspace-btn">
	<button class="origin-doc" >Оригинал документа<span></span></button>
	<button class="instruc" >Инструкция по доработке<span></span></button>
	<div class="save-changes" id="save-changes">Сохранить<span></span></div>
	</div>
	</form>
	<div class="cont-services">
		<div class="head-mess">
			<?php foreach ($result_array as $result_row): ?>
				<?php echo "<div>".$result_row['vin']."";?><input type='checkbox' name='stata' value="<?php echo $result_row['stata'];?>" <?php if ($result_row['stata'] == 1) { echo "checked='checked'"; } ?>/><?php echo "</div>";?>
			<?php endforeach; ?>
		</div>

		

		<div class="content-mess" >
			<div class="info-mess">
				<div class="head">
					<h3><strong><?php echo $result_row['nazvanie']; ?></strong></h3>
					<form action="">
					<div class="check"><label for="1234"><input type="checkbox"
					  name="" value="" id="1234"><div>Выполнено</div></label></div>
					  </form>
				</div>
			</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';		
try {
	
	$sql = "SELECT DISTINCT DrwNum FROM sap INNER JOIN infovin ON infovin.vin = sap.VIN_SAP  WHERE mnomer='$choice'";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} 
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
?>
			<div class="list-work">
				<div>
					<div class="h-left"><p>Модель автотехники</p></div>
						<?php foreach ($result as $row): ?>
							<?php echo "<div><p>".$row['DrwNum']."</p></div>&emsp;";?>
						<?php endforeach; ?>
				</div>
				<div>
					<div class="h-left"><p>Сообщение распростроняется на</p></div>
					<?php echo "<div><p>".$result_row['rasprostranenie']."</p></div>";?>
				</div>
				<div>
					<div class="h-left"><p>Причина доработки</p></div>
					<?php echo "<div><p>".$result_row['dorabotka']."</p></div>";?>
				</div>
				<div>
					<div class="h-left"><p>Код операции</p></div>
					<?php echo "<div><p>".$result_row['codoper']."</p></div>";?>
				</div>
				<div>
					<div class="h-left"><p>Наименование операции</p></div>
					<?php echo "<div><p>".$result_row['nameoper']."</p></div>";?>
				</div>
				<div>
					<div class="h-left"><p>Трудоемкость</p></div>
					<?php echo "<div><p>".$result_row['work']."</p></div>";?>
				</div>
				<div>
					<div class="h-left"><p>Затраты по доработке относить на</p></div>
					<?php echo "<div><p>".$result_row['zatrat']."</p></div>";?>
				</div>
				
				<div>
					<p><strong>Детали, необходимые для проведения доработки, на 1 м/к</strong></p>
				</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';		
try {
	
	$sql = "SELECT * FROM infomessage INNER JOIN infomaterial ON infomessage.nomer = infomaterial.mnomer WHERE nomer='$choice'";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $tablo = $statement->fetchAll();
} 
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}


?>

						

			</div>
			<div id="zapchast">
				<div class="head-zapch	white-border">
					<div class="w-10">№<br>п/п</div>
					<div class="w-40">Каталожный номер запчасной части</div>
					<div class="w-40">Наименование запасной части</div>
					<div class="w-10">Кол-во</div>
				</div>
				<div class="perechen">
						<?php $No = 0; foreach ($tablo as $poz): $No++;?>
							<?php echo "<div class='perech-line'>"; ?>
							<?php echo "<div class='w-10'>$No</div>";?>
							<?php echo "<div class='w-40' tabindex='0'>".$poz['numberzch']."</div>";?>
							<?php echo "<div class='w-40' tabindex='0'>".$poz['namezch']."</div>";?>
							<?php echo "<div class='w-10'>".$poz['ves']."</div>";?>
							<?php echo "</div>";?>
						<?php endforeach; ?>			
				</div>
			</div>
		</div>
	</div>
		
	<div class="modal-win" id="mod-wind-save">
		<div class="window" >
			<a href="#" class="close-window"></a>
			<h3>Внимание</h3>
			<div class="p">
				<p>Вы собираетесь внести изменения. Данное действие нельзя отменить.</p>
				<p>Сохранить изменения?</p>
			</div>
			<div class="buttons">
				<div class="save-ch"><input  type="" value="Сохранить"></div>
				<div class="close-window otmena"><input  type="" value="Отмена"></div>	
			</div>
		</div>
	</div>	
		
	<div class="modal-win" id="mod-wind-wout-save">	
		<div class="window" >
			<a href="#" class="close-window"></a>
			<h3>Внимание</h3>
			<div class="p">
				<p>Вы собираетесь внести изменения. Данное действие нельзя отменить.</p>
				<p>Сохранить изменения?</p>
			</div>
			<div class="buttons">
				<div class="save-ch"><input  type="" value="Сохранить"></div>
				<div class="wout-save"><a href="index.html" >Выйти без сохранения</a></div>
				<div class="close-window otmena"><input  type="" value="Отмена"></div>
			</div>
		</div>
	</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>

$(document).ready(function(){
    $(".head-mess div").click(function () {
        $(".head-mess div").removeClass("active"); 
        $(this).addClass("active");     
    });
});

</script>

<script>
$(document).ready(function(){
	 $('#save-changes').click(function(){ 
		$('#mod-wind-save').addClass("active"); 
	}); 
	
	$('a.back').click(function(){ 
		$('#mod-wind-wout-save').addClass("active"); 
	});  

	$('.modal-win .window .close-window').click(function(){ 
		$('.modal-win').removeClass("active"); 
	});  
	 
});

</script>

  </body>
</html>
