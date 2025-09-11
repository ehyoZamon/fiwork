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
    <link rel="stylesheet" href="/css/service-page.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
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
            <div class="services-block">
                <div class="services-header">
                    <div class="mini-nav">
                        <a href="#">Дизайн</a>
                        <img src="/img/icons/semiarrow-right.svg" alt="semiarrow" class="semiarrow-right"/>
                        <a href="#">Логотип и брендинг</a>
                        <img src="/img/icons/semiarrow-right.svg" alt="semiarrow" class="semiarrow-right"/>
                        <a href="#">Логотипы</a>
                    </div>
                    <div class="services-num-block">
                        <b class="services-num">3,145,684</b> результатов показано
                    </div>
                </div>
                
                <div class="services-container">
                    <div class="services-filter-container">
                        <!-- Mobile filter toggle button -->
                        <button class="mobile-filter-toggle">
                            Фильтры
                            <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                        </button>
                        <div class="mobile-filter-content">
                            <div class="filter-block filter-by-programming-language-block">
                                <div class="filter-header">
                                    Язык разработки
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-html" name="filter-by-programming-language" class="filter-by-programming-language">
                                        <label for="filter-by-html">HTML 5</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-css" name="filter-by-programming-language" class="filter-by-programming-language">
                                        <label for="filter-by-css">CSS 3</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-react" name="filter-by-programming-language" class="filter-by-programming-language">
                                        <label for="filter-by-react">React</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-webflow" name="filter-by-programming-language" class="filter-by-programming-language">
                                        <label for="filter-by-webflow">Webflow</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-nodejs" name="filter-by-programming-language" class="filter-by-programming-language">
                                        <label for="filter-by-nodejs">Node.js</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-laravel" name="filter-by-programming-language" class="filter-by-programming-language">
                                        <label for="filter-by-laravel">Laravel</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-saas" name="filter-by-programming-language" class="filter-by-programming-language">
                                        <label for="filter-by-saas">Saas</label>
                                    </div>
                                    
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-wordpress" name="filter-by-programming-language" class="filter-by-programming-language">
                                        <label for="filter-by-wordpress">Wordpress</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block filter-by-stars-block">
                                <div class="filter-header">
                                    Рейтинг
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-5-star" name="filter-by-stars" class="filter-by-stars">
                                        <label for="filter-by-5-star"><img src="/img/icons/yellow-star.svg">5 звезд</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-4-star" name="filter-by-stars" class="filter-by-stars">
                                        <label for="filter-by-4-star"><img src="/img/icons/yellow-star.svg">4 звезды и выше</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-3-star" name="filter-by-stars" class="filter-by-stars">
                                        <label for="filter-by-3-star"><img src="/img/icons/yellow-star.svg">3 звезды и выше</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-2-star" name="filter-by-stars" class="filter-by-stars">
                                        <label for="filter-by-2-star"><img src="/img/icons/yellow-star.svg">2 звезды и выше</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-1-star" name="filter-by-stars" class="filter-by-stars">
                                        <label for="filter-by-1-star"><img src="/img/icons/yellow-star.svg">1 звездa и выше</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block filter-by-activity-block">
                                <div class="filter-header">
                                    Активность
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-online-activity" name="filter-by-activity" class="filter-by-activity">
                                        <label for="filter-by-online-activity">Онлайн</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-1day-offline" name="filter-by-activity" class="filter-by-activity">
                                        <label for="filter-by-1day-offline">Заходил до 1 дн. назад</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-3days-offline" name="filter-by-activity" class="filter-by-activity">
                                        <label for="filter-by-3days-offline">Заходил до 3 дн. назад</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-1week-offline" name="filter-by-activity" class="filter-by-activity">
                                        <label for="filter-by-1week-offline">Заходил до 1 нед. назад</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-2week-offline" name="filter-by-activity" class="filter-by-activity">
                                        <label for="filter-by-2week-offline">Заходил до 2 нед. назад</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block filter-by-price-block">
                                <div class="filter-header">
                                    Цена
                                </div>
                                <div class="filter-params">
                                    <div class="price-filter-slider-block">
                                        <div class="price-filter">
                                          <div class="slider-container">
                                            <div class="slider-track"></div>
                                            <div class="slider-fill" id="slider-fill"></div>
                                            <input type="range" id="min-range" min="500" max="500000" value="20000">
                                            <input type="range" id="max-range" min="500" max="500000" value="80000">
                                          </div>
                                        
                                          <div class="inputs">
                                            <div class="input-box">
                                              <p><span  class="currency">₽</span> от</p>
                                              <input type="number" id="min-price" value="20000">
                                            </div>
                                            <div class="input-box">
                                              <p><span class="currency">₽</span> до</p>
                                              <input type="number" id="max-price" value="80000">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-500-rubles" name="filter-by-price" class="filter-by-price">
                                        <label for="filter-by-500-rubles">500 руб.</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-1000-rubles" name="filter-by-price" class="filter-by-price">
                                        <label for="filter-by-1000-rubles">1 000 руб. - 3 500 руб.</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-4000-rubles" name="filter-by-price" class="filter-by-price">
                                        <label for="filter-by-4000-rubles">4 000 руб. - 23 000 руб.</label>
                                    </div>
                                    
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-24000-rubles" name="filter-by-price" class="filter-by-price">
                                        <label for="filter-by-24000-rubles">24 000 руб. и выше</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block filter-by-deadline-block">
                                <div class="filter-header">
                                    Срок выполнения
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-24hour-deadline" name="filter-by-deadline" class="filter-by-deadline">
                                        <label for="filter-by-24hour-deadline">За 24 часа</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-2day-deadline" name="filter-by-deadline" class="filter-by-deadline">
                                        <label for="filter-by-2day-deadline">До 2 дней</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-3day-deadline" name="filter-by-deadline" class="filter-by-deadline">
                                        <label for="filter-by-3day-deadline">До 3 дней</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-5day-deadline" name="filter-by-deadline" class="filter-by-deadline">
                                        <label for="filter-by-5day-deadline">До 5 дней</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-10day-deadline" name="filter-by-deadline" class="filter-by-deadline">
                                        <label for="filter-by-10day-deadline">До 10 дней</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-elems-container">
                        <div class="similar-to-search-block">
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/ads/mobile-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/ads/mobile-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/ads/mobile-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/ads/mobile-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
                            
                            <a href="#" class="ad-container">
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
    
    <?=$footer;?>
    <?=$modalWindows;?>

