<?= $this->include('web-view/template/header'); ?>
<!DOCTYPE html>
<html lang="en">

<body data-spy="scroll" data-offset="71" data-target="#navbarRestaurant">
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <!--/preloader for animation loading-->
    <header class="header-main header-transparent">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <div class="float-right clearfix top-socials">
                            <a href="https://api.whatsapp.com/send?phone=62895383049432&text=Halo%20CS%20Aufa,%20saya%20ingin%20beli%20kapulaga" class="social-icon-sm si-dark si-dark-round si-whatsapp">
                                <i class="fa fa-whatsapp"></i>
                                <i class="fa fa-whatsapp"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('web-view/template/navbar'); ?>
    </header>
    <!--/header-->

    <!-- Home Section of Cardania -->
    <?= $this->include('web-view/content/home'); ?>
    <!-- End Home section of Cardania -->

    <!-- About Section of Cardania -->
    <?= $this->include('web-view/content/about'); ?>
    <!-- End About Section of Cardania -->

    <!-- Product Section of Cardania -->
    <?= $this->include('web-view/content/product'); ?>
    <!-- End Product Section of Cardania -->

    <!-- Product Section of Cardania -->
    <?= $this->include('web-view/content/product-2'); ?>
    <!-- End Product Section of Cardania -->


    <!-- Values Section of Cardania -->
    <?= $this->include('web-view/content/values'); ?>
    <!-- End Values Section of Cardania -->

    <!-- Contact Section of Cardania -->
    <?= $this->include('web-view/content/contact'); ?>
    <!-- End Contact Section of Cardania -->

</body>


<?= $this->include('web-view/template/footer'); ?>