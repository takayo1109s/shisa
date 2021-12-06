<?php
$dsn = 'mysql:dbname=shisa;host=localhost';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn,$user,$password);
$dbh ->query('SET NAMES utf8');

$sql = "SELECT * FROM `contact` WHERE 1";
$stmt = $dbh ->prepare($sql);
$stmt ->execute();

while(true){
  $rec = $stmt ->fetch(PDO::FETCH_ASSOC);
  if($rec == false){
    break;
  }
echo $rec['id'].'<br>';
echo $rec['name'].'<br>';
echo $rec['email'].'<br>';
echo $rec['content'].'<br>';
echo '<hr>';

}

?>