<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Вход</title>
	<link rel="stylesheet" href="../../css/admin.css">
  </head>
  <body class="main">
	
		<div class="heading">
			<h1>Панель администратора</h1>
			<h1>Вход</h1>
		</div>
	<div class="main">
		<div class="manual-text  login">
		<div class="manual-line" id="p-enter"><p>Введите данные для входа:</p></div>
		<?php if (isset($loginError)): ?>
		  <p><?php htmlout($loginError); ?></p>
		<?php endif; ?>
		<form action="" method="post" autocomplete="off">
		  <div class="manual-line">
			<div class="left no-white-border">
				<p>E-mail:</p>
			</div>
			<div class="right">
				<div class="right-input-text">
					<label for="email"><input placeholder="Введите e-mail..." type="text" name="email" id="email"></label>
				</div>
			</div>
		  </div>
		  
			<div class="manual-line">
				<div class="left no-white-border">
					<p>Пароль:</p>
				</div>
				<div class="right">
					<div class="right-input-text">
						<label for="password"><input placeholder="Введите пароль..." type="password" name="password" id="password"></label>
					</div>
				</div>
			</div>
			
			<div class="manual-line">
			  <div >
				<input type="hidden" name="action" value="login">
				<input class="vhod" type="submit" value="Войти">
			  </div>
		  </div>
		</form>
		</div>
		<a class="back" href="/admin/"></a>
	</div>
  </body>
</html>
