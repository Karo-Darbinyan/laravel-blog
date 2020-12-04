<template>
    <!-- footer -->
    <footer class="footer-bg">
        <div class="subscribe-area pt-100 pb-80">
            <div class="container">
                <div class="subscribe-separator pt-50 pb-20">
                    <div class="row">
                        <div class="col-xl-2 col-lg-12">
                            <div class="footer-logo mb-30">
                                <router-link to="/index-2"><img src="/img/logo/footer-logo.png" alt=""></router-link>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-12">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <div class="subscribe-title">
                                        <h2>subscribe our newsletter</h2>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5">
                                    <div class="subscribe-form mb-30">
                                        <form action="index-2.html#">
                                            <input type="email" placeholder="Enter your email">
                                            <button type="submit">
                                                subscribe
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="footer-widget mb-30">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you
                                a complete account of the system, and expound the actual teachings of the great explorer
                                of
                                the truth, the master-builder
                                of human happiness.</p>
                            <div class="footer-social">
                                <router-link class="facebook" to="/index-2"><i class="fab fa-facebook-f"></i>
                                </router-link>
                                <router-link class="twitter" to="/index-2"><i class="fab fa-twitter"></i></router-link>
                                <router-link class="instagram" to="/index-2"><i class="fab fa-instagram"></i>
                                </router-link>
                                <router-link class="dribbble" to="/index-2"><i class="fab fa-dribbble"></i>
                                </router-link>
                                <router-link class="pinterest" to="/index-2"><i class="fab fa-pinterest-p"></i>
                                </router-link>
                                <router-link class="google-plus" to="/index-2"><i class="fab fa-google-plus-g"></i>
                                </router-link>
                                <router-link class="pinterest" to="/index-2"><i class="fab fa-pinterest-p"></i>
                                </router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="widget-box mb-30">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3">
                                    <div class="footer-widget mb-30">
                                        <h3>Quick Link</h3>
                                        <ul>
                                            <li>
                                                <router-link to="/index-2">Politic</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Travel</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Study</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Country</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Sports</router-link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class="footer-widget mb-30">
                                        <h3>Most Visited</h3>
                                        <ul>
                                            <li>
                                                <router-link to="/index-2">Latest News</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Most Visited</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Recent News</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">International</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Entertainment</router-link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class="footer-widget mb-30">
                                        <h3>About Us</h3>
                                        <ul>
                                            <li>
                                                <router-link to="/index-2">Feature</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">About Us</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Life Style</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Economic</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2">Business</router-link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class="footer-widget pt-50 mb-30">
                                        <ul>
                                            <li>
                                                <router-link to="/index-2"><i class="fas fa-video"></i> Video
                                                </router-link>
                                            </li>
                                            <li>
                                                <router-link to="/index-2"><i class="fas fa-camera-retro"></i> Picture
                                                </router-link>
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
        <div class="copyright-area pt-25 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright text-center">
                            <p>© Copyrights {{ date }}. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
</template>

<script>
export default {
    name: "Footer",
    data() {
        return {
            date: new Date().getFullYear()
        };
    },
}
</script>

<style scoped>

</style>
