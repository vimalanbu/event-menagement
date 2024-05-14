<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$number = $_POST['phone_number'];
$altnumber = $_POST['Alt_phone_number'];
$email = $_POST['email'];
$date = $_POST['date'];
$Event_venues=$_POST['Event_venues'];
$Type_Of_Price=$_POST['Type_Of_Price'];
$city = $_POST['city'];
$street = $_POST['street'];
$pincode= $_POST['pincode'];
$Address= $_POST['Address'];



$conn= new mysqli('localhost','root','','user_db');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into registration(fname,lname,phone_number,alt_phone_number,email,date,Event_venues,Type_Of_Price,city,street,pincode,Address)values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiisissssis",$fname,$lname,$number,$altnumber,$email,$date,$Event_venues,$Type_Of_Price,$city,$street,$pincode,$Address);
    $stmt->execute();
  
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS_File/msg_page.css">
</head>
<body>
    <div class="container">
        <div class="msg">
            <h3>Event Registration </h3>
            <h4>
            <?php
                 echo"Registration Successfully....";
            ?>
            Thank you for Booking
            </h4>
            <button class="btn"><a href="Home_page.php" class="btn">Home Page</a></button>
            
        </div>
    </div>
    
</body>
</html>
