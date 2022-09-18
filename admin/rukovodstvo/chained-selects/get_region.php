<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
 
require_once("db.php");


 $sql = "SELECT * FROM erekompl WHERE idere = '".$_POST["country"]."' ";
    // Подготовка запроса
    $statement = $pdo->prepare($sql);
    // Выполняем запрос
    $statement->execute();
    // Получаем массив строк 
    $result_array = $statement->fetchAll();
	
   echo"<option value=''>Выберите комплектации</option>";

	foreach ($result_array as $result_row) { 
	echo ' <option value="'.$result_row['kompl'].'">'.$result_row['kompl'].'</option>';
}

}

?>
