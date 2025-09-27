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
                                <h3 class="freelancer-name">Андрей <img src="/img/icons/verified.svg" alt="verified" class="verified-icon"/></h3>
                                <a href="#" class="freelancer-username">@umairshafiq101</a>
                                <p class="freelancer-position">Ui-mobile & Web developer</p>
                                <div class="freelancer-trophies-container">
                                    <img src="/img/icons/medal1.svg" alt="trophy" class="trohpy-icon"/>
                                    <img src="/img/icons/medal2.svg" alt="trophy" class="trohpy-icon"/>
                                    <img src="/img/icons/medal3.svg" alt="trophy" class="trohpy-icon"/>
                                    <img src="/img/icons/medal4.svg" alt="trophy" class="trohpy-icon"/>
                                    <img src="/img/icons/medal5.svg" alt="trophy" class="trohpy-icon"/>
                                    <img src="/img/icons/medal6.svg" alt="trophy" class="trohpy-icon"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="about-freelancer-container">
                            <h2>Обо мне</h2>
                            <p>
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
                </div>
                
                <div class="freelancer-portfolio-block">
                    <div class="freelancer-portfolio-header">
                        <h2>Портфолио</h2>
                        <div class="freelancer-portfolio-nav">
                            <div class="freelancer-portfolio-nav-elem active">Все рубрики</div>
                            <div class="freelancer-portfolio-nav-elem">Веб и мобильный дизайн</div>
                            <div class="freelancer-portfolio-nav-elem">Мобильные приложения</div>
                            <div class="freelancer-portfolio-nav-elem">Игры</div>
                        </div>
                    </div>
                    
                    <div class="freelancer-portfolio-container">
                        <div class="add-portfolio-button">
                            <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="round-plus-icon"/>
                            <p>Добавить работу</p>
                        </div>
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                        
                        <div class="portfolio-elem">
                            <img src="/img/ads/portfolio-template.jpg" alt="portfolio-template" class="portfolio-template"/>
                        </div>
                    </div>
                </div>
                
                <div class="my-services-block">
                    <h2>Мои услуги</h2>
                    <div class="swiper my-services-swiper">
                        <div class="swiper-wrapper my-services-container">
                            <a href="#" class="ad-container swiper-slide">
                                <div class="ad-part1">
                                    <div class="ad-banner">
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
                    <h2>Отзывы о <span class="username">testodes</span></h2>
                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                </div>
                <div class="review-types-block">
                    <div class="review-type active">
                        Положительные <span class="positive-review-num">12</span>
                    </div>
                    <div class="review-type">
                        Отрицательные <span class="negative-review-num">1</span>
                    </div>
                </div>
                
                <div class="reviews-freelancer-container">
                    <div class="review-freelancer-content">
                        <div class="review-header">
                            Разработка интернет-магазина
                        </div>
                        <div class="reviewer-block">
                            <div class="reviewer-img-container">
                                <img src="/img/freelancer-avatars/reviewer1.png" alt="reviewer-img" class="reviewer-avatar"/>
                            </div>
                            <div class="reviewer-feedback">
                                <div class="reviewer-info">
                                    <span class="reviewer-username">sadasdf</span> 
                                    <img src="/img/icons/green-hand-like.svg" alt="green-hand-like" class="green-hand-like-icon"/>
                                    <span class="review-date">2 месяца назад</span>
                                </div>
                                <div class="review-text">
                                    Прекрасная работа. Спасибо большое! Рекомендую!
                                </div>
                            </div>
                        </div>
                        
                        <div class="freelancer-response-block">
                            <div class="freelancer-response-img-container">
                                <img src="/img/freelancer-avatars/freelancer4.png" alt="reviewer-img" class="reviewer-avatar"/>
                            </div>
                            <div class="freelancer-feedback">
                                <div class="freelancer-response-info">
                                    <span class="freelancer-response-username">testcodes</span> 
                                    <span class="freelancer-response-date">2 месяца назад</span>
                                </div>
                                <div class="freelancer-response-text">
                                    Никита, спасибо за положительный отзыв, обращайтесь еще, всегда рад помочь!
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="review-freelancer-content">
                        <div class="review-header">
                            Разработка Telegram WebApp приложения
                        </div>
                        <div class="reviewer-block">
                            <div class="reviewer-img-container">
                                <img src="/img/freelancer-avatars/reviewer2.png" alt="reviewer-img" class="reviewer-avatar"/>
                            </div>
                            <div class="reviewer-feedback">
                                <div class="reviewer-info">
                                    <span class="reviewer-username">geek434</span> 
                                    <img src="/img/icons/green-hand-like.svg" alt="green-hand-like" class="green-hand-like-icon"/>
                                    <span class="review-date">2 месяца назад</span>
                                </div>
                                <div class="review-text">
                                    Большое спасибо за структуру и за скорость выполнения! ! ! И за цену отдельное спасибо! )
                                </div>
                            </div>
                        </div>
                        
                        <div class="freelancer-response-block">
                            <div class="freelancer-response-img-container">
                                <img src="/img/freelancer-avatars/freelancer4.png" alt="reviewer-img" class="reviewer-avatar"/>
                            </div>
                            <div class="freelancer-feedback">
                                <div class="freelancer-response-info">
                                    <span class="freelancer-response-username">testcodes</span> 
                                    <span class="freelancer-response-date">2 месяца назад</span>
                                </div>
                                <div class="freelancer-response-text">
                                    Вадим, спасибо за положительный отзыв, обращайтесь еще, всегда рад помочь!
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="review-freelancer-content">
                        <div class="review-header">
                            VPN приложение
                        </div>
                        <div class="reviewer-block">
                            <div class="reviewer-img-container">
                                <img src="/img/freelancer-avatars/reviewer3.png" alt="reviewer-img" class="reviewer-avatar"/>
                            </div>
                            <div class="reviewer-feedback">
                                <div class="reviewer-info">
                                    <span class="reviewer-username">ivanproj</span> 
                                    <img src="/img/icons/green-hand-like.svg" alt="green-hand-like" class="green-hand-like-icon"/>
                                    <span class="review-date">2 месяца назад</span>
                                </div>
                                <div class="review-text">
                                    Все быстро, со знанием дела - профи!<br>
                                    Рекомендую
                                </div>
                            </div>
                        </div>
                        
                        <div class="reply-to-review-block">
                            <div class="reply-to-review">
                                Ответить
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="review-freelancer-content">
                        <div class="review-header">
                            Разработка VPN приложения
                        </div>
                        <div class="reviewer-block">
                            <div class="reviewer-img-container">
                                <img src="/img/freelancer-avatars/reviewer4.png" alt="reviewer-img" class="reviewer-avatar"/>
                            </div>
                            <div class="reviewer-feedback">
                                <div class="reviewer-info">
                                    <span class="reviewer-username">artem_code</span> 
                                    <img src="/img/icons/green-hand-like.svg" alt="green-hand-like" class="green-hand-like-icon"/>
                                    <span class="review-date">3 месяца назад</span>
                                </div>
                                <div class="review-text">
                                    Нужно было внести незначительные изменения. Все было предельно четко, быстро и качественно. Проделанной работой я полностью доволен. Продолжим 
                                    дальнейшее сотрудничество. Рекомендую этого исполнителя.
                                </div>
                            </div>
                        </div>
                        
                        <div class="reply-to-review-block">
                            <div class="reply-to-review">
                                Ответить
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="review-freelancer-content">
                        <div class="review-header">
                            Опубликую ваше приложение Ios, Android в AppStore и Google Play
                        </div>
                        <div class="reviewer-block">
                            <div class="reviewer-img-container">
                                <img src="/img/freelancer-avatars/reviewer5.png" alt="reviewer-img" class="reviewer-avatar"/>
                            </div>
                            <div class="reviewer-feedback">
                                <div class="reviewer-info">
                                    <span class="reviewer-username">AstonDVkms</span> 
                                    <img src="/img/icons/green-hand-like.svg" alt="green-hand-like" class="green-hand-like-icon"/>
                                    <span class="review-date">4 месяца назад</span>
                                </div>
                                <div class="review-text">
                                    Обратился к этому специалисту с вопросом по публикации приложения в App Store, и после разъяснения по всем интересующим меня вопросам мы приступили к 
                                    работе. Работа выполнена на отлично, исполнитель всегда был на связи и отвечал на все мои вопросы. Однозначно могу рекомендовать данного исполнителя как 
                                    профессионала своего дела
                                </div>
                            </div>
                        </div>
                        
                        <div class="reply-to-review-block">
                            <div class="reply-to-review">
                                Ответить
                            </div>
                        </div>
                    </div>
                    
                    <div class="show-more-reviews-block">
                        <div class="show-more-reviews">
                            Показать ещё <img src="/img/icons/blue-chevron-down.svg" class="blue-chevron-down-icon" alt="blue-chevron"/>
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
    const serivicesSwiper = new Swiper('.my-services-swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    autoHeight: false,
    loop: true,
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
        slidesPerView: 5,
      }
    },
  });
  
</script>
</html>
