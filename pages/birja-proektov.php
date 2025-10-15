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
    <link rel="stylesheet" href="/css/birja-proektov.css?v=<?= time(); ?>" />
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
                <div class="aside-container">
                    <div class="aside-header">
                        <h2>Биржа проектов</h2>
                        <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                    </div>
                    
                    <div class="select-menu">
                        <input type="button" value="Проекты" class="projects-button selected">
                        <input type="button" value="Мои отклики" class="my-offers-button">
                    </div>
                    
                    <div class="menu-container">
                        <div class="menu-section">
                            <label>Рубрики</label>
                            <a href="#" class="menu-elem">
                                Дизайн <span class="menu-elem-count">(191)<span>
                            </a>
                            <a href="#" class="menu-elem">
                                Разработка и IT <span class="menu-elem-count">(414)</span>
                            </a>
                            <a href="#" class="menu-elem">
                                Тексты и переводы <span class="menu-elem-count">(46)</span>
                            </a>
                            <a href="#" class="menu-elem">
                                SEO и трафик <span class="menu-elem-count">(196)</span>
                            </a>
                            <a href="#" class="menu-elem">
                                Соцсети и реклама <span class="menu-elem-count">(89)</span>
                            </a>
                            <a href="#" class="menu-elem">
                                Бизнес и жизнь <span class="menu-elem-count">(155s)</span>
                            </a>
                        </div>
                    
                        <div class="menu-section">
                            <label>Бюджет</label>
                            <p class="menu-elem">
                                <input type="checkbox" id="budget-variant1" value="budjet-variant1" name="budget-variant">
                                <label for="budget-variant1">До 1000 ₽ <span>(68)</span><label>
                            </p>
                            <p class="menu-elem">
                                <input type="checkbox" id="budget-variant2" value="budjet-variant2" name="budget-variant">
                                <label for="budget-variant2">От 1000 ₽ до 3000 ₽<span>(297)</span><label>
                            </p>
                            <p class="menu-elem">
                                <input type="checkbox" id="budget-variant3" value="budjet-variant3" name="budget-variant">
                                <label for="budget-variant3">От 3000 ₽ до 10000 ₽<span>(374)</span><label>
                            </p>
                            <p class="menu-elem">
                                <input type="checkbox" id="budget-variant4" value="budjet-variant4" name="budget-variant">
                                <label for="budget-variant4">От 10000 ₽ до 30000 ₽<span>(320)</span><label>
                            </p>
                            
                            <p class="menu-elem">
                                <input type="checkbox" id="budget-variant4" value="budjet-variant4" name="budget-variant">
                                <label for="budget-variant4">От 30000 ₽ <span>(329)</span><label>
                            </p>
                            
                            <div class="price-interval">
                                <input type="number" placeholder="От руб." class="price-from"/>
                                <input type="number" placeholder="До руб." class="price-to"/>
                            </div>
                        </div>
                        
                        <div class="menu-section">
                            <label class="header-label">Нанято, % <img src="/img/icons/round-question-icon.svg"/></label>
                            <input type="number" class="hired-percentage" name="hired-percentage" placeholder="От">
                        </div>
                        
                        
                        <div class="menu-section">
                            <label class="header-label">Ключевые слова <img src="/img/icons/round-question-icon.svg"/></label>
                            <input type="text" class="special-keywords" name="special-keywords">
                        </div>
                        
                        <div class="menu-section">
                            <label>Количество предложений</label>
                            <p class="menu-elem">
                                <input type="checkbox" id="offer-count1" value="5" name="offer-count">
                                <label for="offer-count1">До 5 <span>(406)</span><label>
                            </p>
                            <p class="menu-elem">
                                <input type="checkbox" id="offer-count2" value="10" name="offer-count">
                                <label for="offer-count2">От 5 до 10<span>(282)</span><label>
                            </p>
                            
                            <p class="menu-elem">
                                <input type="checkbox" id="offer-count3" value="15" name="offer-count">
                                <label for="offer-count3">От 10 до 15<span>(169)</span><label>
                            </p>
                            
                            <p class="menu-elem">
                                <input type="checkbox" id="offer-count4" value="20" name="offer-count">
                                <label for="offer-count4">От 15 до 20<span>(100)</span><label>
                            </p>
                            
                            <p class="menu-elem">
                                <input type="checkbox" id="offer-count5" value="25" name="offer-count">
                                <label for="offer-count5">От 20<span>(298)</span><label>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="content-container">
                    <h3 class="content-container-description">Чтобы начать зарабатывать откликнитесь на интересный проект - нажмите на кнопку «Предложить услугу»</h3>
                    <div class="content-container-header">
                        <div class="project-count">
                            Проектов&nbsp;<span>– Всего 14 888 (154 790 250 ₽)</span>
                        </div>
                        <div class="select-offers-container">
                            Показать:&nbsp;<div class="select-offer">все предложения <img src="/img/birja-proektov/arrow-bottom.svg" alt="arrow-bottom" class="arrow-bottom"/></div>
                        </div>
                    </div>
                    
                    <div class="project-offers-container">
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Senior MERN-разработчик. Доработка и код-ревью команды
                                    </h3>
                                    <p>
                                        Ищем опытного Senior-программиста в нашу дружную команду!<br>
                                        Наша платформа уже имеет значительный...<span class="show-full-text">Показать полностью</span>
                                    </p>
                                </div>
                                <div class="preferred-budget-container">
                                    <div class="preferred-budget">Желаемый бюджет: до&nbsp; <span class="preferred-budget-count">50 000 ₽</span></div>
                                    <div class="allowed-budget">Допустимый: до <span class="allowed-budget-count">150 000 ₽</span> <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"></div>
                                </div>
                            </div>
                            
                            <div class="customer-description-container">
                                <div class="img-container">
                                    <img src="/img/birja-proektov/user-avatar3.svg" alt="user-avatar" class="user-avatar"/>
                                </div>
                                <div class="customer-details-container">
                                    <div class="customer-detail">
                                        Покупатель: <a href="#">janhrachik</a> <img src="/img/birja-proektov/category2.png" alt="category2" class="customer-category2-icon"/>
                                    </div>
                                    <div class="customer-detail">
                                        Размещено проектов на бирже: &nbsp<span class="project-put-count">7</span>&nbsp;·&nbsp;<a href="#">Смотреть открытые (3)</a>
                                    </div>
                                    <div class="customer-detail">
                                        Нанято: 43% <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="offer-service-container">
                                <div class="offer-service-data-container">
                                    <div class="offer-service-data">
                                        Осталось:&nbsp;<span class="remaining-time">2 д. 23 ч.</span>
                                    </div>
                                    <div class="offer-service-data">
                                        Предложений:&nbsp;<span class="offer-count">0</span>
                                    </div>
                                </div>
                                
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
                        
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Телеграмм бот, формат мини игры
                                    </h3>
                                    <p>
                                        Создание бота который будет взаимодействовать с разными
                                        экономическими данными, брать оттуда...<span class="show-full-text">Показать полностью</span>
                                    </p>
                                </div>
                                <div class="preferred-budget-container">
                                    <div class="preferred-budget">Желаемый бюджет: до&nbsp; <span class="preferred-budget-count">25 000 ₽</span></div>
                                    <div class="allowed-budget">Допустимый: до <span class="allowed-budget-count">75 000 ₽</span> <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"></div>
                                </div>
                            </div>
                            
                            <div class="customer-description-container">
                                <div class="img-container">
                                    <img src="/img/birja-proektov/user-avatar2.png" alt="user-avatar" class="user-avatar"/>
                                </div>
                                <div class="customer-details-container">
                                    <div class="customer-detail">
                                        Покупатель: &nbsp;<a href="#">timOrbita</a> 
                                    </div>
                                    <div class="customer-detail">
                                        Размещено проектов на бирже:&nbsp<span class="project-put-count">7</span>
                                    </div>
                                    <div class="customer-detail">
                                        Нанято: 40% <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="offer-service-container">
                                <div class="offer-service-data-container">
                                    <div class="offer-service-data">
                                        Осталось:&nbsp;<span class="remaining-time">2 д. 23 ч.</span>
                                    </div>
                                    <div class="offer-service-data">
                                        Предложений:&nbsp;<span class="offer-count">2</span>
                                    </div>
                                </div>
                                
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
            
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Создание игрового стола в Tabletop Simulator
                                    </h3>
                                    <p>
                                        Техническое задание на создание стола в Tabletop Simulator для игры
                                        LikeSpeaker находится в...<span class="show-full-text">Показать полностью</span>
                                    </p>
                                </div>
                                <div class="preferred-budget-container">
                                    <div class="preferred-budget">Желаемый бюджет: до&nbsp; <span class="preferred-budget-count">2 000 ₽</span></div>
                                    <div class="allowed-budget">Допустимый: до <span class="allowed-budget-count">6 000 ₽</span> <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"></div>
                                </div>
                            </div>
                            
                            <div class="customer-description-container">
                                <div class="img-container">
                                    <img src="/img/birja-proektov/user-avatar4.svg" alt="user-avatar" class="user-avatar"/>
                                </div>
                                <div class="customer-details-container">
                                    <div class="customer-detail">
                                        Покупатель: &nbsp;<a href="#">ramses4441</a><img src="/img/birja-proektov/category3.png"/> 
                                    </div>
                                    <div class="customer-detail">
                                        Размещено проектов на бирже:&nbsp<span class="project-put-count">19</span>
                                    </div>
                                    <div class="customer-detail">
                                        Нанято: 85% <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="offer-service-container">
                                <div class="offer-service-data-container">
                                    <div class="offer-service-data">
                                        Осталось:&nbsp;<span class="remaining-time">2 д. 23 ч.</span>
                                    </div>
                                    <div class="offer-service-data">
                                        Предложений:&nbsp;<span class="offer-count">0</span>
                                    </div>
                                </div>
                                
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
                        
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Выстроить диалог с Учебными Заведениями
                                    </h3>
                                    <p>
                                        Базы Университетов, которые меня интересуют -<a href="#">https://disk.yandex.ru/d/O365sYmJ1…</a><br>
                                        1. Их две,...<span class="show-full-text">Показать полностью</span>
                                    </p>
                                </div>
                                <div class="preferred-budget-container">
                                    <div class="preferred-budget">Желаемый бюджет: до&nbsp; <span class="preferred-budget-count">1 500 ₽</span></div>
                                    <div class="allowed-budget">Допустимый: до <span class="allowed-budget-count">4 500 ₽</span> <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"></div>
                                </div>
                            </div>
                            
                            <div class="customer-description-container">
                                <div class="img-container">
                                    <img src="/img/birja-proektov/user-avatar5.png" alt="user-avatar" class="user-avatar"/>
                                </div>
                                <div class="customer-details-container">
                                    <div class="customer-detail">
                                        Покупатель: &nbsp;<a href="#">m4esnokov</a><img src="/img/birja-proektov/category2.png"/> 
                                    </div>
                                    <div class="customer-detail">
                                        Размещено проектов на бирже:&nbsp<span class="project-put-count">41</span>&nbsp;·&nbsp;<a href="#">Смотреть открытые (3)</a>
                                    </div>
                                    <div class="customer-detail">
                                        Нанято: 63% <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="offer-service-container">
                                <div class="offer-service-data-container">
                                    <div class="offer-service-data">
                                        Осталось:&nbsp;<span class="remaining-time">2 д. 23 ч.</span>
                                    </div>
                                    <div class="offer-service-data">
                                        Предложений:&nbsp;<span class="offer-count">2</span>
                                    </div>
                                </div>
                                
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
                        
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Доработка сайта на битрикс 1C
                                    </h3>
                                    <p>
                                        Необходимо выполнить 2 задачи:<br>
                                        - Адаптация блога + ЧПУ<br>
                                        - Корзина + формы обратной связи<br>
                                        Просьба...<span class="show-full-text">Показать полностью</span>
                                    </p>
                                </div>
                                <div class="preferred-budget-container">
                                    <div class="preferred-budget">Желаемый бюджет: до&nbsp; <span class="preferred-budget-count">4 000 ₽</span></div>
                                    <div class="allowed-budget">Допустимый: до <span class="allowed-budget-count">12 000 ₽</span> <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"></div>
                                </div>
                            </div>
                            
                            <div class="customer-description-container">
                                <div class="img-container">
                                    <img src="/img/birja-proektov/user-avatar1.png" alt="user-avatar" class="user-avatar"/>
                                </div>
                                <div class="customer-details-container">
                                    <div class="customer-detail">
                                        Покупатель: &nbsp;<a href="#">SVF-SEO</a><img src="/img/birja-proektov/category4.png"/><img src="/img/birja-proektov/super-title.png"> 
                                    </div>
                                    <div class="customer-detail">
                                        Размещено проектов на бирже:&nbsp<span class="project-put-count">107</span>
                                    </div>
                                    <div class="customer-detail">
                                        Нанято: 60% <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="offer-service-container">
                                <div class="offer-service-data-container">
                                    <div class="offer-service-data">
                                        Осталось:&nbsp;<span class="remaining-time">2 д. 23 ч.</span>
                                    </div>
                                    <div class="offer-service-data">
                                        Предложений:&nbsp;<span class="offer-count">2</span>
                                    </div>
                                </div>
                                
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="give-feedback-modal-block">
    <form class="give-feedback-modal-container">
        <div class="header-controls">
            <img src="/img/birja-proektov/green-shield.svg" alt="green-shield" class="green-shield-icon"/>
            <img src="/img/icons/x-close.svg" alt="close-icon" class="close-icon"/>
        </div>
        <h3>Оставить отзыв</h3>
        <p>
            Оставьте свой анонимный отзыв о проекте. Если многие продавцы оставят такой же отзыв о проекте, то покупатель получит об этом уведомление. Так вы сделаете вклад в то, чтобы проектов с хорошим описанием и достойной ценой стало больше.
            <br>
            <br>
            <b>Ваше мнение о проекте:</b>
        </p>
        <div class="options-container">
            <div class="option">
                <input type="checkbox" id="modal-option1" name="option1" class="option-input">
                <label for="modal-option1">Размещено проектов на бирже: 1</label>
            </div>
            <div class="option">
                <input type="checkbox" id="modal-option2" name="option2" class="option-input">
                <label for="modal-option2">Низкая оплата</label>
            </div>
            <div class="option">
                <input type="checkbox" id="modal-option3" name="option3" class="option-input">
                <label for="modal-option3">Неясное описание</label>
            </div>
            <div class="option">
                <input type="checkbox" id="modal-option4" name="option4" class="option-input">
                <label for="modal-option4">Запрещенные услуги</label>
            </div>
        </div>
        
        <div class="control-buttons">
            <input type="button" class="cancel-button" value="Отменить"/>
            <input type="submit" class="submit-button" value="Отправить"/>
        </div>
    </form>
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
</script>
</html>
