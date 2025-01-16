<?php
/*
Template Name: Страница 404
*/

?>

<?php
  get_header();
?>
    <!-- # Main Content -->
    <main class="main">
      <section class="page-404">
        <div class="grid-container">
          <div class="page-404__wrapper col-full">
            <nav
              class="page-404__breadcrumbs"
              aria-label="Breadcrumb">
              <ol class="page-404__breadcrumbs-list">
                <li class="page-404__breadcrumbs-item body2"
                  ><a
                    class="page-404__breadcrumbs-link"
                    href="<?php echo home_url(); ?>"
                    >Главная</a
                  ></li
                >
                <li class="page-404__breadcrumbs-item body2"
                  ><span
                    class="page-404__breadcrumbs-current"
                    aria-current="page"
                    >
                    Страница 404</span
                  ></li
                >
              </ol>
            </nav>
            <div class="page-404__content">
              <h1 class="page-404__title">Страница 404</h1>
              <div class="page-404__image">
                <img
                  fetchpriority="low"
                  src="<?php echo bloginfo('template_url'); ?>/assets/img/404.png"
                  alt="" />
              </div>
              <div class="page-404__description"
                >Извините, такой страницы не существует. Вы можете вернуться на главную.</div
              >
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
  get_footer();
?>