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
                    
                    <!-- Recent Post -->
                    <?php get_template_part('template-parts/recent-post'); ?>
                </div>
            </div>

<?php
    get_footer();
?>