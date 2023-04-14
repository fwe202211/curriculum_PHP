<?php
  //②フォームからのデータを受け取ります
$my_name = $_GET["name"];
$my_number = $_GET["number"];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて変数に入れてください
$number = $my_number*mt_rand(1,6);

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
if($number <= 10){
  $luck = "凶";
}elseif(11 <= $number && $number <= 15){
  $luck = "小吉";
}elseif(16 <= $number && $number <= 20){
  $luck = "中吉";
}elseif(21 <= $number && $number <= 25){
  $luck = "吉";
}elseif(26 <= $number && $number <= 35){
  $luck = "大吉";
}else{
  $luck = "残念";
}
date_default_timezone_set('Asia/Tokyo');
  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
echo date("Y-m-d H:i:s", time());
echo "<br>";
echo "名前は${my_name}です。<br>";
echo "番号は${number}です。<br>";
echo "結果は${luck}です。";
