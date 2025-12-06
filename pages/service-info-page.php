<?php
require_once "../modules/base.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Fiwork – Фриланс-услуги: Дизайн, Разработка, IT и многое другое</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="фриланс, веб-разработка, веб-дизайн, мобильный дизайн, логотипы, брендинг, разработка приложений, IT-услуги, SEO, переводы, блокчейн, нейросети, Таджикистан" />
    <meta name="description" content="Fiwork – платформа для заказа фриланс-услуг: веб-разработка, дизайн, IT, переводы, блокчейн и многое другое. Найдите исполнителя или начните зарабатывать!" />
    <meta name="author" content="Fiwork Team" />
    <meta name="robots" content="index, follow" />
    <meta name="copyright" content="© 2025 Fiwork" />
    <meta property="og:title" content="Fiwork – Фриланс-услуги: Дизайн, Разработка, IT" />
    <meta property="og:description" content="Платформа для заказа услуг фрилансеров: веб-дизайн, разработка сайтов и приложений, SEO, переводы, блокчейн и многое другое." />
    <meta property="og:image" content="https://ehyo.tj/images/m-logo-400.png" />
    <meta property="og:image:alt" content="Логотип Fiwork" />
    <meta property="og:site_name" content="Fiwork" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="article:publisher" content="Fiwork" />
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="stylesheet" href="/css/service-info-page.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <!-- Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    
    <!-- Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
    <!-- Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
    
    <!-- Manrope -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    <!-- Tajawal -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    
    <!-- Fira Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?=$header;?>
    
    <div class="main-block">
        <div class="main-container">
            <div class="service-info-block">
                <div class="main-content-block">
                    <div class="main-content-header">
                        <div class="main-content-nav-block">
                            <div class="mini-nav">
                                <a href="#">Дизайн</a>
                                <img src="/img/icons/semiarrow-right.svg" alt="semiarrow" class="semiarrow-right"/>
                                <a href="#">Логотип и брендинг</a>
                                <img src="/img/icons/semiarrow-right.svg" alt="semiarrow" class="semiarrow-right"/>
                                <a href="#">Логотипы</a>
                            </div>
                            <div class="like-and-share-container">
                                <div class="like-container">
                                    <img src="/img/icons/grey-like.svg" alt="like-icon" class="like-icon">
                                    <div class="like-nums">2,767</div>
                                </div>
                                <div class="share-icon-container">
                                    <img src="/img/icons/square-share.svg" alt="share-icon" class="share-icon"/>
                                    <img src="/img/icons/square-share-blue.svg" alt="share-icon" class="share-icon-blue"/>
                                </div>
                            </div>
                        </div>
                        <h2>Логотип шрифтовой элегантный + бонусы.</h2>
                    </div>
                    
                    <div class="service-photo-slider slider-wrapper hidden">
                        <div class="swiper swiper-main">
                          <div class="swiper-wrapper photo-slider">
                            <div class="swiper-slide"><img src="/img/service-info-page-slider/slide1.webp" alt="slide1"/></div>
                            <div class="swiper-slide"><img src="/img/service-info-page-slider/slide2.png" alt="slide2"/></div>
                            <div class="swiper-slide"><img src="/img/service-info-page-slider/slide3.webp" alt="slide3"/></div>
                            <div class="swiper-slide"><img src="/img/service-info-page-slider/slide4.webp" alt="slide4"/></div>
                            <div class="swiper-slide"><img src="/img/service-info-page-slider/slide5.webp" alt="slide5"/></div>
                            <div class="swiper-slide"><img src="/img/service-info-page-slider/slide6.webp" alt="slide6"/></div>
                            <div class="swiper-slide"><img src="/img/service-info-page-slider/slide1.webp" alt="slide7"/></div>
                            <div class="swiper-slide"><img src="/img/service-info-page-slider/slide2.png" alt="slide8"/></div>
                          </div>
                        
                            <div class="slider-controls">
                                <div class="slider-button-prev" style="transform: rotateY(180deg);"><img src="/img/icons/chevron-right.svg"  alt="arrow-left" class="arrow-left"/></div>
                                <div class="slider-button-next"><img src="/img/icons/chevron-right.svg" alt="arrow-right" class="arrow-right"/></div>
                            </div>
                            <div class="swiper-pagination custom-pagination"></div>
                            <div class="fullscreen-toggle-button"><img src="/img/icons/fullscreentoggle.svg" alt="fullscreentoggle" class="fullscreentoggle"/></div>
                          <!-- Навигация -->
                        </div>
                        
                        
                        <!-- Thumbnail Swiper -->
                        <div class="swiper swiper-thumb">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="/img/service-info-page-slider/slide1.webp" alt="slide1"/></div>
                                <div class="swiper-slide"><img src="/img/service-info-page-slider/slide2.png" alt="slide2"/></div>
                                <div class="swiper-slide"><img src="/img/service-info-page-slider/slide3.webp" alt="slide3"/></div>
                                <div class="swiper-slide"><img src="/img/service-info-page-slider/slide4.webp" alt="slide4"/></div>
                                <div class="swiper-slide"><img src="/img/service-info-page-slider/slide5.webp" alt="slide5"/></div>
                                <div class="swiper-slide"><img src="/img/service-info-page-slider/slide6.webp" alt="slide6"/></div>
                                <div class="swiper-slide"><img src="/img/service-info-page-slider/slide1.webp" alt="slide7"/></div>
                                <div class="swiper-slide"><img src="/img/service-info-page-slider/slide2.png" alt="slide8"/></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="verification-block">
                        <div class="documents-verified-container verification-container">
                            <div class="verification-wrapper">
                                <img src="/img/icons/docs-verified.svg" alt="docs-verified" class="verification-img docs-verified"/>
                                <div class="verification-block-content">  
                                    <h3>Документы проверены</h3>
                                    <p>По фото паспорта и видео испол…</p>
                                </div>
                            </div>
                            <img src="/img/icons/chevron-right.svg" alt="chevron-right" class="chevron-right"/>
                        </div>
                        
                        <div class="rush-order-block verification-container">
                            <div class="verification-wrapper">
                                <img src="/img/icons/man-verified.webp" alt="man-verified" class="verification-img man-verified"/>
                                <div class="verification-block-content">  
                                    <h3>Отчет о продавце</h3>
                                    <p>Купить отчёт за 399 ₽</p>
                                </div>
                            </div>
                            <img src="/img/icons/chevron-right.svg" alt="chevron-right" class="chevron-right"/>
                        </div>
                    </div>
                    
                    <div class="about-this-service-block">
                        <h2>Об этой услуге</h2>
                        <p>Я создам для вас красивый шрифтовой логотип, который станет вашим брендом на долгие годы.</p>
                        <br>
                        <p>А для полного понимания хочу заметить, что логотипом является не только графический знак или эмблема - сама надпись также является логотипом.</p>
                        <br>
                        <p><b>Ещё хочу обратить ваше внимание на то, что из всех предложенных мной вариантов, вам потребуется выбрать только один для доработки.</b></p>
                        <br>
                        <p>Как правило, я предлагаю покупателю несколько черновых вариантов логотипа, но дорабатываться до финального результата будет только один - что и является полным объемом выполненной услуги, предоставляемой в данном Форке.</p>
                        <br>
                        <p>Окончательный вариант предлагается в форматах: png и jpg, в тарифе Бизнес плюс форматы: cdr, svg, pdf.</p>
                        <br>
                        <p>Дополнительные варианты логотипа оплачиваются отдельно.<br>Обратите внимание на опции.</p>
                        <br>
                        <p><b>Нужно для заказа:</b><br>
                            Чтобы понять характер вашего логотипа, постарайтесь, пожалуйста, ответить на следующие вопросы:<br>
                        </p>
                        <ol>
                            <li>Что должно быть написано в логотипе</li>
                            <li>Сфера деятельности</li>
                            <li>Слоган, если есть</li>
                            <li>Шрифт печатный или письменный</li>
                            <li>Мои логотипы или ваших партнёров, которые вам понравились.</li>
                        </ol>
                        <br>
                        <br>
                        <p>
                            <b>Вид: </b>Новый логотип<br>
                            <b>Стиль: </b>Шрифтовый<br>
                            <b>Создание логотипа: </b>C нуля<br>
                        </p>
                    </div>
                    
                    <div class="select-service-variant-block">
                        <h2>Выберите вариант услуги</h2>
                        <div class="pricing-table">
                            <table>
                                <thead>
                                  <tr>
                                    <th>Краткое описание</th>
                                    <th>
                                        Эконом
                                    </th>
                                    <th>
                                        Обычный
                                    </th>
                                    <th>
                                        Премиум
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td></td>
                                    <td>Создание только 3 шрифтовых логотипов, а именно – подбор шрифта</td>
                                    <td>Создание 4 шрифтовых логотипов с монограммой или графическим элементом</td>
                                    <td>Создание 5 шрифтовых логотипов плюс бонусы с монограммой и исходниками</td>
                                  </tr>
                                  <tr>
                                    <td>В нескольких цветах</td>
                                    <td><img src="/img/icons/grey-checkmark.svg" alt="grey-checkmark" class="grey-checkmark"/></td>
                                    <td><img src="/img/icons/grey-checkmark.svg" alt="grey-checkmark" class="grey-checkmark"/></td>
                                    <td><img src="/img/icons/green-checkmark.svg" alt="green-checkmark" class="green-checkmark"/></td>
                                  </tr>
                                  <tr>
                                    <td>Визуализация</td>
                                    <td><img src="/img/icons/green-checkmark.svg" alt="green-checkmark" class="green-checkmark"/></td>
                                    <td><img src="/img/icons/green-checkmark.svg" alt="green-checkmark" class="green-checkmark"/></td>
                                    <td><img src="/img/icons/green-checkmark.svg" alt="green-checkmark" class="green-checkmark"/></td>
                                  </tr>
                                  <tr>
                                    <td>Высокое разрешение</td>
                                    <td><img src="/img/icons/grey-checkmark.svg" alt="grey-checkmark" class="grey-checkmark"/></td>
                                    <td><img src="/img/icons/grey-checkmark.svg" alt="grey-checkmark" class="grey-checkmark"/></td>
                                    <td><img src="/img/icons/green-checkmark.svg" alt="green-checkmark" class="green-checkmark"/></td>
                                  </tr>
                                  <tr>
                                    <td>Исходники</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>15</td>
                                  </tr>
                                  <tr>
                                    <td>Количество логотипов</td>
                                    <td>5</td>
                                    <td>7</td>
                                    <td>10</td>
                                  </tr>
                                  <tr>
                                    <td>Монограмма</td>
                                    <td>30</td>
                                    <td>40</td>
                                    <td>60</td>
                                  </tr>
                                  <tr>
                                    <td>Количество правок</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                  </tr>
                                  <tr>
                                    <td>Срок выполнения</td>
                                    <td>4 дня<br><small>1 день (+868 ₽)</small></td>
                                    <td>3 дня<br><small>1 день (+868 ₽)</small></td>
                                    <td>2 дня<br><small>1 день (+1 301 ₽)</small></td>
                                  </tr>
                                  <tr class="price-row">
                                    <td>Стоимость</td>
                                    <td>
                                      <strong>10 408 ₽</strong><br>
                                      <button class="order-btn">Заказать</button>
                                    </td>
                                    <td>
                                      <strong>10 408 ₽</strong><br>
                                      <button class="order-btn">Заказать</button>
                                    </td>
                                    <td>
                                      <strong>10 408 ₽</strong><br>
                                      <button class="order-btn">Заказать</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        
                        <div class="select-additional-services">
                            <h2>Детали заказа и выбор дополнительных услуг</h2>
                            <div class="additional-service-block">
                                <input type="checkbox" onclick="checkAdditionalServicesCheckbox();" class="additional-service-checkbox"/>
                                <p>Срочное выполнение заказа</p>
                                <div class="additional-service-price">
                                    + 1 500 ₽
                                </div>
                            </div>
                            
                            <div class="additional-service-block">
                                <input type="checkbox" onclick="checkAdditionalServicesCheckbox();" class="additional-service-checkbox"/>
                                <p>Раскрутка проекта под аудиторию</p>
                                <div class="additional-service-price">
                                    + 1 500 ₽
                                </div>
                            </div>
                            
                            <div class="additional-details">
                                <div class="additional-detail">
                                    <img src="/img/icons/clock-going.svg" class="clock-going-icon" alt="clock-icon"/>
                                    3 дня на выполнение
                                </div>
                                <div class="additional-detail">
                                    <img src="/img/icons/infinity-icon.svg" class="infinity-icon" alt="infinity-icon"/>
                                    Доработка до 100% результата
                                    
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>Качественная работа</h4>
                                            <p>Время и качество - надёжное решение.</p>
                                        </span>
                                    </span>     
                                </div>
                            </div>
                            
                            <div class="order-button-container">
                                <input type="button" value="Заказать за 2500 ₽" class="order-for-this-price"/>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
                
                <div class="aside-content-block">
                    <div class="service-price-wrapper">
                        <div class="service-price-block">
                            <span class="service-price">6000 ₽</span>
                            <div class="price-estimate normal-price">
                                <span class="price-estimate-text normal-price">Справедливая цена &nbsp;<img src="/img/icons/green-chevron-down.svg" alt="green-chevron-down" class="green-chevron-down-icon"/></span> 
                                <span class="price-estimate-text middle-price">Cредняя цена &nbsp;<img src="/img/icons/chevron-down.svg" alt="green-chevron-down" class="green-chevron-down-icon"/></span> 
                                <span class="price-estimate-text high-price">Высокая цена &nbsp;<img src="/img/icons/chevron-down.svg" alt="green-chevron-down" class="green-chevron-down-icon"/></span> 
                                
                                <div class="price-calculator-container">
                                    <div class="price-calculator-card">
                                        <div class="price-range-header">
                                            <span class="label left">Ниже оценки</span>
                                            <span class="label right">Выше оценки</span>
                                        </div>
                                    
                                        <div class="range-slider-container">
                                            <input type="range" min="0" max="100" value="50" class="range-slider">
                                            <img src="/img/icons/slider-indicator.svg" alt="slider-indicator" class="slider-indicator"/>
                                            <div class="range-track-active" style="left: 33.3%; right: 33.3%;">
                                                <img src="/img/icons/vertical-line.svg" alt="vertical-line" class="vertical-line-left"/>
                                                <img src="/img/icons/vertical-line.svg" alt="vertical-line" class="vertical-line-right"/>
                                                <div class="price-from">
                                                    от 500 ₽
                                                </div>
                                                <div class="price-to">
                                                    до 1500 ₽
                                                </div>
                                            </div>
                                        </div>
                                    
                                    
                                        <p class="description">
                                            Похожие заказы выполняются в этом диапазоне цен после учёта всех правок и согласований.
                                        </p>
                                    
                                        <div class="factors-section">
                                            <h3>Влияет на цену</h3>
                                            <div class="factor-item">
                                                <img src="/img/icons/round-green-plus.svg" alt="round-green-plus" class="round-green-plus-icon"/>
                                                <span>30 заказов — в среднем 4 у похожих</span>
                                            </div>
                                            <div class="factor-item">
                                                <img src="/img/icons/round-green-plus.svg" alt="round-green-plus" class="round-green-plus-icon"/>
                                                <span>27 отзывов — в среднем 5 у похожих</span>
                                            </div>
                                            <div class="factor-item">
                                                <img src="/img/icons/round-green-plus.svg" alt="round-green-plus" class="round-green-plus-icon"/>
                                                <span>30 повторных — в среднем 5 у похожих</span>
                                            </div>
                                        </div>
                                    
                                        <div class="complexity-box">
                                            <div class="complexity-label">
                                                <span class="icon">✦</span>
                                                С учётом сложности
                                            </div>
                                            
                                            <div class="complexity-content">
                                                <h3>Оценка учитывает сложность проекта.</h3>
                                                <p>
                                                    Нейросеть анализирует бриф и данные проекта, оценивая сложность, сроки и требования,
                                                    чтобы сформировать точную рыночную стоимость работы.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="order-details">
                            <h3>Детали заказа</h3>
                            <div class="order-detail"><img src="/img/icons/infinity-icon.svg" alt="infinity-icon" class="infinity-icon"/>Доработка до 100% результата</div>
                            <div class="order-detail"><img src="/img/icons/clock-going.svg" alt="clock-icon" class="clock-icon"/>4 дня на выполнение</div>
                            <div class="order-detail"><img src="/img/icons/grey-clock-going.svg" alt="clock-icon" class="greyclock-icon"/>4 дня на выполнение</div>
                            
                            <div class="order-now-block">
                                <span>Заказать за 6000 ₽</span>
                            </div>
                        </div>
                    </div>
                                
                    
                    <!--Removed
                    <div class="replies-now-block">
                        <img src="/img/icons/green-dot.svg" alt="green-dot" class="green-dot"/><span>Ответит прямо сейчас</span>
                    </div>
                    -->
                    
                    <!--Removed
                    <div class="send-message-block">
                        <span>Написать сообщение</span>
                    </div>-->
                    
                    <div class="freelancer-profile-data-block verified">
                    
                        <div class="freelancer-profile-info-container">
                            <div class="freelancer-avatar-container">
                                <img src="/img/freelancer-avatars/freelancer2.jpg" alt="freelancer avatar" class="freelancer avatar"/>
                            </div>
                            <div class="freelancer-profile-info-content">
                                <span class="freelancer-name">Андрей</span>
                                <p class="in-site-from">на сайте с апреля 2019</p>
                                <div class="freelancer-rating">
                                    <span class="freelancer-rating-num">5,0</span>
                                    <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star"/>
                                    <a href="#" class="freelancer-reviews">37 отзывов</a>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="send-message-to-freelancer">
                            <img src="/img/icons/blue-messaging-icon.svg" alt="blue-messaging-icon" class="blue-messaging-icon"/>
                            Cвязаться с продавцом
                        </div>
                        
                        <div class="freelancer-profile-verified-container verified">
                            <div class="freelancer-profile-verified-content verified">
                                <img src="/img/icons/verified.svg" alt="freelancer-green-shield" class="freelancer-green-shield"/>
                                <p>Подтвержденный профиль</p>
                            </div>
                            
                            <div class="verified-user">
                                <img src="/img/icons/round-question-icon.svg" alt="round info icon" class="round-info-icon galochka verified-icon"/>
                                
                                <div class="about-verified">
                                    <img src="/img/icons/freelancer-profile-page/galochka.svg" alt="galochka" class="galochka">
                                    <div class="about-verified-description">
                                        <h3>Верифицированная страница</h3>
                                        <p>Страница подтверждена администрацией.</p>
                                        <p class="special-color">Узнайте больше о верификации</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="freelancer-profile-verified-container unverified">
                            <div class="freelancer-profile-verified-content unverified">
                                <img src="/img/icons/unverified.svg" alt="freelancer-green-shield" class="freelancer-green-shield"/>
                                <p>Не подтвержденный профиль</p>
                            </div>
                            
                            <div class="verified-user">
                                <img src="/img/icons/round-question-icon.svg" alt="round info icon" class="round-info-icon galochka verified-icon"/>
                                
                                <div class="about-verified">
                                    <img src="/img/icons/freelancer-profile-page/galochka.svg" alt="galochka" class="galochka">
                                    <div class="about-verified-description">
                                        <h3>Неверифицированная страница</h3>
                                        <p>Страница не подтверждена администрацией.</p>
                                        <p class="special-color">Узнайте больше о верификации</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="orders-finished-container">
                            <img src="/img/icons/clock-icon.svg" alt="clock-icon" class="clock-icon"/>
                            <p>Выполнено заказов: <span class="orders-finished-num">1653</span></p>
                        </div>
                    </div>
                    
                    <div class="safe-deal-container">
                        <img src="/img/icons/safe-deal-icon.svg" alt="safe-deal-icon" class="safe-deal-icon"/>
                        <p>Безопасная сделка</p>
                    </div>
                    
                    <div class="money-back-guarantee-block">
                        <img src="/img/icons/money-back-icon.svg" alt="money-back-icon" class="money-back-icon"/>
                        <p>Возврат денег при не выполнении</p>
                    </div>
                    
                    <div class="ask-freelancer-block">
                        <h3>Спросите у исполнителя</h3>
                        <div class="ask-freelancer-textarea">
                            <textarea name="ask-freelancer-input" placeholder="Здравствуйте"></textarea>
                            <img src="/img/icons/send-message-icon.svg" alt="send-message-icon" class="send-message-icon"/>
                        </div>
                        <div class="question-templates">
                            <div class="question-template">Сколько времени займёт?</div>
                            <div class="question-template">Цена актуальна?</div>
                            <div class="question-template">Что нужно для заказа?</div>
                            <div class="question-template">Свободны сегодня?</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="main-block">
        <div class="main-container">
            <div class="service-info-block">
                <div class="main-content-block">
                    <div class="reviews-about-freelancer-block">
                        <div class="reviews-about-freelancer-header">
                            <h2>Отзывы <span class="reviews-count">4980</span> 
                                <div class="stars-count">
                                    <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star-icon"/>
                                    <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star-icon"/>
                                    <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star-icon"/>
                                    <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star-icon"/>
                                    <img src="/img/icons/half-fill-star.svg" alt="half-fill-star" class="half-fill-star"/>
                                </div>
                                <span class="stars-estimate">4,3</span>
                                
                                <span class="question-and-description tooltip-container">
                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon tooltip-question"/>
                                    <span class="tooltip-text" style="font-weight: 400;">
                                        <h4>Отзывы покупателей</h4>
                                        <p>Отзывы покупателей на работы исполнителя и ответы на их отзывы.</p>
                                    </span>
                                </span>     
                            </h2>
                            
                            <div class="select-reviews-type">
                                <span class="review-type-value">Положительные</span> <img src="/img/icons/chevron-down.svg" alt="chevron-down" class="chevron-down-icon"/>
                                <div class="select-reviews-list">
                                    <div class="list-elem review-type positive-review active" target="positive-review">Положительные</div>
                                    <div class="list-elem review-type negative-review" target="negative-review">Негативные</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="reviews-freelancer-container">
                            <div class="review-freelancer-content positive-review">
                                <div class="review-header" style="display: none;">
                                    Разработка интернет-магазина
                                </div>
                                
                                <div class="reviewer-review">
                                    <div class="reviewer-block">
                                        <div class="reviewer-img-container">
                                            <img src="/img/freelancer-avatars/leonid.png" alt="reviewer-img" class="reviewer-avatar"/>
                                        </div>
                                        <div class="reviewer-feedback">
                                            <div class="reviewer-info">
                                                <span class="reviewer-username">Леонид Казенников</span> 
                                                <img src="/img/icons/new-user-emblem.svg" alt="new-user-emblem" class="new-user-emblem"/>
                                            </div>
                                            <div class="review-date">
                                                Сегодня, 18:33
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewer-status">
                                        <span class="reviewer-star-status-count">4.9</span>
                                        <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star-icon"/>
                                        <span class="verified-status">
                                            Проверенный статус
                                        </span> 
                                    </div>
                                    <div class="reviewer-review-text">
                                        Хороший букмекер, который отлично справляется со своими функциями. Ставлю на Пари почти 3 года. Выплаты
                                        происходят без проблем. Не замечал, чтобы ставки резали. Это для меня главное. Ну и похвастаюсь уж тогда раз отзыв
                                    </div>
                                    
                                    <div class="response-functions-block">
                                        <div class="reviewer-review-response-functions">
                                            <div class="there-is-response">
                                                <img src="/img/icons/blue-checkmark.svg" alt="blue-checkmark" class="blue-checkmark-icon"> Есть ответ от продавца
                                            </div>
                                            
                                            <div class="open-close-response-option">
                                                <span class="close-response-option" onclick="closeResponseFunctionsBlock(this);">
                                                    Свернуть
                                                </span>
                                                
                                                <span class="open-response-option" onclick="openResponseFunctionsBlock(this);">
                                                    Ответить
                                                </span>
                                            </div> 
                                        </div>
                                        
                                        <div class="write-response-block">
                                            <textarea class="write-response-textarea" placeholder="Ваш ответ"></textarea>
                                            <input type="button" class="send-button" value="Отправить">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="review-freelancer-content positive-review">
                                
                                <div class="reviewer-review">
                                    <div class="reviewer-block">
                                        <div class="reviewer-img-container">
                                            ПУ 
                                        </div>
                                        <div class="reviewer-feedback">
                                            <div class="reviewer-info">
                                                <span class="reviewer-username">петя ушанин</span> 
                                                <img src="/img/icons/new-user-emblem.svg" alt="new-user-emblem" class="new-user-emblem"/>
                                            </div>
                                            <div class="review-date">
                                                Сегодня, 18:29
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewer-status">
                                        <span class="reviewer-star-status-count">4.9</span>
                                        <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star-icon"/>
                                        <span class="verified-status hidden">
                                            Проверенный статус
                                        </span> 
                                    </div>
                                    <div class="reviewer-review-text">
                                        Поставил на матч лига европы лацио против вильярреала, давно наблюдал за этой парой. В Pari роспись была удобная,
                                        я взял ставку на тотал по ударам и попал в самый точный момент. Матч шел оживленно, ставка закрылась до
                                        финального свистка. Вывод пришел почти сразу, без сюрпризов.
                                    </div>
                                        
                                    <div class="response-functions-block">
                                        <div class="reviewer-review-response-functions">
                                            <div class="there-is-response hidden">
                                                <img src="/img/icons/blue-checkmark.svg" alt="blue-checkmark" class="blue-checkmark-icon"> Есть ответ от продавца
                                            </div>
                                            
                                            <div class="open-close-response-option">
                                                <span class="close-response-option" onclick="closeResponseFunctionsBlock(this);">
                                                    Свернуть
                                                </span>
                                                <span class="open-response-option" onclick="openResponseFunctionsBlock(this);">
                                                    Ответить
                                                </span>
                                            </div> 
                                        </div>
                                        
                                        <div class="write-response-block">
                                            <textarea class="write-response-textarea" placeholder="Ваш ответ"></textarea>
                                            <input type="button" class="send-button" value="Отправить">
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                            
                            <div class="review-freelancer-content positive-review">
                                <div class="reviewer-review">
                                    <div class="reviewer-block">
                                        <div class="reviewer-img-container">
                                            <img src="/img/freelancer-avatars/mishana.png" alt="reviewer-img" class="reviewer-avatar"/>
                                        </div>
                                        <div class="reviewer-feedback">
                                            <div class="reviewer-info">
                                                <span class="reviewer-username">Мишаня Кобздев</span> 
                                                <img src="/img/icons/new-user-emblem.svg" alt="new-user-emblem" class="new-user-emblem"/>
                                            </div>
                                            <div class="review-date">
                                                Сегодня, 18:28
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewer-status">
                                        <span class="reviewer-star-status-count">4.9</span>
                                        <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star-icon"/>
                                        <span class="verified-status">
                                            Проверенный статус
                                        </span> 
                                    </div>
                                    <div class="reviewer-review-text">
                                        Вообще как-то даже случайно тут оказался) Увидел сайт, зарегался, запульнул ставку на Австралиан Опен и выиграл.
                                        Крутяк вообще! И, собственно, все теннисные турниры закидывал. Понятно, что сумма была небольшая, но выигрыш
                                        вывел абсолютно без проблем. И фрибешки в конкурсе прогнозистов отлавливал)ов.
                                    </div>
                                        
                                    <div class="response-functions-block">
                                        <div class="reviewer-review-response-functions">
                                            <div class="there-is-response">
                                                <img src="/img/icons/blue-checkmark.svg" alt="blue-checkmark" class="blue-checkmark-icon"> Есть ответ от продавца
                                            </div>
                                            
                                            <div class="open-close-response-option">
                                                <span class="close-response-option" onclick="closeResponseFunctionsBlock(this);">
                                                    Свернуть
                                                </span>
                                                <span class="open-response-option" onclick="openResponseFunctionsBlock(this);">
                                                    Ответить
                                                </span>
                                            </div> 
                                        </div>
                                        
                                        <div class="write-response-block">
                                            <textarea class="write-response-textarea" placeholder="Ваш ответ"></textarea>
                                            <input type="button" class="send-button" value="Отправить">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            
                            <div class="show-more-reviews-block">
                                <div class="show-more-reviews show" onclick="showMoreReviews();">
                                    <img src="/img/icons/grey-arrow-down.svg" class="blue-chevron-down-icon" alt="blue-chevron"/> Показать ещё 
                                </div>
                                
                                <div class="show-more-reviews hide" style="display: none;" onclick="hideMoreReviews();">
                                    <img src="/img/icons/grey-arrow-down.svg" style="transform: rotateX(180deg);" class="blue-chevron-down-icon" alt="blue-chevron"/> Cкрыть 
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                
                <div class="aside-content-block">
                </div>
            </div>
        </div>
    </div>
    
    <?=$footer;?>
    <?=$modalWindows;?>

