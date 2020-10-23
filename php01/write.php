<?php
$name=$_POST['name'];
$mail=$_POST['mail'];

// ファイルに書き込み
$date=date('Y年m月d日　H時i分s秒');

//文字作成
$file=fopen('./data/date.txt','a');
fwrite($file,$date.','.$name.','.$mail.','."\n");
fclose($file);


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <p><?=$str?></p>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
