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


// Q7 連想配列-1


// Q8 連想配列-2


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>