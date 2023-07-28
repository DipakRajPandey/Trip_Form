<?php
if(isset($_POST["butt"])){

$server="localhost";
$username="root";
$password="";
$db="trip";
$con= new mysqli($server,$username,$password,$db);
if(!$con){
    die("Connection to this database failed to".mysqli_connect_error());
}
//echo"success connectig to the db"
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$sql="INSERT INTO `students` (`name`, `age`, `gender`, `phone`, `date`) VALUES ('$name', '$age',
 '$gender', '$phone', current_timestamp())";
 if($con->query($sql)==true){
 //echo"successfully inserted";
 echo "<p class='sum'>Thank you for joining us</p>";
 }
  else
 {
echo"ERROR .sql<br>$con->error";
 }
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
<Script>
</Script>
</head>
<body>
    <img src="pexels.jpg" alt=" image" class="bg"/>

    <div class="container">
        <h3>Wel com to JANJYOTI </h3>
        <h3> It is trip form</h3>
        <p>Enter your details to confirm your participation  in the trip</p>

        <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="POST" >
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="text"name="age"id="age"placeholder="Enter your age" required>
            <input type="button " name="gender" id="gender" placeholder="Enter your gender"required>
            <input type="phone"name="phone"id="phone"placeholder="Enter your phone"required>
                 
                <input type="submit"  class="btn" name="butt" value="submit">
                
    </div>

</body>
</html>