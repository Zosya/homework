<?php


setcookie("id", $_POST['nameLL'], time() + 3600*24*30*12, "/");
setcookie("em", md5($_POST['contactLL']), time() + 3600*24*30*12, "/");
setcookie("date", date('H:i:s, d F Y') );

header("Location: site.php"); 

exit();
?>