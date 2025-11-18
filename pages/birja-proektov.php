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
                        <span class="question-and-description tooltip-container">
                            <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon tooltip-question"/>
                            <span class="tooltip-text">Это процентное соотношение означает долю проектов, по которым покупатель нанимал исполнителей.</span>
                        </span>
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
                            <label class="header-label">Нанято, % 
                            <span class="question-and-description tooltip-container">
                                <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="tooltip-question"/>
                                <span class="tooltip-text" style="font-weight: 400;">Это процентное соотношение означает долю проектов, по которым покупатель нанимал исполнителей.</span>
                            </span>
                            </label>
                            <input type="number" class="hired-percentage" name="hired-percentage" placeholder="От">
                        </div>
                        
                        
                        <div class="menu-section">
                            <label class="header-label">Ключевые слова 
                            <span class="question-and-description tooltip-container">
                                <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="tooltip-question"/>
                                <span class="tooltip-text" style="font-weight: 400;">Это процентное соотношение означает долю проектов, по которым покупатель нанимал исполнителей.</span>
                            </span>
                            </label>
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
                            Показать:&nbsp;
                            <div class="select-offer">
                                <div class="select-offer-wrap"><span class="select-offer-text">все предложения</span><img src="/img/birja-proektov/arrow-bottom.svg" alt="arrow-bottom" class="arrow-bottom"/></div>
                                <div class="select-offer-options">
                                    <div class="offer-option all-offers active">все предложения</div>
                                    <div class="offer-option seen-offers">просмотренные</div>
                                    <div class="offer-option new-offers">новые</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-offers-container">
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Senior MERN-разработчик. Доработка и код-ревью команды
                                    </h3>
                                    <p class="project-to-do-description">
                                        <span class="sliced-text description-text">Ищем опытного Senior-программиста в нашу дружную команду!<br>
                                        Наша платформа уже имеет значительный...</span>
                                        <span class="full-text description-text hidden-text">Ищем опытного Senior-программиста в нашу дружную команду! Наша платформа уже имеет значительный вес на рынке и активно развивается. Мы предлагаем тебе стать ключевым игроком в этом процессе, работая над сложными и интересными задачами, связанными с масштабированием, оптимизацией и внедрением новых, современных технологий.</span> 
                                        <span class="show-full-text show" onclick="showFullText(this);">Показать полностью</span>
                                        <span class="show-full-text hide hidden-button" onclick="showSlicedText(this);">Скрыть</span>
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
                                        Нанято: 43% 
                                        <span class="question-and-description tooltip-container">
                                            <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="tooltip-question"/>
                                            <span class="tooltip-text" style="font-weight: 400;">Это процентное соотношение означает долю проектов, по которым покупатель нанимал исполнителей.</span>
                                        </span>
                                        
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
                                <input type="button" class="feedback-button" value="Оставить отзыв">
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
                        
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Телеграмм бот, формат мини игры
                                    </h3>
                                    <p class="project-to-do-description">
                                        <span class="sliced-text description-text">Создание бота который будет взаимодействовать с разными
                                        экономическими данными, брать оттуда...</span>
                                        <span class="full-text description-text hidden-text">Создание бота, который будет взаимодействовать с разными экономическими данными, брать оттуда ключевые показатели, анализировать их, выявлять тренды и аномалии, а затем автоматически генерировать отчеты или принимать решения (например, о покупке/продаже активов, корректировке инвестиционного портфеля или формировании прогнозов).</span>
                                        <span class="show-full-text show" onclick="showFullText(this);">Показать полностью</span>
                                        <span class="show-full-text hide hidden-button" onclick="showSlicedText(this);">Скрыть</span>
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
                                        Нанято: 40% 
                                        <span class="question-and-description tooltip-container">
                                            <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="tooltip-question"/>
                                            <span class="tooltip-text" style="font-weight: 400;">Это процентное соотношение означает долю проектов, по которым покупатель нанимал исполнителей.</span>
                                        </span>
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
                                <input type="button" class="feedback-button" value="Оставить отзыв">
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
            
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Создание игрового стола в Tabletop Simulator
                                    </h3>
                                    <p class="project-to-do-description">
                                        <span class="description-text sliced-text">
                                        Техническое задание на создание стола в Tabletop Simulator для игры
                                        LikeSpeaker находится в...
                                        </span>
                                        <span class="description-text full-text hidden-text">
                                            Техническое задание на создание стола в Tabletop Simulator для игры "LikeSpeaker" находится в стадии детальной проработки и должно обеспечить максимально комфортный и аутентичный игровой опыт, полностью соответствующий физической версии.
                                        </span>
                                        <span class="show-full-text show" onclick="showFullText(this);">Показать полностью</span>
                                        <span class="show-full-text hide hidden-button" onclick="showSlicedText(this);">Показать полностью</span>
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
                                        Нанято: 85% 
                                        <span class="question-and-description tooltip-container">
                                            <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="tooltip-question"/>
                                            <span class="tooltip-text" style="font-weight: 400;">Это процентное соотношение означает долю проектов, по которым покупатель нанимал исполнителей.</span>
                                        </span>
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
                                <input type="button" class="feedback-button" value="Оставить отзыв">
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
                        
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Выстроить диалог с Учебными Заведениями
                                    </h3>
                                    <p class="project-to-do-description">
                                        <span class="description-text sliced-text">
                                        Базы Университетов, которые меня интересуют -<a href="#">https://disk.yandex.ru/d/O365sYmJ1…</a><br>
                                        - Первая база...
                                        </span>
                                        <span class="description-text full-text hidden-text">
                                        Базы Университетов, которые меня интересуют -<a href="#">https://disk.yandex.ru/d/O365sYmJ1…</a><br>
                                        - Первая база (предположительно, файл с общим списком) содержит общие сведения о вузах: названия, местоположение, контактные данные и ссылки на официальные сайты.
                                        <br>
                                        - Вторая база (более детализированный файл) фокусируется на конкретных образовательных программах и содержит детали: коды специальностей, количество бюджетных мест, проходные баллы за последние три года и информацию о стоимости обучения на коммерческой основе.
                                        </span>
                                        <span class="show-full-text show" onclick="showFullText(this);">Показать полностью</span>
                                        <span class="show-full-text hide hidden-button" onclick="showSlicedText(this);">Скрыть</span>
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
                                        Нанято: 63% 
                                        <span class="question-and-description tooltip-container">
                                            <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="tooltip-question"/>
                                            <span class="tooltip-text" style="font-weight: 400;">Это процентное соотношение означает долю проектов, по которым покупатель нанимал исполнителей.</span>
                                        </span>
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
                                <input type="button" class="feedback-button" value="Оставить отзыв">
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
                        
                        <div class="project-offer">
                            <div class="project-offer-description-container">
                                <div class="project-offer-description">
                                    <h3 class="project-offer-header">
                                        Доработка сайта на битрикс 1C
                                    </h3>
                                    <p class="project-to-do-description">
                                        <span class="description-text sliced-text">Необходимо выполнить 2 задачи:<br>
                                        - Адаптация блога + ЧПУ<br>
                                        - Корзина + формы обратной связи<br>
                                        Просьба...
                                        </span>
                                        <span class="description-text full-text hidden-text">Необходимо выполнить 2 задачи:<br>
                                        - Адаптация блога + ЧПУ<br>
                                        - Корзина + формы обратной связи<br>
                                        Просьба предоставить подробную оценку сроков и стоимости выполнения каждой из этих задач по отдельности, а также указать, какие именно технологии/фреймворки будут использоваться для реализации. Желательно получить ответ до конца текущего рабочего дня.    
                                        </span>
                                        <span class="show-full-text show" onclick="showFullText(this);">Показать полностью</span>
                                        <span class="show-full-text hide hidden-button" onclick="showSlicedText(this);">Скрыть</span>
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
                                        Нанято: 60% 
                                        <span class="question-and-description tooltip-container">
                                            <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="tooltip-question"/>
                                            <span class="tooltip-text" style="font-weight: 400;">Это процентное соотношение означает долю проектов, по которым покупатель нанимал исполнителей.</span>
                                        </span>
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
                                <input type="button" class="feedback-button" value="Оставить отзыв">
                                <input type="button" class="offer-service-button" value="Предложить услугу">
                            </div>
                        </div>
                        
                    </div>
                    

                    <nav class="pagination-container" aria-label="Пагинация">
                        <div class="pagination-item">
                            <a href="#" class="page-link arrow-link" id="prev"><img src="/img/icons/chevron-right.svg" style="transform: rotateY(180deg); cursor: pointer;" alt="chevron-left" class="chevron-left"/></a>
                        </div>
                
                        <div id="page-numbers"></div>
                
                        <div class="pagination-item">
                            <a href="#" class="page-link arrow-link" id="next"><img src="/img/icons/chevron-right.svg" style="cursor: pointer;" alt="chevron-right" class="chevron-right"/></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<div class="give-feedback-modal-block hidden">
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
    
    $(".select-offer-options .offer-option").on("click",function(){
        $(".select-offer-wrap .select-offer-text").text($(this).text());
        $(".select-offer-options .offer-option.active").removeClass("active");
        $(this).addClass("active"); 
    });
    
    function showFullText(elem){
        $(elem).parent().find(".full-text").removeClass("hidden-text");
        $(elem).parent().find(".sliced-text").addClass("hidden-text");
        $(elem).parent().find(".show-full-text.show").addClass("hidden-button");
        $(elem).parent().find(".show-full-text.hide").removeClass("hidden-button");
    }
    
    
    function showSlicedText(elem){
        $(elem).parent().find(".sliced-text").removeClass("hidden-text");
        $(elem).parent().find(".full-text").addClass("hidden-text");
        $(elem).parent().find(".show-full-text.hide").addClass("hidden-button");
        $(elem).parent().find(".show-full-text.show").removeClass("hidden-button");
    }
