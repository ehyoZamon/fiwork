<?php
require_once "./modules/base.php";
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
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
    <link rel="stylesheet" href="./css/index.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="./css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="./css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <?=$header;?>
    
    <div class="main-block">
        <div class="main-container">
        
            <div class="services-nav-wrapper">   
                <div class="services-nav-block">
                    <div class="services-nav-container1">
                        <div class="row1">
                            <a href="#" class="logo-service service-nav-elem">
                                <span>Нужен логотип</span>
                            </a>
                            <a href="#" class="music-creation-service service-nav-elem">
                                <span>Песня<br>под-ключ</span>
                            </a>
                            <a href="#" class="vfx-3d-service service-nav-elem">
                                <span>VFX и 3D</span>
                            </a>
                            <a href="#" class="create-app-service service-nav-elem">
                                <span>Создать<br>приложение</span>
                            </a>
                            <a href="#" class="website-building-service service-nav-elem">
                                <span>Нужен<br>сайт</span>
                            </a>
                            <a href="#" class="ozvuchka-service service-nav-elem">
                                <span>Озвучка</span>
                            </a>
                            <a style="display: none;" href="#" class="html-markup-service service-nav-elem">
                                <span>Верстка&nbsp;по<br>макету</span>
                            </a>
                        </div>
                        <div class="row2">
                            <a href="#" class="naming-service service-nav-elem">
                                <span>Нейминг</span>
                            </a>
                            <a href="#" class="figma-design-service service-nav-elem">
                                <span>Figma<br>дизайн</span>
                            </a>
                            
                            <a href="#" class="reels-making-service service-nav-elem">
                                <span>Reels мейкинг</span>
                            </a>
                            <a href="#" class="flutter-service service-nav-elem">
                                <span>Flutter</span>
                            </a>
                            <a href="#" class="create-telegram-app-service service-nav-elem">
                                <span>Создать Telegram приложение</span>
                            </a>
                            <a href="#" class="songwriting-service service-nav-elem">
                                <span>Сонграйтинг</span>
                            </a>
                            <a href="#" style="display: none;" class="social-sites-service service-nav-elem">
                                <span>Оформить<br> соц-сети</span>
                            </a>
                        </div>
                    </div>
                
                    <div class="services-nav-container2">
                        <h3>Безопасные сделки</h3>
                        <p>Это просто и удобно!</p>
                        <img src="/img/icons/pocket.svg" alt="pocket" class="pocket-icon"/>
                    </div>
                
                    <div class="services-nav-container3">
                        <h3>Нет нужной услуги?</h3>
                        <p>Исполнитель найдется&nbsp;сам</p>
                        <input type="button" value="Добавить проект" class="add-project"/>
                    </div>
                </div>
            </div>
            <div class="similar-to-search-block computer-version">
                <div class="shadow"></div>
                <div class="similar-to-search-header-container">
                    <a href="#" class="similar-to-search-header">
                        <h2>
                            Похожее на то, что вы смотрели
                        </h2>
                        <img src="/img/icons/arrow-right.svg" alt="arrow-right" class="arrow-right-small-icon"/>
                    </a>
                    
                    <div class="similar-to-search-controls">
                        <img src="/img/icons/ArrowLeft.svg" alt="arrow-left" class="arrow-left-icon btn-prev"/>
                        <img src="/img/icons/ArrowRight.svg" alt="arrow-right" class="arrow-right-icon btn-next"/> 
                    </div>
                </div>
                
                <div class="swiper swiper-hidden similar-to-search-swiper">
                    
                    <div class="service-card-block swiper-wrapper">
                        
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
                    </div>
                </div>
            </div>
            
            <div class="introduce-logos">
                    <div class="logo-container">
                    <img src="/img/introduce-page/takie-dela.svg" alt="takie-dela" class="takie-dela"/>
                    </div>
                    <div class="logo-container">
                    <img src="/img/introduce-page/tacc.svg" alt="tacc" class="tacc"/>
                    </div>
                    <div class="logo-container">
                    <img src="/img/introduce-page/forbes.svg" alt="forbes" class="forbes"/>
                    </div>
                    <div class="logo-container">
                    <img src="/img/introduce-page/rbk.svg" alt="rbk" class="rbk"/>
                    </div>
                    <div class="logo-container">
                    <img src="/img/introduce-page/kommersant.svg" alt="kommersant" class="kommersant"/>
                    </div>
                    <div class="logo-container">
                    <img src="/img/introduce-page/ria-novost.svg" alt="ria-novosti" class="ria-novosti"/>
                    </div>
                    <div class="logo-container">
                    <img src="/img/introduce-page/delovoy-peterburg.svg" alt="delovoy-peterburg" class="delovoy-peterburg"/>
                    </div>
                    <div class="logo-container">
                    <img src="/img/introduce-page/vc-ru.svg" alt="vc-ru" class="vc-ru"/>
                    </div>
                </div>
            
            <div class="mobile-categories-block mobile">
                <div class="mobile-categories-header">
                    <h2>Категории</h2>
                    <a href="#">Смотреть все</a>
                </div>
                
                <div class="mobile-categories-container">
                    <a href="#">
                        <div class="img-container">
                            <img src="/img/icons/category-icons/design-and-graphics.svg" alt="design-and-graphics" class="mobile-category-icon"/>
                        </div>
                        <p>Дизайн и графика</p>
                    </a>
                    <a href="#">
                        <div class="img-container">
                            <img src="/img/icons/category-icons/development-and-it.svg" alt="development-and-it" class="mobile-category-icon"/>
                        </div>
                        <p>Разработка и IT</p>
                    </a>
                    <a href="#">
                        <div class="img-container">
                            <img src="/img/icons/category-icons/social-sites-and-ads.svg" alt="social-sites-and-adds" class="mobile-category-icon"/>
                        </div>
                        <p>Cоцсети и реклама</p>
                    </a>
                    <a href="#">
                        <div class="img-container">
                            <img src="/img/icons/category-icons/video-and-animation.svg" alt="video-and-animation" class="mobile-category-icon"/>
                        </div>
                        <p>Видео & анимация</p>
                    </a>
                    
                    <a href="#">
                        <div class="img-container">
                            <img src="/img/icons/category-icons/music-and-audio.svg" alt="music-and-audio" class="mobile-category-icon"/>
                        </div>
                        <p>Музыка и аудио</p>
                    </a>
                    <a href="#">
                        <div class="img-container">
                            <img src="/img/icons/category-icons/photo-edit.svg" alt="photo-edit" class="mobile-category-icon"/>
                        </div>
                        <p>Фото и обработка</p>
                    </a>
                    <a href="#">
                        <div class="img-container">
                            <img src="/img/icons/category-icons/text-and-translations.svg" alt="texts-and-translations" class="mobile-category-icon"/>
                        </div>
                        <p>Тексты и переводы</p>
                    </a>
                    <a href="#">
                        <div class="img-container">
                            <img src="/img/icons/category-icons/blockchain-and-crypto.svg" alt="blockchain-and-crypto" class="mobile-category-icon"/>
                        </div>
                        <p>Блокчейн и крипто</p>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="mobile-popular-services-block mobile">
        <div class="mobile-popular-services-header">
            <h2>Популярные услуги</h2>
            <a href="#">
                Смотреть все
            </a>
        </div>
        
        <div class="mobile-popular-services-container">
            <div class="mobile-popular-services-wrapper">
                <div class="mobile-popular-service-elem">
                    <div class="mobile-popular-service-banner">
                        <img src="/img/ads/mobile-templ.webp" alt="mobile-templ" class="mobile-popular-service-img"/> 
                    </div> 
                    <div class="mobile-popular-service-content">
                        <div class="mobile-service-freelancer-row">
                            <div class="mobile-service-freelancer-data">
                                <div class="mobile-freelancer-img-container">
                                    <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="mobile-freelancer-avatar"/>
                                </div>
                                <p class="mobile-freelancer-name">Smith Duo</p>
                                <img src="/img/icons/verified.svg" alt="verified" class="mobile-verified-freelancer-icon"/>
                            </div>
                            <img src="/img/icons/like.svg" alt="like-icon" class="like-icon"/>
                        </div>
                        <p class="mobile-popular-service-description">
                            Защита от ботов на сайте. Поведенческие боты. 
                        </p>
                        <div class="mobile-popular-service-details">
                            <div class="mobile-popular-service-rating">
                                <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="mobile-yellow-star-icon"/>
                                <p>5.0 <span class="special-text">(570)</span></p>
                            </div>
                            <div class="mobile-popular-service-price">
                                от 10 408 ₽
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mobile-popular-service-elem">
                    <div class="mobile-popular-service-banner">
                        <img src="/img/ads/mobile-templ.webp" alt="mobile-templ" class="mobile-popular-service-img"/> 
                    </div> 
                    <div class="mobile-popular-service-content">
                        <div class="mobile-service-freelancer-row">
                            <div class="mobile-service-freelancer-data">
                                <div class="mobile-freelancer-img-container">
                                    <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="mobile-freelancer-avatar"/>
                                </div>
                                <p class="mobile-freelancer-name">Smith Duo</p>
                                <img src="/img/icons/verified.svg" alt="verified" class="mobile-verified-freelancer-icon"/>
                            </div>
                            <img src="/img/icons/like.svg" alt="like-icon" class="like-icon"/>
                        </div>
                        <p class="mobile-popular-service-description">
                            Защита от ботов на сайте. Поведенческие боты. 
                        </p>
                        <div class="mobile-popular-service-details">
                            <div class="mobile-popular-service-rating">
                                <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="mobile-yellow-star-icon"/>
                                <p>5.0 <span class="special-text">(570)</span></p>
                            </div>
                            <div class="mobile-popular-service-price">
                                от 10 408 ₽
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mobile-popular-service-elem">
                    <div class="mobile-popular-service-banner">
                        <img src="/img/ads/mobile-templ.webp" alt="mobile-templ" class="mobile-popular-service-img"/> 
                    </div> 
                    <div class="mobile-popular-service-content">
                        <div class="mobile-service-freelancer-row">
                            <div class="mobile-service-freelancer-data">
                                <div class="mobile-freelancer-img-container">
                                    <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="mobile-freelancer-avatar"/>
                                </div>
                                <p class="mobile-freelancer-name">Smith Duo</p>
                                <img src="/img/icons/verified.svg" alt="verified" class="mobile-verified-freelancer-icon"/>
                            </div>
                            <img src="/img/icons/like.svg" alt="like-icon" class="like-icon"/>
                        </div>
                        <p class="mobile-popular-service-description">
                            Защита от ботов на сайте. Поведенческие боты. 
                        </p>
                        <div class="mobile-popular-service-details">
                            <div class="mobile-popular-service-rating">
                                <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="mobile-yellow-star-icon"/>
                                <p>5.0 <span class="special-text">(570)</span></p>
                            </div>
                            <div class="mobile-popular-service-price">
                                от 10 408 ₽
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mobile-popular-service-elem">
                    <div class="mobile-popular-service-banner">
                        <img src="/img/ads/mobile-templ.webp" alt="mobile-templ" class="mobile-popular-service-img"/> 
                    </div> 
                    <div class="mobile-popular-service-content">
                        <div class="mobile-service-freelancer-row">
                            <div class="mobile-service-freelancer-data">
                                <div class="mobile-freelancer-img-container">
                                    <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="mobile-freelancer-avatar"/>
                                </div>
                                <p class="mobile-freelancer-name">Smith Duo</p>
                                <img src="/img/icons/verified.svg" alt="verified" class="mobile-verified-freelancer-icon"/>
                            </div>
                            <img src="/img/icons/like.svg" alt="like-icon" class="like-icon"/>
                        </div>
                        <p class="mobile-popular-service-description">
                            Защита от ботов на сайте. Поведенческие боты. 
                        </p>
                        <div class="mobile-popular-service-details">
                            <div class="mobile-popular-service-rating">
                                <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="mobile-yellow-star-icon"/>
                                <p>5.0 <span class="special-text">(570)</span></p>
                            </div>
                            <div class="mobile-popular-service-price">
                                от 10 408 ₽
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mobile-popular-service-elem">
                    <div class="mobile-popular-service-banner">
                        <img src="/img/ads/mobile-templ.webp" alt="mobile-templ" class="mobile-popular-service-img"/> 
                    </div> 
                    <div class="mobile-popular-service-content">
                        <div class="mobile-service-freelancer-row">
                            <div class="mobile-service-freelancer-data">
                                <div class="mobile-freelancer-img-container">
                                    <img src="/img/freelancer-avatars/freelancer1.webp" alt="freelancer" class="mobile-freelancer-avatar"/>
                                </div>
                                <p class="mobile-freelancer-name">Smith Duo</p>
                                <img src="/img/icons/verified.svg" alt="verified" class="mobile-verified-freelancer-icon"/>
                            </div>
                            <img src="/img/icons/like.svg" alt="like-icon" class="like-icon"/>
                        </div>
                        <p class="mobile-popular-service-description">
                            Защита от ботов на сайте. Поведенческие боты. 
                        </p>
                        <div class="mobile-popular-service-details">
                            <div class="mobile-popular-service-rating">
                                <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="mobile-yellow-star-icon"/>
                                <p>5.0 <span class="special-text">(570)</span></p>
                            </div>
                            <div class="mobile-popular-service-price">
                                от 10 408 ₽
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="main-block">
        <div class="main-container">
            <div class="content-block">    
                <div class="start-earning-block" class="computer-version">
                    <div class="start-earning-banner-container">
                        <div class="start-earning-banner-text">
                            <h2>Начните зарабатывать</h2>
                            <p>Файворк не берет комиссии с фрилансеров, быстро отвечает на вопросы в поддержке, и является биржей №1 по версии Product Radar</p>
                            <div class="become-freelancer">
                                <span>Стать фрилансером</span>
                                <img src="/img/icons/arrow-right-blue.svg" alt="arrow-right-blue" class="arrow-right-blue-icon"/>
                            </div>
                        </div>
                        <div class="start-earning-banner-img">
                            <img src="/img/freelancer.webp" alt="freelancer" class="freelancer-banner-img"/>
                        </div>
                    </div>
                    
                    <div class="start-earning-steps-container">
                        <h3>Всего 4 шага и вы зарабатываете</h3>
                        <div class="start-earning-steps start-earning-step1">
                            <div class="start-earning-step">
                                <div class="start-earning-step-num">
                                    1
                                </div>
                                <p>Создайте аккаунт</p>
                            </div>
                            <div class="start-earning-step start-earning-step2">
                                <div class="start-earning-step-num">
                                    2
                                </div>
                                <p>Заполните профиль</p>
                            </div>
                            <div class="start-earning-step start-earning-step3">
                                <div class="start-earning-step-num">
                                    3
                                </div>
                                <p>Добавьте услуги</p>
                            </div>
                            <div class="start-earning-step start-earning-step4">
                                <div class="start-earning-step-num">
                                    4
                                </div>
                                <p>Принимайте заказы</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="additional-services-block computer-version">
                    <div class="additional-services-header">
                        <h2>
                            Возможно вам понадобится
                        </h2>
                        <div class="carousel-controls">
                            <img src="/img/icons/prev-carousel.svg" alt="prev-carousel" class="prev-carousel-button"/>
                            <img src="/img/icons/next-carousel.svg" alt="next-carousel" class="next-carousel-button"/>
                        </div>
                    </div>
                    
                    <div class="additional-services-container">
                        <div class="additional-services">
                            <div class="swiper swiper-hidden additional-services-swiper">
                                <div class="service-card-block swiper-wrapper">
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
                                </div>
                            </div>
                            
                            <div class="swiper swiper-hidden additional-services-swiper">
                                <div class="service-card-block swiper-wrapper">
                                    <a href="#" class="ad-container swiper-slide">
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
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
                <div class="additional-apps-block computer-version">
                    <div class="additional-apps-content">
                        <img src="/img/fiwork-banner.webp" alt="fiwork" class="fiwork-banner"/>
                        <div class="additional-apps-text">
                            <h2>Заказывать услуги и работать в приложении ещё удобнее и быстрее!</h2>
                            <p>Все категории услуг, заказы и переписка у вас в кармане.</p>
                        </div>
                    </div>
                    <div class="additional-apps-links">
                        <div class="additional-apps-intro">
                            <p>
                                Наведите камеру на QR-код, чтобы скачать приложение
                            </p>
                        </div>
                        
                        <div class="additional-apps-qr">
                            <img src="/img/fiwork-apps-qr.svg" alt="fiwork-qr" class="fiwork-qr"/>
                        </div>
                        <div class="additional-apps-platforms">
                            <a href="#"><img src="/img/fiwork-on-google-play.svg" class="fiwork-on-google-play" alt="fiwork-google-play"/></a>
                            <a href="#"><img src="/img/fiwork-on-appstore.svg" class="fiwork-on-appstore" alt="fiwork-on-appstore"/></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <?=$footer;?>
    <?=$modalWindows;?>

</body>
<script src="./js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/swiper.js"></script>
<script src="./js/index.js?v=<?= time(); ?>"></script>
<script src="./js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>    
<link rel="stylesheet" href="/css/swiper.css" />
</html>
