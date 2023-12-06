<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        
        <link rel="stylesheet" href="../styles/ConfirmationFrame.css">
        <link rel="stylesheet" href="./styles/land_style.css?v=<?php echo time();?>">
        <title>
            Confirmation
        </title>
        
    </head>

    <body>
        
        <?php include('header.php')?>

        <div id="main">
            
            <h1 id="h1i">معلومات الدفع</h1>
            <form id="formid">
                <label for="cardname" id="id1">الاسم الظاهر على البطاقه</label>
                <br>
                <input type="text" name="cardname" id="id2" placeholder="الاسم الظاهر على البطاقه">
                <br>

                <label for="cardnnum" id="id3">رقم البطاقة الائتمانية</label>
                <br>
                <input type="number" maxlength="16" name="cardnnum" id="id4" placeholder="XXXXXXXXXXXXXXXX" min="0">
                <br>

                <label for="carddate" id="id5">تاريخ انتهاء البطاقة</label>
                <label for="cardcode" id="id8">رمز البطاقة</label>

                <br>
                <input type="number" name="carddate" id="id6" placeholder="YY" min="0">
                <input type="number" name="carddate" id="id7" placeholder="MM" min="0">

                <input type="number" name="cardcode" id="id9" placeholder="CVC" min="0">
                <br>
                <p>
                    المجموع هو<strong> 217.35 ر.س </strong> 
               </p>
               <p id="secondP">
                   شامل الضريبة (%15)
               </p>
   
               <button id="buttonid">إتمام الدفع</button>
            </form>

            

        </div>

        <?php include('footer.php')?>
        <script>
            const allLetters = (value)=>{
                var letters = /^[A-Za-z]+$/
                return value.match(letters) != null;
            };

            const validate = ()=>{
                let cardName = document.getElementById("id2");
                let cardNumber = document.getElementById("id4");
                let year = document.getElementById("id6");
                let month = document.getElementById("id7");
                let cvc = document.getElementById("id9");
                
                if(!cardName.value || !cardNumber.value || !year.value || !month.value || !cvc.value){
                    alert("جميع الحقول مطلوبة");
                    return;
                }else{
                    if(!allLetters(cardName.value)){
                        alert("الاسم لا يحتوى على أرقام أو رموز!");
                        return;
                    }

                    if(cardNumber.value.length != 16){
                        alert("يجب أن يحتوي رقم البطاقة على 16 رقم!");
                        return;
                    }

                    let yearleftDigit = Math.floor(parseInt(year.value) / 10);
                    let yearRightDigit = parseInt(year.value) % 10;

                    if(yearleftDigit != 2 || yearRightDigit < 4 || year.value.length > 2 || year.value < 0){
                        alert("سنة البطاقة غير صحيح!");
                        return;
                    }

                    let monthLeft = Math.floor(parseInt(month.value) / 10);
                    let monthRight = parseInt(month.value) % 10;

                    if(monthLeft > 1 || (monthRight > 2 && monthLeft === 1) || month.value < 0 || month.value.length > 2){
                        alert("الشهر غير صحيح");
                        return;
                    }

                    if(cvc.value.length < 3 || cvc.value < 0){
                        alert("رمز التحقق غير صحيح!");
                        return;
                    }
                    
                     window.open("SuccessfullyPayment.html");
                }
            };

            let button = document.getElementById("buttonid");
            button.addEventListener("click", validate);
        </script>
    </body>
</html