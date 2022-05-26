<?php 

$servername = "localhost";
$db_jmeno = "root";
$db_heslo = "";


 $db = new PDO("mysql:host=$servername;dbname=objednavky", $db_jmeno, $db_heslo);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST['poslat'])){
	$name  = $_POST['name'];
	$email = $_POST['email'];
	$time = $_POST['time'];
	$text = $_POST['text'];
	$balicek = $_POST['balicek'];

	$sql = "INSERT INTO objednavky (name, time, text, balicek, email) VALUES ('$name', '$time', '$text', '$balicek', '$email')";
	$db->exec($sql);

}

?>