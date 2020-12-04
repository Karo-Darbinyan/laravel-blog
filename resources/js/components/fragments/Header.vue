<template>
    <!-- header start -->
    <header class="header">
        <div class="header__top-area header-top-border">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="header__top-menu top-menu-black">
                            <ul>
                                <li>
                                    <router-link to="/about">About</router-link>
                                </li>
                                <li>
                                    <router-link to="/advertise">Advertise</router-link>
                                </li>
                                <li>
                                    <router-link to="/privacy-and-policy">Privacy & Policy</router-link>
                                </li>
                                <li>
                                    <router-link to="/contact-us">Contact Us</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                        <div class="header-date text-center">
                            <span>Friday, 29 July 2018</span>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="top-form f-right ml-20 ">
                            <form action="index-2.html#">
                                <input type="email" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="header__social header-social-black f-right mt-10">
                            <router-link to="/index"><i class="fab fa-facebook-f"></i></router-link>
                            <router-link to="/index"><i class="fab fa-twitter"></i></router-link>
                            <router-link to="/index"><i class="fab fa-linkedin-in"></i></router-link>
                            <router-link to="/index"><i class="fab fa-google-plus-g"></i></router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__middle pt-20">
            <div class="container">
                <div class="row">
                    <div
                        class="col-xl-4 col-lg-4 col-md-3 d-flex align-items-center justify-content-md-start justify-content-center">
                        <div class="header__logo text-center text-md-left mb-20">
                            <router-link to="/"><img src="/img/logo/logo.png" alt="Header Logo"></router-link>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-9">
                        <div class="header__add text-center text-md-right mb-20">
                            <router-link to="/index-2"><img src="/img/add/header-add.jpg" alt=""></router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__menu-area menu__border white__header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header__right-icon header__icon-black f-right mt-17">
                            <a href="#" data-toggle="modal" data-target="#search-modal">
                                <i class="fas fa-search"></i>
                            </a>
                            <a class="info-bar" href="javascript:void(0)">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                        <div class="header__menu header__menu-white f-left">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <router-link to="/news">News</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/tech">Tech</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/lifestyle">Enterteinment</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/lifestyle">Lifestyle</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/blog-standard">Blog</router-link>
                                        <ul class="submenu">
                                            <li>
                                                <router-link to="/blog-3-column">BLog 3 Column</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/blog-standard">BLog Sidebar</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/post-details">BLog Details</router-link>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">Portfolio</a>
                                        <ul class="submenu">
                                            <li>
                                                <router-link to="/portfolio-box">Portfolio Box</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/portfolio-full">Portfolio Box</router-link>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">Pages</a>
                                        <ul class="submenu">
                                            <li>
                                                <router-link to="/contact">Contact</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/lifestyle">Lifestyle</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/politic">Politic</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/tech">Technology</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/post-details">Post Details</router-link>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="extra-info">
            <div class="close-icon">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="header__logo">
                <router-link to="/index-2">
                    <img src="/img/logo/footer-logo.png" alt="Header Logo">
                </router-link>
            </div>
            <div class="social-icon-right mt-30 mb-50">
                <router-link to="/index-2">
                    <i class="fab fa-facebook-f"></i>
                </router-link>
                <router-link to="/index-2">
                    <i class="fab fa-twitter"></i>
                </router-link>
                <router-link to="/index-2">
                    <i class="fab fa-google-plus-g"></i>
                </router-link>
                <router-link to="/index-2">
                    <i class="fab fa-instagram"></i>
                </router-link>
            </div>
            <div class="side-menu mb-30">
                <ul>
                    <li>
                        <router-link to="/index-2">Features</router-link>
                    </li>
                    <li>
                        <router-link to="/index-2">News</router-link>
                    </li>
                    <li>
                        <router-link to="/index-2">Tech</router-link>
                    </li>
                    <li>
                        <router-link to="/index-2">Enterteinment</router-link>
                    </li>
                    <li>
                        <router-link to="/index-2">Lifestyle</router-link>
                    </li>
                    <li>
                        <router-link to="/index-2">Review</router-link>
                    </li>
                </ul>
            </div>

            <div class="side-post">
                <h3>Popular Post</h3>
                <div class="post__small mb-20">
                    <div class="post__small-thumb f-left">
                        <router-link to="/index-2">
                            <img src="img/trendy/xs/xs-1.jpg" alt="hero image">
                        </router-link>
                    </div>
                    <div class="post__small-text fix pl-10">
                            <span class="sm-cat">
                                <a href="index-2.html#">Fashion</a>
                            </span>
                        <h4 class="title-13 pr-0">
                            <router-link to="/index-2">Storm in aw ame home away.</router-link>
                        </h4>
                        <div class="post__small-text-meta">
                            <ul>
                                <li>
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>01 Sep 2018</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="post__small mb-20">
                    <div class="post__small-thumb f-left">
                        <router-link to="/index-2">
                            <img src="/img/trendy/xs/xs-2.jpg" alt="hero image">
                        </router-link>
                    </div>
                    <div class="post__small-text fix pl-10">
                            <span class="sm-cat">
                                <router-link to="/index-2">Fashion</router-link>
                            </span>
                        <h4 class="title-13 pr-0">
                            <router-link to="/index-2">Good ridre urants bid farewell.</router-link>
                        </h4>
                        <div class="post__small-text-meta">
                            <ul>
                                <li>
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>01 Sep 2018</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="post__small mb-20">
                    <div class="post__small-thumb f-left">
                        <router-link to="/index-2">
                            <img src="/img/trendy/xs/xs-3.jpg" alt="hero image">
                        </router-link>
                    </div>
                    <div class="post__small-text fix pl-10">
                            <span class="sm-cat">
                                <router-link to="/index-2">Fashion</router-link>
                            </span>
                        <h4 class="title-13 pr-0">
                            <router-link to="/index-2">Nahan dow plays Lieral lership..</router-link>
                        </h4>
                        <div class="post__small-text-meta">
                            <ul>
                                <li>
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>01 Sep 2018</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="post__small mb-20">
                    <div class="post__small-thumb f-left">
                        <router-link to="/index-2">
                            <img src="/img/trendy/xs/xs-4.jpg" alt="hero image">
                        </router-link>
                    </div>
                    <div class="post__small-text fix pl-10">
                            <span class="sm-cat">
                                <router-link to="/index-2">Travel</router-link>
                            </span>
                        <h4 class="title-13 pr-0">
                            <router-link to="/index-2">Weinstein pushs for dismissal.</router-link>
                        </h4>
                        <div class="post__small-text-meta">
                            <ul>
                                <li>
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>01 Sep 2018</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <input type="text" placeholder="Search here...">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
</template>

<script>
export default {
    name: "Header",
    data() {
        return {
            nav_fixed: [
                {title: "News", href: "/news", class: ""},
                {title: "Popular", href: "/popular", class: ""},
                {title: "Web Design", href: "/category/web-design", class: "cat-1"},
                {title: "JavaScript", href: "/category/javascript", class: "cat-2"},
                {title: "Css", href: "/category/css", class: "cat-3"},
                {title: "Jquery", href: "/category/jquery", class: "cat-4"}
            ],
            nav_aside: [
                {title: "Home", href: "/"},
                {title: "About Us", href: "/about-us"},
                {title: "Join Us", href: "/join-us"},
                {title: "Advertisement", href: "/advertisement"},
                {title: "Contacts", href: "/contacts"}
            ]
        }
    }
}
</script>

<style scoped>

</style>
