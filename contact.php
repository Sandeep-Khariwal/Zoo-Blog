<?php
// $insert = false;
error_reporting(0);
if(isset($_POST['name'])){
$server = "localhost";
$username= "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("Connection Error" . mysqli_connect_error());
}
// echo "Succes";

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO `contactzoo`.`contactzoo` (`name`, `number`, `email`, `address`, `dt`) VALUES ('$name', '$number', '$email', '$address', current_timestamp());";
// echo $sql;
if($con->query($sql) == true){
//  $insert = ture;

echo "<p class='submsg'  > Thanks For Showing your interest!!!! We will contact you soon...</p>";
 }
}
else{
    // echo "error : $sql <br> $conn->error";
}
$con->close;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: url('contactbg.jpg') no-repeat center center/cover;
            height: 80vh;
        }
        .submsg{
            margin-top: 20vh;
            font-size: 27px;
            margin-left: 24vw;
            font-weight: bolder;
        }
        .container h1 {
            color: rgb(0, 0, 0);
            position: absolute;
            top: 36vh;
            left: 20vw;
            font-size: 51px;
            margin-left: 280px;

          
        }

        form {
            color: rgb(0, 0, 0);
            font-weight: bolder;
            border: 2px solid rgb(0, 0, 0);
            border-radius: 20px;
            width: 35vw;
            height: 45vh;
            position: absolute;
            padding-left: 100px;
            padding-top: 130px;
            top: 30vh;
            left: 10vw;
            font-size: 25px;
            margin-left: 280px;

        }
        form input{
            margin-top: 20px;
            font-size: 20px;
            padding: 1px;
            width: 300px;
        }
        .btn button{
            cursor: pointer;
           font-size: 17px;
           margin-top: 30px;
           margin-left: 30px;
           padding: 3px;
           border: 2px solid rgb(39, 37, 37);
           border-radius: 10px;
        }
        .btn{
            margin-left: 80px;
        }
        .btn button:hover{
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="nav">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li> <a href="http://localhost/Zoo%20Blog/contact.php"> Contact </a></li>
                <li> <a href="http://localhost/Zoo%20Blog/ticket.php"> Book Tickets</a> </li>
               
            </ul>
        </nav>
    </div>
    <div class="container">
        <h1>Contact Form</h1>
        <form action="contact.php" method = "post">
            Name:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" id="name" required placeholder="Enter Your Name"> <br>
            Phone No. <input type="number" name="number" id="number" required placeholder="Enter your phone Number"> <br>
            Email Id &nbsp;&nbsp;&nbsp;<input type="email" name="email" required id="email" placeholder="Enter Your Email Id"> <br>
            Address:&nbsp;&nbsp; <input type="text" name="address" id="address" required placeholder="Enter Your Address">
            <div class="btn">
                <button type="submit" id="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>


    </form>
    </div>
   
</body>

</html>