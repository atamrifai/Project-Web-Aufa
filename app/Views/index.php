<?= $this->include('web-view/template/header'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Bootstrap-->
    <link href="public/admin-ui/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Common Plugins CSS -->
    <link href="public/admin-ui/css/plugins/plugins.css" rel="stylesheet">
    <!--fonts-->
    <link href="public/admin-ui/lib/line-icons/line-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dec91e0e83.js" crossorigin="anonymous"></script>
    <link href="public/admin-ui/lib/chartist/chartist.min.css" rel="stylesheet" />
    <link href="public/admin-ui/css/chartist-custom.css" rel="stylesheet" />
    <!-- jvectormap -->
    <link href="public/admin-ui/lib/vector-map/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="public/admin-ui/css/style.css" rel="stylesheet">
</head>

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