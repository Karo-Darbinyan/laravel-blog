import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

import Index from "./components/views/index/Index";
import Contact from "./components/views/static/Contact";
import Category from "./components/views/category/Index";
import AboutUs from "./components/views/static/AboutUs";
import Popular from "./components/views/post/Popular";
import News from "./components/views/post/News";
import JoinUs from "./components/views/static/JoinUs";
import Advertisement from "./components/views/static/Advertisement";
import View from "./components/views/post/View";
import Portfolio from "./components/views/static/Portfolio";

const routes = [
    {path: "/", component: Index},
    {path: "/news", component: News},
    {path: "/popular", component: Popular},
    {path: "/category/:name", component: Category},
    {path: "/about-us", component: AboutUs},
    {path: "/join-us", component: JoinUs},
    {path: "/advertisement", component: Advertisement},
    {path: "/categories", component: Index},
    {path: "/contact", component: Contact},
    {path: "/post/:slug", component: View},
    {path: "/portfolio", component: Portfolio}
];

export default new VueRouter({
    mode: "history",
    routes: routes
})

