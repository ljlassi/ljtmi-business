<?php

/**
 * Template for displaying a single post in blog page, called from inside
 * the posts loop.
 */

?>

<div class="blog-post pb-3">
<a href="<?php echo get_permalink(); ?>" class="mainarealink"><h2 class="blog-post-title"><?php the_title(); ?></h2></a>
<p class="blog-post-meta"><?php the_date(); ?></p>
<?php echo get_the_excerpt(); ?>
</div>
