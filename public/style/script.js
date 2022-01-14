// ----------------------живой поиск----------------------------

async function checkEvent()
{
    let val = document.querySelector("#search").value;
    if (val.length >= 3) {
        const rawResponse = await fetch('/handler.php', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({val})
        });

        let content = await rawResponse.json();
        let output = '';
        for (const cont of content) {
            console.log(cont);
                let Html = '<li>' + cont + '</li>';
            output += Html;
        }

        document.querySelector('.results').innerHTML = output;
        const d = document.querySelector('.results');

        for (let i = 0; i < d.children.length; i++) {
            d.children[i].addEventListener('click', event => {
                addInSearch(event.target.innerText);
            });
        }
    } else {
        resultHide();
    }
}

function resultHide()
{
    document.querySelector('.results').innerHTML = '';
}

function addInSearch(event)
{
    document.querySelector('#search').value = event;
    resultHide();

}

document.onclick = function (event) {
    resultHide();
}
//------------------------------------------------------------------
// let counter = 0;
// const buttonElement = document.getElementById('btn');
// const buttonElement_2 = document.getElementById('btn-2');
//
// buttonElement.addEventListener('click', () => {
//     counter += 1;
//     document.getElementById('id').innerHTML = `Кол - во лайков = ${counter}`
// });
// buttonElement_2.addEventListener('click', () => {
//     document.getElementById('id').innerHTML = `Ха-Ха-Ха`
// });

// data (){
//     return{
//         likes :0
//     }
// }
// import { createApp } from "vue";
// import store from "./store";
// import "bootstrap/dist/js/bootstrap.bundle.min";
// import "./style.css";
//
// import ProductsList from "./components/ProductsList";
// import CartButton from "./components/CartButton";
// import CartModal from "./components/cart/CartModal";
//
// const app = createApp({});
//
// app.use(store);
//
// app.component("products-list", ProductsList);
// app.component("cart-button", CartButton);
// app.component("cart-modal", CartModal);
//
// app.mount("#app");