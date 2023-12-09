<!DOCTYPE html>
<html dir="rtl">

    <head>
        <title>Legainaha</title>
        <link rel="stylesheet" href="../styles/land_style.css">
        <link rel="stylesheet" href="../styles/add-prod.css">
    </head>

    <body>
    <?php include("header.php");?>

        <div id="main-content">
            <h1 id="main-title"><?php echo $_GET['category'];?></h1>
            <?php
                include("./php/best_seller_title.php");
            ?>
            <div id="merch-prod-container">
                <?php include('./php/get_prod.php'); $best_merch = $merchants;?>
            </div>
        </div>
        <?php include("footer.php");?>
    </body>
</html>