    <!-- Portfolio -->
    <div class="container">
      
      <div class="row mtb-50">
        <div class="col-md-12">
          <!-- Portfolio Controller/Buttons -->
          <div class="controls text-center wow fadeInUpQuick" data-wow-delay=".6s">
            <a class="filter active btn btn-common" data-filter="all">
              All 
            </a>

            <?php 

              //get the terms, make sure right dimension name is below
              $terms = get_terms('type',array('hide_empty'=>false));

            //loop through the terms and make a link for each term
              foreach($terms as $term){
                echo '<a class="filter btn btn-common" data-filter=".'.$term->slug.'">'.$term->name.'</a>';
              }

             ?>

            

            
          </div>
          <!-- Portfolio Controller/Buttons Ends-->
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay="0.8s">
         
          
              

            <?php 
              //The Query
          //orderby order - first is the custom field order - can also be title and then it will be alphabetical, then the wordpress order of desc which is descending, the menu order below is from a plugin
              $args = array('post_type'=>'project');
              $the_query = new WP_Query( $args );

              // The Loop
                // global $active;
                // $active = 'active';
                
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','project');
                  // $active ='';
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();

           ?>      

      

          </div>
        </div>
      </div>
    </div>