<div class="maybe-today-modal-block-container hidden">
    <div class="maybe-today-modal-block">
        <div class="maybe-today-modal-block-content">
            <h3>Отчёт о продавце</h3>
            <p>Даёт полную информацию о продавце.</p>
        </div>
        <div>
            <img src="/img/icons/white-close-icon.svg" alt="white-close-icon" class="white-close-icon close-maybe-today-modal-block"/>
        </div>
    </div>
</div>

<div class="documents-verified-modal-block-container hidden">
    <div class="documents-verified-modal-block">
        <div class="documents-verified-modal-block-content">
            <h3>Документы проверены</h3>
            <p>Специалист прислал фото паспорта и снял себя на видео.
                Мы убедились, что профиль принадлежит реальному человеку.</p>
        </div>
        <div>
            <img src="/img/icons/white-close-icon.svg" alt="white-close-icon" class="white-close-icon close-documents-verified-modal-block"/>
        </div>
    </div>
</div>

<div class="send-message-modal-block-container hidden">
    <div class="send-message-modal-block">
        <div class="send-message-modal-block-header">
            <h3>Отправить сообщение</h3>
            <img src="/img/icons/close-modal-grey-icon.svg" alt="close-modal-icon" class="close-modal-grey-icon close-send-message-modal-block"/>
        </div>
        <div class="send-message-modal-block-wrapper">
            <div class="send-message-block-freelancer">
                <div class="img-container">
                    <img src="/img/freelancer-avatars/freelancer3.webp" alt="freelancer-avatar" class="freelancer-avatar"/>
                </div>
                <div class="freelancer-info">
                    <h4 class="freelancer-name">freax</h4>
                    <p class="working-hours">с 11:00 до 1:00 ч.<img src="/img/icons/round-question-icon.svg" alt="question-icon" class="question-icon"/></p> 
                </div>
                <h3 class="important-to-know">Важно помнить:</h3>
                <p class="important-to-know-content">
                Не используйте оскорбления это может привести к блокировке в сервисе.
                </p>
            </div>
            <div class="send-message-block-textarea">
                <div class="freelancer-response-info">
                    <p class="local-time-container">Местное время: <span class="local-time">18:32</span></p>
                    <div class="vertical-line"></div>
                    <p class="response-time-container">Обычно отвечает за: <span class="response-time">4 мин.</span></p>
                </div>
                <form method="POST">
                        <textarea class="send-message-modal-block-textarea">Добрый день. Тема: кворк "Обновление CMS Bitrix Битрикс на PHP 8".</textarea>
                        <div class="send-modal-block-message-button-container">
                            <div class="add-file-area-container">
                                <div class="add-file-area">
                                    <img src="/img/icons/blue-attach-icon.svg" alt="blue-attach-icon" class="blue-attach-icon"/>
                                    <span>Прикрепить файл</span>
                                </div>
                                <p>до 10 файлов не более 30 Мб</p>
                            </div>
                            <input type="submit" value="Отправить" class="submit-send-message-modal-form"/>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="message-sent-modal-block-container hidden">
    <div class="message-sent-modal-block">
        <div class="message-sent-modal-block-header">
            <h3>Отправить сообщение</h3>
            <img src="/img/icons/close-modal-grey-icon.svg" alt="close-modal-icon" class="close-modal-grey-icon close-message-sent-modal-block"/>
        </div>
        <div class="message-sent-modal-block-content">
            <img src="/img/icons/green-round-checkmark.svg" alt="green-round-checkmark" class="green-round-checkmark"/>
            <p class="message-is-sent-text">Сообщение отправлено</p>
            <a href="#" class="sent-message-link">Просмотрите ваше сообщение</a>
        </div>
    </div>
