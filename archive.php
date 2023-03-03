<?php
/*
Template Name: Archives
*/
?>

<?php
    $args = array(
        'post_type' => "post", // 取得する投稿タイプ
    );

    $the_query = new WP_Query($args);
?>

<?php get_header("form"); ?>
  <div class="wf-section">
    <div class="div-block-13">
      <div class="text-block-22">お知らせ</div>
    </div>
  </div>
  <div class="news-content">
  <?php if ($the_query->have_posts()): ?>
<ul class="post">
    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
    <li class="post-line">
      <div class="img">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="title-box">
        <p class="time"><?php the_time('Y.m.d'); ?></p>
        <a href="<?php the_permalink(); ?>" class="post-title" ><?php the_title(); ?></a>
      </div>
        <div class="post-content">
          <?php $remove_array = ["\r\n", "\r", "\n", " ", "　"];
$content = wp_trim_words(strip_shortcodes(get_the_content()), 66, '…' );
$content = str_replace($remove_array, '', $content);
echo $content; ?>
        </div>
    </li>
    <?php endwhile; ?>
</ul>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>