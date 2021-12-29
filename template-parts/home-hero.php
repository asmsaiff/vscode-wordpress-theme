<div class="hero px-2 px-md-5 pt-5 pt-md-0">
    <div class="row align-items-center hero-wrapper">
        <div class="col-md-7">
            <h1 class="hero-title fw-bold">
                <?php echo diww_get_option('home_hero_title'); ?>
            </h1>

            <p class="lh-sm">
                <?php echo diww_get_option('home_hero_description'); ?>
            </p>
        </div>
        <div class="col-md-5 text-center">
            <img src="<?php echo esc_url(diww_get_option('home_hero_image')['url']); ?>" class="img-fluid" alt="">
        </div>
    </div>
</div>