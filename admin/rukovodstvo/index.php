<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/magicquotes.inc.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

if (!userIsLoggedIn())
{
  include '../login.html.php';
  exit();
}

if(userHasRole('Редактор ЭРЭ Нефаз')){$company='nefaz';$let='n-';}
elseif(userHasRole('Редактор ЭРЭ Камаз')){$company='kamaz';$let=null;}

if (!userHasRole('Редактор ЭРЭ'))
{
  $error = 'Отказано в доступе. У Вас нет привилегии Редактор ЭРЭ';
  include '../accessdenied.html.php';
  exit();
}





if (isset($_GET['add']))
{
  session_start();
  $pageTitle = 'Добавление ЭРЭ';
  $action = 'addform';
  $name = '';
  $button = 'Добавить';
  $semail = $_SESSION['email'];

  include 'add.html.php';
  exit();
}

if (isset($_GET['addform']))
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
	
  try
  {
	  
    $sql = 'INSERT INTO ererazdel (id, vv, ep, ks, ea, eax, tho, vn, xa, ta, ga, yt, pril1, pril2, pril3, pril4, pril5, pril6, pril7, pril8, pril9, pril10, pril11, pril12, dop1, dop2, dop3, dop4, dop5, dop6, dop7, dop8, dop9, dop10, LN, company) VALUES (:id, :vv, :ep, :ks, :ea, :eax, :tho, :vn, :xa, :ta, :ga, :yt, :pril1, :pril2, :pril3, :pril4, :pril5, :pril6, :pril7, :pril8, :pril9, :pril10, :pril11, :pril12, :dop1, :dop2, :dop3, :dop4, :dop5, :dop6, :dop7, :dop8, :dop9, :dop10 , :LN, :company)';
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
	$s->bindValue(':dop1', $_POST['dop1']);
	$s->bindValue(':dop2', $_POST['dop2']);
	$s->bindValue(':dop3', $_POST['dop3']);
	$s->bindValue(':dop4', $_POST['dop4']);
	$s->bindValue(':dop5', $_POST['dop5']);
	$s->bindValue(':dop6', $_POST['dop6']);
	$s->bindValue(':dop7', $_POST['dop7']);
	$s->bindValue(':dop8', $_POST['dop8']);
	$s->bindValue(':dop9', $_POST['dop9']);
	$s->bindValue(':dop10', $_POST['dop10']);
	$s->bindValue(':LN', $_POST['LN']);
	$s->bindValue(':company', $company);
    $s->execute();	
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В добавлении руководства.';
    include 'error.html.php';
    exit();
  }
  
  
  try
  {
    $sql = 'INSERT INTO ereizv (izvid, idere, data, izvvv, izvep, izvks, izvea, izveax, izvtho, izvvn, izvxa, izvta, izvga, izvyt, izvpril1, izvpril2, izvpril3, izvpril4, izvpril5, izvpril6, izvpril7, izvpril8, izvpril9, izvpril10, izvpril11, izvpril12, izvdop1, izvdop2, izvdop3, izvdop4, izvdop5, izvdop6, izvdop7, izvdop8, izvdop9, izvdop10, LN, company ) VALUES (:izvid, :id, now(), :izvvv,  :izvep, :izvks, :izvea, :izveax, :izvtho, :izvvn, :izvxa, :izvta, :izvga, :izvyt, :izvpril1, :izvpril2, :izvpril3, :izvpril4, :izvpril5, :izvpril6, :izvpril7, :izvpril8, :izvpril9, :izvpril10, :izvpril11, :izvpril12, :izvdop1, :izvdop2, :izvdop3, :izvdop4, :izvdop5, :izvdop6, :izvdop7, :izvdop8, :izvdop9, :izvdop10, :LN, :company )';
    
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
	$s->bindValue(':izvdop1', $_POST['izvdop1']);
	$s->bindValue(':izvdop2', $_POST['izvdop2']);
	$s->bindValue(':izvdop3', $_POST['izvdop3']);
	$s->bindValue(':izvdop4', $_POST['izvdop4']);
	$s->bindValue(':izvdop5', $_POST['izvdop5']);
	$s->bindValue(':izvdop6', $_POST['izvdop6']);
	$s->bindValue(':izvdop7', $_POST['izvdop7']);
	$s->bindValue(':izvdop8', $_POST['izvdop8']);
	$s->bindValue(':izvdop9', $_POST['izvdop9']);
	$s->bindValue(':izvdop10', $_POST['izvdop10']);
	$s->bindValue(':LN', $_POST['LN']);
	$s->bindValue(':company', $company);
    $s->execute();	
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В добавлении извещения';
    include 'error.html.php';
    exit();
  }


