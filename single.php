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
                        <h1 class="single-post-title fw-bold">
                            <?php the_title(); ?>
                        </h1>

                        <?php
                            the_tags('<div class="my-3 content-categories">Topics - ', '', '</div>' );
                        ?>
    
                        <div class="d-flex flex-wrap post-meta-info">
                            <a href="" class="d-flex text-decoration-none text-light me-3 position-relative">
                                <i class="ri-edit-line text-primary align-self-center me-2"></i>
                                <span class="text-xsm text-muted lh-1 align-self-center">Written By</span>
                                <span class="align-self-center">&nbsp;-&nbsp;</span>
                                <span class="align-self-center"><?php echo get_the_author_meta('display_name'); ?></span>
                            </a>
                            <a href="" class="d-flex text-decoration-none text-light me-3 position-relative">
                                <i class="ri-calendar-todo-line text-primary align-self-center me-2"></i>
                                <span class="text-xsm align-self-center"><?php echo get_the_date(); ?></span>
                            </a>
                            <a href="" class="d-flex text-decoration-none text-light me-3 position-relative">
                                <i class="ri-file-copy-fill text-primary align-self-center me-2"></i>
                                <span class="text-xsm align-self-center"><?php echo get_the_category()[0]->cat_name; ?></span>
                            </a>
                        </div>

                        <?php
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('large', array('class'=>'img-fluid w-100 rounded-3 mt-4 mb-5'));
                            }
                        ?>
                    </div>
    
                    <?php
                        the_content();
                    ?>
                </div>
            </div>
<?php
    get_footer();