
        <footer class="site-footer">
        
        <div class="impress">
              <b> <?php the_field('left_title')?></b>  
              <p></p>
             <p><?php the_field('left_line_one')?><br> <?php the_field('left_line_two')?> <br> <?php the_field('left_line_three')?>
             
             
        </div>
        <div class="contact">
                <b> <?php the_field('right_title')?> </b> 
                <p></p>
                <p><?php the_field('right_line_one')?>
        </div>

                

        </footer>

        <a href="#" class="go-top"  >
        <img src="<?php echo get_template_directory_uri() ?>/images/arrowup.png" alt="logo" width="100%" height="100%">

        </a>
              

        <?php wp_footer() ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html> 
