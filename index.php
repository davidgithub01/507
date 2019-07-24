<!DOCTYPE html>
<html lang="en">

<? the_post() ?>

    <head>
        <title><?php the_title() ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href=<?php echo get_stylesheet_uri()?>>
    </head> 
    <body>
   
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    LOGO
                </div>
                <div class="col-sm">
                    <?php wp_nav_menu() ?>
                </div>
            </div>
        </div>


        <div class="foo-banner position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 font-weight-normal"><?php the_title() ?></h1>
                <p class="lead font-weight-normal"><?php the_excerpt() ?></p>
                <a class="btn btn-outline-secondary" href="#content">Read More</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="container" id="content">
            <div class="row">
                <div class="col-sm">
                    <?php the_content() ?>
                </div>
            </div>
        </div>



    </body>

</html>