import VueRouter from 'vue-router';

import Home from './views/Home';

import ShopsIndex from './views/shops/Index';
import ShopsCreate from './views/shops/Create';

import ProductsIndex from './views/products/Index';
import ProductsCreate from './views/products/Create';

import FeedsIndex from './views/feeds/Index';
import FeedsCreate from './views/feeds/Create';

import ChannelsIndex from './views/channels/Index';
import ChannelsCreate from './views/channels/Create';

let routes = [

    { path: '/', component: Home, name: 'home.index'},

    { path: '/shops', component: ShopsIndex, name: 'shops.index'},
    { path: '/shops/create', component: ShopsCreate, name: 'shops.create'},

    { path: '/products', component: ProductsIndex, name: 'products.index'},
    { path: '/products/create', component: ProductsCreate, name: 'products.create'},

    { path: '/feeds', component: FeedsIndex, name: 'feeds.index'},
    { path: '/feeds/create', component: FeedsCreate, name: 'feeds.create'},

    { path: '/channels', component: ChannelsIndex, name: 'channels.index'},
    { path: '/channels/create', component: ChannelsCreate, name: 'channels.create'},

];

export default new VueRouter({
    routes,
    linkActiveClass: 'border-l-4 border-transparent lg:border-purple lg:hover:border-purple'
});
