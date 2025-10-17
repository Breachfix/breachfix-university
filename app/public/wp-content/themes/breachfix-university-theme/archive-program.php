<?php 
  get_header(); ?>


<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">All Programs</h1>
    <div class="page-banner__intro">
      <p>Discover our academic programs and find your path to success.</p>
    </div>
  </div>
</div>

  <div class="container container--narrow page-section">
    <?php
      if (have_posts()) {
        while(have_posts()) {
          the_post(); ?>
          <div class="event-summary">
                <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                  <span class="event-summary__month"><?php 
                  // For programs, we might use a different field or just show a generic icon
                  echo 'PRO'; ?></span>
                  <span class="event-summary__day"><?php echo 'G'; ?></span>
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
         
        <?php }
        echo paginate_links();
      } else {
        echo '<p>No programs found.</p>';
      }
    ?>
    <hr class="section-break">
    <h2 class="headline headline--medium">Program Categories</h2>
    <p>Looking for specific program types? <a href="<?php echo site_url('/programs'); ?>">Browse our program categories</a>.</p>
  </div>

 


<?php get_footer();

?>
