
<?php

$date=$_COOKIE['date'];
  $log = '<form action="/logout.php" method="post">
  Привет, '.$_COOKIE['id'].'! Дата авторизации: '.$date.
  '  <input type="submit" value="Logout"></form>';
echo $log;

$contents=array('header', 'content', 'footer');
$menu = array('index'=> array('href' => 'index.php', 'title' => 'Home'),
	'about' => array('href' => 'index.php?page=about', 'title' => 'About'),
	'contact'=> array('href' => 'index.php?page=contacts', 'title' => 'Contact'),
	'multi_table'=> array('href' => 'index.php?page=multi_table', 'title' => 'Multi_table'),
	'calculator' => array('href' => 'index.php?page=calculator', 'title' => 'Calculator')
	);
echo '<table border="1" width="100%">';


foreach ($contents as $content) {
	
	echo '<tr align = "center">';

if ($content == 'content') {
	echo '<td width ="20%"><table border ="1" width=100%>';
 
			foreach ($menu as $option) {
	
				echo '<tr><td align="center">';
				echo '<a href="'.$option['href'].'">'.$option['title'].'</td></a>';
				echo '</tr>';
			}

	echo '</table></td><td align="left">';
	include $_GET['page'].'.php';
	echo '</td>';


} else {
		echo '<td colspan="2" align="center">';
		echo strtoupper($content); 
		echo '</td>';
	}
}
echo '</tr>';
echo '</table>';



?>
