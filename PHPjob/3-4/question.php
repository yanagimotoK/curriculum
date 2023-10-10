<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$questions = [
    'ネットワークのポート番号は何番？' => ['80', '22', '20', '21'],
    'Webページを作成するための言語は？' => ['PHP', 'Python', 'JAVA', 'HTML'],
    'MySQLで情報を取得するためのコマンドは？' => ['join', 'select', 'insert', 'update']
];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$correct_answers = [
    'ネットワークのポート番号は何番？' => '80',
    'Webページを作成するための言語は？' => 'HTML',
    'MySQLで情報を取得するためのコマンドは？' => 'select'
];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3章確認テスト</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="secound-page-inner">
    <form action="answer.php" method="post">
        <p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $name; ?>さん</p>
        <!--フォームの作成 通信はPOST通信で-->

        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
          <div class="question">
            <?php foreach ($questions['ネットワークのポート番号は何番？'] as $key): ?>
                <input type="radio" name="q1" value="<?php echo $key; ?>"><?php echo $key; ?><br>
            <?php endforeach; ?>
          </div>
        <h2>②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
          <div class="question">
            <?php foreach ($questions['Webページを作成するための言語は？'] as $key): ?>
                <input type="radio" name="q2" value="<?php echo $key; ?>"><?php echo $key; ?><br>
            <?php endforeach; ?>
          </div>
        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
          <div class="question">
            <?php foreach ($questions['MySQLで情報を取得するためのコマンドは？'] as $key): ?>
                <input type="radio" name="q3" value="<?php echo $key; ?>"><?php echo $key; ?><br>
            <?php endforeach; ?>
          </div>
        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="correct_answer_q1" value="<?php echo $correct_answers['ネットワークのポート番号は何番？']; ?>">
        <input type="hidden" name="correct_answer_q2" value="<?php echo $correct_answers['Webページを作成するための言語は？']; ?>">
        <input type="hidden" name="correct_answer_q3" value="<?php echo $correct_answers['MySQLで情報を取得するためのコマンドは？']; ?>">
        <input type="submit" value="回答">
    </form>
  </div>
</body>
</html>