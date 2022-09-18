<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/magicquotes.inc.php';
	include $_SERVER['DOCUMENT_ROOT'] .
    '/includes/db.inc.php';	
	
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

if (!userIsLoggedIn())
{
  include '../login.html.php';
  exit();
}

if (!userHasRole('Администратор'))
{
  $error = 'Отказано в доступе. У Вас нет привилегии Переводчика';
  include '../accessdenied.html.php';
  exit();
}


if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

  try
  { 
    $sql = 'SELECT * FROM  page_sk';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
	$s->bindValue(':LN', $_POST['LN']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Ошибка: В выборке комплектации';
    include 'error.html.php';
    exit();
  }

 $row = $s->fetch();


  $pageTitle = 'Редактирование страницы';
  $action = 'editform';
  
  
  $id = $row['id'];
  $nazvanie = $row['nazvanie'];
  $data = $row['data'];
  $rasprostranenie = $row['rasprostranenie'];
  $dorabotka = $row['dorabotka'];
  
  $codoper = $row['codoper'];
  $nameoper = $row['nameoper'];
  $work = $row['work'];
  
  $primechanie = $row['primechanie'];
  $zatrat = $row['zatrat'];
  $status = $row['status'];
  
  $numberzch = $row['numberzch'];
  $namezch = $row['namezch'];
  $ves = $row['ves'];
  $kol = $row['kol'];
  
  $vin = $row['vin'];
  $stata = $row['stata'];

  
  $button = 'Сохранить';

  include 'edit.html.php';
  exit();
}

