<?php
    
        echo "<html>";
        echo "<head>";
        echo "<style>";
        echo "body {";
        echo "    font-family: 'Arial', sans-serif;";
        echo "    background-color: #f8f9fa; ";
        echo "    text-align: center;";
        echo "    margin: 100px;";
        echo "}";
        echo "h1 {";
        echo "    color: #204F6A;";
        echo "    padding: 20px;";
        echo "    background-color: #ffffff; /* White background color */";
        echo "    border-radius: 5px;";
        echo "    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);";
        echo "    position: relative;";
        echo "    display: inline-block;";
        echo "}";
        echo "h1 .loader {";
        echo "    border: 8px solid #f3f3f3;";
        echo "    border-top: 8px solid #204F6A; /* Blue loader color */";
        echo "    border-radius: 50%;";
        echo "    width: 50px;";
        echo "    height: 50px;";
        echo "    animation: rotate 1s linear infinite;";
        echo "    position: absolute;";
        echo "    bottom: -85px;";
        echo "    left: 50%;";
        echo "    margin-left: -25px;";
        echo "}";
        echo "@keyframes rotate {";
        echo "    0% { transform: rotate(0deg); }";
        echo "    100% { transform: rotate(360deg); }";
        echo "}";
        echo "</style>";
        echo "</head>";
        echo "<body>";
        
        echo "<h1>Processing payment, please wait...<div class='loader'></div></h1>";

        echo "<script>";
        echo "setTimeout(function() {";
        echo "    window.location.href = '../order-state.php';";
        echo "}, 2500);";
        echo "</script>";

        echo "</body>";
        echo "</html>";
        
    
?>
