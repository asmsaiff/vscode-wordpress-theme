<?php
    $diww_posts = new WP_Query(array(
        'meta_key'              => 'is_featured',
        'meta_value'            => '1',
        'posts_per_page'        =>  6,
    ));
    
    if($diww_posts->have_posts()) :
?>
<div class="mt-5">
    <h2 class="section-title">Featured -</h2>
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