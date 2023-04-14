<nav class=" navbar sticky-top navbar-expand-lg navbar-light g--bg-color g--nav-height">
    <div class="container-fluid g--margin-top--5px">
        <a class="navbar-brand g--nav-title ms-3 text-white" href="<?= SITE_ROOT ?>index.php">
            <img class="logo img-fluid" src="<?= IMGS_ROOT ?>t.webp" alt="">
            GBM
        </a>



        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end g--bg-ofcanvas-color " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title ml-5" id="offcanvasNavbarLabel"><a class="navbar-brand g--nav-title ms-2 " href="<?= SITE_ROOT ?>index.php">
                        <img class="logo img-fluid" src="<?= IMGS_ROOT ?>t.webp" alt="">
                        GBM
                    </a>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body text-center">

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                    <li class="nav-item g--nav-item-size">
                        <a class="nav-link text-white g--nav-text active text-center" href="<?= SITE_ROOT ?>index.php">Inicio</a>
                    </li>
                    <li class="nav-item g--nav-item-size">
                        <a class="nav-link text-white g--nav-text active text-center" aria-current="page" href="<?= SITE_ROOT ?>pages/libros.php">Libros</a>
                    </li>
                    <li class="nav-item g--nav-item-size">
                        <a class="nav-link text-white g--nav-text text-center" href="#">Galería</a>
                    </li>
                    <li class="nav-item g--nav-item-size">
                        <a class="nav-link text-white g--nav-text text-center" href="<?= SITE_ROOT ?>pages/contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item g--nav-item-size-special">
                        <a class="nav-link text-white g--nav-text text-center" href="<?= SITE_ROOT ?>pages/infoBiblioteca.php">Sobre biblioteca</a>
                    </li>
                    <li class="nav-item g--nav-item-size">
                        <a class="nav-link text-white g--nav-text text-center" href="<?= SITE_ROOT ?>pages/login.php">Login</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>