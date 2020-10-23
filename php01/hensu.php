<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>PHP開始タグ、終了タグを知る</li>
            <li>echoを使う(str,int)</li>
            <li>htmlタグを出力しみる</li>
            <li>変数を使う($hoge)</li>
            <li>. を使う(結合演算子)</li>
            <li>(演習)自分の好きな文字列を表示する</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ↓ここから -->
<?php
echo 'Hello world';
// print関数でも出力可
print('Hello world');
echo '長谷川';
echo 99;
print(99/9);
print(12%5);
print(123+5*2);
print((123+5)*2);
echo '<h1>タイトル</h1>';
$name='長谷川 意';
echo $name;
// 文字列の中でダブルクオーテーションを使いたい場合はバックスラッシュ
$namae="ここ\"ろ\"";
echo $name.$namae;
$age=25;
echo $name.$age;
echo $name.$age.$age;
print(date('G時i分'));
$today=new DateTime();
print($today->format('G時i分'))
?>

<?php
$i=1;
while($i<=10){
    print($i."\n");
    $i+=1;
    // $i++:と一緒
}

for($l=1;$l<=20;$l++){
    print($l."\n");
}

?>





    <!-- ↑ここまで -->
</body>

</html>
