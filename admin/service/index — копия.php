<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/magicquotes.inc.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

if (!userIsLoggedIn())
{
  include '../login.html.php';
  exit();
}

if (!userHasRole('Сервисник'))
{
  $error = 'Отказано в доступе. У Вас нет привилегии сервисника';
  include '../accessdenied.html.php';
  exit();
}



if (isset($_GET['savemes']))
{
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

try   
  {
  $mail = $_POST['nummail'];
	$listvin = 	 "'" .implode("','" , $_POST['checkvins']). "'";

	$sql = "UPDATE infovin SET stata = '1'  WHERE vin in ($listvin) and mnomer = '$mail'";
			$s = $pdo->prepare($sql);
			$s->execute();
	
  } catch (PDOException $e)
  {
    $error = 'Ошибка: В обновлении vin '.$mail.'';
    include 'error.html.php';
    exit();
  }


  header('Location: .');
  exit();
}





if (isset($_GET['add']))
{
  $pageTitle = 'Добавление информационного письма';
  $action = 'addform';
  $button = 'Добавить';
  
  include 'add.html.php';
  exit();
}

if (isset($_GET['addform']))
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
	
  try
  { // Письмо
  
    $status = (!empty($_POST['status'])) ? (int) $_POST['status'] : 0;
  
    $sql = 'INSERT INTO infomessage (id, nazvanie, data, rasprostranenie, dorabotka, work, zatrat, datachange, status) VALUES (:id, :nazvanie, :data, :rasprostranenie, :dorabotka, :work, :zatrat, now(), :status)';
	$s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
	$s->bindValue(':nazvanie', $_POST['nazvanie']);
	$s->bindValue(':data', $_POST['data']);
	$s->bindValue(':rasprostranenie', $_POST['rasprostranenie']);
	$s->bindValue(':dorabotka', $_POST['dorabotka']);
	$s->bindValue(':work', $_POST['work']);
	$s->bindValue(':zatrat', $_POST['zatrat']);
	$s->bindValue(':status', $status);

    $s->execute();	
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В добавлении информационного письма. Письмо с №'.$_POST['id'].' уже существует.';
    include 'error.html.php';
    exit();
  }
  
  
try
  { // материалы
    foreach($_POST['numberzch'] as $key => $numberzch) 
	{
		$namezch = $_POST['namezch'][$key];
		$ves = $_POST['ves'][$key];
		
		$sql = 'INSERT INTO infomaterial (mnomer, numberzch, namezch, ves) VALUES (:nomer, :numberzch, :namezch, :ves)';
		$s = $pdo->prepare($sql);
		$s->bindValue(':nomer', $_POST['nomer']);
		$s->bindValue(':numberzch', $numberzch);
		$s->bindValue(':namezch', $namezch);
		$s->bindValue(':ves', $ves);
		$s->execute();	
	}
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В добавлении деталей';
    include 'error.html.php';
    exit();
  }


try
  {
	$stata = (!empty($_POST['stata'])) ? (int) $_POST['stata'] : 0;
	
	$input = isset($_POST['vin'])?$_POST['vin']:"";
	$vin = explode("\n", str_replace("\r", "", $input));
	
	foreach($vin as $key => $value) 
	{
		$sql = 'INSERT INTO infovin (mnomer, vin, stata) VALUES (:nomer, "' . $value . '", "' . $stata . '")';
		$s = $pdo->prepare($sql);
		$s->bindValue(':nomer', $_POST['nomer']);
		$s->execute();
	}
	  
	  
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В добавлении VIN';
    include 'error.html.php';
    exit();
  }
  
 // ФАЙЛЫ В БД

  if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];
	
	
    $srcFileName = $_POST['id'];
	
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/info/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}

}
//КОНЕЦ ФАЙЛЫ В БД

  header('Location: .');

  exit();
}


