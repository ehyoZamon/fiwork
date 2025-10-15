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
    <link rel="stylesheet" href="/css/operations-page.css?v=<?= time(); ?>" />
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
        <div class="main-container">
            <div class="operations-block">
                <div class="operations-nav">
                    <a href="#"><img src="/img/icons/operations-page/home-icon.svg" class="home-icon" alt="home-icon"/></a>
                    <img src="/img/icons/operations-page/separator.svg" class="separator-icon" alt="separator-icon"/>
                    <span>Баланс профиля</span> 
                </div>
                
                <div class="operations-container">
                    <div class="operations-aside">
                        <div class="money-block">
                            <div class="money-text-container"><span class="money-num">0</span>&nbsp;₽</div>
                            <div class="fill-get-money-container">
                               <div class="fill-balance">
                                    <img src="/img/icons/operations-page/white-plus-icon.svg" alt="white-icon" class="white-icon"/>
                                    Пополнить баланс
                                </div>
                                <div class="vertical-line"></div>
                                <div class="get-money">
                                    <img src="/img/icons/operations-page/send-message-icon.svg" alt="send-message-icon" class="send-message-icon"/>
                                    Вывести деньги 
                                </div>
                            </div>
                        </div>
                        
                        <div class="methods-to-fill">
                            <div class="methods-to-fill-header">
                                <h3>
                                    Способы пополнения
                                </h3>
                                <a href="#" class="all-methods-to-fill">
                                    Все способы
                                </a>
                            </div>
                            
                            <p class="methods-to-fill-description">Доступно более 1000+ способов оплаты из различных стран мира</p>
                            
                            <div class="methods-to-fill-container">
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method1.svg" alt="payment-method" class="payment-method"/>
                                </a>
                                
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method2.svg" alt="payment-method" class="payment-method"/>
                                </a>
                                
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method3.svg" alt="payment-method" class="payment-method"/>
                                </a>
                                
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method4.svg" alt="payment-method" class="payment-method"/>
                                </a>
                                
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method5.svg" alt="payment-method" class="payment-method"/>
                                </a>
                                
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method6.svg" alt="payment-method" class="payment-method"/>
                                </a>
                                
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method7.svg" alt="payment-method" class="payment-method"/>
                                </a>
                                
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method8.svg" alt="payment-method" class="payment-method"/>
                                </a>
                                
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method9.svg" alt="payment-method" class="payment-method"/>
                                </a>
                                
                                <a href="#">
                                    <img src="/img/icons/operations-page/payment-method10.svg" alt="payment-method" class="payment-method"/>
                                </a>
                            </div>
                        </div>
                        
                        <div class="cash-payment">
                            <img src="/img/icons/operations-page/bank-icon.svg" alt="bank-icon" class="bank-icon"/>
                            <div class="cash-payment-container">
                                <h3>Безналичный расчёт для юридических лиц и ИП</h3>
                                <p>Пополнение черел безнал будет доступно с 9 января 2025 года.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="operations-table-container">
                        <div class="get-money-out-block hidden">
                            <form class="get-money-out-container">
                                <select>
                                    <option value="bank-card" selected="selected">Банковская карта</option>
                                </select>
                                <input type="text" class="bank-card-num" placeholder="2200 2022 3213 4566"/>
                                <input type="num" class="summa" placeholder="0"/>
                                <input type="submit" class="get-money-out-button" value="Вывести"/>
                            </form>
                            <p style="margin-top: 20px;margin-bottom: 10px;">
                                <b>Чтобы отправить заявку на вывод,</b> укажите номер карты или кошелька
                            </p>
                            <p>
                                <b>Комиссия платежной системы</b> зависит от страны карты. <a href="#">Подробнее</a>
                            </p>
                            <p>
                                Для небольших сумм рекомендуем пользоваться другими способами вывода.
                            </p>
                        </div>
                        
                        <div class="operations-table-wrapper">
                            <div class="operations-table-header">
                                <h2>Все операции&nbsp;<span>(164)</span></h2>
                                <div class="operations-search-block">
                                    <div class="search-input-block">
                                        <img src="/img/icons/operations-page/search-icon.svg" alt="search-icon" class="search-icon"/>
                                        <input type="text" class="search-with-phrase" placeholder="Поиск по названию"/>
                                    </div>
                                    
                                    <div class="calendar-input-block">
                                        <img src="/img/icons/operations-page/calendar-icon.svg" alt="calendar-icon" class="calendar-icon"/>
                                        <input type="text" class="calendar-input" placeholder="Выбрать дату"/>
                                        <input type="date" class="calendar-input" placeholder="Выбрать дату"/>
                                    </div>
                                </div>
                            </div>
                            
                                <div class="operations-in-stock-table-wrapper">
                                    <div class="operations-in-stock-table">
                                        <div class="table-header">
                                            <div>
                                                Дата
                                            </div>
                                            <div class="description-cell">
                                                Описание
                                            </div>
                                            <div>
                                                Сумма
                                            </div>
                                            <div>
                                                Cтатус
                                            </div>
                                        </div>
                                        <div class="table-body">
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Получение оплаты от покупателя <a href="#">sadasdf</a> за заказ <a href="#">Разработка интернет-магазина</a> 
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    50 400 ₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="done">Выполнено</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Вывод на карту 
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    -1 840₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="done">Выполнено</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Пополнение через СБП
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    + 540 ₽
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="in-process">В обработке</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Получение оплаты от покупателя <a href="#">sadasdf</a> за заказ <a href="#">Разработка интернет-магазина</a> 
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    50 400 ₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="done">Выполнено</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                   Пополнение через СБП
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    +3 400 ₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="in-process">В обработке</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Noah James 
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    50 400 ₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="in-process">В обработке</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Noah James 
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    50 400 ₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="unassigned">Unassigned</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Noah James 
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    50 400 ₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="pickup-complete">Pick-up complete</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Noah James 
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    50 400 ₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="unassigned">Unassigned</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Noah James
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    50 400 ₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="pickup-complete">Pick-up complete</span>
                                                </div>
                                            </div>
                                            
                                            <div class="table-row">
                                                <div class="date-cell">
                                                    3 октября, 14:22
                                                </div>
                                                
                                                <div class="description-cell">
                                                    Noah James 
                                                </div>
                                                
                                                <div class="price-cell">  
                                                    50 400 ₽    
                                                </div>
                                                
                                                <div class="status-cell">  
                                                    <span class="unassigned">Unassigned</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

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
        $(".calendar-input-block input[type='date']").on("change",function(){
            $(".calendar-input-block input[type='text'").val($(this).val()); 
        });
        
        $(".get-money").on("click",function(){
            $(".get-money-out-block").removeClass("hidden");
        })
    
</script>
</html>
