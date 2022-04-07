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

<body class="layout-aside-mini">

    <div class="page-wrapper" id="page-wrapper">
        <?= $this->include('admin/template/aside'); ?>
        <main class="content">

            <?= $this->include('admin/template/navbar'); ?>
            <div class="page-content">
                <div class="page-header-img">
                    <img src="images/cover1.jpg" alt="" class="img-fluid">
                </div>
                <div class="container-fluid">
                    <br>
                    <?= $this->renderSection('content'); ?>
                </div>
            </div>


</html>
<footer class="content-footer bg-light b-t">
    <div class="d-flex flex align-items-center pl-15 pr-15">
        <div class="d-flex flex p-3 ml-auto">
            <div>
                <a href="#" class="d-inline-flex pl-0 pr-2 b-r">Contact</a>
                <a href="#" class="d-inline-flex pl-2 pr-2 b-r">Storage</a>
                <a href="#" class="d-inline-flex pl-2 pr-2 ">Privacy</a>
            </div>
        </div>
        <div class="d-flex flex p-3 mr-auto justify-content-end">
            <div class="text-muted">© Copyright 2022. Cardania</div>
        </div>
    </div>
</footer><!-- footer end-->
</main><!-- page content end-->
</div><!-- app's main wrapper end -->
<!-- Common plugins -->
<script type="text/javascript" src="public/admin-ui/js/plugins/plugins.js"></script>
<script type="text/javascript" src="public/admin-ui/js/appUi-custom.js"></script>
<script type="text/javascript" src="public/admin-ui/lib/chartjs/dist/chart.min.js"></script>
<script type="text/javascript" src="public/admin-ui/lib/peity/jquery.peity.min.js"></script>
<script src="public/admin-ui/lib/chartist/chartist.min.js"></script>
<script src="public/admin-ui/lib/chartist/chartist-tooltip.js"></script>

<!-- jvectormap -->
<script src="public/admin-ui/lib/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
<script src="public/admin-ui/lib/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="public/admin-ui/js/dashboard.custom.js"></script>
</body>