try
  {
    $sql = 'INSERT INTO erelog (email, idere, data, vvlog, eplog, kslog, ealog, eaxlog, tholog, vnlog, xalog, talog, galog, ytlog, pril1log, pril2log, pril3log, pril4log, pril5log, pril6log, pril7log, pril8log, pril9log, pril10log, pril11log, pril12log, dop1log, dop2log, dop3log, dop4log, dop5log, dop6log, dop7log, dop8log, dop9log, dop10log, LN, company) VALUES ( :semail, :id, now(), :vv, :ep, :ks, :ea, :eax, :tho, :vn, :xa, :ta, :ga, :yt, :pril1, :pril2, :pril3, :pril4, :pril5, :pril6, :pril7, :pril8, :pril9, :pril10, :pril11, :pril12, :dop1, :dop2, :dop3, :dop4, :dop5, :dop6, :dop7, :dop8, :dop9, :dop10, :LN, :company )';
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
	$s->bindValue(':dop1', $_POST['dop1']);
	$s->bindValue(':dop2', $_POST['dop2']);
	$s->bindValue(':dop3', $_POST['dop3']);
	$s->bindValue(':dop4', $_POST['dop4']);
	$s->bindValue(':dop5', $_POST['dop5']);
	$s->bindValue(':dop6', $_POST['dop6']);
	$s->bindValue(':dop7', $_POST['dop7']);
	$s->bindValue(':dop8', $_POST['dop8']);
	$s->bindValue(':dop9', $_POST['dop9']);
	$s->bindValue(':dop10', $_POST['dop10']);
	$s->bindValue(':LN', $_POST['LN']);
	$s->bindValue(':company', $company);
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
	$file11 = $_FILES['attachment11']; // начало приложении
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
	$file23 = $_FILES['attachment23']; // начало дополнении
	$file24 = $_FILES['attachment24'];
	$file25 = $_FILES['attachment25'];
	$file26 = $_FILES['attachment26'];
	$file27 = $_FILES['attachment27'];
	$file28 = $_FILES['attachment28'];
	$file29 = $_FILES['attachment29'];
	$file30 = $_FILES['attachment30'];
	$file31 = $_FILES['attachment31'];
	$file32 = $_FILES['attachment32'];
	
    $srcFileName = $let.$_POST['id'];

	$languege = $_POST['LN'];
	


if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}




