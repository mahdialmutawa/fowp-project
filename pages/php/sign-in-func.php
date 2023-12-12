<?php
include('db_conn.php');
function isUsernameExist($username) 
{
   global $conn;
    $sql = "SELECT username  FROM Customer WHERE username = '". $username."'";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) 
    {
        return true;
    } 
    else 
    {
        return false;
    }
}

function getHashedPassword($username) {
    global $conn; 

    $sql = "SELECT password FROM customer WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['password'];
    } else {
        return false;
    }
}
?>