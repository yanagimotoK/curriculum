<?php
date_default_timezone_set('Asia/Tokyo');

  //②フォームからのデータを受け取ります
  $name = $_POST['name'];
  $number = $_POST['number'];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $random_number = rand(1, 6);
  $result_number = $number * $random_number;

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  if ($result_number <= 10) {
    $fortune = "凶";
    } elseif ($result_number <= 15) {
        $fortune = "小吉";
    } elseif ($result_number <= 20) {
        $fortune = "中吉";
    } elseif ($result_number <= 25) {
        $fortune = "吉";
    } elseif ($result_number <= 36) {
        $fortune = "大吉";
    } else {
        $fortune = "残念";
    }
?>
  <!-- //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう -->
  <p><?php echo date('Y-m-d H:i:s'); ?></p>
  <p>名前: <?php echo $name; ?></p>
  <p>番号: <?php echo $result_number; ?></p>
  <p>結果: <?php echo $fortune; ?></p>
  