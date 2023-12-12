<?php
    include("db_conn.php");
    function generate_item_id() {
        return uniqid();
    }
      
    session_start();
    if(isset($_GET["but"])){
        $prodId = $_GET["pid"];
        $merchId = $_GET["mid"];
        $number = 0;
        $number = $_GET["text"];
        $q = "update product
        set quantity = quantity - ".$number."
        where pnum = ".$prodId.";
        ";

        $conn->query($q);

        if($conn->affected_rows > 0){
            $q = "select * from product where pnum = $prodId;";
            $res = $conn->query($q);
            if($res->num_rows > 0){
                while($row = $res->fetch_assoc()){
                    $product = new stdClass();
                    $product->pname = $row['pname'];
                    $product->pnum = $row['pnum'];
                    $product->price = $number * $row['price'];
                    $product->img = $row['img'];
                    $product->merchant_id = $row['merchant_id'];
                    $product->category = $row['category'];
                    $product->id = generate_item_id();
                    $product->amount = $number;
                }
                if(isset($_SESSION['cart'])){
                    $_SESSION['cart'] = array_merge($_SESSION['cart'], [$product]);
                }else{
                    $_SESSION['cart'] = array($product);
                }
                header("location: ../productPage.php?pid=$prodId&mid=$product->merchant_id&category=$product->category");
                exit();
            }
        }
    }
?>