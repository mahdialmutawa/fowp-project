<?php
    $userAns = $_POST['AnsF'];
    $correctAns = $_POST['answer'];
    $userEmail = $_POST['usermail'];
    
    if ($userAns == $correctAns) {
        header("location: ../ChangePassword.php?email=$userEmail");
    } else {
        echo "<script>alert('Answer isn\'t correct');</script>";
    }
?>