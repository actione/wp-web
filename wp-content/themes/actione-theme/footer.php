<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>Actione</strong></a></h1>
          <p><a class="site-footer__link" href="#">0.0.000</a></p>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">寻找</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo site_url('/about-us') ?>">个人空间</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">学习</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo site_url('/privacy-policy') ?>">私有</a></li>
                <li><a href="#">职业规划</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">联系我</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>