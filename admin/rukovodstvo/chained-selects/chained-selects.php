<!doctype html>
<html lang="ru">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Связанные выпадающие списки select без перезагрузки страницы, с использованием jQuery + MySQL + PHP, на примере выбора стран, регионов и городов">
<meta name=viewport content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="style.css" type="text/css" media="screen">
<script src="jquery-3.2.1.min.js"></script>
<script src="geo.js"></script>

<title>Связанные выпадающие списки select с использованием jQuery + MySQL + PHP без перезагрузки страницы</title>
</head>
<body>

<div class="container">

<div>
   <label class="prefix" for="get_country">Руководство:</label>
   <select id="get_country" name="get_country">
    <option value="">Выберите руководство</option>
    <?php
      require_once("db.php");

	  $sql = "SELECT * FROM ererazdel";
	  // Запрос на вывод записей из таблицы

    // Подготовка запроса
    $statement = $pdo->prepare($sql);
    // Выполняем запрос
    $statement->execute();
    // Получаем массив строк 
    $result_array = $statement->fetchAll();
	
	
      foreach ($result_array as $result_row) {
		  echo ' <option value="'.$result_row['id'].'">'.$result_row['id'].'</option>';
    }

    ?>
   </select>
</div>

<div id="sub_region">
    <label class="prefix" for="get_region">Комплектации:</label>
    <select id="get_region" name="get_region"></select>
</div>

<div id="sub_city">
   <label class="prefix" for="get_city">Город:</label>
   <select id="get_city" name="get_city"></select>
</div>

</div>




</body>
</html>
