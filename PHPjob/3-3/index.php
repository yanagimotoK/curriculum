<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice2</title>
</head>
<body>
  <!-- ①フォームを作成しましょう -->
  <!-- ここにフォームを記述してください -->
  <form action="result.php" method="post">
    好きな名前を入れてください<br>
    <input type="text" name="name" required><br>
    1~6の中で好きな数字を入れてください<br>
    <input type="text" name="number"><br>
    <input type="submit" value="送信">
  </form>

  <br>
  <form action="result.php" method="get">
    名前：<input type="text" name="my_name" />
    <br>
    メールアドレス：<input type="text" name="my_mail" />
    <br>
    パスワード：<input type="password" name="password" />
    <br>
    性別：
        <input type="radio" name="sex" value="男性">男性
        <input type="radio" name="sex" value="女性">女性
    <br>
    年齢：
        <select name="age">
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
        </select>
    <br>
    <input type="submit" value="送信" />
  </form>
</body>
</html>
