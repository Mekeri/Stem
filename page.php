<?php get_header(); ?>
<div class="container"><!--main content container-->

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
  <div class="row">
    <div class="col-sm-8">

  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  		<h1><?php the_title(); ?></h1>
      <div class="well">
  	  	<?php the_content(); ?>
      </div>
  	<?php endwhile; else: ?>
  		<p><?php _e('Sorry, this page does not exist.'); ?></p>
  	<?php endif; ?>

    </div>
    <div class="col-sm-4">
  	<?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
