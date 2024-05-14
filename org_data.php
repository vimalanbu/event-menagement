<?php
$name = $_POST['name'];
$number = $_POST['phnenum'];
$member = $_POST['member'];
$email = $_POST['email'];
$date = $_POST['date'];
$place = $_POST['place'];
$Address= $_POST['address'];



$conn= new mysqli('localhost','root','','user_db');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into org_db(name,phnenum,member,email,date,place,address)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("siissss",$name,$number,$member,$email,$date,$place,$Address);
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
                 echo"Successfully....";
            ?>
            Thank you for Booking
            </h4>
            <button class="btn"><a href="disply_org.php" class="btn">ORGANIZATION</a></button>
            
        </div>
    </div>
    
</body>
</html>
