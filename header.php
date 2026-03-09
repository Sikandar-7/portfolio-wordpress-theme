<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ===== HEADER / NAVBAR ===== -->
<header class="site-header" id="site-header">
    <div class="container">
        <nav class="navbar">

            <!-- Logo -->
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-logo">
                Sikandar <span>Abbas</span>
            </a>

            <!-- Navigation Menu -->
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#contact" class="btn btn-primary">Hire Me</a></li>
            </ul>

        </nav>
    </div>
</header>
<!-- ===== HEADER END ===== -->
