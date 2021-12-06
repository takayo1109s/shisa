<?php
$name = ($_POST["name"]);
$email = ($_POST["email"]);
$content = ($_POST["content"]);

$dsn = 'mysql:dbname=shisa;host=localhost';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn,$user,$password);
$dbh ->query('SET NAMES utf8');

$sql = 'INSERT INTO `contact`(`name`, `email`, `content`) VALUES ("'.$name.'","'.$email.'","'.$content.'")';

$stmt = $dbh -> prepare($sql);
$stmt -> execute();

$dbh = null;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問合せありがとう</title>
</head>
<body>
  <h1>お問い合わせありがとうございました</h1>
  <div>
    <h2>お問い合わせ内容</h2>
    <p>名前：<?php echo $name?></p>
    <p>メールアドレス：<?php echo $email?></p>
    <p>お問合せ内容：<?php echo $content?></p>
  </div>
  
</body>
</html>