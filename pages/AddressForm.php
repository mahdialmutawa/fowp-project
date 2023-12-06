<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <link rel="stylesheet" href="../styles/land_style.css">
        <link rel="stylesheet" href="../styles/AddressForm.css">
        <title>
            Legainaha
        </title>
        
    </head>

    <body>
       
        <?php include("header.php");?>
        <h1 id="page-title">يرجى تعبئة معلومات الشحن</h1>
        <form name="addform">
            <input type="text" for="addform" placeholder="المدينه"  id="city"> 
            <input type="text" for="addform" placeholder="الرمز البريدي"  id="zib">
            <input type="text" for="addform" placeholder="تفاصيل العنوان، شارع، عنوان، اسم الشركة" id="address">
            <input type="text" for="addform" placeholder="المعالم الرئيسية، شقة، جناح، وحدة، مبنى، الطابق"  id="build">
            <input type="checkbox" for="addform" id="checkboxid" value="save"> <h6>حفظ الموقع لعمليات الشراء القادمة</h6>
        </form>

        <button id="buttonid">إتمام العملية</button>
<?php include("footer.php"); ?>
        <script src="../scripts/address.js"></script>
    </body>
</html>