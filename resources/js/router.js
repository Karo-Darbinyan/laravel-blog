import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

import Index from "./components/views/index/Index";
import Contacts from "./components/views/static/Contacts";
import Category from "./components/views/category/Index";
import AboutUs from "./components/views/static/AboutUs";
import Popular from "./components/views/post/Popular";
import News from "./components/views/post/News";
import JoinUs from "./components/views/static/JoinUs";
import Advertisement from "./components/views/static/Advertisement";

const routes = [
    {path: "/", component: Index},
    {path: "/news", component: News},
    {path: "/popular", component: Popular},
    {path: "/category/:name", component: Category},
    {path: "/about-us", component: AboutUs},
    {path: "/join-us", component: JoinUs},
    {path: "/advertisement", component: Advertisement},
    {path: "/categories", component: Index},
    {path: "/contacts", component: Contacts}
];

export default new VueRouter({
    mode: "history",
    routes: routes
})

