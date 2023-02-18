<?php

$counter_args = array(
    'post_type' => 'counters',
    'posts_per_page' => -1,
);

$counter_query = new WP_Query($counter_args);

?>








<!-- ================Start-Counter Section===================== -->
<section>
    <div class="review-sec">
        <div class="animated-shape shape-white">
            <div class="layer-1"></div>
            <div class="layer-2"></div>
            <div class="layer-3"></div>
            <div class="layer-4"></div>
            <div class="layer-5"></div>
        </div>
        <div class="container">
            <div class="row g-4">





                <?php

if ($counter_query->have_posts()):
    while ($counter_query->have_posts()):
        $counter_query->the_post();

        $counter_number = intval(get_post_meta(get_the_ID(), 'counter-numbers', 1));
        $counter_image = (get_post_meta(get_the_ID(), 'counter-image', 1));

        ?>

		                <div class="col-md-3 col-sm-6">
		                    <div class="review-content">
		                        <div class="review-icon">
		                            <img src="<?php echo $counter_image ?>" alt="icon">
		                        </div>
		                        <span class="counter"><?php echo $counter_number; ?></span>
		                        <h6 class="review-desp"><?php the_title();?></h6>
		                    </div>
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
</section>
<!-- ================End-Counter Section===================== -->