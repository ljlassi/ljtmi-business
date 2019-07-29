<?php

/**
 * Template for displaying a single post in blog page, called from inside
 * the posts loop.
 */

?>

<div class="blog-post">
<a href="<?php echo get_permalink(); ?>" class="mainarealink"><h2 class="blog-post-title"><?php the_title(); ?></h2></a>
<p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
<?php echo get_the_excerpt(); ?>
</div>
