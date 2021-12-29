<?php
    get_header();
?>

<?php get_template_part('template-parts/category-nav'); ?>

    <main class="main-content-wrapper">
        <div class="d-flex flex-column justify-content-between min-vh-100">
            <?php get_template_part('template-parts/toolbar'); ?>
            <div>
                <?php get_template_part('template-parts/home-hero'); ?>
                <div class="content-area pt-4 pb-5 mx-auto flex-grow-1">
                    <?php 
                        get_template_part('template-parts/technology-icons');
                        // get_template_part('template-parts/home-meta');
                    ?>
                    
                    <?php
                        $diww_posts = new WP_Query(array(
                            'post_type'             =>  'post',
                            'posts_per_page'        =>  6,
                        ));
                        
                        if($diww_posts->have_posts()) :
                    ?>
                    <div class="mt-5">
                        <h2 class="section-title">Recent Post -</h2>
                        <div class="row articles">
                            <?php
                                while($diww_posts->have_posts()) :
                                    $diww_posts->the_post();
                            ?>
                            <div class="col-6 col-xxl-4 mt-4">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                    <div class="card border-0 post-card">
                                        <?php
                                            if(has_post_thumbnail()) {
                                                the_post_thumbnail('large', array('class'=>'img-fluid'));
                                            }
                                        ?>
    
                                        <div class="post-content">
                                            <h5 class="post-title">
                                                <?php the_title(); ?>
                                            </h5>
    
                                            <p class="mb-0 text-xsm lh-sm">
                                                <?php
                                                    echo get_the_excerpt();
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

<?php
    get_footer();
?>