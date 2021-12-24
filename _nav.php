<nav class="navbar navbar-expand-lg fixed-top">
    <?php if(isMobile()):?>
    <a class="navbar-brand d-lg-none" href="#">
        <img class="img-fluid" src="../assets/img/logo.svg" alt="Biom logo">
    </a>
    <?php endif;?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="hamburger hamburger--spin-r">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Why biom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Scents</a>
            </li>
        </ul>
        <?php if(isMobile()):?>
        <?php else:?>
        <a class="navbar-brand d-none d-lg-block" href="#">
            <img class="img-fluid" src="../assets/img/logo.svg" alt="Biom logo">
        </a>
        <?php endif;?>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Cart
                    <div class="icon-wrap">
                        <svg class="icon">
                            <use xlink:href="#cart"></use>
                        </svg>
                        <div class="item-num">
                            <span>0</span>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>