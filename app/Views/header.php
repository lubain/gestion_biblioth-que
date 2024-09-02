<!-- <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
    <div class="container-fluid">
    <a href="<?= base_url("public/"); ?>"><img src="img/logo.png" style="width:60px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="<?= base_url("public/search"); ?>" class="nav-link">
                    trouver des livres
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url("public/sell"); ?>" class="nav-link">
                    vendez votre livre
                </a>
            </li>
        </ul>
        <div class="d-flex">
            <a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i>logout</a>
        </div>
    </div>
  </div>
</nav> -->
<header id="header" class="header d-flex align-items-center sticky-top shadow-sm bg-body-tertiary">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="<?= base_url("public/"); ?>" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">Biblio</h1>
            <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= base_url("public/search"); ?>">trouver des livres<br></a></li>
                <li><a href="<?= base_url("public/sell"); ?>">A propos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi fas fa-bars"></i>
        </nav>

        <a class="btn-getstarted fas fa-sign-out-alt" href="#"></a>

    </div>
</header>