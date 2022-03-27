<?php get_header(); ?>

  <div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/main_background.jpg') ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h2 class="headline headline--medium">这是我的最新博客</h2>
    </div>
  </div>
  
  <div style="margin-top:25px;">
    <?php
      $homepagePosts = new WP_Query(array(
        'posts_per_page' => 8
      ));

      while ($homepagePosts->have_posts()) {
        $homepagePosts->the_post(); ?>
        <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
            <span class="event-summary__month"><?php the_time('M'); ?></span>
            <span class="event-summary__day"><?php the_time('d'); ?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php if (has_excerpt()) {
                echo get_the_excerpt();
              } else {
                echo wp_trim_words(get_the_content(), 18);
                } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
          </div>
        </div>
      <?php } wp_reset_postdata();
    ?> 
    <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
  </div>
  <?php get_footer();

?>