if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file1['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file1['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file2['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file2['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file3['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file3['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file4['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file4['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file5['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file5['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file6['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file6['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file7['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file7['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file8['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file8['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file9['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file9['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file10['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file10['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file11['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril1'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file12['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril2'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file13['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril3'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file14['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril4'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file15['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril5'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file16['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril6'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file17['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril7'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file18['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril8'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file19['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril9'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file20['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril10'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file21['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril11'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file22['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril12'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file23['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop1'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file24['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop2'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file25['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop3'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file26['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop4'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file27['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop5'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file28['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop6'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file29['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop7'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file30['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop8'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file31['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop9'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file32['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop10'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}


}
//КОНЕЦ ФАЙЛЫ В БД



  header('Location: .');

  exit();
}


if (isset($_GET['kompl']))
{
  $pageTitle = 'Привязка комплектации';
  $action = 'addkompl';
  $name = '';
  $button = 'Добавить';

  include 'kompl.html.php';
  exit();
}

if (isset($_GET['addkompl']))
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';




  try
  {
	if(isset($_POST['kompl'])) {
	$kompls = $_POST['kompl'];
	} 
    $sql = 'INSERT INTO erekompl (id, kompl, idere, company) VALUES (:id, :kompl, :idere, :company )';
    $s = $pdo->prepare($sql);
	
	foreach ($kompls as $kompl) {
		$s->bindValue(':id', $_POST['id']);
		$s->bindValue(':kompl', $kompl);
		$s->bindValue(':idere', $_POST['idere']);
		$s->bindValue(':company', $company);
		$s->execute();
	}

  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В привязке комплектации';
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}



if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

  try
  { 
    
	
    $sql = 'SELECT * FROM ererazdel INNER JOIN ereizv ON ererazdel.id = ereizv.idere AND ererazdel.LN = ereizv.LN AND ererazdel.company = ereizv.company WHERE id = :id AND ererazdel.LN = :LN and ererazdel.company = :company';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
	$s->bindValue(':LN', $_POST['LN']);
	$s->bindValue(':company', $company);
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
  
  $dop1 = $row['dop1'];
  $dop2 = $row['dop2'];
  $dop3 = $row['dop3'];
  $dop4 = $row['dop4'];
  $dop5 = $row['dop5'];
  $dop6 = $row['dop6'];
  $dop7 = $row['dop7'];
  $dop8 = $row['dop8'];
  $dop9 = $row['dop9'];
  $dop10 = $row['dop10'];
  
  $izvdop1 = $row['izvdop1'];
  $izvdop2 = $row['izvdop2'];
  $izvdop3 = $row['izvdop3'];
  $izvdop4 = $row['izvdop4'];
  $izvdop5 = $row['izvdop5'];
  $izvdop6 = $row['izvdop6'];
  $izvdop7 = $row['izvdop7'];
  $izvdop8 = $row['izvdop8'];
  $izvdop9 = $row['izvdop9'];
  $izvdop10 = $row['izvdop10'];
  $LN = $row['LN'];
  
  
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
		pril12 = :pril12,
		dop1 = :dop1,
		dop2 = :dop2,
		dop3 = :dop3,
		dop4 = :dop4,
		dop5 = :dop5,
		dop6 = :dop6,
		dop7 = :dop7,
		dop8 = :dop8,
		dop9 = :dop9,
		dop10 = :dop10,
		LN = :LN,
		company = :company
		
		WHERE id=:id AND LN = :LN';
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
	$s->bindValue(':dop1', $_POST['dop1']);
	$s->bindValue(':dop2', $_POST['dop2']);
	$s->bindValue(':dop3', $_POST['dop3']);
	$s->bindValue(':dop4', $_POST['dop4']);
	$s->bindValue(':dop5', $_POST['dop5']);
	$s->bindValue(':dop6', $_POST['dop6']);
	$s->bindValue(':dop7', $_POST['dop7']);
	$s->bindValue(':dop8', $_POST['dop8']);
	$s->bindValue(':dop9', $_POST['dop9']);
	$s->bindValue(':dop10', $_POST['dop10']);
	$s->bindValue(':LN', $_POST['LN']);
	$s->bindValue(':company', $company);
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
	izvpril12 = :izvpril12,
	izvdop1 = :izvdop1,
	izvdop2 = :izvdop2,
	izvdop3 = :izvdop3,
	izvdop4 = :izvdop4,
	izvdop5 = :izvdop5,
	izvdop6 = :izvdop6,
	izvdop7 = :izvdop7,
	izvdop8 = :izvdop8,
	izvdop9 = :izvdop9,
	izvdop10 = :izvdop10,
	LN = :LN,
	company = :company
	
	WHERE idere=:id AND LN = :LN';


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
	$s->bindValue(':izvdop1', $_POST['izvdop1']);
	$s->bindValue(':izvdop2', $_POST['izvdop2']);
	$s->bindValue(':izvdop3', $_POST['izvdop3']);
	$s->bindValue(':izvdop4', $_POST['izvdop4']);
	$s->bindValue(':izvdop5', $_POST['izvdop5']);
	$s->bindValue(':izvdop6', $_POST['izvdop6']);
	$s->bindValue(':izvdop7', $_POST['izvdop7']);
	$s->bindValue(':izvdop8', $_POST['izvdop8']);
	$s->bindValue(':izvdop9', $_POST['izvdop9']);
	$s->bindValue(':izvdop10', $_POST['izvdop10']);
	$s->bindValue(':LN', $_POST['LN']);
	$s->bindValue(':company', $company);
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
    $sql = 'INSERT INTO erelog (email, idere, data, vvlog, eplog, kslog, ealog, eaxlog, tholog, vnlog, xalog, talog, galog, ytlog, pril1log, pril2log, pril3log, pril4log, pril5log, pril6log, pril7log, pril8log, pril9log, pril10log, pril11log, pril12log, dop1log, dop2log, dop3log, dop4log, dop5log, dop6log, dop7log, dop8log, dop9log, dop10log, LN, company) VALUES ( :semail, :id, now(), :vv, :ep, :ks, :ea, :eax, :tho, :vn, :xa, :ta, :ga, :yt, :pril1, :pril2, :pril3, :pril4, :pril5, :pril6, :pril7, :pril8, :pril9, :pril10, :pril11, :pril12, :dop1, :dop2, :dop3, :dop4, :dop5, :dop6, :dop7, :dop8, :dop9, :dop10, :LN, :company )';
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
	$s->bindValue(':dop1', $_POST['dop1']);
	$s->bindValue(':dop2', $_POST['dop2']);
	$s->bindValue(':dop3', $_POST['dop3']);
	$s->bindValue(':dop4', $_POST['dop4']);
	$s->bindValue(':dop5', $_POST['dop5']);
	$s->bindValue(':dop6', $_POST['dop6']);
	$s->bindValue(':dop7', $_POST['dop7']);
	$s->bindValue(':dop8', $_POST['dop8']);
	$s->bindValue(':dop9', $_POST['dop9']);
	$s->bindValue(':dop10', $_POST['dop10']);
	$s->bindValue(':LN', $_POST['LN']);
	$s->bindValue(':company', $company);
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
	$file23 = $_FILES['attachment23'];
	$file24 = $_FILES['attachment24'];
	$file25 = $_FILES['attachment25'];
	$file26 = $_FILES['attachment26'];
	$file27 = $_FILES['attachment27'];
	$file28 = $_FILES['attachment28'];
	$file29 = $_FILES['attachment29'];
	$file30 = $_FILES['attachment30'];
	$file31 = $_FILES['attachment31'];
	$file32 = $_FILES['attachment32'];

    $srcFileName = $let.$_POST['id'];

	$languege = $_POST['LN'];

if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file1['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file1['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file2['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file2['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file3['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file3['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file4['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file4['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file5['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file5['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file6['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file6['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file7['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file7['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file8['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file8['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file9['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file9['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file10['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $file10['name'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file11['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril1'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file12['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril2'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file13['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril3'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file14['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril4'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file15['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril5'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file16['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril6'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file17['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril7'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file18['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril8'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file19['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril9'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file20['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril10'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file21['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril11'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file22['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['pril12'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file23['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop1'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file24['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop2'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file25['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop3'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file26['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop4'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file27['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop5'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file28['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop6'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file29['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop7'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file30['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop8'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file31['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop9'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}
if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName))mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/' . $srcFileName, 0755); if(!is_dir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege)) mkdir($_SERVER['DOCUMENT_ROOT']. '/rukovodstvo/komplect/'.$srcFileName.'/' . $languege, 0755);if(move_uploaded_file($file32['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/rukovodstvo/komplect/' . $srcFileName . '/' . $languege . '/'. $_POST['dop10'])) {$error = 'Ошибка при загрузке файла';} else {$result = 'Успех!';}

}
//КОНЕЦ ФАЙЛЫ В БД

  header('Location: .');
  exit();
}

include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
//if (isset($_POST['action']) and $_POST['action'] == 'Editq')
if (isset($_GET['Editq']))
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

  try
  { 
    
	
    $sql = 'SELECT * FROM voen_kompl WHERE company = :company';
    $s = $pdo->prepare($sql);
    $s->bindValue(':kompl', $_POST['kompl']);
	$s->bindValue(':reason', $_POST['reason']);
	$s->bindValue(':company', $company);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В выборкеs комплектации';
    include 'error.html.php';
    exit();
  }

  $row = $s->fetch();


  $pageTitle = 'Редактирование военной комплектации '.$row['kompl'].' ';
  $action = 'editform';
  $id = $row['kompl'];
  $vv = $row['reason'];

  $button = 'Сохранить';

  include 'edit_voen.html.php';
  exit();
}


// delete
if (isset($_POST['action']) and $_POST['action'] == 'del_exp')
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

  try
  { 
    
	
    $sql = 'DELETE FROM iskl_ere where kompl=:kompl and company=:company';
    $s = $pdo->prepare($sql);
    $s->bindValue(':kompl', $_POST['kompl']);
    $s->bindValue(':company', $company);

    $s->execute();
  }
  catch (PDOException $e)
  {
    $e = $_POST['kompl'];
    $error = 'Ошибка: В удалении'.$e.' комплектации';
    include 'error.html.php';
    exit();
  }

  try
  { 
    
	
    $sql = 'DELETE FROM erekompl where kompl=:kompl and company=:company';
    $s = $pdo->prepare($sql);
    $s->bindValue(':kompl', $_POST['kompl']);
    $s->bindValue(':company', $company);

    $s->execute();
  }
  catch (PDOException $e)
  {
    $e = $_POST['kompl'];
    $error = 'Ошибка: В удалении'.$e.' исключения';
    include 'error.html.php';
    exit();
  }

 //$row = $s->fetch();
  $button = 'Сохранить';
 include 'spravochnik.html.php';
  exit();
}

// delete end


include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
if (isset($_GET['add_voen']))
{
  $pageTitle = 'Добавление исключения';
  $action = 'add_voencomp';
  $button = 'Добавить';

  include 'add_iskl.html.php';
  exit();
}

  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
if (isset($_GET['add_voencomp']))
{
	
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
try
  {
  
    $sql = 'INSERT INTO iskl_ere ( directory, kompl, reason, company) VALUES ( "Справочник", :kompl, :reason, :company )';
   $s = $pdo->prepare($sql);
	   if(!empty($_POST['kompl']) and !empty($_POST['reason'])){
			foreach ($_POST['kompl'] as $i => $kompl) {
				$s->bindValue(':kompl', $_POST['kompl'][$i]);
				$s->bindValue(':reason', $_POST['reason'][$i]);
				$s->bindValue(':company', $company);
				$s->execute();
			}
		}
		
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В добавлении исключения';
		foreach ($_POST['kompl'] as $i => $kompl) {
	if (empty($kompl[$i]) and empty($_POST['reason'][$i])) {
    $error = 'Ошибка: '.++$i.'. Пустые значения.';
}
}
    include 'error.html.php';
    exit();
  }
  
  
  
  try
  {
  
	$sql = 'INSERT INTO erekompl ( kompl, idere, company ) VALUES (:kompl, "Справочник", :company)';
	$d = $pdo->prepare($sql);
	if(!empty($_POST['kompl']) ){
			foreach ($_POST['kompl'] as $k => $komplere) {
				$d->bindValue(':kompl', $_POST['kompl'][$k]);
				$d->bindValue(':company', $company);
				$d->execute();
			}
		}
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В добавлении исключения';
    include 'error.html.php';
    exit();
  }

}

if (isset($_GET['voen']))
{
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

$pageTitle = 'Список исключений';

  $button = 'Добавить комплектации';
  $delete = 'Удалить...';

		if(isset($_POST['delete2']))
		{
		
		
			try
			{
				foreach ($_POST['delete2'] as $d => $del) {
					//$list = implode("," , $_POST['delete2']);
					
					$del = $_POST['delete2'][$d];
					$sql = "DELETE FROM iskl_ere where kompl IN ('$del') and company='".$company."'";
		//			$sql = "SELECT * FROM voen_kompl";
					$s = $pdo->prepare($sql);
					$s->execute();
				}
			}catch (PDOException $e)
			  {
				$e = $_POST['kompl'];
				$error = 'Ошибка: В удалении'.$e.' исключения';
				include 'error.html.php';
				exit();
			  }
			
			
			
			try{ 
				foreach ($_POST['delete2'] as $d => $del) {
					$sql = "DELETE FROM erekompl where kompl IN ('$del') and company='".$company."'";
					$s = $pdo->prepare($sql);
					$s->bindValue(':kompl', $_POST['kompl']);
					$s->execute();
				}
			  }
			  catch (PDOException $e)
			  {
				$e = $_POST['kompl'];
				$error = 'Ошибка: В удалении'.$e.' cghfdjxybrf';
				include 'error.html.php';
				exit();
			  }
		
		}
 include 'spravochnik.html.php';
  exit();
 } 
 
 
 if (isset($_GET['otchet']))
{
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
$pageTitle = 'Отчет непривязанных комплектаций';


include 'otchet.php';
  exit();
}

 if (isset($_GET['k']))
{
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

include 'k.html.php';
  exit();
}
 
if (isset($_GET['editvoenform']))
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

  try
  {
    $sql = 'UPDATE voen_kompl SET kompl = :kompl,reason = :reason,	WHERE kompl=:kompl';
    $s = $pdo->prepare($sql);
	$s->bindValue(':kompl', $_POST['kompl']);
	$s->bindValue(':reason', $_POST['reason']);
	
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В обновлении';
    include 'error.html.php';
    exit();
  }
 }



include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';



try
{
  $lang = $_SESSION['LN'];
	
  $result = $pdo->query("SELECT * FROM ererazdel where company='".$company."'"); // INNER JOIN ererazdel ON erekompl.idere = ererazdel.id
}
catch (PDOException $e)
{
  $error = 'Ошибка: Вывода комплектации из БД';
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $categories[] = array('id' => $row['id'], 'LN' => $row['LN'], 'company' => $company
 );
}

include 'ere.html.php';
