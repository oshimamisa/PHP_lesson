🔵問1
<?php
// Your code here!
    function calcDiscountPrice($price)
    {
        return($price * 0.8);
    }
    
        $price = 800; //▶️今回出したい通常価格
        🟡$discountPrice = calcDiscountPrice($price);
        //▶️ここが言語化できるか身につけられるか
        
        echo $price . "円の商品が今だけ" . $discountPrice . "円です！";
        
?>

<?php

/* ✅関数処理のための基本の流れ✅
①関数名 calcDiscountPrice

②引数が何個あるか 1個。様々な金額で処理を行う可能性があり未定のため、$Priceで渡す

③返り値は何にするのか 通常価格に20%の割引を加えた割引価格
④途中処理は？ return(＄price * 0.8);
⑤呼び出し 文章の出力を支持されているので、echoで呼び出す

 */?>

 🔵問2

 <?php
    function isMultipleOfThree($number)
    
    {
        if($number % 3 === 0){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    
    
    $number = 12;
    $integer = isMultipleOfThree($number);
    
    //ここまで15分、▶️四則演算の記号%ではなく/で記述してしまっていたため正しく処理されず時間がかかった。
      ▶️ここまでの記述で3の倍数の判断結果によってtruefalseどちらを返すかの処理ができるところまではできた。
    //▶️返り値をvar_dumpで出力

    var_dump($number);
    //✅出力結果 trueint(12)
?> 



