<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="../styles/land_style.css">
        <link rel="stylesheet" href="../styles/productPage.css">
        <title>
Legainaha           
 </title>
        
    </head>

    <body>
    <?php include('header.php');?>
    <div id="main">
        <?php
            $pid = $_GET['pid'];
            $mid = $_GET['mid'];
        ?>
      <?php include('./php/prod_info.php')?>
       <form action="<?php echo "./php/cart.php"; ?>" method="GET">
        <input type="hidden" name="pid" value="<?php echo $pid;?>">
        <input type="hidden" name="mid" value="<?php echo $mid;?>">
        <input type="number" placeholder="الكميه" id="text" min="1" max="<?php echo $max; ?>" value="1" name="text">
       <button type="submit" id="but" name="but" value="ok">إضافه للسلة</button>
    </form>

</div>


<?php include('footer.php');?>
    </body>
</html>