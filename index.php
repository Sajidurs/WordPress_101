<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline">
                    <?php echo bloginfo( "description" );?>
                </h3>
                <h1 class="align-self-center display-1 text-center heading">
                    <?php echo bloginfo( "name" );?>
                </h1>
            </div>
        </div>
    </div>
</div>


    <div class="container">
        <div class="row">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
    </div>


<div class="posts">
    <?php

    while(have_posts()){
        the_post(); ?>

        <div class="post" <?php post_class();?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><?php the_title();?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author();?></strong><br/>
                        <?php get_the_date();?>
                    </p>
                    <ul class="list-unstyled">
                    </ul>
                </div>
                <div class="col-md-8">
                    <p>
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail("thumbnail", array("class='img-fluid'"));
                        }

                         ?>
                    </p>
                   <?php the_excerpt();?>
                </div>
            </div>

        </div>
    </div>
    <?php
    wp_reset_postdata();
    } ?>


    
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; LWHH - All Rights Reserved
            </div>
        </div>
    </div>
</div>
<?php wp_footer();?>
</body>
</html>