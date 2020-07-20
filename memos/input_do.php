<?php require('../memo/dbconnect.php') ?>
<!DOCTYPE>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>MySQL</title>
</head>
<h2>Practice</h2>
<pre>
<?php

$statement = $db->prepare('INSERT INTO memos set memo=?, created_at=NOW()');
$statement->execute(array($_POST['memo']));
echo 'メモが登録されました';
?>
<br />
<a href="index.html">新しくメモを登録する</a><br />
<a href="../memo/index.php">一覧に戻る</a>
</pre>
