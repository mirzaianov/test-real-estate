<?php
  add_action( 'wp_enqueue_scripts', 'real_estate_styles' );
  add_action( 'wp_enqueue_scripts', 'real_estate_scripts' );

  function real_estate_styles() {
    wp_enqueue_style( 'real-estate-style', get_stylesheet_uri() );
  }

  function real_estate_scripts() {
    wp_enqueue_script(
      'real-estate-preloader',
      get_template_directory_uri() . '/scripts/preloader.js',
      array(),
      null,
      false
    );

    wp_enqueue_script(
      'real-estate-hero',
      get_template_directory_uri() . '/scripts/hero.js',
      array(),
      null,
      true
    );

    wp_enqueue_script(
      'real-estate-whatsapp',
      get_template_directory_uri() . '/scripts/whatsapp.js',
      array(),
      null,
      true
    );

    wp_enqueue_script(
      'real-estate-cookies',
      get_template_directory_uri() . '/scripts/cookies.js',
      array(),
      null,
      true
    );

    wp_enqueue_script(
      'real-estate-contacts',
      get_template_directory_uri() . '/scripts/contacts.js',
      array(),
      null,
      true
    );

    wp_enqueue_script(
      'real-estate-cta',
      get_template_directory_uri() . '/scripts/cta.js',
      array(),
      null,
      true
    );

    wp_enqueue_script(
      'real-estate-menu',
      get_template_directory_uri() . '/scripts/menu.js',
      array(),
      null,
      true
    );
  }

  add_theme_support( 'custom-logo' );
?>