</div>

<div class="freelancer-information-modal-block-container hidden">
    <div class="freelancer-information-modal-block">
        <img src="/img/icons/close-modal-grey-icon.svg" alt="close-modal-icon" class="close-modal-grey-icon close-freelancer-information-modal-block"/>
        <div class="freelancer-information-modal-block-content">
            <img src="/img/icons/freelancer-information-icon.svg" class="freelancer-information-icon" class="feelancer-information-icon"/>
            <h3>Отчет об исполнителе</h3>
            <p class="our-db-info">У нас самая полная база данных об исполнителе. Мы покажем споры по заказам, стоимость заказов из отзывов, сумму выполненных заказов, дату регистрации и многое другое.</p>
            <input type="button" value="Купить отчёт за 399 ₽" class="buy-freelancer-info"/>
            <p class="our-db-additional-info">Для заказов стоимостью выше 10 000 ₽ мы рекомендуем оформлять отчёт — это поможет вам принять взвешенное решение перед началом сотрудничества с исполнителем.</p>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script>

    function checkAdditionalServicesCheckbox(){
        $(".select-additional-services .additional-service-block input[type='checkbox']").each(function(){
            if($(this).is(':checked')){
                $(this).closest(".additional-service-block").addClass("selected");
            } else{
                $(this).closest(".additional-service-block").removeClass("selected");
            }
        });
    }

    const thumbSwiper = new Swiper(".swiper-thumb", {
        spaceBetween: 5,
        slidesPerView: 7,
        freeMode: true,
        watchSlidesProgress: true,
      });
    
      const mainSwiper = new Swiper(".swiper-main", {
        spaceBetween: 5,
        slidesPerView: 1,
        pagination: {
            el: ".custom-pagination", // Указываем класс элемента из HTML
            type: "fraction", // Устанавливаем тип "fraction" (дробь) для формата "текущий/всего"
            renderFraction: function (currentClass, totalClass) {
              // currentClass: 'swiper-pagination-current'
              // totalClass: 'swiper-pagination-total'
              
              // Генерируем HTML-код:
              return '<span class="' + currentClass + '"></span>' +
                     '&nbsp;из&nbsp;' + // Вставляем слово "из" вместо разделителя "/"
                     '<span class="' + totalClass + '"></span>';
            },
        },
        navigation: {
          nextEl: ".slider-button-next",
          prevEl: ".slider-button-prev",
        },
        thumbs: {
          swiper: thumbSwiper,
        }
      });
      
      const sliderContainer = document.querySelector('.swiper-main'); 

        // 2. Кнопка полного экрана
        const fullscreenButton = document.querySelector('.fullscreen-toggle-button');
        
        // Функция, которая проверяет текущее состояние и переключает режим
        function toggleNativeFullscreen() {
            // Проверяем, находимся ли мы уже в режиме Fullscreen
            if (document.fullscreenElement) {
                // Если да, выходим из него (работает для всех элементов на странице)
                document.exitFullscreen();
                
            } else {
                // Если нет, запрашиваем Fullscreen для контейнера слайдера
                // Метод requestFullscreen() нужно вызвать на самом элементе (sliderContainer)
                if (sliderContainer.requestFullscreen) {
                    sliderContainer.requestFullscreen();
                } 
                // Добавьте префиксы для старых браузеров, если необходимо:
                // else if (sliderContainer.webkitRequestFullscreen) { sliderContainer.webkitRequestFullscreen(); }
                // else if (sliderContainer.msRequestFullscreen) { sliderContainer.msRequestFullscreen(); }
            }
            
            // !!! ВАЖНО !!!
            // После изменения размеров контейнера, необходимо вызвать метод update() Swiper'а.
            // Вызов нужен для того, чтобы Swiper пересчитал размеры слайдов и навигации.
            // Мы вызываем update() с небольшой задержкой, чтобы браузер успел отрисовать Fullscreen.
            setTimeout(() => {
                mainSwiper.update();
            }, 50); 
        }
        
        // Вешаем слушатель события на кнопку
        if (fullscreenButton && sliderContainer) {
            fullscreenButton.addEventListener('click', toggleNativeFullscreen);
        }
        
        // Опционально: Обработчик события 'fullscreenchange'
        // Это полезно, если пользователь выходит из FS, нажав Esc.
        document.addEventListener('fullscreenchange', () => {
            // В любом случае, при смене режима нужно обновить Swiper
            mainSwiper.update();
        });

      $(".service-photo-slider").removeClass("hidden");
      
      $(".question-templates .question-template").on("click",function(){
         $(".ask-freelancer-block textarea").val($(this).html()); 
      });
      
      
      
      /*Logic of modal-windows*/
      
      $(".rush-order-block").on("click",function(){
          //$(".maybe-today-modal-block-container").removeClass("hidden");  
            $(".freelancer-information-modal-block-container").removeClass('hidden');
      });
      
      $(".close-maybe-today-modal-block").on("click",function(){
          $(".maybe-today-modal-block-container").addClass("hidden");
      });
      
      $(".documents-verified-container").on("click",function(){
          $(".documents-verified-modal-block-container").removeClass("hidden");  
      });
      
      $(".close-documents-verified-modal-block").on("click",function(){
          $(".documents-verified-modal-block-container").addClass("hidden");
      });
      
      $(".send-message-block").on("click",function(){
          $(".send-message-modal-block-container textarea").html($(".main-content-header h2").html());
          $(".send-message-modal-block-container").removeClass("hidden");
      });
      
      $(".close-send-message-modal-block").on("click",function(){
          $(".send-message-modal-block-container").addClass("hidden"); 
      });
      
      $(".close-message-sent-modal-block").on('click',function(){
            $(".message-sent-modal-block-container").addClass("hidden"); 
      });
      
      $(".close-freelancer-information-modal-block").on('click',function(){
          $(".freelancer-information-modal-block-container").addClass('hidden');
      });
      
      /*End of logic of modal-windows*/
      
      $(".send-message-modal-block form").on("submit",function(e){
            e.preventDefault();
            $(".send-message-modal-block-container").addClass("hidden"); 
            $(".message-sent-modal-block-container").removeClass("hidden"); 
      });
