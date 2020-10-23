<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>




<body>
    <?php
    // ファイルを開く
    $openFile=fopen('./data/date.txt','r');

    // ファイル内容を1行ずつ読み込んで出力
    echo '<div class="w-75">';
    echo '<table class="table">';
    echo '<thead class="thead-dark">';
    echo '<tr>';
    echo '<th class="col-xs-2">日付</th><th class="col-xs-2">名前</th>';
    echo '<th class="col-xs-2">メールアドレス</th>';
    echo '</tr>';
    while ($str = fgets($openFile)) {
        $newStr = explode(',', $str);
        echo '<tr>';
        foreach ($newStr as $key => $val) {
            // $valは使わない
            echo '<td>' . $newStr[$key] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';

    fclose($openFile);
    ?>
  


</body>
</html>
<!-- // ファイルを閉じる -->
