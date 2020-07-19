<?php
$email = "nottak0409@h2o-space.com";

mb_language('Japanese');
mb_internal_encoding('UTF-8');

$from = 'noreply@example.com';
$subject= 'よくわかるPHPの教科書';
$body= 'このメールはよくわかるphpの教科書から送信してます';

$success = mb_send_email($email, $subject, $body, 'From: ' . $from);
?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php if ($success) : ?>
電子メールを送信しました。メールボックスを確認してみてください。
<?php else : ?>
電子メールの送信に失敗しました。webサーバーの設定を確認してみてください。
<?php endif; ?>
</pre>
</main>
</body>
</html>
