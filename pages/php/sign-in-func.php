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

function isPasswordMatch($Password, $fname) {
    global $conn;
    $sql = "SELECT username FROM Customer WHERE Password  = '". $Password ."' AND username = '" .$fname."';";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}
?>