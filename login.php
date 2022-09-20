<?php
if($_POST["pass"] == "manager"){
  header('Location: login_success_manager.php');
exit;
}
if($_POST["pass"] == "user"){
    header('Location: login_success_users.php');
exit;
}
?>
<html>
 <head>
  <meta charset="UTF-8">
  <title>ログイン</title>
  <link rel="stylesheet" href="index.css" type="text/css">
 </head>
 <body>
    <h1>ログインページ</h1>
    <h2>ログイン</h2>
    <form name="login_form">
      <div class="login_form_top">
        <h1>LOGIN</h1>
        <p>UserID、Passwordをご入力の上、「LOGIN」ボタンをクリックしてください。</p>
      </div>
      <div class="login_form_btm" method="POST">
        <input type="id" name="user_id" placeholder="あいでぃー">
        <input type="text" name="pass" placeholder="ぱすわーど">
        <input type="submit" value="ログイン">
      </div>
    </form>
</form>
 </body>
</html> 