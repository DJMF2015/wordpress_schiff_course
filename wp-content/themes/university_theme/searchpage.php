
<?php
/**
* Template Name: Search Page
*/
?>
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
echo $total_results;
?>
<?php get_header(); ?>


<div class="page-banner">
  <div class="content">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">

    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <div class="page-banner__intro">
    <p>To search my website, please use the form below.</p>
    <h2>Search Posts</h2>
  </div>
  <div class="wrap">
    <div id="primary" class="content-area">

      <main id="main" class="site-main" role="main">
        <?php get_search_form(); ?>
      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- .wrap -->
</div>


</div>

<?php get_footer();
