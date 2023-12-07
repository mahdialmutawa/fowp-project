<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="../styles/PickupStyle.css">
        <link rel="stylesheet" href="../styles/land_style.css">
        <title>
            Landing page
        </title>
        
    </head>

    <body >
        <?php include('header.php');?>
        
        <div>
            <p id = "TitleOfPage">
                يرجى التأكد من المعلومات
            </p>
            <div id = "Container">
                <img src="../assets/images/circle.jpeg" id="img1">
                <div id = "Store">
                  <img src="../assets/images/map.jpeg" id="img2">
                  <p>
                    الملحم لقطع الغيار
                  </p>
                  <img src="../assets/images/Location.svg" id="locimg">
                  <p id = "P1">
                    موقع المتجر
                  </p>
                  
                </div>

                <div id="divid3">
                    <img src="../assets/images/car.jpeg" id="innerimg"> 
                    <p id="PForInfo">
                        <br>
                        <h2>صدام أمامي هيونداي أكسنت</h2>
                        <br>
                        <form id = "formstyle">
                            <input type="number" min="1" value="1" id="num">
                        </form>
                        <h5>السعر: 126.00 ر.س</h5>
                        <h6>غير شامل الضريبة</h6>

                        
                    </p>

                    <button id="buttonid">إتمام العملية</button>
                </div>
                
                </div>
            </div>
        </div>

        <script>

            let buttonid = document.getElementById("buttonid");

            buttonid.onclick = function()
            {
                window.open('ConfirmationFrame.php', '_self');
            }
        </script>
       
    </body>
</html>