<?php
     include("db_conn.php");
     $query = "SELECT COUNT(*) AS sales_count, merchant_id ".
              "FROM sales ".
              "WHERE sale_date >= DATE_SUB(NOW(), INTERVAL 24 HOUR)".
              " GROUP BY merchant_id";
     $best = $conn->query($query); 
?>