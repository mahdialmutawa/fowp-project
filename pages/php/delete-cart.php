<?php
   include("db_conn.php");
   session_start();
   if(isset($_POST['Del'])){
       if(isset($_SESSION['cart'])){
        $id = $_POST['hiddenId'];
        foreach($_SESSION["cart"] as $k => $item){
            if($item->id == $id){

                $pnum = $item->pnum;
                $q = "update product
                set quantity = quantity + ".$item->amount." 
                where pnum = ".$pnum.";
                ";
                $conn->query($q);
                if($conn->affected_rows > 0){
                    unset($_SESSION['cart'][$k]);
                    header("location: ../cartPage.php");
                }
                break;
            }
        }
     }
   }
?>
   
