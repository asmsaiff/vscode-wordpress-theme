<?php
    get_header();
?>

<?php get_template_part('template-parts/category-nav'); ?>

    <main class="main-content-wrapper">
        <div class="d-flex flex-column justify-content-between min-vh-100">
            <?php get_template_part('template-parts/toolbar'); ?>

            <div>
                <div class="content-area pt-4 pb-5 mx-auto flex-grow-1">
                    <div>
                        <h1 class="single-post-title fw-bold">You're viewing about <?php single_cat_title(); ?></h1>
                        <?php
                            the_tags('<div class="my-3 content-categories">View Other Topics - ', '', '</div>' );
                        ?>
                    </div>
                    
                    <div>
                        <div class="content-area pt-4 pb-5 mx-auto flex-grow-1">
                            <?php
                                if(have_posts()) :
                            ?>
                            <div class="mt-5">
                                <div class="row articles">
                                    <?php
                                        while(have_posts()) :
                                            the_post();
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
                </div>
            </div>
<?php
    get_footer();