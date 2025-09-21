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
    <link rel="stylesheet" href="/css/freelancer-profile.css?v=<?= time(); ?>" />
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
    <?=$header;?>
    
    <div class="main-block">
        <div class="main-container">
            <div class="freelancer-profile-block">
                <div class="freelancer-info-container">
                    <div class="freelancer-reviews-container">
                        
                        <div class="freelancer-avatar-stars-container">
                            <div class="freelancer-avatar-name-container">
                                <div class="img-container">
                                    <img src="/img/freelancer-avatars/freelancer4.jpg" alt="freelancer-avatar" class="freelancer-avatar"/>
                                </div>
                                <div class="freelancer-name">
                                    Андрей
                                </div>
                            </div>
                            <div class="freelancer-stars-container">
                                <img src="/img/icons/yellow-star.svg" alt="yellow-star" class="yellow-star-icon"/>
                                <p>
                                    <span class="stars-count">5.0</span>&nbsp;
                                    <span class="reviews-count">(39)</span>
                                </p>
                            </div>
                        </div>
                        
                        <div class="freelancer-progressbar-container">
                            <div class="freelancer-progress">
                                <p>
                                    Ответственность
                                </p>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                      <div class="progress-fill" style="width: 100%;"></div>
                                    </div>
                                    <div class="progress-text">100%</div>
                                </div>
                            </div>
                            
                            <div class="freelancer-progress">
                                <p>
                                    Отзывы
                                </p>
                                <div class="progress-container">
                                    <div class="progress-bar" style="display: none;">
                                      <div class="progress-fill" style="width: 100%;"></div>
                                    </div>
                                    <div class="progress-text">0</div>
                                </div>
                            </div>
                            
                            <div class="freelancer-progress">
                                <p>
                                    Заказы вовремя
                                </p>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                      <div class="progress-fill" style="width: 100%;"></div>
                                    </div>
                                    <div class="progress-text">100%</div>
                                </div>
                            </div>
                            
                            <div class="freelancer-progress">
                                <p>
                                    Отзывы покупателям
                                </p>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                      <div class="progress-fill" style="width: 30%; background: #e45865;"></div>
                                    </div>
                                    <div class="progress-text">30%</div>
                                </div>
                            </div>
                            
                            <div class="freelancer-progress">
                                <p>
                                    Скорость ответов
                                </p>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                      <div class="progress-fill" style="width: 70%;"></div>
                                    </div>
                                    <div class="progress-text">70%</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="receive-orders-container">
                            <div class="receive-orders-text">Принимаю заказы <img src="/img/icons/round-question-icon.svg" alt="round-question" class="round-question-icon"/></div>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="ai-agent-container">
                        <div class="ai-agent-text">
                            ИИ-помощник
                            <img src="/img/icons/black-arrow-right.svg" alt="black-arrow-right" class="black-arrow-right"/>
                        </div>
                        <div class="img-container">
                            <img src="/img/icons/ai-agent-icon.svg" alt="ai-agent-icon" class="ai-agent-icon"/>
                        </div>
                    </div>
                    
                    <div class="freelancer-activities-container">
                        <figure>
                            <img src="/img/icons/freelancer-profile-page/orders-rubl-icon.svg" alt="orders-ruble-icon" class="activity-icon"/>
                            <figcaption> 
                                Заказы
                            </figcaption>
                        </figure>
                        
                        <figure>
                            <img src="/img/icons/freelancer-profile-page/tasks-icon.svg" alt="tasks-icon" class="activity-icon"/>
                            <figcaption> 
                                Задачи
                            </figcaption>
                        </figure>
                        
                        <figure>
                            <img src="/img/icons/freelancer-profile-page/clients-icon.svg" alt="clients" class="activity-icon"/>
                            <figcaption> 
                                Клиенты
                            </figcaption>
                        </figure>
                        
                        <figure>
                            <img src="/img/icons/freelancer-profile-page/reviews-icon.svg" alt="reviews-icon" class="activity-icon"/>
                            <figcaption> 
                                Отзывы
                            </figcaption>
                        </figure>
                        
                        <figure>
                            <img src="/img/icons/freelancer-profile-page/ads-icon.svg" alt="ads-icon" class="activity-icon"/>
                            <figcaption> 
                                Рекламы
                            </figcaption>
                        </figure>
                        
                        <figure>
                            <img src="/img/icons/freelancer-profile-page/clients-icon.svg" alt="clients-icon" class="activity-icon"/>
                            <figcaption> 
                                Клиенты
                            </figcaption>
                        </figure>
                        
                        <figure>
                            <img src="/img/icons/freelancer-profile-page/finances-icon.svg" alt="finances-icon" class="activity-icon"/>
                            <figcaption> 
                                Финансы
                            </figcaption>
                        </figure>
                        
                        <figure>
                            <img src="/img/icons/freelancer-profile-page/data-icon.svg" alt="data-icon" class="activity-icon"/>
                            <figcaption> 
                                Данные
                            </figcaption>
                        </figure>
                    </div>
                    
                    <div class="freelancer-messages-container">
                        <div class="freelancer-messages-header">
                            <h3>Сообщения</h3>
                            <a>Смотреть все</a>
                        </div>
                        <div class="freelancer-messages-content">
                            <div class="freelancer-message">
                                <div class="user-messaging-avatar">
                                    <img src="/img/user-avatars/user-avatar1.png" alt="user-avatar" class="user-messaging-img"/> 
                                </div>
                                <div class="user-messaging-data">
                                    <div class="user-messaging-username-and-date">
                                        <h4>Crumpl_Production</h4>
                                        <span>10 декабря</span>
                                    </div>
                                    <div class="user-message-and-num">
                                        <p class="message">Здравствуйте. Напишите основной текст</p>
                                        <div class="message-num-container">
                                            <span class="message-num">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="freelancer-message">
                                <div class="user-messaging-avatar">
                                    <img src="/img/user-avatars/user-avatar2.jpg" alt="user-avatar" class="user-messaging-img"/> 
                                </div>
                                <div class="user-messaging-data">
                                    <div class="user-messaging-username-and-date">
                                        <h4>ABRAM7</h4>
                                        <span>10 декабря</span>
                                    </div>
                                    <div class="user-message-and-num">
                                        <p class="message">Здравствуйте</p>
                                        <div class="message-num-container">
                                            <span class="message-num">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="freelancer-message">
                                <div class="user-messaging-avatar">
                                    <img src="/img/user-avatars/user-avatar3.jpg" alt="user-avatar" class="user-messaging-img"/> 
                                </div>
                                <div class="user-messaging-data">
                                    <div class="user-messaging-username-and-date">
                                        <h4>egorov5</h4>
                                        <span>9 декабря</span>
                                    </div>
                                    <div class="user-message-and-num">
                                        <p class="message">напоминаю о себе</p>
                                        <div class="message-num-container">
                                            <span class="message-num">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="freelancer-message">
                                <div class="user-messaging-avatar">
                                    <img src="/img/user-avatars/user-avatar4.jpg" alt="user-avatar" class="user-messaging-img"/> 
                                </div>
                                <div class="user-messaging-data">
                                    <div class="user-messaging-username-and-date">
                                        <h4>Igor_AA</h4>
                                        <span>7 декабря</span>
                                    </div>
                                    <div class="user-message-and-num">
                                        <p class="message">чтобы ссылку прислать на проект?</p>
                                        <div class="message-num-container">
                                            <span class="message-num">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="freelancer-message">
                                <div class="user-messaging-avatar">
                                    <img src="/img/user-avatars/user-avatar5.jpg" alt="user-avatar" class="user-messaging-img"/> 
                                </div>
                                <div class="user-messaging-data">
                                    <div class="user-messaging-username-and-date">
                                        <h4>gregben80</h4>
                                        <span>6 декабря</span>
                                    </div>
                                    <div class="user-message-and-num">
                                        <p class="message">Добрый день. Тема: кворк "Опублику…"</p>
                                        <div class="message-num-container">
                                            <span class="message-num">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="freelancer-details-container">
                    <div class="my-orders-block">
                        <div class="my-orders-container">
                            Мои заказы  <span class="sum-overview">&nbsp;– Всего 16 (63 840 ₽)</span>
                        </div>
                        <div class="see-more-container">
                            Посмотреть все <img src="/img/icons/chevron-right-grey.svg"/>
                        </div>
                    </div>
                    
                    <div class="my-orders-block">
                        <div class="my-goods-container">
                            Мои товары  <span class="active-overview">&nbsp;– Активно 0 из 13</span>
                        </div>
                        <div class="see-more-container">
                            Посмотреть все <img src="/img/icons/chevron-right-grey.svg"/>
                        </div>
                    </div>
                    
                    <div class="year-sellings-block">
                        <div class="year-sellings-header">
                            <h2>41 продажа за последний год</h2><div class="line"></div>
                        </div>
                    </div>
                    
                    <div class="fiwork-activity-graph">
                        <div class="fiwork-activity-graph-container">
                            <div class="fiwork-activity-graph-wrapper">
                                <div class="graph">
                                	<ul class="months">
                                    <li>Янв</li>
                                    <li>Фев</li>
                                    <li>Мар</li>
                                    <li>Апр</li>
                                    <li>Май</li>
                                    <li>Июнь</li>
                                    <li>Июль</li>
                                    <li>Авг</li>
                                    <li>Сен</li>
                                    <li>Oкт</li>
                                    <li>Ноя</li>
                                    <li>Дек</li>
                                  </ul>
                                	<ul class="days">
                                    <li>Пон</li>
                                    <li></li>
                                    <li>Сре</li>
                                    <li></li>
                                    <li>Пят</li>
                                    <li></li>
                                    <li>Вос</li>
                                  </ul>
                                	<ul class="squares"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="new-in-stock-block">
                        <div class="new-in-stock-header">
                            <h2>
                                Новое на бирже <span class="projects-in-day">&nbsp;– 307 проектов за сутки</span>
                            </h2>
                                
                            <div class="see-more-container">
                                Посмотреть все <img src="/img/icons/chevron-right-grey.svg"/>
                            </div>
                        </div>
                        
                        <div class="new-in-stock-table-wrapper">
                            <div class="new-in-stock-table">
                                <div class="table-header">
                                    <div>
                                        Проект
                                    </div>
                                    <div>
                                        Покупатель
                                    </div>
                                    <div>
                                        Бюджет
                                    </div>
                                </div>
                                <div class="table-body">
                                    <div class="table-row">
                                        <div class="project-details">
                                            <div class="project-name">
                                                Сделать сайт-лендинг
                                            </div>
                                            <div class="project-nav">
                                                Разработка и IT > Создание сайта > Новый сайт
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <div class="user-avatar-name-container">
                                                <div class="user-avatar-container">
                                                    <img src="/img/user-avatars/user-avatar1.png" alt='user-avatar' class='user-avatar-icon'/>
                                                </div>
                                                vegnerpi
                                            </div>
                                            <div class="suggestion-nums">
                                                75 предложений
                                            </div> 
                                        </div>
                                        <div class="budget-count">  
                                            10&nbsp;000&nbsp;₽
                                        </div>
                                    </div>
                                    
                                    <div class="table-row">
                                        <div class="project-details">
                                            <div class="project-name">
                                                Сделать сайт-лендинг
                                            </div>
                                            <div class="project-nav">
                                                Разработка и IT > Создание сайта > Новый сайт
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <div class="user-avatar-name-container">
                                                <div class="user-avatar-container">
                                                    <img src="/img/user-avatars/user-avatar2.jpg" alt='user-avatar' class='user-avatar-icon'/>
                                                </div>
                                                username
                                            </div>
                                            <div class="suggestion-nums">
                                                75 предложений
                                            </div> 
                                        </div>
                                        <div class="budget-count">  
                                            10&nbsp;000&nbsp;₽
                                        </div>
                                    </div>

                                    <div class="table-row">
                                        <div class="project-details">
                                            <div class="project-name">
                                                Сделать сайт-лендинг
                                            </div>
                                            <div class="project-nav">
                                                Разработка и IT > Создание сайта > Новый сайт
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <div class="user-avatar-name-container">
                                                <div class="user-avatar-container">
                                                    <img src="/img/user-avatars/user-avatar1.png" alt='user-avatar' class='user-avatar-icon'/>
                                                </div>
                                                vegnerpi
                                            </div>
                                            <div class="suggestion-nums">
                                                75 предложений
                                            </div> 
                                        </div>
                                        <div class="budget-count">  
                                            10&nbsp;000&nbsp;₽
                                        </div>
                                    </div>
                                    
                                    <div class="table-row">
                                        <div class="project-details">
                                            <div class="project-name">
                                                Сделать сайт-лендинг
                                            </div>
                                            <div class="project-nav">
                                                Разработка и IT > Создание сайта > Новый сайт
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <div class="user-avatar-name-container">
                                                <div class="user-avatar-container">
                                                    <img src="/img/user-avatars/user-avatar3.jpg" alt='user-avatar' class='user-avatar-icon'/>
                                                </div>
                                                vegnerpi
                                            </div>
                                            <div class="suggestion-nums">
                                                75 предложений
                                            </div> 
                                        </div>
                                        <div class="budget-count">  
                                            10&nbsp;000&nbsp;₽
                                        </div>
                                    </div>
                                    
                                    <div class="table-row">
                                        <div class="project-details">
                                            <div class="project-name">
                                                Сделать сайт-лендинг
                                            </div>
                                            <div class="project-nav">
                                                Разработка и IT > Создание сайта > Новый сайт
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <div class="user-avatar-name-container">
                                                <div class="user-avatar-container">
                                                    <img src="/img/user-avatars/user-avatar4.jpg" alt='user-avatar' class='user-avatar-icon'/>
                                                </div>
                                                vegnerpi
                                            </div>
                                            <div class="suggestion-nums">
                                                75 предложений
                                            </div> 
                                        </div>
                                        <div class="budget-count">  
                                            10&nbsp;000&nbsp;₽
                                        </div>
                                    </div>
                                    
                                    <div class="table-row">
                                        <div class="project-details">
                                            <div class="project-name">
                                                Сделать сайт-лендинг
                                            </div>
                                            <div class="project-nav">
                                                Разработка и IT > Создание сайта > Новый сайт
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <div class="user-avatar-name-container">
                                                <div class="user-avatar-container">
                                                    <img src="/img/user-avatars/user-avatar5.jpg" alt='user-avatar' class='user-avatar-icon'/>
                                                </div>
                                                vegnerpi
                                            </div>
                                            <div class="suggestion-nums">
                                                75 предложений
                                            </div> 
                                        </div>
                                        <div class="budget-count">  
                                            10&nbsp;000&nbsp;₽
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="three-steps-to-start-block">
                        <h2>3 простых шага, чтобы начать зарабатывать</h2>
                        <p>Секрет успеха на Fiwork зависит от правильного старта и управления своими рейтингами. Ниже мы приводим советы, которые помогут вам постепенно стать топовым продавцом на Fiwork.</p>
                        
                        <div class="three-steps-to-start-container">
                            <div class="step-to-start-container">
                                <div class="step-details-container">
                                    <img src="/img/icons/freelancer-profile-page/round-colorful-plus.svg" alt="round-colorful-plus" class="step-img"/>
                                    <div class="step-details">
                                        <p class="description">Шаг 1: Создайте услуги или товары – чем больше, тем лучше</p>
                                        <div class="step-level-bar">
                                            <div class="step-progress-container">
                                                <div class="step-progress-bar">
                                                  <div class="step-progress-fill" style="width: 10%; background: #ff7373;"></div>
                                                </div>
                                                <div class="step-progress-text active-services">0/9 активных услуг <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/></div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <a href="#" class="more-about-step">
                                    Подробнее
                                </a>
                            </div>
                            
                            <div class="step-to-start-container">
                                <div class="step-details-container">
                                    <img src="/img/icons/freelancer-profile-page/dollar-phone.svg" alt="dollar-phone" class="step-img"/>
                                    <div class="step-details">
                                        <p class="description">Шаг 1: Создайте услуги или товары – чем больше, тем лучше</p>
                                        <div class="step-level-bar">
                                            <div class="step-progress-container">
                                                <div class="step-progress-bar">
                                                  <div class="step-progress-fill" style="width: 100%;"></div>
                                                </div>
                                                <div class="step-progress-text">Приложение используется</div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <a href="#" class="more-about-step">
                                    Подробнее
                                </a>
                            </div>
                            
                            <div class="step-to-start-container">
                                <div class="step-details-container">
                                    <img src="/img/icons/freelancer-profile-page/world-knowledge.svg" alt="dollar-phone" class="step-img"/>
                                    <div class="step-details">
                                        <p class="description">Шаг 1: Создайте услуги или товары – чем больше, тем лучше</p>
                                        <div class="step-level-bar">
                                            <div class="step-progress-container">
                                                <div class="step-progress-bar">
                                                  <div class="step-progress-fill" style="width: 100%;"></div>
                                                </div>
                                                <div class="step-progress-text">8/8 уроков скачано</div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <a href="#" class="more-about-step">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="message-modal-fixed">
                <p>Сообщения <span class="message-num">24</span></p>
                <img src="/img/icons/freelancer-profile-page/chevron-up-black.svg" alt="chevron-up-black" class="chevron-up-black"/>
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
    // Add squares
    
    const squares = document.querySelector('.squares');
    for (var i = 1; i < 365; i++) {
      const level = Math.floor(Math.random() * 3);  
      squares.insertAdjacentHTML('beforeend', `<li data-level="${level}"></li>`);
    }
</script>
</html>
