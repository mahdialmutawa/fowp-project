<?php
    if(isset($_POST['test'])){
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $pnum = $_POST["pnum"];
        $password = $_POST["pwd"];
        $secQ = $_POST["securityQuestion"];
        $secAns = $_POST["securityAnswer"];
        
        include('db_conn.php');
        $sql = "SELECT username, email, phone FROM customer WHERE username='$fname' OR email='$email' OR phone='$pnum'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Username/email/phone number already exists.";
        } else {
            $sql = "INSERT INTO customer (username, password, email, phone, security_q,security_ans) VALUES ('$fname','$password','$email','$pnum', '$secQ', '$secAns')";

            if ($conn->query($sql) === TRUE) {
                header("Location: ../Login.php");
                exit;
            } else {
                echo "There exists an account with the provided details.";
            }
        }
        $conn->close();
    }
?>