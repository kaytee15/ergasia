<?php
(((((((((((((((((
try{
    $db=new PDO("mysql:host=localhost;dbname=ergasia;charset=utf8","root","");
}catch (PDOException $e){
    echo $e->getMessage();
}
 ))))))))))))))))

$host = "localhost";
$dbname = "login";
$username = "root";
$password = "";

try{
  $conn=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connection succeeded";
}catch (PDOException $e){
  echo"connetions failed:"  . $e;
}
?>
