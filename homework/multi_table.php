<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<link rel="stylesheet" type="text/css" href="style.css">

<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<h3>Таблица умножения</h3>
<form name="multi_table" method="post" id="multi_table">
Введите желаемое количество строк:
<input type="text" name="rows" required placeholder="количество строк (число)" x-autocompletetype="rows">
Введите желаемое количество столбцов:
<input type="text" name="cols" required placeholder="количество столбцов (число)" x-autocompletetype="cols">
Укажите цвет таблицы:
<input type="text" name="color" required placeholder="буквенно на англ или код" x-autocompletetype="color">
<input type="submit" value="Отправить">
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Очистить форму">
</form>

<?php
$row=htmlspecialchars($_POST['rows']);
$col=htmlspecialchars($_POST['cols']);
$color=htmlspecialchars($_POST['color']);

?>

<table cellpadding="5" border="1">
<?php
for ($r = 1; $r <= $row; $r++) {
echo "<tr>";
for ($c = 1; $c <= $col; $c++) {
echo "<td bgcolor='" .  $color . "'>";
echo ($r * $c);
echo "</td>";
}
echo "</tr>";
}
?>
</table>