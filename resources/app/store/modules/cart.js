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
            const maxQty = product.stock?.qty || 0;
            const available = product.stock?.available || false;
            
            if (!available) {
                console.warn('Product out of stock');
                return;
            }
            
            if (item) {
                const newQty = item.qty + (product.qty || 1);
                // Don't allow adding more than available stock
                item.qty = Math.min(newQty, maxQty);
            } else {
                const initialQty = Math.min(product.qty || 1, maxQty);
                state.items.push({ ...product, product_id: product.id, qty: initialQty });
            }
        },
        REMOVE_ITEM(state, id) {
            state.items = state.items.filter((item) => item.product_id !== id);
        },
        CLEAR_CART(state) {
            state.items = [];
        },
        UPDATE_QTY(state, { id, qty, product }) {
            const item = state.items.find((i) => i.product_id === id);
            if (!item) return;
            
            // Get max qty from product stock or from item itself
            const maxQty = product?.stock?.qty || item.stock?.qty || 0;
            const available = product?.stock?.available !== undefined 
                ? product.stock.available 
                : (item.stock?.available !== undefined ? item.stock.available : true);
            
            if (!available || maxQty === 0) {
                // Remove item if not available
                state.items = state.items.filter((i) => i.product_id !== id);
                return;
            }
            
            if (qty > 0) {
                // Cap qty at max available stock
                item.qty = Math.min(qty, maxQty);
            }
            
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
        updateQty({ commit, dispatch, state }, payload) {
            // Find the product in cart to get stock info
            const item = state.items.find((i) => i.product_id === payload.id);
            if (item) {
                payload.product = item; // Pass product info for stock validation
            }
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
