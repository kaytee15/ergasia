<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "phplogin";


    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT *FROM user WHERE username = '$username' AND password ='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($username == "" && $password == ""){
        header('location:index.html');
    }
    if($row['username'] == $username && $row['password'] == $password){
        echo "hello " .$username." tap there to logout  ";
    }else{
        echo "<script>alert('Λαθος username H password')</script>";
        echo "<script>location.replace('index.html')</script>";
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    body{
        background-image: url(fonto3.png);
        background-attachment: fixed;
        background-repeat:repeat;
        background-size: 15%;
        background-position: center;
        
    }

h1{
     font-size: 2.3em;   
     background-color: rgba(0, 3, 8, 0.9263);
     color: rgb(255, 255, 255); 
     font-weight: 30px;
     text-align: center;
     border-radius: 40px;
     border: 8px solid rgb(0, 0, 0);
    margin: 20px 30.5% 0% ;
    display:inline-block ;

    padding: 0% 10% 0% 10%;
}
b{
  font-size: 1em;
  font-weight: 20px;
}
input{
    margin: 1% 70%;
    background-color: brown;
    
 }
 textarea{
  margin: 1% 30% 1% 30%;
  padding: 0% 5% 0% 5%;
   width: 40%;
  height: 200px;
  border-radius: 4px;
  background-color:brown;
 font-size: 1.3;
 font-weight: bold;
 font-size: 1em;
 border: 3px solid black;}

 label{
    margin: 2% 30% 1% 30%;

 background-color:brown;
 font-size: 1.3;
 font-weight: bold;
 font-size: 1em;
 border: 3px solid black;}
</style>
</head>
<a href="logout.php">logout</a>
<body>
<div>
    
    <h1>
        <b>
            Tμήμα Ψηφιακών Συστημάτων Σπάρτης
         </b>
    </h1>
 
</div>
<label for="story">ΓΡΑΨΕ ΝΕΑ ΑΝΑΚΟΙΝΩΣΗ</label>

<textarea  wrap=off placeholder="text here" cols="30" rows="5">
  </textarea>
  <input type="submit" value="post">

</body>
</html> 