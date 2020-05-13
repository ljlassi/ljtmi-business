<?php

/**
 * Template for displaying a single post.
 */

?>

<div class="blog-post">
<h2 class="blog-post-title"><?php the_title(); ?></h2>
<p class="blog-post-meta"><?php the_date(); ?></p>
<?php the_content(); ?>
</div>
