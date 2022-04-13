<?php include "include/header.php"; ?>
<?php
switch ($_GET['site']) {
    case 'discount':
        $header = 'Получите скидку до 35% на лиды';
        $text = 'Скидка будет доступна после регистрации';
        $thanks_text_p1 = 'Ваш промокод на скидку ';
        $thanks_text_p2 = 'Для активации скидки свяжитесь с Тех.поддержкой и озвучьте промокод';
        $code = '352022';
        $btn_text = 'Связаться с тех.поддержкой';
        break;

    case 'money':
        $header = 'Получите +2 000₽ на баланс личного кабинета';
        $text = 'Средства будут доступны после регистрации';
        $thanks_text = 'Скидка будет доступна после регистрации';
        $thanks_text_p1 = 'Ваш промокод на скидку ';
        $thanks_text_p2 = 'Для активации скидки свяжитесь с Тех.поддержкой и озвучьте промокод';
        $code = '20002022';
        $btn_text = 'Связаться с тех.поддержкой';
        break;

    case 'clients':
        $header = '«Как удержать текущих клиентов и привлечь новых»';
        $text = 'Кейс будет доступен после регистрации';
        $thanks_text_p1 = 'Кейс «Как удержать текущих клиентов и привлечь новых» доступен для скачивания в личном кабинете';
        $thanks_text_p2 = '';
        $code = '';
        $btn_text = 'Перейти в личный кабинет';
        break;
}
?>

