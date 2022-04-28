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
            <li <?php if (is_page('个人空间')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/me') ?>">个人空间</a></li>
            <li> <a href="#">机器学习</a>
              <ul>
                <li><a href="<?php echo site_url('/matrix') ?>">矩阵</a></li>
                <li><a href="<?php echo site_url('/tensor') ?>">张量</a></li>
                <li><a href="<?php echo site_url('/传统算法') ?>">传统算法</a></li>
                <li><a href="<?php echo site_url('/神经网络') ?>">神经网络</a></li>
              </ul>
            </li>
            <li><a href="#">后台开发</a>
              <ul>
                <li><a href="<?php echo site_url('/network') ?>">网络</a></li>
                <li><a href="<?php echo site_url('/Linux') ?>">Linux</a></li>
                <li><a href="<?php echo site_url('/database') ?>">数据库</a></li>
                <li><a href="<?php echo site_url('/分布式') ?>">分布式</a></li>
              </ul>
            </li>
            <li><a>游戏开发</a>
              <ul>
                <li><a href="<?php echo site_url('/game-server') ?>">服务器</a></li>
                <li><a href="<?php echo site_url('/game-client') ?>">客户端</a></li>
                <li><a href="<?php echo site_url('/美术') ?>">美术</a></li>
                <li><a href="<?php echo site_url('/引擎') ?>">引擎</a></li>
              </ul>
            </li>
            <li><a>编程语言</a>
              <ul>
                <li><a href="<?php echo site_url('/c-c') ?>">C/C++</a></li>
                <li><a href="<?php echo site_url('/go') ?>">Go</a></li>
                <li><a href="<?php echo site_url('/python') ?>">Python</a></li>
                <li><a href="<?php echo site_url('/c#') ?>">C#</a></li>
                <li><a href="<?php echo site_url('/shell') ?>">Shell</a></li>
                <li><a href="<?php echo site_url('/cuda') ?>">CUDA</a></li>
                <li><a href="<?php echo site_url('/qt') ?>">QT</a></li>
              </ul>
            </li>
            <li <?php if (get_post_type() == 'campus') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('campus'); ?>">自动化测试</a>
              <ul>
                <li><a href="<?php echo site_url('/unittest') ?>">单元测试</a></li>
                <li><a href="<?php echo site_url('/automation') ?>">自动化</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url('/algorithmanddatastructure') ?>">算法与数据结构</a>
              <ul>
                <li><a href="<?php echo site_url('/graph') ?>">图论</a></li>
              </ul>
            </li>
            <li><a href="#">工具</a>
              <ul>
                <li><a href="<?php echo site_url('/versioncontroltool') ?>">版本控制工具</a></li>
                <li><a href="<?php echo site_url('/codecoveragetool') ?>">覆盖率工具</a></li>
                <li><a href="<?php echo site_url('/memorychecktool') ?>">内存检测工具</a></li>
                <li><a href="<?php echo site_url('/抓包工具') ?>">抓包工具</a></li>
                <li><a href="<?php echo site_url('/debugtool') ?>">调试工具</a></li>
                <li><a href="<?php echo site_url('/anaconda') ?>">Anaconda</a></li>
                <li><a href="<?php echo site_url('/k8s&&docker') ?>">K8S&&Docker</a></li>
                <li><a href="<?php echo site_url('/linuxcommands') ?>">Linux命令</a></li>
              </ul>
            </li>
            <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">我的博客</a></li>
          </ul>
        </nav>
        <div class="site-header__util">    
          <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </header>
