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
    <link rel="stylesheet" href="/css/my-services-page.css?v=<?= time(); ?>" />
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
            <div class="my-services-block">
                <div class="my-services-nav">
                    <div class="my-services-nav-part1">
                        <a href="#"><img src="/img/icons/operations-page/home-icon.svg" class="home-icon" alt="home-icon"/></a>
                        <img src="/img/icons/operations-page/separator.svg" class="separator-icon" alt="separator-icon"/>
                        <span>Мои услуги</span> 
                    </div>
                    <div class="my-services-nav-part2">
                        <div class="part1">
                            <label class="receive-orders">Принимаю заказы</label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                            
                            <span class="question-and-description tooltip-container">
                                <img src="/img/icons/round-question-icon.svg" alt="round-question" class="round-question-icon tooltip-question"/>
                                <span class="tooltip-text" style="font-weight: 400;">
                                    <h4>Имя подсказки</h4>
                                    <p>Текст подсказки</p>
                                </span>
                            </span>
                            
                        </div>
                        <div class="vertical-line">
                        </div>
                        <div class="part2">
                            <input type="checkbox" name="hide-services-on-weekends">
                            <span>Скрывать услуги на выходные</span>
                            <span class="question-and-description tooltip-container">
                                <img src="/img/icons/round-question-icon.svg" alt="round-question" class="round-question-icon tooltip-question"/>
                                <span class="tooltip-text" style="font-weight: 400; right: 0;">
                                    <h4>Имя подсказки</h4>
                                    <p>Текст подсказки</p>
                                </span>
                            </span>
                            
                        </div>
                    </div>
                </div>
                
                <div class="my-services-container">
                    <div class="aside-container">
                        <div class="add-new-service">
                            <img src="/img/my-services-page/plus.svg" alt="plus" class="plus-icon"/>
                            Добавить новую услугу
                        </div>
                        <div class="my-services-by-category">
                            <div class="my-services-by-category-header">Ваши услуги по категориям</div>
                            <div class="my-services-by-category-container">
                                <div class="category-elem">
                                    <p>Дизайн</p>
                                    <span>1345</span>
                                </div>
                                
                                <div class="category-elem">
                                    <p>Разработка и IT</p>
                                    <span>12,736</span>
                                </div>
                                
                                <div class="category-elem">
                                    <p>Тексты и переводы</p>
                                    <span>1345</span>
                                </div>
                                
                                <div class="category-elem">
                                    <p>SEO и трафик</p>
                                    <span>1345</span>
                                </div>
                                
                                <div class="category-elem">
                                    <p>Соцсети и реклама</p>
                                    <span>1345</span>
                                </div>
                                
                                <div class="category-elem">
                                    <p>Соцсети и реклама</p>
                                    <span>1345</span>
                                </div>
                                
                                <div class="category-elem">
                                    <p>Аудио, видео, съемка</p>
                                    <span>1345</span>
                                </div>
                                
                                <div class="category-elem">
                                    <p>Бизнес и жизнь</p>
                                    <span>1345</span>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="import-services">
                            <h3>Импортировать услуги</h3>
                            <p>
                                Вы можете перенести товары или услуги из любой другой фриланс биржи или маркетплейса
                            </p>
                            <div class="import-from-other-platforms">
                                <div class="platform">
                                    <img src="/img/my-portfolio-page/kwork-icon.svg" alt="kwork-icon" class="platform-icon">
                                    <img src="/img/my-portfolio-page/pointer.svg" alt="pointer-icon" class="pointer-icon">
                                    <div class="import-platform-description">
                                        Перенести портфолио из Kwork
                                    </div>
                                </div>
                                <div class="platform">
                                    <img src="/img/my-portfolio-page/fl-icon.svg" style="left: 50px;" alt="fl-icon" class="platform-icon">
                                    <img src="/img/my-portfolio-page/pointer.svg" alt="pointer-icon" class="pointer-icon">
                                    <div class="import-platform-description">
                                        Перенести портфолио из Fl
                                    </div>
                                </div>
                                <div class="platform">
                                    <img src="/img/my-portfolio-page/fi-icon.svg" style="left: 100px;" alt="fi-icon" class="platform-icon">
                                    <img src="/img/my-portfolio-page/pointer.svg" alt="pointer-icon" class="pointer-icon">
                                    <div class="import-platform-description">
                                        Перенести портфолио из Fi
                                    </div>
                                </div>
                                <div class="platform">
                                    <img src="/img/my-portfolio-page/up-icon.svg" style="left: 140px;" alt="up-icon" class="platform-icon">
                                    <img src="/img/my-portfolio-page/pointer.svg" alt="pointer-icon" class="pointer-icon">
                                    <div class="import-platform-description">
                                        Перенести портфолио из UP
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="my-services-wrapper">
                        <div class="my-services-wrapper-header">
                            <div class="my-services-wrapper-nav">
                                <div class="my-services-wrapper-nav-elem show-active active">
                                    Активные
                                    <div class="elem-count">2</div>
                                </div>
                                <div class="my-services-wrapper-nav-elem show-stoped">
                                    Остановленные
                                    <div class="elem-count">1</div>
                                </div>
                                <div class="my-services-wrapper-nav-elem show-all">
                                    Все
                                    <div class="elem-count">3</div>
                                </div>
                            </div>
                            <div class="my-services-wrapper-search">
                                <input type="text" placeholder="Поиск по названию" class="my-services-wrapper-search-input"/>
                                <img src="/img/my-services-page/search-icon.svg" alt="search-icon" class="search-icon"/>
                            </div>
                        </div>
                        
                        <div class="my-services-wrapper-container">
                            <div class="my-service all active">
                                <div class="my-service-container">
                                    <div class="img-container">
                                        <img src="/img/my-services-page/ios-flutter.png" class="my-service-banner" alt="service-banner"/>
                                    </div>
                                    <div class="my-service-description">
                                        <div class="my-service-description-header">
                                            <label>Разработка приложения для IOS на Flutter</label>
                                            <div class="my-service-description-controls">
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/delete.svg" alt="delete-icon" class="delete-icon tooltip-question"/>
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Удалить</p>
                                                    </span>
                                                </span>
                                                
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/pause.svg" alt="pause-icon" class="pause-icon tooltip-question"/>
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Пауза</p>
                                                    </span>
                                                </span>
                                                
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/edit.svg" alt="edit-icon" class="edit-icon tooltip-question"/>
                                                
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Редактировать</p>
                                                    </span>
                                                </span>
                                                
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/copy.svg" alt="copy-icon" class="copy-icon tooltip-question"/>
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Копировать</p>
                                                    </span>
                                                </span>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="my-service-description-container">
                                            <div class="my-service-description-details">
                                                <div class="my-service-description-detail">
                                                    <img src="/img/my-services-page/eye.svg" alt="eye-icon" class="eye-icon"/>
                                                    <p><span>Просмотры</span>&nbsp;
                                                    <span>6</span></p>
                                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                                </div>
                                                <div class="my-service-description-detail">
                                                    <img src="/img/my-services-page/eye.svg" alt="eye-icon" class="eye-icon"/>
                                                    <p><span>Продажи</span>&nbsp;
                                                    <span>0</span></p>
                                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                                </div>
                                                <div class="my-service-description-detail">
                                                    <img src="/img/my-services-page/eye.svg" alt="eye-icon" class="eye-icon"/>
                                                    <p><span>Заработано</span>&nbsp;
                                                    <span>0</span></p>
                                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                                </div>
                                            </div>
                                            <div class="my-service-description-text">
                                                Здесь будет отображаться рейтинг
                                                кворка после 8 продаж
                                            </div>
                                            <div class="my-service-description-sum">
                                                32 000 ₽
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="my-service-message type1">
                                    <div class="my-service-message-text">
                                        <img src="/img/my-services-page/warning.svg" alt="warning-icon" class="warning-icon"/>
                                        <p><b>Что нужно исправить:</b> Изображения кворка</p>
                                    </div>
                                    <a href="#">
                                        Перейти к исправлению
                                    </a>
                                </div>
                            </div>
                            
                            <div class="my-service all active">
                                <div class="my-service-container">
                                    <div class="img-container">
                                        <img src="/img/my-services-page/ios-flutter.png" class="my-service-banner" alt="service-banner"/>
                                    </div>
                                    <div class="my-service-description">
                                        <div class="my-service-description-header">
                                            <label>Разработка приложения для IOS на Flutter</label>
                                            <div class="my-service-description-controls">
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/delete.svg" alt="delete-icon" class="delete-icon tooltip-question"/>
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Удалить</p>
                                                    </span>
                                                </span>
                                                
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/pause.svg" alt="pause-icon" class="pause-icon tooltip-question"/>
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Пауза</p>
                                                    </span>
                                                </span>
                                                
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/edit.svg" alt="edit-icon" class="edit-icon tooltip-question"/>
                                                
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Редактировать</p>
                                                    </span>
                                                </span>
                                                
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/copy.svg" alt="copy-icon" class="copy-icon tooltip-question"/>
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Копировать</p>
                                                    </span>
                                                </span>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="my-service-description-container">
                                            <div class="my-service-description-details">
                                                <div class="my-service-description-detail">
                                                    <img src="/img/my-services-page/eye.svg" alt="eye-icon" class="eye-icon"/>
                                                    <p><span>Просмотры</span>&nbsp;
                                                    <span>6</span></p>
                                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                                </div>
                                                <div class="my-service-description-detail">
                                                    <img src="/img/my-services-page/eye.svg" alt="eye-icon" class="eye-icon"/>
                                                    <p><span>Продажи</span>&nbsp;
                                                    <span>0</span></p>
                                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                                </div>
                                                <div class="my-service-description-detail">
                                                    <img src="/img/my-services-page/eye.svg" alt="eye-icon" class="eye-icon"/>
                                                    <p><span>Заработано</span>&nbsp;
                                                    <span>0</span></p>
                                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                                </div>
                                            </div>
                                            <div class="my-service-description-text">
                                                Здесь будет отображаться рейтинг
                                                кворка после 8 продаж
                                            </div>
                                            <div class="my-service-description-sum">
                                                32 000 ₽
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="my-service-message type1 hidden">
                                    <div class="my-service-message-text">
                                        <img src="/img/my-services-page/warning.svg" alt="warning-icon" class="warning-icon"/>
                                        <p><b>Что нужно исправить:</b> Изображения кворка</p>
                                    </div>
                                    <a href="#">
                                        Перейти к исправлению
                                    </a>
                                </div>
                            </div>
                            
                            <div class="my-service all stoped">
                                <div class="my-service-container">
                                    <div class="img-container">
                                        <img src="/img/my-services-page/ios-flutter.png" class="my-service-banner" alt="service-banner"/>
                                    </div>
                                    <div class="my-service-description">
                                        <div class="my-service-description-header">
                                            <label>Разработка приложения для IOS на Flutter</label>
                                            <div class="my-service-description-controls">
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/delete.svg" alt="delete-icon" class="delete-icon tooltip-question"/>
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Удалить</p>
                                                    </span>
                                                </span>
                                                
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/pause.svg" alt="pause-icon" class="pause-icon tooltip-question"/>
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Пауза</p>
                                                    </span>
                                                </span>
                                                
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/edit.svg" alt="edit-icon" class="edit-icon tooltip-question"/>
                                                
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Редактировать</p>
                                                    </span>
                                                </span>
                                                
                                                <span class="question-and-description tooltip-container">
                                                    <img src="/img/my-services-page/copy.svg" alt="copy-icon" class="copy-icon tooltip-question"/>
                                                    <span class="tooltip-text" style="font-weight: 400; style: right: 0;">
                                                        <p>Копировать</p>
                                                    </span>
                                                </span>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="my-service-description-container">
                                            <div class="my-service-description-details">
                                                <div class="my-service-description-detail">
                                                    <img src="/img/my-services-page/eye.svg" alt="eye-icon" class="eye-icon"/>
                                                    <p><span>Просмотры</span>&nbsp;
                                                    <span>6</span></p>
                                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                                </div>
                                                <div class="my-service-description-detail">
                                                    <img src="/img/my-services-page/eye.svg" alt="eye-icon" class="eye-icon"/>
                                                    <p><span>Продажи</span>&nbsp;
                                                    <span>0</span></p>
                                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                                </div>
                                                <div class="my-service-description-detail">
                                                    <img src="/img/my-services-page/eye.svg" alt="eye-icon" class="eye-icon"/>
                                                    <p><span>Заработано</span>&nbsp;
                                                    <span>0</span></p>
                                                    <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                                </div>
                                            </div>
                                            <div class="my-service-description-text">
                                                Здесь будет отображаться рейтинг
                                                кворка после 8 продаж
                                            </div>
                                            <div class="my-service-description-sum">
                                                32 000 ₽
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="my-service-message type1 hidden">
                                    <div class="my-service-message-text">
                                        <img src="/img/my-services-page/warning.svg" alt="warning-icon" class="warning-icon"/>
                                        <p><b>Что нужно исправить:</b> Изображения кворка</p>
                                    </div>
                                </div>
                                
                                <div class="my-service-message type2">
                                    <div class="my-service-message-text">
                                        <img src="/img/my-services-page/round-warning.svg" alt="warning-icon" class="warning-icon"/>
                                        <p>Этот кворк будет отображаться намного выше в каталоге, если вы больше не будете игнорировать запросы покупателей. 
                                            <br>Отвечайте на них в течение суток.</p>
                                    </div>
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
    
    $(".give-feedback-modal-container .close-icon, .give-feedback-modal-container .cancel-button").on("click",function(){
        $(".give-feedback-modal-block").addClass("hidden"); 
    });
    
    $(".my-service.all").hide();
    $(".my-service.active").show();
    
    $(".my-services-wrapper-nav-elem.show-all").on("click",function(){
        $(".my-services-wrapper-nav-elem.active").removeClass("active");
        $(this).addClass("active");
        $(".my-service.all").show();
    });
    
    $(".my-services-wrapper-nav-elem.show-active").on("click",function(){
        $(".my-services-wrapper-nav-elem.active").removeClass("active");
        $(this).addClass("active");
        $(".my-service.all").hide();
        $(".my-service.active").show();
    });
    
    $(".my-services-wrapper-nav-elem.show-stoped").on("click",function(){
        $(".my-services-wrapper-nav-elem.active").removeClass("active");
        $(this).addClass("active");
        $(".my-service.all").hide();
        $(".my-service.stoped").show();
    });
    
    const searchInput = document.getElementsByClassName('my-services-wrapper-search-input')[0];

    searchInput.addEventListener('input', function () {
        const query = this.value.trim().toLowerCase();
    
        const items = document.querySelectorAll('.my-service');
    
        items.forEach(item => {
            const text = item.innerText.toLowerCase();
    
            if (text.includes(query)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
    
</script>
</html>
