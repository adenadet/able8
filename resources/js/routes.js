import Vue from 'vue';
import VueRouter from 'vue-router';    

import ShopMain from './shop/Main.vue';
import ShopMiniCart from './shop/MiniCart.vue';
import ShopMiniProduct from './shop/MiniProduct.vue';
import ShopMiniWishlist from './shop/MiniWishlist.vue';
import ShopPayment from './shop/Payment.vue';
import ShopProduct from './shop/Product.vue';
import ShopSliders from './shop/Sliders.vue';

Vue.component('ShopMain', ShopMain);
Vue.component('ShopMiniCart', ShopMiniCart);
Vue.component('ShopMiniProduct', ShopMiniProduct);
Vue.component('ShopMiniWishlist', ShopMiniWishlist);
Vue.component('ShopPayment', ShopPayment);
Vue.component('ShopProduct', ShopProduct);
Vue.component('ShopSliders', ShopSliders);

Vue.component('shop-mini-cart', ShopMiniCart);
Vue.component('shop-mini-wishlist', ShopMiniWishlist);

let routes = [

    { path: '/', name: 'home',component: ShopMain},
    { path: '/shop/product/:id', name: 'home',component: ShopProduct},

]
    
const router = new VueRouter({
    mode: 'history',
    routes,
    //store,
})

export default router
