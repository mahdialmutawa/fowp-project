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
      <?php include('./php/prod_info.php')?>
       <form>
        <input type="number" placeholder="الكميه" id="text" min="0" value="0">
       <button type="text" id="but">إضافه للسلة</button>
    </form>

</div>


<?php include('footer.php');?>
    </body>
</html>