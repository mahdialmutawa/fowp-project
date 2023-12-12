<?php
if (isset($_POST['signnn'])) {
    $username = $_POST['username'];
    $userInputPassword = $_POST['pwd'];

    include('sign-in-func.php');

    if (isUsernameExist($username)) {
        // Get hashed password from the database
        $hashedPasswordFromDatabase = getHashedPassword($username);

        if ($hashedPasswordFromDatabase !== false) {
            // Hash the user input password
            $hashedUserInputPassword = password_hash($userInputPassword, PASSWORD_DEFAULT);

            // Compare the hashed user input password with the hashed password from the database
            if (password_verify($userInputPassword, $hashedPasswordFromDatabase)) {
                // Password is correct
                session_start();
                $_SESSION['username'] = $username;
                header("Location: ../../index.php");
                exit;
            } else {
                echo "<script>alert('Password isn\'t correct');</script>";
            }
        
        }
    } else {
        echo "Username does not exist.";
    }
}
?>