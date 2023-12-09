<?php
/// @Dev-K0
    include("db_conn.php");
    $category = $_GET['category'];
    $query = 'select category, pname, price, img, merchant_id,pnum, availability '
            .'from product, merchant '
            .'where merchant_id = merchant.id ' 
            .'AND category = \''.$category.'\';';
    $prods = $conn->query($query);
    $best_merch = $merchants;
    if($prods->num_rows > 0){
        while ($row = $prods->fetch_assoc()) {
            // Create product object
            $product = new stdClass();
            $product->pname = $row['pname'];
            $product->price = $row['price'];
            $product->img = $row['img'];
            $product->merchant_id = $row['merchant_id'];
            $product->pnum = $row['pnum'];
            $product->av = $row['availability'];
            
            if(isset($best_merch[$product->merchant_id]))continue;
            if($product->av == "Available"){
                echo "<a href=\"./productPage.php?pid=$product->pnum&mid=$product->merchant_id&category=$category\" target=\"_self\">";
                echo "<div id=\"merch-pcard\">";
                    echo "<div id=\"p-img\">"; echo "<img src=\"".$product->img."\">"; echo "</div>";
                    
                    echo "<div id=\"p-info\">";

                    echo "<h1 id=\"p-name\">".$product->pname."</h1>";
                    echo "<p class=\"p-price\">السعر:</p>";
                    echo "<span id=\"price\">".$product->price."ر.س"."</span>";
                    echo "<p id=\"vat\"> غير شامل الضريبة."."</p>";
                    
                    echo "</div>";
                echo "</div>";
                echo "</a>";
            } else {
                echo "<div id=\"merch-pcard\" style=\"opacity: 60%;\">";
                    echo "<div id=\"p-img\">"; echo "<img src=\"".$product->img."\">"; echo "</div>";
                    echo "<div id=\"p-info\">";
                    echo "<h1 id=\"p-name\">".$product->pname."</h1>";
                    echo "<p class=\"p-price\">السعر:</p>";
                    echo "<span id=\"price\">".$product->price."ر.س"."</span>";
                    echo "<p id=\"vat\"> غير شامل الضريبة."."</p>";
                    echo "</div>";
                echo "</div>";
            }
        }
    } else{
        echo "<h1 style=\"color: red;margin:0 40%;\">".' Error no '.$category.' </h1>';
    }
?>