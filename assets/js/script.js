//テキストのカウントアップ+バーの設定
if ($(".home").length > 0) {
    var bar = new ProgressBar.Line(splash_text, {
        //id名を指定
        easing: "easeInOut", //アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
        duration: 2000, //時間指定(1000＝1秒)
        strokeWidth: 0.2, //進捗ゲージの太さ
        color: "#fff", //進捗ゲージのカラー
        trailWidth: 0.2, //ゲージベースの線の太さ
        trailColor: "#EF8C37", //ゲージベースの線のカラー
        text: {
            //テキストの形状を直接指定
            style: {
                //天地中央に配置
                position: "absolute",
                left: "50%",
                top: "calc(50% + 123rem)",
                padding: "0",
                margin: "32rem 0 0 0", //バーより上に配置
                transform: "translate(-50%,-50%)",
                "font-size": "16rem",
                color: "#fff",
            },
            autoStyleContainer: false, //自動付与のスタイルを切る
        },
        step: function (state, bar) {
            bar.setText(Math.round(bar.value() * 100) + " %"); //テキストの数値
        },
    });

    /*
  //アニメーションスタート
  bar.animate(1.0, function() {
    //バーを描画する割合を指定します 1.0 なら100%まで描画します
    // $("#splash").delay(500).fadeOut(800); //アニメーションが終わったら#splashエリアをフェードアウト
    $('#splash').delay(500).fadeOut(800, function() {
      // フェードアウトが完了したらbodyに.is-loadedを追加
      $('body').addClass('is-loaded');
    });
  });
  */

    // アニメーションスタート
    bar.animate(1.0, function () {
        // アニメーション完了後の処理
        setTimeout(function () {
            $("#splash_text").animate(
                {
                    //width: "0%",
                    opacity: 0,
                },
                {
                    duration: 300, // アニメーションの長さ（ミリ秒）
                    easing: "linear", // イージング関数
                    complete: function () {
                        $(this).hide(); // アニメーション完了後に要素を非表示にする
                        //$("body").addClass("is-loaded");
                    },
                }
            );
        }, 200); // 500ミリ秒の遅延
        setTimeout(function () {
            $("#splash").animate(
                {
                    width: "0%",
                    //opacity: 0.2,
                },
                {
                    duration: 400, // アニメーションの長さ（ミリ秒）
                    easing: "swing", // イージング関数
                    complete: function () {
                        $(this).hide(); // アニメーション完了後に要素を非表示にする
                        $("body").addClass("is-loaded");
                    },
                }
            );
        }, 600); // 500ミリ秒の遅延
    });
}

////////////////// SWIPER //////////////////

let featuresSwiper;
let mvSwiper;
let officeSwiper;
let featuresSwiperBool = false;
const featuresBreakPoint = 768; // ブレークポイントを設定

const createMvSwiper = () => {
    mvSwiper = new Swiper("#mv__swiper", {
        autoplay: true,
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        slidesPerView: 1,
        speed: 1000,
        pagination: {
            el: "#mv__swiper .swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                const formattedIndex = (index + 1).toString().padStart(2, "0");
                return `<span class="${className}"><span>#</span>${formattedIndex}</span>`;
            },
        },
    });
};

