import {createStore} from "vuex";

let cart = window.localStorage.getItem('cart');

const store = createStore({
    state: {
        cartProducts: cart ? JSON.parse(cart) : [],
    },
    getters: {
        totalAmount: (state) => (
        state.cartProducts.reduce((total, {amount}) => total + amount, 0)
    ),
    totalPrice: (state) => (
    state.cartProducts.reduce(
        (total, {price, amount}) =>
        total + (amount * price),
        0
    )
    ),
    cartIsEmpty: (state) => !state.cartProducts.length,
    getProductById: (state) => (productId) => (
    state.cartProducts.find(({id}) => productId === id)
    ),
    },
    actions: {},
    mutations: {
        saveCart(state) {
            window.localStorage.setItem('cart', JSON.stringify(state.cartProducts));
        },
        addProductToCart(state, product) {
            state.cartProducts.push({
                ...product,
                amount: 1,
            });
            this.commit('saveCart');
        },
        incrementProductAmount(state, index) {
            const product = state.cartProducts[index];
            state.cartProducts.splice(index, 1, {
                ...product,
                amount: product.amount + 1,
            });
            this.commit('saveCart');
        },
        decrementProductAmount(state, index) {
            const product = state.cartProducts[index];
            state.cartProducts.splice(index, 1, {
                ...product,
                amount: product.amount - 1,
            });
            this.commit('saveCart');
        },
        removeProductFromCart(state, index) {
            state.cartProducts.splice(index, 1);
            this.commit('saveCart');
        },
        removeOrder(){
            this.cartProducts = '';
            this.commit('saveCart');
        }
    },
});

export default store;