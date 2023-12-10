<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="../styles/Loginstyle.css">
        <title>
            Login
        </title>

       
    </head>

    <body>

        <!--Start of header section-->
        <header dir="ltr">
            <div class="Legainaha_signature">
                <img src="../assets/images/Legainaha's logo.svg">
                <a href="../index.php">Legainaha</a>
            </div>
      
            <nav>
                <div class="navigation_links">
                    
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--End of header section-->
  

        <!--Start of body section-->
        <div class="container  ">
            <div class = "Login-box">
                <h1>اهلا بك في لِقيناها</h1>
                <form id="myform" name="sign-in" method="POST" action="./php/sign-in.php">
                    <div class = "Inp">
                        <div class = "inputF" id="username">
                            <input type="text" placeholder="أسم المستخدم" required id = "nameInput" name="username">
                        </div>
                        <div class = "Inp">
                        <div class = "inputF">
                            <input type="password" placeholder="كلمة المرور" required id="passwordInput" name="pwd">
                        </div> 

                        <div class="forgot-password">
                            <a href="forgot-pass.php" id = "ForgotPass" style="text-decoration: none;">
                                <div >
                                    نسيت كلمة المرور؟
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class = "buttonF ">
                    
                        <button id ="si">انشاء حساب</button>
                        <input type="submit" name="signnn" value="تسجيل دخول">
                   </div>
                </form>
            </div>
        </div>


        <!--End of body section-->

        <!--Start of fotter section-->
        <footer>
            <div class="general_info">
                <div class="legainaha_info">
                    <a href="#">
                        <img src="../assets/images/grey logo.svg">
                        <img src="../assets/images/legainaha.svg">
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
                        <img src="../assets/images/call.svg">
                        <a href="tel:0544090264" style="color: black; margin-right: 10px">800xxxxxxx</a>
                    </div>
                    <br>
                    <div id="email">
                        <img src="../assets/images/email.svg">
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
                        <a href="RetunPolicy.php" id="return" style="font-size: 12pt;">
                            سياسة الاستبدال والإسترجاع
                        </a>
                    </li>
                    <li>
                        <a href="ShipandDeliverPolicy.php" id="return" style="font-size: 12pt;">
                            الشحن والتوصيل                        
                        </a>
                    </li>
                    <li>
                        <a href="PrivacyPolict.php" id="return" style="font-size: 12pt;">
                            سياسة الخصوصية                        
                        </a>
                    </li>
                    <li>
                        <a href="BranchCollectingPolicy.php" id="return" style="font-size: 12pt;">
                            سياسة الاستلام من الفروع
                        </a>
                    </li>
                    <li>
                        <a href="LoyalityPointsPolicy.php" id="return" style="font-size: 12pt;">
                            نقاط الولاء
                        </a>
                    </li>
                </ul>
                <p><strong>تابعنا على</strong></p>
                <div class="social_media">
                    <a href="https://tiktok.com/en/legainaha">
                        <img src="../assets/images/tiktok.svg">
                    </a>
                    <a href="https://x.com/Legainaha">
                        <img src="../assets/images/x.svg">
                    </a>
                    <a href="https://instagram.com/legainaha">
                        <img src="../assets/images/instagram.svg">
                    </a>
                </div>
            </div>
        </footer>

        
        <script>
            var si = document.getElementById("si");
            var LoginB = document.getElementById("li");
        
            
            si.onclick = function()
            {
                location.href = "Signup.php";
            };
        
            LoginB.onclick = function (event) 
            {
                event.preventDefault(); 
        
                
                if (required("nameInput") && required("passwordInput")) 
                {
                    
                    var confirmed = window.confirm("اسم المستخدم و كلمة المرور صحيحة, اضغط حسنا للانتقال الى الصفحة الرئيسية");
                    if (confirmed) {
                        
                        window.location.href = "../index.php";
                    }
                }
            };
        
            function required(inputId) {
                var input = document.getElementById(inputId);
                var value = input.value;
        
                if (value === "") 
                {
                    alert("تأكد من إدخال اسم المستخدم وكلمة المرور الخاصة بك");
                    return false;
                } else {
                    return true;
                }
            }
        </script>
        
    </body>
    </html>