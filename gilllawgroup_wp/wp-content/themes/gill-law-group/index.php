<?php get_header(); ?>

<div class="container">

	<div class="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="blog-post">

				<h2><a href="<?php the_permalink(); ?>"
rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

      <?php echo get_post_meta($post->ID, 'PostThumb',
            true); ?>


      <p class="meta">
        <span>Posted on</span> <?php echo get_the_time('F jS,
        Y'); ?> <span>by</span> <?php the_author(); ?>

      </p>

      <?php the_content('Read Full Article'); ?>

      <p><?php the_tags('Tags: ', ', ', '<br />'); ?>
      Posted in <?php the_category(', '); ?>
      <?php comments_popup_link('No Comments;',
      '1 Comment', '% Comments'); ?></p>

			</div>

		<?php endwhile; ?>

		<?php next_posts_link('Older Entries'); ?>
		<?php previous_posts_link('Newer Entries'); ?>

	<?php else : ?>
	  <h2>Nothing Found</h2>
	<?php endif; ?>

		</div>

	</div>



<?php get_footer(); ?>
