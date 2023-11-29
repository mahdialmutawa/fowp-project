const conf = document.getElementById("buttonid");

conf.addEventListener("click", ()=>{
    let city = document.getElementById("city").value;
    let zib = document.getElementById("zib").value;
    let address = document.getElementById("address").value;
    let build = document.getElementById("build").value;

    if(city && zib && address && build){
        window.open("./ConfirmationFrame.html", "_self");
    }else{
        alert("جميع الحقول مطلوبة");
    }
});