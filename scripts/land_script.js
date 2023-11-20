//This file written by [@Dev-K0]
const last_Seen = document.getElementById("LS_nextButton");
const last_seen_section = document.getElementById("lastSeen");
const last_Seen_Back = document.getElementById("LS_backButton");
let startIndex = 0;
//static elements used to simulate data returned from DB
let lastElements = [
    {
        merchant: "العلواني لقطع السيارات",
        product_name: "ذراع دريكسون داخلي لفورد برونكو ",
        price: 63.00,
        old_price: 66.16
    },
    {
        merchant: "2العلواني لقطع السيارات",
        product_name: "ذراع دريكسون داخلي لفورد برونكو ",
        price: 63.00,
        old_price: 66.16
    },
    {
        merchant: "3العلواني لقطع السيارات",
        product_name: "ذراع دريكسون داخلي لفورد برونكو ",
        price: 63.00,
        old_price: 66.16
    },
    {
        merchant: "4العلواني لقطع السيارات",
        product_name: "ذراع دريكسون داخلي لفورد برونكو ",
        price: 63.00,
        old_price: 66.16
    },
    // {
    //     merchant: "5العلواني لقطع السيارات",
    //     product_name: "ذراع دريكسون داخلي لفورد برونكو ",
    //     price: 63.00,
    //     old_price: 66.16
    // },
    // {
    //     merchant: "6العلواني لقطع السيارات",
    //     product_name: "ذراع دريكسون داخلي لفورد برونكو ",
    //     price: 63.00,
    //     old_price: 66.16
    // },
    // {
    //     merchant: "7العلواني لقطع السيارات",
    //     product_name: "ذراع دريكسون داخلي لفورد برونكو ",
    //     price: 63.00,
    //     old_price: 66.16
    // },
];

const create_prod = (merchant, pname,price,old_price)=>{
    //create product container [Product card]
    const container = document.createElement("div");
    container.className = "products-inline-style";
    //create merchant name circle
    const merchant_container = document.createElement("div");
    merchant_container.className = "outlined-circle";
    //add merchant name to the element
    const merchant_name = document.createElement("h5");
    merchant_name.textContent = "التاجر: " + merchant;
    //add merchant name to merchant circle container
    merchant_container.appendChild(merchant_name);
    //add merchant name to the container -> product card
    container.appendChild(merchant_container);
    //add product image to the product card\
    const image = document.createElement("img");
    image.src="assets/parts/steering-part1.png"
    container.appendChild(image);
    //create element for product name
    const prodname = document.createElement("h4");
    prodname.className = "product-name";
    prodname.textContent = pname;
    //add product name to the product card
    container.appendChild(prodname);
    //create product price element
    const prodprice = document.createElement("h3");
    prodprice.className = "product-price";
    prodprice.textContent = price +"ر.س";
    //add product price to the product card
    container.appendChild(prodprice);
    //create old price element
    const oldprice = document.createElement("h3");
    oldprice.className = "old-price";
    const deletedprice = document.createElement("del");
    deletedprice.textContent = old_price + "ر.س";
    oldprice.appendChild(deletedprice);
    //add old price to prduct card
    container.appendChild(oldprice);
    const vat = document.createElement("h6");
    vat.textContent = "غير شامل الضريبة";
    container.appendChild(vat);

    //append card to anchor tag so it can be clickable
    const linking = document.createElement("a");
    linking.appendChild(container);
    //in future add product display page
    linking.href= "";
    linking.style.color = "black";
    linking.target = "_blank";
    return linking;
}



const addLastSeenElements = ()=>{
    const counter = last_seen_section.children[last_seen_section.children.length-2].id === "first" ? 2 : 3;
    if(startIndex < lastElements.length){
        for(let i= 0; i < counter; i++, startIndex++){
            if(startIndex >= lastElements.length){
                last_Seen.style.visibility = "hidden";
                break;
            }
            const elem = create_prod(
                lastElements[startIndex].merchant,
                lastElements[startIndex].product_name,
                lastElements[startIndex].price,
                lastElements[startIndex].old_price
            );
            if(i == counter-1){
                elem.id = "last";
                elem.style.opacity = "30%";
            }
            last_seen_section.append(elem, last_Seen);
        }
    } else {
        last_Seen.style.visibility = "hidden";
    }
};

const init = (()=>{
    if(lastElements.length > 2){
        last_Seen.style.visibility = "visible";
    }
    addLastSeenElements();
});

init();

last_Seen.addEventListener("click", ()=>{
    for(var child of last_seen_section.children){
        if(child.firstChild.className === "products-inline-style" && child.id !== "last"){
            child.style.display = "none";
        }
    }
    if(last_seen_section.children[last_seen_section.children.length-2].id !== "LS_backButton"){
        last_seen_section.children[last_seen_section.children.length-2].id = "first";
        last_seen_section.children[last_seen_section.children.length-2].style.opacity = "100%";
    }
    if(last_Seen_Back.style.visibility === "hidden" ||
        last_Seen_Back.style.visibility === ""){
        last_Seen_Back.style.visibility = "visible";
    }
    addLastSeenElements();
});


//reverse next operation 
/**
 * @Not_Finished_Yet
 * @Fuck_Front_END_Tasks
 */

// const addLastSeenElementsReversed = ()=>{
//     // const counter = 
//     if(startIndex === lastElements.length){
//         startIndex--;
//     }
//     if(startIndex >= 0){
//         for(let i =0 ; i < 3; i++, startIndex--){
//             if(startIndex < 0){
//                 last_Seen_Back.style.visibility = "hidden";
//                 startIndex = 0;
//                 break;
//             }
//             const elem = create_prod(
//                 lastElements[startIndex].merchant,
//                 lastElements[startIndex].product_name,
//                 lastElements[startIndex].price,
//                 lastElements[startIndex].old_price
//             );
//             if(i == 2){
//                 elem.id = "last";
//                 elem.style.opacity = "30%";
//             }
//             if(i==0){
//                 elem.id = "first";
//             }
//             last_seen_section.insertBefore(elem, last_Seen);
//         }
//     } else {
//         last_Seen_Back.style.visibility = "hidden";
//         startIndex = 0;
//     }
// };

// last_Seen_Back.addEventListener("click", ()=>{
//     let first;
//     for(var child of last_seen_section.children){
//         if(child.firstChild.className === "products-inline-style"){
//             child.style.display = "none";
//         }
//     }
//     if(last_Seen.style.visibility === "hidden" ||
//         last_Seen.style.visibility === ""){
//         last_Seen.style.visibility = "visible";
//     }
//    addLastSeenElementsReversed();
// });
