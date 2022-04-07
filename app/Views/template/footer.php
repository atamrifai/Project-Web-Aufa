<footer class='footer pt50 pb20'>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-4 mb30'>
                <a href='#home' data-scroll class='h6'>
                    <img src='images/logo-cardania.png' alt='' class="mb30">
                </a>
                <p>
                    We are a company that works with farmers to export cardamom all over the world. We select and process the best cardamom products to ensure satisfaction arrives at your home. We provide best grade of white cardamom to make sure the costumer get the product with excellent quality.
                </p>
            </div>
            <div class='col-md-4 mb30'>
                <h4 class="mb10">Address</h4>
                <div class='pt30'>
                    <span>Office :</span>
                    <p class="lead small">Jl. Raya Pancurendang Rt 04 Rw 01 No.5 ,
                        Banyumas, Central Java, Indonesia
                    </p>
                    <span>Factory : </span>
                    <p class="lead small">Jl. Raya Losari Gunungwuled, Rembang, Purbalingga,
                        Central Java, Indonesia</p>
                    &copy; Copyright 2017. All Right Reserved.
                </div>
            </div>
            <div class='col-lg-4 mb30'>
                <h4 class="mb30">Follow us</h4>
                <span class='clearfix'>
                    <a href="#" class="social-icon-sm si-dark si-dark-round si-whatsapp">
                        <i class="fa fa-whatsapp"></i>
                        <i class="fa fa-whatsapp"></i>
                    </a>
                </span>
                <div class='pt30'>
                    <span>Support</span>
                    <p class="lead">cardaniaGloria@gmail.com</p>
                    <span>Phone</span>
                    <p class="lead">0852573659812</p>
                    &copy; Copyright 2022. Cardania All Right Reserved
                </div>
            </div>

        </div>

    </div>
</footer>
<!--back to top  -->
<a href="#" class="back-to-top" id="back-to-top"><i class="ti-angle-up"></i></a>
<!-- WA -->
<a class="whats-app" href="https://api.whatsapp.com/send?phone=62895383049432&text=Halo%20CS%20Aufa,%20saya%20ingin%20beli%20kapulaga." target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="public/js/plugins/plugins.js"></script>
<script src="public/js/restaurant.custom.js"></script>

<!--revolution slider-->
<script type="text/javascript" src="public/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="public/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery("#slider1").revolution({
            sliderType: "standard",
            jsFileLocation: "../public/revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                arrows: {
                    enable: true
                }
            },
            parallax: {
                type: "on",
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                origo: "enterpoint",
                speed: 400,
                bgparallax: "on",
                disable_onmobile: "off"
            },
            gridwidth: 1140,
            gridheight: 600
        });
    });
</script>
<!--google map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzQCC7T5YPrJJ5K-lsUSK30KXj0SQs1Tk"></script>
<script src="public/js/jquery.gmap.min.js"></script>
<script>
    // Marker Map
    $(document).ready(function() {
        map = new GMaps({
            scrollwheel: false,
            el: '#markermap',
            lat: -7.400300358754029,
            lng: 109.09707101448062
            // , 
        });
        map.addMarker({
            lat: -7.400300358754029,
            lng: 109.09707101448062,
            title: 'Marker with InfoWindow',
            infoWindow: {
                content: '<p>Your Content</p>'
            }
        });
    });
</script>
<!--sky form plugin js-->
<script type="text/javascript" src="smart-form/contact-recaptcha/js/jquery.form.min.js"></script>
<script type="text/javascript" src="smart-form/contact-recaptcha/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="smart-form/contact-recaptcha/js/additional-methods.min.js"></script>
<script type="text/javascript" src="smart-form/contact-recaptcha/js/smart-form.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>


</html>