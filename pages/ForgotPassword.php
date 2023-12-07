<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="../styles/ForgotpassStyle.css">
        <link rel="stylesheet" href="../styles/land_style.css">

        <title>
            ForgotPass
        </title>

       
    </head>

    <body>

        <!--Start of header section-->
        <?php include("header.php");?>
        <!--End of header section-->

        <!--Start of body section-->
        <div class="container">
            <div class="forgot-password-box">
                <h2 id = "Title">إستعادة كلمة المرور</h2>
                <form>
                    <input type="email" id="EmailF" placeholder=" البريد الإلكتروني" required>

                    
                    
                    <div>
                        <span class="resend-link" id = "Resending">لم يصلني الرمز؟ <a href="#">اعادة الارسال</a></span><br>
                    </div>
                    
                    <div class="verification-code-inputs" id = "OTP">
                        <input type="text" maxlength="1" disabled>
                        <input type="text" maxlength="1" disabled>
                        <input type="text" maxlength="1" disabled>
                        <input type="text" maxlength="1" disabled>
                    </div>
                    


                    <a href="Login.php" style="text-decoration: none;">
                        <div id = "Confirm">
                            <button>تأكيد</button>
                        </div>
                    </a>

                </form>
            </div>
        </div>
        <!--End of body section-->

        <!--Start of fotter section-->
        <?php include("footer.php");?>
        <!--End of fotter section-->


        <script>
            var Title = document.getElementById("Title");
            var pass1 = document.getElementById("pass1");
            var pass2 = document.getElementById("pass2");
            var CH = document.getElementById("CH");
            var EF = document.getElementById("EmailF");
            var Confirm = document.getElementById("Confirm");
            var OTP = document.getElementById("OTP");
        
            EF.addEventListener("input", function() {
                if (EF.value.trim() !== "") {
                    var otpFields = document.querySelectorAll("#OTP input");
                    otpFields.forEach(function(field) {
                        field.disabled = false;
                        field.required = true;
                    });
                }
            });
        
            Confirm.onclick = function(event) {
                event.preventDefault();
        
                if (required("OTP")) {
                    redirectToChangePassword();
                }
            };
        
            function required(inputId)
             {
                var input = document.getElementById(inputId);
                var value = input.children;
                let counter = 0;
                for(let child of value){
                    
                    if(child.value){
                        counter++;
                    }
                }
                if (counter != 4) 
                {
                    alert("الرجاء إدخال رمز التحقق");
                    return false;
                } 
                else
                 {
                    var confirmed = window.confirm("رمز التحقق صحيح, بامكانك الان تغيير كلمة المرور");
                    if (confirmed) {
                        window.location.href = "ChangePassword.php";
                    }
                    return true;
                }
            }
       
        </script>
        
        
        
        
        
    </body>
    </html>
