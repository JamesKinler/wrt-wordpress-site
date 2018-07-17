<?php get_header('events'); ?>
<section class="events_blog events_scroll">
  <div class="container">
    <div class="row">
      <?php if(have_posts()) : while(have_posts()) : the_post()?>
      <div class="col l3 m12 s12">
          <div class="cover_image">
            <?php the_post_thumbnail('full', ['class' => 'responsive-img']); ?>
            <div class="overlay"></div>
            <div class="event_info">
              <p class="event_title"><?php the_title(); ?> </p>
              <p class="event_date"><?php the_content(); ?> </p>
            </div>
          </div>
      </div>
      <?php endwhile;?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
