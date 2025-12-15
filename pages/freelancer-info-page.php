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
    <link rel="stylesheet" href="/css/freelancer-info-page.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css"/>
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
    <div class="edit-own-profile-block">
        <div class="edit-own-profile-container">
            <p>Это ваш профиль, вы можете редактировать или заполнить данные в настройках</p>
            <div class="portfolio-elem-description">
                <div class="portfolio-category">
                    Разработка мобильного приложения
                </div>
                <div class="portfolio-subcategory">
                                    Мобильные приложения
                    <div class="seen-count">
                        <img src="/img/icons/seenwhite-.svg-icon" alt="seen-icon" class='seen-icon'?>
                        <span class="seen-count-text">9</span>
                    </div>
                </div>
            </div>
            <input type="button" value="Редактировать профиль" class="edit-own-profile-button"/>
        </div>
    </div>
    
    <div class="main-block">
        <div class="main-container">
            <div class="freelancer-info-block">
                <div class="freelancer-info-container">
                    <div class="freelancer-main-info">
                        <div class="freelancer-info-content1">
                            <div class="freelancer-avatar-container">
                                <img src="/img/freelancer-avatars/freelancer3.webp" alt="freelancer-avatar" class="freelancer-avatar-img"/>
                            </div>
                            <div class="freelancer-info">
                                <h3 class="freelancer-name">
                                    <div class="freelancer-name-string">
                                        Андрей 
                                        <div class="verified-user">
                                            <img src="/img/icons/verified.svg" alt="verified" class="verified-icon">
                                            <div class="about-verified">
                                                <img src="/img/icons/freelancer-profile-page/galochka.svg" alt="galochka" class="galochka">
                                                <div class="about-verified-description">
                                                    <h3>Верифицированная страница</h3>
                                                    <p>Страница Андрея подтверждена администрацией.</p>
                                                    <p class="special-color">Узнайте больше о верификации</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="is-user-online offline">
                                        <div class="user-offline-container">
                                            <div class="user-offline">
                                                <img src="/img/icons/grey-dot.svg" alt="grey-dot" class="grey-dot"/> Не в сети
                                            </div>
                                            <span class="tooltip-text" style="font-weight: 400;">
                                                <h4>Офлайн 2 минуты</h4>
                                            </span>
                                        </div>
                                        <div class="user-online">
                                            <img src="/img/icons/green-dot.svg" alt="green-dot" class="green-dot"/> Онлайн
                                        </div>
                                    </div>
                                </h3>
                                <a href="#" class="freelancer-username">@umairshafiq101</a>
                                <p class="freelancer-position">Ui-mobile & Web developer</p>
                                <div class="freelancer-trophies-container">
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/medal1.svg" alt="trophy" class="trohpy-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>За помощь в улучшении сервиса</h4>
                                            <p>Начисляется после успешного прохождения опроса</p>
                                        </span>
                                    </span>
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/medal2.svg" alt="trophy" class="trohpy-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>За помощь в улучшении сервиса</h4>
                                            <p>Начисляется после успешного прохождения опроса</p>
                                        </span>
                                    </span>
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/medal3.svg" alt="trophy" class="trohpy-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>За помощь в улучшении сервиса</h4>
                                            <p>Начисляется после успешного прохождения опроса</p>
                                        </span>
                                    </span>
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/medal4.svg" alt="trophy" class="trohpy-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>За помощь в улучшении сервиса</h4>
                                            <p>Начисляется после успешного прохождения опроса</p>
                                        </span>
                                    </span>
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/medal5.svg" alt="trophy" class="trohpy-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>За помощь в улучшении сервиса</h4>
                                            <p>Начисляется после успешного прохождения опроса</p>
                                        </span>
                                    </span>
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/medal6.svg" alt="trophy" class="trohpy-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>За помощь в улучшении сервиса</h4>
                                            <p>Начисляется после успешного прохождения опроса</p>
                                        </span>
                                    </span>
                                    
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/medal5.svg" alt="trophy" class="trohpy-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>За помощь в улучшении сервиса</h4>
                                            <p>Начисляется после успешного прохождения опроса</p>
                                        </span>
                                    </span>
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/medal6.svg" alt="trophy" class="trohpy-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>За помощь в улучшении сервиса</h4>
                                            <p>Начисляется после успешного прохождения опроса</p>
                                        </span>
                                    </span>
                                    
                                    <span class="trophy-more" style="display: none;">+</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="about-freelancer-container">
                            <h2>Обо мне</h2>
                            <p class="project-to-do-description">
                                Пишу информационные и продающие тексты для сайтов, а также посты для соцсетей. 
                                Стремлюсь к созданию идеального контента - грамотного, уникального и полезного 
                                для каждого читателя. 
                            </p>
                            
                            <h2>Мои навыки</h2>
                            <div class="freelancer-skills">
                                <span>Kotlin</span> <span>Java</span> <span>Frontend</span> <span>Vue</span> <span>Androd studio</span> <span>Backend</span>
                                <span>HTML & CSS</span> <span>Xcode</span> <span>Flutter</span> <span>Dart</span> <span>Figma</span> <span>swift</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="freelancer-rating-combo">
                        <div class="freelancer-rating-container">
                            <div class="freelancer-success-details">
                                <div class="freelancer-rating-wrapper">
                                    <div class="freelancer-rating">
                                        <h4>Рейтинг</h4>
                                        <div class="freelancer-rating-content">
                                            <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star"/>
                                            <p><span class="rating-num">5.0</span> (39 отзывов)</p>
                                        </div>
                                    </div>
                                    
                                    <div class="freelancer-rating-data-container">
                                        <div class="freelancer-rating-data">
                                            Заказов выполнено <span class="quantity">16</span>
                                        </div>
                                        <div class="freelancer-rating-data">
                                            Отзывов получено <span class="quantity">12</span>
                                        </div>
                                        <div class="freelancer-rating-data">
                                            Заказов успешно сдано <span class="percentage">100%</span>
                                        </div>
                                        <div class="freelancer-rating-data">
                                            Заказов сдано вовремя <span class="percentage">100%</span>
                                        </div>
                                        <div class="freelancer-rating-data">
                                            Повторных заказов <span class="percentage">100%</span>
                                        </div>
                                    </div>
                                    
                                    <div class="block-freelancer">
                                        <div class="toggle-container">
                                          <span class="toggle-label">Заблокировать</span>
                                          <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="button" value="Написать сообщение" class="write-message-button"/>
                            </div>
                        </div>
                        
                        <div class="identity-certificate">
                            <div class="identity-certificate-text">
                                Сертификат <span class="cert-number">№217532</span><img src="/img/icons/freelancer-profile-page/array-right.svg" alt="array-right" class="array-right"/>
                            </div>
                            <img src="/img/icons/freelancer-profile-page/identity-cert.svg" class="identity-cert" alt="identity-cert">
                        </div>
                    
                    </div>
                </div>
                
                <div class="freelancer-portfolio-block">
                    <div class="freelancer-portfolio-header">
                        <h2>Портфолио</h2>
                        <div class="freelancer-portfolio-nav">
                            <div class="freelancer-portfolio-nav-elem all-portfolio active" target="all-portfolio">Все рубрики</div>
                            <div class="freelancer-portfolio-nav-elem webdesign-portfolio" target="webdesign-portfolio">Веб и мобильный дизайн</div>
                            <div class="freelancer-portfolio-nav-elem mobile-apps-portfolio" target="mobile-apps-portfolio">Мобильные приложения</div>
                            <div class="freelancer-portfolio-nav-elem games-portfolio" target="games-portfolio">Игры</div>
                        </div>
                    </div>
                    
                    <div class="freelancer-portfolio-container">
                        <div class="add-portfolio-button">
                            <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="round-plus-icon"/>
                            <p>Добавить работу</p>
                        </div>
                        <div class="portfolio-elem  all-portfolio webdesign-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem  all-portfolio webdesign-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio webdesign-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio mobile-apps-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio mobile-apps-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio mobile-apps-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio mobile-apps-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio games-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio games-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio games-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio games-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                            <div class="portfolio-elem-description">
                                <div class="portfolio-elem-category">
                                    Разработка мобильного приложения
                                </div>
                                <div class="portfolio-elem-subcategory">
                                    Мобильные приложения
                                    <div class="seen-count">
                                        <img src="/img/icons/white-seen-icon.svg" alt="seen-icon" class='seen-icon'?>
                                        <span class="seen-count-text">9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="my-services-block">
                    <h2>Мои услуги</h2>
                    <div class="my-services-swiper">
                        <div class="my-services-container">
                            <a href="#" class="ad-container swiper-slide">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this,event);"/>
                                        <img src="/img/ads/ad1.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-container">
                                        <div class="freelancer-avatar">
                                            <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                            <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status"/>
                                        </div>
                                        <p class="freelancer-username">cc__creative</p>
                                        <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                    </div>
                                </div>
                                    
                                <div class="service-data-container">
                                    <div class="service-rating">
                                        <div class="rating-text">Высший рейтинг</div>
                                        <div class="rating-stars">
                                            <img src="/img/icons/yellow-star.svg" class="yellow-star" alt="yellow-star"/>
                                            <p><span class="yellow-text">5.0</span> (570)</p>
                                        </div>
                                    </div>
                                    <div class="service-price">
                                        <div class="service-price-text">СТОИМОСТЬ</div>
                                        <div class="service-price-num">от 10 408 ₽</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#" class="ad-container swiper-slide">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this,event);"/>
                                        <img src="/img/ads/taplink.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создание сайтов Taplink, Дизайн</h3>
                                    
                                    <div class="freelancer-container">
                                        <div class="freelancer-avatar">
                                            <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                            <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                        </div>
                                        <p class="freelancer-username">cc__creative</p>
                                        <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                    </div>
                                </div>
                                    
                                <div class="service-data-container">
                                    <div class="service-rating">
                                        <div class="rating-text">Высший рейтинг</div>
                                        <div class="rating-stars">
                                            <img src="/img/icons/yellow-star.svg" class="yellow-star" alt="yellow-star"/>
                                            <p><span class="yellow-text">5.0</span> (570)</p>
                                        </div>
                                    </div>
                                    <div class="service-price">
                                        <div class="service-price-text">СТОИМОСТЬ</div>
                                        <div class="service-price-num">от 10 408 ₽</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#" class="ad-container swiper-slide">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this,event);"/>
                                        <img src="/img/ads/app-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Продуманный Дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-container">
                                        <div class="freelancer-avatar">
                                            <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                            <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                        </div>
                                        <p class="freelancer-username">cc__creative</p>
                                        <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                    </div>
                                </div>
                                    
                                <div class="service-data-container">
                                    <div class="service-rating">
                                        <div class="rating-text">Высший рейтинг</div>
                                        <div class="rating-stars">
                                            <img src="/img/icons/yellow-star.svg" class="yellow-star" alt="yellow-star"/>
                                            <p><span class="yellow-text">5.0</span> (570)</p>
                                        </div>
                                    </div>
                                    <div class="service-price">
                                        <div class="service-price-text">СТОИМОСТЬ</div>
                                        <div class="service-price-num">от 10 408 ₽</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#" class="ad-container swiper-slide">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this,event);"/>
                                        <img src="/img/ads/ux-ui-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Стильный дизайн мобильных приложений </h3>
                                    
                                    <div class="freelancer-container">
                                        <div class="freelancer-avatar">
                                            <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                            <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                        </div>
                                        <p class="freelancer-username">cc__creative</p>
                                        <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                    </div>
                                </div>
                                    
                                <div class="service-data-container">
                                    <div class="service-rating">
                                        <div class="rating-text">Высший рейтинг</div>
                                        <div class="rating-stars">
                                            <img src="/img/icons/yellow-star.svg" class="yellow-star" alt="yellow-star"/>
                                            <p><span class="yellow-text">5.0</span> (570)</p>
                                        </div>
                                    </div>
                                    <div class="service-price">
                                        <div class="service-price-text">СТОИМОСТЬ</div>
                                        <div class="service-price-num">от 10 408 ₽</div>
                                    </div>
                                </div>
                            </a>
                            
                            
                            <a href="#" class="ad-container swiper-slide">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this,event);"/>
                                        <img src="/img/ads/ux-ui-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Стильный дизайн мобильных приложений </h3>
                                    
                                    <div class="freelancer-container">
                                        <div class="freelancer-avatar">
                                            <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                            <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                        </div>
                                        <p class="freelancer-username">cc__creative</p>
                                        <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                    </div>
                                </div>
                                    
                                <div class="service-data-container">
                                    <div class="service-rating">
                                        <div class="rating-text">Высший рейтинг</div>
                                        <div class="rating-stars">
                                            <img src="/img/icons/yellow-star.svg" class="yellow-star" alt="yellow-star"/>
                                            <p><span class="yellow-text">5.0</span> (570)</p>
                                        </div>
                                    </div>
                                    <div class="service-price">
                                        <div class="service-price-text">СТОИМОСТЬ</div>
                                        <div class="service-price-num">от 10 408 ₽</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="main-block part2">
        <div class="main-container part2">
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
    </div>
    
    <?=$footer;?>
    <?=$modalWindows;?>


