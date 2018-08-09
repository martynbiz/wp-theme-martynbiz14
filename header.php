<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="dist/images/database_64x64.png"/>
        <?php wp_head(); ?>
    </head>

    <body>

        <div class="grid-container">
            <div class="mb18-container">
                <header class="grid-x grid-padding-x mb18-header">
                    <div class="cell small-6" class="mb18-heading__wrapper">

                        <a href="<?php echo get_home_url(); ?>" title="Martynbiz logo" class="mb18-heading__wrapper">
                            <img src="<?php bloginfo('template_url'); ?>/images/database_64x64.png" width="48" height="48" alt="logo">
                            <div class="mb18-heading">Martyn<span class="mb18-heading__hl">.biz</span></div>
                            <div class="mb18-heading__desc">Web developer, blah, blah.</div>
                        </a>
                    </div>
                    <div class="cell small-6">
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
        					<?php wp_nav_menu( array(
        						'theme_location' => 'primary',
        						'menu_class'     => 'menu float-right',
        					) ); ?>
        				<?php endif; ?>
                    </div>
                </header>
