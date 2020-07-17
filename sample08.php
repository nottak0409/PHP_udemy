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
<!-- ここにプログラムを記述します -->
<?php
$week = date('w');
$week_name = ['日', '月', '火', '水', '木', '金', '土'];
print("本日は" . $week_name[$week] . "曜日\n");
$age = ["・10代以下", "・20代", "・30代", "・40代", "・50代", "・60代以上"];
print("私は". $age[1] . "です。");
?>
</pre>
</main>
</body>
</html>
