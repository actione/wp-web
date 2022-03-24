<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Actione</strong></a></h1>
      <a href="<?php echo esc_url(site_url('/search')); ?>" class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul id="menu">
            <li <?php if (is_page('个人空间')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/个人空间') ?>">个人空间</a></li>
            <li> <a href="#">机器学习</a>
              <ul>
                <li><a href="<?php echo site_url('/tensor') ?>">张量</a></li>
                <li><a href="<?php echo site_url('/传统算法') ?>">传统算法</a></li>
                <li><a href="<?php echo site_url('/神经网络') ?>">神经网络</a></li>
              </ul>
            </li>
            <li><a href="#">后台开发</a>
              <ul>
                <li><a href="<?php echo site_url('/网络') ?>">网络</a></li>
                <li><a href="<?php echo site_url('/Linux') ?>">Linux</a></li>
                <li><a href="<?php echo site_url('/数据库') ?>">数据库</a></li>
                <li><a href="<?php echo site_url('/分布式') ?>">分布式</a></li>
              </ul>
            </li>
            <li><a>游戏开发</a>
              <ul>
                <li><a href="<?php echo site_url('/服务器') ?>">服务器</a></li>
                <li><a href="<?php echo site_url('/客户端') ?>">客户端</a></li>
                <li><a href="<?php echo site_url('/美术') ?>">美术</a></li>
                <li><a href="<?php echo site_url('/引擎') ?>">引擎</a></li>
              </ul>
            </li>
            <li><a>编程语言</a>
              <ul>
                <li><a href="<?php echo site_url('/c-c') ?>">C/C++</a></li>
                <li><a href="<?php echo site_url('/Go') ?>">Go</a></li>
                <li><a href="<?php echo site_url('/Python') ?>">Python</a></li>
                <li><a href="<?php echo site_url('/C#') ?>">C#</a></li>
                <li><a href="<?php echo site_url('/Shell') ?>">Shell</a></li>
                <li><a href="<?php echo site_url('/CUDA') ?>">CUDA</a></li>
                <li><a href="<?php echo site_url('/QT') ?>">QT</a></li>
              </ul>
            </li>
            <li <?php if (get_post_type() == 'campus') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('campus'); ?>">自动化测试</a>
              <ul>
                <li><a href="<?php echo site_url('/单元测试') ?>">单元测试</a></li>
                <li><a href="<?php echo site_url('/自动化') ?>">自动化</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url('/算法与数据结构') ?>">算法与数据结构</a>
              <ul>
                <li><a href="<?php echo site_url('/图论') ?>">图论</a></li>
              </ul>
            </li>
            <li><a href="#">工具</a>
              <ul>
                <li><a href="<?php echo site_url('/版本控制工具') ?>">版本控制工具</a></li>
                <li><a href="<?php echo site_url('/覆盖率工具') ?>">覆盖率工具</a></li>
                <li><a href="<?php echo site_url('/内存检测工具') ?>">内存检测工具</a></li>
                <li><a href="<?php echo site_url('/抓包工具') ?>">抓包工具</a></li>
                <li><a href="<?php echo site_url('/容器') ?>">容器</a></li>
                <li><a href="<?php echo site_url('/Anaconda') ?>">Anaconda</a></li>
              </ul>
            </li>
            <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">我的博客</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <!-- <?php if(is_user_logged_in()) { ?>
            <a href="<?php echo esc_url(site_url('/my-notes')); ?>" class="btn btn--small btn--orange float-left push-right">My Notes</a>
            <a href="<?php echo wp_logout_url();  ?>" class="btn btn--small  btn--dark-orange float-left btn--with-photo">
            <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
            <span class="btn__text">Log Out</span>
            </a>
            <?php } else { ?>
              <a href="<?php echo wp_login_url(); ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
              <a href="<?php echo wp_registration_url(); ?>" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
             <?php } ?> -->
          
          <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </header>
