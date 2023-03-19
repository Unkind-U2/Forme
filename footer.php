</div>
  <div class="footer wf-section">
    <div class="link-block">
      <a href="<?php bloginfo('url');?>/" class="link-image w-inline-block"><img src="<?php bloginfo('template_url');?>/images/logo_white.png" loading="lazy" alt=""></a>
      <a href="<?php bloginfo('url');?>/contact/" class="text-block-21">無料で体験授業を受ける</a>
    </div>
    <div class="link-box">
      <ul role="list" class="list-2 w-list-unstyled">
        <li class="list-line">
          <a href="<?php if ( is_front_page()) : ?>
	                      #about_us
                    <?php else: ?>
                    	  <?php bloginfo('url'); ?>
                    <?php endif; ?>" class="nav">ForMeとは</a>
        </li>
        <li class="list-line">
          <a href="<?php if ( is_front_page()) : ?>
                        #plan-detail
                    <?php else: ?>
                    	  <?php bloginfo('url'); ?>
                    <?php endif; ?>" class="nav">プラン詳細</a>
        </li>
        <li class="list-line">
          <a href="<?php if ( is_front_page()) : ?>
                        #teacher
                    <?php else: ?>
                    	  <?php bloginfo('url'); ?>
                    <?php endif; ?>" class="nav">講師</a>
        </li>
      </ul>
      <ul role="list" class="list-2 w-list-unstyled">
        <li class="list-line">
          <a href="<?php bloginfo('url');?>/contact/" class="nav">お問い合わせ</a>
        </li>
        <li class="list-line">
          <a href="<?php bloginfo('url');?>/news/" class="nav">ニュース</a>
        </li>
        <li class="list-line">
          <a href="<?php bloginfo('url');?>/policy/" class="nav">プライバシーポリシー</a>
        </li>
      </ul>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63f46b611dc162d9bc6ff9bf" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_url');?>/js/webflow.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url');?>/js/main.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <?php wp_footer(); ?>
</body>
</html>