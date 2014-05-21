<!--

Template name: Standard Content

-->

<?php get_header(); ?>

  <div class="row standard">
    <div class="nine columns">
    
       <?php
          
            // check if the flexible content field has rows of data
            if( have_rows('content') ):
             
                 // loop through the rows of data
                while ( have_rows('content') ) : the_row();
             
                    if( get_row_layout() == 'heading' ): ?>
             
                    <h2><?php	the_sub_field('heading'); ?></h2>
             
             
                   <?php elseif( get_row_layout() == 'text' ): ?>
             
                    	<p><?php the_sub_field('text'); ?></p>
             
             
                   <?php elseif( get_row_layout() == 'image' ): ?>
             
                    	<div class="image">
                    	  <img src="<?php the_sub_field('image'); ?>" alt="" /> 
                    	</div>
                    	
             
                   <?php elseif( get_row_layout() == 'video' ): ?>

                      <div class="video">
                        <div class="iframe-wrap">
                          <?php the_sub_field('video'); ?>
                        </div>
                      </div>
                      
                      
                   <?php elseif( get_row_layout() == 'media_links' ): ?>
             
                        <?php the_sub_field('media_link'); ?>

                      
                   <?php elseif( get_row_layout() == 'link' ): ?>
             
                    	<a href="<?php the_sub_field('link'); ?>">
                    	  <p><u><?php the_sub_field('link_name'); ?></u></p>
                      </a>
    
    
                   <?php elseif( get_row_layout() == 'slider' ): ?>
                  	<div class="flexslider">
                  	  <ul class="slides">
                  		<?php while(the_repeater_field('slider')): ?>
                  			<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
                          <li>
                    	    	<img src="<?php echo $image[0]; ?>"/>
                          </li>
                  	    <?php endwhile; ?>
                	    </ul>
                  	</div>
                  	
                    <?php elseif( get_row_layout() == 'masonry' ): ?>
                  	<div class="masonry-container">
                  		<?php while(the_repeater_field('masonry')): ?>
                  			<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'medium'); ?>
                          <div class="masonry-item">
                    	    	<img src="<?php echo $image[0]; ?>"/>
                          </div>
                  	    <?php endwhile; ?>
                  	</div>
                  
                                  
                   <?php endif; ?>
             
              <?php endwhile; ?>
             
            <?php else : ?>
             
             
            <?php endif; ?>
    </div>
    
    <div class="two columns">
      
             <?php
          
            // check if the flexible content field has rows of data
            if( have_rows('sidebar_content') ):
             
                 // loop through the rows of data
                while ( have_rows('sidebar_content') ) : the_row();
             
                    if( get_row_layout() == 'heading' ): ?>
             
                    <h2><?php	the_sub_field('heading'); ?></h2>
             
             
                   <?php elseif( get_row_layout() == 'text' ): ?>
             
                    	<p><?php the_sub_field('text'); ?></p>
             
             
                   <?php elseif( get_row_layout() == 'image' ): ?>
             
                    	<div class="image">
                    	  <img src="<?php the_sub_field('image'); ?>" alt="" /> 
                    	</div>
                    	
             
                   <?php elseif( get_row_layout() == 'video' ): ?>
             
                      <div class="video">
                        <div class="iframe-wrap">
                          <?php the_sub_field('video'); ?>
                        </div>
                      </div>

                      
                   <?php elseif( get_row_layout() == 'media_links' ): ?>
             
                        <?php the_sub_field('media_link'); ?>

                      
                   <?php elseif( get_row_layout() == 'link' ): ?>
             
                    	<a href="<?php the_sub_field('link'); ?>">
                    	  <p><u><?php the_sub_field('link_name'); ?></u></p>
                      </a>
    
    
                   <?php elseif( get_row_layout() == 'slider' ): ?>
                  	<div class="flexslider">
                  	  <ul class="slides">
                  		<?php while(the_repeater_field('slider')): ?>
                  			<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
                          <li>
                    	    	<img src="<?php echo $image[0]; ?>"/>
                          </li>
                  	    <?php endwhile; ?>
                	    </ul>
                  	</div>
                  	
                  	
                    <?php elseif( get_row_layout() == 'masonry' ): ?>
                  	<div class="masonry-container">
                  		<?php while(the_repeater_field('masonry')): ?>
                  			<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'medium'); ?>
                          <div class="masonry-item">
                    	    	<img src="<?php echo $image[0]; ?>"/>
                          </div>
                  	    <?php endwhile; ?>
                  	</div>
                  
                                  
                   <?php endif; ?>
             
              <?php endwhile; ?>
             
            <?php else : ?>
             
             
            <?php endif; ?>
      
    </div>
    
  </div>

<?php get_footer(); ?>