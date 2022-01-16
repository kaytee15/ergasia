<style>
.mycss{
font-size: 1.7em;
color: white;
border:2px solid #000;
background: brown;
font-weight: bold ;  

padding: 5px 42.5% 0%;
margin:20px;
}
.mycss1{
font-size: 1.7em;
 font-weight: bold ;  
color: white;
border:2px solid #000;
background: brown;
padding: 5px 40% ;
margin: 5px;


}
</style>
<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "login";


    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT *FROM daskaloi WHERE username = '$username' AND password ='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($username == "" && $password == ""){
        header('location:index.html');
    }
    if($row['username'] == $username && $row['password'] == $password){
      
        echo "<p class='mycss'>   Hello $username";

        echo "<p class='mycss1'>  Tap there to ";

    }else{
        echo "<script>alert('wrong username or password')</script>";
        echo "<script>location.replace('index.html')</script>";
    }
"</p>";
"</p>";


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
    a{
        color:black;
        font-size:1.2em;
        border: 5px solid black;
    }
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
    margin: 1% 47.5%;
    background-color: brown;
    font-size: 1.5em;    
 }
 a{
     font-weight: 5px; 
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