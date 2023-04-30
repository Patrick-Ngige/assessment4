

<h3><?php the_title(sprintf('<h3 class="entry-title"><a href= "%s">', esc_url(get_permalink() )), '</a></h3>'); ?></h3>
<small>Posted on: <?php the_time('F j, Y');?>&nbsp;<?php the_time('g:i a') ?></small>
<?php the_content();?> 
