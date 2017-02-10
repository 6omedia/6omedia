<?php include('just_head.php'); ?>

    <!-- if page is not front-page then include header -->
    <?php if(!is_front_page() && !is_page('lead-sites') ){ ?>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        <a class="logo" href="<?php echo home_url(); ?>">6°</a>
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
