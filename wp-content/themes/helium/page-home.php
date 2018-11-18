<?php get_header(); ?>
    
    <?php get_template_part('slider'); ?>

    <?php get_template_part('features'); ?>





    

 <!-- Team -->
    <div class="container team">
      <div class="page-header-title">
        <h2 class="heading-title text-center">Team Members</h2>
      </div>
      <div class="team-members mtb-50">
        <div class="row">

          <?php 
              //The Query
          //orderby order - first is the custom field order, then the wordpress order of desc which is descending
              $args = array('post_type'=>'team', 'orderby'=>'order', 'order'=>'DESC');
              $the_query = new WP_Query( $args );

                
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','team');
                  
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();

           ?>

        </div>
      </div> 
    </div>




                

<?php get_footer(); ?>