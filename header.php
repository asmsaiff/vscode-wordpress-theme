<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Parisienne&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<body>
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