<header>
    <nav class="headerNavbar navbar navbar-expand-lg navbar-light" data-aos="fade-down" data-aos-delay="800">
        <div class="container-fluid">
            <?php include 'logo.php' ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <?php $header_menu = get_field('header_menu', 'option'); ?>
                    <?php foreach ($header_menu["menu"] as $menu) : ?>
                        <li class="nav-item">
                            <a class="nav-link" data-section="<?= $menu['title']; ?>" aria-current="page" href="javascript:void(0);"><?= $menu['title']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
    <navbar-functions></navbar-functions>
</header>