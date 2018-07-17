<?php get_header('category_news'); ?>
<section class="news_blog news_scroll">
  <div class="container">
    <div class="row">
      <?php if(have_posts()) : while(have_posts()) : the_post()?>
      <div class="col l3 m12 s12">
        <a href="<?php the_permalink(); ?>">
          <div class="cover_image">
            <?php the_post_thumbnail('full', ['class' => 'responsive-img']); ?>
            <div class="overlay"></div>
            <div class="blog_info">
              <p class="blog_title"><?php the_title(); ?> </p>
              <p class="blog_date"><?php the_time('F j, Y'); ?> </p>

            </div>
          </div>
        </a>
      </div>
      <?php endwhile;?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