<div class="add-work-modal-block hidden">
    <form class="add-work-modal-container">
        <div class="add-work-modal-header">
            <h3 class="present-your-services">Презентуйте свои услуги</h3>
            <h3 class="edit-portfolio-h3">Редактировать работу в портфолио</h3>
            <img src="/img/icons/x-close.svg" alt="x-close-icon" class="x-close-icon close-add-work-modal-block"/>
        </div>
        <div class="add-work-modal-wrapper">
            <p class="add-work-modal-description">
                Подберите лучшие примеры работ, демонстрирующие ваши навыки и профессионализм.
                Загрузите изображения, анимацию или видео, показывающие работу с разных сторон, в
                нескольких цветах, стилях или размерах.
            </p>
            
            <div class="add-work-name-container">
                <div class="add-work-name-label-container">
                    <label for="add-work-name-input">Название работы</label><span>Не обязательно</span>
                </div>
                <input type="text" placeholder="Работа №45" id="add-work-name-input" class="add-work-name-input" maxlength="40" required/>
                <div class="add-work-name-counter">
                    <span class="add-work-name-count">0</span>&nbsp; из 40 символов
                </div>
            </div>
            
            <div class="add-work-details-container">
                <div class="add-work-details-header">
                    <label>Рубрика</label>
                    <span class="required-to-do">Обязательно</span>
                </div>
                <div class="add-work-details-controls">
                    <select id="select-section" name="fiwork-section" required>
                        <option value="" disabled selected>Выберите рубрику</option>
                        <option value="design">Дизайн</option>
                        <option value="it-development">Разработка и ИТ</option>
                    </select>
                    
                    <select id="select-subcategory" name="fiwork-subcategory" class="hidden" required>
                        <option value="" disabled selected>Выберите рубрику</option>
                        <option value="logo-and-branding" class="design select-section-option" value="logo-and-branding">Логотип и брендинг</option>
                        <option value="website-dev" class="it-development select-section-option" value="website-dev">Создание сайта</option>
                        <option value="mobile-dev" class="it-development select-section-option" value="mobile-dev">Мобильные приложения</option>
                    </select>
                </div>
                
                 <div class="create-fiwork-step-stage create-fiwork-step-type hidden create-fiwork-step-stage2 logo-and-branding">
                    <div class="step-stage-name">
                        Тип
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container selecе-type-container">
                            <input type="radio" required  id="fiwork-type1" name="fiwork-type" value="logos" />
                            <label for="fiwork-type1">Логотипы</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-type2" name="fiwork-type" value="identity" />
                            <label for="fiwork-type2">Фирменный стиль</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-type3" name="fiwork-type" value="business-cards" />
                            <label for="fiwork-type3">Визитки</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-type4" name="fiwork-type" value="branding" />
                            <label for="fiwork-type4">Брендирование и сувенирка</label>
                        </div>
                    </div>
                </div>
                
                <div class="create-fiwork-step-stage create-fiwork-step-type hidden create-fiwork-step-stage2 website-dev">
                    <div class="step-stage-name">
                        Тип
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container selecе-type-container">
                            <input type="radio" required  id="fiwork-type5" name="fiwork-type" value="logos" />
                            <label for="fiwork-type5">Новый сайт</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-type6" name="fiwork-type" value="identity" />
                            <label for="fiwork-type6">Копия сайта</label>
                        </div>
                    </div>
                </div>
                
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 logo-and-branding">
                    <div class="step-stage-name">
                        Вид
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-subtype1" name="fiwork-subtype" value="new-logo" />
                            <label for="fiwork-subtype1">Новый логотип</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-subtype2" name="fiwork-subtype" value="logo-revision" />
                            <label for="fiwork-subtype2">Доработка логотипа</label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                    <div class="step-stage-name">
                        Вид
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-subtype3" name="fiwork-subtype"/>
                            <label for="fiwork-subtype3">Лендинг</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-subtype4" name="fiwork-subtype"/>
                            <label for="fiwork-subtype4">Интернет-магазин</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-subtype5" name="fiwork-subtype"/>
                            <label for="fiwork-subtype5">Инфосайт</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-subtype6" name="fiwork-subtype"/>
                            <label for="fiwork-subtype6">Визитка</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-subtype7" name="fiwork-subtype"/>
                            <label for="fiwork-subtype7">Интернет-сервис</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-subtype8" name="fiwork-subtype"/>
                            <label for="fiwork-subtype8">Блог</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-subtype9" name="fiwork-subtype"/>
                            <label for="fiwork-subtype9">Форум</label>
                        </div>
                    </div>
                </div>
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 mobile-dev">
                    <div class="step-stage-name">
                        Платформа
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-mobile-dev-platform1" name="fiwork-subtype"/>
                            <label for="fiwork-mobile-dev-platform1">iOS</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-mobile-dev-platform2" name="fiwork-subtype"/>
                            <label for="fiwork-mobile-dev-platform2">Android</label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-style-container hidden create-fiwork-step-stage2 logo-and-branding">
                    <div class="step-stage-name">
                        Cтиль
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-style1" name="fiwork-style" />
                            <label for="fiwork-style1">Винтаж/ретро</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-style2" name="fiwork-style"/>
                            <label for="fiwork-style2">3D</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-style3" name="fiwork-style"/>
                            <label for="fiwork-style3">Плоский</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-style4" name="fiwork-style"/>
                            <label for="fiwork-style4">Шрифтовый</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-style5" name="fiwork-style"/>
                            <label for="fiwork-style5">Геральдический</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-style6" name="fiwork-style"/>
                            <label for="fiwork-style6">Рисованный от руки</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-style7" name="fiwork-style"/>
                            <label for="fiwork-style7">Акварельный</label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 logo-and-branding">
                    <div class="step-stage-name">
                        Cоздание логотипа
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-creating-logo1" name="fiwork-creating-logo"/>
                            <label for="fiwork-creating-logo1">По эскизу</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-creating-logo2" name="fiwork-creating-logo"/>
                            <label for="fiwork-creating-logo2">С нуля</label>
                        </div>
                    </div>
                </div>
                
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                    <div class="step-stage-name">
                        CMS
                    </div>
                    <div class="step-stage-form two-cols">
                        <div class="step-stage-form-col">
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use1" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use1">Wordpress</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use2" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use2">Opencart</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use3" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use3">Ucoz</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use4" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use4">ModX</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use5" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use5">HTML</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use6" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use6">Tilda</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use7" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use7">Самописная</label>
                            </div>
                        </div>
                        <div class="step-stage-form-col">
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use8" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use8">Joomla</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use9" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use9">Drupal</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use10" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use10">Битрикс</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use11" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use11">Wix</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use12" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use12">Adobe Muse</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-cms-use13" name="fiwork-cms-use"/>
                                <label for="fiwork-cms-use13">Textolite</label>
                            </div>
                        </div>
                        <div class="add-own-variant">Добавить свой вариант</div> 
                    </div>
                </div>
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                    <div class="step-stage-name">
                        Языки
                    </div>
                    <div class="step-stage-form two-cols">
                        <div class="step-stage-form-col">
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-proglang-use1" name="fiwork-proglang-use"/>
                                <label for="fiwork-proglang-use1">C, C++</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-proglang-use2" name="fiwork-proglang-use"/>
                                <label for="fiwork-proglang-use2">Go</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-proglang-use3" name="fiwork-proglang-use"/>
                                <label for="fiwork-proglang-use3">PHP</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-proglang-use4" name="fiwork-proglang-use"/>
                                <label for="fiwork-proglang-use4">Ruby</label>
                            </div>
                            
                        </div>
                        <div class="step-stage-form-col">
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-proglang-use5" name="fiwork-proglang-use"/>
                                <label for="fiwork-proglang-use5">C#</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-proglang-use6" name="fiwork-proglang-use"/>
                                <label for="fiwork-proglang-use6">Java</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-proglang-use7" name="fiwork-proglang-use"/>
                                <label for="fiwork-proglang-use7">Python</label>
                            </div>
                            <div class="fiwork-type-container">
                                <input type="checkbox"  id="fiwork-proglang-use8" name="fiwork-proglang-use"/>
                                <label for="fiwork-proglang-use8">Swift</label>
                            </div>
                        </div>
                        <div class="add-own-variant">Добавить свой вариант</div>
                    </div>
                </div>
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                    <div class="step-stage-name">
                        Интерфейс на JavaScript
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-js-interface1" name="fiwork-js-interface"/>
                            <label for="fiwork-js-interface1">Да</label>
                        </div>
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-js-interface2" name="fiwork-js-interface"/>
                            <label for="fiwork-js-interface2">Нет</label>
                        </div>
                    </div>
                </div>
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                    <div class="step-stage-name">
                        Используется<br>CSS
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-css-use1" name="fiwork-css-use"/>
                            <label for="fiwork-css-use1">Да</label>
                        </div>
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-css-use2" name="fiwork-css-use"/>
                            <label for="fiwork-css-use2">Нет</label>
                        </div>
                    </div>
                </div>
                
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                    <div class="step-stage-name">
                        База данных
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-db-use1" name="fiwork-db-use"/>
                            <label for="fiwork-db-use1">Да</label>
                        </div>
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-db-use2" name="fiwork-db-use"/>
                            <label for="fiwork-db-use2">Нет</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="attach-work-to-portfolio-container">
                <label>Привязать работу к моему кворку</label>
                <select id="select-work" name="work-to-attach" required>
                    <option value="" disabled selected>Не выбрано</option>
                    <option value="work1">Работа 1</option>
                    <option value="work2">Работа 2</option>
                </select>
            </div>
            
            <div class="load-works-container">
                <div class="load-works-header">
                    <h3>Загрузите изображения или видео</h3>
                    <span class="done">Минимум 1 изображение</span>
                </div>
                <div class="load-works-description">
                    <img src="/img/create-fiwork-page/img-icon.svg" alt="img-icon" class="img-icon"/>
                    Используйте четкие и привлекающие внимание изображения. Избегайте размытых, растянутых
                    или сильно сжатых изображений.
                </div>
                <div class="load-works-description">
                    <img src="/img/create-fiwork-page/video-icon.svg" alt="video-icon" class="video-icon"/>
                    Повысьте вовлеченность покупателей на 40% и увеличьте продажи с помощью видеоролика,
                    который демонстрирует качество ваших услуг и сервиса.
                </div>
                
                <p>
                    Изображения формата JPEG, JPG, PNG, GIF. Вес не более 10 МБ. Рекомендуемый размер 1920x1280 и более.
                </p>
                
                <p>
                    Видео формата MP4, AVI, MOV. Вес не более 50 Мб, длительность до 75 сек. Для горизонтальных видео
                    размер не менее 660 х 165 px, для вертикальных видео размер не менее 132 х 440 px.
                </p>
                
                <div class="add-works-container">
                    <div class="add-work-elem">
                        <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="green-round-plus"/>
                        <span>Загрузить изображение или видео</span>
                        <input type="file" id="upload-work-input" class="upload-work-input" accept=".jpg,.jpeg,.png,mp4" onchange="previewWorkImage(event)" name="fiwork-work-cover">
                    </div>
                    <div class="preview-work-img-container template">
                        <div class="upload-work-preview-shadow-left"></div>
                        <img class="upload-work-preview" alt="Превью обложки" src="#"/>
                        <div class="upload-work-preview-shadow-right"></div>
                        <img src="/img/icons/resize.svg" alt="resize-icon" class="resize-icon"/>
                        <img src="/img/icons/delete.svg" alt="delete-icon" class="delete-icon" onclick="removeParentElem(this)"/>
                    </div>
                </div>
            </div>
            
            <div class="load-cover-container">
                <div class="load-cover-header">
                    <h3>Обложка работы</h3>
                    <span>Обязательно</span>
                </div>
                <p>Загрузите отдельное изображение обложки, чтобы ваша работа в каталоге смотрелась
                привлекательно.</p>
                
                <div class="add-works-container">
                    <div class="add-work-elem">
                        <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="green-round-plus"/>
                        <span>Загрузить обложку</span>
                        <input type="file" class="upload-work-input" accept=".jpg,.jpeg,.png,mp4" onchange="previewWorkImage(event)" name="fiwork-work-cover">
                    </div>
                </div>
                
                <div class="loaded-cover-block hidden">
                    <div class="loaded-cover-desc">
                        <div class="img-container">
                            <img src="#" alt="user-img" class="user-img"/>
                        </div>
                        <div class="loaded-cover-desc-content">
                            <div class="part1">
                                <h3>Работа №45</h3>
                            </div>
                            <div class="part2">
                                <div class="work-section">Рубрика</div>
                                <div class="work-visits">
                                    <div class="like-count">
                                        <img src="/img/icons/hand-like.svg" alt="hand-like" class="hand-like-icon"/>
                                        <span>258</span>
                                    </div>
                                    <div class="visit-count">
                                        <img src="/img/icons/visits.svg" alt="visits" class="visits-icon"/>
                                        <span>430</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loaded-cover-resize">
                        <div class="overlay-container">
                            <img src="/img/create-fiwork-page/overlay-img.svg" class="overlay-img" alt="overlay-img"/>
                        </div>
                        <div class="cover-container">
                            <div class="select-img-part-container">
                                <img src="#" alt="user-img" class="user-img img-to-crop" id="img-to-crop"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-form-button-container">
                <input type="submit" value="Сохранить" class="submit-form-button"/>
            </div>
        </div>
        
    </form>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
