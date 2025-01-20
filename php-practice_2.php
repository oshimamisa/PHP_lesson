<?php
// Q1 tic-tac問題

<?php
function tohundred($count)

{
if($count%4 == 0 && $count%5 == 0){
    return 'tic-tac';
}else{
    return $count;
}

if($count%4 == 0){
    return 'tic';
}
    
if($count%5 == 0){
    return 'tac';
}

} 

echo tohundred('20');

?>

// Q2 多次元連想配列


// Q3 オブジェクト-1


// Q4 オブジェクト-2


// Q5 定義済みクラス
?>