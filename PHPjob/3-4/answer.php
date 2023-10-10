<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$user_answers = [
    'ネットワークのポート番号は何番？' => $_POST['q1'],
    'Webページを作成するための言語は？' => $_POST['q2'],
    'MySQLで情報を取得するためのコマンドは？' => $_POST['q3']
];
$correct_answers = [
    'ネットワークのポート番号は何番？' => '80',
    'Webページを作成するための言語は？' => 'HTML',
    'MySQLで情報を取得するためのコマンドは？' => 'select'
];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkAnswer($user_answer, $correct_answer) {
    if ($user_answer == $correct_answer) {
        return '正解！';
    } else {
        return '残念・・・';
    }
}
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
    <div class="third-page-inner">
        <p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>
        <p>①の答え</p>
        <!--作成した関数を呼び出して結果を表示-->
        <p><?php echo checkAnswer($user_answers['ネットワークのポート番号は何番？'], $correct_answers['ネットワークのポート番号は何番？']); ?></p>

        <p>②の答え</p>
        <!--作成した関数を呼び出して結果を表示-->
        <p><?php echo checkAnswer($user_answers['Webページを作成するための言語は？'], $correct_answers['Webページを作成するための言語は？']); ?></p>

        <p>③の答え</p>
        <!--作成した関数を呼び出して結果を表示-->
        <p><?php echo checkAnswer($user_answers['MySQLで情報を取得するためのコマンドは？'], $correct_answers['MySQLで情報を取得するためのコマンドは？']); ?></p>
    </div>
</body>
</html>