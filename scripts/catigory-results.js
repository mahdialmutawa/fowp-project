const staticProducts = [
    {
        name: "some product",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "electrical"
    },
    {
        name: "some product1",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "mechanical"
    },
    {
        name: "some product2",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "tyres"
    },
    {
        name: "some product3",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "consume"
    },
    {
        name: "some product4",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "oils"
    },
    {
        name: "some product5",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "body"
    },
    {
        name: "some product6",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "offers"
    },
    {
        name: "some product7",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "electrical"
    },
    {
        name: "some product8",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "electrical"
    },
    {
        name: "some product9",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "electrical"
    },
    {
        name: "some product10",
        price: 1000.00,
        pnum: "xxxxxxxx-xxxx-xxxx-xxxxxxxx",
        img: "../assets/parts/steering-part1.png",
        catigory: "electrical"
    },
];

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

const load = ()=>{
    const perant = document.getElementById("merch-prod-container");
    for(prod of staticProducts){
        perant.appendChild(
            createCard(prod)
        );
    }
};

load();