<?php

global $redux_demo;
$opt_name = 'redux_demo';

$redux_banner = Redux::get_field($opt_name, 'hero-right-banner');

$banner_img = $redux_demo['hero-right-banner']['url'];

?>


<section id="Home">
    <div class="banner">
        <!-- <div class="animated-shape shape-1">
            <div class="layer-1"></div>
            <div class="layer-2"></div>
            <div class="layer-3"></div>
            <div class="layer-4"></div>
            <div class="layer-5"></div>
        </div> -->
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-text-sec">
                        <div class="banner-text-area">
                            <div class="text-anim">
                                <p class="wellcome ">I’m MR. Darda, Web Designer & Developer</p>
                            </div>
                            <h1 class="banner-heading"><span class="pc-title-left">An Expert Digital
                                    Marketing</span><br> <span class="pc-title-right">Product Designer</span></h1>
                            <div class="text-anim">
                                <p class="banner-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmo tempor<br> incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="banner-btn">
                                <a href="#" class="def-btn btn-hover"><span class="dot"></span> <span
                                        class="txt">Download CV <i class="fa-solid fa-download"></i></span></a>
                                <a href="#" class="about-btn">About Me</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="banner-image">



                        <img src="<?php echo $banner_img; ?>" class="banner-img" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===============End-banner-Section=========== -->