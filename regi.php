<?php
require('dbconnect.php');
$error = [];
$form = [];

// 入力フォームから値を受け取り //
if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
  $form['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  if ($form['email'] === '') {
    $error['email'] = 'blank';
  }

  $form['password'] = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
  if ($form['password'] === '') {
    $error['password'] = 'blank';
  }

  $form['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  if ($form['name'] === '') {
    $error['name'] = 'blank';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>会員登録</title>
</head>
<body>
  <div id="box">
    <div class="resister">
      <h1>会員登録画面</h1>
    </div>
        <form action="" method="post" class="form">
          <dl>
            <div class="email">
              <label class="label">
                <dt>メールアドレス <span class="required">必須</span></dt>
                <dd><input type="text" name="email" class="email" required autocomplete="email" maxlength="255"></dd>
              </label>
            </div>
            <div class="password">
              <label class="label">
                <dt>パスワード <span class="required">必須</span></dt>
                <dd><input type="text" name="password" class="password" required autocomplete="current-password" maxlength="255"></dd>
              </label>  
            </div>
            <div class="name">
              <label class="label">
                <dt>ニックネーム <span class="required">必須</span></dt>
                <dd><input type="text" name="name" class="name" required autocomplete="nickname" maxlength="255"></dd>
              </label>
            </div>
            <div class="submit">
              <input type="submit" class=submit-btn value="登録する">
            </div>
          </dl>
      </form>
    </div>
  </div>

</body>
</html>