

<header dir="ltr">
<div class="Legainaha_signature">
    <img src="../assets/images/Legainaha's logo.svg">
    <a href="../index.php">Legainaha</a>
</div>
<div class="search_section">
    <input type="text" size="49" placeholder="ماهي القطعة التي تبحث عنها؟" style="font-size: 14pt; text-align: right; padding: 0px 12px 0px 0px;">
</div>
<nav>
    <div class="navigation_links">
        <ul>
        <li>
                <a href="../pages/cartPage.php"><img src="../assets/images/cart.svg">السلة</a>
        </li>
            <li>
            <li>
    <?php
    session_start();

    if (isset($_SESSION['username'])) {
        echo "<br>";
        echo '<span style="margin: 10px 0px 10px 15px;
            font-size: 15pt;
            color: #307095;">' . $_SESSION['username'] . '</span>';

            echo '<a href="php/logout.php" style="margin: 0px 0px 20px 15px; color: #307095; cursor: pointer;">
            <img src="../assets/images/logout.png">
        </a>';

    } 
    else 
    {
        echo "<a href=\"../pages/Login.php\">
                <img src=\"../assets/images/profile.svg\">
                تسجيل الدخول
            </a>";
    }
    ?>
</li>


                
            </li>
            
        </ul>
    </div>
</nav>

</header>
