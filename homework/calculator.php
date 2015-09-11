<link rel="stylesheet" type="text/css" href="style.css">

<h3>Калькулятор</h3>
<form name="calc" method="post" id="calc">
<input type="button" name="plus" value="+" >
<input type="button"name="minus" value="-" >
<br>
<input type="text" name="a" required placeholder="число 1" x-autocompletetype="a">
&nbsp;&nbsp;
<select name="math" select>
	<option value ="0"> + 
	<option value ="1">  - 
	<option value ="2">  * 
	<option value ="3">  / 
	<option value ="4">  % 
	<option value ="5">  √ 
</select>
	&nbsp;&nbsp;
<input type="text" name="b" required placeholder="число 2" x-autocompletetype="b">
&nbsp;&nbsp;&nbsp;&nbsp;
<p><input type="submit" value="Посчитать">
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Очистить форму"></p>
</form>


<?php
$a=htmlspecialchars($_POST['a']);
$b=htmlspecialchars($_POST['b']);
$math=htmlspecialchars($_POST['math']);
if ($math == '0') {          
    $result = $a + $b;
}
elseif ($math == '1') {       
    $result = $a - $b;
}
elseif ($math == '2') {       
    $result = $a * $b;
}
elseif ($math == '3') {      
    $result = $a / $b;
}
elseif ($math == '4') {       
    $result = $a % $b;
}
else { 
	$c = 1/$b;                      
    $result = pow($a, $c);
}
echo 'Результат: '. $result;  
?>
