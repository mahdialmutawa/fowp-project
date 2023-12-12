<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <link rel="stylesheet" href="../styles/SignupSyle.css?v=<?php echo time();?>">
    <title>
        Sign up
    </title>
    
</head>

<body>

    <header dir="ltr">
        <div class="Legainaha_signature">
            <img src="../assets/images/Legainaha's logo.svg">
            <a href="../index.php">Legainaha</a>
        </div>

        <nav>
            <div class="navigation_links">
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="signup-box">
            <h2>اهلا بك في لِقيناها</h2>

            <form action="./php/sign-up.php" method="POST" id="sign-up-form" name="new-cust">
                <div class="inputF">
                    <input type="text" placeholder="الاسم الاول " required id="fname" name="fname"><br>
                </div>
                <div class="inputF">
                    <input type="email" placeholder="البريد الالكتروني" required id="email" name="email"><br>
                </div>
                <div class="inputF">
                    <input type="number" placeholder="رقم الجوال" required id="pnum" name="pnum"><br>
                </div>
                <div class="inputF">
                    <input type="password" placeholder="كلمة المرور" required id="Password" name="pwd"><br>
                </div>
                <div class="inputF">
                    <input type="password" placeholder="تأكيد كلمة المرور" required id="PasswordConfirm" name="conpwd"><br>
                </div>
                <div class="inputF">
                    <select id="securityQuestion" name="securityQuestion" required>
                        <option value="" disabled selected>اختر سؤال الأمان</option>
                        <option value="q1">ما هو اسم أول معلم لك؟</option>
                        <option value="q2">ما هو اسم حيوانك المفضل؟</option>
                        <option value="q3">ما هي مدينتك الأم؟</option>
                    </select>
                </div>
                <div class="inputF">
                    <input type="text" placeholder="إجابة سؤال الأمان" required id="Q" name="securityAnswer"><br>
                </div>
                <input type="submit" name="test" value="إنشاء حساب" id = "Ans">
            </form>

        </div>
    </div>

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
            let Q = document.getElementById("Q").value.trim();
            let Ans = document.getElementById("Ans").value.trim();

            if (password1 === password2 && fname && email && pnum && password1 && password2) 
            {
                event.preventDefault(); 
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
                 else if (!pnum && !isNaN(pnum))
                {
                    alert("Please enter your phone number.");
                }
                else if (!Q)
                {
                    alert("Please Security question.");
                }
                else if (!Ans)
                {
                    alert("Please enter your answer.");
                }
            }
        }
    </script>

</body>

</html>