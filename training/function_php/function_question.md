# 関数

## 問題 1:

商品名を受け取り、これは、〇〇です！ というメッセージを返す関数 returnProductInfo を作成してください。〇〇には渡された商品名が入ります。

```php
// 使用例
$productName = "Tシャツ";
$info = returnProductInfo($productName);
echo $info; // 出力: こんにちは、Tシャツさん！
```
## 問題 2:

商品名と価格を受け取り、〇〇の価格は△△円です。 というメッセージを返す関数 displayPrice を作成してください。〇〇には商品名、△△には価格が入ります。



```php
$productName = "マグカップ";
$productPrice = 800;
$priceMessage = displayPrice($productName, $productPrice);
echo $priceMessage; // 出力: マグカップの価格は800円です。
```

## 問題 3:

商品名と価格を受け取り、税込み価格（消費税率10%とします）を計算して返す関数 calculateTaxedPrice を作成してください。


## 問題 4:

商品名、価格、個数を受け取り、合計金額（税込み）を計算して返す関数 calculateTotalPrice を作成してください。問題3の calculateTaxedPrice 関数を再利用してください。


## 問題 5:

複数の商品情報を配列で受け取ります。各商品情報は連想配列で、name（文字列）、price（整数）、quantity（整数）のキーを持ちます。全ての商品の合計金額（税込み）を計算して返す関数 calculateTotalOrderPrice を作成してください。問題4の calculateTotalPrice 関数を再利用してください。


## 問題 6 (挑戦問題):

問題5の関数 calculateTotalOrderPrice を拡張して、もし合計金額が5000円以上の場合、送料500円を追加する機能を追加してください。送料を含めた最終的な合計金額を返すようにしてください。