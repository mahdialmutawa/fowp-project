<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    include("db_conn.php");
    $newPassword = $_POST["pass1"];
    $email = $_GET["email"];
    echo $email;
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "UPDATE customer SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashedPassword, $email);

    if ($stmt->execute()) 
    {
      echo "Password updated successfully";
    } else 
    {
        echo "Error updating password: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>