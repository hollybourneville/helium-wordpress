    <!-- Features -->

    <!-- you need to have all the extra HTML in here that is surrounding the loop/contetn so that the content displays properley inside it -->
    <div class="container features">
      
      <div class="page-header-title">
        <h2 class="heading-title text-center">Features</h2>
      </div>

      <div class="features-wrap">
        <div class="row">

          <?php 
              //The Query
          //orderby order - first is the custom field order - can also be title and then it will be alphabetical, then the wordpress order of desc which is descending, the menu order below is from a plugin
              $args = array('post_type'=>'feature', 'orderby'=>'menu_order');
              $the_query = new WP_Query( $args );

              // The Loop
                // global $active;
                // $active = 'active';
                
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','feature');
                  // $active ='';
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();

           ?>

        
        </div>
      </div>

    </div>