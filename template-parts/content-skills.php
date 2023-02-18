<?php

$skill_args = array(
    'post_type' => 'skills',
    'posts_per_page' => -1,
);

$skills_query = new WP_Query($skill_args);

?>





<!-- =====================Start-Skill Section======================= -->
<section>
    <div class="progressbar-sec">
        <div class="container">
            <div class="progressbar">
                <div class="row g-4">

                    <?php

if ($skills_query->have_posts()):
    while ($skills_query->have_posts()):
        $skills_query->the_post();

        $skill_percentage = intval(get_post_meta(get_the_ID(), 'skill-percentage', 1));?>

                    <div class="col-md-3 col-sm-6">
                        <div class="box">

                            <div class="chart" data-percent="<?php echo $skill_percentage; ?>">
                                <?php echo $skill_percentage; ?>%</div>
                            <h2><?php the_title();?></h2>


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
    </div>
</section>
<!-- =====================End-Skill Section======================= -->