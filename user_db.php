<?php

$conn = mysqli_connect("localhost","root","","user_db");
 if(!$conn){
    die("connection Error");
 }