<script>
    $(".add-work-modal-block #select-section").on("change",function(){
       $(".add-work-modal-block .select-section-option").hide();
       $(".add-work-modal-block").find("."+$(this).val()).show();
       $(".add-work-modal-block #select-subcategory").removeClass("hidden");
       $(".add-work-modal-block .create-fiwork-step-stage2").addClass("hidden");
       $(".add-work-modal-block #select-subcategory").val("");
    });
    
    $(".add-work-modal-block #select-subcategory").on("change",function(){
        closeOthersAndShow("create-fiwork-step-stage2."+$(this).val(),"create-fiwork-step-stage2");
    });

    $(".add-portfolio-button").on("click",function(){
        $(".add-work-modal-block").removeClass("hidden");
    });
    
    $(".add-work-modal-block .x-close-icon").on("click",function(){
        $(".add-work-modal-block").addClass("hidden");
    });
    
    function closeOthersAndShow(openBlock,closeBlock){
        if(closeBlock!='none'){
            $("."+closeBlock).addClass("hidden");
        }
        
        if(openBlock!='none'){
            $("."+openBlock).removeClass("hidden");
        }
        
        const $container = $(`.fiwork-details-form`);
        // Enable inputs in visible sections (where the hidden class is NOT present)
        $container.find('.create-fiwork-step-stage:not(.hidden) input, .create-fiwork-step-stage:not(.hidden) select, .create-fiwork-step-stage:not(.hidden) textarea').prop('disabled', false);
    
        // Disable inputs in hidden sections
        $container.find('.create-fiwork-step-stage.hidden input, .create-fiwork-step-stage.hidden select, .create-fiwork-step-stage.hidden textarea').prop('disabled', true);
        $(".continue-to-next-step.submit-fiwork-details input").show();
    }
    
    function previewImage(event) {
      const input = event.target;
      const file = input.files[0];
      const preview = document.getElementById('upload-preview');
      const previewContainer=document.getElementById("preview-img-container");
      
      if (file && file.type.match('image.*')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
          previewContainer.style.display = 'flex';
        };
        reader.readAsDataURL(file);
      } else {
        preview.src = '';
        previewContainer.style.display = 'none';
        alert('Пожалуйста, выберите изображение в формате jpg, jpeg или png.');
      }
    }
    
    function previewWorkImage(event){
    console.log("All is ok!");
    console.log("Dandytour");
      const input = event.target;
      const file = input.files[0];
      var previewContainer = $('.preview-work-img-container.template').clone();
      $(previewContainer).removeClass("template");
      $(previewContainer).addClass("loaded-work")
      var preview=$(previewContainer).find(".upload-work-preview")[0];
      
      if (file && file.type.match('image.*')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
            preview.onload = function() {
              updateCover();
            };
            $(previewContainer).css("display", "flex") 
        };
        reader.readAsDataURL(file);
        $(".load-works-container .add-works-container").prepend(previewContainer);
      } else {
        /*preview.src = '';
        previewContainer.style.display = 'none';*/
        alert('Пожалуйста, выберите изображение в формате jpg, jpeg или png.');
      }
    }
    
    function updateCover(){
        const coverSrc = $(".load-works-container .add-works-container .loaded-work").last().find("img.upload-work-preview").attr("src");
        
        if(!coverSrc){
            $(".loaded-cover-block .user-img").attr("src","");
            $(".loaded-cover-block").addClass("hidden");
            $(".load-cover-container .add-works-container .add-work-elem").removeClass("hidden");
        }else{
            $(".loaded-cover-block .user-img").attr("src",coverSrc);
            $(".loaded-cover-block").removeClass("hidden");
            cropImage("img-to-crop"); 
            $(".load-cover-container .add-works-container .add-work-elem").addClass("hidden");
        }
    }
    
    function removeParentElem(elem){
        $(elem).parent().remove();
        updateCover();
    }
    
    function hideParentElem(elem) {
        const $workElement = $(elem).closest('.add-work-elem');
        const workIndex = $workElement.attr('data-work-index');
        
        // Удаляем данные из хранилища
        if (workIndex && portfolioWorks[workIndex]) {
            delete portfolioWorks[workIndex];
        }
        
        if ($(".fiwork-portfolio-form .add-works-container .add-work-elem").length > 5) {
            $workElement.remove();
        } else {
            $workElement.find('.add-work-elem-loaded-container').addClass("hidden");
            // Сбрасываем индекс для пустых элементов
            $workElement.attr('data-work-index', $workElement.index());
        }
        
        indicateWorkCount();
    }
    
    var lastSelectPortfolio;
     $(".add-work-modal-container").on("submit",function(e){
        console.log("All is oK!");
        e.preventDefault();
        $(this).trigger("reset");
        $(".add-work-modal-block .preview-work-img-container.loaded-work").remove();
        $(".add-work-modal-block .loaded-cover-block").addClass("hidden");
        $(".load-cover-container .add-works-container .add-work-elem").removeClass("hidden");
        $(".add-work-modal-block").addClass("hidden");
        //some code
        if(cropper){
            const canvas = cropper.getCroppedCanvas({
                width: 400,
                height: 400
            });
            const result=canvas.toDataURL('image/png');
            $(lastSelectedPortfolio).find(".portfolio-banner-container img").attr("src",result); 
        }
    });
    
    
    /*Crop image module*/
    var imageCrop;
    var cropper;
    function cropImage(id){
        imageCrop=document.getElementById(id);
        if (cropper) {
            cropper.destroy();
        }
        cropper = new Cropper(imageCrop, {
          aspectRatio: 2.7/1.8, // квадрат, можно убрать для свободного
          viewMode: 1,
          guides: true,  // сетка 3х3
        });
    }
    /*End of crop image module*/
    
    
