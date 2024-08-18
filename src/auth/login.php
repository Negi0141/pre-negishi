<?php 
require("../dbconnect.php");
session_start();

if (!empty($_POST)) {
    /* 入力情報の不備を検知 */
    if ($_POST['email'] === "") {
        $error['email'] = "blank";
    }
    if ($_POST['password'] === "") {
        $error['password'] = "blank";
    }
    
    /* メールアドレスとパスワードの一致を検知 */
    if (!isset($error)) {
        $user = $dbh->prepare('SELECT * FROM user WHERE email=?');
        $user->execute(array(
            $_POST['email']
        ));
        $record = $user->fetch();

        if ($record && password_verify($_POST['password'], $record['password'])) {
            // ログイン成功
            $_SESSION['user_id'] = $record['user_id'];
            header('Location: ../../../main/login-top.php');   // ログイン後のページへ移動
            exit();
        } else {
            // ログイン失敗
            $error['login'] = 'failed';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>ログイン</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
    <div class="content">
        <form action="" method="POST">
            <h1>ログイン</h1>
            <p>メールアドレスとパスワードを入力してログインしてください。</p>
            <br>

            <div class="control">
                <label for="email">メールアドレス<span class="required">必須</span></label>
                <input id="email" type="email" name="email">
                <?php if (!empty($error["email"]) && $error['email'] === 'blank'): ?>
                    <p class="error">＊メールアドレスを入力してください</p>
                <?php endif ?>
            </div>

            <div class="control">
                <label for="password">パスワード<span class="required">必須</span></label>
                <input id="password" type="password" name="password">
                <?php if (!empty($error["password"]) && $error['password'] === 'blank'): ?>
                    <p class="error">＊パスワードを入力してください</p>
                <?php endif ?>
            </div>

            <?php if (!empty($error["login"]) && $error['login'] === 'failed'): ?>
                <p class="error">＊ログインに失敗しました。メールアドレスまたはパスワードが違います。</p>
            <?php endif ?>

            <div class="control">
                <button type="submit" class="btn">ログイン</button>
            </div>
        </form>
    </div>
</body>
</html>
