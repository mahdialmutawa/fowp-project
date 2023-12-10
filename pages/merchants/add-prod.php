<!DOCTYPE html>
<html dir="rtl">

    <head>
        <title>Legainaha</title>
        <link rel="stylesheet" href="../../styles/land_style.css">
        <link rel="stylesheet" href="../../styles/add-prod.css">
    </head>

    <body>
        <header dir="ltr">
            <div class="Legainaha_signature">
                <img src="../../assets/images/Legainaha's logo.svg">
                <a href="index.html">Legainaha</a>
            </div>
            <div class="search_section">
                <select name="Cities" style="font-size: 14pt;">
                    <option value="HSA">الاحساء</option>
                    <option value="DMM">الدمام</option>
                    <option value="RYD">الرياض</option>
                </select>
                <input type="text" size="49" placeholder="ماهي القطعة التي تبحث عنها؟" style="font-size: 14pt; text-align: right; padding: 0px 12px 0px 0px;">
            </div>
            <nav>
                <div class="navigation_links">
                    <ul>
                        <li>
                            <a href="#">تسجيل الدخول</a>
                        </li>
                        <li>
                            <a href="">السلة</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="back-button-container">
            <input type="button" value="الصفحة الرئيسية" id="back-home" onclick="backHome()">
            <img src="../../assets/images/Vector.png" alt="back-home">
        </div>

        <div id="main-content">
            <h1 id="main-title">
                جميع منتجاتك في قسم الـABC
            </h1>

            <div id="merch-prod-container">
                
            </div>
            <button id="add" onclick="test()">إضافة المزيد من المنتجات <img src="../../assets/images/add.png" alt="plus"></button>
        </div>


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
        <script src="../../scripts/add-prod.js"></script>
    </body>

</html>