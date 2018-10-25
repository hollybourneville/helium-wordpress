<div class="col-sm-6 col-md-3">
            <!-- Team Item Starts -->
            <div class="team-item">
              <figure class="team-profile">
                <img src="<?php the_field('imageservice'); ?>" alt="">
                <figcaption class="our-team">
                  <div class="details">
                    <div class="content-white"><?php the_content(); ?></div>
                    <hr class="small-divider border-white">
                    <div class="social">
                      <a class="facebook" href="#"><i class="fa <?php the_field('icon_1'); ?>"></i></a>
                      <a class="twitter" href="#"><i class="fa <?php the_field('icon_2'); ?>"></i></a>
                      <a class="google-plus" href="#"><i class="fa <?php the_field('icon_3'); ?>"></i></a>
                    </div>
                  </div>
                </figcaption>
              </figure>
              <div class="info">
                <h2>
                  <?php the_field('name'); ?>
                </h2>
                <p>
                  <?php the_field('job_title'); ?>
                </p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>