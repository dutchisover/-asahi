document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM fully loaded and parsed");

    const form = document.querySelector(".wpcf7-form");
    const confirmButton = document.querySelector("#js-confirm");
    const inputs = form.querySelectorAll("input, textarea, select");

    function validateForm() {
        // 短い遅延を設定してエラーメッセージの表示を待つ
        setTimeout(() => {
            const errorMessages = form.querySelectorAll(".wpcf7-not-valid-tip");

            const isValid = errorMessages.length === 0;

            if (isValid) {
                confirmButton.classList.remove("disabled");
            } else {
                confirmButton.classList.add("disabled");
            }
        }, 100); // 100ミリ秒の遅延
    }

    // 入力要素のイベントリスナー
    inputs.forEach((input, index) => {
        input.addEventListener("change", () => {
            validateForm();
        });
        input.addEventListener("input", () => {
            validateForm();
        });
    });

    // Contact Form 7のイベントリスナー
    document.addEventListener("wpcf7invalid", () => {
        validateForm();
    });

    document.addEventListener("wpcf7mailsent", () => {
        validateForm();
    });

    // フォーム全体の変更を監視
    const observer = new MutationObserver((mutations) => {
        validateForm();
    });

    observer.observe(form, {
        childList: true,
        subtree: true,
        attributes: true,
        characterData: true,
    });

    // 確認モーダルの表示
    const confirmModal = document.querySelector("#confirm-modal");
    const returnButton = document.querySelector("#js-return");
    const submitButton = confirmModal.querySelector('input[type="submit"]');

    function closeModal() {
        confirmModal.classList.remove("active");
    }

    function disableConfirmButton() {
        confirmButton.classList.add("disabled");
    }

    confirmButton.addEventListener("click", function (e) {
        e.preventDefault();

        if (confirmButton.classList.contains("disabled")) return;

        // フォームの値を確認モーダルに転記
        form.querySelectorAll("input, textarea, select").forEach((input) => {
            const name = input.name;
            let value = "";

            if (input.type === "checkbox") {
                // チェックボックスの処理を修正
                const checkedBoxes = form.querySelectorAll(
                    `input[name="${name}"]:checked`
                );
                value = Array.from(checkedBoxes)
                    .map((cb) => cb.nextElementSibling.textContent.trim())
                    .join(", ");
            } else if (input.type === "radio") {
                const checkedRadio = form.querySelector(
                    `input[name="${name}"]:checked`
                );
                value = checkedRadio
                    ? checkedRadio.nextElementSibling.textContent.trim()
                    : "";
            } else {
                value = input.value;
            }

            const confirmElement = confirmModal.querySelector(
                `[data-name="${name}"]`
            );
            if (confirmElement) {
                confirmElement.textContent = value;
            }
        });

        // 相談したいサービス（チェックボックス）の特別処理
        const serviceCheckboxes = form.querySelectorAll(
            'input[name="service[]"]:checked'
        );
        const serviceValues = Array.from(serviceCheckboxes).map((cb) =>
            cb.nextElementSibling.textContent.trim()
        );
        const serviceConfirmElement = confirmModal.querySelector(
            '[data-name="service"]'
        );
        if (serviceConfirmElement) {
            serviceConfirmElement.textContent = serviceValues.join(", ");
        }

        // モーダルを表示
        confirmModal.classList.add("active");
    });

    // 戻るボタンのクリックイベント
    returnButton.addEventListener("click", closeModal);

    // 送信ボタンのクリックイベント
    submitButton.addEventListener("click", function () {
        closeModal();
        // ここにフォーム送信の処理を追加することもできます
    });

    // Contact Form 7の送信完了イベントをリッスン
    document.addEventListener("wpcf7mailsent", function (event) {
        closeModal();
        disableConfirmButton();
    });

    disableConfirmButton();
});

//