if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

  try
  {
    $sql = 'SELECT * FROM ererazdel INNER JOIN ereizv ON ererazdel.id = ereizv.idere WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В выборке комплектации';
    include 'error.html.php';
    exit();
  }

  $row = $s->fetch();


  $pageTitle = 'Редактирование Руководства '.$row['id'].' ';
  $action = 'editform';
  $id = $row['id'];
  $vv = $row['vv'];
  $ep = $row['ep'];
  $ks = $row['ks'];
  $ea = $row['ea'];
  $eax = $row['eax'];
  $tho = $row['tho'];
  $vn = $row['vn'];
  $xa = $row['xa'];
  $ta = $row['ta'];
  $ga = $row['ga'];
  $yt = $row['yt'];
  $pril1 = $row['pril1'];
  $pril2 = $row['pril2'];
  $pril3 = $row['pril3'];
  $pril4 = $row['pril4'];
  $pril5 = $row['pril5'];
  $pril6 = $row['pril6'];
  $pril7 = $row['pril7'];
  $pril8 = $row['pril8'];
  $pril9 = $row['pril9'];
  $pril10 = $row['pril10'];
  $pril11 = $row['pril11'];
  $pril12 = $row['pril12'];
  
  $izvid = $row['izvid'];
  $izvvv = $row['izvvv'];
  $izvep = $row['izvep'];
  $izvks = $row['izvks'];
  $izvea = $row['izvea'];
  $izveax = $row['izveax'];
  $izvtho = $row['izvtho'];
  $izvvn = $row['izvvn'];
  $izvxa = $row['izvxa'];
  $izvta = $row['izvta'];
  $izvga = $row['izvga'];
  $izvyt = $row['izvyt'];
  $izvpril1 = $row['izvpril1'];
  $izvpril2 = $row['izvpril2'];
  $izvpril3 = $row['izvpril3'];
  $izvpril4 = $row['izvpril4'];
  $izvpril5 = $row['izvpril5'];
  $izvpril6 = $row['izvpril6'];
  $izvpril7 = $row['izvpril7'];
  $izvpril8 = $row['izvpril8'];
  $izvpril9 = $row['izvpril9'];
  $izvpril10 = $row['izvpril10'];
  $izvpril11 = $row['izvpril11'];
  $izvpril12 = $row['izvpril12'];
  
  $button = 'Сохранить';

  include 'edit.html.php';
  exit();
}

