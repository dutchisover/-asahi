////////////////// SWIPER //////////////////

let featuresSwiper;
let mvSwiper;
let featuresSwiperBool = false;
const featuresBreakPoint = 768; // ブレークポイントを設定

const createMvSwiper = () => {
  mvSwiper = new Swiper('#mv__swiper', {
    autoplay: true,
    loop: true,
    effect: 'fade',
    slidesPerView: 1,
    speed: 1500,
    pagination: {
      el: '#mv__swiper .swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        const formattedIndex = (index + 1).toString().padStart(2, '0');
        return `<span class="${className}"><span>#</span>${formattedIndex}</span>`;
      }
    }
  });
};

const createFeaturesSwiper = () => {
  featuresSwiper = new Swiper('#features__swiper', {
    loop: true,
    slidesPerView: 1,
    speed: 1500,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false
    },
    pagination: {
      el: '#features__swiper .swiper-pagination',
      clickable: true
    }
  });
};

const destroyFeaturesSwiper = () => {
  if (featuresSwiper) {
    featuresSwiper.destroy(false, true);
    featuresSwiper = null;
  }
};

const handleFeaturesResize = () => {
  if (window.innerWidth <= featuresBreakPoint) {
    if (!featuresSwiperBool) {
      createFeaturesSwiper();
      featuresSwiperBool = true;
    }
  } else {
    if (featuresSwiperBool) {
      destroyFeaturesSwiper();
      featuresSwiperBool = false;
    }
  }
};

window.addEventListener(
  'load',
  () => {
    createMvSwiper();
    handleFeaturesResize();
  },
  false
);

window.addEventListener('resize', handleFeaturesResize, false);

// const swiper = new Swiper("#mv__swiper", {
//   autoplay: true, // 自動再生
//   loop: true,
//   effect: 'fade', // フェード
//   slidesPerView: 1,
//   speed: 1500,
//   pagination: {
//     el: "#mv__swiper .swiper-pagination",
//     clickable: true,
//     renderBullet: function (index, className) {
//       const formattedIndex = (index + 1).toString().padStart(2, '0');
//       return `<span class="${className}"><span>#</span>${formattedIndex}</span>`;
//     },
//   },
// });

////////////////// URLを取得し、ナビをカレントにする //////////////////
document.addEventListener('DOMContentLoaded', () => {
  const currentURL = window.location.pathname;

  const navItems = document.querySelectorAll('.header__nav-item');

  navItems.forEach(item => {
    const anchor = item.querySelector('a');
    if (
      anchor &&
      anchor.dataset.current &&
      currentURL.includes(anchor.dataset.current)
    ) {
      item.classList.add('is-current');
    }
  });
});

////////////////// スマホナビをクリックで開きボディにオーバーフローを付与 //////////////////
document.addEventListener('DOMContentLoaded', () => {
  const menuButton = document.querySelector('.header__nav-button');
  const closeButton = document.querySelector('.header__nav-button-close');

  if (menuButton) {
    menuButton.addEventListener('click', () => {
      const header = document.querySelector('.header');
      if (header) {
        header.classList.toggle('is-open');
      }
      document.body.classList.add('is-overflow');
    });
  }

  if (closeButton) {
    closeButton.addEventListener('click', () => {
      const header = document.querySelector('.header');
      if (header) {
        header.classList.remove('is-open');
      }
      document.body.classList.remove('is-overflow');
    });
  }
});

////////////////// アコーディオンの開閉 //////////////////

document.addEventListener('DOMContentLoaded', () => {
  const accordions = document.querySelectorAll('.js-accordion');

  const updateAccordionHeight = (accordion) => {
    const content = accordion.querySelector('.js-accordion__content');
    const height = content.scrollHeight;
    content.style.setProperty('--max-height', height + 'px');
  };

  const initializeAccordion = (accordion) => {
    const header = accordion.querySelector('.js-accordion__header');
    const content = accordion.querySelector('.js-accordion__content');

    // 初期化
    updateAccordionHeight(accordion);

    // aria-expandedの初期値を設定
    header.setAttribute('aria-expanded', 'false');

    const toggleAccordion = () => {
      const isOpen = accordion.classList.toggle('is-open');
      header.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    };

    // クリックイベントリスナーを追加
    header.addEventListener('click', toggleAccordion);

    // キーボード操作のためのイベントリスナーを追加
    header.addEventListener('keydown', event => {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        toggleAccordion();
      }
    });
  };

  accordions.forEach(initializeAccordion);

  // 画面幅が変わったときの高さを再計算
  window.addEventListener('resize', () => {
    accordions.forEach(updateAccordionHeight);
  });
});


// document.addEventListener('DOMContentLoaded', () => {
//   const accordions = document.querySelectorAll('.js_accordion');

//   accordions.forEach(accordion => {
//     accordion.addEventListener('click', () => {
//       accordion.classList.toggle('is-open');
//     });
//   });
// });

////////////////// aタグのスムーズスクロール //////////////////
document.addEventListener('DOMContentLoaded', () => {
  const anchors = document.querySelectorAll('a[href^="#"]');
  const duration = 400; // スクロールの到達時間をミリ秒で設定
  const offset = '100rem'; // スクロール位置をトップから調整するオフセット値（単位付き）

  const getOffsetInPixels = offset => {
    const value = parseFloat(offset);
    const unit = offset.match(/[a-zA-Z%]+$/);
    if (!unit) return value;

    switch (unit[0]) {
      case 'rem':
        return (
          value *
          parseFloat(getComputedStyle(document.documentElement).fontSize)
        );
      case 'em':
        return value * parseFloat(getComputedStyle(document.body).fontSize);
      case 'px':
        return value;
      case '%':
        return value / 100 * window.innerHeight;
      default:
        return value;
    }
  };

  const offsetInPixels = getOffsetInPixels(offset);

  anchors.forEach(anchor => {
    anchor.addEventListener('click', e => {
      const targetId = anchor.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        e.preventDefault();
        const startPosition = window.pageYOffset;
        const targetPosition =
          targetElement.getBoundingClientRect().top - offsetInPixels;
        const startTime = performance.now();

        const animateScroll = currentTime => {
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          window.scrollTo(0, startPosition + targetPosition * progress);
          if (progress < 1) {
            requestAnimationFrame(animateScroll);
          }
        };

        requestAnimationFrame(animateScroll);
      }
    });
  });
});
