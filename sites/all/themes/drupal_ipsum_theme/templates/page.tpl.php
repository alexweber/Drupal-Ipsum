<?php
/**
 * @file Drupal Ipsum page template
 * 
 * This is basically Bartik without regions and with social sharing widgets included
 *
 */
?>
<div id="page-wrapper"><div id="page">

    <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu' : 'without-secondary-menu'; ?>"><div class="section clearfix">

        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <div id="name-and-slogan"<?php
        if ($hide_site_name && $hide_site_slogan) {
          print ' class="element-invisible"';
        }
          ?>>

            <?php if ($site_name): ?>
              <?php if ($title): ?>
                <div id="site-name"<?php
          if ($hide_site_name) {
            print ' class="element-invisible"';
          }
                ?>>
                  <strong>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                  </strong>
                </div>
              <?php else: /* Use h1 when the content title is empty */ ?>
                <h1 id="site-name"<?php
          if ($hide_site_name) {
            print ' class="element-invisible"';
          }
                ?>>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
              <?php endif; ?>
            <?php endif; ?>

            <?php if ($site_slogan): ?>
              <div id="site-slogan"<?php
          if ($hide_site_slogan) {
            print ' class="element-invisible"';
          }
              ?>>
                     <?php print $site_slogan; ?>
              </div>
            <?php endif; ?>

          </div> <!-- /#name-and-slogan -->
        <?php endif; ?>

        <?php print render($page['header']); ?>

        <div class="drupal_ipsum_share_links">
          <span class="easy_social-widget easy_social-widget-facebook"><div class="fb-like" data-href="http://drupal-ipsum.com" data-send="false" data-layout="box_count" data-width="48" data-show-faces="true" data-action="like" data-colorscheme="light" data-font=""></div></span>
          <span class="easy_social-widget easy_social-widget-twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://drupal-ipsum.com" data-count="vertical"data-lang = "en"data-via="alexweber15" data-related="webdropbr:Webdrop are Drupal Specialists in Brazil" data-text="Drupal Ipsum: Drupal-flavoured lorem ipsum filler text generator #drupal">Tweet</a></span>
          <span class="easy_social-widget easy_social-widget-googleplus"><div class="g-plusone" data-size="tall" data-annotation="bubble" data-href="http://drupal-ipsum.com"></div></span>
          <span class="easy_social-widget easy_social-widget-linkedin"><script type="in/share" data-url="http://drupal-ipsum.com" data-counter="top"></script></span>
        </div>

        <?php if ($main_menu): ?>
          <div id="main-menu" class="navigation">
            <?php
            print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                  'id' => 'main-menu-links',
                  'class' => array('links', 'clearfix'),
                ),
                'heading' => array(
                  'text' => t('Main menu'),
                  'level' => 'h2',
                  'class' => array('element-invisible'),
                ),
              ));
            ?>
          </div> <!-- /#main-menu -->
        <?php endif; ?>

      </div></div> <!-- /.section, /#header -->

    <?php if ($messages): ?>
      <div id="messages"><div class="section clearfix">
          <?php print $messages; ?>
        </div></div> <!-- /.section, /#messages -->
    <?php endif; ?>

    <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

        <div id="content" class="column"><div class="section">

            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
              <h1 class="title" id="page-title">
                <?php print $title; ?>
              </h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>

            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>

          </div></div> <!-- /.section, /#content -->

      </div></div> <!-- /#main, /#main-wrapper -->

    <div id="footer-wrapper"><div class="section">


        <div id="footer" class="clearfix">
          <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
          <?php endif; ?>

          <div id="block-system-powered-by" class="block block-system block-even">
            <div class="content">
              Drupal Ipsum is brought to you by <a href="http://www.alexweber.com.br" target="_blank" rel="follow" title="Alex Weber">Alex</a> of <a href="http://webdrop.net.br" title="Webdrop" target="_blank" rel="follow">Webdrop</a> and is, of course, <span>Powered by <a href="http://drupal.org">Drupal</a></span>
            </div><!-- /.content -->
          </div><!-- /.block -->

        </div> <!-- /#footer -->


      </div></div> <!-- /.section, /#footer-wrapper -->

  </div></div> <!-- /#page, /#page-wrapper -->

<!-- Sharing Widgets -->
<script type="text/javascript">
  <!--//--><![CDATA[//><!--
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  //--><!]]>
</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="http://platform.linkedin.com/in.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<!-- Google Analytics Code -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27242484-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>