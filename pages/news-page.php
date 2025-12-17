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
    <link rel="stylesheet" href="/css/news-page.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/aside-accordion.css?v=<?= time(); ?>" />
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
            <div class="news-block">
                <div class="news-navigation">
                    <a href="#">Главная</a>
                </div>
                <h1>Новости</h1>
                
                <div class="news-filter-container">
                    <div class="filter-param selected">
                        РБ Спорт
                    </div>
                    <div class="filter-param">
                        Ставки
                    </div>
                    <div class="filter-param">
                        РБ Бизнес
                    </div>
                </div>
                
                <p class="section-description">
                    В этом разделе «Файворк» регулярно публикует новости ставок на спорт, интервью спортсменов с их
                    мнениями и ожиданиями, котировки букмекеров, инфографику к популярным спортивным событиям со статистикой.
                    Также здесь публикуются новости о договорных матчах.
                </p>
                
                <div class="articles-container">
                    <a href="#" class="news-article">
                        <div class="img-container">
                            <img src="/img/news-page/mclaren.png" alt="formula1" class="article-img"/>
                        </div>
                        <div class="news-article-description">
                            <h3>
                                Пиастри одержал победу в спринте
                                на Гран-при Катара
                            </h3>
                            <div class="article-datetime">
                                <span class="date">29 Ноя</span>,&nbsp;<span class="time">19:55</span>&nbsp;<img src="/img/news-page/grey-dot.svg" class="grey-dot-icon" alt="grey-dot"/>&nbsp;Читать <span class="read-time">1 мин</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="news-article">
                        <div class="img-container">
                            <img src="/img/news-page/arsenal-chelsea.png" alt="arsenal-chelsea" class="article-img"/>
                        </div>
                        <div class="news-article-description">
                            <h3>
                                На матч «Челси» — «Арсенал»
                                принята ставка 150 000 рублей
                            </h3>
                            <div class="article-datetime">
                                <span class="date">29 Ноя</span>,&nbsp;<span class="time">19:55</span>&nbsp;<img src="/img/news-page/grey-dot.svg" class="grey-dot-icon" alt="grey-dot"/>&nbsp;Читать <span class="read-time">1 мин</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="news-article">
                        <div class="img-container">
                            <img src="/img/news-page/football.png" alt="football" class="article-img"/>
                            <div class="exclusive-content">
                                эксклюзив
                            </div>
                        </div>
                        <div class="news-article-description">
                            <h3>
                                РПЛ: Концентрация тумана в
                                Самаре была оценена как
                                приемлемая
                            </h3>
                            <div class="article-datetime">
                                <span class="date">29 Ноя</span>,&nbsp;<span class="time">19:55</span>&nbsp;<img src="/img/news-page/grey-dot.svg" class="grey-dot-icon" alt="grey-dot"/>&nbsp;Читать <span class="read-time">1 мин</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="news-article">
                        <div class="img-container">
                            <img src="/img/news-page/ravil-izmaylov.png" alt="ravil-izmaylov" class="article-img"/>
                            <div class="exclusive-content">
                                эксклюзив
                            </div>
                        </div>
                        <div class="news-article-description">
                            <h3>
                                Интервью с Равилем Измайловым.
                                Взлет «Балтики» и новые задачи
                                после 18 тура. Работа Талалаева интерес к игрокам
                            </h3>
                            <div class="article-datetime">
                                <span class="date">29 Ноя</span>,&nbsp;<span class="time">19:55</span>&nbsp;<img src="/img/news-page/grey-dot.svg" class="grey-dot-icon" alt="grey-dot"/>&nbsp;Читать <span class="read-time">1 мин</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="news-article">
                        <div class="img-container">
                            <img src="/img/news-page/uill-bitten.png" alt="uill-bitten" class="article-img"/>
                            <div class="exclusive-content">
                                эксклюзив
                            </div>
                        </div>
                        <div class="news-article-description">
                            <h3>
                                Форвард «Сочи» Биттен: Нам нужно
                                не вешать голову
                            </h3>
                            <div class="article-datetime">
                                <span class="date">29 Ноя</span>,&nbsp;<span class="time">19:55</span>&nbsp;<img src="/img/news-page/grey-dot.svg" class="grey-dot-icon" alt="grey-dot"/>&nbsp;Читать <span class="read-time">1 мин</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="news-article">
                        <div class="img-container">
                            <img src="/img/news-page/alex-bakurov.png" alt="alex-bakurov" class="article-img"/>
                            
                        </div>
                        <div class="news-article-description">
                            <h3>
                                Бакуров сообщил, что после удара
                                Большунова у него не гнется нога
                            </h3>
                            <div class="article-datetime">
                                <span class="date">29 Ноя</span>,&nbsp;<span class="time">19:55</span>&nbsp;<img src="/img/news-page/grey-dot.svg" class="grey-dot-icon" alt="grey-dot"/>&nbsp;Читать <span class="read-time">1 мин</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <?=$footer;?>
    <?=$modalWindows;?>

</body>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/swiper.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>    
<link rel="stylesheet" href="/css/swiper.css" />
</html>
