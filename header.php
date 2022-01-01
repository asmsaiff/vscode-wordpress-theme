<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="header-side-panel" class="header-sidepanel">
        <!-- Header Section -->
        <header class="main-header position-fixed start-0 bg-primary d-flex flex-column justify-content-between">
            <div class="header-top-menu d-flex w-100 text-center py-4 fs-4 flex-column">
                <a href="index.html" class="text-decoration-none text-light py-1">
                    <i class="ri-passport-line"></i>
                </a>
                <a href="about.html" class="text-decoration-none text-light py-1">
                    <i class="ri-profile-line"></i>
                </a>
                <a href="project.html" class="text-decoration-none text-light py-1">
                    <i class="ri-terminal-box-line"></i>
                </a>
                <a href="blog.html" class="text-decoration-none text-light py-1">
                    <i class="ri-pen-nib-line"></i>
                </a>
            </div>

            <div class="header-social d-flex w-100 text-center py-4 fs-4 flex-column">
                <a href="https://github.com" class="text-decoration-none text-light py-1">
                    <i class="ri-github-fill"></i>
                </a>
                <a href="https://stackoverflow.com" class="text-decoration-none text-light py-1">
                    <i class="ri-stack-overflow-line"></i>
                </a>
                <a href="https://linkedin.com" class="text-decoration-none text-light py-1">
                    <i class="ri-linkedin-fill"></i>
                </a>
                <a href="mailto:info@saifullah.co" class="text-decoration-none text-light py-1">
                    <i class="ri-mail-send-line"></i>
                </a>
            </div>
        </header>