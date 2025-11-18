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
    <link rel="stylesheet" href="/css/fiwork-premium.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
</head>
<body>
    <?=$userHeader;?>
    
    <div class="main-block">
        <div class="salute-container">
            <img src="/img/salute.webp" alt="salute" class="salute-banner"/>
        </div>
        
        <div class="main-container">
            <div class="fiwork-premium-block">
                <div class="more-possibilities-container">
                    <h3 class="try-now">попробуйте сейчас</h3>
                    <h1>Больше возможностей</h1>
                    <p class="premium-possibilities-p">Золотая галочка, управление проектами и финансами, эксклюзивные инструменты и другие привилегии в обновлённой подписке</p>
                    <div class="toggle-premium-to-yearly">
                        <span>На месяц</span>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <span>На год - 30%</span>
                    </div>
                    
                    <div class="premium-possibilities-container">
                        <div class="premium-possibilities-details">
                            <div class="connect-premium-block">
                                <img src="/img/icons/premium-icon.webp" alt="premium-icon" class="premium-icon"/>
                                <div class="connect-premium-container">
                                    <div class="connect-text">Подключите</div>
                                    <div class="premium-text"><span>Premium</span><img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/></div>
                                </div>
                            </div>
                            
                            <div class="connect-premium-description">
                                Поддержка проекта и доступ к дополнительным преимуществам.
                            </div>
                            
                            <div class="price-month monthly">
                                <span class="price-text">19&nbsp;000&nbsp;₽</span> /в месяц
                            </div>
                            
                            <div class="price-month yearly" style="display: none;">
                                <span class="price-text">159&nbsp;600&nbsp;₽</span> /в год
                            </div>
                            
                            <input type="button" value="Подключите сейчас" class="connect-now-button"/>
                        </div>
                        <div class="premium-possibilities-advantages">
                            <div class="exclusive-container">
                                <div class="exclusive-text">Эксклюзивно</div>
                            </div>
                            <div class="main-advantages">
                                <h3>Основные преимущества</h3>
                                <div class="main-advantages-container">
                                    <div class="main-advantage-elem"><img src="/img/icons/check-circle-blue.svg" class="check-circle-icon" alt="check-circle"/>Золотая галочка</div>
                                    <div class="main-advantage-elem"><img src="/img/icons/check-circle-blue.svg" class="check-circle-icon" alt="check-circle"/>Больше заказов</div>
                                    <div class="main-advantage-elem"><img src="/img/icons/check-circle-blue.svg" class="check-circle-icon" alt="check-circle"/>Видеоаватарка</div>
                                    <div class="main-advantage-elem"><img src="/img/icons/check-circle-blue.svg" class="check-circle-icon" alt="check-circle"/>Доступ к сервисам</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="additional-advantages-container">
                    <h2>Дополнительные преимущества и сервисы для вашего бизнеса и заработка.</h2>
                    <div class="additional-advantages-wrapper">
                        <div class="additional-advantage-elem">
                            <img src="/img/icons/fiwork-premium-page/golden-check-icon.svg"/>
                            <h3>Золотая галочка</h3>
                            <p>Бесплатный сервис для быстрого конвертирования сайта в приложение</p>
                        </div>
                        
                        <div class="additional-advantage-elem">
                            <img src="/img/icons/fiwork-premium-page/like-icon.svg"/>
                            <h3>Больше заказов</h3>
                            <p>Ваши услуги показываются намного выше и чаще чем у пользователей без подписки</p>
                        </div>
                        
                        <div class="additional-advantage-elem">
                            <img src="/img/icons/fiwork-premium-page/clear-icon.svg"/>
                            <h3>Видеоаватарка</h3>
                            <p>Выделите свой профиль с помощью анимированной аватарки</p>
                        </div>
                        
                        <div class="additional-advantage-elem">
                            <img src="/img/icons/fiwork-premium-page/phone-icon.svg"/>
                            <h3>Приоритетная поддержка</h3>
                            <p>Находите ответы на свои вопросы и получайте быструю помощь.</p>
                        </div>
                        
                        <div class="additional-advantage-elem">
                            <img src="/img/icons/fiwork-premium-page/love-icon.svg"/>
                            <h3>Ускоренные выплаты</h3>
                            <p>Приоритетная очередь на выплаты, вывод средств осуществляется в течении 1 дня.</p>
                        </div>
                        
                        <div class="additional-advantage-elem">
                            <img src="/img/icons/fiwork-premium-page/print-icon.svg"/>
                            <h3>Защита от кражи данных проекта </h3>
                            <p>При оформлении заказа есть возможность подписать NDA-внутри сервиса</p>
                        </div>
                        
                        <div class="additional-advantage-elem">
                            <img src="/img/icons/fiwork-premium-page/star-icon.svg"/>
                            <h3>Достижение «Подписчик»</h3>
                            <p>В профиле навсегда останется достижение о том что вы были Premium подписчиком</p>
                        </div>
                        
                        <div class="additional-advantage-elem">
                            <img src="/img/icons/fiwork-premium-page/gift-icon.svg"/>
                            <h3>Доступ к пробным функциям</h3>
                            <p>Попробуйте потенциальные преимущества, которые мы сейчас тестируем.</p>
                        </div>
                        
                        <div class="additional-advantage-elem">
                            <img src="/img/icons/fiwork-premium-page/check-icon.svg"/>
                            <h3>Редактирование отзывов</h3>
                            <p>Управляйте комментариями которые вы оставляете без ограничения по времени.</p>
                        </div>
                    </div>
                </div>
                
                <div class="users-supporting-project-block">
                    <div class="users-supporting-project-num">
                        9&nbsp;343 пользователя оформили Premium и попали на доску почета
                    </div>
                    <h2>
                        Пользователи поддерживающие проект
                    </h2>
                    
                    <div class="users-supporting-project-container">
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user1.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Devon Lane</h4>
                                    <p class="user-position">Web Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user2.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Darrell Steward</h4>
                                    <p class="user-position">React Native Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user3.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Jane Cooper</h4>
                                    <p class="user-position">Mobile Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user4.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Albert Flores</h4>
                                    <p class="user-position">Javascript Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user5.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Kathryn Murphy</h4>
                                    <p class="user-position">Lead Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user1.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Devon Lane</h4>
                                    <p class="user-position">Web Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user2.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Darrell Steward</h4>
                                    <p class="user-position">React Native Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user3.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Jane Cooper</h4>
                                    <p class="user-position">Mobile Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user4.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Albert Flores</h4>
                                    <p class="user-position">Javascript Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user5.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Kathryn Murphy</h4>
                                    <p class="user-position">Lead Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user1.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Devon Lane</h4>
                                    <p class="user-position">Web Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user2.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Darrell Steward</h4>
                                    <p class="user-position">React Native Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user3.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Jane Cooper</h4>
                                    <p class="user-position">Mobile Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user4.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Albert Flores</h4>
                                    <p class="user-position">Javascript Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="user-supporting-project">
                            <div class="img-container">
                                <img src="/img/icons/fiwork-premium-page/user5.webp"/>
                            </div>
                            <div class="user-supporting-content"> 
                                <div class="user-data">
                                    <h4 class="user-fullname">Kathryn Murphy</h4>
                                    <p class="user-position">Lead Developer</p>
                                </div>
                                <div class="user-rating">
                                    <div class="user-stars">
                                        <img src="/img/icons/yellow-star.svg" class="user-star" alt="user-star"/>
                                        <span class="user-stars-num">5.0</span>
                                    </div>
                                    <div class="username">
                                        @umairshafiq101
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="show-more-button">
                        <img src="/img/icons/fiwork-premium-page/arrow-to-bottom.svg" alt="arrow-to-bottom" class="arrow-to-bottom"/>
                        Показать еще
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    
    <?=$footer;?>
    <?=$modalWindows;?>
        
    <div class="fiwork-premium-modal-block hidden">
        <div class="fiwork-premium-modal-container">
            <div class="fiwork-premium-modal-header-icons">
                <img src="/img/icons/fiwork-premium-page/round-brilliant.svg" alt="round-brilliant" class="round-brilliant-icon"/>
                <img src="/img/icons/x-close.svg" alt='close-fiwork-premium-modal' class='close-fiwork-premium-modal'/>
            </div>
            <h3>О Fiwork Premium</h3>
            <p>
                Бесплатная версия Fiwork предлагает пользователям больше, чем любая другая фриланс-биржа или маркетплейс фриланс услуг, а с Fiwork Premium Ваши возможности станут еще шире.
            </p>
            
            <p>
                Мы сделали подписку Fiwork Premum платной, поскольку большенство премиум-функций требуют дополнительных расходов, в том числе на аренду дата-центров и покупку серверов. Вклад подписчиков позволяет нам покрывать часть этих расходов и помогает Fiwork оставаться бесплатным для всех пользователей.
            </p>
            
            <p><b>Ваша подписка: не активна</b></p>
            
            <div class="fiwork-modal-control-buttons">
                <input type="button" value="Закрыть" class="close-button"/>
                <input type="button" value="Управлять" class="control-button"/>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script>
    $(".close-fiwork-premium-modal").on("click",function(){
        $(".fiwork-premium-modal-block").addClass("hidden");
    });
    
    $(".fiwork-modal-control-buttons .close-button").on("click",function(){
        $(".fiwork-premium-modal-block").addClass("hidden");  
    });
    
    $(".connect-now-button").on("click",function(){
        $(".fiwork-premium-modal-block").removeClass("hidden");
    });
    
    $(".toggle-premium-to-yearly input[type='checkbox']").on("change", function(){
        if($(this).is(":checked")){
            $(".price-month.yearly").show();
            $(".price-month.monthly").hide();
        }else{
            $(".price-month.yearly").hide();
            $(".price-month.monthly").show();
        }
    });
</script>
</html>
