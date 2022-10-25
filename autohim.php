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
    <title>Автомобильная химия - Aliance Production</title>
  </head>
  <body class="avtohim-body">
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
    <section class="main-title">
      <div class="main-title-bg avtohim-title">
        <div class="container">
          <div class="main-title-bg-wrapper">
            <div class="main-title-bg-left">
              <div class="seporator"></div>
              <h1 class="header-title">Автомобильная химия</h1>
              <div class="main-title-content">
                <a href="/index.html" class="main-title-link grey-link"
                  >Главная</a
                >
                <div class="main-title-separator"></div>
                <a href="/contract.html" class="main-title-link black-link">
                  Контрактное производство
                </a>
                <div class="main-title-separator"></div>
                <a href="/contract.html" class="main-title-link black-link">
                  Автомобильная химия
                </a>
              </div>
            </div>
            <!-- /.main-title-content -->
            <img src="img/avtohimiya.png" alt="Автохимия" class="avtohim-img" />
          </div>
        </div>
      </div>
      <!-- /.main-title-bg -->
    </section>
    <section class="section experts">
      <div class="container">
        <div class="founder-content-wrapper experts-content-wrapper">
          <div class="founder-content experts-content">
            <img src="img/avtohim-prod.jpg" alt="" class="experts-photo" />
            <div class="experts-wrapper">
              <div class="seporator"></div>
              <h2 class="section-title">
                Контрактное производство автомобильной химии
              </h2>

              <p class="founder-text experts-text">
                Прежде всего, начало повседневной работы по формированию позиции
                однозначно фиксирует необходимость приоритизации разума над
                эмоциями. Кстати, представители современных социальных резервов
                неоднозначны и будут описаны максимально подробно.
                <br />
                <br />
                Но социально-экономическое развитие напрямую зависит от
                поставленных обществом задач! Безусловно, постоянный
                количественный рост и сфера нашей активности предоставляет
                широкие возможности для системы обучения кадров, соответствующей
                насущным потребностям. В целом, конечно, выбранный нами
                инновационный путь обеспечивает широкому кругу (специалистов)
                участие в формировании своевременного выполнения сверхзадачи. А
                ещё элементы политического процесса представлены в исключительно
                положительном свете. Высокий уровень вовлечения представителей
                целевой аудитории является четким доказательством простого
                факта: высокотехнологичная концепция общественного уклада
                создаёт предпосылки для глубокомысленных рассуждений. В своём
                стремлении повысить качество жизни, они забывают, что дальнейшее
                развитие различных форм деятельности, а также свежий взгляд на
                привычные вещи - безусловно открывает новые горизонты для
                поставленных обществом задач.
              </p>
            </div>
            <!-- /.experts-content-->
          </div>
          <!-- /.experts-content-wrapper-->
        </div>
        <div class="swiper features-slider">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text">
                Непрерывная работа <br />
                c 2017 года
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#certificate"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>

          <!-- кнопки навигации вперёд/назад -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev-black"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next-black"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-->
    </section>
    <section class="section founder founder-avtohim">
      <div class="container">
        <div class="founder-content-wrapper avtohim-create">
          <div class="founder-content avtohim-content">
            <div class="seporator"></div>
            <h2 class="section-title">Изготовление автохимии</h2>
            <p class="founder-text">
              Но современная методология разработки позволяет оценить значение
              прогресса профессионального сообщества. Есть над чем задуматься:
              тщательные исследования конкурентов набирают популярность среди
              определенных слоев населения, а значит, должны быть ассоциативно
              распределены по отраслям. В своём стремлении повысить качество
              жизни, они забывают, что дальнейшее развитие различных форм
              деятельности, а также свежий взгляд на привычные вещи - безусловно
              открывает новые горизонты для поставленных обществом задач.
            </p>
            <ul class="clients-list manufacture-list">
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#car-cosmetic"></use>
                </svg>
                Автомобильная химия
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#him"></use>
                </svg>
                Бытовая химия
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#eat"></use>
                </svg>
                Дезинфицирующие средства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#brush"></use>
                </svg>
                Пищевые аэрозоли
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#cosmetic"></use>
                </svg>
                Косметическая продукция
              </li>

              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#shirt"></use>
                </svg>
                Краски аэрозольные
              </li>
            </ul>
          </div>
          <!-- /.founder-content-->
        </div>
        <!-- /.founder-content-wrapper-->
      </div>
      <!-- /.container-->
      <img src="img/avtohim-create.jpg" alt="" class="avtohim-create-photo" />
    </section>
    <section class="section types">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title types-title">Виды автохимии</h2>
        <p class="founder-text types-text">
          Но современная методология разработки позволяет оценить значение
          прогресса профессионального сообщества. Есть над чем задуматься:
          тщательные исследования конкурентов набирают популярность среди
          определенных слоев населения, а значит, должны быть ассоциативно
          распределены по отраслям.
        </p>
        <ul class="types-list">
          <li class="type-item"><span class="type-line"></span> Антискотч</li>
          <li class="type-item">
            <span class="type-line"></span> Многоцелевая смазка
          </li>
          <li class="type-item"><span class="type-line"></span> Жидкий ключ</li>
          <li class="type-item">
            <span class="type-line"></span> Высокотемпературная смазка
          </li>
          <li class="type-item">
            <span class="type-line"></span> Универсальный очиститель деталей
          </li>
          <li class="type-item">
            <span class="type-line"></span> Силиконовая смазка
          </li>
          <li class="type-item">
            <span class="type-line"></span> Цепная смазка
          </li>
          <li class="type-item">
            <span class="type-line"></span> Медная смазка
          </li>
          <li class="type-item">
            <span class="type-line"></span> Графитовая смазка
          </li>
          <li class="type-item">
            <span class="type-line"></span> Очиститель кондиционера пенный
          </li>
          <li class="type-item">
            <span class="type-line"></span>Очиститель тормозных дисков
          </li>
          <li class="type-item">
            <span class="type-line"></span> Очиститель битумных пятен
          </li>
          <li class="type-item">
            <span class="type-line"></span> Очиститель кондционера
          </li>
          <li class="type-item">
            <span class="type-line"></span> Очиститель дросельной заслонки
          </li>
          <li class="type-item">
            <span class="type-line"></span> Очиститель обивки
          </li>
          <li class="type-item">
            <span class="type-line"></span> Тефлоновая смазка
          </li>
          <li class="type-item">
            <span class="type-line"></span> Очиститель двигателя
          </li>
          <li class="type-item">
            <span class="type-line"></span> Универсальный очиститель
          </li>
          <li class="type-item">
            <span class="type-line"></span> Чернитель шин
          </li>
          <li class="type-item">
            <span class="type-line"></span> Чернитель шин + очистка
          </li>
        </ul>
      </div>
    </section>
    <section class="section blog research">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title research-title">
          Исследовательский центр <br />
          Aliance production
        </h2>
        <div class="research-text-wrapper">
          <p class="research-text">
            Явные признаки победы институционализации рассмотрены исключительно
            в <br />
            разрезе маркетинговых и финансовых предпосылок. Приятно, граждане,
            наблюдать, как активно развивающиеся страны третьего мира могут быть
            ограничены исключительно образом мышления. Лишь независимые
            государства набирают популярность среди определенных слоев
            населения, а значит, должны быть указаны как претенденты на роль
            ключевых факторов. Лишь акционеры крупнейших компаний могут быть
            призваны к ответу.
          </p>
          <p class="research-text">
            С учётом сложившейся международной обстановки, синтетическое <br />
            тестирование требует определения и уточнения анализа существующих
            паттернов поведения. Не следует, однако, забывать, что
            высокотехнологичная концепция общественного уклада представляет
            собой интересный эксперимент проверки как самодостаточных, так и
            внешне зависимых концептуальных решений. Предварительные выводы
            неутешительны: разбавленное изрядной долей эмпатии, рациональное
            мышление однозначно фиксирует необходимость стандартных подходов.
          </p>
        </div>
      </div>
      <!-- Slider main container -->
      <div class="swiper avtohim-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="#" class="swiper-slide blog-card">
            <img
              src="img/blog-card-image1.jpg"
              alt=""
              class="blog-card-image"
            />
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img
              src="img/blog-card-image2.jpg"
              alt=""
              class="blog-card-image"
            />
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img
              src="img/blog-card-image1.jpg"
              alt=""
              class="blog-card-image"
            />
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img
              src="img/blog-card-image2.jpg"
              alt=""
              class="blog-card-image"
            />
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img
              src="img/blog-card-image1.jpg"
              alt=""
              class="blog-card-image"
            />
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img
              src="img/blog-card-image2.jpg"
              alt=""
              class="blog-card-image"
            />
          </a>
        </div>

        <div class="blog-slider-footer container">
          <div class="blog-buttons primary-buttons-wrapper">
            <div class="avtohim-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="avtohim-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.blog-button -->
        </div>
        <!-- /.blog-slider-footer -->
      </div>
      <!-- /.container -->
    </section>
    <section class="section section-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">схема работы</h2>
        <div class="swiper steps-slider">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper steps">
            <!-- Slides -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
              <a href="#" class="button-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">
                Заключение <br />
                договора
              </h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые <br />
                элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации <br />
                разума над эмоциями.
              </p>
            </li>
          </ol>
          <!-- If we need navigation buttons -->
          <div class="steps-buttons primary-buttons-wrapper">
            <div class="steps-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <section class="section clients">
      <div class="container">
        <div class="seporator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title">
              Производим аэрозольную продукцию для разных сфер
            </h2>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#carwash"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#eat"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#cosmetic"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#car-cosmetic"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#shirt"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#boots"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#bricks"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <!-- /.clients-content -->
          <div class="clients-logo-list">
            <a href="#" class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </a>
          </div>
          <!-- /.clients-logo -->
        </div>

        <!-- /.clients-wrapper -->
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
