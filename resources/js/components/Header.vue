<template>
    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container">
                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="/" class="logo"><img src="img/logo.png" alt=""></a>
                    </div>
                    <!-- /logo -->

                    <!-- nav -->
                    <ul class="nav-menu nav navbar-nav">
                        <li v-for="item in nav_fixed" v-bind:class="item.class">
                            <a :href="item.href">{{ item.title }}</a></li>
                    </ul>
                    <!-- /nav -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn" v-on:click="aside"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div class="search-form">
                            <label>
                                <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
                            </label>
                            <button class="search-close"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <!-- nav -->
                <div class="section-row">
                    <ul class="nav-aside-menu">
                        <li v-for="item in nav_aside"><a :href="item.href">{{ item.title }}</a></li>
                    </ul>
                </div>
                <!-- /nav -->

                <!-- widget posts -->
                <div class="section-row">
                    <h3>Recent Posts</h3>
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="img/widget-2.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website
                                Design Mockup Into Code Automatically</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="img/widget-3.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The
                                Backend Development Block!</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="img/widget-4.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And
                                Development Tools</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /widget posts -->

                <!-- social links -->
                <div class="section-row">
                    <h3>Follow us</h3>
                    <ul class="nav-aside-social">
                        <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <!-- /social links -->

                <!-- aside nav close -->
                <button class="nav-aside-close"><i class="fa fa-times"></i></button>
                <!-- /aside nav close -->
            </div>
            <!-- Aside Nav -->
        </div>
        <!-- /Nav -->
    </header>
    <!-- /Header -->
</template>

<script>
export default {
    name: "Header",
    data() {
        return {
            nav_fixed: [
                {title: "News", href: "/category", class: ""},
                {title: "Popular", href: "/category", class: ""},
                {title: "Web Design", href: "/category", class: "cat-1"},
                {title: "JavaScript", href: "/category", class: "cat-2"},
                {title: "Css", href: "/category", class: "cat-3"},
                {title: "Jquery", href: "/category", class: "cat-4"}
            ],
            nav_aside: [
                {title: "Home", href: "/category"},
                {title: "About Us", href: "/category"},
                {title: "Join Us", href: "/category"},
                {title: "Advertisement", href: "/category"},
                {title: "Contacts", href: "/category"}
            ]
        }
    }
}
</script>

<style scoped>

</style>