</script>
<script>
    let servicesSwiper = null;
    
    function initServicesSwiper() {
        const width = window.innerWidth;
        if (width <= 600 && !servicesSwiper) {
            $(".my-services-swiper").addClass("swiper");
            $(".my-services-container").addClass("swiper-wrapper");
            $(".my-services-container").css("gap","0");
            servicesSwiper = new Swiper('.my-services-swiper', {
                slidesPerView: 1,
                spaceBetween: 10,
                autoHeight: false,
                loop: false,
                observer: true, // Watch for DOM changes
                observeParents: true, // Watch parent elements too
                navigation: {
                  nextEl: '.btn-next',
                  prevEl: '.btn-prev',
                },
                breakpoints: {
                  600: {
                      slidesPerView: 2,
                  },
                  830: {
                    slidesPerView: 3,
                  },
                  1100: {
                    slidesPerView: 4,
                  },
                  1400: {
                    slidesPerView: 4,
                  }
                },
            });
        }
    
        if (width > 600 && servicesSwiper) {
            
            $(".my-services-swiper").removeClass("swiper");
            $(".my-services-container").removeClass("swiper-wrapper");
            $(".my-services-container").css("gap","10px");
            servicesSwiper.destroy(true, true);
            servicesSwiper = null;
        }
    }
    
    
    initServicesSwiper();
    
    window.addEventListener('resize', initServicesSwiper);
