<header id="header" class="header d-flex align-items-center sticky-top shadow-sm bg-body-tertiary">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="admin" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">Biblio</h1>
            <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= base_url("public/userList"); ?>">Gestion Des Membres<br></a></li>
                <li><a href="<?= base_url("public/livreList"); ?>">Gestion Des Livres</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none fas fa-bars"></i>
        </nav>

        <a href="logout" class="btn-getstarted fas fa-sign-out-alt"></a>

    </div>
</header>