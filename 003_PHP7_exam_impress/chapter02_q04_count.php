<head><title>chapter02_q04_count</title>
</head><body>

<?php
$string = "  hello world  ";

echo strlen($string) . "\n";
# 文字数を数える

echo "<br />" ;

echo substr($string ,0,3) . "\n";
# 指定した範囲内の文字を表示する

echo "<br />" ; 

echo str_replace('o','O',$string) . "\n";
# 指定した文字を置き換える

echo "<br />" ; 

echo trim($string) . "\n";
# 前後の空白を削除する
?>
</body>