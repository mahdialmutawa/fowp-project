var BillNumber = "SF3275934";
var Bill = "Bill Number #" + BillNumber;
document.getElementById("BillNumber").textContent = Bill;

var PImages = new Array();
PImages[0] = "https://i.ibb.co/qr4GQ8z/front-Bumper.png";
PImages[1] = "https://i.ibb.co/zhLmCzV/image-30.png";

for (var i = 1; i <= 2; i++) {
    document.getElementById("img" + i).setAttribute("src",PImages[i-1]);
}

var ProductNames = new Array();
ProductNames[0] = "صدام أمامي هيونداي أكسنت";
ProductNames[1] = "ذراع دريكسون داخلي لفورد برونكو";

for (var i = 1; i <= 2; i++) {
    document.getElementById("ProductName" + i).textContent = ProductNames[i - 1]; 
}

var ProductPrices = new Array();
ProductPrices[0] = 126.00;
ProductPrices[1] = 62.00;

for (var i = 1; i <= 2; i++) {
    document.getElementById("product" + i + "Price").textContent = ProductPrices[i - 1]; 
}

var ProductQuantity = new Array();
ProductQuantity[0] = 2;
ProductQuantity[1] = 2;

for (var i = 1; i <= 2; i++) {
    document.getElementById("product" + i).textContent = ProductQuantity[i - 1]; 
}

var TotalPrice = 0;
for (var i = 1; i <= 2; i++) {
    TotalPrice += ProductPrices[i - 1] * ProductQuantity[i - 1];
}

document.getElementById("TotalPriceInBar").textContent = TotalPrice;

var MerchantName = new Array();
MerchantName[0] = "الملحم للسيارات";
MerchantName[1] = "العلوان للسيارات";

for (var i = 1; i <= 2; i++) {
    document.getElementById("MerchantName" + i).textContent = MerchantName[i - 1]; 
}

var PLocations = new Array();
PLocations[0] = "https://maps.app.goo.gl/QGVAiaFCEujU6Zg88";
PLocations[1] = "https://maps.app.goo.gl/nnrgYjBGNFD3UkF46";

for (var i = 1; i <= 2; i++) {
    document.getElementById("PLoc" + i).setAttribute("href",PLocations[i-1]);
}

document.getElementById("priceJS").textContent = TotalPrice;

var address ="التوصيل الى العنوان (الحزام الاخضر، الهفوف، الاحساء)";
document.getElementById('address').innerHTML=address;

var Orderstatus ="Ready";
if(Orderstatus == "Ready"){
    document.getElementById("statusCircle").setAttribute("style","background-color: #42A362");
    document.getElementById('StatusText').innerHTML="تم الاستلام";
    document.getElementById("rating").setAttribute("style","visibility: visible;");
    document.getElementById("SendRating").setAttribute("style","visibility: visible;");
}
else
{
    document.getElementById('StatusText').innerHTML="تحت المراجعة";
}

var yellowStar = "../assets/images/yellowStar.svg";
var whiteStar = "../assets/images/Vector.svg";

function StarFunction(star , numberofStars) {
    var currentStarImage1 = document.getElementById(star).getAttribute("src");

    if (currentStarImage1 === whiteStar) {
        for (var i = 1; i <= numberofStars; i++) {
            document.getElementById("Mstar" + i).setAttribute("src", yellowStar);
        }
    } else {
        for (var i = 5; numberofStars < i; i--) {
            document.getElementById("Mstar" + i).setAttribute("src", whiteStar);
        }
    }
}
function StarFunction2(star , numberofStars) {
    var currentStarImage2 = document.getElementById(star).getAttribute("src");

    if (currentStarImage2 === whiteStar) {
        for (var i = 1; i <= numberofStars; i++) {
            document.getElementById("Pstar" + i).setAttribute("src", yellowStar);
        }
    } else {
        for (var i = 5; numberofStars < i; i--) {
            document.getElementById("Pstar" + i).setAttribute("src", whiteStar);
        }
    }
}


const blurButton = document.getElementById('SendRating');
const mySection = document.getElementById('TheMainSection');
let isBlurred = false;

blurButton.addEventListener('click', (event) => {
  event.preventDefault();

  isBlurred = !isBlurred;

  if (isBlurred) {
    mySection.style.filter = 'blur(10px)';
    document.getElementById("ConfirmationRectangle").setAttribute("style", "visibility:visible");
  } else {
    document.body.style.filter = '';
  }
});

