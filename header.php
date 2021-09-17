<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no" /> 
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



      <header class='header' id='bestheader'> 
          <div class="headertextimg">

                <div class="headerlogo">
                    
                    
                    <a  href="<?php echo home_url();?>">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="logo" width="100%" height="100%">
                    </a>
                    
                </div>

                    <div class="headertext">
                    
                      <h2><?php bloginfo( 'name' ); ?></h2>
                      <p><?php bloginfo( 'description' ); ?></p>
                    
                    </div>

          </div>



          <div class="imgheader"> <img src="<?php the_field('header_image')?>" alt="langimage" width="100%" height="90%">
        </div>
    </header>
 