<template>
    <main>
        <slider></slider>
        <!-- features-area start -->
        <section class="features-area pt-60 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="post__features mb-30">
                            <div class="post__features-thumb" data-opacity="4" data-overlay="dark">
                                <a href="index-2.html#"><img class="img-100" src="img/features/fea1.jpg" alt=""></a>
                            </div>
                            <div class="post__features-content">
                                <h4><a href="index-2.html#">8 Month old rocks out as one man band in music</a></h4>
                                <div class="post__features-author">
                                    <span>Michel Delax</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="post__features mb-30">
                            <div class="post__features-thumb" data-opacity="4" data-overlay="dark">
                                <a href="index-2.html#"><img class="img-100" src="img/features/fea2.jpg" alt=""></a>
                            </div>
                            <div class="post__features-content">
                                <h4><a href="index-2.html#">Discover the world look and the world fresh nature</a></h4>
                                <div class="post__features-author">
                                    <span>Michel Delax</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="post__features mb-30">
                            <div class="post__features-thumb" data-opacity="4" data-overlay="dark">
                                <a href="index-2.html#"><img class="img-100" src="img/features/fea3.jpg" alt=""></a>
                            </div>
                            <div class="post__features-content">
                                <h4><a href="index-2.html#">The wave that’s building for not be blue so much</a></h4>
                                <div class="post__features-author">
                                    <span>Michel Delax</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 d-lg-none d-xl-block">
                        <div class="post__features mb-30">
                            <div class="post__features-thumb" data-opacity="4" data-overlay="dark">
                                <a href="index-2.html#"><img class="img-100" src="img/features/fea4.jpg" alt=""></a>
                            </div>
                            <div class="post__features-content">
                                <h4><a href="index-2.html#">AgoHorse-riding could impro your child’s intelligence</a>
                                </h4>
                                <div class="post__features-author">
                                    <span>Michel Delax</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area start end -->

        <!-- features news -->
        <section class="features-area pb-30">
            <div class="container">
                <div class="content-pad border pb-0">
                    <div class="row">
                        <div v-for="post_1 in posts_1" class="col-xl-3 col-lg-4 col-md-6">
                            <div class="postbox mb-25">
                                <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                    <router-link :to="'/post/' + post_1.slug">
                                        <img :src="'/storage/' + post_1.image" alt="hero image">
                                    </router-link>
                                </div>
                                <div class="postbox__text pt-20">
                                    <div class="meta-top">
                                            <span class="post-cat mb-10 mr-10">
                                                <router-link :to="'/post/' + post_1.category.slug" tabindex="0">{{ post_1.category.name }}</router-link>
                                            </span>
                                        <span><i class="fas fa-calendar-alt"></i> {{ date_format(post_1.created_at) }}</span>
                                    </div>
                                    <h4 class="title-16 pr-0">
                                        <router-link :to="'/post/' + post_1.slug">{{ post_1.title }}</router-link>
                                    </h4>
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <span>{{ post_1.user.name }}</span>
                                            </li>
                                            <li>
                                                <span>Comments ({{ post_1.views }})</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features news end -->

        <!-- latest news -->
        <section class="sidebar-area pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="content-pad border pb-0 mb-50">
                            <div class="row">
                                <div class="col-xl-6 col-lg-4 col-md-5">
                                    <div class="postbox mb-30">
                                        <div class="postbox__thumb">
                                            <a href="index-2.html#">
                                                <img src="img/news2/ns1.jpg" alt="hero image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-7">
                                    <div class="postbox__text mb-30">
                                        <div class="meta-top">
                                                <span class="post-cat mb-10 mr-10">
                                                    <a href="index-2.html#" tabindex="0">politics</a>
                                                </span>
                                            <span>
                                                    <i class="fas fa-calendar-alt"></i> 01 Sep 2018</span>
                                        </div>
                                        <h4 class="title-16 pr-0">
                                            <a href="index-2.html#">Succession finale: jeremy strong keall’s struggles
                                                what comes next.</a>
                                        </h4>
                                        <div class="postbox__text-meta pb-10">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span>01 Sep 2018</span>
                                                </li>
                                                <li>
                                                    <i class="far fa-comment"></i>
                                                    <span>(03)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="desc-text mb-20">
                                            <p>But I must explain to you how all this mistaken idea of denouncing sure
                                                and praising pain
                                                was born and I will give you a complete account.</p>
                                        </div>
                                        <a href="index-2.html#" class="btn btn-soft">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-4 col-md-5">
                                    <div class="postbox mb-30">
                                        <div class="postbox__thumb">
                                            <a href="index-2.html#">
                                                <img src="img/news2/ns2.jpg" alt="hero image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-7">
                                    <div class="postbox__text mb-30">
                                        <div class="meta-top">
                                                <span class="post-cat mb-10 mr-10">
                                                    <a href="index-2.html#" tabindex="0">politics</a>
                                                </span>
                                            <span>
                                                    <i class="fas fa-calendar-alt"></i> 01 Sep 2018</span>
                                        </div>
                                        <h4 class="title-16 pr-0">
                                            <a href="index-2.html#">Easter Island s limiting tourism in an there no
                                                attempt to preserve its culture</a>
                                        </h4>
                                        <div class="postbox__text-meta pb-10">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span>01 Sep 2018</span>
                                                </li>
                                                <li>
                                                    <i class="far fa-comment"></i>
                                                    <span>(03)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="desc-text mb-20">
                                            <p>But I must explain to you how all this mistaken idea of denouncing sure
                                                and praising pain
                                                was born and I will give you a complete account.</p>
                                        </div>
                                        <a href="index-2.html#" class="btn btn-soft">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-pad border pb-0 mb-50">
                            <div class="news-tab-area">
                                <div class="news-tab-part grey-bg clearfix mb-30">
                                    <div class="title-theme f-left">
                                        <h2>latest news</h2>
                                    </div>
                                    <ul class="nav news-tabs f-right" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab"
                                               href="index-2.html#home" role="tab" aria-controls="home"
                                               aria-selected="true">science </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab"
                                               href="index-2.html#profile" role="tab" aria-controls="profile"
                                               aria-selected="false">travel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab"
                                               href="index-2.html#contact" role="tab" aria-controls="contact"
                                               aria-selected="false">fashion</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                         aria-labelledby="home-tab">
                                        <div class="row">
                                            <div v-for="latest_post in latest_posts" class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <router-link :to="'/post/' + latest_post.slug">
                                                            <img :src="'/storage/' + latest_post.image"
                                                                 alt="hero image">
                                                        </router-link>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>
                                                                        {{
                                                                            date_format(latest_post.created_at, 'DD MMM YYYY')
                                                                        }}
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-eye"></i>
                                                                    <span>({{ latest_post.views }})</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>({{ latest_post.id }})</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <router-link :to="'/post/' + latest_post.slug">
                                                                {{ latest_post.title }}
                                                            </router-link>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                         aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab6.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">Patriots release WR Jordan Matthews
                                                                after significant</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab2.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">Urban Meyer faces questions about
                                                                domestic viole...</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab1.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">DNA-testing companies pro mise not
                                                                to share informa</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab3.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">Giant hands lift new Vietnan bridge
                                                                toward heavens</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab5.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">Congrats! Because you live Dhaka can
                                                                book these</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab4.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">'Mars' actor says working on the
                                                                NatGeo series</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                         aria-labelledby="contact-tab">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab2.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">Urban Meyer faces questions about
                                                                domestic viole...</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab5.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">Congrats! Because you live Dhaka can
                                                                book these</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab1.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">DNA-testing companies pro mise not
                                                                to share informa</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab6.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">Patriots release WR Jordan Matthews
                                                                after significant</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab3.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">Giant hands lift new Vietnan bridge
                                                                toward heavens</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="postbox mb-25">
                                                    <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                                        <a href="index-2.html#">
                                                            <img src="img/news2/tab4.jpg" alt="hero image">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__text pt-15">
                                                        <div class="postbox__text-meta pb-10">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                    <span>01 Sep 2018</span>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-comment"></i>
                                                                    <span>(03)</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="title-14 font-600 pr-0">
                                                            <a href="index-2.html#">'Mars' actor says working on the
                                                                NatGeo series</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-pad border pb-0 mb-50">
                            <div class="video-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-video embed-responsive embed-responsive-16by9 mb-30">
                                            <iframe src="https://www.youtube.com/embed/X58woEyyPAc"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-video embed-responsive embed-responsive-16by9 mb-30">
                                            <iframe src="https://www.youtube.com/embed/DcylVx2ex78"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-video embed-responsive embed-responsive-16by9 mb-30">
                                            <iframe src="https://www.youtube.com/embed/9d8wWcJLnFI"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-video embed-responsive embed-responsive-16by9 mb-30">
                                            <iframe src="https://www.youtube.com/embed/GOAEIMx39-w"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-pad border pb-0 mb-50">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="section-title mb-30">
                                        <h2>Science</h2>
                                    </div>

                                    <div class="cat-sm-post">
                                        <div class="post__small mb-30">
                                            <div class="post__small-thumb f-left">
                                                <a href="index-2.html#">
                                                    <img src="img/trendy/xs/xs-1.jpg" alt="hero image">
                                                </a>
                                            </div>
                                            <div class="post__small-text fix pl-10">
                                                <h4 class="title-14 pr-0 mt-0">
                                                    <a href="index-2.html#">Hobots or Job Training: Mnutuers Grapple
                                                        With How to Improve.</a>
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
                                        <div class="post__small mb-30">
                                            <div class="post__small-thumb f-left">
                                                <a href="index-2.html#">
                                                    <img src="img/trendy/xs/xs-2.jpg" alt="hero image">
                                                </a>
                                            </div>
                                            <div class="post__small-text fix pl-10">
                                                <h4 class="title-14 pr-0 mt-0">
                                                    <a href="index-2.html#">Robots or Job Training: Manutues Grapple
                                                        With How to Improve..</a>
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
                                        <div class="post__small mb-30">
                                            <div class="post__small-thumb f-left">
                                                <a href="index-2.html#">
                                                    <img src="img/trendy/xs/xs-3.jpg" alt="hero image">
                                                </a>
                                            </div>
                                            <div class="post__small-text fix pl-10">
                                                <h4 class="title-14 pr-0 mt-0">
                                                    <a href="index-2.html#">Robots or Job Training: Manutues Grapple
                                                        With How to Improve..</a>
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
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="section-title mb-30">
                                        <h2>Travel</h2>
                                    </div>

                                    <div class="cat-sm-post">
                                        <div class="post__small mb-30">
                                            <div class="post__small-thumb f-left">
                                                <a href="index-2.html#">
                                                    <img src="img/trendy/xs/xs-4.jpg" alt="hero image">
                                                </a>
                                            </div>
                                            <div class="post__small-text fix pl-10">
                                                <h4 class="title-14 pr-0 mt-0">
                                                    <a href="index-2.html#">Hobots or Job Training: Mnutuers Grapple
                                                        With How to Improve.</a>
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
                                        <div class="post__small mb-30">
                                            <div class="post__small-thumb f-left">
                                                <a href="index-2.html#">
                                                    <img src="img/trendy/xs/xs-5.jpg" alt="hero image">
                                                </a>
                                            </div>
                                            <div class="post__small-text fix pl-10">
                                                <h4 class="title-14 pr-0 mt-0">
                                                    <a href="index-2.html#">Robots or Job Training: Manutues Grapple
                                                        With How to Improve..</a>
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
                                        <div class="post__small mb-30">
                                            <div class="post__small-thumb f-left">
                                                <a href="index-2.html#">
                                                    <img src="img/trendy/xs/xs-6.jpg" alt="hero image">
                                                </a>
                                            </div>
                                            <div class="post__small-text fix pl-10">
                                                <h4 class="title-14 pr-0 mt-0">
                                                    <a href="index-2.html#">Robots or Job Training: Manutues Grapple
                                                        With How to Improve..</a>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="widget mb-40">
                            <a href="index-2.html#">
                                <img src="img/add/add-sidebar.jpg" alt="">
                            </a>
                        </div>
                        <popular_posts></popular_posts>
                        <div class="widget widget-border mb-40">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li v-for="category in categories">
                                    <router-link :to="'/category/' + category.slug">{{ category.name }}
                                        <span>{{ category.posts_count }}</span>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-border mb-40">
                            <h3 class="widget-title">Subscribe our Newsletter!</h3>
                            <p>Subscribe to our email newsletter to receive useful articles and special offers.</p>
                            <form class="widget-subscribe" action="index-2.html#">
                                <input type="email" placeholder="Enter your email :">
                                <button class="btn">subscribe</button>
                            </form>
                        </div>
                        <div class="widget widget-border mb-40">
                            <h3 class="widget-title">Most visited</h3>
                            <div class="postbox">
                                <div class="postbox__thumb">
                                    <a href="index-2.html#">
                                        <img src="img/details/sidebar-post.jpg" alt="hero image">
                                    </a>
                                </div>
                                <div class="postbox__text pt-15">
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>01 Sep 2018</span>
                                            </li>
                                            <li>
                                                <i class="far fa-comment"></i>
                                                <span>(03)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="title-16 pr-0">
                                        <a href="index-2.html#">Paul Manafort’s Accountant Testifies She Helped Alter
                                            Financial Documents</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest news end -->

        <!-- app-area start -->
        <section class="app-area pb-60">
            <div class="container">
                <div class="grey-bg pt-55 pb-55 pl-60 pr-60">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="app-text text-center text-xl-left">
                                <h2>Download our apps now</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="app-store text-center text-xl-right">
                                <a href="index-2.html#"><img src="img/store/apple.png" alt=""></a>
                                <a href="index-2.html#"><img src="img/store/google.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app-area end -->

    </main>
</template>

<script>

import Slider from "../../fragments/Slider";
import popular_posts from "../../views/post/Popular";
import axios from "axios";
import moment from "moment";

export default {
    name: "Index",
    components: {
        Slider: Slider,
        popular_posts: popular_posts
    },
    data() {
        return {
            slider_posts: [],
            latest_posts: [],
            categories: [],
            posts_1: []
        };
    },
    mounted() {
        axios.get("/api/v1/index")
            .then(response => {
                this.categories = response.data.categories;
                this.slider_posts = response.data.slider_posts;
                this.latest_posts = response.data.latest_posts;
                this.posts_1 = response.data.posts_1;
            })
    },
    methods: {
        date_format: function (date, format) {
            return moment(date).format(format || 'DD MMM YYYY');
        }
    }
}
</script>

<style scoped>

</style>