</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script>
  const minRange = document.getElementById('min-range');
  const maxRange = document.getElementById('max-range');
  const minPrice = document.getElementById('min-price');
  const maxPrice = document.getElementById('max-price');
  const sliderFill = document.getElementById('slider-fill');
  const track = document.querySelector('.slider-track');

  const MAX = parseInt(minRange.max);

  function updateSliderFill() {
    const minVal = parseInt(minRange.value);
    const maxVal = parseInt(maxRange.value);

    const left = (minVal / MAX) * 100;
    const right = (maxVal / MAX) * 100;

    sliderFill.style.left = left + '%';
    sliderFill.style.width = (right - left) + '%';
  }

  function syncInputsFromSlider() {
    minPrice.value = minRange.value;
    maxPrice.value = maxRange.value;
    updateSliderFill();
  }

  function syncSlidersFromInput() {
    let minVal = parseInt(minPrice.value);
    let maxVal = parseInt(maxPrice.value);

    if (minVal < 0) minVal = 0;
    if (maxVal > MAX) maxVal = MAX;
    if (minVal > maxVal) minVal = maxVal;

    minRange.value = minVal;
    maxRange.value = maxVal;
    updateSliderFill();
  }

  minRange.addEventListener('input', () => {
    if (parseInt(minRange.value) > parseInt(maxRange.value)) {
      minRange.value = maxRange.value;
    }
    syncInputsFromSlider();
  });

  maxRange.addEventListener('input', () => {
    if (parseInt(maxRange.value) < parseInt(minRange.value)) {
      maxRange.value = minRange.value;
    }
    syncInputsFromSlider();
  });

  minPrice.addEventListener('input', syncSlidersFromInput);
  maxPrice.addEventListener('input', syncSlidersFromInput);

  // Initial fill
  updateSliderFill();
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.mobile-filter-toggle');
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            const content = this.nextElementSibling;
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
        });
    }
});
</script>
</html>