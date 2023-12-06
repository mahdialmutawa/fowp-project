<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <link rel="stylesheet" href="../styles/SignupSyle.css">
    <title>
        Sign up
    </title>
</head>

<body>

    <header dir="ltr">
        <div class="Legainaha_signature">
            <img src="../assets/images/Legainaha's logo.svg">
            <a href="../index.html">Legainaha</a>
        </div>

        <nav>
            <div class="navigation_links">

                </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="signup-box">
            <h2>اهلا بك في لِقيناها</h2>
            <form>
                <div class="inputF">
                    <input type="text" placeholder="الاسم الاول " required id="fname"><br>
                </div>
                <div class="inputF">
                    <input type="email" placeholder="البريد الالكتروني" required id="email"><br>
                </div>
                <div class="inputF">
                    <input type="number" placeholder="رقم الجوال" required id="pnum"><br>
                </div>
                <div class="inputF">
                    <input type="password" placeholder="كلمة المرور" required id="Password"><br>
                </div>
                <div class="inputF">
                    <input type="password" placeholder="تأكيد كلمة المرور" required id="PasswordConfirm"><br>
                </div>



                <a href="Login.html" style="text-decoration: none;">
                    <div>
                        <button id="createButton">
                            انشاء حساب
                        </button>
                    </div>

                </a>

            </form>

        </div>

    </div>



</body>

<footer>
    <div class="general_info">
        <div class="legainaha_info">
            <a href="#">
                <img src="/assets/images/grey logo.svg">
                <img src="/assets/images/legainaha.svg">
            </a>
            <p>
                <strong>لِقيناها منصــة إلـكتــرونـيـــه مُعتمـــدة</strong>
                <br>
                لخدمات ما بعد البيع شاملة لكل ما تحتاجه
                <br>
                السياره من قطع الغبار والإطارات والزيوت
                <br>
                وغيرها من إحتياجات السيارة من خلال
                <br>
                الربط التقني المباشر بين المستخدم وبين
                <br>
                شركائنا حول المملكة.
            </p>
        </div>
        <div class="contact">
            <p>
                <strong>تواصل معنا</strong>
            </p>
            <div id="tel">
                <img src="/assets/images/call.svg">
                <a href="tel:0544090264" style="color: black; margin-right: 10px">800xxxxxxx</a>
            </div>
            <br>
            <div id="email">
                <img src="/assets/images/email.svg">
                <a href="mailto:care@legainaha.com" style="color: black; margin-right: 10px;">care@Legainaha.com</a>
            </div>
        </div>
    </div>

    <div class="related_topics">
        <p>
            <strong>روابط مهمه</strong>
        </p>
        <ul>
            <li>
                <a href="RetunPolicy.html" id="return" style="font-size: 12pt;">
                    سياسة الاستبدال والإسترجاع
                </a>
            </li>
            <li>
                <a href="ShipandDeliverPolicy.html" id="return" style="font-size: 12pt;">
                    الشحن والتوصيل
                </a>
            </li>
            <li>
                <a href="PrivacyPolict.html" id="return" style="font-size: 12pt;">
                    سياسة الخصوصية
                </a>
            </li>
            <li>
                <a href="BranchCollectingPolicy.html" id="return" style="font-size: 12pt;">
                    سياسة الاستلام من الفروع
                </a>
            </li>
            <li>
                <a href="LoyalityPointsPolicy.html" id="return" style="font-size: 12pt;">
                    نقاط الولاء
                </a>
            </li>
        </ul>
        <p><strong>تابعنا على</strong></p>
        <div class="social_media">
            <a href="https://tiktok.com/en/legainaha">
                <img src="/assets/images/tiktok.svg">
            </a>
            <a href="https://x.com/Legainaha">
                <img src="/assets/images/x.svg">
            </a>
            <a href="https://instagram.com/legainaha">
                <img src="/assets/images/instagram.svg">
            </a>
        </div>
    </div>
</footer>
<script>
    var Create = document.getElementById("createButton");

    Create.addEventListener("click", ButtonClicked);

    function ButtonClicked() 
    {
        var password1 = document.getElementById("Password").value;
        var password2 = document.getElementById("PasswordConfirm").value;

        let fname = document.getElementById("fname").value.trim();
        let email = document.getElementById("email").value.trim();
        let pnum = document.getElementById("pnum").value.trim();

        if (password1 === password2 && fname && email && pnum && password1 && password2) 
        {
            event.preventDefault(); 
            location.href = "Login.html";
        }
        else 
        {
            if (password1 !== password2) 
            {
                alert("Passwords do not match. Please make sure your passwords match.");
            } 
            else if (!fname) 
            {
                alert("Please enter your first name.");
            } 
            else if (!email) 
            {
                alert("Please enter your email address.");
            }
             else if (!pnum)
            {
                alert("Please enter your phone number.");
            }
        }
    }
</script>

</html>