</script>
<script>
    function likeThisAd(elem,e) {
        if(e){
            e.stopPropagation();
            e.preventDefault();
        }
        
        if ($(elem).parent().hasClass("liked")) {
            console.log("removed liked");
            $(elem).parent().removeClass("liked");
        } else {
            $(elem).parent().addClass('liked'); 
            console.log("liked added");
        }
    }
  
    $(".freelancer-trophies-container").on("change",function(){ 
        updateTrophiesDisplay();    
    });
    
    function updateTrophiesDisplay() {
        const maxDisplayedTrophies = 6;
        const $container = $('.freelancer-trophies-container');
        const $trophyIcons = $container.find('.trohpy-icon');
        const $trophyMore = $container.find('.trophy-more');
        
        $trophyIcons.show();
        $trophyMore.hide();
    
        const totalTrophies = $trophyIcons.length; // В вашем примере это 6
        
        
        if (totalTrophies > maxDisplayedTrophies) {
            $trophyIcons.slice(maxDisplayedTrophies).hide();
            
            const hiddenCount = totalTrophies - maxDisplayedTrophies;
            $trophyMore.text('+' + hiddenCount); // Показываем, сколько скрыто (напр., +2)
            $trophyMore.show();
            
        } else {
            $trophyMore.hide();
        }
    }
    
    updateTrophiesDisplay();

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
    
   /*$(document).ready(function () { Убрал document.ready чтобы header работал корректно*/

        // --- Функция: обрезать текст до последнего пробела ---
        function cutBySpace(text, limit) {
            let slice = text.slice(0, limit);
            const lastSpace = slice.lastIndexOf(" ");
            if (lastSpace !== -1) {
                slice = slice.slice(0, lastSpace);
            }
            return slice;
        }
    
        // --- Обработка всех текстовых блоков ---
        $(".project-to-do-description").each(function () {
    
            const $block = $(this);
            const fullHtml = $block.html();          // сохраняем HTML, а не text()
            const fullText = $block.text().trim();   // текст без html
            
            const limit = 140;       // лимит сокращённого текста
            const minLength = 180;   // минимальная длина для кнопки "Ещё"
    
            if (fullText.length <= minLength) {
                return; // ничего не делаем, оставляем как есть
            }
    
            // создаём сокращённую версию
            const shortText = cutBySpace(fullText, limit) + "...";
    
            // записываем внутрь дата-атрибуты (храним оригинальный HTML)
            $block.attr("data-full", fullHtml);
            $block.attr("data-short", shortText);
    
            // показываем сокращённый текст
            $block.html(`
                ${shortText} 
                <span class="show-full-text show">Ещё</span>
            `);
        });
    
        // --- Клик "Ещё" — показать полный текст ---
        $(document).on("click", ".show-full-text.show", function () {
            const $block = $(this).closest(".project-to-do-description");
            const fullHtml = $block.attr("data-full");
    
            $block.html(`
                ${fullHtml}
                <span class="show-full-text hide">Скрыть</span>
            `);
        });
    
        // --- Клик "Скрыть" — вернуть сокращённый текст ---
        $(document).on("click", ".show-full-text.hide", function () {
            const $block = $(this).closest(".project-to-do-description");
            const shortText = $block.attr("data-short");
    
            $block.html(`
                ${shortText}
                <span class="show-full-text show">Ещё</span>
            `);
        });
    
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
    
    /*});*/
    
    
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
