<script+>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>NewsPortal</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
</head>
<body>
	<div id="main">
		<div id="top">
			<div id="header-text">
				<h1>NewsPortal.Com</h1>
				<h4>Все новости в сфере IT</h4>
			</div>
			<ul id="menu">
				<li><a href="index.php">Главная</a></li>
				<li><a href="news.php">Новости</a></li>
				<li><a href="reg.php">Регистрация</a></li>
				<li><a href="contacts.php">Контакты</a></li>
			</ul>
			<div id="auth">
				<form action="auth.php" method="post">
					<label>E-mail</label>
					<input type="text" name="email">
					<label>Password</label>
					<input type="password" name="password">
					<input type="submit" name="button_auth" value="Войти">
				</form>
			</div>
		</div>
	</div>
	<div id="main-content">
		<h3></h3>
	</div>
</body>
</html>