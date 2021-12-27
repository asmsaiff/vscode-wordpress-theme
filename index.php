<?php
    get_header();
?>

<?php get_template_part('template-parts/category-nav'); ?>

    <main class="main-content-wrapper">
        <div class="d-flex flex-column justify-content-between min-vh-100">
            <div class="toolbar h-35 d-flex justify-content-between sticky-top">
                <div class="d-flex">
                    <button id="side-panel-toggle" class="topbar-line-icon px-3 border-0 text-light align-self-center">
                        <span id="open">
                            <i class="ri-menu-line"></i>
                        </span>
                        <span id="close" style="display: none;">
                            <i class="ri-close-line"></i>
                        </span>
                    </button>
                    
                    <div class="topbar-title-tab overflow-hidden ps-3 pe-1 border-top border-2 border-primary">
                        <a href="index.html" class="brand text-decoration-none text-light mb-0 text-sm">
                            Dive Into Web World
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <div class="hero px-2 px-md-5 pt-5 pt-md-0">
                    <div class="row align-items-center hero-wrapper">
                        <div class="col-md-7">
                            <h1 class="hero-title fw-bold">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h1>

                            <p class="lh-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aspernatur voluptatem modi totam excepturi quidem sed libero, eaque laborum nemo nisi temporibus recusandae odit eveniet autem ea molestiae sunt voluptatum.</p>

                            <p class="lh-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aspernatur voluptatem modi totam excepturi quidem sed libero, eaque laborum nemo nisi temporibus recusandae odit eveniet autem ea molestiae sunt voluptatum.</p>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/programmer.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-area pt-4 pb-5 mx-auto flex-grow-1">
                    <div class="row row-cols-auto justify-content-center justify-content-sm-start">
                        <div class="col my-4 technology__icon text-center text-center">
                            <a href="category.html" class="text-decoration-none text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="30 0 451 512">
                                    <path fill="#E34F26" d="M71 460 30 0h451l-41 460-185 52"></path>
                                    <path fill="#EF652A" d="m256 472 149-41 35-394H256"></path>
                                    <path fill="#EBEBEB" d="M256 208h-75l-5-58h80V94H114l1 15 14 156h127zm0 147h-1l-63-17-4-45h-56l7 89 116 32h1z"></path>
                                    <path fill="#FFF" d="M255 208v57h70l-7 73-63 17v59l116-32 1-10 13-149 2-15h-16zm0-114v56h137l1-12 3-29 1-15z"></path>
                                </svg>
            
                                <h6 class="pt-3">HTML</h6>
                            </a>
                        </div>
                        <div class="col my-4 technology__icon text-center text-center">
                            <a href="category.html" class="text-decoration-none text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2183" height="2500" fill="none" viewBox="0 0 124 142">
                                    <path fill="#1b73ba" d="M10 127 0 0h124l-11 127-51 15z"></path>
                                    <path fill="#1c88c7" d="M62 129V12h52l-10 105z"></path>
                                    <path fill="#fff" d="M101 27H22l2 15h38L25 58l2 15h54l-2 21-18 3-17-4-1-12H28l2 25 33 9 31-10 4-48H65l36-15z"></path>
                                </svg>
            
                                <h6 class="pt-3">CSS</h6>
                            </a>
                        </div>
                        <div class="col my-4 technology__icon text-center text-center">
                            <a href="category.html" class="text-decoration-none text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1052 1052">
                                    <path fill="#f0db4f" d="M0 0h1052v1052H0z"></path>
                                    <path fill="#323330" d="M965.9 801.1c-7.7-48-39-88.3-131.7-125.9-32.2-14.8-68.1-25.399-78.8-49.8-3.8-14.2-4.3-22.2-1.9-30.8 6.9-27.9 40.2-36.6 66.6-28.6 17 5.7 33.1 18.801 42.8 39.7 45.4-29.399 45.3-29.2 77-49.399-11.6-18-17.8-26.301-25.4-34-27.3-30.5-64.5-46.2-124-45-10.3 1.3-20.699 2.699-31 4-29.699 7.5-58 23.1-74.6 44-49.8 56.5-35.6 155.399 25 196.1 59.7 44.8 147.4 55 158.6 96.9 10.9 51.3-37.699 67.899-86 62-35.6-7.4-55.399-25.5-76.8-58.4-39.399 22.8-39.399 22.8-79.899 46.1 9.6 21 19.699 30.5 35.8 48.7 76.2 77.3 266.899 73.5 301.1-43.5 1.399-4.001 10.6-30.801 3.199-72.101zm-394-317.6h-98.4c0 85-.399 169.4-.399 254.4 0 54.1 2.8 103.7-6 118.9-14.4 29.899-51.7 26.2-68.7 20.399-17.3-8.5-26.1-20.6-36.3-37.699-2.8-4.9-4.9-8.7-5.601-9-26.699 16.3-53.3 32.699-80 49 13.301 27.3 32.9 51 58 66.399 37.5 22.5 87.9 29.4 140.601 17.3 34.3-10 63.899-30.699 79.399-62.199 22.4-41.3 17.6-91.3 17.4-146.6.5-90.2 0-180.4 0-270.9z"></path>
                                </svg>
            
                                <h6 class="pt-3">JavaScript</h6>
                            </a>
                        </div>
        
                        <div class="col my-4 technology__icon text-center text-center">
                            <a href="category.html" class="text-decoration-none text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 16 16">
                                    <path fill="#393" d="M7.623.101l-6.246 3.62A.757.757 0 0 0 1 4.377v7.244c0 .27.144.52.377.655L7.624 15.9a.754.754 0 0 0 .754 0l6.245-3.623a.76.76 0 0 0 .377-.655V4.377c0-.27-.144-.52-.378-.656L8.378.1a.757.757 0 0 0-.756 0"></path>
                                </svg>
            
                                <h6 class="pt-3">NodeJS</h6>
                            </a>
                        </div>
        
                        <div class="col my-4 technology__icon text-center text-center">
                            <a href="category.html" class="text-decoration-none text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                                    <path d="M512,256c0,15.485-1.379,30.647-4.012,45.369C486.578,421.115,381.9,512,256,512 c-94.856,0-177.664-51.587-221.884-128.24c-10.794-18.693-19.278-38.87-25.088-60.155C3.135,302.07,0,279.395,0,256 C0,114.615,114.615,0,256,0c116.694,0,215.144,78.075,245.979,184.842C508.5,207.433,512,231.309,512,256z" style="fill:#8f9ed1"></path>
                                    <path d="M130 178H36L9 324c6 21 14 41 25 60h9l10-56h52c63 0 80-57 84-84C193 215 173 178 130 178zM144 248c-2 16-14 48-50 48H59l16-85h36C145 211 146 232 144 248zM502 185c-8-4-18-7-29-7h-94L341 384h45l10-56h52c28 0 47-11 60-26C511 287 512 271 512 256 512 231 509 207 502 185zM487 248c-2 16-14 48-50 48h-35l16-85h36C488 211 489 232 487 248zM309 179c-18 0-43 0-55 0l10-55h-45L182 329h45l22-118c8 0 19 0 29 0 19 0 32 4 29 22-3 18-18 96-18 96h45c0 0 18-87 20-111C357 192 334 179 309 179z" style="fill:#1d294c"></path>
                                </svg>
            
                                <h6 class="pt-3">PHP</h6>
                            </a>
                        </div>

                        <div class="col my-4 technology__icon text-center text-center">
                            <a href="category.html" class="text-decoration-none text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 262 227">
                                    <path fill="#41b883" d="m161 0-30 52-30-52H0l131 227L262 0z"></path>
                                    <path fill="#34495e" d="m161 0-30 52-30-52H52l79 136L209 0z"></path>
                                </svg>
            
                                <h6 class="pt-3">VueJS</h6>
                            </a>
                        </div>

                        <div class="col my-4 technology__icon text-center text-center">
                            <a href="category.html" class="text-decoration-none text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="176 78 490 437">
                                    <g fill="#61DAFB">
                                        <path d="M666 297c0-33-40-64-103-83 15-64 8-114-20-130-7-4-14-6-22-6v22c4 0 8 1 11 3 14 8 19 37 15 76l-5 29c-20-5-41-8-64-11-13-18-27-35-41-50 32-30 63-47 84-47V78c-28 0-64 20-100 54-37-34-73-54-100-54v23c21 0 51 16 84 46-14 15-28 32-41 50-23 3-44 6-64 11l-5-29c-5-38 1-68 14-76l12-2V78v1c-9 0-16 1-23 5-28 16-34 67-20 130-62 19-102 50-102 82 0 33 40 64 103 83-15 63-8 114 20 130 6 4 14 6 22 6 28 0 64-20 100-54 37 34 73 53 100 53 9 1 16-1 23-5 28-16 34-67 20-130 62-19 102-50 102-82zm-130-67-13 39a473 473 0 0 0-28-47l41 8zm-46 106c-7 14-15 27-24 39a520 520 0 0 1-90 0 551 551 0 0 1-45-78 521 521 0 0 1 45-78 520 520 0 0 1 90 0 551 551 0 0 1 45 77c-6 14-13 27-21 40zm33-13c5 14 10 27 13 40l-41 8a552 552 0 0 0 28-48zM421 430l-28-32a619 619 0 0 0 56 0c-9 12-19 22-28 32zm-74-59-41-8 13-39a473 473 0 0 0 28 47zm74-208 27 32a619 619 0 0 0-55 0c9-12 19-22 28-32zm-74 59a552 552 0 0 0-28 48c-5-14-10-27-13-40l41-8zm-91 125c-35-15-58-35-58-50 0-16 23-36 58-51l28-10c6 19 13 40 22 61-9 20-16 41-22 60l-28-10zm54 143c-14-8-19-37-15-76l5-29c20 5 41 8 64 11 13 18 27 35 41 50-32 30-63 47-84 47-4 0-8-1-11-3zm237-76c5 38-1 68-14 76l-12 2c-21 0-51-16-84-46 14-15 28-32 41-50 23-3 44-6 64-11l5 29zm39-67-28 10c-6-19-13-40-22-61 9-20 16-41 22-60l28 10c35 15 58 35 58 51 0 15-23 35-58 50zM321 78z"></path>
                                        <circle cx="420.9" cy="296.5" r="45.7"></circle>
                                        <path d="M521 78z"></path>
                                    </g>
                                </svg>
            
                                <h6 class="pt-3">ReactJS</h6>
                            </a>
                        </div>

                        <div class="col my-4 technology__icon text-center text-center">
                            <a href="category.html" class="text-decoration-none text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 110 110">
                                    <path d="M 99.75,67.46875 C 71.718268,67.468752 73.46875,79.625 73.46875,79.625 L 73.5,92.21875 L 100.25,92.21875 L 100.25,96 L 62.875,96 C 62.875,96 44.9375,93.965724 44.9375,122.25 C 44.937498,150.53427 60.59375,149.53125 60.59375,149.53125 L 69.9375,149.53125 L 69.9375,136.40625 C 69.9375,136.40625 69.433848,120.75 85.34375,120.75 C 101.25365,120.75 111.875,120.75 111.875,120.75 C 111.875,120.75 126.78125,120.99096 126.78125,106.34375 C 126.78125,91.696544 126.78125,82.125 126.78125,82.125 C 126.78125,82.124998 129.04443,67.46875 99.75,67.46875 z M 85,75.9375 C 87.661429,75.937498 89.8125,78.088571 89.8125,80.75 C 89.812502,83.411429 87.661429,85.5625 85,85.5625 C 82.338571,85.562502 80.1875,83.411429 80.1875,80.75 C 80.187498,78.088571 82.338571,75.9375 85,75.9375 z" style="fill:#3773a4" transform="translate(-45 -67)"></path>
                                    <path d="M 100.5461,177.31485 C 128.57784,177.31485 126.82735,165.1586 126.82735,165.1586 L 126.7961,152.56485 L 100.0461,152.56485 L 100.0461,148.7836 L 137.4211,148.7836 C 137.4211,148.7836 155.3586,150.81787 155.3586,122.53359 C 155.35861,94.249323 139.70235,95.252343 139.70235,95.252343 L 130.3586,95.252343 L 130.3586,108.37734 C 130.3586,108.37734 130.86226,124.03359 114.95235,124.03359 C 99.042448,124.03359 88.421098,124.03359 88.421098,124.03359 C 88.421098,124.03359 73.514848,123.79263 73.514848,138.43985 C 73.514848,153.08705 73.514848,162.6586 73.514848,162.6586 C 73.514848,162.6586 71.251668,177.31485 100.5461,177.31485 z M 115.2961,168.8461 C 112.63467,168.8461 110.4836,166.69503 110.4836,164.0336 C 110.4836,161.37217 112.63467,159.2211 115.2961,159.2211 C 117.95753,159.2211 120.1086,161.37217 120.1086,164.0336 C 120.10861,166.69503 117.95753,168.8461 115.2961,168.8461 z" style="fill:#ffd242" transform="translate(-45 -67)"></path>
                                </svg>
            
                                <h6 class="pt-3">Python</h6>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="my-3 content-categories">
                            Topics - 
                            <a href="#!">Uganda</a>
                            <a href="#!">Blogs</a>
                            <a href="#!">Dhaka</a>
                            <a href="#!">New</a>
                        </div>
    
                        <div class="d-flex flex-wrap post-meta-info">
                            <a href="" class="d-flex text-decoration-none text-light me-3 position-relative">
                                <i class="ri-edit-line text-primary align-self-center me-2"></i>
                                <span class="text-xsm text-muted">Written By</span>
                                <span class="align-self-center">&nbsp;-&nbsp;</span>
                                <span class="align-self-center">Saifullah Saif</span>
                            </a>
                            <a href="" class="d-flex text-decoration-none text-light me-3 position-relative">
                                <i class="ri-calendar-todo-line text-primary align-self-center me-2"></i>
                                <span class="text-xsm ">12th June, 2021</span>
                            </a>
                            <a href="" class="d-flex text-decoration-none text-light me-3 position-relative">
                                <i class="ri-file-copy-fill text-primary align-self-center me-2"></i>
                                <span class="text-xsm ">ReactJS</span>
                            </a>
                        </div>
                    </div>
    
                    <div class="mt-5">
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