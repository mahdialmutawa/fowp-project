<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="../styles/CurrentOrderPage.css">
        <link rel="stylesheet" href="./styles/land_style.css?v=<?php echo time();?>">
        <title>
            Legainaha
        </title>
        
    </head>

    
    <body>
        <?php include('header.php');?>

       <section id="TheMainSection">
        <div id="current_order_section">
            <div id="OrderContainer">
                <div id="Order_Info" style="margin: 10px auto;">
                    <img src="../assets/images/profile.svg" style="border: 5px solid #3278A1; border-radius: 60px;">
                    <p>عدة متاجر</p>
                    <p id="BillNumber"></p>
                    <p> <span id="TotalPriceInBar"></span> ر.س</p>
                </div>
                <div class="order_details">
                    <img id="img1" src="">
                    <div class="order_details_info">
                        <h1 id="ProductName1"></h1>
                        <p>السعر: <span id="product1Price"></span> ر.س</p>
                        <p>غير شامل الضريبه</p>
                    </div>
                    <div id="quantity">
                        <p id="product1"></p>
                    </div>
                </div>
                <div id="MerchantDetails">
                    <div id="Merchant_Signature">
                        <img src="../assets/images/profile.svg" style="border: 5px solid #3278A1; border-radius: 60px;">
                        <p id="MerchantName1"></p>
                    </div>
                    <div id="MerchantLoc">
                        <a id="PLoc1" href="" target="_self">
                            <img src="../assets/images/mingcute-location-2-line.svg">
                            <p>موقع المتجر</p>
                        </a>
                    </div>
                </div>
                <div class="order_details">
                    <img id="img2" src="">
                    <div class="order_details_info">
                        <h1 id="ProductName2"></h1>
                        <p>السعر: <span id="product2Price"></span> ر.س</p>
                        <p>غير شامل الضريبه</p>
                    </div>
                    <div id="quantity">
                        <p id="product2"></p>
                    </div>
                </div>
                <div id="MerchantDetails">
                    <div id="Merchant_Signature">
                        <img src="../assets/images/profile.svg" style="border: 5px solid #3278A1; border-radius: 60px;">
                        <p id="MerchantName2"></p>
                    </div>
                    <div id="MerchantLoc">
                        <a id="PLoc2" href="" target="_self">
                            <img src="../assets/images/mingcute-location-2-line.svg">
                            <p>موقع المتجر</p>
                        </a>
                    </div>
                </div>
                <div id="OrderStatus">
                    <h1>المجموع هو <span id="price"><span id="priceJS"></span> ر.س</span></h1>
                    <p id="address"></p>
                    <div id="status">
                        <div id="statusCircle">
                        </div>
                        <p id="StatusText"></p>
                    </div>
                </div>
                <div id="rating">
                    <div id="MerchantRating">
                        <h1>كيف كانت تجربتك مع التاجر؟</h1>
                        <img id="Mstar1" src="../assets/images/Vector.svg" onclick="StarFunction('Mstar1','1')">
                        <img id="Mstar2" src="../assets/images/Vector.svg" onclick="StarFunction('Mstar2','2')">
                        <img id="Mstar3" src="../assets/images/Vector.svg" onclick="StarFunction('Mstar3','3')">
                        <img id="Mstar4" src="../assets/images/Vector.svg" onclick="StarFunction('Mstar4','4')">
                        <img id="Mstar5" src="../assets/images/Vector.svg" onclick="StarFunction('Mstar5','5')">
                        <form id="MerchantForm">
                            <textarea name="MerchantComment" id="MerchantComment" cols="80" rows="10" placeholder="اكتب تعليقك هنا..."></textarea>
                        </form>
                    </div>
                    <div id="ProductRating">
                        <div id="MerchantRating">
                            <h1>كيف كانت تجربتك مع المنتج؟</h1>
                            <img id="Pstar1" src="../assets/images/Vector.svg" onclick="StarFunction2('Pstar1','1')">
                            <img id="Pstar2" src="../assets/images/Vector.svg" onclick="StarFunction2('Pstar2','2')">
                            <img id="Pstar3" src="../assets/images/Vector.svg" onclick="StarFunction2('Pstar3','3')">
                            <img id="Pstar4" src="../assets/images/Vector.svg" onclick="StarFunction2('Pstar4','4')">
                            <img id="Pstar5" src="../assets/images/Vector.svg" onclick="StarFunction2('Pstar5','5')">
                            <form id="ProductForm">
                                <textarea name="ProductComment" id="ProductComment" cols="80" rows="10" placeholder="اكتب تعليقك هنا..."></textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="submitDiv">
                    <form id="submitButton">
                        <button type="submit" id="SendRating">
                            <img src="../assets/images/SubmitRating.png" onclick="SubmitFunction()">       
                        </button>
                    </form>
                </div>
            </div>
        </div>
       </section>
       <div id="ConfirmationRectangle">
            <div id="CloseCircle">
                <a href="../pages/CurrentOrderPage.php">
                    <img src="../assets/images/close.svg">
                </a>
            </div>
            <p id="RatingMessage">تم ارسال التقييم</p>
                <img src="../assets/images/Submitted.svg">
        </div>

        <?php include('footer.php');?>
        <script src="../scripts/CurrentOrder.js"></script>
    </body>
</html>