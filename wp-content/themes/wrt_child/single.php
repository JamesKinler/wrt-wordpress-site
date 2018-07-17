<?php get_header('blog') ?>
<section class="blog_style">
  <div class="container">
    <div class="row">
      <?php while(have_posts()) : the_post(); ?>
          <div class="col l12">
            <!-- <p class="publish">Published &nbsp<?php the_date('F j, Y'); ?><span>Written By&nbsp<?php the_author();?></span></p> -->
            <?php the_content(); ?>
          </div>
    </div>
  </div>
</section>
<section class="related_post">
  <p class="center-align related_header">Related Topics You Might Enjoy</p>
  <div class="container">
    <div class="row">
        <?php
        $related = get_posts([
          'category__in' => wp_get_post_categories($post->ID),
          'numberposts' => 4,
          'post__not_in' => [
            $post->ID
          ],
        ]);
        if($related)foreach($related as $post){
          setup_postdata($post);
        ?>
        <div class="col l3 m6 s12">
          <a href="<?php the_permalink(); ?>">
            <div class="cover_image">
              <?php the_post_thumbnail('full',['class'=>'responsive-img']); ?>
              <div class="overlay"></div>
              <div class="related_post_info">
                <p class="related_post_title"><?php the_title(); ?></p>
                <p class="related_post_date"><?php the_time('F j, Y'); ?></p>
              </div>
            </div>
          </a>
        </div>
        <?php
        }
        ?>
        <div class="col l12 m12 s12">
          <div class="comments">
            <?php
              if(comments_open() || get_comments()) : comments_template();
              endif;
            ?>
          </div>
        </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
