const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHight = (height) => {
  navbar.style.height = height;
};

const openMenu = (event) => {
  // функция открывания меню
  menu.classList.add("is-open"); // вешает класс is open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; //запрещаем прокрутку сайта
  lightModeOn();
};

const closeMenu = (event) => {
  // функция закрывания меню
  menu.classList.remove("is-open"); // убирает  класс is open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; //возвращает прокрутку сайта под меню
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHight("4.5rem") : changeNavHight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 3,
    },
  },
});

const swiper = new Swiper(".features-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  spaceBetween: 30,
  breakpoints: {
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
  },
});

const swiperResearch = new Swiper(".research-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".research-button-next",
    prevEl: ".research-button-prev",
  },
  spaceBetween: 30,
  slidesOffsetBefore: 100,
  initialSlide: 3,
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 1,
      initialSlide: 1,
      slidesOffsetBefore: 0,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 1,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 3,
    },
  },
});

const swiperAvtohim = new Swiper(".avtohim-slider", {
  speed: 400,
  slidesPerView: 3,
  navigation: {
    nextEl: ".avtohim-button-next",
    prevEl: ".avtohim-button-prev",
  },
  spaceBetween: 30,
  slidesOffsetBefore: 100,
  initialSlide: 3,
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 1,
      initialSlide: 1,
      slidesOffsetBefore: 0,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 1,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 3,
    },
  },
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});
