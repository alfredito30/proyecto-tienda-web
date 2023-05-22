<?php
/*$dbcon = new MySQLi("192.168.0.102","root","turnitoff","php");*/

 include_once("../conexion3/conexion1.php");
?>
<?php
session_start();
if ($_SESSION['acceso']!="1")
{
header("Location:login.php");
exit;
}

echo " Bienvenido a la Sesion ". $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dynamic Dropdown Menu using PHP and MySQLi</title>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
<div id="head">
<div class="wrap"><br e-Bsp.com<h1><a href="http://e-bsp.com/">e-Bsp</a></h1><br><label><br><a href="add_menu.php">Agregar Menu</a></label>
</div>
</div>
<br>
<div class="wrap">
<ul id="nav">
<li><a href="/clientes/acceso.php">Homepage</a></li>
<?php
$res=$dbcon->query("SELECT * FROM main_menu");
while($row=$res->fetch_array())
{
	?>
	<li><a href="<?php echo $row['m_menu_link']; ?>"><?php echo $row['m_menu_name']; ?></a>
	<?php
	$res_pro=$dbcon->query("SELECT * FROM sub_menu WHERE m_menu_id=".$row['m_menu_id']);
	?>
    <ul>
		<?php
		while($pro_row=$res_pro->fetch_array())
		{
			?><li><a href="<?php echo $pro_row['s_menu_link']; ?>"><?php echo $pro_row['s_menu_name']; ?></a></li><?php
		}
		?>
	</ul>
	</li>

    <?php
}
?>
</ul>
</div>

<script type="text/javascript">
$(document).ready(function()
{
	$('#nav li').hover(function()
	{
		$('ul', this).slideDown('fast');
	}, function()
	{
		$('ul', this).slideUp('fast');
	});
});
</script>
</body>
</html>
<?
/*
Utiliae este codigo para crear la Base de datos

 CREATE TABLE IF NOT EXISTS `main_menu` (
  `m_menu_id` int(2) NOT NULL AUTO_INCREMENT,
  `m_menu_name` varchar(20) NOT NULL,
  `m_menu_link` varchar(50) NOT NULL,
  PRIMARY KEY (`m_menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

CREATE TABLE IF NOT EXISTS `sub_menu` (
  `s_menu_id` int(2) NOT NULL AUTO_INCREMENT,
  `m_menu_id` int(2) NOT NULL,
  `s_menu_name` varchar(20) NOT NULL,
  `s_menu_link` varchar(50) NOT NULL,
  PRIMARY KEY (`s_menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
*/
?>
