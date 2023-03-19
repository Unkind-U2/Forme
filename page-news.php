<?php
/*
Template Name: プライバシーポリシー
*/
?>

<?php get_header("form"); ?>
  <div class="wf-section">
    <div class="div-block-13">
      <div class="text-block-22">プライバシーポリシー</div>
    </div>
  </div>
  <div class="privacy-policy">
  <ul role="list" class="list w-list-unstyled">
    <?php if(have_posts()): while(have_posts()): the_post();?>
      <?php the_content() ;?>
    <?php endwhile; endif; ?>
  </ul>
<?php get_footer(); ?>
