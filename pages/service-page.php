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
                
                <h1>Логотип рисованный от руки</h1>
                <div class="services-subcategories-block">
                    <div class="subcategory-elem" onclick="selectSubcategoryElem(this);">
                        Винтаж/ретро <img src="/img/icons/white-close-icon.svg" alt="white-close-icon" class="white-close-icon" onclick="closeSubcategoryElem(this,event);"/>
                    </div>
                    <div class="subcategory-elem" onclick="selectSubcategoryElem(this);">
                        3D <img src="/img/icons/white-close-icon.svg" alt="white-close-icon" class="white-close-icon" onclick="closeSubcategoryElem(this,event);"/>
                    </div>
                    <div class="subcategory-elem" onclick="selectSubcategoryElem(this);">
                        Плоский <img src="/img/icons/white-close-icon.svg" alt="white-close-icon" class="white-close-icon" onclick="closeSubcategoryElem(this,event);"/>
                    </div>
                    <div class="subcategory-elem" onclick="selectSubcategoryElem(this);">
                        Шрифтовый <img src="/img/icons/white-close-icon.svg" alt="white-close-icon" class="white-close-icon" onclick="closeSubcategoryElem(this,event);"/>
                    </div>
                    <div class="subcategory-elem" onclick="selectSubcategoryElem(this);">
                        Геральдический <img src="/img/icons/white-close-icon.svg" alt="white-close-icon" class="white-close-icon" onclick="closeSubcategoryElem(this,event);"/>
                    </div>
                    <div class="subcategory-elem" onclick="selectSubcategoryElem(this);">
                        Рисованный от руки <img src="/img/icons/white-close-icon.svg" alt="white-close-icon" class="white-close-icon" onclick="closeSubcategoryElem(this,event);"/>
                    </div>
                    <div class="subcategory-elem" onclick="selectSubcategoryElem(this);">
                        Акварельный <img src="/img/icons/white-close-icon.svg" alt="white-close-icon" class="white-close-icon" onclick="closeSubcategoryElem(this,event);"/>
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
                            <div class="rubric-block">
                                <h3>Рубрики</h3>
                                <ul class="tree">
                                  <li class="open">
                                    <div class="tree-item">Дизайн</div>
                                    <ul>
                                      <li>
                                        <div class="tree-item">Логотип и брендинг</div>
                                        <ul>
                                          <li>
                                            <div class="tree-item">Логотипы</div>
                                            <ul>
                                                <li class="last-tree-child"><div class="tree-item">Новый логотип</div></li>
                                                <li class="last-tree-child"><div class="tree-item">Доработка лого</div></li>
                                            </ul>
                                          </li>
                                          <li>
                                            <div class="tree-item">Фирменный стиль</div>
                                            <ul>
                                                <li class="last-tree-child"><div class="tree-item">Фирменные бланки</div></li>
                                                <li class="last-tree-child"><div class="tree-item">Брендинг</div></li>
                                                <li class="last-tree-child"><div class="tree-item">Печати и штаты</div></li>
                                                <li class="last-tree-child"><div class="tree-item">Коммерч.предложение</div></li>
                                            </ul>
                                          </li>
                                          <li>
                                            <div class="tree-item">Визитки</div>
                                            <ul>
                                                <li class="last-tree-child"><div class="tree-item">Создание новых</div></li>
                                                <li class="last-tree-child"><div class="tree-item">Готовые шаблоны и макеты</div></li>
                                            </ul>
                                          </li>
                                          
                                          <li>
                                            <div class="tree-item">Брендирование и сувенирка</div>
                                            <ul>
                                                <li class="last-tree-child"><div class="tree-item">Брендирование авто</div></li>
                                                <li class="last-tree-child"><div class="tree-item">Канцтовары</div></li>
                                                <li class="last-tree-child"><div class="tree-item">Сувениры</div></li>
                                            </ul>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </li>
                                
                                </ul>
                            </div>
                            
                            <div class="filter-block">
                                <div class="filter-header">
                                    Создание логотипа
                                </div>
                                <div class="reset-this-filter" onclick="resetThisFilter(this);">
                                    Сбросить
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <span>HTML 5</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>CSS 3</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block">
                                <div class="filter-header">
                                    Услуга включает
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-colors" class="filter-by-price">
                                        <label for="filter-by-colors">В нескольких цветах</label>
                                    </div>
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-visualization" class="filter-by-price">
                                        <label for="filter-by-visualization">Визуализация</label>
                                    </div>
                                    
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-favicon" class="filter-by-price">
                                        <label for="filter-by-favicon">Фавикон</span>
                                    </div>
                                    
                                    <div class="filter-param-container">
                                        <input type="checkbox" id="filter-by-high-pixelization" class="filter-by-price">
                                        <label for="filter-by-high-pixelization">Высокое разрешение</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block one-line">
                                <div class="filter-header">
                                    Количество логотипов 
                                </div>
                                <input type="number" class="number-of-logos" min="1" inputmode="numeric" max="1000" placeholder="от"/>
                            </div>
                            
                            <div class="filter-block">
                                <div class="filter-header">
                                    Цена
                                </div>
                                <div class="reset-this-filter" onclick="resetThisFilter(this);">
                                    Сбросить
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <span>500 руб.</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>1 000 руб. - 4 000 руб.</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>4 500 руб. - 30 000 руб.</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>33 000 руб. и выше</span>
                                    </div>
                                    
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
                                              <input type="number" id="min-price">
                                            </div>
                                            <div class="input-box">
                                              <p><span class="currency">₽</span> до</p>
                                              <input type="number" id="max-price">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                           
                           <div class="filter-block">
                                <div class="filter-header">
                                    Уровень продавца 
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>Заголовок</h4>
                                            <p>Текст</p>
                                        </span>
                                    </span>     
                                </div>
                                <div class="reset-this-filter" onclick="resetThisFilter(this);">
                                    Сбросить
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <span>Восходящая звезда и выше</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>Высший рейтинг и выше</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>Высший рейтинг плюс</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block">
                                <div class="filter-header">
                                    Активность продавцов
                                </div>
                                <div class="reset-this-filter" onclick="resetThisFilter(this);">
                                    Сбросить
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <span>Онлайн</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>Заходил до 1 дн. назад</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>Заходил до 3 дн. назад</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>Заходил до 1 нед. назад</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>Заходил до 2 нед. назад</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block">
                                <div class="filter-header">
                                    Положительных отзывов
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>Заголовок</h4>
                                            <p>Текст</p>
                                        </span>
                                    </span>
                                </div>
                                <div class="reset-this-filter" onclick="resetThisFilter(this);">
                                    Сбросить
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <span>От 1</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>От 5</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>От 20</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>От 100</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block">
                                <div class="filter-header">
                                    Срок выполнения
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>Заголовок</h4>
                                            <p>Текст</p>
                                        </span>
                                    </span>
                                </div>
                                <div class="reset-this-filter" onclick="resetThisFilter(this);">
                                    Сбросить
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <span>За 24 часа</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>До 2 дней</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>До 3 дней</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>До 5 дней</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>До 10 дней</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block">
                                <div class="filter-header">
                                    Заказов в работе
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>Заголовок</h4>
                                            <p>Текст</p>
                                        </span>
                                    </span>
                                </div>
                                <div class="reset-this-filter" onclick="resetThisFilter(this);">
                                    Сбросить
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <span>Нет</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>До 1</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>До 3</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>До 5</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>До 8</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block">
                                <div class="filter-header">
                                    Просмотренные
                                </div>
                                <div class="reset-this-filter" onclick="resetThisFilter(this);">
                                    Сбросить
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <span>Только не просмотренные</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>Только просмотренные</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-block">
                                <div class="filter-header">
                                    Заказанные
                                </div>
                                <div class="reset-this-filter" onclick="resetThisFilter(this);">
                                    Сбросить
                                </div>
                                <div class="filter-params">
                                    <div class="filter-param-container">
                                        <span>Только заказанные</span>
                                    </div>
                                    <div class="filter-param-container">
                                        <span>Только не заказанные</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="more-filter">
                                Ещё фильтры
                            </div>
                        </div>
                        
                        <div class="mobile-filter-content">
                            <div class="add-project-block">
                                <h3>Нет нужной услуги?</h3>
                                <p>Исполнитель найдётся&nbsp;сам</p>
                                <input type="button" value="Добавить проект" class="add-project-button"/>
                            </div>
                        </div>
                    </div>
                    <div class="services-elems-container">
                        <div class="similar-to-search-block">
                            <a href="#" class="ad-container recommended">
                                <div class="ad-part1">
                                    <div class="ad-banner">
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ad1.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div>
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                    
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/taplink.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создание сайтов Taplink, Дизайн</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div>
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/app-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Продуманный Дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ux-ui-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Стильный дизайн мобильных приложений </h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ad1.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/taplink.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создание сайтов Taplink, Дизайн</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/app-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Продуманный Дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ux-ui-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Стильный дизайн мобильных приложений </h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/mobile-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ad1.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/taplink.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создание сайтов Taplink, Дизайн</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/app-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Продуманный Дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ux-ui-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Стильный дизайн мобильных приложений </h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/mobile-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ad1.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/taplink.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создание сайтов Taplink, Дизайн</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/app-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Продуманный Дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ux-ui-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Стильный дизайн мобильных приложений </h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/mobile-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ad1.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создам дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/taplink.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Создание сайтов Taplink, Дизайн</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/app-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Продуманный Дизайн мобильного приложения</h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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
                                        <img src="/img/icons/white-like.svg" alt="white-like" class="white-like-icon" onclick="likeThisAd(this);"/>
                                        <img src="/img/ads/ux-ui-design.webp" class="ad-img" alt="ad1"/>
                                    </div>
                                    
                                    <h3>Стильный дизайн мобильных приложений </h3>
                                    
                                    <div class="freelancer-wrapper">
                                        <div class="freelancer-container">
                                            <div class="freelancer-avatar">
                                                <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="freelancer-img"/>
                                                <img src="/img/icons/status-star.svg" alt="status" class="freelancer-status hidden"/>
                                            </div>
                                            <p class="freelancer-username">cc__creative</p>
                                            <img src="/img/icons/verified.svg" alt="verified-freelancer" class="verified-freelancer hidden"/>
                                        </div>
                                        
                                        <img src="/img/icons/recommended.svg" alt="recommended" class="recommended"/>
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

    $(".filter-block .filter-params .filter-param-container").on("click", function(){
        $(this).closest(".filter-block").addClass("active");
        $(this).closest(".filter-block").find(".filter-param-container").removeClass("selected");
        $(this).addClass("selected");
    });
    
    function resetThisFilter(elem){
        console.log("All is ok!");
        $(elem).closest(".filter-block").removeClass("active");
        $(elem).closest(".filter-block").find(".filter-param-container").removeClass("selected");
    }
  
  function selectSubcategoryElem(elem){
      $(".services-subcategories-block .subcategory-elem").removeClass("selected");
      $(elem).addClass("selected");
  }
  
  function closeSubcategoryElem(elem,e){
      e.stopPropagation();
      $(elem).parent().removeClass("selected");
  }
  
    function likeThisAd(elem) {
        if ($(elem).parent().hasClass("liked")) {
            console.log("removed liked");
            $(elem).parent().removeClass("liked");
        } else {
            $(elem).parent().addClass('liked'); 
            console.log("liked added");
        }
    }
  
    
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
<script>
    $(document).on("click", ".tree-item", function(){
        var $currentLi = $(this).closest("li");
        var $parentUl = $currentLi.parent();
        
        
        $parentUl.children("li").each(function(){
            if (this !== $currentLi[0] && !$(this).hasClass("last-tree-child")) {
                $(this).removeClass("open").addClass("closed");
            }
        });

        $currentLi.addClass("open");
        $currentLi.addClass("listed").find(".listed").removeClass("listed");
        $(".tree .selected").removeClass("selected");
        $currentLi.addClass("selected");
        $currentLi.find(".closed").removeClass("closed");
        $currentLi.find("li").removeClass("open");
        $currentLi.find(">li").addClass("open");
    });
</script>
</html>