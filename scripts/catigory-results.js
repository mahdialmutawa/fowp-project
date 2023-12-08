const createCard = (product)=>{
    //create card container
    const card = document.createElement("div");
    card.id = "merch-pcard";

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
    return card;
};

const load = (products)=>{
    const perant = document.getElementById("merch-prod-container");
    for(let prod of products){
        perant.appendChild(
            createCard(prod)
        );
    }
};

// load();