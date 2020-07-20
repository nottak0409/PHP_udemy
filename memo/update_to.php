<?php require('dbconnect.php'); ?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../css/style.css">

<title>更新しました</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
$statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
$statement->execute(array($_POST['memo'], $_POST['id']));
?>
<p>メモの内容を保存しました。</p>
<a href="index.php">戻る</a>
</pre>
</main>
</body>
</html>
