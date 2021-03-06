<?php
session_start();
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/global.css">

    <link rel="stylesheet" href="./css/home.css">

    <link rel="stylesheet" href="./css/media.css">

    <link rel="stylesheet" href="./css/select.css">

</head>
<body>
    <header class="header">
        <nav class="nav" id="nav">
            <div class="nav__wrapper">
                <div class="nav-logo">
                    <a class="nav-logo__link" href="#home">
                        <img class="nav-logo__img" src="./img/nav-logo.svg" alt="Школа"> ШКОЛА
                    </a>
                </div>

                <div class="nav-burger" id="nav-open">
                    <img src="./img/nav-burger.svg" alt="Меню">
                </div>
            </div>

            <div class="nav__wrapper">
                <ul class="nav-list">
                    <li class="nav-list__item">
                        <a class="nav-list__link" href="#home">Очима школи</a>
                    </li>

                    <li class="nav-list__item">
                        <a class="nav-list__link" href="#purpose">Навіщо навчати</a>
                    </li>

                    <li class="nav-list__item">
                        <a class="nav-list__link" href="#about">Про нас</a>
                    </li>

                    <li class="nav-list__item">
                        <a class="nav-list__link" href="#team">Команда</a>
                    </li>

                    <li class="nav-list__item">
                        <a class="nav-list__link" href="#devs">Розробки</a>
                    </li>

                    <li class="nav-list__item">
                        <a class="nav-list__link" href="#contact">Контакти</a>
                    </li>

                    <li class="nav-list__item">
                        <a class="nav-list__link" href="./blog.php">Блог</a>
                    </li>
                </ul>

                <div class="nav-close">
                    <img class="nav-close__img" src="./img/nav-close-icon.svg" alt="Закрити">
                </div>
            </div>

            <div class="nav__wrapper">
                <a class="nav__link nav-open__modal">вартість навчання</a>

                <a class="nav__link" href="#contact">ЗАМОВИТИ ДЗВІНОК</a>
            </div>

            <div class="nav__wrapper">
                <a class="nav__social" href="#">facebook</a>
                <a class="nav__social" href="#">instagram</a>
                <a class="nav__social" href="#">youtube</a>
            </div>
        </nav>
    </header>

    <nav class="nav sidenav">
        <div class="nav__wrapper">
            <div class="nav-logo">
                <a class="nav-logo__link" href="#home">
                    <img class="nav-logo__img" src="./img/nav-logo.svg" alt="Школа"> ШКОЛА
                </a>
            </div>
        </div>

        <div class="nav__wrapper">
            <ul class="nav-list">
                <li class="nav-list__item">
                    <a class="nav-list__link" href="#home">Очима школи</a>
                </li>

                <li class="nav-list__item">
                    <a class="nav-list__link" href="#purpose">Навіщо навчати</a>
                </li>

                <li class="nav-list__item">
                    <a class="nav-list__link" href="#about">Про нас</a>
                </li>

                <li class="nav-list__item">
                    <a class="nav-list__link" href="#team">Команда</a>
                </li>

                <li class="nav-list__item">
                    <a class="nav-list__link" href="#devs">Розробки</a>
                </li>

                <li class="nav-list__item">
                    <a class="nav-list__link" href="#contact">Контакти</a>
                </li>

                <li class="nav-list__item">
                    <a class="nav-list__link" href="./blog.php">Блог</a>
                </li>
            </ul>

            <div class="nav-close" id="nav-close">
                <img class="nav-close__img" src="./img/nav-close-icon.svg" alt="Закрити">
            </div>
        </div>

        <div class="nav__wrapper">
            <a class="nav__link nav-open__modal" href="#">вартість навчання</a>

            <a class="nav__link" href="#">ЗАМОВИТИ ДЗВІНОК</a>
        </div>

        <div class="nav__wrapper">
            <a class="nav__social" href="#">facebook</a>
            <a class="nav__social" href="#">instagram</a>
            <a class="nav__social" href="#">youtube</a>
        </div>
    </nav>

    <section class="calc">
        <div class="calc-header">
            <h2 class="calc__title">Розрахуйте вартість навчання</h2>
            <div class="nav-close nav-close__modal">
                <img class="nav-close__img" src="./img/nav-close-icon.svg" alt="Закрити">
            </div>
        </div>

        <div class="calc-main">
            <div class="calc-main_width">
                <h4 class="calc-main__title">Основне</h4>

                <div class="select">
                    <div class="select-header">
                        <p class="select__text">Оберіть клас
                        <span class="select__span"></span></p>
                        <div class="select-arrow">
                            <div class="select-arrow__item"></div>
                            <div class="select-arrow__item"></div>
                        </div>
                    </div>

                    <div class="select-content select-content__year">
                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-0" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">Дошкільна підготовка</span>
                        </label>

                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-1" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">1 клас</span>
                        </label>

                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-2" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">2 клас</span>
                        </label>

                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-3" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">3 клас</span>
                        </label>

                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-4" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">4 клас</span>
                        </label>

                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-5" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">5 клас</span>
                        </label>

                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-6" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">6 клас</span>
                        </label>

                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-7" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">7 клас</span>
                        </label>

                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-8" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">8 клас</span>
                        </label>

                        <label class="select-item__year">
                            <input class="select-item__input select-item__input_radio" id="school-year-9" type="radio" name="school__year">
                            <span class="select-item__radio"></span>
                            <span class="select-item__text">9 клас</span>
                        </label>
                    </div>
                </div>

                <div class="calc-main__wrapper">

                    <h5 class="calc-main__subtitle">Харчування:</h5>

                    <label class="g-radio__label calc-main__food">
                        ОБІД <span class="calc-main__food_blue">(&#8372;80/день)</span>
                        <input type="radio" class="calc-food__radio g-radio__input" name="calc-food" value="1600">
                        <span class="g-radio__span"></span>
                    </label>

                    <label class="g-radio__label calc-main__food">
                        ПОВНИЙ РАЦІОН <span class="calc-main__food_blue">(&#8372;195/день)</span>
                        <input type="radio" class="calc-food__radio g-radio__input" name="calc-food" value="3900">
                        <span class="g-radio__span"></span>
                    </label>

                    <label class="g-radio__label calc-main__food">
                        БЕЗ ХАРЧУВАННЯ
                        <input type="radio" class="calc-food__radio g-radio__input" name="calc-food" value="0" checked>
                        <span class="g-radio__span"></span>
                    </label>

                    <label class="g-checkbox__label calc-main__bus">
                        ШКІЛЬНИЙ АВТОБУС <span class="calc-main__bus_blue">(&#8372;1800/міс)</span>
                        <input type="checkbox" class="g-checkbox__input" id="schoolbus" name="schoolbus" value="1800">
                        <span class="g-checkbox__span"></span>
                    </label>

                    <h6 class="calc-main-pay__header">ОПЛАТА ЗА:</h6>

                    <div class="calc-main-pay">
                        <div class="calc-main-pay_flex">
                            <label class="g-radio__label calc-main-pay__title">
                                <span class="calc-main-pay__span">МІСЯЦЬ</span>
                                <input id="calc-time-month" type="radio" class="g-radio__input" name="paytime" checked>
                                <span class="g-radio__span"></span>
                            </label>

                            <label class="g-radio__label calc-main-pay__title">
                                <span class="calc-main-pay__span">КВАРТАЛ</span>
                                <input id="calc-time-quarter" type="radio" class="g-radio__input" name="paytime">
                                <span class="g-radio__span"></span>
                            </label>
                        </div>

                        <div class="calc-main-pay_flex">


                            <label class="g-radio__label calc-main-pay__title">
                                <span class="calc-main-pay__span">ПІВРОКУ</span>
                                <input id="calc-time-halfyear" type="radio" class="g-radio__input" name="paytime">
                                <span class="g-radio__span"></span>
                            </label>

                            <label class="g-radio__label calc-main-pay__title">
                                <span class="calc-main-pay__span">РІК</span>
                                <input id="calc-time-year" type="radio" class="g-radio__input" name="paytime">
                                <span class="g-radio__span"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <h5 class="calc-main__deposit">ЩОМІСЯЧНИЙ ПЛАТІЖ
                    <img id="tooltip-1" class="calc-main__tooltip" src="./img/calc-tooltip.svg" alt="Інформація">
                    <div class="g-borders" id="tooltip-1-text">
                        <div class="g-borders__content">
                            <h2 class="g-borders__title">Вноситься тільки один раз, при вступі дитини в школу.</h2>
                        </div>
                    </div>
                    <span  class="calc-main__deposit_blue" id="school-year-output-1">&#8372;0</span>
                </h5>

                <h5 class="calc-main__deposit">ВСТУПНИЙ РАЗОВИЙ ВНЕСОК
                    <img id="tooltip-2" class="calc-main__tooltip calc-main__tooltip_right" src="./img/calc-tooltip.svg" alt="Інформація">
                    <div class="g-borders" id="tooltip-2-text">
                        <div class="g-borders__content">
                            <h2 class="g-borders__title">Вноситься тільки один раз, при вступі дитини в школу.</h2>
                        </div>
                    </div>
                    <span  class="calc-main__deposit_blue" id="school-year-output-2">&#8372;0</span>
                </h5>

                <h5 class="calc-main__deposit">РАЗОВИЙ ЩОРІЧНИЙ ВНЕСОК
                    <img id="tooltip-3" class="calc-main__tooltip calc-main__tooltip_righter" src="./img/calc-tooltip.svg" alt="Інформація">
                    <div class="g-borders" id="tooltip-3-text">
                        <div class="g-borders__content">
                            <h2 class="g-borders__title">Вноситься тільки один раз, при вступі дитини в школу.</h2>
                        </div>
                    </div>
                    <span  class="calc-main__deposit_blue" id="school-year-output-3">&#8372;0</span>
                </h5>
            </div>


            <div class="calc-main__item">
                <h4 class="calc-main__title">ДОДАТКОВІ СЕКЦІЇ</h4>

                <div class="select">
                    <div class="select-header">
                        <p class="select__text">Спорт
                        <span class="select__span"></span></p>
                        <div class="select-arrow">
                            <div class="select-arrow__item"></div>
                            <div class="select-arrow__item"></div>
                        </div>
                    </div>

                    <div class="select-content">
                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="500">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Карате
                            </span>
                            <span class="select-item__text_blue">(&#8372;500/місяць)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="1200">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Фехтування
                            </span>
                            <span class="select-item__text_blue">(&#8372;1200/місяць)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="1600">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Великий теніс</span>
                            <span class="select-item__text_blue">(&#8372;1600/місяць)</span>
                        </label>
                    </div>
                </div>

                <div class="select">
                    <div class="select-header">
                        <p class="select__text">Музика
                        <span class="select__span"></span></p>
                        <div class="select-arrow">
                            <div class="select-arrow__item"></div>
                            <div class="select-arrow__item"></div>
                        </div>
                    </div>

                    <div class="select-content">
                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="150">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Вокал</span>
                            <span class="select-item__text_blue">(&#8372;150/місяць)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="180">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Синтезатор</span>
                            <span class="select-item__text_blue">(&#8372;180/місяць)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="250">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Укулеле</span>
                            <span class="select-item__text_blue">(&#8372;250/місяць)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="250">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Барабани</span>
                            <span class="select-item__text_blue">(&#8372;250/місяць)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="250">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Гітара</span>
                            <span class="select-item__text_blue">(&#8372;250/місяць)</span>
                        </label>
                    </div>
                </div>

                <div class="select">
                    <div class="select-header">
                        <p class="select__text">Мистецтво
                        <span class="select__span"></span></p>
                        <div class="select-arrow">
                            <div class="select-arrow__item"></div>
                            <div class="select-arrow__item"></div>
                        </div>
                    </div>

                    <div class="select-content">
                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="250">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Живопис олійними фарбами</span>
                            <span class="select-item__text_blue">(&#8372;250/місяць + холст)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="500">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Театральна студія</span>
                            <span class="select-item__text_blue">(&#8372;500/місяць - 60хв)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="700">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Театральна студія</span>
                            <span class="select-item__text_blue">(&#8372;700/місяць - 90хв)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="600">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Англомовний театр</span>
                            <span class="select-item__text_blue">(&#8372;600/місяць - 60хв)</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="1200">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Англомовний театр</span>
                            <span class="select-item__text_blue">(&#8372;1200/місяць - 120хв)</span>
                        </label>
                    </div>
                </div>

                <div class="select">
                    <div class="select-header">
                        <p class="select__text">Техно + Стратегії
                        <span class="select__span"></span></p>
                        <div class="select-arrow">
                            <div class="select-arrow__item"></div>
                            <div class="select-arrow__item"></div>
                        </div>
                    </div>

                    <div class="select-content">
                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="1200">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Кубіка-Рубіка або пірамідки (курс)</span>
                            <span class="select-item__text_blue">(&#8372;1200/місяць)</span>
                        </label>

                        <label class="select-item select-item_cursor">
                            <input class="select-item__input--checkbox" type="checkbox">
                            <span class="select-item__checkbox select-item__checkbox--none"></span>
                            <span class="select-item__text_fixed">СТЕМ</span>
                            <span class="select-item__program">в програмі</span>
                        </label>

                        <label class="select-item select-item_cursor">
                            <input class="select-item__input--checkbox" type="checkbox">
                            <span class="select-item__checkbox select-item__checkbox--none"></span>
                            <span class="select-item__text_fixed">Шахи</span>
                            <span class="select-item__program">в програмі</span>
                        </label>

                        <label class="select-item">
                            <input class="select-item__input" type="checkbox" value="800">
                            <span class="select-item__checkbox"></span>
                            <span class="select-item__text">Робототехніка</span>
                            <span class="select-item__text_blue">(&#8372;800/місяць)</span>
                        </label>

                        <label class="select-item select-item_cursor">
                            <input class="select-item__input--checkbox" type="checkbox">
                            <span class="select-item__checkbox select-item__checkbox--none"></span>
                            <span class="select-item__text_fixed">Веселі експерименти</span>
                            <span class="select-item__program">в програмі</span>
                        </label>
                    </div>
                </div>

                <p class="calc-main__text">Адміністрація розглядає можливості відкриття додаткових секцій для груп бажаючих від 5 чоловік</p>

                <form class="calc-main-form" action="#">
                    <input class="calc-main-form__input g-input" type="text" placeholder="Запропонувати секцію" required>

                    <button class="calc-main-form__btn" type="submit">
                        <img class="calc-main-form__img" src="./img/send-arrow.svg" alt="Надіслати">
                    </button>
                </form>
            </div>
        </div>

        <div class="calc-footer">

            <div class="calc-footer__show g-input">
                <span class="calc__output">&#8372;0</span>
            </div>

            <input id="calc-to-contact" class="calc-footer__submit g-input g-submit" type="submit" value="ВІДПРАВИТИ ЗАЯВКУ">
        </div>
    </section>

    <main class="main">
        <section class="home" id="home">
            <div class="home__block home__block_minWidth">
                <div class="home__block_flex">
                    <div class="tab"  data-tilt data-tilt-reverse="true" data-tilt-scale="1.05">
                        <div class="tab-btn">
                            <div class="tab-btn__item tab-btn__item_dark"></div>
                            <div class="tab-btn__item tab-btn__item_light"></div>
                            <div class="tab-btn__item tab-btn__item_long"></div>
                            <div class="tab-btn__item tab-btn__item--skew"></div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-content_border">
                                <h2 class="tab-content__title">Навички</h2>
                                <h3 class="tab-content__subtitle">Високі когнітивні</h3>
                                <ul class="tab-content__list">
                                    <li class="tab-content__item">- Розвинута грамотність та письмо</li>
                                    <li class="tab-content__item">- Обчислення та статистична розробка</li>
                                    <li class="tab-content__item">- Критичне мислення</li>
                                    <li class="tab-content__item">- Керування проектами</li>
                                    <li class="tab-content__item">- Креативність</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab" data-tilt  data-tilt-reverse="true" data-tilt-scale="1.05">
                        <div class="tab-btn">
                            <div class="tab-btn__item tab-btn__item_dark"></div>
                            <div class="tab-btn__item tab-btn__item_light"></div>
                            <div class="tab-btn__item tab-btn__item_long"></div>
                            <div class="tab-btn__item tab-btn__item--skew"></div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-content_border">
                                <h2 class="tab-content__title">Навички</h2>
                                <h3 class="tab-content__subtitle">Когнітивні</h3>
                                <ul class="tab-content__list">
                                    <li class="tab-content__item">- Спілкування</li>
                                    <li class="tab-content__item">- Базова грамотність</li>
                                    <li class="tab-content__item">- Обробка інформації</li>
                                    <li class="tab-content__item">- Введення інформації</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home__block_flex">
                    <div class="tab" data-tilt  data-tilt-reverse="true" data-tilt-scale="1.05">
                        <div class="tab-btn">
                            <div class="tab-btn__item tab-btn__item_dark"></div>
                            <div class="tab-btn__item tab-btn__item_light"></div>
                            <div class="tab-btn__item tab-btn__item_long"></div>
                            <div class="tab-btn__item tab-btn__item--skew"></div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-content_border">
                                <h2 class="tab-content__title">Навички</h2>
                                <h3 class="tab-content__subtitle">Цифрові та технологічні</h3>
                                <ul class="tab-content__list">
                                    <li class="tab-content__item">- Базові комп’ютерні навички</li>
                                    <li class="tab-content__item">- Програмування та ІТ-навички</li>
                                    <li class="tab-content__item">- Наукові дослідження та розробки</li>
                                    <li class="tab-content__item">- Розширений аналіз даних та математичні навички</li>
                                    <li class="tab-content__item">- Проектування, інжирінг та технологічні обслуговування</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home__block_flex home__block_margin">
                    <div class="tab" data-tilt  data-tilt-reverse="true" data-tilt-scale="1.05">
                        <div class="tab-btn">
                            <div class="tab-btn__item tab-btn__item_dark"></div>
                            <div class="tab-btn__item tab-btn__item_light"></div>
                            <div class="tab-btn__item tab-btn__item_long"></div>
                            <div class="tab-btn__item tab-btn__item--skew"></div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-content_border">
                                <h2 class="tab-content__title">Навички</h2>
                                <h3 class="tab-content__subtitle">Соціально-економічні</h3>
                                <ul class="tab-content__list">
                                    <li class="tab-content__item">- Емпатія та міжособистісна комунікація</li>
                                    <li class="tab-content__item">- Адаптивність та безперервне навчання</li>
                                    <li class="tab-content__item">- Лідерство та управління іншими</li>
                                    <li class="tab-content__item">- Ініціативність та винахідливість</li>
                                    <li class="tab-content__item">- Викладання та навчання інших</li>
                                    <li class="tab-content__item">- Спілкування та переговори</li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab" data-tilt  data-tilt-reverse="true" data-tilt-scale="1.05">
                        <div class="tab-btn">
                            <div class="tab-btn__item tab-btn__item_dark"></div>
                            <div class="tab-btn__item tab-btn__item_light"></div>
                            <div class="tab-btn__item tab-btn__item_long"></div>
                            <div class="tab-btn__item tab-btn__item--skew"></div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-content_border">
                                <h2 class="tab-content__title">Навички</h2>
                                <h3 class="tab-content__subtitle">Фізичні</h3>
                                <ul class="tab-content__list">
                                    <li class="tab-content__item">- Навігація</li>
                                    <li class="tab-content__item">- Фізична сила</li>
                                    <li class="tab-content__item">- Операція з обладнанням</li>
                                    <li class="tab-content__item">- Спостереження та увага</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home__block home-circle" data-tilt data-tilt-full-page-listening data-tilt-reverse="true">
                <div class="home-circle__block home-circle__block-first">
                    <img class="home-circle__boy" src="./img/home-boy.png" alt="Учень">
                    <img class="home-circle__img home-circle__img_mobile" src="./img/home-circle-1.svg" alt="Коло">
                </div>

                <div class="home-circle__block home-circle__block_centered home-circle__block-second">
                    <img class="home-circle__img home-circle__img_rotation" src="./img/home-circle-2.svg" alt="Коло">
                </div>

                <div class="home-circle__block home-circle__block-third">
                    <img class="home-circle__img" src="./img/home-circle-3.svg" alt="Коло">
                </div>
            </div>

            <div class="home__block">
                <div class="home__block_flex home__block-y">
                    <div class="tab tab_left" data-tilt  data-tilt-reverse="true" data-tilt-scale="1.05">
                        <div class="tab-btn">
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item--skew tab-btn-y__item"></div>
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item_long tab-btn-y__item"></div>
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item_light tab-btn-y__item tab-btn-y__item_light"></div>
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item_dark tab-btn-y__item tab-btn-y__item_dark"></div>
                        </div>

                        <div class="tab-content tab-content_left tab-content-y">
                            <div class="tab-content_border tab-content_borderLeft tab-content_border-y">
                                <h2 class="tab-content__title">Мислення</h2>
                                <ul class="tab-content__list">
                                    <li class="tab-content__item">- Оперує зв’язками</li>
                                    <li class="tab-content__item">- Оперує ролями</li>
                                    <li class="tab-content__item">- Оперує способами</li>
                                    <li class="tab-content__item">- Впорядковує</li>
                                    <li class="tab-content__item">- Розрізняє</li>
                                    <li class="tab-content__item">- Ідентифікує</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home__block_flex home__block-p">
                    <div class="tab tab_left" data-tilt  data-tilt-reverse="true" data-tilt-scale="1.05">
                        <div class="tab-btn">
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item--skew tab-btn-p__item"></div>
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item_long tab-btn-p__item"></div>
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item_light tab-btn-p__item tab-btn-p__item_light"></div>
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item_dark tab-btn-p__item tab-btn-p__item_dark"></div>
                        </div>

                        <div class="tab-content tab-content_left tab-content-p">
                            <div class="tab-content_border tab-content_borderLeft tab-content_border-p">
                                <h2 class="tab-content__title">Творчість</h2>
                                <ul class="tab-content__list">
                                    <li class="tab-content__item">- Оперує сенсами</li>
                                    <li class="tab-content__item">- Оперує іноваціями</li>
                                    <li class="tab-content__item">- Оперує парадоксами</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home__block_flex home__block-w">
                    <div class="tab tab_left" data-tilt  data-tilt-reverse="true" data-tilt-scale="1.05">
                        <div class="tab-btn">
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item--skew tab-btn-w__item"></div>
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item_long tab-btn-w__item"></div>
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item_light tab-btn-w__item tab-btn-w__item_light"></div>
                            <div class="tab-btn__item tab-btn__item_left tab-btn__item_dark tab-btn-w__item tab-btn-w__item_dark"></div>
                        </div>

                        <div class="tab-content tab-content_left tab-content-w">
                            <div class="tab-content_border tab-content_borderLeft tab-content_border-w">
                                <h2 class="tab-content__title">Життєвий сценарій</h2>
                                <ul class="tab-content__list">
                                    <li class="tab-content__item">- Переможець: Я+ та й Ти+</li>
                                    <li class="tab-content__item">- НеПереможець: Я+, а Ти-</li>
                                    <li class="tab-content__item">- Втікач: Я-, а Ти+</li>
                                    <li class="tab-content__item">- Почекун: Я-, а Ти-</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="home__title">Дитина очима школи &#8220;Галілео&#8221;</h1>

            <h2 class="home__subtitle">Ми навчаємо не наосліп</h2>

            <a class="g-arrow__link" href="#purpose">
                <img class="g-arrow__down" src="./img/arrow-down.svg" alt="Вниз">
            </a>
        </section>

        <section class="home home_mobile" id="home">

            <div class="home__block home-circle">
                <div class="home-circle__block home-circle__block-first">
                    <img class="home-circle__boy" src="./img/home-boy.png" alt="Учень">
                    <img class="home-circle__img home-circle__img_mobile" src="./img/home-circle-1.svg" alt="Коло">
                </div>

                <div class="home-circle__block home-circle__block_centered home-circle__block-second" id="circleBlock">
                    <img class="home-circle__img home-circle__img_rotation" src="./img/home-circle-m-2.svg" alt="Коло">
                </div>

                <div class="home-circle__block home-circle__block-third">
                    <img class="home-circle__img" src="./img/home-circle-3.svg" alt="Коло">
                </div>
            </div>

            <div class="home__block_flex home-slider col-md-12">
                <div class="tab">
                    <div class="tab-btn">
                        <div class="tab-btn__item tab-btn__item_dark"></div>
                        <div class="tab-btn__item tab-btn__item_light"></div>
                        <div class="tab-btn__item tab-btn__item_long"></div>
                        <div class="tab-btn__item tab-btn__item--skew"></div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-content_border">
                            <h2 class="tab-content__title">Навички</h2>
                            <h3 class="tab-content__subtitle">Високі когнітивні</h3>
                            <ul class="tab-content__list">
                                <li class="tab-content__item">- Розвинута грамотність та письмо</li>
                                <li class="tab-content__item">- Обчислення та статистична розробка</li>
                                <li class="tab-content__item">- Критичне мислення</li>
                                <li class="tab-content__item">- Керування проектами</li>
                                <li class="tab-content__item">- Креативність</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab">
                    <div class="tab-btn">
                        <div class="tab-btn__item tab-btn__item_dark"></div>
                        <div class="tab-btn__item tab-btn__item_light"></div>
                        <div class="tab-btn__item tab-btn__item_long"></div>
                        <div class="tab-btn__item tab-btn__item--skew"></div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-content_border">
                            <h2 class="tab-content__title">Навички</h2>
                            <h3 class="tab-content__subtitle">Когнітивні</h3>
                            <ul class="tab-content__list">
                                <li class="tab-content__item">- Спілкування</li>
                                <li class="tab-content__item">- Базова грамотність</li>
                                <li class="tab-content__item">- Обробка інформації</li>
                                <li class="tab-content__item">- Введення інформації</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab">
                        <div class="tab-btn">
                            <div class="tab-btn__item tab-btn__item_dark"></div>
                            <div class="tab-btn__item tab-btn__item_light"></div>
                            <div class="tab-btn__item tab-btn__item_long"></div>
                            <div class="tab-btn__item tab-btn__item--skew"></div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-content_border">
                                <h2 class="tab-content__title">Навички</h2>
                                <h3 class="tab-content__subtitle">Цифрові та технологічні</h3>
                                <ul class="tab-content__list">
                                    <li class="tab-content__item">- Базові комп’ютерні навички</li>
                                    <li class="tab-content__item">- Програмування та ІТ-навички</li>
                                    <li class="tab-content__item">- Наукові дослідження та розробки</li>
                                    <li class="tab-content__item">- Розширений аналіз даних та математичні навички</li>
                                    <li class="tab-content__item">- Проектування, інжирінг та технологічні обслуговування</li>

                                </ul>
                            </div>
                        </div>
                </div>

                <div class="tab">
                    <div class="tab-btn">
                        <div class="tab-btn__item tab-btn__item_dark"></div>
                        <div class="tab-btn__item tab-btn__item_light"></div>
                        <div class="tab-btn__item tab-btn__item_long"></div>
                        <div class="tab-btn__item tab-btn__item--skew"></div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-content_border">
                            <h2 class="tab-content__title">Навички</h2>
                            <h3 class="tab-content__subtitle">Соціально-економічні</h3>
                            <ul class="tab-content__list">
                                <li class="tab-content__item">- Емпатія та міжособистісна комунікація</li>
                                <li class="tab-content__item">- Адаптивність та безперервне навчання</li>
                                <li class="tab-content__item">- Лідерство та управління іншими</li>
                                <li class="tab-content__item">- Ініціативність та винахідливість</li>
                                <li class="tab-content__item">- Викладання та навчання інших</li>
                                <li class="tab-content__item">- Спілкування та переговори</li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab">
                    <div class="tab-btn">
                        <div class="tab-btn__item tab-btn__item_dark"></div>
                        <div class="tab-btn__item tab-btn__item_light"></div>
                        <div class="tab-btn__item tab-btn__item_long"></div>
                        <div class="tab-btn__item tab-btn__item--skew"></div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-content_border">
                            <h2 class="tab-content__title">Навички</h2>
                            <h3 class="tab-content__subtitle">Фізичні</h3>
                            <ul class="tab-content__list">
                                <li class="tab-content__item">- Навігація</li>
                                <li class="tab-content__item">- Фізична сила</li>
                                <li class="tab-content__item">- Операція з обладнанням</li>
                                <li class="tab-content__item">- Спостереження та увага</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab tab_left">
                    <div class="tab-btn">
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item--skew tab-btn-w__item"></div>
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item_long tab-btn-w__item"></div>
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item_light tab-btn-w__item tab-btn-w__item_light"></div>
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item_dark tab-btn-w__item tab-btn-w__item_dark"></div>
                    </div>

                    <div class="tab-content tab-content_left tab-content-w">
                        <div class="tab-content_border tab-content_borderLeft tab-content_border-w">
                            <h2 class="tab-content__title">Життєвий сценарій</h2>
                            <ul class="tab-content__list">
                                <li class="tab-content__item">- Переможець: Я+ та й Ти+</li>
                                <li class="tab-content__item">- НеПереможець: Я+, а Ти-</li>
                                <li class="tab-content__item">- Втікач: Я-, а Ти+</li>
                                <li class="tab-content__item">- Почекун: Я-, а Ти-</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab tab_left">
                    <div class="tab-btn">
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item--skew tab-btn-p__item"></div>
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item_long tab-btn-p__item"></div>
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item_light tab-btn-p__item tab-btn-p__item_light"></div>
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item_dark tab-btn-p__item tab-btn-p__item_dark"></div>
                    </div>

                    <div class="tab-content tab-content_left tab-content-p">
                        <div class="tab-content_border tab-content_borderLeft tab-content_border-p">
                            <h2 class="tab-content__title">Творчість</h2>
                            <ul class="tab-content__list">
                                <li class="tab-content__item">- Оперує сенсами</li>
                                <li class="tab-content__item">- Оперує іноваціями</li>
                                <li class="tab-content__item">- Оперує парадоксами</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab tab_left">
                    <div class="tab-btn">
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item--skew tab-btn-y__item"></div>
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item_long tab-btn-y__item"></div>
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item_light tab-btn-y__item tab-btn-y__item_light"></div>
                        <div class="tab-btn__item tab-btn__item_left tab-btn__item_dark tab-btn-y__item tab-btn-y__item_dark"></div>
                    </div>

                    <div class="tab-content tab-content_left tab-content-y">
                        <div class="tab-content_border tab-content_borderLeft tab-content_border-y">
                            <h2 class="tab-content__title">Мислення</h2>
                            <ul class="tab-content__list">
                                <li class="tab-content__item">- Оперує зв’язками</li>
                                <li class="tab-content__item">- Оперує ролями</li>
                                <li class="tab-content__item">- Оперує способами</li>
                                <li class="tab-content__item">- Впорядковує</li>
                                <li class="tab-content__item">- Розрізняє</li>
                                <li class="tab-content__item">- Ідентифікує</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="home__title">Дитина очима школи &#8220;Галілео&#8221;</h1>

            <h2 class="home__subtitle">Ми навчаємо не наосліп</h2>

            <a class="g-arrow__link" href="#purpose">
                <img class="g-arrow__down" src="./img/arrow-down.svg" alt="Вниз">
            </a>
        </section>

        <section class="purpose" id="purpose">
            <div class="purpose__header">
                <div class="purpose-borders">
                    <div class="purpose-borders__content">
                        <h2 class="purpose-borders__title">
                            <span class="purpose-borders__span">Хто я ?</span>
                            <span class="purpose-borders__span">Що я роблю ?</span>
                            <span class="purpose-borders__span">Хто ці інші люди ?</span>
                        </h2>
                    </div>
                </div>

                <div class="g-borders">
                    <div class="g-borders__content">
                        <h2 class="g-borders__title">Навіщо навчати дітей ?</h2>
                    </div>
                </div>
            </div>

            <div class="purpose__wrapper">
                <div class="purpose__item">
                    <img class="purpose__img" src="./img/purpose/purpose-img-1.png" alt="Призначення">

                    <div class="g-tab purpose-fuchsia">
                        <div class="g-tab-btn">
                            <div class="g-tab-btn__item"></div>
                            <div class="g-tab-btn__item"></div>
                            <div class="g-tab-btn__item"></div>
                            <div class="g-tab-btn__item"></div>
                        </div>

                        <div class="g-tab-content">
                            <div class="g-tab-content_border">
                                <h2 class="g-tab-content__title">Я дитина</h2>
                                <h3 class="g-tab-content__subtitle">Граюся, творю, навчаюсь, <br> насолоджуюсь</h3>
                                <h3 class="g-tab-content__text">Батьки</h3>

                                <img class="g-tab-content__img" src="./img/purpose/purpose-mother-icon.svg" alt="Матір">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="purpose__item">
                    <img class="purpose__img" src="./img/purpose/purpose-img-2.png" alt="Мета">

                    <div class="g-tab purpose-lime">
                        <div class="g-tab-btn">
                            <div class="g-tab-btn__item"></div>
                            <div class="g-tab-btn__item"></div>
                            <div class="g-tab-btn__item"></div>
                            <div class="g-tab-btn__item"></div>
                        </div>

                        <div class="g-tab-content">
                            <div class="g-tab-content_border">
                                <h2 class="g-tab-content__title">Я Батько (Мати)</h2>
                                <h3 class="g-tab-content__subtitle">Підтримую, оберігаю, навчаю<br>життю</h3>
                                <h3 class="g-tab-content__text">Діти</h3>

                                <img class="g-tab-content__img" src="./img/purpose/purpose-baby-icon.svg" alt="Дитина">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="purpose__item">
                    <img class="purpose__img" src="./img/purpose/purpose-img-3.png" alt="Мета">

                    <div class="g-tab purpose-cyan">
                        <div class="g-tab-btn">
                            <div class="g-tab-btn__item"></div>
                            <div class="g-tab-btn__item"></div>
                            <div class="g-tab-btn__item"></div>
                            <div class="g-tab-btn__item"></div>
                        </div>

                        <div class="g-tab-content">
                            <div class="g-tab-content_border">
                                <h2 class="g-tab-content__title">Я дитина</h2>
                                <h3 class="g-tab-content__subtitle">Підтримую, оберігаю, навчаю<br>життю</h3>
                                <h3 class="g-tab-content__text">Діти, батьки, дорослі</h3>

                                <img class="g-tab-content__img" src="./img/purpose/purpose-baby-icon.svg" alt="Дитина">
                                <img class="g-tab-content__img" src="./img/purpose/purpose-mother-icon.svg" alt="Матір">
                                <img class="g-tab-content__img" src="./img/purpose/purpose-father-icon.svg" alt="Батько">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="purpose-info col-md-10">
                <div class="purpose-info__icon">
                    <img src="./img/purpose/purpose-icon.svg" alt="Інформація">
                </div>

                <p class="purpose-info__text">Процес дорослішання кожен проживає та усвідомлює по-різному і це залежить від моделі стосунків між усіма членами родини, у якій зростає дитина. Починаючи шлях з позиції «Я - дитина», ми поступово переймаємо шаблони поведінки, установки й обмеження від навколишніх і тих, хто їх оточує. На основі цього формуються моделі «Я - батько (мати)» чи «Я - дорослий».</p>

                <a class="g-arrow__link" href="#about">
                    <img class="g-arrow__down" src="./img/arrow-down.svg" alt="Вниз">
                </a>
            </div>


        </section>

        <section class="about" id="about">
            <div class="g-borders">
                <div class="g-borders__content">
                    <h2 class="g-borders__title">Про нас</h2>
                </div>
            </div>

            <div class="about__block">
                <div class="about-item col-md-5">
                    <img src="./img/about-icon-1.svg" alt="Хто ми">

                    <div class="about-item__content">
                        <h2 class="about-item__title">ХТО МИ?</h2>
                        <p class="about-item__text">Адміністратори, викладачі, тьютори, вчителі, методисти, завучі, прибиральники…</p>
                    </div>
                </div>

                <div class="about-item col-md-5">
                    <img src="./img/about-icon-2.svg" alt="Місія">

                    <div class="about-item__content">
                        <h2 class="about-item__title">НАША МІСІЯ</h2>
                        <p class="about-item__text">Допомагати дітям ставати Дорослими, навченими, освіченими, щасливими, творчими, талановитими та вільними людьми.</p>
                    </div>
                </div>

                <div class="about-item col-md-8">
                    <img src="./img/about-icon-3.svg" alt="Колектив">

                    <div class="about-item__content">
                        <h2 class="about-item__title">НАШ КОЛЕКТИВ</h2>
                        <p class="about-item__text about-item__text_margin">Ми - команда яка не тільки навчає дітей, але й навчається сама. Залежно від роботи потрібно мати різні знання, навички, здібності та певні цінності.</p>

                        <p class="about-item__text">Долучившись до нас, вчитель проходить тестування на мислення, інтелект, здібності, рольові позиції, соціоніку, тощо, а після того ми починаємо з ним шлях особистісного розвитку - до мети педагога майбутнього.</p>
                    </div>
                </div>
            </div>



            <a class="g-arrow__link" href="#team">
                <img class="g-arrow__down" src="./img/arrow-down.svg" alt="Вниз">
            </a>
        </section>

        <section class="team" id="team">
            <div class="g-borders">
                <div class="g-borders__content">
                    <h2 class="g-borders__title">Наша команда</h2>
                </div>
            </div>

            <div class="team__wrapper">

                <div class="team__prev col-md-1">
                    <picture>
                        <source media="(max-width: 900px)" srcset="./img/team/team-m-prev-icon.svg">
                        <img class="team__img" src="./img/team/team-prev-icon.svg" alt="Назад">
                    </picture>

                </div>

                <div class="team-slider col-md-10">
                    <div class="team-slider__item">
                        <div class="team-slider__item_center">
                            <div class="team-slider__picture">
                                <img class="team-slider__img" src="./img/team/team-1.png" alt="Колектив">
                            </div>
                        </div>

                        <img class="team-slider__circle" src="./img/team-circle-img.svg" alt="Коло">

                        <div class="g-borders team-borders">
                            <div class="g-borders__content team-borders__content">
                                <h2 class="g-borders__title team-borders__title">Тарас Шевченко</h2>
                                <h3 class="team-borders__text">Головний бухгалтер</h3>
                            </div>
                        </div>
                    </div>

                    <div class="team-slider__item">
                        <div class="team-slider__item_center">
                            <div class="team-slider__picture">
                                <img class="team-slider__img" src="./img/team/team-1.png" alt="Колектив">
                            </div>
                        </div>

                        <img class="team-slider__circle" src="./img/team-circle-img.svg" alt="Коло">

                        <div class="g-borders team-borders">
                            <div class="g-borders__content team-borders__content">
                                <h2 class="g-borders__title team-borders__title">Тарас Шевченко</h2>
                                <h3 class="team-borders__text">Головний бухгалтер</h3>
                            </div>
                        </div>
                    </div>

                    <div class="team-slider__item">
                        <div class="team-slider__item_center">
                            <div class="team-slider__picture">
                                <img class="team-slider__img" src="./img/team/team-1.png" alt="Колектив">
                            </div>
                        </div>

                        <img class="team-slider__circle" src="./img/team-circle-img.svg" alt="Коло">

                        <div class="g-borders team-borders">
                            <div class="g-borders__content team-borders__content">
                                <h2 class="g-borders__title team-borders__title">Тарас Шевченко</h2>
                                <h3 class="team-borders__text">Головний бухгалтер</h3>
                            </div>
                        </div>
                    </div>

                    <div class="team-slider__item">
                        <div class="team-slider__item_center">
                            <div class="team-slider__picture">
                                <img class="team-slider__img" src="./img/team/team-1.png" alt="Колектив">
                            </div>
                        </div>

                        <img class="team-slider__circle" src="./img/team-circle-img.svg" alt="Коло">

                        <div class="g-borders team-borders">
                            <div class="g-borders__content team-borders__content">
                                <h2 class="g-borders__title team-borders__title">Тарас Шевченко</h2>
                                <h3 class="team-borders__text">Головний бухгалтер</h3>
                            </div>
                        </div>
                    </div>

                    <div class="team-slider__item">
                        <div class="team-slider__item_center">
                            <div class="team-slider__picture">
                                <img class="team-slider__img" src="./img/team/team-1.png" alt="Колектив">
                            </div>
                        </div>

                        <img class="team-slider__circle" src="./img/team-circle-img.svg" alt="Коло">

                        <div class="g-borders team-borders">
                            <div class="g-borders__content team-borders__content">
                                <h2 class="g-borders__title team-borders__title">Андрій Шевченко</h2>
                                <h3 class="team-borders__text">Головний бухгалтер</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team__next col-md-1">
                    <picture>
                        <source media="(max-width: 900px)" srcset="./img/team/team-m-next-icon.svg">
                        <img class="team__img" src="./img/team/team-next-icon.svg" alt="Вперед">
                    </picture>
                </div>


            </div>

            <a class="g-arrow__link" href="#goal">
                <img class="g-arrow__down" src="./img/arrow-down.svg" alt="Вниз">
            </a>
        </section>

        <section class="goal" id="goal">
            <div class="g-borders">
                <div class="g-borders__content">
                    <h2 class="g-borders__title">НАША МЕТА</h2>
                </div>
            </div>

            <div class="goal__content">
                <p class="goal__text col-md-10">Школа - важливий етап у формуванні сприйняття Картини Світу, бо дитина бачить різні моделі, оцінює та має можливість їх застосувати для себе. Тому важливість школи полягає не тільки в необхідності ‘давати знання’, а й у забезпеченні процесу пізнання дитиною самої себе з можливістю усвідомлено обирати ролі.<br>Наша мета:
                </p>

                <div class="goal-list col-md-9">
                    <div class="goal-list__item">
                        <div class="goal-list__number">
                            <img class="goal-list__img" src="./img/goal/goal-number-1.svg" alt="Мета">
                        </div>

                        <p class="goal-list__text">Допомогти дитині виростити в собі психологічну фігуру усвідомленого Дорослого, підготувати його до комунікацій як з власною дитиною і  Батьками, так і з іншими Дорослими, Батьками і Дітьми. Це вкрай необхідно для усвідомленого життя й реалізації права Людини на щастя.</p>
                    </div>

                    <div class="goal-list__item">
                        <div class="goal-list__number">
                            <img class="goal-list__img" src="./img/goal/goal-number-2.svg" alt="Мета">
                        </div>

                        <p class="goal-list__text">Приймаючи дитину в перший клас, - заглядати в майбутнє на 12 років вперед, розуміти, яким Дорослим там можна/важливо бути з точки зору освіченості й навичок для успішної інтеграції в майбутній світ людей,речей, машин. Сьогодні наш горизонт планування - 2030 + рік.</p>
                    </div>

                    <div class="goal-list__item">
                        <div class="goal-list__number">
                            <img class="goal-list__img" src="./img/goal/goal-number-3.svg" alt="Мета">
                        </div>

                        <p class="goal-list__text">Розвинути у дитини не тільки навички 2030 року, але й універсальне мислення, яке дозволяє вирішувати завдання ідентифікації, розбірки, збірки, абстракції, точності, індукції, дедукції, класифікації та узагальнення.</p>
                    </div>

                    <div class="goal-list__item">
                        <div class="goal-list__number">
                            <img class="goal-list__img" src="./img/goal/goal-number-4.svg" alt="Мета">
                        </div>

                        <p class="goal-list__text goal-list__text_bg">Розкрити інноваційний потенціал людини через усвідомлену творчу діяльність.</p>
                    </div>

                    <div class="goal-list__item">
                        <div class="goal-list__number">
                            <img class="goal-list__img" src="./img/goal/goal-number-5.svg" alt="Мета">
                        </div>

                        <p class="goal-list__text">Змінити парадигму освіти: з позиції "я+статус" (я лікар, інженер), на позицію "я+роблю" (моє життя=проект, моя мета - зробити те, змінити це і «я це роблю»).</p>
                    </div>
                </div>


            </div>


            <a class="g-arrow__link" href="#devs">
                <img class="g-arrow__down" src="./img/arrow-down.svg" alt="Вниз">
            </a>

        </section>

        <section class="devs" id="devs">
            <div class="g-borders">
                <div class="g-borders__content">
                    <h2 class="g-borders__title">НАШІ РОЗРОБКИ</h2>
                </div>
            </div>

            <div class="devs__prev col-md-1">
                <img class="devs__img" src="./img/team/team-m-prev-icon.svg" alt="Назад">
            </div>

            <div class="devs__wrapper">
              <?php
              $sql = "SELECT * FROM posts ORDER BY id desc";
              $res = $db->query($sql);
              while($row=$res->fetch_assoc()){
                $sql = "SELECT * FROM categories WHERE id=".$row['cat_id'];
                $cat = $db->query($sql);
                $cat=$cat->fetch_assoc();
                $string = $row['text'];
                $string = strip_tags($string);
                if (strlen($string) > 140) {

                    // truncate string
                    $stringCut = substr($string, 0, 140);
                    $endPoint = strrpos($stringCut, ' ');

                    //if the string doesn't contain any space then it will cut without word basis.
                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                    $string .= '...';
                  }
                    echo <<<EOT
                    "<div class="devs__item">
                        <div class="g-tab devs-cyan">
                            <div class="g-tab-btn">
                                <div class="g-tab-btn__item"></div>
                                <div class="g-tab-btn__item"></div>
                                <div class="g-tab-btn__item"></div>
                                <div class="g-tab-btn__item"></div>
                            </div>

                            <div class="g-tab-content">
                                <a class="g-tab-content__link" href="article.php?id={$row['id']}">
                                <div class="g-tab-content_border">
                                    <div class="g-tab-content__preview" style="background-image: url('./uploads/{$row["path"]}')"></div>

                                    <h2 class="g-tab-content__title">{$cat['name']}</h2>
                                    <h3 class="g-tab-content__subtitle">{$string}</h3>
                                    <h3 class="g-tab-content__text">Детальніше <img class="g-tab-content__img" src="./img/blog/item-link-arrow.svg" alt="Вперед"></h3>
                                </div>
                                </a>
                            </div>
                        </div>
                      </div>"
                    EOT;
              }
               ?>
            </div>

            <div class="devs__next col-md-1">
                <img class="devs__img" src="./img/team/team-m-next-icon.svg" alt="Вперед">
            </div>

            <a class="g-input g-submit" href="./blog.php">УСІ СТАТТІ</a>

            <a class="g-arrow__link" href="#contact">
                <img class="g-arrow__down" src="./img/arrow-down.svg" alt="Вниз">
            </a>
        </section>

        <section class="contact" id="contact">
            <div class="contact__wrapper">
                <div class="contact-map">
                    <div class="contact-map__block">
                        <div id="map"></div>
                    </div>

                    <svg class="contact-svg" viewBox='0 0 100 100'>
                        <circle class="contact-svg__circle" cx='50' cy='50' r='45' id='big'/>
                        <circle class="contact-svg__circle contact-svg__circle_dash" cx='50' cy='50' r='45' id='sm-one'/>
                    </svg>

                    <img class="contact-map__background" src="./img/contact-side-img.svg" alt="Контакти">
                </div>

                <div class="contact-mail">
                    <h2 class="contact-mail__title">ЗАЛИШТЕ ЗАЯВКУ І МИ З ВАМИ ЗВ’ЯЖЕМОСЬ</h2>

                    <form class="contact-mail__form" action="#" method="POST">
                        <div class="contact-mail__block">
                            <div class="select">
                                <div class="select-header">
                                    <p class="select__text">Вас цікавить
                                    <span class="select__span"></span></p>
                                    <div class="select-arrow">
                                        <div class="select-arrow__item"></div>
                                        <div class="select-arrow__item"></div>
                                    </div>
                                </div>

                                <div class="select-content select-content__year">
                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__info">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">Домовитися про зустріч</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__info">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">Подати заявку на вступ в школу</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__info">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">Подати заявку на дошкільну підготовку</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__info">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">Запис на пробний день</span>
                                    </label>
                                </div>
                            </div>

                            <div class="select">
                                <div class="select-header">
                                    <p class="select__text">Клас
                                    <span class="select__span"></span></p>
                                    <div class="select-arrow">
                                        <div class="select-arrow__item"></div>
                                        <div class="select-arrow__item"></div>
                                    </div>
                                </div>

                                <div class="select-content select-content__year">
                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">0 Клас</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">1 Клас</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">2 Клас</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">3 Клас</span>
                                    </label>


                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">4 Клас</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">5 Клас</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">6 Клас</span>
                                    </label>


                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">7 Клас</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">8 Клас</span>
                                    </label>

                                    <label class="select-item__year">
                                        <input class="select-item__input select-item__input_radio" type="radio" name="school__years">
                                        <span class="select-item__radio"></span>
                                        <span class="select-item__text">9 Клас</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <input class="contact-mail__input" type="text" placeholder="ПІБ одного з батьків" required>
                        <input class="contact-mail__input" type="text" placeholder="ПІБ дитини" required>
                        <input class="contact-mail__input" type="email" placeholder="E-mail" required>
                        <input class="contact-mail__input" type="tel" placeholder="Телефон" required id="input-phone">

                        <input class="contact-mail__submit" type="submit" value="ВІДПРАВИТИ">

                        <label class="g-checkbox__label">
                            <p class="g-checkbox__text">Погоджуюся з <a class="g-checkbox__link" href="#">політикою конфіденційності</a></p>
                            <input type="checkbox" class="g-checkbox__input" id="schoolbus" name="schoolbus" required>
                            <span class="g-checkbox__span"></span>
                        </label>
                    </form>
                </div>
            </div>

            <div class="contact-info">
                <div class="contact-info__wrapper">
                    <div class="contact-info__item">
                        <div class="contact-info_border">
                            <a class="contact-info__link" href="#">м. Ірпінь, вул Варшавська 116</a>
                        </div>
                        <img class="contact-info__img" src="./img/contact/contact-info-location.svg" alt="Розташування">
                    </div>

                    <div class="contact-info__item">
                        <div class="contact-info_border">
                            <a class="contact-info__link" href="#">+380679354248</a>
                        </div>
                        <img class="contact-info__img" src="./img/contact/contact-info-phone.svg" alt="Телефон">
                    </div>
                </div>

                <div class="contact-info__wrapper">
                    <div class="contact-info__item">
                        <div class="contact-info_border">
                            <a class="contact-info__link" href="#">os.platforma@gmail.com</a>
                        </div>
                        <img class="contact-info__img" src="./img/contact/contact-info-mail.svg" alt="E-пошта">
                    </div>

                    <div class="contact-info__item">
                        <div class="contact-info_border">
                            <a class="contact-info__link" href="#">Facebook</a>
                            <a class="contact-info__link contact-info__link_margin" href="#">Instagram</a>
                        </div>
                        <img class="contact-info__img" src="./img/contact/contact-info-social.svg" alt="Соц. мережі">
                    </div>
                </div>
            </div>
        </section>

        <section class="video" id="video">
            <div class="g-borders">
                <div class="g-borders__content">
                    <h2 class="g-borders__title">НАШІ ДУМКИ</h2>
                </div>
            </div>

            <div class="video__wrapper col-md-12">
                <div class="video__prev col-md-1">
                    <img src="./img/video/video-prev-icon.svg" alt="Назад">
                </div>

                <div class="video__slider col-md-10">
                    <div class="video__item">
                        <div class="video-preview">
                            <a class="video-preview__link" href="#">
                                <div class="video-preview__block">
                                    <img class="video-preview__play" src="./img/video/video-play-btn.svg" alt="Відтворити">
                                    <img class="video-preview__img" src="./img/video/video-preview-1.png" alt="Відео">
                                </div>

                                <h3 class="video-preview__title">Якою буде освіта майбутнього ?</h3>
                            </a>
                        </div>
                    </div>

                    <div class="video__item">
                        <div class="video-preview">
                            <a class="video-preview__link" href="#">
                                <div class="video-preview__block">
                                    <img class="video-preview__play" src="./img/video/video-play-btn.svg" alt="Відтворити">
                                    <img class="video-preview__img" src="./img/video/video-preview-2.png" alt="Відео">
                                </div>

                                <h3 class="video-preview__title">Що означає “бути Дорослим”.</h3>
                            </a>
                        </div>
                    </div>

                    <div class="video__item">
                        <div class="video-preview">
                            <a class="video-preview__link" href="#">
                                <div class="video-preview__block">
                                    <img class="video-preview__play" src="./img/video/video-play-btn.svg" alt="Відтворити">
                                    <img class="video-preview__img" src="./img/video/video-preview-1.png" alt="Відео">
                                </div>

                                <h3 class="video-preview__title">Що означає “бути Дорослим”.</h3>
                            </a>
                        </div>
                    </div>

                    <div class="video__item">
                        <div class="video-preview">
                            <a class="video-preview__link" href="#">
                                <div class="video-preview__block">
                                    <img class="video-preview__play" src="./img/video/video-play-btn.svg" alt="Відтворити">
                                    <img class="video-preview__img" src="./img/video/video-preview-2.png" alt="Відео">
                                </div>

                                <h3 class="video-preview__title">Що означає “бути Дорослим”.</h3>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="video__next col-md-1">
                    <img src="./img/video/video-next-icon.svg" alt="Вперед">
                </div>
            </div>

        </section>

    </main>

    <footer class="footer">
        <div class="footer_bg">
            <div class="footer-info col-md-10">
                <div class="footer-info__wrapper col-lg-3">
                    <a href="#home" class="footer-info__item">Дитина очима школи &#8220;Галілео&#8221;</a>
                    <a href="#purpose" class="footer-info__item">Навіщо навчати дітей ?</a>
                    <a href="#about" class="footer-info__item">Про школу</a>
                </div>

                <div class="footer-info__wrapper col-lg-2">
                    <a href="#team" class="footer-info__item">Команда</a>
                    <a href="#goal" class="footer-info__item">Мета школи</a>
                    <a href="#devs" class="footer-info__item">Розробки</a>
                </div>

                <div class="footer-info__wrapper col-lg-2">
                    <a class="footer-info__item nav-open__modal">Вартість навчання</a>
                    <a href="#contact" class="footer-info__item">Замовити дзвінок</a>
                    <a href="./blog.php" class="footer-info__item">Блог</a>
                </div>

                <div class="footer-info__wrapper col-lg-3 footer-info_right">
                    <a class="footer-info__link" href="https://goo.gl/maps/TG26HSGQaKVQAReE6" target="_blank">м. Ірпінь, вул. Варшавська, 116</a>
                    <a class="footer-info__link" href="tel:+380679354248">+38 (067) 935 4248</a>
                    <a class="footer-info__link" href="mailto:os.platforma@gmail.com">os.platforma@gmail.com</a>
                    <div class="footer-info_flex">
                        <a class="footer-info__link" href="#">facebook</a>
                        <a class="footer-info__link" href="#">instagram</a>
                        <a class="footer-info__link" href="#">youtube</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright col-md-10">
            <a class="footer-copyright__link" href="#">2019 Школа майбутнього. Всі права захищено.</a>

            <a class="footer-copyright__link" href="#">developed by Crayfish Studio</a>
        </div>
    </footer>

    <script src="./js/vanilla-tilt.min.js"></script>

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>
        $(document).ready(function(){

            $('.home-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                loop: false,
                responsive: [
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                    }
                ]
            });

            $('.team-slider').slick({
                loop: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 5000,
                prevArrow: $('.team__prev'),
                nextArrow: $('.team__next'),
                autoplay: false,
                responsive: [
                    {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: '24px',
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]
            });

            $('.video__slider').slick({
                infinite: false,
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                prevArrow: $('.video__prev'),
                nextArrow: $('.video__next'),
                autoplay: false,
                responsive: [
                    {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '24px',
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]
            });

            $('.devs__wrapper').slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                prevArrow: $('.devs__prev'),
                nextArrow: $('.devs__next'),
                autoplay: false,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            infinite: false,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: true,
                            dots: false,
                            prevArrow: $('.devs__prev'),
                            nextArrow: $('.devs__next'),
                            autoplay: false,
                            mobileFirst: true
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            infinite: false,
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            arrows: true,
                            dots: false,
                            prevArrow: $('.devs__prev'),
                            nextArrow: $('.devs__next'),
                            autoplay: false,
                            mobileFirst: true
                        }
                    }
                ]
            });
        });
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#nav-open').on('click', function() {
                $('.sidenav').addClass('active');
                $('.header').addClass('active');

                $('#nav').removeClass('active');
            });

            $('#nav-close, .nav-list__link').on('click', function() {
                $('.sidenav').removeClass('active');
                $('.header').removeClass('active');

                $('#nav').addClass('active');
            });

            $('.nav-open__modal').on('click', function() {
                $('.calc').addClass('active');
                $('.sidenav').removeClass('active');
                $('.header').removeClass('active');
            });

            $('.nav-close__modal').on('click', function() {
                $('.calc').removeClass('active');
            });

            $('#calc-to-contact').on('click', function() {
                document.location.hash = "#contact";
                $('.calc').removeClass('active');
            });

            $('#tooltip-1').hover(function() {
                $('#tooltip-1-text').fadeIn(500);
            }, function() {
                $('#tooltip-1-text').fadeOut(500);;
            });

            $('#tooltip-2').hover(function() {
                $('#tooltip-2-text').fadeIn(500);
            }, function() {
                $('#tooltip-2-text').fadeOut(500);;
            });

            $('#tooltip-3').hover(function() {
                $('#tooltip-3-text').fadeIn(500);
            }, function() {
                $('#tooltip-3-text').fadeOut(500);;
            });
        });
    </script>

    <script src="https://unpkg.com/imask"></script>

    <script src="./js/script.js"></script>

    <script>
        var phoneMask = IMask(
            document.getElementById('input-phone'), {
                mask: '+{38}(000)000-00-00'
        });
    </script>

    <script src="./js/zenscroll-min.js"></script>

    <script src="./js/map.js"></script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCaoITp8CCWSs37dP92vc4dZUBP60A-JM&callback=initMap">
    </script>
</body>
</html>
