<template>
    <main>

        <!-- hero-area start -->
        <div class="page-banner-area mt-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-bar text-center pt-60 pb-60" style="background-image: url(/img/bg/page-itle.jpg)">
                            <h1>Portfolio Box</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero-area end -->

        <!-- portfolio area -->
        <div class="portfolio-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio-menu mb-40 text-center">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".cat1">Politics</button>
                            <button data-filter=".cat2">Lifestyle</button>
                            <button data-filter=".cat3">study</button>
                            <button data-filter=".cat4">sports</button>
                            <button data-filter=".cat5">music</button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat5">
                        <div class="portfolio-wrapper mb-30">
                            <div class="portfolio-thumb">
                                <img src="/img/portfolio/port1.jpg" alt="">
                                <a class="popup-image" href="/img/portfolio/port1.jpg"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat4">
                        <div class="portfolio-wrapper mb-30">
                            <div class="portfolio-thumb">
                                <img src="/img/portfolio/port2.jpg" alt="">
                                <a class="popup-image" href="/img/portfolio/port2.jpg"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat1">
                        <div class="portfolio-wrapper mb-30">
                            <div class="portfolio-thumb">
                                <img src="/img/portfolio/port3.jpg" alt="">
                                <a class="popup-image" href="/img/portfolio/port3.jpg"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat4 cat2">
                        <div class="portfolio-wrapper mb-30">
                            <div class="portfolio-thumb">
                                <img src="/img/portfolio/port4.jpg" alt="">
                                <a class="popup-image" href="/img/portfolio/port4.jpg"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat4 cat3">
                        <div class="portfolio-wrapper mb-30">
                            <div class="portfolio-thumb">
                                <img src="/img/portfolio/port5.jpg" alt="">
                                <a class="popup-image" href="/img/portfolio/port5.jpg"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat5 cat2">
                        <div class="portfolio-wrapper mb-30">
                            <div class="portfolio-thumb">
                                <img src="/img/portfolio/port6.jpg" alt="">
                                <a class="popup-image" href="/img/portfolio/port6.jpg"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="videw-project text-center mt-50">
                            <a href="portfolio-box.html#" class="btn">ALL PROJECTS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio area end -->

    </main>
</template>

<script>
export default {
name: "Portfolio"
}
</script>

<style scoped>

</style>
