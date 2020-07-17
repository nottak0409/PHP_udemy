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
<?php
$fruits = [
  'apple' => 'りんご',
  'orange' => 'みかん',
  'lemon' => 'レモン',
  'tomato' => 'トマト',
  'peach' => '桃'
];

foreach($fruits as $english => $japanese) {
  print($english . ":" . $japanese . "\n");
};

$computer = [
  'win' => 'Windows',
  'mac' => 'Macintosh',
  'iphone' => 'iPhone',
  'ipad' => 'iPad',
  'android' => 'Android'
];

foreach($computer as $key => $value) {
  print($key . ":" . $value . "\n");
}
?>
</pre>
</main>
</body>
</html>
