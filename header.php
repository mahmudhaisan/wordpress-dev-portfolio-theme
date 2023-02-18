<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
</head>



<body>
    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>
    <!-- =============Start-header============== -->
    <div class="wrapper">
        <header>
            <nav class="navigation">
                <div class="container">
                    <div class="header-wrapper">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-6">
                                        <a href="index.html" class="logo">
                                            <img src="img/logo.png" alt="">
                                        </a>
                                    </div>
                                    <div class="d-lg-none d-flex justify-content-end col-6">
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarSupportedContent"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-10">
                                <nav class="navbar navbar-expand-lg p-0">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                                        <?php

wp_nav_menu([
    'theme_location' => 'primary',
    'menu_class' => 'navbar-nav ms-auto align-items-lg-center',
    // 'list_item_class' => 'nav-item',
    'link_class' => 'nav-link',
    'add_li_class' => 'nav-item',
]);

?>




                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- ===================End-Header==================== -->