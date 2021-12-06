<?php
$dsn = 'mysql:dbname=shisa;host=localhost';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn,$user,$password);
$dbh ->query('SET NAMES utf8');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>検索</title>
</head>
<body>
<form action="search.php" method="POST">
    <p>検索したいIDを入力してください</p>
    <input type="text" name="id">
    <input type="submit" value="検索">
  </form>
  <?php
  // 2.SQL文を実行
  if(!empty($_POST["id"])){
    $id = $_POST["id"];
    $sql = "SELECT*FROM `contact` WHERE `id` = $id";
    $stmt = $dbh ->prepare($sql);
    $stmt ->execute();
    $rec = $stmt ->fetch(PDO::FETCH_ASSOC);
    // var_dump($rec);

    echo $rec['id'].'<br>';
    echo $rec['name'].'<br>';
    echo $rec['email'].'<br>';
    echo $rec['content'].'<br>';

  }
  ?>
  

  
</body>
</html>