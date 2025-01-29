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

var_dump ($personalInfos[1]['name']);//$personalInfosのnameのデータ型と値を表示。
echo ($personalInfos[1]['name']) .'の電話番号は' . ($personalInfos[1]['tel']) . 'です。' ;
?>

ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

🔵問２ ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
<?php
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

ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

🔵問３ ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー


🔵問３

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
    
    echo $yamada = '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

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
?>