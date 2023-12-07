<?php
    if(isset($_POST['signnn'])){
        $username = $_POST['username'];
        $pass = $_POST['pwd'];
        include('sign-in-func.php');
        if(isUsernameExist($username))
        {
            if(isPasswordMatch($pass, $username))
            {
                session_start();

      
                $_SESSION['username'] = $username;

                
                header("Location: ../../index.php");
            }

            else 
            {
                echo "Incorrect password."; 
            }
        }

        else
        {
            echo "Username does not exist.";
        }
    }
?>