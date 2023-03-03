<?php
/*
Template Name: ニュース一覧
*/
?>

<?php get_header(); ?>
  <div class="wf-section">
    <div class="div-block-13">
      <div class="text-block-22">お知らせ</div>
    </div>
  </div>
  <div class="news-content">
  <ul role="list" class="list w-list-unstyled">
    <?php if(have_posts()): while(have_posts()): the_post();?>
      <li class="list-item">
        <a href="<?php the_permalink(); ?>" class="news-line"><?php echo get_the_date('Y.m.d'); ?> <?php the_title(); ?></a>
      </li>
    <?php endwhile; endif; ?>
    </ul>
<?php get_footer(); ?>