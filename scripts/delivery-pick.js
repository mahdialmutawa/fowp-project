const pick = document.getElementById("pick");
const deliver = document.getElementById("deliver");


pick.addEventListener("click",()=>{
    window.open("Pickup.html", "_self");
});

deliver.addEventListener("click",()=>{
    window.open("AddressForm.html", "_self");
});