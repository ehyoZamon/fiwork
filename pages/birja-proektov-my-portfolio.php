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
    <link rel="stylesheet" href="/css/birja-proektov-my-portfolio.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?=$userHeader;?>
    
    <div class="main-block">
        <div class="main-container">
            <div class="birja-proektov-block">
                <div class="my-portfolio-nav">
                    <a href="#"><img src="/img/icons/operations-page/home-icon.svg" class="home-icon" alt="home-icon"/></a>
                    <img src="/img/icons/operations-page/separator.svg" class="separator-icon" alt="separator-icon"/>
                    <span>Мое портфолио</span> 
                </div>
                <div class="birja-proektov-container">
                    <div class="aside-container">
                        
                        <div class="back-to-project-list">
                            <img src="/img/birja-proektov/arrow-left.svg" alt="green-arrow-left" class="green-arrow-left"/>
                            К списку проектов
                        </div>
                        
                        <div class="menu-container">
                            <div class="menu-section">
                                <label>Коротко о проекте</label>
                                <p class="menu-elem">
                                    Покупатель: <a href="#">lexmaxak</a>
                                </p>
                                <p class="menu-elem">
                                    Разместил проектов на бирже: <span class="menu-elem-count">(0)</span>
                                </p>
                                <p class="menu-elem">
                                    Нанято: <span class="menu-elem-count">(0)</span>
                                </p>
                                
                                <p class="menu-elem">
                                    Осталось до выбора исполнителя: <span class="menu-elem-count">2 д. 23.ч</span>
                                </p>
                                <p class="menu-elem">
                                    Предложений отправлено: <span class="menu-elem-count">(1)</span>
                                </p>
                                <p class="menu-elem">
                                    Категория: <span class="menu-elem-count">Разработка и IT</span>
                                </p>
                                <p class="menu-elem">
                                    Бюджет проекта: <span class="menu-elem-count">(до 50 000 руб)</span>
                                </p>
                            </div>
                        </div>
                        
                        <div class="menu-container">
                            <div class="download-the-app">
                                <h3>Скачайте приложение</h3>
                                <p>
                                    Выполнять задания удобнее в приложении
                                </p>
                                
                                <div class="platforms">
                                    <a href="#" class="platform">
                                        <img src="/img/birja-proektov/apple.svg" alt="apple-store-icon" class="apple-icon"/>
                                    </a>
                                    <a href="#" class="platform">
                                        <img src="/img/birja-proektov/google-play.svg" alt="google-store" class="google-store-icon"/>
                                    </a>
                                    <a href="#" class="platform">
                                        <img src="/img/birja-proektov/store.svg" alt="store" class="store-icon"/>
                                    </a>
                                    <a href="#" class="platform">
                                        <img src="/img/birja-proektov/microsoft-store.svg" alt="microsoft-store" class="microsoft-store-icon"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="content-container">
                        <div class="project-offers-container">
                            <div class="project-offer">
                                <div class="project-offer-description-container">
                                    <div class="project-offer-description">
                                        <h3 class="project-offer-header">
                                            Реализация 8-bit игры для Telegram
                                        </h3>
                                    </div>
                                    <div class="preferred-budget-container">
                                        <div class="preferred-budget">Цена до:&nbsp;<span class="preferred-budget-count">5 000 ₽</span></div>
                                    </div>
                                </div>
                                
                                <p class="project-to-do-description">
                                    Нужна разработка простой, но увлекательной 8-битной аркадной игры для Telegram Mini App. Игра должна быть в стиле
                                    классических ретро-аркад с пиксельной графикой и чиптюн-звуками. Основная механика — раннер: игрок управляет персонажем,
                                    прыгает через препятствия, собирает монеты и бусты, старается набрать максимальное количество очков. Сложность постепенно
                                    увеличивается, каждая игровая сессия занимает 1–2 минуты. После завершения попытки результат отправляется в таблицу лидеров.
                                    Необходимо реализовать интеграцию с Telegram API: авторизация через WebApp, глобальный и дружеский лидерборды, возможность
                                    делиться результатом в чат и получать напоминания от бота. В проекте также нужны внутриигровые задания и базовая экономика
                                    — накопление монет, простые апгрейды и ежедневные квесты. Опционально — интеграция платежей Telegram для покупки монет и 
                                    отключения рекламы. Важные требования: быстрая загрузка на мобильных устройствах, оптимизация под iOS/Android и десктопные 
                                    клиенты Telegram, а также базовые механизмы античита (валидация результатов на сервере). Стек — HTML5/TypeScript 
                                    (PixiJS или Phaser), сервер на Node.js + PostgreSQL/Redis. В итоге ожидается MVP: готовая игра, серверная часть, 
                                    документация и исходный код в репозитории.Нужна разработка простой, но увлекательной 8-битной аркадной игры для Telegram 
                                    Mini App. Игра должна быть в стиле классических ретро-аркад с пиксельной графикой и чиптюн-звуками. Основная механика — 
                                    раннер: игрок управляет персонажем, прыгает через препятствия, собирает монеты и бусты, старается набрать максимальное количество
                                    очков. Сложность постепенно увеличивается, каждая игровая сессия занимает 1–2 минуты. После завершения попытки результат 
                                    отправляется в таблицу лидеров. Необходимо реализовать интеграцию с Telegram API: авторизация через WebApp, глобальный и
                                    дружеский лидерборды, возможность делиться результатом в чат и получать напоминания от бота. В проекте также нужны внутриигровые 
                                    задания и базовая экономика — накопление монет, простые апгрейды и ежедневные квесты. Опционально — интеграция платежей
                                    Telegram для покупки монет и отключения рекламы. Важные требования: быстрая загрузка на мобильных устройствах, оптимизация
                                    под iOS/Android и десктопные клиенты Telegram, а также базовые механизмы античита (валидация результатов на сервере). 
                                    Стек — HTML5/TypeScript (PixiJS или Phaser), сервер на Node.js + PostgreSQL/Redis. В итоге ожидается MVP: готовая игра,
                                    серверная часть, документация и исходный код в репозитории.
                                </p>
                                <div class="customer-description-container">
                                    <div class="img-container">
                                        <img src="/img/birja-proektov/user-avatar6.png" alt="user-avatar" class="user-avatar"/>
                                    </div>
                                    <div class="customer-details-container">
                                        <div class="customer-detail">
                                            Покупатель: &nbsp;<a href="#">lexamak</a><img src="/img/birja-proektov/category2.png"/> 
                                        </div>
                                        <div class="customer-detail">
                                            Размещено проектов на бирже:&nbsp<span class="project-put-count">9</span>
                                        </div>
                                        <div class="customer-detail">
                                            Нанято: 67% <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="offer-service-container">
                                    <div class="offer-service-data-container">
                                        <div class="offer-service-data-wrapper">
                                            <div class="offer-service-data">
                                                Осталось:&nbsp;<span class="remaining-time">2 д. 23 ч.</span>
                                            </div>
                                            <div class="offer-service-data">
                                                Предложений:&nbsp;<span class="offer-count">2</span>
                                            </div>
                                        </div>
                                        <div class="offer-service-data-wrapper">
                                            <div class="offer-service-data">
                                                Разработка и IT
                                            </div>
                                            <img src="/img/icons/chevron-right.svg" alt="chevron-right" class="chevron-right"/>
                                            <div class="offer-service-data">
                                                Игры
                                            </div>
                                        </div>
                                    </div>
                                    <div class="active-until">
                                        активен до 20 декабря
                                    </div>
                                </div>
                                
                                <div class="offer-service-button-container">
                                    <a href="#" class="offer-service-button">Предложить услугу</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
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
    $(".select-menu input[type='button']").on("click",function(){
       $(".select-menu input[type='button'").removeClass("selected");
       $(this).addClass("selected");
    });
</script>
</html>
