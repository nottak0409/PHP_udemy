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
//for($i=1; $i<=365; $i++) {
//  $day = date('n/j(D)' , strtotime('+' . $i . 'day'));
//  print ($day . "\n");
// }
$i = 1;
while($i<=365){
  $day = date('n/j(D)', strtotime('+' . $i . 'day'));
  print ($day . "\n");
  $i++;
}
?>
</pre>
</main>
</body>
</html>