</script>
<script>

    $(".freelancer-portfolio-nav-elem").on("click",function(){
        $(".portfolio-elem").hide();
        $(".freelancer-portfolio-nav-elem.active").removeClass("active");
        $(this).addClass("active");
        $(".portfolio-elem."+$(this).attr('target')).show(); 
    });
    
    
    $(".select-reviews-list .list-elem").on("click",function(){
       $(".select-reviews-list .list-elem").removeClass("active");  
       $(this).addClass("active");
       updateReviews($(this).attr("target"));
    });

    // Ограничение на количество отображаемых отзывов
    const MAX_VISIBLE_REVIEWS = 6;
    // Селектор для всех блоков отзывов
    const REVIEW_SELECTOR = ".review-freelancer-content";
    
    function updateReviews(target) {
        // Кэширование селекторлов и получения общего количество
        const $positiveReviews = $(REVIEW_SELECTOR + ".positive-review");
        const $negativeReviews = $(REVIEW_SELECTOR + ".negative-review");
    
        $(".review-type.positive-review span").text($positiveReviews.length);
        $(".review-type.negative-review span").text($negativeReviews.length);
    
        $(REVIEW_SELECTOR).hide();
        $(".show-more-reviews").hide(); // По умолчанию скрываем кнопку
    
        const $targetReviews = (target === 'positive-review') ? $positiveReviews : $negativeReviews;
        const reviewsCount = $targetReviews.length;
    
        if (reviewsCount > MAX_VISIBLE_REVIEWS) {
            // Если отзывов больше 6, показываем кнопку и только первые 6
            $(".show-more-reviews.show").show();
    
            // Исправлено: используем :lt(6) для выбора элементов с индексами 0-5
            $targetReviews.filter(":lt(" + MAX_VISIBLE_REVIEWS + ")").show();
    
        } else if (reviewsCount > 0) {
            // Если 6 или меньше, показываем все
            $targetReviews.show();
        }
    }
    
    updateReviews("positive-review");
    
    function showMoreReviews() {
        const activeTarget = $(".review-type.active").attr("target");
    
        $(REVIEW_SELECTOR).hide();
        $(REVIEW_SELECTOR + "." + activeTarget).show();
        $(".show-more-reviews.show").hide();
        $(".show-more-reviews.hide").show();
    }
    
    function hideMoreReviews() {
        const activeTarget = $(".review-type.active").attr("target");
        const $targetReviews = $(REVIEW_SELECTOR + "." + activeTarget);
    
        $(REVIEW_SELECTOR).hide();
    
        $targetReviews.filter(":lt(" + MAX_VISIBLE_REVIEWS + ")").show();
    
        if ($targetReviews.length > MAX_VISIBLE_REVIEWS) {
            $(".show-more-reviews.hide").hide();
            $(".show-more-reviews.show").show();
        }
    }
    
    // --- Tooltip ---
    $(".tooltip-container").hover(
        function () {
            $(this).find(".tooltip-text").addClass("active");
        },
        function () {
            $(this).find(".tooltip-text").removeClass("active");
        }
    );

    // --- Фильтрация портфолио ---
    $("#service-offer-portfolio-select-input").on("change", function () {
        const selected = $(this).val();

        $(".portfolio-elem").hide();

        if (selected) {
            $('.portfolio-elem[data-type="' + selected + '"]').show();
        }
    });
    
    function openResponseFunctionsBlock(elem) {
        $(".response-functions-block").removeClass("open");
        $(elem).closest(".response-functions-block").addClass("open");
    }
    
    function closeResponseFunctionsBlock(elem){
        $(".response-functions-block").removeClass("open");
    }
