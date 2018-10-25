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


    <!-- services -->

      <div class="container services">
      
      <div class="page-header-title">
        <h2 class="heading-title text-center">Services</h2>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam maxime quos veritatis minima reprehenderit pariatur dignissimos, impedit, voluptatem eveniet cupiditate amet magni adipisci possimus. Eveniet consequuntur error enim ab iusto.</p>
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

        <!-- Start Image Service Box 2 -->
        <div class="col-md-4">
          <div class="image-service-box">
            <img src="img/service/img2.jpg" alt="" />
            <div class="service-text">
              <h4><a href="#">Great Support</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.</p>
            </div>
          </div>
        </div>
        <!-- End Image Service Box 2 -->

        <!-- Start Image Service Box 3 -->
        <div class="col-md-4">
          <div class="image-service-box">
            <img src="img/service/img3.jpg" alt="" />
            <div class="service-text">
              <h4><a href="#">Bootstrap 4 UI Kit</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.</p>
            </div>
          </div>
        </div>
        <!-- End Image Service Box 3 -->
      </div>

    </div>

                

<?php get_footer(); ?>