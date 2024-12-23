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



// Q9 連想配列-3 🟢Q8から追記をした部分

//🟠Q9
//⚪️2項目の追加

// $array = [ 
//     '静岡県' => '静岡市',
//     '北海道' => '札幌市'
// ]; ✅条件追加の書き方

$array['静岡県'] = '静岡市';
$array['北海道'] = '札幌市';


//⚪️呼び出し
foreach ($array as $key => $value) {//定義$arrayを$key => $valueとしている

    if (
        $key == '東京都' ||
        $key == '神奈川県' ||
        $key == '千葉県' ||
        $key == '埼玉県' ||
        $key == '栃木県' ||
        $key == '群馬県' ||
        $key == '茨城県') { //もし$keyがこれらだったら
        echo $key . 'の県庁所在地は' . $value . 'です。' . "\n"; //関東地方の場合の表示方法
    }else{ //それ以 外だったら
        echo $key . 'は関東地方ではありません。' . "\n"; //関東地方以外の表示方法 関東地方じゃない❌→関東地方以外⭕️
    }
}
    
    
?>


// Q10 関数-1

<?php

function sayHi($name)

{
    echo $name . 'さん、こんにちは。' . "\n";
}

sayHi('金谷');
sayHi('安藤');

?>



// Q11 関数-2

<?php //定義と呼び出しがあることを意識する

function calcTaxInPrice($price)//税抜き価格を引数に受け取って税込価格に変換して返す関数を、calcTaxInPrice という名前で定義してください。

{
    return ($price * 1.1); //消費税は 10% として計算してください。
}
$price = 1000; //1000円の税込金額を出す
$taxInPrice = calcTaxInPrice($price);//ここが両辺で同じ意味になることを理解する

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';//echoで呼び出し

?>

✅引数と返り値


// Q12 関数とif文


// Q13 関数とswitch文


?>