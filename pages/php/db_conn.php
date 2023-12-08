<?php
    $conn = mysqli_connect('localhost','root','mm726403');
    mysqli_select_db($conn, 'web');
    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }
?>