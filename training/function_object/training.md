# 関数
## --- 関数Q1
割引価格を計算する関数を作成します。以下の条件のもと、下記のように割引価格を表示しましょう。

### --- 条件
- 通常価格を引数に受け取って割引価格に変換して返す関数を、calcDiscountPrice という名前で定義してください。
- 割引価格を$priceとして定義し、それを引数に上記の関数を実行しましょう。
- 関数を実行した返り値を、$discountPriceとして受け取って、下記のような文章を表示してください。
- 割引率は 20% として計算してください。

### --- 出力例
```
800円の商品が今だけ640円です！
```

### ---　✅解答
<?php
function CalcDiscountPrice($price){
    return ($price * 0.8);
}

    $price = 800;
    $FinalPrice = CalcDiscountPrice($price);
    
    echo $price . '円の商品が今だけ' . $FinalPrice . '円です！';
    
?>


## --- 関数Q2
引数に渡した整数を3の倍数かどうか判定する関数を作成します。以下の条件のもと、渡した数字が偶数かどうか判定しましょう。

### --- 条件
- 整数を引数に受け取って、3の倍数だった場合にtrue、そうではなかった場合にfalseを返す関数を、isMultipleOfThreeという名前で定義してください。
- 返り値をvar_dumpで出力しましょう。

### ---✅回答
<?php

    function isMultipleOfThree($integer){
        if($integer % 3 === 0){
            return true;
        }else{
            return false;
        }
        
    }
        $integer = 3;
        var_dump (isMultipleOfThree($integer));
?>

✅実行結果▶️
$integer = 3の時
bool(true)

$integer = 23の時
bool(false)

# オブジェクト
## --- オブジェクトQ1-1
商品クラスを使用して、条件を満たした上で下記の文字列を出力してください。

### --- 条件
- コンストラクタメソッドを作成してください
- 引数から `$param1` 受け取った商品名を `name` プロパティに格納してください
- 引数から `$param2` 受け取った商品の価格を `price` プロパティに格納してください


### --- 出力文字列
```
りんごの税抜価格は100円です。
```

```php
class Item
{
    public $name;
    public $price;
}
```

## --- オブジェクトQ1-2
Q1で使用した商品クラスを同じく使用して、条件を満たした上で下記の文字列を出力してください。

### --- 条件
- priceを税込価格に変換して返すメソッド名は `fetchCalcTaxInPrice` と命名してください。
- fetchCalTaxInPriceメソッドの返り値を文字列結合して、最終的な文字列を完成させてください。

### --- 出力文字列
```
みかんの税込価格は220円です。
```

## --- オブジェクトQ2-1
ショッピングカートを表す Cart クラスを作成し、商品の追加、合計金額の計算をできるようにしてください。

### --- 条件
- クラス名： Cart
- プロパティ: $items（商品リスト、配列）
- メソッド1: addItem($name, $price): 商品を追加する
- メソッド2: getTotal() :合計金額を返す

### --- 使用例:
```php
class Cart {
    // クラスを作成してください
}

$cart = new Cart();
$cart->addItem("りんご", 150);
$cart->addItem("バナナ", 100);

echo $cart->getTotal();  // 出力: 250
```