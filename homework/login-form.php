<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link rel="stylesheet" type="text/css" href="style.css">

<h3>Форма авторизации</h3>
<form method="POST" id="login-form" action='login.php'>
Введите логин:
<input type="text" name="nameLL" required placeholder="ваш логин" x-autocompletetype="login">
Введите email:
<input type="email" name="contactLL" required placeholder="адрес электронной почты" x-autocompletetype="email">

<input type="submit" value="Войти">
</form>