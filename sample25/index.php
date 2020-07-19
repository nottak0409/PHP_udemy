<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>
<?php
if (isset($_SESSION)){
print("セッションに値を保存しました。");
} else {
  print("セッションの保存に失敗しました");
}
?>
&raquo: <a href="page02.php">Page02へ</a>
</pre>
</main>
</body>
</html>
