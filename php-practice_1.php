<?php
// Q1 変数と文字列

<?php
$name = '安藤';

$newMessage = "私の名前は「" . $name . "」です。";
echo $newMessage;
?>

// Q2 四則演算

<?php
$num = 5*4;
$x = 2;

echo "$num \n";
echo($num/$x);
?>

// Q3 日付操作

<?php
// $currentTimestamp = time();
// echo date("Y年m月d日 H時i分s秒", $currentTimestamp);

// echo "現在は" . date("Y年m月d日 H時i分s秒", $currentTimestamp) . "です。\n";

🟡echo "現在は" . date("Y年m月d日 H時i分s秒") . "です。"
// ▶️ 第二引数を省略(渡していない)した形

// function cccc() {
//     // 
// }

// cccc();
?>


// Q4 条件分岐-1 if文

<?php
$device = 'Apple';//①$deviceに任意の文字列を格納
if ($device == 'windows') { //②$deviceの値が「windows」だったら、「使用OSは、windowsです。」と表示。
    echo '使用OSはwindowsです。';
}elseif ($device == 'mac') { //③$deviceの値が「mac」だったら、「使用OSは、macです。」と表示。
    echo '使用OSはmacです。';
}else{//④$deviceの値が上記2つ以外だったら、「どちらでもありません。」と表示。
    echo'どちらでもありません';
}

?>

✅；の入力忘れ注意
✅ ==と===の違いについて理解する

// Q5 条件分岐-2 三項演算子

<?php
$age = 23;
if($age <= 18){
    echo'未成年です。';
}elseif($age > 18){
    echo'成人です。';
}
?>

// Q6 配列

<?php
$ken = ['栃木県', '千葉県', '静岡県', '東京都'];
    var_dump($ken);
    echo $ken[0] . 'と' . $ken[1] . 'は関東地方の都道府県です。';
?>
✅シングルクォーテーションが飛び越えることはない
✅作りたい文章を一度書いてみて、どこに変数を置きたくて、どこで分割されるのかをみてみると分かりやすい

// Q7 連想配列-1

<?php
$array = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];
    
foreach ($array as $key => $value) {//$key => $valueを定義してるas
    echo $value. "\n";
}
?>

✅'と"の使い分けができるようにする
✅改行\nを覚える
✅(まるかっこ)と{なみかっこ}

// Q8 連想配列-2

<?php
// Your code here!
$array = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($array as $key => $value)//定義$arrayを$key => $valueとしている

if($key == '埼玉県'){ //もし$keyが埼玉県という値だったとき、
    echo $key . 'の県庁所在地は' . $value . 'です。' ; //このような形で表示する。
}
    
?>



// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>