<?php /* Template Name: News*/get_header('news');?>
<section class="news_section" id="scroll">
  <div class="container">
    <div class="row">
      <div class="col l12">
        <div class="news center-align">
          <p>
            Cras gravida dui non turpis tempor, ut fringilla enim porta. Maecenas dapibus justo pretium felis dapibus, ac condimentum arcu faucibus. Praesent egestas
            et neque nec viverra. Ut ac dui eros. Nulla aliquam purus consequat efficitur
            ornare. Aliquam condimentum erat augue. Duis eros enim, pellentesque ut metus in,
            pretium congue urna. Mauris suscipit, velit vitae porttitor molestie, diam mauris
            tempor turpis, sed placerat justo nulla ac eros.
          </p>
          <div class="row">
            <div class="col l6 m6 s12 news_button"><a class="news_media" href="/category/news/">News & Media</a></div>
            <div class="col l6 m6 s12 cal_button"><a class="calendar" href="/category/events/">Our Calendar</a></div>
          </div>
          <hr class="news_hr">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="news_banner center-align">
  <h2>NEWS AND MEDIA </h2>
  <p>Reporting on the stories and issues that matter to you.</p>
</section>
<section class="news_blog">
  <div class="container">
    <div class="row">
      <?php
        $args = [
          'post_type' => 'post',
          'posts_per_page' => 3,
          'post_status' => 'publish',
          'order' => 'DESC',
          'orderby' => 'date',
          'category_name' =>'news'
        ]
      ?>
      <?php $news_query = new WP_Query($args);
        if($news_query->have_posts()) :  while($news_query->have_posts()) : $news_query->the_post();
      ?>
      <div class="col l4 m12 s12">
        <a href="<?php the_permalink();?>">
          <div class="cover_image">
            <?php the_post_thumbnail('full',['class'=>'responsive-img']); ?>
            <div class="overlay"></div>
            <div class="blog_info">
              <p class="blog_title"><?php the_title(); ?></p>
              <p class="blog_date"><?php the_time('F j, Y'); ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php endwhile;?>
    <?php wp_reset_postdata();?>
    <?php endif; ?>
      <p class="blog_more_content center-align">DISCOVER MORE CONTENT.</p><a class="blog_browse" href="#">Browse</a>
    </div>
  </div>
</section>
<section class="upcoming_events center-align">
  <h2>UPCOMING EVENTS </h2>
  <p>Visit us at any of these great events and meet the WRT team.</p>
</section>
<section class="events_blog">
  <div class="container">
    <div class="row">
      <?php
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'date',
        'category_name' => 'events',
      ]
      ?>
      <?php
      $events_query = new WP_Query($args);
      if($events_query->have_posts()) : while($events_query->have_posts()) : $events_query->the_post();
      ?>
      <div class="col l4 m12 s12">

          <div class="cover_image">
            <?php the_post_thumbnail('full',['class'=>'responsive-img']); ?>
            <div class="overlay"></div>
            <div class="event_info">
              <p class="event_title"><?php the_title(); ?></p>
              <p class="event_date"><?php the_content(); ?></p>
            </div>
          </div>

      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
    <p class="full_line_up center-align">SEE THE FULL LINE-UP</p><a class="event_calendar_button" href="/category/events/">CALENDAR</a>
  </div>
</section>
<?php get_footer();?>
