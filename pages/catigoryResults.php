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
            <h1 id="main-title">
            <?php include("./php/Catigory-func.php");?>
            </h1>

            <div id="merch-prod-container">
                <?php include('./php/get_prod.php');?>
            </div>
        </div>
        <?php include("footer.php");?>
    </body>
</html>