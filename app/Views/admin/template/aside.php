<aside id="page-aside-mini" class="aside-icon-o aside-light">
    <span class="aside-close h-md-up text-muted"><i class="icon-Close"></i></span>
    <div class="sidenav-mini">
        <a href="#" class="app-logo d-flex justify-content-center align-items-center">
            <i class="fa fa-paper-plane"></i><span class="logo-caption"> </span>
        </a>

        <div class="flex">
            <nav class="aside-mini-content">
                <ul class="nav">
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Dashboard " href="<?= base_url() ?>/D453bgs" class="nav-link">
                            <span class="nav-text">Dashboard</span><i class="fa-solid fa-window-restore"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="home" href="<?= base_url() ?>/4543523" class="nav-link">
                            <span class="nav-text">home</span><i class="far fa-window-maximize"></i>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a data-toggle="tooltip" data-placement="right" title="About Us" href="<?= base_url() ?>/FewA234" class="nav-link">
                            <span class="nav-text">About Us</span> <i class="far fa-id-card"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Product" href="<?= base_url() ?>/hgdASf3" class="nav-link">
                            <span class="nav-text">Product</span> <i class="far fa-lightbulb"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Values" href="<?= base_url() ?>/gfdgd42" class="nav-link">
                            <span class="nav-text">Values</span><i class="far fa-star"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Contacts" href="<?= base_url() ?>/44gaasf" class="nav-link">
                            <span class="nav-text">Contacts</span><i class="far fa-address-book"></i>
                        </a>
                    </li>


                </ul>
            </nav>
        </div>
        <div class="aside-footer p-3 pl-25 text-muted">
            V1.0
        </div>
    </div>
</aside>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.nav li').click(function(e) {

            $('.nav li').removeClass('active');

            var $this = $(this);
            if (!$this.hasClass('active')) {
                $this.addClass('active');
            }
            //e.preventDefault();
        });
    });
</script>