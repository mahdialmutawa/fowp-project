<?php
    $conn = mysqli_connect('localhost','root','root');
    mysqli_select_db($conn, 'web');
    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }
?>