<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="../styles/DeliveryPickup.css">
        <link rel="stylesheet" href="../styles/land_style.css">
        <title>
            Landing page
        </title>
        
    </head>

    <body>
        <?php include('header.php');?>

        <div id="main">
            <h1 id="h1i">اختيار طريقة الاستلام</h1>
            <button id="pick">
                <img src="../assets/images/Pickup.png" id="pic1">
                <p class="getMethod" id="rights">
                    الاستلام من التاجر
                </p>
            </button>

            <button id="deliver"> 
               <img src="../assets/images/Delivery.png" id="pic2">
                <p class="getMethod" id="lefts">
                    توصيل الى العنوان
                </p>
            </button>
        </div>
        


        <?php include('footer.php');?>
        <script src="../scripts/delivery-pick.js"></script>
    </body>
</html>