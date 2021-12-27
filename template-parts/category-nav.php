    <section class="category-sidebar position-fixed">
        <div class="topbar h-35">
            <h6 class="text-uppercase text-light py-2 px-3 text-sm lh-sm m-0">
                Categories
            </h6>
        </div>
        <aside class="category-header-sidebar">
            <div class="sidebar-category-menu accordion accordion-flush" id="accordionFlushExample">
                <?php
                    $args = array(
                        'taxonomy' => 'category',
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    );
                    $category = get_categories($args);
                    $c = 1;

                    foreach($category as $key => $cat) :
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button text-light d-flex text-uppercase collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $key; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                            <svg class="align-self-center rotate_toggle_icons" style="transition: .3s;" width="10" height="5" viewBox="-2.5 -5 75 60" preserveAspectRatio="none"><path d="M0,0 l35,50 l35,-50" fill="none" stroke-linecap="round" stroke-width="5"></path></svg>
                            
                            <span class="align-self-center ms-2"><?php echo $cat->name; ?></span>
                        </button>
                    </h2>
                    <div id="flush-collapse<?php echo $key; ?>" class="sub-panel accordion-collapse text-light collapse rounded-0" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <?php
                            $category_post = new WP_Query(array(
                                'post_type' => 'post',
                                'category_name' => $cat->name
                            ));

                            while($category_post->have_posts()) :
                                $category_post->the_post();
                        ?>
                        <a href="#!" class="text-decoration-none align-items-start">
                            <i class="ri-article-line"></i>
                            <span><?php the_title(); ?></span>
                        </a>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <?php
                    endforeach;
                    wp_reset_postdata();
                ?>
            </div>
        </aside>
    </section>
</div>