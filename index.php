<?php
  get_header();
?>

    <!-- # Main Content -->
    <main class="main">
      <!-- # Hero Section -->
      <section
        id="hero"
        class="hero">
        <?php
          $all_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'hero_slider',
            'suppress_filters' => true,
          ) );

          $length = count($all_posts);
          $total_width = ($length + 1) * 100;

        ?>
          <div class="hero__slides" style="width: <?php echo $total_width; ?>%">

          <?php

            $my_posts = get_posts( array(
              'numberposts' => -1,
              'category_name'    => 'hero_slider',
              'orderby'     => 'title',
              'order'       => 'ASC',
              'post_type'   => 'post',
              'suppress_filters' => true,
            ) );

            global $post;

            $first_post = $my_posts[0];

            foreach( $my_posts as $post ){
              setup_postdata( $post );

              ?>
                <div
                  class="hero__slide hero__slide-first"
                  style="background-image: url('<?php the_field('hero_slide_image'); ?>">
                  <div class="grid-container">
                    <div class="hero__content col-full">
                      <h1><?php the_field('hero_slide_title'); ?></h1>
                      <h4><?php the_field('hero_slide_description'); ?></h4>
                      <button
                        class="button button--hero button--cta"
                        aria-label="Открыть модальное окно"
                        ><?php the_field('hero_slide_button'); ?></button
                      >
                    </div>
                  </div>
                </div>
              <?php
            }

            $post = $first_post;
            setup_postdata( $post );

              ?>
                <div
                  class="hero__slide hero__slide-first hero__slide-repeat"
                  style="background-image: url('<?php the_field('hero_slide_image'); ?>">
                  <div class="grid-container">
                    <div class="hero__content col-full">
                      <h1><?php the_field('hero_slide_title'); ?></h1>
                      <h4><?php the_field('hero_slide_description'); ?></h4>
                      <button
                        class="button button--hero button--cta"
                        aria-label="Открыть модальное окно"
                        ><?php the_field('hero_slide_button'); ?></button>
                    </div>
                  </div>
                </div>
              <?php

            wp_reset_postdata();

          ?>

        </div>
        <div class="hero__indicators">
          <div class="grid-container">
            <div class="hero__indicators-wrapper">
              <span
                class="hero__indicator hero__indicator--active"
                data-index="0"></span>
              <span
                class="hero__indicator"
                data-index="1"></span>
              <span
                class="hero__indicator"
                data-index="2"></span>
            </div>
          </div>
        </div>
      </section>
      <!-- # Layouts Section -->
      <section
        id="layouts"
        class="layouts">
        <div class="grid-container">
          <div class="layouts__wrapper col-full">
            <h2 class="layouts__title"><?php the_field('layouts_title'); ?></h2>
            <h3 class="layouts__description">
              <?php the_field('layouts_description'); ?>
            </h3>
            <div class="layouts__flats-wrapper">
              <div class="layouts__flat">
                <div class="layouts__flat-image">
                  <img
                    fetchpriority="low"
                    src="<?php echo bloginfo('template_url'); ?>/assets/img/layouts-flat2.png"
                    alt="Планировка двухкомнатной квартиры" />
                </div>
                <h4>Двухкомнатные квартиры</h4>
                <span>средняя площадь 69 кв. м</span>
                <span class="body2">стандарт</span>
                <button
                  class="button button--flat button--secondary"
                  aria-label="Открыть модальное окно"
                  >Узнать цену</button
                >
              </div>
              <div class="layouts__flat">
                <div class="layouts__flat-image">
                  <img
                    fetchpriority="low"
                    src="<?php echo bloginfo('template_url'); ?>/assets/img/layouts-flat3.png"
                    alt="Планировка трехкомнатной квартиры" />
                </div>
                <h4>Трехкомнатные квартиры</h4>
                <span>средняя площадь 65 кв. м</span>
                <span class="body2">евростандарт</span>
                <button
                  class="button button--flat button--secondary"
                  aria-label="Открыть модальное окно"
                  >Узнать цену</button
                >
              </div>
              <div class="layouts__flat">
                <div class="layouts__flat-image">
                  <img
                    fetchpriority="low"
                    src="<?php echo bloginfo('template_url'); ?>/assets/img/layouts-flat4.png"
                    alt="Планировка четырехкомнатной квартиры" />
                </div>
                <h4>Четырехкомнатные квартиры</h4>
                <span>средняя площадь 91 кв. м</span>
                <span class="body2">евростандарт</span>
                <button
                  class="button button--flat button--secondary"
                  aria-label="Открыть модальное окно"
                  >Узнать цену</button
                >
              </div>
            </div>
            <button
              class="button button--layouts button--secondary"
              aria-label="Открыть модальное окно"
              >Оставить заявку</button
            >
          </div>
        </div>
      </section>
      <!-- # About Section -->
      <section
        id="about"
        class="about">
        <div class="grid-container">
          <div class="about__wrapper col-full">
            <h2 class="about__title"><?php the_field('about_title'); ?></h2>
            <div class="about__description">
              <h4>
              <?php the_field('about_description_1'); ?>
              </h4>
              <h4>
                <?php the_field('about_description_2'); ?>
                <a
                  class="link"
                  href="https://ya112.ru/"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <?php the_field('about_link'); ?>
                </a>
              </h4>
            </div>
            <div class="about__deadline">
              <span class="about__deadline-title"><?php the_field('about_deadline_title'); ?></span>
              <h4 class="about__deadline-date"><?php the_field('about_deadline_date'); ?></h4>
            </div>
            <div class="about__image">
              <img
                fetchpriority="low"
                src="<?php echo bloginfo('template_url'); ?>/assets/img/about-house.png"
                alt="Дом" />
            </div>
          </div>
        </div>
      </section>
      <!-- # Map Section -->
      <section
        id="map"
        class="map">
        <iframe
          src="https://yandex.com/map-widget/v1/?ll=129.724660%2C62.016724&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNDkwMTYzMzMwEm3QoNC-0YHRgdC40Y8sINCg0LXRgdC_0YPQsdC70LjQutCwINCh0LDRhdCwICjQr9C60YPRgtC40Y8pLCDQr9C60YPRgtGB0LosINC_0YDQvtGB0L_QtdC60YIg0JvQtdC90LjQvdCwLCA1Ny8xIgoNtbgBQxVREXhC&z=16.68"
          title="map"
          width="100%"
          height="100%"
          frameborder="1"
          allowfullscreen="true"
          style="position: relative"></iframe>
      </section>
      <!-- # Contacts Section -->
      <section
        id="contacts"
        class="contacts">
        <div class="grid-container">
          <div class="contacts__wrapper col-full">
            <h4 class="contacts__title">Офис продаж</h4>
            <div class="contacts__info">
              <div class="contacts__info-item contacts__info-item--address">
                <span class="body3">Адрес</span>
                <span>г. Якутск, ул. Аммосова 18, 1 этаж, офис 102</span>
                <span class="body3">Телефоны</span>
                <div class="contacts__info-phones">
                  <span>+7 (4112) 73-63-02 </span>
                  <span>+7 (4112) 73-63-00</span>
                </div>
              </div>
              <div class="contacts__info-item contacts__info-item--schedule">
                <span class="body3">Расписание</span>
                <div class="contacts__info-week">
                  <span>Будние дни 9:00 - 18:00</span>
                  <span class="contacts__info-lunch">Обед 13:00-14:00</span>
                  <span class="nowrap">Суббота, Воскресенье - выходной</span>
                </div>
                <div class="contacts__info-emails">
                  <div class="contacts__info-emails-item">
                    <span class="body3">Главный офис</span>
                    <span>info@ya112.ru</span>
                  </div>
                  <div class="contacts__info-emails-item">
                    <span class="body3">Отдел продаж</span>
                    <span>sales@ya112.ru</span>
                  </div>
                </div>
              </div>
            </div>
            <form class="contacts__form">
              <h4 class="contacts__form-title">
                Получить <br />
                предложение
              </h4>
              <div class="contacts__form-wrapper">
                <div class="contacts__form-input-wrapper">
                  <input
                    required
                    class="contacts__form-input"
                    type="text"
                    name="fullName"
                    placeholder="Введите свое имя и фамилию"
                    minlength="2"
                    maxlength="100"
                    pattern="^[A-Za-zА-Яа-яЁё]{2,}(\s[A-Za-zА-Яа-яЁё]{2,})+$"
                    title='Введите в формате "Имя Фамилия"' />
                  <input
                    required
                    class="contacts__form-input"
                    type="tel"
                    name="phone"
                    placeholder="Введите свой номер"
                    minlength="18"
                    maxlength="20"
                    pattern="\+\d{1,3}\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}"
                    title='Введите в формате "+999 (999) 999-99-99"' />
                </div>
                <div class="contacts__form-checkbox-wrapper">
                  <input
                    required
                    id="contacts__form-checkbox"
                    class="contacts__form-checkbox"
                    type="checkbox"
                    name="agreement" />
                  <label
                    class="body3 contacts__form-label"
                    for="contacts__form-checkbox"
                    title="Подтвердите обработку персональных данных для продолжения">
                    Я согласен(-а) на обработку персональных данных
                  </label>
                </div>
              </div>
              <button
                aria-label="Отправить заявку"
                type="submit"
                class="button button--secondary button--hero button--contacts-form">
                Отправить
              </button>
            </form>
          </div>
        </div>
      </section>
    </main>

        <!-- # WhatsApp -->
    <div class="whatsapp__wrapper">
      <svg viewBox="0 0 100 100">
        <path
          id="circle"
          d="M 50,50 m -35,0 a 35,35 0 1,1 70,0 a 35,35 0 1,1 -70,0" />
        <text>
          <textPath href="#circle">Заказать звонок</textPath>
        </text>
      </svg>
      <div class="whatsapp">
        <div class="whatsapp__icon">
          <img
            fetchpriority="high"
            src="<?php echo bloginfo('template_url'); ?>/assets/icons/whatsapp.svg"
            alt="" />
        </div>
      </div>
    </div>

    <!-- # Cookies Modal -->
    <div class="cookies">
      <div class="cookies__wrapper">
        <div class="cookies__description">
          Мы используем файлы куки.
          <a
            class="link"
            href="<?php echo site_url('/page-policy'); ?>"
            target="_blank"
            rel="noopener noreferrer">
            Узнать подробнее
          </a>
        </div>
        <button
          class="button cookies__button button--stroke"
          aria-label="Согласиться с условиями"
          >Согласен</button
        >
      </div>
    </div>

    <!-- # Modals -->
    <!-- # Menu Modal -->
    <dialog class="menu">
      <div class="menu__wrapper">
        <div class="menu__header">
          <button
            class="menu__close"
            aria-label="Закрыть меню">
            <svg
              class="menu__close-svg"
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
          <div class="menu__company-logo">
            <img
              fetchpriority="low"
              src="<?php echo bloginfo('template_url'); ?>/assets/icons/company-logo.svg"
              alt="Company Logo" />
          </div>
          <nav class="menu__navbar">
            <ul class="menu__navbar-list">
              <li class="menu__navbar-item menu__navbar-item--active body2"
                ><a href="#hero">Акции</a></li
              >
              <li class="menu__navbar-item body2"
                ><a href="#layouts">Квартиры</a></li
              >
              <li class="menu__navbar-item body2"
                ><a href="#about">О комплексе</a></li
              >
              <li class="menu__navbar-item body2"
                ><a href="#map">Расположение</a></li
              >
              <li class="menu__navbar-item body2"
                ><a href="#contacts">Контакты</a></li
              >
            </ul>
          </nav>
        </div>
        <ul class="menu__list">
          <li class="menu__item menu__item--active">
            <a href="#hero"> Акции </a>
          </li>
          <li class="menu__item">
            <a href="#layouts"> Квартиры </a>
          </li>
          <li class="menu__item">
            <a href="#about"> О комплексе </a>
          </li>
          <li class="menu__item">
            <a href="#map"> Расположение </a>
          </li>
          <li class="menu__item">
            <a href="#contacts"> Контакты </a>
          </li>
        </ul>
      </div>
    </dialog>

    <!-- # WhatsApp Modal -->
    <dialog class="whatsapp-modal">
      <div class="whatsapp-modal__wrapper">
        <div class="grid-container">
          <form class="contacts__form whatsapp-modal__form col-full">
            <h4 class="contacts__form-title whatsapp-modal__title"
              >Оставьте свой номер, <br />
              и мы вам перезвоним</h4
            >
            <div class="contacts__form-wrapper">
              <div class="contacts__form-input-wrapper">
                <input
                  required
                  class="contacts__form-input"
                  type="text"
                  name="fullName"
                  placeholder="Введите свое имя и фамилию"
                  minlength="2"
                  maxlength="100"
                  pattern="^[A-Za-zА-Яа-яЁё]{2,}(\s[A-Za-zА-Яа-яЁё]{2,})+$"
                  title='Введите в формате "Имя Фамилия"' />
                <input
                  required
                  class="contacts__form-input"
                  type="tel"
                  name="phone"
                  placeholder="Введите свой номер"
                  minlength="18"
                  maxlength="20"
                  pattern="\+\d{1,3}\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}"
                  title='Введите в формате "+999 (999) 999-99-99"' />
              </div>
              <div class="contacts__form-checkbox-wrapper">
                <input
                  required
                  id="whatsapp-modal__form-checkbox"
                  class="contacts__form-checkbox"
                  type="checkbox"
                  name="agreement" />
                <label
                  class="body3 whatsapp-modal__label"
                  for="whatsapp-modal__form-checkbox"
                  title="Подтвердите обработку персональных данных для продолжения"
                  >Я согласен(-а) на обработку персональных данных</label
                >
              </div>
            </div>
            <button
              aria-label="Отправить заявку"
              type="submit"
              class="button button--stroke button--hero button--whatsapp-modal"
              >Отправить</button
            >
          </form>
        </div>
      </div>
    </dialog>

    <!-- # CTA Modal -->
    <dialog class="cta-modal">
      <div class="cta-modal__wrapper">
        <div class="grid-container">
          <form class="contacts__form cta-modal__form col-full">
            <h4 class="contacts__form-title cta-modal__title"
              >Оставьте свой номер, <br />
              и мы вам перезвоним</h4
            >
            <div class="contacts__form-wrapper">
              <div class="contacts__form-input-wrapper">
                <input
                  required
                  class="contacts__form-input"
                  type="text"
                  name="fullName"
                  placeholder="Введите свое имя и фамилию"
                  minlength="2"
                  maxlength="100"
                  pattern="^[A-Za-zА-Яа-яЁё]{2,}(\s[A-Za-zА-Яа-яЁё]{2,})+$"
                  title='Введите в формате "Имя Фамилия"' />
                <input
                  required
                  class="contacts__form-input"
                  type="tel"
                  name="phone"
                  placeholder="Введите свой номер"
                  minlength="18"
                  maxlength="20"
                  pattern="\+\d{1,3}\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}"
                  title='Введите в формате "+999 (999) 999-99-99"' />
              </div>
              <div class="contacts__form-checkbox-wrapper">
                <input
                  required
                  id="cta-modal__form-checkbox"
                  class="contacts__form-checkbox"
                  type="checkbox"
                  name="agreement" />
                <label
                  class="body3 cta-modal__label"
                  for="cta-modal__form-checkbox"
                  title="Подтвердите обработку персональных данных для продолжения">
                  Я согласен(-а) на обработку персональных данных
                </label>
              </div>
            </div>
            <button
              type="submit"
              class="button button--stroke button--hero button--cta-modal"
              >Отправить</button
            >
          </form>
        </div>
      </div>
    </dialog>

<?php
  get_footer();
?>