<div class="d-flex justify-content-between wrapper" id="quiz">
    <div class="w-50">
        <h2><?= $header ?></h2>
        <div id="step-1">
            <p class="form-discount__text-1_step-1">
                <?= $text ?>
            </p>

            <form action="">
                <div class="d-flex flex-column">
                    <input id="name" class="mt-5 " type="text" placeholder="Ваше имя" required>
                    <input id="phone" class="mt-3" type="text" placeholder="Номер телефона" required>
                    <div class="form__btn-brick btn-next">
                        Получить скидку
                    </div>
                    <p class="form-discount__info-1_step-1 w-50">
                        *отправляя формы на данном сайте, вы даете согласие
                        на обработку персональных данных в соответствии с 152-ФЗ
                    </p>
                </div>
            </form>
        </div>

        <div id="step-2" class="hidden">
            <p class="form-discount__text-1_step-2">
                Введите код, полученный на номер телефон +7(999) 999-99-99
                <a href="" class="text-color">(изменить)</a>
            </p>

            <form action="">
                <div class="d-flex flex-column">
                    <div class="form__text-container d-flex flex-row justify-content-start align-items-baseline flex-wrap">
                        <input class="step-2__input-code mt-5 mr-4" id="code" type="text" placeholder="Код" required>
                        <p>
                            <a class="form__text-resend flex-wrap btn-next">
                                Отправить код повторно через 59с
                            </a>
                        </p>
                    </div>
                    <p class="form-discount__info-1_step-2">
                        Если Вы не получили код в течении 5 минут —
                        напишите нам на почту
                        <a href="mailto::info@femidafors.ru" class="text-color">info@femidafors.ru</a>
                    </p>
                    <div class="form__btn-brick btn-next mt-5" id="code-btn">
                        Отправить код
                    </div>
                </div>
            </form>
        </div>

        <div id="step-3" class="hidden">
            <p class="form-discount__text-1_step-3">
                <?= $thanks_text_p1 ?><span class="text-color font-weight-bold"><?= $code ?></span>
            </p>
            <p class="mt-4">
                <?= $thanks_text_p2 ?>
            </p>
            <a href="/">
                <div class="form__btn-brick">
                    <?= $btn_text ?>
                </div>
            </a>
        </div>
    </div>

    <div class="figures">
        <div class="form-discount__figure-1 <?= $_GET['site'] === 'discount' ? '' : 'hidden' ?>">
            <svg width="336" height="392" viewBox="0 0 336 392" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M46.7538 248.65L256.242 248.65M334.391 59.0744C337.311 71.7628 329.447 84.4285 316.825 87.3642C304.204 90.2999 291.605 82.3937 288.685 69.7053C285.765 57.0169 293.629 44.3512 306.251 41.4155C318.872 38.4798 331.471 46.386 334.391 59.0744ZM1.6089 253.005C-1.31126 240.317 6.55314 227.651 19.1745 224.715C31.7959 221.78 44.3948 229.686 47.315 242.374C50.2352 255.063 42.3708 267.729 29.7494 270.664C17.128 273.6 4.52906 265.694 1.6089 253.005ZM169.092 391C120.809 391 81.6684 351.651 81.6684 303.113V88.8873C81.6684 40.3485 120.809 1 169.092 1C217.374 1 256.515 40.3485 256.515 88.8873V303.113C256.515 351.651 217.374 391 169.092 391ZM254.302 391C218.95 391 190.292 362.19 190.292 326.65V174.55C190.292 139.01 218.95 110.2 254.302 110.2C289.654 110.2 318.312 139.01 318.312 174.55V326.65C318.312 362.19 289.654 391 254.302 391Z"
                      stroke="#F4F7FE" stroke-opacity="0.7"/>
            </svg>
        </div>

        <div class="form-discount__figure-2 <?= $_GET['site'] === 'money' ? '' : 'hidden' ?>">
            <svg width="374" height="390" viewBox="0 0 374 390" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M135.037 183.3C150.107 183.3 162.324 171.077 162.324 156C162.324 140.923 150.107 128.7 135.037 128.7C119.966 128.7 107.75 140.923 107.75 156C107.75 171.077 119.966 183.3 135.037 183.3ZM135.037 187.2C152.26 187.2 166.222 173.231 166.222 156C166.222 138.769 152.26 124.8 135.037 124.8C117.814 124.8 103.851 138.769 103.851 156C103.851 173.231 117.814 187.2 135.037 187.2Z"
                      fill="#F4F7FE" fill-opacity="0.7"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M369.885 292.646L159.402 171.34L161.348 167.96L371.83 289.267L369.885 292.646Z" fill="#F4F7FE"
                      fill-opacity="0.7"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M135.037 4.50333L3.89818 80.2517V231.748L135.037 307.497L266.175 231.748V80.2517L135.037 4.50333ZM270.074 78L135.037 0L0 78V234L135.037 312L270.074 234V78Z"
                      fill="#F4F7FE" fill-opacity="0.7"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M205.204 4.50333L40.3062 99.7517V290.248L205.204 385.497L370.102 290.248V99.7517L205.204 4.50333ZM374 97.5L205.204 0L36.408 97.5V292.5L205.204 390L374 292.5V97.5Z"
                      fill="#F4F7FE" fill-opacity="0.7"/>
            </svg>
        </div>

        <div class="form-discount__figure-3 <?= $_GET['site'] === 'clients' ? '' : 'hidden' ?>">
            <svg width="392" height="392" viewBox="0 0 392 392" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M196 260.35C196 295.89 224.81 324.7 260.35 324.7C295.89 324.7 324.7 295.89 324.7 260.35C324.7 224.81 295.89 196 260.35 196C224.81 196 196 224.81 196 260.35ZM196 260.35H12.7M391 196C391 303.696 303.696 391 196 391C88.3045 391 1 303.696 1 196C1 88.3045 88.3045 1 196 1C303.696 1 391 88.3045 391 196ZM348.1 172.6C348.1 185.523 337.623 196 324.7 196C311.777 196 301.3 185.523 301.3 172.6C301.3 159.677 311.777 149.2 324.7 149.2C337.623 149.2 348.1 159.677 348.1 172.6Z"
                      stroke="#F4F7FE" stroke-opacity="0.7"/>
            </svg>
        </div>
    </div>

</div>
<?php include "include/footer.php"; ?>
