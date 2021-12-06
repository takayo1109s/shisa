<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$content = htmlspecialchars($_POST["content"]);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>入力内容の確認</title>
</head>
<body>
  <h1>入力内容の確認</h1>
  <?php
  if($name == ''){
    echo "名前が入力されていません。<br>";
  }else {
    echo "メンソーレ、$name さん。<br>";
  }

  if($email == ''){
    echo "メールアドレスが入力されていません。<br>";
  }else {
    echo "メールアドレス：$email<br>";
  }

  if($content == ''){
    echo "お問い合わせ内容が入力されていません。<br>";
  }else {
    echo "お問い合わせ内容：$content<br>";
  }
  ?>

  <form action="thanks.php" method="POST">
    <input type="hidden" name="name" value="<?php echo $name?>">
    <input type="hidden" name="email" value="<?php echo $email?>">
    <input type="hidden" name="content" value="<?php echo $content?>">
    <button type="button" onclick="histry.back();" style="display:block">戻る</button>
    <button type="submit">OK</button>
  </form>
  
</body>
</html>