if (isset($_GET['editform']))
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

  try
  {
    $sql = 'UPDATE ererazdel SET
		id = :id,
		vv = :vv,
		ep = :ep,
		ks = :ks,
		ea = :ea,
		eax = :eax,
		tho = :tho,
		vn = :vn,
		xa = :xa,
		ta = :ta,
		ga = :ga,
		yt = :yt,
		pril1 = :pril1,
		pril2 = :pril2,
		pril3 = :pril3,
		pril4 = :pril4,
		pril5 = :pril5,
		pril6 = :pril6,
		pril7 = :pril7,
		pril8 = :pril8,
		pril9 = :pril9,
		pril10 = :pril10,
		pril11 = :pril11,
		pril12 = :pril12
		WHERE id=:id';
    $s = $pdo->prepare($sql);
	$s->bindValue(':id', $_POST['id']);
	$s->bindValue(':vv', $_POST['vv']);
	$s->bindValue(':ep', $_POST['ep']);
	$s->bindValue(':ks', $_POST['ks']);
	$s->bindValue(':ea', $_POST['ea']);
	$s->bindValue(':eax', $_POST['eax']);
	$s->bindValue(':tho', $_POST['tho']);
	$s->bindValue(':vn', $_POST['vn']);
	$s->bindValue(':xa', $_POST['xa']);
	$s->bindValue(':ta', $_POST['ta']);
	$s->bindValue(':ga', $_POST['ga']);
	$s->bindValue(':yt', $_POST['yt']);
	$s->bindValue(':pril1', $_POST['pril1']);
	$s->bindValue(':pril2', $_POST['pril2']);
	$s->bindValue(':pril3', $_POST['pril3']);
	$s->bindValue(':pril4', $_POST['pril4']);
	$s->bindValue(':pril5', $_POST['pril5']);
	$s->bindValue(':pril6', $_POST['pril6']);
	$s->bindValue(':pril7', $_POST['pril7']);
	$s->bindValue(':pril8', $_POST['pril8']);
	$s->bindValue(':pril9', $_POST['pril9']);
	$s->bindValue(':pril10', $_POST['pril10']);
	$s->bindValue(':pril11', $_POST['pril11']);
	$s->bindValue(':pril12', $_POST['pril12']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В обновлении руководства';
    include 'error.html.php';
    exit();
  }
  
    try
  {
    $sql = 'UPDATE ereizv SET
	izvid = :izvid,
	idere = :id,
	data = now(),
	izvvv = :izvvv,
	izvep = :izvep,
	izvks = :izvks,
	izvea = :izvea,
	izveax = :izveax,
	izvtho = :izvtho,
	izvvn = :izvvn,
	izvxa = :izvxa,
	izvta = :izvta,
	izvga = :izvga,
	izvyt = :izvyt,
	izvpril1 = :izvpril1,
	izvpril2 = :izvpril2,
	izvpril3 = :izvpril3,
	izvpril4 = :izvpril4,
	izvpril5 = :izvpril5,
	izvpril6 = :izvpril6,
	izvpril7 = :izvpril7,
	izvpril8 = :izvpril8,
	izvpril9 = :izvpril9,
	izvpril10 = :izvpril10,
	izvpril11 = :izvpril11,
	izvpril12 = :izvpril12
	WHERE idere=:id';

	$s = $pdo->prepare($sql);
    $s->bindValue(':izvid', $_POST['izvid']);
	$s->bindValue(':id', $_POST['id']);
	$s->bindValue(':izvvv', $_POST['izvvv']);
	$s->bindValue(':izvep', $_POST['izvep']);
	$s->bindValue(':izvks', $_POST['izvks']);
	$s->bindValue(':izvea', $_POST['izvea']);
	$s->bindValue(':izveax', $_POST['izveax']);
	$s->bindValue(':izvtho', $_POST['izvtho']);
	$s->bindValue(':izvvn', $_POST['izvvn']);
	$s->bindValue(':izvxa', $_POST['izvxa']);
	$s->bindValue(':izvta', $_POST['izvta']);
	$s->bindValue(':izvga', $_POST['izvga']);
	$s->bindValue(':izvyt', $_POST['izvyt']);
	$s->bindValue(':izvpril1', $_POST['izvpril1']);
	$s->bindValue(':izvpril2', $_POST['izvpril2']);
	$s->bindValue(':izvpril3', $_POST['izvpril3']);
	$s->bindValue(':izvpril4', $_POST['izvpril4']);
	$s->bindValue(':izvpril5', $_POST['izvpril5']);
	$s->bindValue(':izvpril6', $_POST['izvpril6']);
	$s->bindValue(':izvpril7', $_POST['izvpril7']);
	$s->bindValue(':izvpril8', $_POST['izvpril8']);
	$s->bindValue(':izvpril9', $_POST['izvpril9']);
	$s->bindValue(':izvpril10', $_POST['izvpril10']);
	$s->bindValue(':izvpril11', $_POST['izvpril11']);
	$s->bindValue(':izvpril12', $_POST['izvpril12']);
    $s->execute();	
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В обновлении извещения';
    include 'error.html.php';
    exit();
  }
  
 try
  {
    $sql = 'INSERT INTO erelog (email, idere, data, vvlog, eplog, kslog, ealog, eaxlog, tholog, vnlog, xalog, talog, galog, ytlog, pril1log, pril2log, pril3log, pril4log, pril5log, pril6log, pril7log, pril8log, pril9log, pril10log, pril11log, pril12log) VALUES ( :semail, :id, now(), :vv, :ep, :ks, :ea, :eax, :tho, :vn, :xa, :ta, :ga, :yt, :pril1, :pril2, :pril3, :pril4, :pril5, :pril6, :pril7, :pril8, :pril9, :pril10, :pril11, :pril12 )';
	$s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
	$s->bindValue(':vv', $_POST['vv']);
	$s->bindValue(':ep', $_POST['ep']);
	$s->bindValue(':semail', $_SESSION['email']);
	$s->bindValue(':ks', $_POST['ks']);
	$s->bindValue(':ea', $_POST['ea']);
	$s->bindValue(':eax', $_POST['eax']);
	$s->bindValue(':tho', $_POST['tho']);
	$s->bindValue(':vn', $_POST['vn']);
	$s->bindValue(':xa', $_POST['xa']);
	$s->bindValue(':ta', $_POST['ta']);
	$s->bindValue(':ga', $_POST['ga']);
	$s->bindValue(':yt', $_POST['yt']);
	$s->bindValue(':pril1', $_POST['pril1']);
	$s->bindValue(':pril2', $_POST['pril2']);
	$s->bindValue(':pril3', $_POST['pril3']);
	$s->bindValue(':pril4', $_POST['pril4']);
	$s->bindValue(':pril5', $_POST['pril5']);
	$s->bindValue(':pril6', $_POST['pril6']);
	$s->bindValue(':pril7', $_POST['pril7']);
	$s->bindValue(':pril8', $_POST['pril8']);
	$s->bindValue(':pril9', $_POST['pril9']);
	$s->bindValue(':pril10', $_POST['pril10']);
	$s->bindValue(':pril11', $_POST['pril11']);
	$s->bindValue(':pril12', $_POST['pril12']);
    $s->execute();	
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В добавлении логирования';
    include 'error.html.php';
    exit();
  } 
  
  
  // ФАЙЛЫ В БД
  if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];
	$file1 = $_FILES['attachment1'];
	$file2 = $_FILES['attachment2'];
	$file3 = $_FILES['attachment3'];
	$file4 = $_FILES['attachment4'];
	$file5 = $_FILES['attachment5'];
	$file6 = $_FILES['attachment6'];
	$file7 = $_FILES['attachment7'];
	$file8 = $_FILES['attachment8'];
	$file9 = $_FILES['attachment9'];
	$file10 = $_FILES['attachment10'];
	$file11 = $_FILES['attachment11'];
	$file12 = $_FILES['attachment12'];
	$file13 = $_FILES['attachment13'];
	$file14 = $_FILES['attachment14'];
	$file15 = $_FILES['attachment15'];
	$file16 = $_FILES['attachment16'];
	$file17 = $_FILES['attachment17'];
	$file18 = $_FILES['attachment18'];
	$file19 = $_FILES['attachment19'];
	$file20 = $_FILES['attachment20'];
	$file21 = $_FILES['attachment21'];
	$file22 = $_FILES['attachment22'];

    $srcFileName = $_POST['id'];


	
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file1['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file1['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file2['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file2['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file3['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file3['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file4['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file4['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file5['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file5['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file6['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file6['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file7['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file7['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';} 
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file8['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file8['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';} 
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file9['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file9['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';} 
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file10['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $file10['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file11['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril1'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';} 
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file12['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril2'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';} 
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file13['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril3'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';} 
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file14['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril4'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file15['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril5'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file16['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril6'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file17['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril7'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file18['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril8'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file19['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril9'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file20['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril10'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file21['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril11'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(move_uploaded_file($file22['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $_POST['pril12'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}

}
//КОНЕЦ ФАЙЛЫ В БД

  header('Location: .');
  exit();
}



include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

$search = $_REQUEST['search'];

try
{
  $result = $pdo->query("SELECT kompl, idere FROM erekompl where idere LIKE '$search%'"); // INNER JOIN ererazdel ON erekompl.idere = ererazdel.id
}
catch (PDOException $e)
{
  $error = 'Ошибка: Вывода информационных писем из БД';
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $categories[] = array('idere' => $row['idere'], 'kompl' => $row['kompl']);
}

include 'vin.php';
