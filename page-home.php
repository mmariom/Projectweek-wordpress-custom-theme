<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

    <?php the_content() ?>
       

    <main>
        <div class="bigsecone">
            <section class="one" id='deskfirst'>
                <h1 id='mobilehead' ><?php the_field('section_one_title_mobile')?> </h1>
                <div class="articleimg">
                <img src="<?php the_field('section_one_img')?>" alt="image1" width="100%" height="100%">            

                </div>
                <p></p>

                <h1 id='desktophead'><?php the_field('section_one_title_desktop')?> </h1>
                <p>
                <?php the_field('section_one_text') ?>
                </p>



                <div class="progbars">


                    <div class="bar-1">
                            <span>30</span>
                            <div id="myProgress">
                                
                                <div id="myBar"> </div>

                            </div>
                    </div>


                    <div class="bar-1">
                            <span>60</span>
                            <div id="myProgress">
                                
                                <div id="myBar2"> </div>

                            </div>
                    </div>


                    <div class="bar-1">
                            <span>60</span>
                            <div id="myProgress">
                                
                                <div id="myBar3"> </div>

                            </div>
                    </div>


            
            
                </div>


                <div class="readmorebtn">
                    <a href="<?php the_field('section_one_readmore') ?>" class="btneff" >
                    <img src="<?php echo get_template_directory_uri() ?>/images/readmore.png" alt="readmore" width="100%" height="100%">

                    </a>
                </div>



            </section>



            <section class="two" id='deskfirst'> 
                <h1 id='mobilehead' ><?php the_field('section_two_title_mobile')?> </h1>
                <div class="articleimg">
                <img src="<?php the_field('section_two_img')?>" alt="image2" width="100%" height="100%">         

                </div>
                <p></p>
                <h1 id='desktophead'><?php the_field('section_two_title_desktop')?>  </h1>
                <p>
                <?php the_field('section_two_text')?>
                </p>



                <div class="readmorebtn">
                    <a href="<?php the_field('section_two_readmore') ?>" class="btneff" >
                    <img src="<?php echo get_template_directory_uri() ?>/images/readmore.png" alt="readmore" width="100%" height="100%">

                    </a>
                </div>


                
            </section>
        </div>

        <div class="bigsectwo">
            <section class="three">
                <h1 id='mobilehead'><?php the_field('section_three_title_mobile')?></h1>
                <div class="articleimg">
                <img src="<?php the_field('section_three_img')?>" alt="image3" width="100%" height="100%">            

                </div>
                <p></p>
                <h1 id='desktophead'> <?php the_field('section_three_title_desktop')?> </h1>
                <p>
                <?php the_field('section_three_text')?>
                </p>



                <div class="readmorebtn">
                    <a href="<?php the_field('section_three_readmore') ?>" class="btneff" >
                    <img src="<?php echo get_template_directory_uri() ?>/images/readmore.png" alt="readmore" width="100%" height="100%">

                    </a>
                </div>


                
            </section>



            <section class="four">


                <div class="lst">
                    
                    <img src="<?php the_field('section_four_icon')?>" alt="readmore" width="100%" height="100%">

                    
                    <h1><?php the_field('section_four_title_all')?></h1>
                </div>


                <p>
                <?php the_field('section_four_text')?>
                </p>
                <div class="lastphoto">
                <img src="<?php the_field('section_four_img')?>" alt="image4" width="100%" height="100%" >            
                </div>

                <div class="readmorebtn">
                    <a href="<?php the_field('section_four_readmore') ?>" class="btneff" >
                    <img src="<?php echo get_template_directory_uri() ?>/images/readmore.png" alt="readmore" width="100%" height="100%">

                    </a>
                </div>
              

            </section>
        </div>

        

     </main>
    

	
	<?php endwhile;


else :
	echo '<p>There are no posts!</p>';

endif;

get_footer();


?> 
 
