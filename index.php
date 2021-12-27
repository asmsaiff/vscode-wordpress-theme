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
                    
    
                    <div class="mt-5">
                        <h2 class="section-title">Recent Post -</h2>
                        <div class="row articles">
                            <div class="col-6 col-xxl-4 mt-4">
                                <a href="single.html" class="text-decoration-none">
                                    <div class="card border-0 post-card">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.png" class="img-fluid" alt="">
    
                                        <div class="post-content">
                                            <h5 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing</h5>
    
                                            <p class="mb-0 text-xsm lh-sm">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, fugiat quia! Perferendis neque quod eveniet, quisquam ipsum voluptate itaque.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-xxl-4 mt-4">
                                <a href="single.html" class="text-decoration-none">
                                    <div class="card border-0 post-card">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.png" class="img-fluid" alt="">
    
                                        <div class="post-content">
                                            <h5 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing</h5>
    
                                            <p class="mb-0 text-xsm lh-sm">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, fugiat quia! Perferendis neque quod eveniet, quisquam ipsum voluptate itaque.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-xxl-4 mt-4">
                                <a href="single.html" class="text-decoration-none">
                                    <div class="card border-0 post-card">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.png" class="img-fluid" alt="">
    
                                        <div class="post-content">
                                            <h5 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing</h5>
    
                                            <p class="mb-0 text-xsm lh-sm">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, fugiat quia! Perferendis neque quod eveniet, quisquam ipsum voluptate itaque.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-xxl-4 mt-4">
                                <a href="single.html" class="text-decoration-none">
                                    <div class="card border-0 post-card">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.png" class="img-fluid" alt="">
    
                                        <div class="post-content">
                                            <h5 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing</h5>
    
                                            <p class="mb-0 text-xsm lh-sm">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, fugiat quia! Perferendis neque quod eveniet, quisquam ipsum voluptate itaque.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-xxl-4 mt-4">
                                <a href="single.html" class="text-decoration-none">
                                    <div class="card border-0 post-card">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.png" class="img-fluid" alt="">
    
                                        <div class="post-content">
                                            <h5 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing</h5>
    
                                            <p class="mb-0 text-xsm lh-sm">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, fugiat quia! Perferendis neque quod eveniet, quisquam ipsum voluptate itaque.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-xxl-4 mt-4">
                                <a href="single.html" class="text-decoration-none">
                                    <div class="card border-0 post-card">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.png" class="img-fluid" alt="">
    
                                        <div class="post-content">
                                            <h5 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing</h5>
    
                                            <p class="mb-0 text-xsm lh-sm">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, fugiat quia! Perferendis neque quod eveniet, quisquam ipsum voluptate itaque.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
    get_footer();
?>