</script>
<script>
        const totalPages = 18;
        const visibleCount = 3; // сколько страниц видно одновременно
        let currentPage = 1;

        const pageNumbersContainer = document.getElementById('page-numbers');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');

        function renderPagination() {
            pageNumbersContainer.innerHTML = '';

            // Вычисляем диапазон отображаемых страниц
            let start = Math.max(1, currentPage - 1);
            let end = Math.min(start + visibleCount - 1, totalPages - 1);

            if (end >= totalPages - 1) {
                start = totalPages - visibleCount;
                if (start < 1) start = 1;
            }

            // Создаём элементы страниц
            for (let i = start; i <= end; i++) {
                const div = document.createElement('div');
                div.className = 'pagination-item';
                const a = document.createElement('a');
                a.textContent = i;
                a.href = '#';
                a.className = 'page-link' + (i === currentPage ? ' active' : '');
                a.addEventListener('click', e => {
                    e.preventDefault();
                    currentPage = i;
                    renderPagination();
                });
                div.appendChild(a);
                pageNumbersContainer.appendChild(div);
            }

            // Добавляем многоточие и последнюю страницу
            if (end < totalPages - 1) {
                const dots = document.createElement('div');
                dots.className = 'pagination-item';
                dots.innerHTML = '<span class="ellipsis">...</span>';
                pageNumbersContainer.appendChild(dots);
            }

            const last = document.createElement('div');
            last.className = 'pagination-item';
            const aLast = document.createElement('a');
            aLast.textContent = totalPages;
            aLast.href = '#';
            aLast.className = 'page-link' + (currentPage === totalPages ? ' active' : '');
            aLast.addEventListener('click', e => {
                e.preventDefault();
                currentPage = totalPages;
                renderPagination();
            });
            last.appendChild(aLast);
            pageNumbersContainer.appendChild(last);
        }

        // Стрелка "вперёд"
        next.addEventListener('click', e => {
            e.preventDefault();
            if (currentPage < totalPages) {
                currentPage++;
                renderPagination();
            }
        });

        // Стрелка "назад"
        prev.addEventListener('click', e => {
            e.preventDefault();
            if (currentPage > 1) {
                currentPage--;
                renderPagination();
            }
        });

        renderPagination();
    </script>
<script>
    // Открытие модального окна "Оставить отзыв"
    $(document).on('click', '.feedback-button', function() {
        $(".give-feedback-modal-block").removeClass("hidden");
    });

    // Закрытие модалки (уже есть, но на всякий случай)
    $(".give-feedback-modal-container .close-icon, .give-feedback-modal-container .cancel-button").on("click", function() {
        $(".give-feedback-modal-block").addClass("hidden");
    });
</script>
</html>
