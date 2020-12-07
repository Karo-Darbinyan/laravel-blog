<template>
    <main>
        <!-- hero-area start -->
        <div class="page-banner-area mt-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-bar text-center pt-60 pb-60" style="background-image: url(/img/bg/page-itle.jpg)">
                            <h1>Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero-area end -->

        <!-- blog-area start -->
        <div class="contact-area pt-110 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-info mb-30">
                            <h2>Keep in touch</h2>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-meta mb-30">
                                        <div class="contact-meta-info">
                                            <h4>Phone</h4>
                                            <p>+ 22 254 362 52 41; </p>
                                            <p>+ 22 564 241 36 54; </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-meta mb-30">
                                        <div class="contact-meta-info">
                                            <h4>E-mail</h4>
                                            <p><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="41282f272e01252e2c20282f6f222e2c">[email&#160;protected]</a>;</p>
                                            <p><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="1776737a7e795773787a767e793974787a">[email&#160;protected]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-meta">
                                        <div class="contact-meta-info">
                                            <h4>Address</h4>
                                            <p>252 W 43rd St New York, NY Bangladesh</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="contact-form mb-30">
                            <h3>Do you have any question?</h3>
                            <form id="contact-form" action="http://bdevs.net/bungee/bungee/mail.php" method="POST">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input name="name" type="text" placeholder="Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input name="email" type="email" placeholder="Email">
                                    </div>
                                    <div class="col-xl-12">
                                        <input name="subject" type="text" placeholder="Subject">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea name="message" id="mesage" cols="30" rows="10" placeholder="Message"></textarea>
                                        <button class="btn brand-btn" type="submit">send message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area end -->
        <div id="contact-map">
            <img src="/img/bg/map.png" alt="">
        </div>
    </main>
</template>

<script>
export default {
    name: "Contact"
}
</script>

<style scoped>

</style>
