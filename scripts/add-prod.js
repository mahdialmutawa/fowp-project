const backHome = ()=>{
    location.href='./land.html';
};

//this list is just to simulate response from back-end
const products = [
    {
        name: "ذراع دركسيون",
        price: "160.00",
        img: "../../assets/parts/steering-part1.png"
    }
];

function deleteItem(index){
    const pcon = document.getElementById("merch-prod-container");
    for(var item of pcon.children){
        if(item.className == index){
            pcon.removeChild(item);
            return;
        }
    }
};

//create cards method
const createCard = (product, index)=>{
    //create card container
    const card = document.createElement("div");
    card.id = "merch-pcard";
    card.className = `${index}`;

    //create product image container
    const imgContainer = document.createElement("div");
    imgContainer.id = "p-img";
    //create img tag and add img
    const image = document.createElement("img");
    image.src = product.img;
    //add img to image container then add image container to card
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);

    //create product info section
    const pInfo = document.createElement('div');
    pInfo.id = "p-info";

    //create h1 tage then assing product name to it then add it to pInfo
    const name = document.createElement('h1');
    name.id = "p-name";
    name.textContent = product.name;
    pInfo.appendChild(name);

    //create p tag with class p-price
    const price = document.createElement('p');
    price.className = "p-price";
    price.textContent = "السعر:";

    //create pPrice with id price and add product price to it
    const pPrice = document.createElement('span');
    pPrice.id = "price";
    pPrice.textContent = product.price + "ر.س ";

    // pPrice to price then add price to pInfo
    price.appendChild(pPrice);
    pInfo.appendChild(price);

    //create vat tag then append that to pInfo
    const vat = document.createElement('p');
    vat.id = "vat";
    vat.textContent = "غير شامل الضريبة.";
    pInfo.appendChild(vat);

    //append pInfo to card
    card.appendChild(pInfo);

    //create operation section
    const op = document.createElement('div');
    op.id = "operations";

    //create delete button with associated image
    const del = document.createElement('button');
    del.id = "delete";
    del.className = `${index}`;
    const deimg = document.createElement('img');
    deimg.src = "../../assets/images/delete.png";
    
    //add delete handler with its index 
    /**
     * @It_wont_work_if_add_event_handler_befor_element_loaded_to_HTML
     */

    //append img to button and then all of them to operation section
    del.appendChild(deimg);
    op.appendChild(del);

    //create edit button with associated image
    const ed = document.createElement('button');
    ed.id = "edit";
    ed.className = `${index}`;
    const eimg = document.createElement('img');
    eimg.src = "../../assets/images/edit.png";

    // add edit handler with its index

    //append img to button then all of them to operation section
    ed.appendChild(eimg);
    op.appendChild(ed);

    //finally append op to card then return card
    card.appendChild(op);
    return card;
};

const test = ()=>{
    const pcon = document.getElementById("merch-prod-container");
    pcon.appendChild(createCard(products[0], 0));
    
};

//once enter load all prods
const loadContent = ()=>{
    //send request to the back-end to retrieve data

    //if data is empty show message

    //for each data returned from back-end create card

    //display cards
};