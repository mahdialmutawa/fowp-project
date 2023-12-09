<?php
   include("best_seller_query.php");
    $merchants = array();
    if($best->num_rows > 0){
        while($row = $best->fetch_assoc()){
            if($row['sales_count'] >= 5){
                $merchants[$row['merchant_id']] = $row['merchant_id'];
            }
        }
    }
    $display = 0;
    if(count($merchants) > 0){
        $category = $_GET['category'];
        $query = 'select category, pname, price, img, merchant_id,pnum, availability '
                .'from product, merchant '
                .'where merchant_id = merchant.id ' 
                .'AND category = \''.$category.'\';';
        $prods = $conn->query($query);
        if($prods->num_rows > 0){
            while($row = $prods->fetch_assoc()){
                $product = new stdClass();
                $product->pname = $row['pname'];
                $product->price = $row['price'];
                $product->img = $row['img'];
                $product->merchant_id = $row['merchant_id'];
                $product->pnum = $row['pnum'];
                $product->av = $row['availability'];

                if($product->av == "Available" && isset($merchants[$product->merchant_id])){
                    if($display == 0){
                        echo "<h1 id=\"main-title\" style=\"margin: 30px 0%;\">التاجر الأعلى مبيعاً:</h1>";
                    }
                    $display++;
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
                }
            }
        }
        if($display > 0){
            echo "<h1 id=\"main-title\" style=\"margin: 30px 0%;\">تاجرون آخرون: </h1>";
        }
    }
?>