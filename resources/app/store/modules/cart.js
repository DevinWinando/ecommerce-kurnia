// src/store/modules/cart.js
import CartService from "@/services/CartService";

const cartService = new CartService();

export default {
    namespaced: true,
    state: () => ({
        items: [], // { id, name, price, qty }
    }),
    getters: {
        getCart: (state) => state.items,
        totalItems: (state) =>
            state.items.reduce((acc, item) => acc + item.qty, 0),
        totalPrice: (state) =>
            state.items.reduce((acc, item) => acc + item.qty * item.price, 0),
    },
    mutations: {
        ADD_ITEM(state, product) {
            const item = state.items.find((i) => i.product_id === product.id);
            if (item) {
                item.qty += product.qty;
            } else {
                state.items.push({ ...product, product_id: product.id });
            }
        },
        REMOVE_ITEM(state, id) {
            state.items = state.items.filter((item) => item.product_id !== id);
        },
        CLEAR_CART(state) {
            state.items = [];
        },
        UPDATE_QTY(state, { id, qty }) {
            const item = state.items.find((i) => i.product_id === id);
            if (item && qty > 0) item.qty = qty;
            if (qty == 0) {
                state.items = state.items.filter((i) => i.product_id !== id);
            }
        },
        SET_CART(state, cartItems) {
            state.items = cartItems;
        },
    },
    actions: {
        addToCart({ commit, dispatch }, product) {
            commit("ADD_ITEM", product);
            dispatch("debouncedSync");
        },
        removeFromCart({ commit, dispatch }, id) {
            commit("REMOVE_ITEM", id);
            dispatch("debouncedSync");
        },
        clearCart({ commit, dispatch }) {
            commit("CLEAR_CART");
            dispatch("debouncedSync");
        },
        updateQty({ commit, dispatch }, payload) {
            commit("UPDATE_QTY", payload);
            dispatch("debouncedSync");
        },
        async syncCart({ state }) {
            try {
                if (state.items.length === 0) return;
                await cartService.syncCartItems(state.items);
            } catch (err) {
                console.error("[SYNC] Gagal sync cart:", err.message);
            }
        },
        async fetchCart({ commit }) {
            try {
                const response = await cartService.getCartItems();
                commit("SET_CART", response.data);
            } catch (error) {
                console.error("[INIT] Gagal ambil cart:", error.message);
            }
        },
        debouncedSync: (() => {
            let timeout;
            return ({ dispatch }) => {
                clearTimeout(timeout);
                timeout = setTimeout(() => {
                    dispatch("syncCart");
                }, 1000); // debounce 1 detik
            };
        })(),
    },
};
