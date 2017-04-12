<?php
session_start();

if(!empty($_POST)){
  
  if(empty($error)){
    $_SESSION['join'] = $_POST;
    header('Location: check.php');
    exit();
  }
}
?>

<html>
<head>
  <meta charset="UTF-8" />
  <title>新規会員登録</title>
</head>
<body>
	<a href="../index.php">戻る</a>
  <p>必要事項をご記入ください</p>
  <form action="check.php" method="post" enctype="multipart/form-data">
  <dl>
  <dt>ユーザー名<font color="red">　必須</font></dt>
  <dd>
    <input type="text" name="name" size="35" maxlength="255">
    <?php if(!empty($error['name']) && $error['name'] == 'blank'): ?>
    <p><font color="red">* ユーザー名を入力してください</font></p>
    <?php endif; ?>
  </dd>
  <dt>メールアドレス<font color="red">　必須</font></dt>
  <dd>
    <input type="text" name="mail" size="35" maxlength="255">
    <?php if(!empty($error['mail']) && $error['mail'] == 'blank'): ?>
    <p><font color="red">* メールアドレスを入力してください</font></p>
    <?php endif; ?>
    <?php if(!empty($error['mail']) && $error['mail'] == 'duplicate'): ?>
    <p><font color="red">* 指定されたメールアドレスは既に登録されています</font></p>
    <?php endif; ?>
  </dd>
  <dt>パスワード<font color="red">　必須</font></dt>
  <dd>
    <input type="password" name="pass" size="10" maxlength="20">
    <?php if(!empty($error['pass']) && $error['pass'] == 'blank'): ?>
    <p><font color="red">* パスワードを入力してください</font></p>
    <?php endif; ?>
    <?php if(!empty($error['pass']) && $error['pass'] == 'length'): ?>
    <p><font color="red">* パスワードは４文字以上で入力してください</font></p>
    <?php endif; ?>
  </dd>
  <div><input type="submit" value="入力内容を確認"></div>
</dl>
  
  </form>
</body>
</html>