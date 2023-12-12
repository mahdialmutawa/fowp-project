<!DOCTYPE html>

<html lang="ar" dir="rtl">
<head>

    <link rel="stylesheet" href="../styles/cart-item.css">
    <link rel="stylesheet" href="../styles/LegainahaStyle.css">
    <link rel="stylesheet" href="../styles/land_style.css">

    <title>Legainaha - السلة</title>
</head>

<body>
    <?php include("header.php"); ?>
    
    <div class="rectangle">
        <h1 class="cartHeader"><strong>السلة</strong></h1>
        
    </div>
    <div id="main-content">
            <div id="merch-prod-container">
            <?php
                if (isset($_SESSION['username'])) {
                    if (isset($_SESSION['cart']) ) 
                    {
                        echo '<div class="cartItems">';
                        foreach ($_SESSION['cart'] as $item) {
                            if (is_object($item)) {
                              // Display item details
                                echo "<div id=\"merch-pcard\">";
                                    echo "<div id=\"p-img\">"; echo "<img src=\"".$item->img."\">"; echo "</div>";
                                        echo "<div id=\"p-info\">";
                                        echo "<h1 id=\"p-name\">".$item->pname."</h1>";
                                        echo "<p class=\"p-price\">السعر:</p>";
                                        echo "<span id=\"price\">".$item->price."ر.س"."</span>";
                                        echo "<p id=\"vat\"> غير شامل الضريبة."."</p>";
                                        echo " <p>الكمية :".$item->amount."</p>";
                                    echo "</div>";
                                    echo "<form action=\"./php/delete-cart.php\" method=\"POST\">";
                                    echo "<input type=\"hidden\" name=\"hiddenId\" value=\"$item->id\"/>";
                                    echo "<button name = \"Del\" type=\"submit\" id=\"delete\">";
                                    echo "<img src=\"../assets/images/delete.png\" />";
                                    echo "</button>";
                                    echo "</form>";
                                echo "</div>";
                                
                                
       
                                    
                            } 
                            else 
                            {
                              // Display informative message
                              echo '<p>' . $item . '</p>';
                            }
                            
                          }
                          

                        if(isset($_SESSION['cart'])){
                            echo '<div id="submitDiv">';
                            echo '<div id="SendRating">Your content here</div>';
                                echo '<div id="submitButton">';
                                    echo "<form action=\"./php/continue_payment.php\" method=\"POST\">";
                                            echo '<button id="customButton" name="pay">';
                                                echo ' الانتقال الى عملية الدفع ';
                                            echo '</button>';
                                    echo "</form>";
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                    
                    else
                     {
                        echo '<div class="cartNoItems" style=" margin-top: 200px;">';
                        echo '<img class="cartExclamationMark" src="../assets/images/ExclamMark.png" alt="Exclamation Mark">';
                        echo '<p class="cartNoItemsText">السلة فارغة</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="cartNoItems">';
                    echo '<img class="cartExclamationMark" src="../assets/images/ExclamMark.png" alt="Exclamation Mark">';
                    echo '<p class="cartNoItemsText">يرجى تسجيل الدخول لعرض السلة</p>';
                    echo '</div>';
                }
            ?>
            </div>
        </div>
    <?php include("footer.php"); ?>
</body>
</html>


