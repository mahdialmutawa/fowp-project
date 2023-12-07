<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="./styles/land_style.css?v=<?php echo time();?>">
        <title>
            Landing page
        </title>
        
    </head>

    <body>
        <?php include('header.php');?>
        <h1 id="page-title">أهلاً بك في لِقيناها!</h1>
        <div class="offers-wrapper">
            <img id="offer1" src="./assets/offers/offer1.png" alt="offer 1">
            <img id="selected-img" src="./assets/offers/offer1.png" alt="offer 2">
            <img id="offer3" src="./assets/offers/offer1.png" alt="offer 3">
        </div>

        <div class="app-sections">
            <div class="sections-title"><h2>تصفح جميع الأقسام</h2></div>
            <a href="./pages/catigoryResults.php" target="_self"><div class="white-circle"><img src="./assets/sections/offers.png" alt="offers-section"> <h4>العروض</h4></div></a>
            <a href="./pages/catigoryResults.php" target="_self"><div class="white-circle"><img src="./assets/sections/brands.png" alt="offers-section"> <h4>الماركات</h4></div></a>
            <a href="./pages/catigoryResults.php" target="_self"><div class="white-circle"><img src="./assets/sections/tyres.png" alt="offers-section"> <h4>الكفرات</h4></div></a>
            <a href="./pages/catigoryResults.php" target="_self"><div class="white-circle"><img class="mech-pic" src="./assets/sections/mech-parts.png" alt="offers-section"> <h4>القطع الميكانيكية</h4></div></a>
            <a href="./pages/catigoryResults.php" target="_self"><div class="white-circle"><img src="./assets/sections/car-bodies.png" alt="offers-section"> <h4>البودي</h4></div></a>
            <a href="./pages/catigoryResults.php" target="_self"><div class="white-circle"><img src="./assets/sections/oils.png" alt="offers-section"> <h4>الزيوت</h4></div></a>
            <a href="./pages/catigoryResults.php" target="_self"><div class="white-circle"><img src="./assets/sections/cons-parts.png" alt="offers-section"> <h4>القطع الإستهلاكية</h4></div></a>
            <a href="./pages/catigoryResults.php" target="_self"><div class="white-circle"><img src="./assets/sections/elec-parts.png" alt="offers-section"> <h4>القطع الكهربائية</h4></div></a>
        </div>

        <?php include('footer.php');?>
        <script src="./scripts/land_script.js"></script>
    </body>
</html>