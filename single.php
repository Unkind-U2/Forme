<?php get_header("form"); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>
<div class="single-post">
<p class=title><?php the_title();?></p>
<p class="time"><?php the_time("Y.m.d"); ?></p>
<div class="content">
    <?php the_content(); ?>
</div>

</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>