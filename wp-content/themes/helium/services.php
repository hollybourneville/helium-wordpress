 <!-- services -->

      <div class="container services">
      
      <div class="page-header-title">

      <div class="row mtb-50">
        <?php 
              //The Query
          //orderby order - first is the custom field order, then the wordpress order of desc which is descending
              $args = array('post_type'=>'service', 'orderby'=>'order', 'order'=>'DESC');
              $the_query = new WP_Query( $args );

                
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','service');
                  
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();

           ?>
        
        <!-- End Image Service Box 1 -->

       
      </div>

    </div>