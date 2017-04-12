<?php
session_start();

if(!isset($_SESSION['join'])){
	header('Location: form.php');
	exit();
}

$name_box=$_SESSION['name'];
$mail_box=$_SESSION['mail'];
$pass_box=$_SESSION['pass'];


if($_SERVER['REQUEST_METHOD'] == 'POST'){
//登録処理をする
$db = new PDO("mysql:dbname=Loginpage;host=localhost","root","");

$sql = "INSERT INTO users(name, mail, pass)
VALUES('$name_box','$mail_box','$pass_box')";

$stmt = $db->query("SET NAMES utf8;");

$stmt = $db->prepare($sql);
$stmt->execute();

header('Location: thanks.php');
exit();
} 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>新規会員登録</title>
</head>
<body>
</body>

</html>