const createFeaturesSwiper = () => {
    featuresSwiper = new Swiper("#features__swiper", {
        loop: true,
        slidesPerView: 1,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        speed: 800,
        autoplay: true,

        pagination: {
            el: "#features__swiper .swiper-pagination",
            clickable: true,
        },
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

const createOfficeSwiper = () => {
    officeSwiper = new Swiper("#office__swiper", {
        autoplay: true,
        loop: true,
        slidesPerView: 1,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        speed: 800,
        pagination: {
            el: "#office__swiper .swiper-pagination",
            clickable: true,
        },
    });
};

window.addEventListener(
    "load",
    () => {
        createMvSwiper();
        handleFeaturesResize();
        createOfficeSwiper();
    },
    false
);

window.addEventListener("resize", handleFeaturesResize, false);

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
document.addEventListener("DOMContentLoaded", () => {
    const currentURL = window.location.pathname;

    const navItems = document.querySelectorAll(".header__nav-item");

    navItems.forEach((item) => {
        const anchor = item.querySelector("a");
        if (
            anchor &&
            anchor.dataset.current &&
            currentURL.includes(anchor.dataset.current)
        ) {
            item.classList.add("is-current");
        }
    });
});

////////////////// スマホナビをクリックで開きボディにオーバーフローを付与 //////////////////
document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.querySelector(".header__nav-button");
    const closeButton = document.querySelector(".header__nav-button-close");

    if (menuButton) {
        menuButton.addEventListener("click", () => {
            const header = document.querySelector(".header");
            if (header) {
                header.classList.toggle("is-open");
            }
            document.body.classList.add("is-overflow");
        });
    }

    if (closeButton) {
        closeButton.addEventListener("click", () => {
            const header = document.querySelector(".header");
            if (header) {
                header.classList.remove("is-open");
            }
            document.body.classList.remove("is-overflow");
        });
    }
});

////////////////// アコーディオンの開閉 //////////////////

document.addEventListener("DOMContentLoaded", () => {
    const accordions = document.querySelectorAll(".js-accordion");

    const updateAccordionHeight = (accordion) => {
        const content = accordion.querySelector(".js-accordion__content");
        const height = content.scrollHeight;
        content.style.setProperty("--max-height", height + "px");
    };

    const initializeAccordion = (accordion) => {
        const header = accordion.querySelector(".js-accordion__header");
        const content = accordion.querySelector(".js-accordion__content");

        // 初期化
        updateAccordionHeight(accordion);

        // aria-expandedの初期値を設定
        header.setAttribute("aria-expanded", "false");

        const toggleAccordion = () => {
            const isOpen = accordion.classList.toggle("is-open");
            header.setAttribute("aria-expanded", isOpen ? "true" : "false");
        };

        // クリックイベントリスナーを追加
        header.addEventListener("click", toggleAccordion);

        // キーボード操作のためのイベントリスナーを追加
        header.addEventListener("keydown", (event) => {
            if (event.key === "Enter" || event.key === " ") {
                event.preventDefault();
                toggleAccordion();
            }
        });
    };

    accordions.forEach(initializeAccordion);

    // 画面幅が変わったときの高さを再計算
    window.addEventListener("resize", () => {
        accordions.forEach(updateAccordionHeight);
    });
});

////////////////// aタグのスムーズスクロール //////////////////
document.addEventListener("DOMContentLoaded", () => {
    const anchors = document.querySelectorAll('a[href^="#"]');
    const duration = 400; // スクロールの到達時間をミリ秒で設定
    const offsetpx = "200rem"; // スクロール位置をトップから調整するオフセット値（単位付き）

    const getOffsetInPixels = (offset) => {
        const value = parseFloat(offset);
        const unit = offset.match(/[a-zA-Z%]+$/);
        if (!unit) return value;

        switch (unit[0]) {
            case "rem":
                return (
                    value *
                    parseFloat(
                        getComputedStyle(document.documentElement).fontSize
                    )
                );
            case "em":
                return (
                    value * parseFloat(getComputedStyle(document.body).fontSize)
                );
            case "px":
                return value;
            case "%":
                return (value / 100) * window.innerHeight;
            default:
                return value;
        }
    };

    const offsetInPixels = getOffsetInPixels(offsetpx);

    anchors.forEach((anchor) => {
        anchor.addEventListener("click", (e) => {
            const targetId = anchor.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                e.preventDefault();
                const startPosition = window.pageYOffset;
                const targetPosition =
                    targetElement.getBoundingClientRect().top - offsetInPixels;
                const startTime = performance.now();

                const animateScroll = (currentTime) => {
                    const elapsedTime = currentTime - startTime;
                    const progress = Math.min(elapsedTime / duration, 1);
                    window.scrollTo(
                        0,
                        startPosition + targetPosition * progress
                    );
                    if (progress < 1) {
                        requestAnimationFrame(animateScroll);
                    }
                };

                requestAnimationFrame(animateScroll);
            }
        });
    });
});

////////////////// .service__price-title の処理 //////////////////

// .service__price-title が付いていて、かつ、.no-navi が付いていない要素を全て取得
const priceTitles = document.querySelectorAll(
    ".service__price-title:not(.no-navi)"
);

// .service__price-title が存在する場合の処理
if (priceTitles.length > 0) {
    // 親要素 .service__price-box を取得
    const priceBoxes = document.querySelectorAll(".service__price-box");

    // それぞれの .service__price-box にIDを連番で付与
    priceBoxes.forEach((box, index) => {
        const id = `anc-price-${String(index + 1).padStart(2, "0")}`;
        box.id = id; // 既存のIDがあっても上書き
    });

    // それぞれの .service__price-title em のテキストを取得し、親要素の順番を取得
    priceTitles.forEach((title, index) => {
        const emElement = title.querySelector("em");
        if (emElement) {
            const textContent = emElement.textContent;
            const parentBox = title.closest(".service__price-box");
            const parentIndex = Array.from(priceBoxes).indexOf(parentBox);

            // 出力用のa要素を作成
            const linkElement = document.createElement("a");
            linkElement.className = "service__price-nav-link";
            linkElement.href = `#anc-price-${String(parentIndex + 1).padStart(
                2,
                "0"
            )}`;
            linkElement.textContent = textContent;

            // .service__price-nav にa要素を追加
            const navElement = document.querySelector(".service__price-nav");
            if (navElement) {
                navElement.appendChild(linkElement);
            }
        }
    });
}

////////////////// サービスのサイドバーカレント機能 //////////////////
// GSAPライブラリの読み込み
gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", function () {
    // 各 .service__item に ScrollTrigger を設定
    const items = gsap.utils.toArray(".service__item");
    const links = document.querySelectorAll(".service__sidebar-link");
    const topOffset = "-100rem"; // ここでオプションのトップからの距離を調整

    items.forEach((item, index) => {
        ScrollTrigger.create({
            trigger: item,
            start: `${topOffset}px top`, // トリガーの要素のトップがビューポートのトップからオフセットされた位置に達したとき
            end: "bottom top",
            onEnter: () => updateSidebarLink(index),
            onLeaveBack: () => updateSidebarLink(index - 1),
        });
    });

    function updateSidebarLink(index) {
        links.forEach((link) => link.classList.remove("is-current"));
        if (index >= 0 && index < links.length) {
            links[index].classList.add("is-current");
        }
    }
});
