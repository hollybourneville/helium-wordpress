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
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio/img1.jpg" alt="" />
              </div>
              <div class="portfoli-content">
                <div class="sup-desc-wrap">
                  <div class="sup-desc-inner">
                    <div class="sup-link">
                      <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                      <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="sup-meta-wrap">
                      <a class="sup-title" href="#">
                        <h4>TITLE HERE</h4>
                      </a>
                      <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix branding planning">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio/img2.jpg" alt="" />
              </div>
              <div class="portfoli-content">
                <div class="sup-desc-wrap">
                  <div class="sup-desc-inner">
                    <div class="sup-link">
                      <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                      <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="sup-meta-wrap">
                      <a class="sup-title" href="#">
                        <h4>TITLE HERE</h4>
                      </a>
                      <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix branding research">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio/img3.jpg" alt="" />
              </div>
              <div class="portfoli-content">
                <div class="sup-desc-wrap">
                  <div class="sup-desc-inner">
                    <div class="sup-link">
                      <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                      <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="sup-meta-wrap">
                      <a class="sup-title" href="#">
                        <h4>TITLE HERE</h4>
                      </a>
                      <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing research">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img src="img/portfolio/img4.jpg" alt="" />
              </div>
              <div class="portfoli-content">
                <div class="sup-desc-wrap">
                  <div class="sup-desc-inner">
                    <div class="sup-link">
                      <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                      <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="sup-meta-wrap">
                      <a class="sup-title" href="#">
                        <h4>TITLE HERE</h4>
                      </a>
                      <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img src="img/portfolio/img5.jpg" alt="" />
              </div>
              <div class="portfoli-content">
                <div class="sup-desc-wrap">
                  <div class="sup-desc-inner">
                    <div class="sup-link">
                      <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                      <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="sup-meta-wrap">
                      <a class="sup-title" href="#">
                        <h4>TITLE HERE</h4>
                      </a>
                      <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning research">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img src="img/portfolio/img6.jpg" alt="" />
              </div>
              <div class="portfoli-content">
                <div class="sup-desc-wrap">
                  <div class="sup-desc-inner">
                    <div class="sup-link">
                      <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                      <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="sup-meta-wrap">
                      <a class="sup-title" href="#">
                        <h4>TITLE HERE</h4>
                      </a>
                      <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>