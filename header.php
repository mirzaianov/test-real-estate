<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0" />
    <meta
      name="format-detection"
      content="telephone=no" />
    <meta
      http-equiv="Cache-Control"
      content="max-age=31536000" />
    <link
      rel="icon"
      type="image/svg+xml"
      href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon.svg" />
    <link
      rel="icon"
      type="image/png"
      href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon-fallback.png" />
    <link
      rel="preload"
      href="<?php echo bloginfo('template_url'); ?>/assets/img/hero-bg1.jpg"
      as="image" />
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
  </head>
  <body>
    <!-- # Preloader Modal -->
    <div class="preloader">
      <div class="preloader__content">
        <div class="preloader__image">
          <img
            fetchpriority="low"
            src="<?php echo bloginfo('template_url'); ?>/assets/img/404.png"
            alt="" />
        </div>
        <div class="preloader__progress">
          <div class="preloader__progress-bar"></div>
        </div>
      </div>
    </div>

    <!-- # Header -->
    <header class="header">
      <div class="grid-container">
        <div class="header__wrapper col-full">
          <button
            class="header__menu"
            aria-label="Открыть меню">
            <svg
              class="header__menu-svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M3 12H21"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <path
                d="M3 6H21"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <path
                d="M3 18H21"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </button>
          <div class="header__company-logo">
            <?php the_custom_logo(); ?>
          </div>
          <nav class="header__navbar">
            <ul class="header__navbar-list">
              <li class="header__navbar-item header__navbar-item--active body2"
                ><a href="<?php echo home_url(); ?>">Акции</a></li
              >
              <li class="header__navbar-item body2"
                ><a href="<?php echo site_url('/#layouts'); ?>">Квартиры</a></li
              >
              <li class="header__navbar-item body2"
                ><a href="<?php echo site_url('/#about'); ?>">О комплексе</a></li
              >
              <li class="header__navbar-item body2"
                ><a href="<?php echo site_url('/#map'); ?>">Расположение</a></li
              >
              <li class="header__navbar-item body2"
                ><a href="<?php echo site_url('/#contacts'); ?>">Контакты</a></li
              >
            </ul>
          </nav>
          <div class="header__company-name">
            <img
              fetchpriority="high"
              src="<?php echo bloginfo('template_url'); ?>/assets/icons/company-name.svg"
              alt="Company Name" />
          </div>
        </div>
      </div>
    </header>