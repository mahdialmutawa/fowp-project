<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="../styles/ForgotpassStyle.css">
        <link rel="stylesheet" href="../styles/land_style.css">

        <title>
            Change password
        </title>
    </head>

    <body>

     <!--Start of header section-->
            
     <?php include("header.php");?>
        
     <!--End of header section-->

        <!--Start of body section-->
        <div class="container">
            <div class="forgot-password-box">
                <h2 id="Title">تغيير كلمة المرور</h2>
                <form>
                    <div class="NewPass" id="NP">
                        <input type="password" id="pass1" placeholder="كلمة المرور الجديدة" required>
                        <input type="password" id="pass2" placeholder="تأكيد كلمة المرور" required>
                    </div>
                    
                    <div class="Change" id="CH">
                        <button>تثبييت التغييرات</button>
                    </div>

                </form>
            </div>
        </div>
        <!--End of body section-->

        <!--Start of footer section-->
            
        <?php include("footer.php");?>

        <!--End of footer section-->
        
        
    </body>

    <script>
        CH.onclick = function () 
            {
    
                var password1 = document.getElementById("pass1").value;
                var password2 = document.getElementById("pass2").value;

   
                if (password1 === password2 && password1 && password2) 
                {
                    
                    window.open('Login.html', '_blank'); 
                } 
                else 
                {
                    
                    alert("Passwords do not match. Please make sure your passwords match.");
                }
            }
    </script>
</html>