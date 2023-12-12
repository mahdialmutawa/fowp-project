
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

