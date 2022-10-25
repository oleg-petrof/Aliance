<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <?php include_once('favicon.php') ?>
    <title>Контрактное производство - Aliance Production</title>
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="/about.html" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="/contract.html" class="mobile-menu-link"
            >Контрактное производство</a
          >
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="/autohim.html" class="mobile-submenu-link"
                >Автомобильная химия</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="" class="mobile-menu-link">Собственные торговые марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="address-icon" width="24" height="24">
          <use href="img/sprite.svg#address"></use>
        </svg>
        <address class="mobile-info-address">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="email-icon" width="24" height="24">
          <use href="img/sprite.svg#email"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.mobile-info -->
      <div class="social-links">
        <a href="#" class="vk">
          <svg class="vk-icon" width="24" height="24">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="instagram">
          <svg class="vk-icon" width="24" height="24">
            <use href="img/sprite.svg#instagram"></use>
          </svg>
        </a>
      </div>
    </div>
    <nav class="navbar navbar-light">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="/about.html" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="/contract.html" class="header-nav-link"
            >Контрактное производство</a
          >
        </li>
        <li class="header-nav-item">
          <a href="" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="16" height="16">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <section class="main-title">
      <div class="main-title-bg">
        <div class="container">
          <div class="seporator"></div>
          <h1 class="header-title">Контрактное производство</h1>
          <div class="main-title-content">
            <a href="/index.html" class="main-title-link grey-link">Главная</a>
            <div class="main-title-separator"></div>
            <a href="/contract.html" class="main-title-link black-link">
              Контрактное производство</a
            >
          </div>
          <!-- /.main-title-content -->
        </div>
      </div>
      <!-- /.main-title-bg -->
    </section>
    <section class="section production contract">
      <div class="container">
        <div class="cards">
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <div class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить <br />
                значение форм воздействия.
              </div>
            </div>
            <!-- /.card-content -->
            <img
              src="img/avto-him.png"
              alt="Автомобильная химия"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <div class="card-text">
                А также стремящиеся вытеснить традиционное производство, <br />
                нанотехнологии функционально <br />
                разнесены на независимые элементы.
              </div>
            </div>
            <!-- /.card-content -->
            <img src="img/bit-him.png" alt="Бытовая химия" class="card-image" />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Дезинфицирующие средства</h3>
              <div class="card-text">
                Лишь интерактивные прототипы <br />
                призваны к ответу.
              </div>
            </div>
            <!-- /.card-content -->
            <img
              src="img/dezinfect.png"
              alt="Дезинфицирующие средства"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <div class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить <br />
                значение форм воздействия.
              </div>
            </div>
            <!-- /.card-content -->
            <img
              src="img/dezinfect.png"
              alt="Пищевые аэрозоли"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <div class="card-text">
                Лишь интерактивные прототипы <br />
                призваны к ответу.
              </div>
            </div>
            <!-- /.card-content -->
            <img
              src="img/avto-him.png"
              alt="Косметическая продукция"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <div class="card-text">
                А также стремящиеся вытеснить традиционное производство,<br />
                нанотехнологии функционально <br />
                разнесены на независимые элементы.
              </div>
            </div>
            <!-- /.card-content -->
            <img
              src="img/bit-him.png"
              alt="Краски аэрозольные"
              class="card-image"
            />
          </a>
        </div>
      </div>
    </section>
    <section class="section seo">
      <div class="container">
        <div class="seo-title">SEO Заголовок</div>
        <p class="seo-text">
          Также как дальнейшее развитие различных форм деятельности предполагает
          независимые способы реализации существующих финансовых и
          административных условий. Каждый из нас понимает очевидную вещь: курс
          на социально-ориентированный национальный проект играет важную роль в
          формировании как самодостаточных, так и внешне зависимых
          концептуальных решений. Внезапно, интерактивные прототипы набирают
          популярность среди определенных слоев населения, а значит, должны
          быть...
        </p>
        <div class="seo-button-wrapper">
          <svg class="arrow-icon" width="24" height="24">
            <use href="img/sprite.svg#arrow"></use>
          </svg>
          <a href="#" class="seo-button"> Читать больше</a>
        </div>
      </div>
    </section>
    <section class="cta">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="call to action" class="cta-image" />
        <div class="cta-form-wrapper container">
          <form action="#" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
              ответит на все интересующие вопросы и поможем даже в самых сложных
              случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                  id="user-name"
                  type="text"
                  class="input"
                  placeholder=" "
                />
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <!-- /.input-group -->
              <div class="input-group">
                <input
                  id="user-phone"
                  type="tel"
                  class="input"
                  placeholder=" "
                />
                <label class="input-group-label" for="user-phone"
                  >Номер телефона</label
                >
              </div>
              <!-- /.input-group -->
            </div>
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="img/sprite.svg#shield"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную
                  работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
            <!-- /.input-group-wrapper -->
          </form>
        </div>
        <!-- /.cta-form-wrapper -->
      </div>
    </section>
    <!-- /.cta -->
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo">
            <use href="img/sprite.svg#logo"></use>
          </svg>
          <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
          <div class="footer-info">
            <svg class="address-icon" width="24" height="24">
              <use href="img/sprite.svg#address"></use>
            </svg>
            <address class="footer-info-address">
              г. Мосвка, Холодильный пер. 4к1с8
            </address>
          </div>
          <!-- /.footer-info -->
          <div class="footer-info">
            <svg class="email-icon" width="24" height="24">
              <use href="img/sprite.svg#email"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <!-- /.footer-info -->
          <div class="footer-social">
            <a href="#" class="footer-cosial-link">
              <svg class="footer-social-icon" width="24" height="24">
                <use href="img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a href="#" class="footer-cosial-link">
              <svg class="footer-social-icon" width="24" height="24">
                <use href="img/sprite.svg#instagram"></use>
              </svg>
            </a>
          </div>
          <!-- /.footer-social -->
        </div>
        <!-- /.footer-top -->
      </div>
      <hr color="#ebebf0" class="footer-seporator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-columns-2">
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link">Дезинфицирующие средства</a>
              </li>
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list footer-menu-list-bold">
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="" class="footer-menu-link footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
        </div>
        <!-- /.footer-bottom -->
      </div>
      <!-- /.container -->
      <hr color="#ebebf0" class="footer-seporator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">
              &copy; 2022 «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <span class="made-in">Дизайн и разработка</span>
            <svg class="author-icon" width="52" height="11">
              <use href="img/sprite.svg#author"></use>
            </svg>
          </div>
        </div>
        <!-- /.footer-legal -->
      </div>
      <!-- /.conteiner -->
    </footer>
    <!-- /.footer -->
    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="" class="modal-close" data-toggle="modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="" class="form-modal">
          <div class="input-group-wrapper input-group-vcertical">
            <div class="input-group modal-input-group">
              <input
                id="modal-user-name"
                type="text"
                class="input modal-input"
                placeholder=" "
              />
              <label class="input-group-label modal-input-label" for="user-name"
                >Имя</label
              >
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input
                id="modal-user-phone"
                type="tel"
                class="input modal-input"
                placeholder=" "
              />
              <label
                class="input-group-label modal-input-label"
                for="user-phone"
                >Номер телефона</label
              >
            </div>
            <!-- /.input-group-wrapper -->
          </div>
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Отправить заявку
            </button>
            <div class="notify">
              <svg class="notify-icon" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text modal-notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу,
                но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
          <!-- /.modal-form-footer  -->
        </form>
      </div>
    </div>
    <!-- /.modal -->
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
