<?php
require_once('db.php');
$query ="SELECT * FROM `org_db`";
$result =mysqli_query($connection,$query);
?>
<html>
<head>
    <title>ORGANIZATION</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS_File/Admin_details_page.css">
</head>
<body>
    <div class="container-fluid">
      <!-- Nevigation start-->
    <nav class="navbar navbar-expand-lg col-12">
      <div class="col-8"> 
      <h3>ORGANIZATION PANEL</h3>
      </div>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav col">
        <a class="nav-link"href="Home_page.php">Home</a>
      </div>
      </div>
    </nav>

    <div class="User">
        <h2 id="Events Registration">User Events Details</h2>
    </div>
    <div class="row ">
        <div class="col">
            <div class="card mt-3">
                <div class="card-body">
                    <table class="table table-bordered text-center border border-dark">
                        <tr class="head bg-info border border-dark">
                            <th>First Name</th>
                            <th>Phone Number</th>
                            <th>Members</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Place</th>
                            <th>Address</th>
                        </tr>
                        <tr>
                            <?php
                            while($row= mysqli_fetch_assoc($result))
                            {
                            ?>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['phnenum'];?></td>
                            <td> <?php echo $row['member'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['place'];?></td>
                            <td><?php echo $row['address'];?></td>
                        </tr>
                        <?php

                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="click.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>