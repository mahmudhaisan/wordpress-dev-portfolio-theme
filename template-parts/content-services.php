<?php

$services_args = array(
    'post_type' => 'services',
    'posts_per_page' => -1,
);

$services_query = new WP_Query($services_args);

?>













<!-- ====================Start-Service Section====================== -->
<section id="Service">
    <div class="service-sec">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center">
                    <h5 class="title-anim">What We Do</h5>
                    <h2 class="title-anim">Service And Solutions</h2>
                </div>
            </div>
            <div class="service-row">
                <div class="single-row">



                    <?php

if ($services_query->have_posts()):
    while ($services_query->have_posts()):
        $services_query->the_post();

        $services_desc = (get_post_meta(get_the_ID(), 'service-description', 1));
        $services_image = (get_post_meta(get_the_ID(), 'service-image', 1));

        ?>


                    <div class="service-content">
                        <div class="animated-shape animated-shape-sm shape-white">
                            <div class="layer-1"></div>
                            <div class="layer-2"></div>
                            <div class="layer-3"></div>
                            <div class="layer-4"></div>
                            <div class="layer-5"></div>
                        </div>



                        <div class="service-icon">
                            <img src="<?php echo $services_image; ?>" alt="Icon">
                        </div>
                        <h4 class="service-content-title"><a href="#"><?php the_title();?></a></h4>
                        <p class="service-content-desp">
                            <?php echo $services_desc; ?>
                        </p>
                    </div>


                    <?php
    endwhile;

    /* Restore original Post Data */
    wp_reset_postdata();

endif;

?>











                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====================End-Service Section====================== -->