if (isset($_GET['editform']))
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

 $pagename = $_POST['pagename'];
	if(isset($_POST['submit']))
	{
	 	 
		if( $pagename == 'page_ere'){
			try {
				foreach ($_POST['LN'] as $i => $ln){
					$title =  addslashes($_POST['title'][$i]); 
					$kompl =  addslashes($_POST['kompl'][$i]); 
					$tablo =  addslashes($_POST['tablo'][$i]); 
					$stroka = addslashes( $_POST['stroka'][$i]); 
					$r1 =  addslashes($_POST['r1'][$i]); 
					$r2 =  addslashes($_POST['r2'][$i]); 
					$r3 =  addslashes($_POST['r3'][$i]); 
					$r4 =  addslashes($_POST['r4'][$i]); 
					$r5 =  addslashes($_POST['r5'][$i]); 
					$r6 =  addslashes($_POST['r6'][$i]); 
					$r7 =  addslashes($_POST['r7'][$i]); 
					$r8 =  addslashes($_POST['r8'][$i]); 
					$r9 =  addslashes($_POST['r9'][$i]); 
					$r10 =  addslashes($_POST['r10'][$i]); 
					$r11 =  addslashes($_POST['r11'][$i]); 
					$razdel =  addslashes($_POST['razdel'][$i]); 
					$pril =  addslashes($_POST['pril'][$i]); 
					$dop =  addslashes($_POST['dop'][$i]); 
					$back =  addslashes($_POST['back'][$i]); 
					$pismo =  addslashes($_POST['pismo'][$i]); 
					$data =  addslashes($_POST['data'][$i]); 
					$izv =  addslashes($_POST['izv'][$i]); 
					$ln =  addslashes($_POST['LN'][$i]); 
					$empty_sk =  addslashes($_POST['empty_sk'][$i]); 
					$empty_ere =  addslashes($_POST['empty_ere'][$i]); 
					
					
					$sql = "UPDATE page_ere SET title = '$title', 	kompl ='$kompl', tablo = '$tablo', stroka = '$stroka', r1 = '$r1', r2 = '$r2', r3 = '$r3', r4 = '$r4', r5 = '$r5', r6 = '$r6', r7 = '$r7', r8 = '$r8', r9 = '$r9', r10 = '$r10', r11 = '$r11', razdel = '$razdel', pril = '$pril', dop = '$dop', back = '$back', pismo = '$pismo', data = '$data', izv = '$izv', ln = '$ln', empty_sk = '$empty_sk', empty_ere = '$empty_ere' where LN = '$ln'";
					
					$s = $pdo->prepare($sql);
					$s->execute();
				}
			} catch (PDOException $e)
			  {
				$error = 'Ошибка: В обновлении ere.';
			   include 'error.html.php';
			   exit();
			  }
		} 
		elseif ($pagename == 'page_menu') {
			try {
				foreach ($_POST['LN'] as $i => $ln){
					$title =  addslashes($_POST['title'][$i]); 
					$vkompl =  addslashes($_POST['vkompl'][$i]); 
					$sk =  addslashes($_POST['sk'][$i]); 
					$ere = addslashes( $_POST['ere'][$i]); 
					$ec =  addslashes($_POST['ec'][$i]); 
					$rs =  addslashes($_POST['rs'][$i]); 
					$ln =  addslashes($_POST['LN'][$i]); 
					
					
					$sql = "UPDATE page_menu SET title = '$title', 	vkompl ='$vkompl', sk = '$sk', ere = '$ere', ec = '$ec', rs = '$rs', LN = '$ln' where LN = '$ln'";
					
					$s = $pdo->prepare($sql);
					$s->execute();
				}
			}catch (PDOException $e)
			  {
				$error = 'Ошибка: В обновлении menu.';
			   include 'error.html.php';
			   exit();
			  }
		
		} elseif ($pagename == 'page_present') {
			try {
				foreach ($_POST['LN'] as $i => $ln){
					$title =  addslashes($_POST['title'][$i]); 
					$about =  addslashes($_POST['About'][$i]); 
					$infochar =  addslashes($_POST['infochar'][$i]); 
					$v1 =  addslashes($_POST['v1'][$i]); 
					$v2 =  addslashes($_POST['v2'][$i]); 
					$eed =  addslashes($_POST['eed'][$i]); 
					$sdk =  addslashes($_POST['sdk'][$i]); 
					$h1 =  addslashes($_POST['h1'][$i]); 
					$text1 =  addslashes($_POST['text1'][$i]); 
					$h2 =  addslashes($_POST['h2'][$i]); 
					$li1 =  addslashes($_POST['li1'][$i]); 
					$li2 =  addslashes($_POST['li2'][$i]); 
					$li3 =  addslashes($_POST['li3'][$i]); 
					$li4 =  addslashes($_POST['li4'][$i]); 
					$li5 =  addslashes($_POST['li5'][$i]); 
					$li6 =  addslashes($_POST['li6'][$i]); 
					$li7 =  addslashes($_POST['li7'][$i]); 
					$li8 =  addslashes($_POST['li8'][$i]); 
					$li9 =  addslashes($_POST['li9'][$i]); 
					$li10 =  addslashes($_POST['li10'][$i]); 
					$h3 =  addslashes($_POST['h3'][$i]); 
					$tel1 =  addslashes($_POST['tel1'][$i]); 
					$tel2 =  addslashes($_POST['tel2'][$i]); 
					$ln =  addslashes($_POST['LN'][$i]); 
					
					
					
					$sql = "UPDATE page_present SET title = '$title', About = '$about', infochar = '$infochar', v1 = '$v1', v2 = '$v2', eed = '$eed', sdk = '$sdk', h1 = '$h1', text1 = '$text1', h2 = '$h2', li1 = '$li1', li2 = '$li2', li3 = '$li3', li4 = '$li4', li5 = '$li5', li6 = '$li6', li7 = '$li7', li8 = '$li8', li9 = '$li9', li10 = '$li10', h3 = '$h3', tel1 = '$tel1', tel2 = '$tel2', LN = '$ln' where LN = '$ln'";
					
					$s = $pdo->prepare($sql);
					$s->execute();
				}
			}catch (PDOException $e)
			  {
				$error = 'Ошибка: В обновлении операции.';
			   include 'error.html.php';
			   exit();
			  }
		} elseif ($pagename == 'page_sk') {
			try{
				foreach ($_POST['LN'] as $i => $ln){
					$title =  addslashes($_POST['title'][$i]); 
					$sk =  addslashes($_POST['sk'][$i]); 
					$kompl =  addslashes($_POST['kompl'][$i]); 
					$tablo =  addslashes($_POST['tablo'][$i]); 
					$stroka =  addslashes($_POST['stroka'][$i]); 
					$r1 =  addslashes($_POST['r1'][$i]); 
					$r2 =  addslashes($_POST['r2'][$i]); 
					$r3 =  addslashes($_POST['r3'][$i]); 
					$r4 =  addslashes($_POST['r4'][$i]); 
					$r5 =  addslashes($_POST['r5'][$i]); 
					$r6 =  addslashes($_POST['r6'][$i]); 
					$r7 =  addslashes($_POST['r7'][$i]); 
					$r8 =  addslashes($_POST['r8'][$i]); 
					$tel =  addslashes($_POST['tel'][$i]); 
					$vkl =  addslashes($_POST['vkl'][$i]); 
					$back =  addslashes($_POST['back'][$i]); 
					$razdel =  addslashes($_POST['razdel'][$i]); 
					$ln =  addslashes($_POST['LN'][$i]); 
					
					
					$sql = "UPDATE page_sk SET title = '$title', sk = '$sk', kompl = '$kompl', tablo =  '$tablo', stroka = '$stroka', r1 = '$r1', r2 = '$r2', r3 = '$r3', r4 = '$r4', r5 = '$r5', r6 = '$r6', r7 = '$r7', r8 = '$r8', tel = '$tel', vkl = '$vkl', back = '$back', razdel = '$razdel', LN = '$ln' where LN = '$ln'";	
					
					
					$s = $pdo->prepare($sql);
					$s->execute();
				}
			}catch (PDOException $e)
			  {
				$error = 'Ошибка: В обновлении операции.';
			   include 'error.html.php';
			   exit();
			  }
		}elseif ($pagename == 'page_vin') {
			try{
				foreach ($_POST['LN'] as $i => $ln){
					$title =  addslashes($_POST['title'][$i]); 
					$vkompl =  addslashes($_POST['vkompl'][$i]); 
					$adm =  addslashes($_POST['adm'][$i]); 
					$choose =  addslashes($_POST['choose'][$i]); 
					$intcode =  addslashes($_POST['intcode'][$i]); 
					$errorvin =  addslashes($_POST['errorvin'][$i]); 
					$errorhack =  addslashes($_POST['errorhack'][$i]); 
					$ln =  addslashes($_POST['LN'][$i]); 

					
					
					
					$sql = "UPDATE page_vin SET title = '$title', vkompl = '$vkompl', adm = '$adm', choose = '$choose', intcode = '$intcode', errorvin = '$errorvin', errorhack = '$errorhack', LN = '$ln' where LN = '$ln'";
					
					$s = $pdo->prepare($sql);
					$s->execute();
				}
			}catch (PDOException $e)
			  {
				$error = 'Ошибка: В обновлении операции.';
			   include 'error.html.php';
			   exit();
			  }
		}

		
	}
	
	
	

	
  
  header('Location: .');
  exit();
  }






include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

include 'lang.html.php';
