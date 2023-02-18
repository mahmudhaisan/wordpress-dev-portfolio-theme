<?php

$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

?>


<!-- ==================Start-Portfolio Section=================== -->
<section id="Portfolio">
    <div class="portfolio-sec">
        <div class="container">
            <div class="section-heading text-center">
                <h5>My Portfolio</h5>
                <h2>My Work Example</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 tv-icons-filter-container-tm">
                    <ul class="tv-filter-tm">
                        <li id="filter__All" class="active">ALL</li>

                        <?php

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();
        $cat_name = get_the_terms(get_the_ID(), 'portfolio_category');
        $cat_slug = ($cat_name[0]->slug);

        ?>
		                        <li id="filter__Chemicals" data-category="<?php echo $cat_slug; ?>"><?php the_title();?></li>


		                        <?php
        // Add example code here to get desired results.

    endwhile;

    /* Restore original Post Data */
    wp_reset_postdata();

endif;

?>



                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4 g-md-4 tv-case-studies">


                <?php

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();
        $cat_name = get_the_terms(get_the_ID(), 'portfolio_category');
        $cat_slug = ($cat_name[0]->slug);

        $portfolio_images = get_post_meta(get_the_ID(), 'portfolio-gallery', 1);

        foreach ($portfolio_images as $portfolio_image) {?>

		                <div class="col-md-6 tv-filter-item tv-case-study tv-case-study-show"
		                    data-category="<?php echo $cat_slug; ?>">
		                    <div class="tv-card-tm">
		                        <a href="<?php echo $portfolio_image; ?>" data-source="<?php echo $portfolio_image; ?>">
		                            <img src="<?php echo $portfolio_image; ?>" alt="Image" class="card-img-big">
		                            <span class="view-icon">+</span>
		                        </a>
		                    </div>
		                    <!-- End Card Item -->
		                </div>

		                <?php }

        // Add example code here to get desired results.

    endwhile;

    /* Restore original Post Data */
    wp_reset_postdata();

endif;

?>









            </div>
        </div>
    </div>
</section>
<!-- ==================End-Portfolio Section=================== -->