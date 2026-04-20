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
    <link rel="stylesheet" href="/css/order-track.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link 
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Manrope:wght@400;500;700&family=Montserrat:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Oswald:wght@400;500;700&family=Roboto:wght@400;500;700&family=Tajawal:wght@400;500;700&display=swap" 
    rel="stylesheet"
    >

    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    >
</head>
<body>
    <?=$userHeader;?>
    <div class="header-note">
        Заказ не будет начат, пока вы не предоставите необходимую информацию
        <input type="button" value="Предоставить данные" class="header-note-button"/>
    </div>
    
    <div class="main-block">
        <div class="main-container">
            <div class="order-track-block">
                <div class="order-track-content">
                    <div class="order-status-info-block hidden">
                        <div class="order-status-info-content">
                            <div class="vertical-line">
                            </div>
                            <div class="content">
                                <h3>Заказ ожидает оплаты</h3>
                                <p>Заказ создан, но продавец пока его не видит. Оплатите, пожалуйста,
                                заказ и внесите по нему информацию, чтобы продавец приступил к
                                работе.</p>
                            </div>
                        </div>
                        <input type="button" value="Оплатить заказ" class="pay-order-button"/> 
                    </div>

                    <div class="orders-table-block">
                        <div class="order-header">
                            <div class="order-img-container">
                                <img src="/img/icons/order-track/mobile-app.png" class="order-img"/>
                            </div>
                            <h2>Разработка мобильного приложения</h2>
                        </div>
                        <div class="my-orders">
                            <div class="my-orders-breadcrumbs">
                                <a href="#">Мои заказы</a> 
                                <img src="/img/icons/order-track/arrow-right-gray.svg" class="arrow-right-gray"/>
                                <span>Заказ №57288365 </span>
                            </div>
                            <div class="order-time">
                                17 ноября, 22:44
                            </div>
                        </div> 

                        <div class="orders-table"> 
                            <div class="orders-table-header">
                                <div class="services-cell">
                                    Услуги
                                </div>
                                <div class="period-cell"> 
                                    Срок 
                                    <span class="question-and-description tooltip-container">
                                        <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon tooltip-question"/>
                                        <span class="tooltip-text" style="font-weight: 400;">
                                            <h4>Заголовок</h4>
                                            <p>Текст</p>
                                        </span>
                                    </span>     
                                </div> 
                                <div class="price-cell">
                                    Стоимость
                                </div>
                            </div>
                            <div class="orders-table-row">
                                <div class="services-cell">
                                    <div class="table-cell-order-name">
                                        <span>Разработка мобильного приложения</span><img src="/img/icons/order-track/arrow-down-blue.svg" alt="arrow-down-blue" class="arrow-down-blue"/>
                                    </div>
                                </div>
                                <div class="period-cell"> 
                                    3 д.
                                </div> 
                                <div class="price-cell">
                                    3 500 ₽
                                </div>
                            </div>
                            
                        </div>

                        <div class="regular-basis-offer">
                            <div class="regular-basis-offer-string">
                                <img src="/img/icons/order-track/info-orange.svg" alt="info-orange" class="info-orange"/>
                                <div>
                                    <div class="regular-basis-question">Хотите докупить услуги продавца или работать с ним на регулярной основе?</div>
                                    <div class="regular-basis-step">Добавьте задачи в заказ 
                                        <span class="question-and-description tooltip-container">
                                            <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon tooltip-question"/>
                                            <span class="tooltip-text" style="font-weight: 400;">
                                                <h4>Заголовок</h4>
                                                <p>Текст</p>
                                            </span>
                                        </span> 
                                    </div>
                                </div>
                            </div>
                            <div class="add-task-button">
                                <img src="/img/icons/round-green-plus.svg" alt="round-green-plus" class="round-green-plus-icon"/> Добавить задачу
                            </div>
                        </div>
                    </div>

                    <div class="order-chat closed">
                        <div class="order-chat-header">
                            Переписка которая может относиться к заказу <img src="/img/icons/order-track/arrow-down-blue.svg" alt="arrow-down" class="arrow-down-blue"/>
                        </div>
                        <div class="date-chat-block">
                            <div class="date-chat">
                                <div class="date-chat-value">
                                    20 ноября
                                </div> 
                                <hr class="horizontal-line">
                            </div>
                            <div class="order-message order-created">
                                <img src="/img/icons/order-track/order-created.svg" alt="order-created" class="order-created-icon"/>
                                <div class="order-message-text order-created-text">
                                    <div class="order-message-header order-created-header">
                                        Создан новый заказ <span class="order-created-time">06:51 </span>
                                    </div>
                                    <p> 
                                        Вы создали заказ. Ознакомьтесь с <a href="#">программой защиты покупателей</a> Kwork.
                                    </p>
                                </div>
                            </div>
                            <div class="give-info-block"> 
                                <div class="order-message"> 
                                    <img src="/img/icons/order-track/give-info.svg" alt="give-info-icon" class="give-info-icon"/>
                                    <div class="order-messag-text">
                                        <div class="order-message-header">
                                            Предоставьте информацию по заказу 
                                        </div>
                                    </div>
                                </div>
                                <div class="give-info-section">
                                    <input type="button" value="Отправить информацию продавцу" class="give-info-button"/>
                                    <p>Возможность переписки появится сразу после отправки информации</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="cancel-order">
                        <div class="cancel-order-button">Отменить заказ</div>
                    </div>
                </div>

                <div class="order-track-sidebar">
                    <div class="order-status-block">
                        <div class="order-status-details">
                            <div class="order-status">
                                <span>Статус заказа</span>
                                <span class="order-status-value">Ожидает оплаты</span> 
                            </div>
                            <div class="order-price">
                                <span>Цена заказа</span>
                                <span class="order-price-value">3 500 ₽</span>
                            </div>
                        </div>

                        <div class="order-seller-details">
                            <div class="order-seller-info-list">
                                <div class="order-seller-info">
                                    <span>Продавец</span>
                                    <span class="seller-username">wturm</span>
                                </div>
                                <div class="seller-name">Артём</div>
                                <div class="offline-time">
                                    <div class="offline-time-string">
                                        Офлайн <span class="offline-time-value">5 часов</span>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="seller-img-container">
                                <img src="/img/user-avatars/user-avatar5.jpg"/>
                            </div>
                        </div>

                        <div class="order-track-route">
                            <div class="stepper-container">
                                <ul class="stepper">
                                    <li class="step completed">
                                    <div class="step-icon">✔</div>
                                    <div class="step-text">Создан</div>
                                    </li>
                                    <li class="step active">
                                    <div class="step-icon"></div>
                                    <div class="step-text">Заказ оплачен</div>
                                    </li>
                                    <li class="step">
                                    <div class="step-icon"></div>
                                    <div class="step-text">Предоставлены данные</div>
                                    </li>
                                    <li class="step">
                                    <div class="step-icon"></div>
                                    <div class="step-text">Взят в работу</div>
                                    </li>
                                    <li class="step">
                                    <div class="step-icon"></div>
                                    <div class="step-text">Сдан на проверку</div>
                                    </li>
                                    <li class="step">
                                    <div class="step-icon"></div>
                                    <div class="step-text">Заказ принят</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="order-help-block closed">
                        <div class="help-header">
                            <div class="help-header-string">
                                <img src="/img/icons/sidebar-help.svg" alt="sidebar-help"/>
                                Помощь
                            </div>
                            <img src="/img/icons/sidebar-chevron-up.svg" class="sidebar-help-chevron" alt="chevron-up"/>
                        </div>
                        
                        <div class="order-help-content">
                            <div class="help-content">
                                <h3>
                                    Продавец не отвечает на мои
                                    сообщения
                                </h3>
                                <p>
                                    Ответ некоторых продавцов может
                                    занять большее время, чем вы
                                    ожидали из-за разницы во времени
                                    или выходных. Если вы чувствуете, что
                                    продавец отвечает слишком долго, вы
                                    можете создать запрос на отмену
                                    заказа. Либо, если работа над заказом
                                    не была начата, дождаться автоотмены
                                    заказа через 24 часа.
                                </p>
                            </div>
                            
                            <div class="help-content">
                                <h3>
                                    Работа, которую сдал продавец,
                                    отличалась от того, какой он её
                                    описывал
                                </h3>
                                <p>
                                    У вас есть три дня, чтобы проверить
                                    сданную на проверку работу. Если вы
                                    видите, что работа не выполнена или
                                    выполнена не в том объеме - верните
                                    ее на доработку, указав причины и
                                    список доработок требования. Если
                                    работа выполнена совсем не так, как
                                    утверждалось, вы можете отменить
                                    заказ по согласованию с продавцом.
                                    Для этого нажмите "Отменить заказ"
                                    внизу страницы и выберите
                                    соответствующую причину.
                                </p>
                            </div>

                            <div class="additional-help">
                                Если вы не нашли ответа на свой
                                вопрос, посмотрите список всех
                                <a href="#">вопросов-ответов</a> или <a href="#">задайте вопрос</a>
                                специалисту поддержки пользователей
                            </div>
                        </div>
                    </div>

                    <div class="order-note-block closed">
                        <div class="order-note-header">
                            <div class="order-note-string">
                                <img src="/img/icons/order-track/order-track-note.svg" alt="order-track-note"/>
                                Заметка о заказе
                            </div>
                            <img src="/img/icons/order-track/close-icon.svg" class="close-icon" alt="close-icon"/>
                        </div>
                        <div class="order-note-content">
                            <textarea maxlength="600" placeholder="Заметка будет видна только вам"></textarea>
                            <div class="min-max-count">
                                <span class="count">0</span>&nbsp;из 600 символов
                            </div>
                            <input type="button" value="Сохранить" class="save-note-button"/>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    
    <?=$modalWindows;?>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>
<script>
    // Пример: сделать второй шаг завершенным, а третий активным
    const steps = document.querySelectorAll('.step');

    function setStep(index) {
        steps.forEach((step, i) => {
            step.classList.remove('completed', 'active');
            if (i < index) {
            step.classList.add('completed');
            step.querySelector('.step-icon').textContent = '✔';
            } else if (i === index) {
            step.classList.add('active');
            step.querySelector('.step-icon').textContent = '';
            } else {
            step.querySelector('.step-icon').textContent = '';
            }
        });
    }

    // Вызов функции для переключения на 3-й шаг (индекс 2)
    setStep(2);

    $(".order-help-block .help-header").on("click",function(e){
        e.stopPropagation(); 
        $(".order-help-block").toggleClass("closed");
    });

    $(".order-note-block .close-icon").on('click',function(e){
        e.stopPropagation(0);
        $(".order-note-block").toggleClass('closed');
    });

    $(".order-chat .order-chat-header").on('click',function(e){
        e.stopPropagation(0);
        $(".order-chat").toggleClass("closed");
    });

    $(".order-note-block textarea").on("input", function() {
        let textLength = $(this).val().length;
        
        $(".order-note-block .min-max-count .count").text(textLength);
    });

    
</script>
</html>
