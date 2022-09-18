<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';


if (!empty($_POST['search'])) {
	
	$search = $_POST['search'];
 
	$sth = $pdo->query("SELECT kompl, idere FROM erekompl where kompl LIKE '$search%'");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
} 
else {
	
	$sth = $pdo->query("SELECT kompl, idere FROM erekompl");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);

}
	
	if ($result) {
		?>
			

				<?php foreach ($result as $row): ?>
				<form action="" method="post">
					<div  class="line-kr">
						  <div ><?php echo $row['kompl']; ?></div>
						  <div ><?php echo $row['idere']; ?></div>
						  <div ><input type="hidden" name="id" value="<?php echo $row['idere']; ?>"><input type="submit" name="action" value="Edit"></div>
						  <!-- <input type="submit" name="action" value="Delete"> -->
					</div>
				</form>
				<?php endforeach; ?>
			
			
		
		<?php
	}

?>