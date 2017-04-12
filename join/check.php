<?php
session_start();
if(!isset($_SESSION['join'])){
	header('Location: form.php');
	exit();
}
$name_box=$_POST['name'];
$mail_box=$_POST['mail'];
$pass_box=$_POST['pass'];

$_SESSION["name"]=$name_box;
$_SESSION["mail"]=$mail_box;
$_SESSION["pass"]=$pass_box;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>新規会員登録</title>
</head>
<body>
 <form action="register.php" method="post">
<dl>
  <dt>ユーザー名</dt>
  <dd>
    <?php echo $name_box ?>
  </dd>
  <dt>メールアドレス</dt>
  <dd>
   <?php echo $mail_box ?>
  </dd>
  <dt>パスワード</dt>
  <dd>
	  表示しません
  </dd>
	
</dl>
<div><a href="form.php?action=rewrite">&laquo;&nbsp;書き直す</a>
<input type="submit" value="登録する"></div>
</form>
</body>

</html>