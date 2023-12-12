<?php
if(isset($_POST['pay'])){
    include('db_conn.php');
    
    function generate_order_id() {
        return uniqid();
    }

    session_start();

    if (!isset($_SESSION['username']))
     {
        header("location: ../login.php");
        exit(); 
    }

    $oId = generate_order_id();

    $q = "INSERT INTO orders (id, customer) VALUES (?, ?)";
    
    
    $stmt = $conn->prepare($q);
    $stmt->bind_param("ss", $oId, $_SESSION['username']);

    try {
        $stmt->execute();
        $stmt->close();

        foreach ($_SESSION['cart'] as $k => $order) {
            $qp = "INSERT INTO orders_item (order_id, prod_id) VALUES (?, ?)";
            $sells = "INSERT INTO sales (product_id, merchant_id) VALUES (?, ?)";
            $stmt = $conn->prepare($qp);
            $stmt->bind_param("ss", $oId, $order->pnum);
            $stmt->execute();
            $stmt->close();
            $s = $conn->prepare($sells);
            $s->bind_param("ss", $order->pnum, $order->merchant_id);
            $s->execute();
            $s->close();
            unset($_SESSION['cart'][$k]);
        }
        
        unset($_SESSION['cart']);

        header("location: ./proc_pay.php");
    } catch (Exception $e) 
    {
        echo "Error: " . $e->getMessage();
    }
    exit; // Ensure that no further PHP code is executed
}
?>
