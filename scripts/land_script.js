var nextButton = document.getElementsByClassName("nextButton");
nextButton[0].addEventListener("click", ()=>{
    var lastSeen = document.getElementById("lastSeen");
    var children = lastSeen.children;
    for(var i =0; i < children.length; i++){
        if(children[i].classList.contains("products-inline-style")){
            children[i].setAttribute("visability", "hidden");
            
        }
    }
});