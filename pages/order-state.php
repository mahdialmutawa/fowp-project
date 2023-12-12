<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <link rel="stylesheet" href="../styles/RequestStyle.css">
    <title>حالة الطلب</title>

    <style>
        /* Add your styles here if needed */
        .circle-container {
            display: flex;
            align-items: center;
        }

        .circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #dcdcdc; /* Grey color for inactive circles */
            display: inline-block;
            margin: 0 10px;
            color: #fff;
            text-align: center;
            line-height: 20px;
            font-size: 14px;
            transition: background-color 2s; /* Transition duration */
        }

        .circle.active {
            
        }

        .circle.completed {
           border-color: #5BC236;
           color: #5BC236;
        }

        .progress-bar {
            height: 5px;
            background-color: #ecf0f1;
            position: relative;
            margin-top: 5px;
            width: 100%;
        }

        .indicator {
            height: 100%;
            background-color: #3498db; 
            position: absolute;
            top: 0;
            left: 0;
            transition: width 2s; /* Transition duration */
        }
    </style>
</head>

<body>

    <!-- Start of header section -->
    <header dir="ltr">
        <div class="Legainaha_signature">
            <img src="../assets/images/Legainaha's logo.svg">
            <a href="../index.php">Legainaha</a>
        </div>
    </header>
    <!-- End of header section -->

    <div class="container">
        <div class="Req-box">
            <div class="container1">
                <div class="steps circle-container">
                    <span class="circle active" id="c1">1</span>
                    <span class="circle" id="c2">2</span>
                    <span class="circle" id="c3">3</span>

                    <div class="progress-bar">
                        <span class="indicator" id="indicator1"></span>
                    </div>
                </div>
            </div>
            <div class="titles">
                <h3 style="padding-left: 250px;">تحت المراجعة</h3>
                <h3 style="margin-top: -65px;">تجهيز الطلب</h3>
                <h3 style="margin-top: -43px; padding-right: 230px;">تم الاستلام</h3>
            </div>
        </div>
    </div>

    <!-- Start of footer section -->
    <?php include("footer.php")?>

    <script>
        function move() {
            setTimeout(() => {
                    window.location.href = '../index.php';
                }, 2000);
        }
        function updateStatus() {
            setTimeout(() => {
                document.getElementById('c1').classList.remove('active');
                document.getElementById('c1').classList.add('completed');
                document.getElementById('c2').classList.add('active');
                document.querySelector('#indicator1').style.width = '33.33%';

                setTimeout(() => {
                    document.getElementById('c2').classList.remove('active');
                    document.getElementById('c2').classList.add('completed');
                    document.getElementById('c3').classList.add('active');
                    document.querySelector('#indicator1').style.width = '66.66%';

                        setTimeout(() => {
                        document.getElementById('c3').classList.remove('active');
                        document.getElementById('c3').classList.add('completed');
                        document.querySelector('#indicator1').style.width = '66.66%';

                        setTimeout(() => {
                            window.location.href = './CurrentOrderPage.php';
                        }, 2000);
                    }, 2000);
                }, 2000);
                
            }, 2000);
        }
        
        updateStatus();
    </script>

</body>

</html>
