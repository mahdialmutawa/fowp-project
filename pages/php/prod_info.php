<?php
    include("db_conn.php");
    $category = $_GET['category'];
    $pid = $_GET['pid'];
    $mid = $_GET['mid'];
    $query = 'select category, pname, price, img, quantity, description, merchant_id, rate, fname '
    .'from product, merchant '
    .'where merchant_id = merchant.id AND merchant.id = '.$mid
    .' AND pnum = '. $pid
    .' AND category = \''.$category.'\';';
    $prods = $conn->query($query);

    $products = array();
    if($prods->num_rows > 0){
        while ($row = $prods->fetch_assoc()) {
            // Create product object
            $product = new stdClass();
            $product->fname = $row['fname'];
            $product->desc = $row['description'];
            $product->pname = $row['pname'];
            $product->price = $row['price'];
            $product->img = $row['img'];
            $product->quant = $row['quantity'];
            $product->merchant_id = $row['merchant_id'];
            $product->rate = $row['rate'];
            
            echo "<img src=\"".$product->img."\" id=\"imid\"><br>";
            echo "<div><strong>".$product->pname."</strong></div>";
            echo "<div id=\"price\">".$product->price." ر.س</div>";
            echo "<div>غير شامل الضريبة</div>";
            echo "<br><div>وصف المنتج:<br>";
            echo 'التاجر: '.$product->fname."<br>";
            echo 'تقييم التاجر: 5/'.$product->rate."<br>";
            echo $product->desc;
            echo "<br>
            الكمية: ".$product->quant;
            echo "</div>";
            $max = $product->quant;
        }
    } else{
        echo "<h1 style=\"color: red;margin:0 40%;\">".' Error! </h1>';
    }
?>