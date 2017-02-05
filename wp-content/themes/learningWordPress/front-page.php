<?php

 get_header();

 ?>

<!-- site-content -->
 <div  class="site-content clearfix">

     <h3>Custom HTML Here!</h3>

      <?php  if(have_posts()):
      	while(have_posts()):the_post();
         
         the_content(); 
        
       endwhile;

       else :
          echo '<p>No content found </p>';      
       endif;  ?>

           <!-- homw-columns -->
           <div  class="home-columns clearfix" style="padding-top: 30px;">
                 <!-- one-half -->
                 <div name="one-half" style="width: 45%;  float: left;  margin-right: 10%;">



                      <?php

                     // opinion  posts loop begins here
                      $opinionPosts = new WP_Query('cat=7&posts_per_page=2');
                      if($opinionPosts->have_posts()):
                        while($opinionPosts->have_posts()):$opinionPosts->the_post(); ?>
                          
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>           
                           
                           <?php the_excerpt(); ?>        
                      <?php endwhile;

                       else :

                        // fallback no content message here
                                
                       endif;
                       wp_reset_postdata();  ?>



                 </div><!-- /one-half -->

                 <!-- one-half -->
                 <div name="one-half last" style="width: 45%;  float: left;  margin-right: 0;">

                     <?php

                        // news  posts loop begins here
                        $newsPosts = new WP_Query('cat=2&posts_per_page=2');
                        if($newsPosts->have_posts()):
                          while($newsPosts->have_posts()):$newsPosts->the_post(); ?>
                            
                             <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>           
                           
                           <?php the_excerpt(); ?>          
                                    
                        <?php endwhile;

                         else :

                          // fallback no content message here
                                  
                         endif;
                         wp_reset_postdata();        
                     ?> 



                 </div><!-- /one-half -->


           </div><!-- /homw-columns -->
                 

     </div><!-- /site-content -->

 <?php get_footer(); 

?>