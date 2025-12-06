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
                        </div>
                        
                        <div class="portfolio-elem  all-portfolio webdesign-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio webdesign-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio mobile-apps-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio mobile-apps-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio mobile-apps-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio mobile-apps-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio games-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio games-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio games-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem all-portfolio games-portfolio">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
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

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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