</script>
<script>
// === ОТВЕТ ФРИЛАНСЕРА НА ОТЗЫВ ===
$(document).on('click', '.write-response-block .send-button', function () {
    const $button = $(this);
    const $writeBlock = $button.closest('.write-response-block');
    const $responseFunctionsBlock = $button.closest('.response-functions-block');
    const $reviewContent = $button.closest('.review-freelancer-content');

    const responseText = $writeBlock.find('.write-response-textarea').val().trim();

    // Если текст пустой — ничего не делаем
    if (!responseText) {
        alert('Напишите ответ перед отправкой');
        return;
    }

    // Скрываем форму ответа
    $responseFunctionsBlock.removeClass('open');

    // Показываем, что ответ уже есть
    $responseFunctionsBlock.find('.there-is-response').removeClass('hidden').css('visibility', 'visible');

    // Очищаем textarea
    $writeBlock.find('.write-response-textarea').val('');

    // Проверяем, есть ли уже блок с ответом фрилансера
    let $responseWrapper = $reviewContent.find('.freelancer-response-wrapper');

    if ($responseWrapper.length === 0) {
        // Если нет — создаём его
        $responseWrapper = $(`
            <div class="freelancer-response-wrapper">
                <div class="freelancer-response-header">Ответ продавца</div>
                <div class="freelancer-response-container"></div>
            </div>
        `);
        $reviewContent.append($responseWrapper);
    }

    // Создаём блок с ответом
    const currentTime = new Date().toLocaleString('ru-RU', {
        day: 'numeric',
        month: 'long',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    }).replace(' г.,', '');

    const responseHTML = `
        <div class="freelancer-response-block">
            <div class="freelancer-response-img-container">
                <img src="/img/freelancer-avatars/freelancer3.webp" alt="freelancer" class="reviewer-avatar">
            </div>
            <div class="freelancer-feedback">
                <div class="freelancer-response-info">
                    <span class="freelancer-response-username">Андрей</span>
                </div>
                <div class="review-date">
                    <span class="freelancer-response-date">Только что</span>
                </div>
            </div>
        </div>
        <div class="freelancer-response-text">${responseText.replace(/\n/g, '<br>')}</div>
    `;

    // Добавляем ответ в контейнер
    $responseWrapper.find('.freelancer-response-container').append(responseHTML);
});
</script>
</html>
