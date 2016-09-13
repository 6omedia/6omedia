<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>6° Media</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
        <?php wp_head(); ?>
    </head>
    <body>

    <!-- if page is not front-page then include header -->
    <?php if(!is_front_page() ) { ?>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        <a class="logo" href="/">6°</a>
                    </div>
                    <div class="col-xs-9">

                        <img id="burger2" src="<?php bloginfo('template_directory'); ?>/img/burger.png">

                        <?php
                        
                            $defaults = array(
                                'container' => false,
                                'theme_location' => 'page_nav',
                                'menu_id' => 'page_nav',
                                'menu_class' => 'list'
                            );
                            
                            wp_nav_menu( $defaults );
                        
                        ?>

                    </div>
                </div>

                <?php
                        
                    $defaults = array(
                        'container' => false,
                        'theme_location' => 'page_mob_nav',
                        'menu_id' => 'page_mob_nav',
                        'menu_class' => 'list'
                    );
                    
                    wp_nav_menu( $defaults );
                
                ?>

            </div>
        </header> 

        <script>
                
            jQuery(document).ready(function($){

                var burger = $('#burger2');
                var mobNav = $('#page_mob_nav');
                var open = false;

                burger.on('click', function(){
                    
                    if(open){

                        // mobNav.css('display', 'none');
                        mobNav.hide(200);
                        open = false;

                    }else{

                        // mobNav.css('display', 'inline-block');
                        mobNav.show(200);
                        open = true;

                    }

                });

            });

        </script>

    <?php } ?>    
