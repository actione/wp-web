<?php

get_header();
pageBanner(array(
  'title' => '欢迎来看我的博客!',
  'subtitle' => '这是最新的博客.'
));
 ?>
<div class="container container--narrow page-section">
<?php
  global $wp; 
  $url = home_url( $wp->request );
  $categoryName = substr(wp_make_link_relative($url), 1);
  $args = array('post_type'=>'post','category_name' => $categoryName, 'posts_per_page'=>'6','paged'=>get_query_var('paged'));
  if ($categoryName == 'blog') {
    $args = array('post_type'=>'post', 'posts_per_page'=>'6','paged'=>get_query_var('paged'));
  } 
  $homepagePosts = new WP_Query($args);
  $pagination_links = paginate_links(array(
    'total' => $homepagePosts->max_num_pages,
    'current' => max( 1, get_query_var('paged') ),
    'format' => '?paged=%#%',
  ));
  while($homepagePosts->have_posts()) {
    $homepagePosts->the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      
      <div class="metabox">
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>

      <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
      </div>

    </div>
  <?php }
  echo $pagination_links;
?>
</div>

<?php get_footer();

?>