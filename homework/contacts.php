<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link rel="stylesheet" type="text/css" href="style.css">
<?
if (isset ($_POST['messageFF'])) {
  mail ("zosya.dubrovskaya@gmail.ru",
        "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
  echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
}
?>

<h3>Форма обратной связи</h3>
<form method="POST" id="feedback-form">
Как к Вам обращаться (обязательно):
<input type="text" name="nameFF" required placeholder="Ваше имя" x-autocompletetype="name">
Ваш email (чтобы получить ответ):
<input type="email" name="contactFF" required placeholder="Адрес электронной почты" x-autocompletetype="email">
Ваше сообщение:
<textarea name="messageFF" required rows="5"></textarea>
<input type="submit" value="Отправить">
</form>