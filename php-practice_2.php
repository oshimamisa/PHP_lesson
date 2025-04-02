<?php
// Q1 tic-tac問題



<?php 

echo '1から100までのカウントを開始します' . "\n \n";

for($i=0; $i<101; $i++) {//カウンタの初期値は0、$iが101より小さい場合はずっと繰り返す、増減式処理1回ごとに1を加算していく

    if($i % 4 === 0 && $i % 5 === 0) { //$iが4でかつ5で割り切れるときはtic-tacと出力
        echo'tic-tac' . "\n"; 
    } elseif($i % 4 === 0) { //$iが4で割り切れるときはticと出力
        echo 'tic' . "\n";
    } elseif($i % 5 === 0) { //$iが5で割り切れる時はtacと出力
        echo 'tac' . "\n";
    } else { //上記のいずれでもない場合はカウンタの数字($i)をそのまま表示
        echo $i . "\n";
    }
}

?>



// Q2 多次元連想配列

🔵問１ ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//var_dump ($personalInfos[1]['name']);//$personalInfosのnameのデータ型と値を表示。
echo ($personalInfos[1]['name']) .'の電話番号は' . ($personalInfos[1]['tel']) . 'です。' ;
?>

ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

🔵問２ ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
<?php

$personalInfos = [
    [                 //[]が配列、今回は配列に配列が入っている状態
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222',
        // 'age' => '25'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel' => '09055556666'
    ],
];

foreach ($personalInfos as $number=>$person){
    echo $number+1 ."番目の" . $person['name'] . "さんのメールアドレスは" . $person['mail'] . "で、電話番号は" . $person['tel'] . "です。". "\n" ;
}
?>

// echo ($value) . "のメールアドレスは" . ($personalInfos[0]['mail'] ."で、電話番号は". ($personalInfos[0]['tel']) . "です。" );

/* <?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        // 'tel'  => '09011112222',
        // 'age' => '25'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$ageList = [25, 30, 18];

$personalInfos[0]['age'] = '25';
foreach ($personalInfos as $ageList => $personalInfos['age']){

var_dump($personalInfos);

}
?>

🟠ここから🟠<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222',
        // 'age' => '25'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];


var_dump($personalInfos);



foreach ($personalInfos as $personalInfos['name']['mail']['tel'] => $value){

echo ($personalInfos[0]['name']) . "のメールアドレスは" . ($personalInfos[0]['mail'] ."で、電話番号は". ($personalInfos[0]['tel']) . "です。" );

}
?>
 */

ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

🔵問３ ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
        // 'age' => '25'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$ageList = [25, 30, 18];

$personalInfos[0]['age'] = '25';

foreach ($ageList as $index => $age){
    $personalInfos[$index]['age'] = $age;
} 

var_dump($personalInfos);

    
//foreach ($ageLIst as $x => $y);

?>
ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー



// Q3 オブジェクト-1

<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
    
}

    $mio = new Student('1523', '実央');
    $yamada = new Student('120', '山田');
    
    echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

?>

// Q4 オブジェクト-2

<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject .'の授業に出席しました。' . '学籍番号：' . $this->studentId;
    }
    
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


?>


// Q5 定義済みクラス

// 🟠問１

<?php

$date = new DateTime();//現在自国を持つdatetimeインスタンスの作成
$date->modify('-1month');

echo $date->format('Y-m-d');

?>

// 🟠問２
<?php

$datetime1 = new DateTime('1992-04-25');
$datetime2 = new DateTime();
$interval = $datetime1->diff($datetime2);

echo $interval->format('あの日から' . '%a' . '日経過しました。');
?>

