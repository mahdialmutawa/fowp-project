<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="../styles/forgot-pass.css">
        <title>
            ForgotPass
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
                    </ul>
                </div>
            </nav>
        </header>
        <!--End of header section-->

        <!--Start of body section -->
        <div class="container">
            <div class="forgot-password-box">
                <h2 id = "Title">إستعادة كلمة المرور</h2>
                <form id = "form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                 <input type="email" placeholder=" البريد الإلكتروني" required name="EmailF">
                        <div id = "Confirm">
                            <button>تأكيد</button>
                        </div>
                </form>

                <form id = "F" method="post" style="display:none;"  action="./php/seq_Q-seq_A.php">
                <input type="text" id="quesF" placeholder=" السؤال" required readonly>
                <input type="password" name="AnsF" placeholder=" إجابة سؤال الامان" required >
                    <div>
                        <button id="check">تأكيد</button>
                    </div>
                </form>


            </div>
        </div>

        </div>    
        <!--End of body section-->
                   
        <!--Start of fotter section-->
        <!--End of fotter section-->


        <?php
        //Include the conncetion first. 

        function CheckEmail($email)
        {
            include('./php/db_conn.php');
            $query = "SELECT * FROM customer WHERE email = '$email'";
            $result = $conn->query($query);
            if($result->num_rows <= 0) return false;
            $row = $result->fetch_assoc();
            return $email == $row['email'];
        }
        
        function security($email){
            include('./php/db_conn.php');
            $query = "SELECT * FROM customer WHERE email = '$email'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $arr = array();
            $arr['seq_Q'] = $row['security_q'];
            $arr['seq_A'] = $row['security_ans'];
            return $arr;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") //We need to add condition for email existense
        {
            if (isset($_POST["EmailF"])) 
            {
                $email = $_POST['EmailF'];
                if(CheckEmail($_POST['EmailF'])){
                    $sec = security($email);
                    $q;
                    $ans = $sec['seq_A'];
                    if($sec['seq_Q'] == 'q1'){
                        $q = 'ما هو اسم أول معلم لك؟';
                    }else if($sec['seq_Q'] == 'q2'){
                        $q = 'ما هو اسم حيوانك المفضل؟';
                    }else{
                        $q = 'ما هي مدينتك الأم؟';
                    }
                    echo '<script>
                    document.getElementById("form1").style.display = "none";
                    let form = document.getElementById("F");
                    form.style.display = "block";
                    let inh = document.createElement("input");
                    inh.type = "hidden";
                    inh.name = "answer";
                    inh.value = "'.$ans.'";
                    form.appendChild(inh);
                    let email = document.createElement("input");
                    email.type = "hidden";
                    email.name = "usermail";
                    email.value = "'.$_POST['EmailF'].'";
                    form.appendChild(email);
                    document.getElementById("quesF").placeholder = "'.$q.'";
                    </script>';
                }
            }
        }
        ?>
        
    </body>
</html>