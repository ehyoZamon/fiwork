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
    <link rel="stylesheet" href="/css/create-fiwork.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?=$userHeader;?>
    
    <div class="main-block">
        <div class="main-container">
            <div class="create-fiwork-block">
                <div class="create-fiwork-nav">
                    <a href="#"><img src="/img/icons/operations-page/home-icon.svg" class="home-icon" alt="home-icon"/></a>
                    <img src="/img/icons/operations-page/separator.svg" class="separator-icon" alt="separator-icon"/>
                    <span>Создание форка</span> 
                </div>
                
                <a class="back-to-fiworks">
                    <img src="/img/icons/chevron-right.svg" style="transform: rotate(180deg);" class="chevron-left-icon" alt="chevron-left"/>
                    К списку форков
                </a>
                
                <div class="create-fiwork-container">
                    <div class="create-fiwork-form-container">
                        <div class="create-fiwork-steps-container">
                            <form class="create-fiwork-step fiwork-details-form active">
                                <div class="create-fiwork-step-header">
                                    <div class="create-fiwork-step-num-container">
                                        1
                                    </div>
                                    Основное
                                </div>
                                
                                <div class="create-fiwork-step-content">
                                    <div class="create-fiwork-step-stages">
                                        <div class="create-fiwork-step-stage create-fiwork-step-enter-name">
                                            <div class="step-stage-name">
                                                Название
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="textarea-container">
                                                    <textarea placeholder="Напишу текст песни" name="fiwork-name" maxlength="70" required></textarea>
                                                    <div class="step-stage-form-description-modal">
                                                        <img src="/img/create-fiwork-page/pointer.svg" alt="pointer" class="pointer-icon"/>
                                                        <div class="img-container">
                                                            <img src="/img/create-fiwork-page/add-fiwork-name-description.svg" alt="modal-img" class="description-modal-img"/>
                                                        </div>
                                                        <div class="description-text">
                                                            <label>Введите название форка</label>
                                                            <p>Оно должно отражать суть
                                                                вашего предложения и
                                                                описывать услугу, которую вы
                                                                готовы выполнить за один
                                                                форк - без дополнительных
                                                                опций или в минимальном
                                                                пакете "Эконом".</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="word-interval"><span class="char-num">0</span>&nbsp;из 70 символов</div>
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-select-section">
                                            <div class="step-stage-name">
                                                Рубрика
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="select-container">
                                                    <select id="select-section" name="fiwork-section" required>
                                                        <option value="" disabled selected>Выберите рубрику</option>
                                                        <option value="design">Дизайн</option>
                                                        <option value="it-development">Разработка и ИТ</option>
                                                    </select>
                                                    
                                                    <select id="select-subcategory" name="fiwork-subcategory" class="hidden" required>
                                                        <option value="" disabled selected>Выберите рубрику</option>
                                                        <option value="logo-and-branding" class="design select-section-option" value="logo-and-branding">Логотип и брендинг</option>
                                                        <option value="website-dev" class="it-development select-section-option" value="website-dev">Создание сайта</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="similar-to-selection hidden">
                                                    <label>Услуги с подобными заголовками чаще всего относятся к:</label> 
                                                    <a href="#" class="similar-to-selection-row">
                                                        Тексты и переводы > Тексты и наполнение сайта > Статьи
                                                    </a>
                                                    <a href="#" class="similar-to-selection-row">
                                                        Тексты и переводы > Тексты и наполнение сайта > SEO-тексты
                                                    </a>
                                                    <a href="#" class="similar-to-selection-row">
                                                        Тексты и переводы > Тексты и наполнение сайта > Художественные тексты
                                                    </a>
                                                </div>
                                                
                                                <div class="step-stage-form-description-modal">
                                                    <img src="/img/create-fiwork-page/pointer.svg" alt="pointer" class="pointer-icon"/>
                                                    <div class="img-container">
                                                        <img src="/img/create-fiwork-page/add-fiwork-name-description.svg" alt="modal-img" class="description-modal-img"/>
                                                    </div>
                                                    <div class="description-text">
                                                        <label>Выберите рубрику, наиболее подходящую для этого форка</label>
                                                        <p>Это позволит покупателям быстро найти ваш форк.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type hidden create-fiwork-step-stage2 logo-and-branding">
                                            <div class="step-stage-name">
                                                Тип
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="fiwork-type-container selecе-type-container">
                                                    <input type="radio" required  id="fiwork-type1" name="fiwork-type" value="logos" />
                                                    <label for="fiwork-type1">Логотипы</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-type2" name="fiwork-type" value="identity" />
                                                    <label for="fiwork-type2">Фирменный стиль</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-type3" name="fiwork-type" value="business-cards" />
                                                    <label for="fiwork-type3">Визитки</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-type4" name="fiwork-type" value="branding" />
                                                    <label for="fiwork-type4">Брендирование и сувенирка</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type hidden create-fiwork-step-stage2 website-dev">
                                            <div class="step-stage-name">
                                                Тип
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="fiwork-type-container selecе-type-container">
                                                    <input type="radio" required  id="fiwork-type5" name="fiwork-type" value="logos" />
                                                    <label for="fiwork-type5">Новый сайт</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-type6" name="fiwork-type" value="identity" />
                                                    <label for="fiwork-type6">Копия сайта</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 logo-and-branding">
                                            <div class="step-stage-name">
                                                Вид
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-subtype1" name="fiwork-subtype" value="new-logo" />
                                                    <label for="fiwork-subtype1">Новый логотип</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-subtype2" name="fiwork-subtype" value="logo-revision" />
                                                    <label for="fiwork-subtype2">Доработка логотипа</label>
                                                </div>
                                                
                                                <div class="step-stage-form-description-modal high-competition-modal">
                                                    <div class="img-container">
                                                        <img src="/img/create-fiwork-page/fire.svg" alt="modal-img" class="description-modal-img"/>
                                                    </div>
                                                    <div class="description-text">
                                                        <label>Очень высокая конкуренция</label>
                                                        <p>Новые продавцы очень редко получают заказы в этой рубрике.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                                            <div class="step-stage-name">
                                                Вид
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-subtype3" name="fiwork-subtype"/>
                                                    <label for="fiwork-subtype3">Лендинг</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-subtype4" name="fiwork-subtype"/>
                                                    <label for="fiwork-subtype4">Интернет-магазин</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-subtype5" name="fiwork-subtype"/>
                                                    <label for="fiwork-subtype5">Инфосайт</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-subtype6" name="fiwork-subtype"/>
                                                    <label for="fiwork-subtype6">Визитка</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-subtype7" name="fiwork-subtype"/>
                                                    <label for="fiwork-subtype7">Интернет-сервис</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-subtype8" name="fiwork-subtype"/>
                                                    <label for="fiwork-subtype8">Блог</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-subtype9" name="fiwork-subtype"/>
                                                    <label for="fiwork-subtype9">Форум</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type select-style-container hidden create-fiwork-step-stage2 logo-and-branding">
                                            <div class="step-stage-name">
                                                Cтиль
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-style1" name="fiwork-style" />
                                                    <label for="fiwork-style1">Винтаж/ретро</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-style2" name="fiwork-style"/>
                                                    <label for="fiwork-style2">3D</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-style3" name="fiwork-style"/>
                                                    <label for="fiwork-style3">Плоский</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-style4" name="fiwork-style"/>
                                                    <label for="fiwork-style4">Шрифтовый</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-style5" name="fiwork-style"/>
                                                    <label for="fiwork-style5">Геральдический</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-style6" name="fiwork-style"/>
                                                    <label for="fiwork-style6">Рисованный от руки</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-style7" name="fiwork-style"/>
                                                    <label for="fiwork-style7">Акварельный</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 logo-and-branding">
                                            <div class="step-stage-name">
                                                Cоздание логотипа
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-creating-logo1" name="fiwork-creating-logo"/>
                                                    <label for="fiwork-creating-logo1">По эскизу</label>
                                                </div>
                                                
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-creating-logo2" name="fiwork-creating-logo"/>
                                                    <label for="fiwork-creating-logo2">С нуля</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                                            <div class="step-stage-name">
                                                CMS
                                            </div>
                                            <div class="step-stage-form two-cols">
                                                <div class="step-stage-form-col">
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use1" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use1">Wordpress</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use2" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use2">Opencart</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use3" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use3">Ucoz</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use4" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use4">ModX</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use5" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use5">HTML</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use6" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use6">Tilda</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use7" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use7">Самописная</label>
                                                    </div>
                                                </div>
                                                <div class="step-stage-form-col">
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use8" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use8">Joomla</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use9" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use9">Drupal</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use10" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use10">Битрикс</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use11" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use11">Wix</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use12" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use12">Adobe Muse</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-cms-use13" name="fiwork-cms-use"/>
                                                        <label for="fiwork-cms-use13">Textolite</label>
                                                    </div>
                                                </div>
                                                <div class="add-own-variant">Добавить свой вариант</div> 
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                                            <div class="step-stage-name">
                                                Языки
                                            </div>
                                            <div class="step-stage-form two-cols">
                                                <div class="step-stage-form-col">
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-proglang-use1" name="fiwork-proglang-use"/>
                                                        <label for="fiwork-proglang-use1">C, C++</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-proglang-use2" name="fiwork-proglang-use"/>
                                                        <label for="fiwork-proglang-use2">Go</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-proglang-use3" name="fiwork-proglang-use"/>
                                                        <label for="fiwork-proglang-use3">PHP</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-proglang-use4" name="fiwork-proglang-use"/>
                                                        <label for="fiwork-proglang-use4">Ruby</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="step-stage-form-col">
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-proglang-use5" name="fiwork-proglang-use"/>
                                                        <label for="fiwork-proglang-use5">C#</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-proglang-use6" name="fiwork-proglang-use"/>
                                                        <label for="fiwork-proglang-use6">Java</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-proglang-use7" name="fiwork-proglang-use"/>
                                                        <label for="fiwork-proglang-use7">Python</label>
                                                    </div>
                                                    <div class="fiwork-type-container">
                                                        <input type="checkbox"  id="fiwork-proglang-use8" name="fiwork-proglang-use"/>
                                                        <label for="fiwork-proglang-use8">Swift</label>
                                                    </div>
                                                </div>
                                                <div class="add-own-variant">Добавить свой вариант</div>
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                                            <div class="step-stage-name">
                                                Интерфейс на JavaScript
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-js-interface1" name="fiwork-js-interface"/>
                                                    <label for="fiwork-js-interface1">Да</label>
                                                </div>
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-js-interface2" name="fiwork-js-interface"/>
                                                    <label for="fiwork-js-interface2">Нет</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                                            <div class="step-stage-name">
                                                Используется<br>CSS
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-css-use1" name="fiwork-css-use"/>
                                                    <label for="fiwork-css-use1">Да</label>
                                                </div>
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-css-use2" name="fiwork-css-use"/>
                                                    <label for="fiwork-css-use2">Нет</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 website-dev">
                                            <div class="step-stage-name">
                                                База данных
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-db-use1" name="fiwork-db-use"/>
                                                    <label for="fiwork-db-use1">Да</label>
                                                </div>
                                                <div class="fiwork-type-container">
                                                    <input type="radio" required  id="fiwork-db-use2" name="fiwork-db-use"/>
                                                    <label for="fiwork-db-use2">Нет</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-upload-cover hidden create-fiwork-step-stage2 logo-and-branding website-dev">
                                            <div class="step-stage-name">
                                                Обложка форка
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="upload-cover-container">
                                                    <img src="/img/icons/green-round-plus.svg" alt="green-round-plus" class="round-plus-icon"/>
                                                    <label>Загрузить обложку</label>
                                                    <p>
                                                        <span>Минимальный размер: 660 х 440 px</span>
                                                        <span>Вес: 30 кб — 10 Мб</span>
                                                        <span>Форматы: jpg, jpeg, png</span>
                                                    </p>
                                                    
                                                    <input type="file" id="upload-input" class="upload-input" accept=".jpg,.jpeg,.png" onchange="previewImage(event)" name="fiwork-cover" required>
                                                    <div class="preview-img-container" id="preview-img-container">
                                                        <div class="upload-preview-shadow-left"></div>
                                                        <img id="upload-preview" class="upload-preview" alt="Превью обложки" />
                                                        <div class="upload-preview-shadow-right"></div>
                                                    </div>
                                                </div>
                                                <div class="step-stage-form-description-modal upload-cover-description-modal">
                                                    <img src="/img/create-fiwork-page/white-pointer.svg" alt="pointer" class="pointer-icon"/>
                                                    <div class="img-container">
                                                        <img src="/img/create-fiwork-page/add-fiwork-name-description.svg" alt="modal-img" class="description-modal-img"/>
                                                    </div>
                                                    <div class="description-text">
                                                        <label>Проверяем обложку перед загрузкой</label>
                                                        <p>Хорошая и продающая обложка содержит:</p>
                                                        <div class="li-element">
                                                            <img src="/img/icons/green-checkmark.svg" alt="green-checkmark" class="green-checkmark"/>тематическое изображение, иллюстрирующее услугу
                                                        </div>
                                                        <div class="li-element">
                                                            <img src="/img/icons/green-checkmark.svg" alt="green-checkmark" class="green-checkmark"/>четкое, не размытое изображение
                                                        </div>
                                                        <div class="li-element">
                                                            <img src="/img/icons/green-checkmark.svg" alt="green-checkmark" class="green-checkmark"/>надписи на изображении не обрезаны и хорошо читаются даже на миниатюре кворка
                                                        </div>
                                                        <div class="li-element">
                                                            <img src="/img/icons/green-checkmark.svg" alt="green-checkmark" class="green-checkmark"/>текст без орфографических и грамматических ошибок
                                                        </div>
                                                        <p>Кворк могут вернуть на доработку, если на обложке:</p>
                                                        <div class="li-element">
                                                            <img src="/img/icons/red-x.svg" alt="green-checkmark" class="red-x"/>яркие «кислотные» цвета, «гипнотические» фоны
                                                        </div>
                                                        <div class="li-element">
                                                            <img src="/img/icons/red-x.svg" alt="green-checkmark" class="red-x"/>любые изображения 18+ (спиртные напитки, секс, курение, оружие, насилие и т.п.)
                                                        </div>
                                                        <div class="li-element">
                                                            <img src="/img/icons/red-x.svg" alt="green-checkmark" class="red-x"/>ненормативная лексика или сленг
                                                        </div>
                                                        <div class="li-element">
                                                            <img src="/img/icons/red-x.svg" alt="green-checkmark" class="red-x"/>контактные данные и запрос контактов (в том числе логины в соцсетях)
                                                        </div>
                                                        <div class="li-element">
                                                            <img src="/img/icons/red-x.svg" alt="green-checkmark" class="red-x"/>водяные знаки
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="form-trigger-button"/>
                            </form>
                            <div class="continue-to-next-step submit-fiwork-details">
                                <input type="button" value="Продолжить" class="continue-to-next-step-button submit-fiwork-details" onclick="submitForm('fiwork-details-form');"/> 
                            </div>
                            
                            <form class="create-fiwork-step fiwork-files-and-description-form">
                                <div class="create-fiwork-step-header">
                                    <div class="create-fiwork-step-num-container">
                                        2
                                    </div>
                                    Описание и файлы
                                    
                                </div>
                                
                                <div class="create-fiwork-step-content">
                                    <div class="create-fiwork-step-stages">
                                        <div class="create-fiwork-step-stage create-fiwork-step-enter-description">
                                            <div class="step-stage-name">
                                                Описание
                                                <p class="error-description hidden">
                                                    Необходимо
                                                    исправить
                                                    ошибки или
                                                    опечатки в
                                                    тексте. Слова с
                                                    ошибками
                                                    подчеркнуты
                                                    красным
                                                </p>
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="editor-wrapper">
                                                    <div class="editor-container">
                                                        <!-- Toolbar -->
                                                        <div id="fiworkDescriptionToolbar" class="toolbar">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-list" value="bullet"></button>
                                                        </div>
                                                        <!-- Editor -->
                                                        <div id="fiworkDescriptionEditor" spellcheck="true" class="editor ql-editor" name="fiworkDescriptionEditor"></div>
                                                    </div>
                                                
                                                    <!-- Character counter -->
                                                    <div class="char-counter" id="fiwork-description-char-counter">
                                                      0 из 1200 символов (минимум 100)
                                                    </div>
                                                </div>
                                                
                                                <div class="step-stage-form-description-modal">
                                                    <img src="/img/create-fiwork-page/pointer.svg" alt="pointer" class="pointer-icon"/>
                                                    <div class="img-container">
                                                        <img src="/img/create-fiwork-page/add-fiwork-name-description.svg" alt="modal-img" class="description-modal-img"/>
                                                    </div>
                                                    <div class="description-text">
                                                        <label>В описании форка четко напишите, какую услугу получат покупатели</label>
                                                        <p>Проявите оригинальность:
                                                            добавьте аргументы, опишите
                                                            гарантии, покажите свою
                                                            компетентность, чтобы
                                                            покупатель заказал именно у
                                                            вас.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="create-fiwork-step-stage create-fiwork-step-enter-customer-description">
                                            <div class="step-stage-name">
                                                От покупателя нужно
                                                <p class="error-description hidden">
                                                    Необходимо
                                                    исправить
                                                    ошибки или
                                                    опечатки в
                                                    тексте. Слова с
                                                    ошибками
                                                    подчеркнуты
                                                    красным
                                                </p>
                                            </div>
                                            <div class="step-stage-form">
                                                <div class="editor-wrapper">
                                                    <div class="editor-container">
                                                        <!-- Toolbar -->
                                                        <div id="fiworkCustomerDescriptionToolbar" class="toolbar">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-list" value="bullet"></button>
                                                        </div>
                                                        <!-- Editor -->
                                                        <div id="fiworkCustomerDescriptionEditor" spellcheck="true" class="editor ql-editor" name="fiworkCustomerDescriptionEditor"></div>
                                                    </div>
                                                
                                                    <!-- Character counter -->
                                                    <div class="char-counter" id="fiwork-customer-description-char-counter">
                                                      0 из 1200 символов (минимум 100)
                                                    </div>
                                                    
                                                    <div class="step-stage-form-description-modal">
                                                    <img src="/img/create-fiwork-page/pointer.svg" alt="pointer" class="pointer-icon"/>
                                                    <div class="img-container">
                                                        <img src="/img/create-fiwork-page/add-fiwork-name-description.svg" alt="modal-img" class="description-modal-img"/>
                                                    </div>
                                                    <div class="description-text">
                                                        <label>Укажите, какая информация и
                                                                доступы вам нужны от
                                                                покупателя для начала
                                                                работы над заказом.
                                                                Покупатель увидит ваш
                                                                запрос сразу после оплаты
                                                                форка</label>
                                                        <p>Если уместно, составьте список
                                                            уточняющих вопросов по
                                                            заданию. Постарайтесь ничего
                                                            не упустить, чтобы сразу
                                                            приступить к работе, получив
                                                            нужные ответы.</p>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                                <div class="attach-wrapper">
                                                  <label class="attach-label" for="file-input">
                                                    <img src="/img/create-fiwork-page/attach.svg" alt="attach-icon" class="attach-icon"/>
                                                    Прикрепить файл
                                                  </label>
                                                  <input type="file" id="file-input" multiple>
                                                  <div class="file-names-display"></div>
                                                  <div class="attach-info">до 10 файлов не более 100 Мб</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <input type="submit" class="form-trigger-button"/>
                            </form>
                            
                            <div class="continue-to-next-step submit-fiwork-files-and-description hidden">
                                <input type="button" value="Продолжить" class="continue-to-next-step-button submit-fiwork-files-and-description" onclick="submitForm('fiwork-files-and-description-form');"/> 
                            </div>
                            
                            
                            <form class="create-fiwork-step fiwork-price-and-options-form hidden">
                                <div class="create-fiwork-step-header">
                                    <div class="create-fiwork-step-num-wrapper">
                                        <div class="create-fiwork-step-num-container">
                                            3
                                        </div>
                                        Стоимость и опции
                                    </div>
                                    <div class="fiwork-in-three-variants-switch">
                                        <span>1 пакет</span>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                        <span>3 пакета</span>
                                    </div>
                                </div>
                                <div class="create-fiwork-step-content create-fiwork-table-content">
                                    <div class="price-and-options-table-container">
                                        <div class="fiwork-price-and-options-table-wrapper">
                                            <table class="price-and-options-table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Эконом</th>
                                                        <th class="width-indicator1">Стандарт</th>
                                                        <th class="width-indicator2">Бизнес</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    <tr class="fiwork-option-names" id="fiwork-option-names">
                                                        <td>Краткое описание</td>
                                                        <td><textarea class="fiwork-option-name-input" placeholder="Опишите пакет «Эконом»" maxlength="120" required></textarea><img src="/img/create-fiwork-page/pencil.svg" alt="edit-cell" class="edit-cell-pencil"/></td>
                                                        <td><textarea class="fiwork-option-name-input fiwork-in-three-variants-elem" placeholder="Опишите пакет «Стандарт»" maxlength="120"></textarea><img src="/img/create-fiwork-page/pencil.svg" alt="edit-cell" class="edit-cell-pencil"/></td>
                                                        <td><textarea class="fiwork-option-name-input fiwork-in-three-variants-elem" placeholder="Опишите пакет «Бизнес»" maxlength="120"></textarea><img src="/img/create-fiwork-page/pencil.svg" alt="edit-cell" class="edit-cell-pencil"/></td>
                                                        <td class="step-stage-form-description-modal">
                                                            <div class="description-text">
                                                                <label>Кратко опишите, что данный
                                                                        пакет предлагает
                                                                        покупателям или какой
                                                                        конечный результат они
                                                                        получат</label>
                                                                <p>
                                                                    Длина описания – не более 120 символов
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                    <tr class="fiwork-color-options">
                                                        <td>
                                                            В нескольких цветах
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                            <img src="/img/create-fiwork-page/info-icon.svg" alt="info-icon" class="info-icon"/>
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="fiwork-visualization-options">
                                                        <td>
                                                            Визуализация
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="fiwork-favicon-options">
                                                        <td>
                                                            Фавикон
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="fiwork-high-pixel-options">
                                                        <td>
                                                            Высокое разрешение
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="fiwork-source-options">
                                                        <td>
                                                            Исходники
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="fiwork-logo-count-options">
                                                        <td>
                                                            Количество логотипов
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="text" class="fiwork-option-text-input" required><img src="/img/create-fiwork-page/info-icon.svg" alt="info-icon" class="info-icon"/>
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="text" class="fiwork-option-text-input fiwork-in-three-variants-elem"><img src="/img/create-fiwork-page/pencil.svg" alt="edit-cell" class="edit-cell-pencil"/>
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="text" class="fiwork-option-text-input fiwork-in-three-variants-elem"><img src="/img/create-fiwork-page/pencil.svg" alt="edit-cell" class="edit-cell-pencil"/>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="own-option own-option-input own-option-input-template">
                                                        <td>
                                                            <span class="own-option-name">Тест<span><br> 
                                                            <span class="own-option-text">Своя опция</span>
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="text" placeholder="Текст" class="fiwork-option-text-input" disabled required><img src="/img/create-fiwork-page/pencil.svg" alt="edit-cell" class="edit-cell-pencil"/>
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="text" placeholder="Текст" class="fiwork-option-text-input fiwork-in-three-variants-elem" disabled><img src="/img/create-fiwork-page/pencil.svg" alt="edit-cell" class="edit-cell-pencil"/>
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="text" placeholder="Текст" class="fiwork-option-text-input fiwork-in-three-variants-elem" disabled><img src="/img/create-fiwork-page/pencil.svg" alt="edit-cell" class="edit-cell-pencil"/>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="own-option own-option-checkbox own-option-checkbox-template">
                                                        <td>
                                                            <span class="own-option-name">Тест<span><br> 
                                                            <span class="own-option-text">Своя опция</span>
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                        
                                                        <td>
                                                            <input type="checkbox" class="fiwork-option-checkbox">
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="add-own-option">
                                                        <td class="add-own-option-button-container">
                                                            <div class="add-own-option-button"><img src="/img/icons/green-round-plus.svg" alt="green-round-plus" class="green-plus-icon"/>Добавить свою опцию</div>
                                                        </td>
                                                        
                                                        <td>
                                                        
                                                        </td>
                                                        
                                                        <td>
                                                        
                                                        </td>
                                                        
                                                        <td>
                                                        
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="fiworks-time-options">
                                                        <td>
                                                            Срок выполнения 
                                                        </td>
                                                        
                                                        <td>
                                                            <select id="select-section" name="fiwork-section" required>
                                                                <option value="" disabled selected>Укажите срок</option>
                                                                <option value="">1 день</option>
                                                                <option value="">2 дня</option>
                                                                <option value="">3 дня</option>
                                                                <option value="">4 дня</option>
                                                                <option value="">5 дней</option>
                                                                <option value="">7 дней</option>
                                                                <option value="">1 неделя</option>
                                                                <option value="">2 недели</option>
                                                                <option value="">3 недели</option>
                                                                <option value="">1 месяц</option>
                                                                <option value="">2 месяця</option>
                                                                <option value="">3 месяця</option>
                                                            </select>
                                                            <img src="/img/create-fiwork-page/info-icon.svg" alt="info-icon" class="info-icon"/>
                                                        </td>
                                                        
                                                        <td>
                                                            <select id="select-section" name="fiwork-section" class="fiwork-in-three-variants-elem">
                                                                <option value="" disabled selected>Укажите срок</option>
                                                                <option value="">1 день</option>
                                                                <option value="">2 дня</option>
                                                                <option value="">3 дня</option>
                                                                <option value="">4 дня</option>
                                                                <option value="">5 дней</option>
                                                                <option value="">7 дней</option>
                                                                <option value="">1 неделя</option>
                                                                <option value="">2 недели</option>
                                                                <option value="">3 недели</option>
                                                                <option value="">1 месяц</option>
                                                                <option value="">2 месяця</option>
                                                                <option value="">3 месяця</option>
                                                            </select>
                                                        </td>
                                                        
                                                        <td>
                                                            <select id="select-section" name="fiwork-section" class="fiwork-in-three-variants-elem">
                                                                <option value="" disabled selected>Укажите срок</option>
                                                                <option value="">1 день</option>
                                                                <option value="">2 дня</option>
                                                                <option value="">3 дня</option>
                                                                <option value="">4 дня</option>
                                                                <option value="">5 дней</option>
                                                                <option value="">7 дней</option>
                                                                <option value="">1 неделя</option>
                                                                <option value="">2 недели</option>
                                                                <option value="">3 недели</option>
                                                                <option value="">1 месяц</option>
                                                                <option value="">2 месяця</option>
                                                                <option value="">3 месяця</option></select>
                                                        </td>
                                                        <td class="step-stage-form-description-modal">
                                                            <div class="description-text">
                                                                <label>Укажите срок, за который вы точно выполните этот пакет</label>
                                                                <p class="orange-background">
                                                                    <b>Обратите внимание</b>, что
                                                                    срок выполнения нельзя
                                                                    будет изменить или
                                                                    продлить после старта
                                                                    заказа. Если вы не уверены,
                                                                    что гарантированно
                                                                    уложитесь в указанный срок,
                                                                    заложите больше времени.
                                                                </p>
                                                                <p>
                                                                    Общий срок выполнения
                                                                    заказа сложится из полного
                                                                    времени первого пакета
                                                                    кворка (опции) и половины
                                                                    времени каждого
                                                                    дополнительного пакета
                                                                    (опции). 
                                                                </p>
                                                                <p>
                                                                    Напоминаем, что покупатель
                                                                    имеет право отказаться от
                                                                    невыполненного вовремя
                                                                    заказа, и это отрицательно
                                                                    отразится на вашем рейтинге.
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="fiwork-price-options">
                                                        <td>
                                                            Цена
                                                        </td>
                                                        
                                                        <td>
                                                            <select id="select-section" name="fiwork-section" required>
                                                                <option value="" disabled selected>400 - 220000 ₽</option>
                                                                <option value="">400 ₽</option>
                                                                <option value="">800 ₽</option>
                                                                <option value="">1200 ₽</option>
                                                                <option value="">2000 ₽</option>
                                                                <option value="">4000 ₽</option>
                                                                <option value="">8000 ₽</option>
                                                                <option value="">16000 ₽</option>
                                                                <option value="">20000 ₽</option>
                                                                <option value="">32000 ₽</option>
                                                                <option value="">48000 ₽</option>
                                                                <option value="">64000 ₽</option>
                                                                <option value="">80000 ₽</option>
                                                                <option value="">96000 ₽</option>
                                                                <option value="">120000 ₽</option>
                                                                <option value="">160000 ₽</option>
                                                                <option value="">200000 ₽</option>
                                                                <option value="">250000 ₽</option>
                                                                <option value="">300000 ₽</option>
                                                                <option value="">400000 ₽</option>
                                                            </select>
                                                            <img src="/img/create-fiwork-page/info-icon.svg" alt="info-icon" class="info-icon"/>
                                                        </td>
                                                        
                                                        <td>
                                                            <select id="select-section" name="fiwork-section" class="fiwork-in-three-variants-elemen">
                                                                <option value="" disabled selected>400 - 220000 ₽</option>
                                                                <option value="">400 ₽</option>
                                                                <option value="">800 ₽</option>
                                                                <option value="">1200 ₽</option>
                                                                <option value="">2000 ₽</option>
                                                                <option value="">4000 ₽</option>
                                                                <option value="">8000 ₽</option>
                                                                <option value="">16000 ₽</option>
                                                                <option value="">20000 ₽</option>
                                                                <option value="">32000 ₽</option>
                                                                <option value="">48000 ₽</option>
                                                                <option value="">64000 ₽</option>
                                                                <option value="">80000 ₽</option>
                                                                <option value="">96000 ₽</option>
                                                                <option value="">120000 ₽</option>
                                                                <option value="">160000 ₽</option>
                                                                <option value="">200000 ₽</option>
                                                                <option value="">250000 ₽</option>
                                                                <option value="">300000 ₽</option>
                                                                <option value="">400000 ₽</option>
                                                            </select>
                                                        </td>
                                                        
                                                        <td>
                                                            <select id="select-section" name="fiwork-section" class="fiwork-in-three-variants-elem">
                                                                <option value="" disabled selected>400 - 220000 ₽</option>
                                                                <option value="">400 ₽</option>
                                                                <option value="">800 ₽</option>
                                                                <option value="">1200 ₽</option>
                                                                <option value="">2000 ₽</option>
                                                                <option value="">4000 ₽</option>
                                                                <option value="">8000 ₽</option>
                                                                <option value="">16000 ₽</option>
                                                                <option value="">20000 ₽</option>
                                                                <option value="">32000 ₽</option>
                                                                <option value="">48000 ₽</option>
                                                                <option value="">64000 ₽</option>
                                                                <option value="">80000 ₽</option>
                                                                <option value="">96000 ₽</option>
                                                                <option value="">120000 ₽</option>
                                                                <option value="">160000 ₽</option>
                                                                <option value="">200000 ₽</option>
                                                                <option value="">250000 ₽</option>
                                                                <option value="">300000 ₽</option>
                                                                <option value="">400000 ₽</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                            <div class="fiwork-in-three-variants">
                                                <h3>Оформите кворк в трех ценовых вариантах</h3>
                                                <p>Узнайте, какие возможности это дает, посмотрите короткое видео</p>
                                                <input type="button" value="Узнать" class="know-more-button"/>
                                                <div class="step-stage-form-description-modal">
                                                    <img src="/img/create-fiwork-page/pointer.svg" alt="pointer" class="pointer-icon"/>
                                                    <div class="img-container">
                                                        <img src="/img/create-fiwork-page/three-cols.svg" alt="modal-img" class="description-modal-img"/>
                                                    </div>
                                                    <div class="description-text">
                                                        <label>Предложите покупателю три пакета услуг по разной цене</label>
                                                        <p>
                                                            Укажите опции, которые входят
                                                            в каждый ценовой диапазон.
                                                            Создайте три варианта кворка
                                                            для покупателей. Это позволит:
                                                        </p>
                                                        
                                                        <ul>
                                                            <li>выставить на продажу более дорогую услугу</li>
                                                            <li>оформить комплексное предложение</li>
                                                            <li>увеличить стоимость заказа</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="fiwork-editional-options-block">
                                        <h3>Дополнительные опции</h3>
                                        <div class="fiwork-editional-options-container">
                                            <div class="fiwork-editional-options">
                                                <div class="fiwork-editional-option template">
                                                    <div class="option-name-and-price-container">
                                                        <div class="option-name-container">
                                                            <input type="text" class="option-name-input" name="option-name" placeholder="Название опции" maxlength="40"/>
                                                            <div class="option-name-count-container">
                                                                <span class="option-name-count">0</span>&nbsp;из 40 символов
                                                            </div>
                                                        </div>
                                                        <div class="option-price-and-day-container">
                                                            <select id="select-option-price" name="option-price">
                                                                <option value="80" selected>80 ₽</option>
                                                                <option value="400">400 ₽</option>
                                                                <option value="1000">1000 ₽</option>
                                                            </select>
                                                            <select id="select-option-day" name="option-day">
                                                                <option value="1day" selected>1 день</option>
                                                                <option value="2day">2 дня</option>
                                                                <option value="3day">3 дня</option>
                                                            </select>
                                                            <img src="/img/icons/x-close.svg" alt="x-close-icon" class="x-close-icon" onclick="closeFiworkEditionalOption(this);"/>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="customer-tip-container">
                                                        <input type="text" class="customer-tip-input" name="customer-tip" placeholder="Подсказка для покупателя" maxlength="100"/>
                                                        <div class="customer-tip-count-container">
                                                             <span class="customer-tip-count">0</span>&nbsp;из 100 символов
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="fiwork-editional-option">
                                                    <div class="option-name-and-price-container">
                                                        <div class="option-name-container">
                                                            <input type="text" class="option-name-input" name="option-name" placeholder="Название опции" maxlength="40"/>
                                                            <div class="option-name-count-container">
                                                                <span class="option-name-count">0</span>&nbsp;из 40 символов
                                                            </div>
                                                        </div>
                                                        <div class="option-price-and-day-container">
                                                            <select id="select-option-price" name="option-price" required>
                                                                <option value="80" selected>80 ₽</option>
                                                                <option value="400">400 ₽</option>
                                                                <option value="1000">1000 ₽</option>
                                                            </select>
                                                            <select id="select-option-day" name="option-day" required>
                                                                <option value="1day" selected>1 день</option>
                                                                <option value="2day">2 дня</option>
                                                                <option value="3day">3 дня</option>
                                                            </select>
                                                            <img src="/img/icons/x-close.svg" alt="x-close-icon" class="x-close-icon" onclick="closeFiworkEditionalOption(this);"/>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="customer-tip-container">
                                                        <input type="text" class="customer-tip-input" name="customer-tip" placeholder="Подсказка для покупателя" maxlength="100"/>
                                                        <div class="customer-tip-count-container">
                                                             <span class="customer-tip-count">0</span>&nbsp;из 100 символов
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="add-more-container">
                                                <span class="add-more">Добавить ещё</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="form-trigger-button"/>
                            </form>
                            
                            <div class="continue-to-next-step submit-fiwork-price-and-options hidden">
                                <input type="button" value="Продолжить" class="continue-to-next-step-button submit-fiwork-price-and-options" onclick="submitForm('fiwork-price-and-options-form');"/> 
                            </div>
                            
                            <form class="create-fiwork-step fiwork-portfolio-form hidden">
                                <div class="create-fiwork-step-header">
                                    <div class="create-fiwork-step-num-container">
                                        4
                                    </div>
                                    Портфолио
                                </div>
                                
                                <div class="create-fiwork-step-content">
                                    <div class="fiwork-portfolio-block">
                                        <p class="required-to-do">Необходимо загрузить не менее 5 примеров работ</p>
                                        <div class="fiwork-portfolio-container">
                                            <div class="fiwork-portfolio-header">
                                                <h2>Успех начинается с отличного портфолио</h2>
                                                <p class="work-count-indicator">Загружено работ: <font><span class="count">0</span>/5</font></p>
                                                <p class="success">Отлично! Можете добавить еще!</p>
                                            </div>
                                            
                                            <div class="fiwork-portfolio-container-description">
                                                <p>
                                                    Портфолио — визитная карточка продавца. Оно создает первое впечатление,
                                                    показывает ваш опыт и профессионализм. Если портфолио привлекательное,
                                                    покупатели с большей вероятностью откроют кворк и внимательнее изучат ваше
                                                    предложение. Отличное портфолио означает больше продаж.
                                                </p>
                                                <p>
                                                    <span class="highlighted-text">Загрузите не менее 5 качественных работ,</span> чтобы привлечь покупателей и увеличить 
                                                    продажи.
                                                </p>
                                            </div>
                                            
                                            <div class="add-works-container">
                                                <div class="add-work-elem" data-work-index="0">
                                                    <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="green-round-plus"/>
                                                    <span>Добавить работу</span>
                                                    <div class="add-work-elem-loaded-container hidden">
                                                        <img src="/img/create-fiwork-page/work1.webp" alt="work" class="work-img"/>
                                                        <img src="/img/icons/resize.svg" alt="resize-icon" class="resize-icon"/>
                                                        <img src="/img/icons/delete.svg" alt="delete-icon" class="delete-icon" onclick="hideParentElem(this);"/>
                                                        <img src="/img/icons/edit-pencil.svg" onclick="editLoadedContent(this);" alt="edit-icon" class="edit-icon"/>
                                                    </div>
                                                </div>
                                                <div class="add-work-elem" data-work-index="1">
                                                    <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="green-round-plus"/>
                                                    <span>Добавить работу</span>
                                                    <div class="add-work-elem-loaded-container hidden">
                                                        <img src="/img/create-fiwork-page/work1.webp" alt="work" class="work-img"/>
                                                        <img src="/img/icons/resize.svg" alt="resize-icon" class="resize-icon"/>
                                                        <img src="/img/icons/delete.svg" alt="delete-icon" class="delete-icon" onclick="hideParentElem(this);"/>
                                                        <img src="/img/icons/edit-pencil.svg" onclick="editLoadedContent(this);" alt="edit-icon" class="edit-icon"/>
                                                    </div>
                                                    
                                                </div>
                                                <div class="add-work-elem" data-work-index="2">
                                                    <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="green-round-plus"/>
                                                    <span>Добавить работу</span>
                                                    <div class="add-work-elem-loaded-container hidden">
                                                        <img src="/img/create-fiwork-page/work1.webp" alt="work" class="work-img"/>
                                                        <img src="/img/icons/resize.svg" alt="resize-icon" class="resize-icon"/>
                                                        <img src="/img/icons/delete.svg" alt="delete-icon" class="delete-icon" onclick="hideParentElem(this);"/>
                                                        <img src="/img/icons/edit-pencil.svg" onclick="editLoadedContent(this);" alt="edit-icon" class="edit-icon"/>
                                                    </div>
                                                    
                                                </div>
                                                <div class="add-work-elem" data-work-index="3">
                                                    <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="green-round-plus"/>
                                                    <span>Добавить работу</span>
                                                    <div class="add-work-elem-loaded-container hidden">
                                                        <img src="/img/create-fiwork-page/work1.webp" alt="work" class="work-img"/>
                                                        <img src="/img/icons/resize.svg" alt="resize-icon" class="resize-icon"/>
                                                        <img src="/img/icons/delete.svg" alt="delete-icon" class="delete-icon" onclick="hideParentElem(this);"/>
                                                        <img src="/img/icons/edit-pencil.svg" onclick="editLoadedContent(this);" alt="edit-icon" class="edit-icon"/>
                                                    </div>
                                                    
                                                </div>
                                                <div class="add-work-elem" data-work-index="4">
                                                    <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="green-round-plus"/>
                                                    <span>Добавить работу</span>
                                                    <div class="add-work-elem-loaded-container hidden">
                                                        <img src="/img/create-fiwork-page/work1.webp" alt="work" class="work-img"/>
                                                        <img src="/img/icons/resize.svg" alt="resize-icon" class="resize-icon"/>
                                                        <img src="/img/icons/delete.svg" alt="delete-icon" class="delete-icon" onclick="hideParentElem(this);"/>
                                                        <img src="/img/icons/edit-pencil.svg" onclick="editLoadedContent(this);" alt="edit-icon" class="edit-icon"/>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="step-stage-form-description-modal">
                                                    <div class="img-container">
                                                        <img src="/img/create-fiwork-page/add-work-desc-banner.svg" alt="modal-img" class="description-modal-img"/>
                                                    </div>
                                                    <div class="description-text">
                                                        <label>Загрузите полноразмерное и качественное портфолио</label>
                                                        <p>Качественное портфолио
                                                            позволит высоко оценить ваш
                                                            профессионализм и
                                                            компетенцию. Это
                                                            положительно скажется на
                                                            продажах.</p>
                                                        <p>
                                                            Добавьте изображения, видео
                                                            или анимацию, которые лучше
                                                            всего представляют вашу
                                                            услугу. Покупатели смогут
                                                            просмотреть их в полном
                                                            размере.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="continue-to-next-step submit-fiwork-portfolio hidden">
                                <input type="button" value="Продолжить" class="continue-to-next-step-button submit-fiwork-portfolio" onclick="submitForm('fiwork-portfolio-form');"/> 
                            </div>
                        </div>
                    </div>
                    
                    <div class="create-fiwork-aside-block">
                        <div class="create-fiwork-aside-container">
                            <div class="create-fiwork-aside-step active fiwork-details-form-indicator">
                                    <div class="create-fiwork-aside-step-num-container">
                                        1
                                    </div>
                                    Основное
                            </div>
                            <div class="create-fiwork-aside-step fiwork-files-and-description-indicator">
                                    <div class="create-fiwork-aside-step-num-container">
                                        2
                                    </div>
                                    Описание и файлы
                            </div>
                            <div class="create-fiwork-aside-step fiwork-price-and-options-form-indicator">
                                    <div class="create-fiwork-aside-step-num-container">
                                        3
                                    </div>
                                    Стоимость и опции
                            </div>
                            <div class="create-fiwork-aside-step fiwork-portfolio-form-indicator">
                                    <div class="create-fiwork-aside-step-num-container">
                                        4
                                    </div>
                                    Ответы на частые вопросы
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
<div class="add-fiwork-option-modal-block hidden">
    <form class="add-fiwork-option-modal-container">
        <div class="add-fiwork-option-modal-header">
            <h3>Добавление опции</h3><img src="/img/icons/x-close.svg" alt="x-close-icon" class="x-close-icon close-add-fiwork-option-modal-block"/>
        </div>
        <div class="add-fiwork-option-modal-wrapper">
            <div class="enter-option-name-container option-prop">
                <div class="enter-option-name-description option-prop-description"><label for="enter-option-name-input">Название опции</label><img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/></div>
                <input type="text" maxlength="18" placeholder="Введите название опции" class="option-prop-input" id="enter-option-name-input" name="enter-option-name-input" required/>
                <div class="enter-option-name-counter option-prop-counter">
                    <span class="enter-option-name-count option-prop-count">0</span>&nbsp;из 18 символов
                </div>
            </div>
            
            <div class="option-view-type-container option-prop">
                <div class="option-view-type-description option-prop-description"><label>Вид отображения опции</label><img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/></div>
                <div class="option-view-type">
                    <div class="option-checkbox">
                        <input type="radio" name="option-view-type" value="own-option-checkbox-template" class="option-view-type-galka" id="option-view-type-galka" required/>
                        <label for="option-view-type-galka" class="option-checkbox-label">Галка</label>
                    </div>
                    
                    <div class="option-checkbox">
                        <input type="radio" name="option-view-type" value="own-option-input-template"  class="option-view-type-text" id="option-view-type-text" required/>
                        <label for="option-view-type-text" class="option-checkbox-label">Текст</label>
                    </div>
                </div>
            </div>
            
            <div class="customer-tip-container option-prop">
                <div class="customer-tip-description option-prop-description"><label>Подсказка для покупателя</label><img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/></div>
                <input type="text" maxlength="100" placeholder="Введите подсказку для покупателя" class="option-prop-input" id="customer-tip-input" name="customer-tip-input" required/>
                <div class="customer-tip-counter option-prop-counter">
                    <span class="customer-tip-count option-prop-count">0</span>&nbsp;из 100 символов
                </div>
            </div>
            
            <input type="submit" value="Добавить" style="cursor: pointer;" class="submit-modal-form"/>
        </div>
    </form> 
</div>

<div class="add-work-modal-block hidden">
    <form class="add-work-modal-container">
        <div class="add-work-modal-header">
            <h3>Презентуйте свои услуги</h3>
            <img src="/img/icons/x-close.svg" alt="x-close-icon" class="x-close-icon close-add-work-modal-block"/>
        </div>
        <div class="add-work-modal-wrapper">
            <p class="add-work-modal-description">
                Подберите лучшие примеры работ, демонстрирующие ваши навыки и профессионализм.
                Загрузите изображения, анимацию или видео, показывающие работу с разных сторон, в
                нескольких цветах, стилях или размерах.
            </p>
            <div class="add-work-name-container">
                <div class="add-work-name-label-container">
                    <label for="add-work-name-input">Название работы</label><span>Не обязательно</span>
                </div>
                <input type="text" placeholder="Работа №45" id="add-work-name-input" class="add-work-name-input" maxlength="40" required/>
                <div class="add-work-name-counter">
                    <span class="add-work-name-count">0</span>&nbsp; из 40 символов
                </div>
            </div>
            
            <div class="load-works-container">
                <div class="load-works-header">
                    <h3>Загрузите изображения или видео</h3>
                    <span>Минимум 1 изображение</span>
                </div>
                <div class="load-works-description">
                    <img src="/img/create-fiwork-page/img-icon.svg" alt="img-icon" class="img-icon"/>
                    Используйте четкие и привлекающие внимание изображения. Избегайте размытых, растянутых
                    или сильно сжатых изображений.
                </div>
                <div class="load-works-description">
                    <img src="/img/create-fiwork-page/video-icon.svg" alt="video-icon" class="video-icon"/>
                    Повысьте вовлеченность покупателей на 40% и увеличьте продажи с помощью видеоролика,
                    который демонстрирует качество ваших услуг и сервиса.
                </div>
                
                <p>
                    Изображения формата JPEG, JPG, PNG, GIF. Вес не более 10 МБ. Рекомендуемый размер 1920x1280 и более.
                </p>
                
                <p>
                    Видео формата MP4, AVI, MOV. Вес не более 50 Мб, длительность до 75 сек. Для горизонтальных видео
                    размер не менее 660 х 165 px, для вертикальных видео размер не менее 132 х 440 px.
                </p>
                
                <div class="add-works-container">
                    <div class="add-work-elem">
                        <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="green-round-plus"/>
                        <span>Загрузить изображение или видео</span>
                        <input type="file" id="upload-work-input" class="upload-work-input" accept=".jpg,.jpeg,.png,mp4" onchange="previewWorkImage(event)" name="fiwork-work-cover">
                    </div>
                    <div class="preview-work-img-container template">
                        <div class="upload-work-preview-shadow-left"></div>
                        <img class="upload-work-preview" alt="Превью обложки" src="#"/>
                        <div class="upload-work-preview-shadow-right"></div>
                        <img src="/img/icons/resize.svg" alt="resize-icon" class="resize-icon"/>
                        <img src="/img/icons/delete.svg" alt="delete-icon" class="delete-icon" onclick="removeParentElem(this)"/>
                    </div>
                </div>
            </div>
            
            <div class="load-cover-container">
                <div class="load-cover-header">
                    <h3>Обложка работы</h3>
                    <span>Обязательно</span>
                </div>
                <p>Загрузите отдельное изображение обложки, чтобы ваша работа в каталоге смотрелась
                привлекательно.</p>
                
                <div class="add-works-container">
                    <div class="add-work-elem">
                        <img src="/img/icons/green-round-plus.svg" alt="round-plus-icon" class="green-round-plus"/>
                        <span>Загрузить обложку</span>
                        <input type="file" class="upload-work-input" accept=".jpg,.jpeg,.png,mp4" onchange="previewWorkImage(event)" name="fiwork-work-cover">
                    </div>
                </div>
                
                <div class="loaded-cover-block hidden">
                    <div class="loaded-cover-desc">
                        <div class="img-container">
                            <img src="#" alt="user-img" class="user-img"/>
                        </div>
                        <div class="loaded-cover-desc-content">
                            <div class="part1">
                                <h3>Работа №45</h3>
                            </div>
                            <div class="part2">
                                <div class="work-section">Рубрика</div>
                                <div class="work-visits">
                                    <div class="like-count">
                                        <img src="/img/icons/hand-like.svg" alt="hand-like" class="hand-like-icon"/>
                                        <span>258</span>
                                    </div>
                                    <div class="visit-count">
                                        <img src="/img/icons/visits.svg" alt="visits" class="visits-icon"/>
                                        <span>430</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loaded-cover-resize">
                        <div class="overlay-container">
                            <img src="/img/create-fiwork-page/overlay-img.svg" class="overlay-img" alt="overlay-img"/>
                        </div>
                        <div class="cover-container">
                            <div class="select-img-part-container">
                                <img src="#" alt="user-img" class="user-img img-to-crop" id="img-to-crop"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-form-button-container">
                <input type="submit" value="Сохранить" class="submit-form-button"/>
            </div>
        </div>
        
    </form>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
<script>
    var widthIndicator1=$(".width-indicator1").width();
    var widthIndicator2=$(".width-indicator2").width();
    $(".fiwork-in-three-variants").css("width",widthIndicator1+widthIndicator2+25+"px");
    console.log($(".fiwork-in-three-variants").css("width"));
    window.addEventListener('resize', function () {
        
    });
    function resizeFiworkInThreeVariants(){
        widthIndicator1=$(".width-indicator1").width();
        widthIndicator2=$(".width-indicator2").width();
        $(".fiwork-in-three-variants").css("width",widthIndicator1+widthIndicator2+25+"px");
    }
    
    function changeRequiredElementsProp(direct){
        if(direct){
            $(".fiwork-in-three-variants-elem").prop("required",true);
        }else{
            $(".fiwork-in-three-variants-elem").prop("required",false);
        }
    }
    
    $(".fiwork-in-three-variants .know-more-button").on("click",function(){
       $(".fiwork-in-three-variants-switch input[type='checkbox']").trigger("click");
    });
    
    $(".fiwork-in-three-variants-switch input[type='checkbox']").on("change",function(){
        if($(this).prop("checked")){
            $(".fiwork-in-three-variants-switch").addClass("active");
            $(".fiwork-in-three-variants").hide();
            changeRequiredElementsProp(true);
        }else{
            $(".fiwork-in-three-variants-switch").removeClass("active");
            $(".fiwork-in-three-variants").show();
            changeRequiredElementsProp(false);
        }
    });
    
    $(".price-and-options-table td input[type='checkbox']").on("click",function(e){
        e.stopPropagation();
    });
    
    $(".price-and-options-table td input[type='checkbox']").parent().css("cursor","pointer").on("click",function(e){
        $(this).find("input[type='checkbox']").trigger("click"); 
    });
    
    $(".create-fiwork-step-enter-name textarea").on("input", function() {
        var charCount = $(this).val().length;
        $(".create-fiwork-step-enter-name .word-interval .char-num").text(charCount);
    });
    
    $(".fiwork-editional-options-container .option-name-input").on("input",function(){
        $(".fiwork-editional-options-container .option-name-count").text($(this).val().length);
    });
    
    $(".fiwork-editional-options-container .customer-tip-input").on("input",function(){
        $(".fiwork-editional-options-container .customer-tip-count").text($(this).val().length);
    });
    
    $(".fiwork-editional-options-container .add-more").on("click",function(){
        $(".fiwork-editional-options").append($(".fiwork-editional-option.template").clone().removeClass("template")); 
    });
    
    $(".add-fiwork-option-modal-block .x-close-icon").on("click",function(){
        $(".add-fiwork-option-modal-block").addClass("hidden"); 
    });
    
    $(".fiwork-portfolio-form .add-work-elem").on("click",function(){
        $(".add-work-modal-block").removeClass("hidden");
    });
    
    $(".add-work-modal-block .x-close-icon").on("click",function(){
         resetWorkModal();
       $(".add-work-modal-block").addClass("hidden");
    });
    
    $(".add-work-elem .edit-icon, .add-work-elem .resize-icon, .add-work-elem .delete-icon").on("click",function(e){
        e.stopPropagation();
    });
    
    $(".fiwork-portfolio-container .add-work-elem-loaded-container").on('click',function(e){
        e.stopPropagation(); 
    });
    
    $(".add-fiwork-option-modal-container").on("submit", function (e) {
        e.preventDefault();
    
        const $form = $(this); 
    
        const rowType = $form.find("input[type='radio']:checked").val();
        const rowName = $form.find(".enter-option-name-input").val();
        const rowDescription = $form.find(".customer-tip-input").val();
    
        const $templateRow = $("." + rowType).first().clone().removeClass(rowType);
        $templateRow.find("input").prop("disabled",false);
    
        $templateRow.find(".option-text").text(rowName);
        $templateRow.find(".option-description").text(rowDescription); 
    
        $(".price-and-options-table .add-own-option").before($templateRow);
        $(this).trigger("reset");
        $(".add-fiwork-option-modal-block").addClass("hidden");
    });

    $(".add-own-option-button").on("click",function(){
        $(".add-fiwork-option-modal-block").removeClass("hidden");    
    });
    
    function closeFiworkEditionalOption(elem){
        $(elem).parent().parent().parent().remove(); 
    }
    
    $(".create-fiwork-step-select-section #select-section").on("change",function(){
       $(".create-fiwork-step-select-section .select-section-option").hide();
       $(".create-fiwork-step-select-section").find("."+$(this).val()).show();
       $(".create-fiwork-step-select-section #select-subcategory").removeClass("hidden");
       
       $(".create-fiwork-step-stage2").addClass("hidden");
       $(".create-fiwork-step-select-section #select-subcategory").val("");
       
       if($(this).val()=="design"){
            closeOthersAndShow('similar-to-selection','none')
       }else{
           closeOthersAndShow('none','similar-to-selection');
       }
       
    });
    
    $(".create-fiwork-step-select-section #select-subcategory").on("change",function(){
        closeOthersAndShow("create-fiwork-step-stage2."+$(this).val(),"create-fiwork-step-stage2");
    });
    
    function closeOthersAndShow(openBlock,closeBlock){
        if(closeBlock!='none'){
            $("."+closeBlock).addClass("hidden");
        }
        
        if(openBlock!='none'){
            $("."+openBlock).removeClass("hidden");
        }
        
        const $container = $(`.fiwork-details-form`);
        // Enable inputs in visible sections (where the hidden class is NOT present)
        $container.find('.create-fiwork-step-stage:not(.hidden) input, .create-fiwork-step-stage:not(.hidden) select, .create-fiwork-step-stage:not(.hidden) textarea').prop('disabled', false);
    
        // Disable inputs in hidden sections
        $container.find('.create-fiwork-step-stage.hidden input, .create-fiwork-step-stage.hidden select, .create-fiwork-step-stage.hidden textarea').prop('disabled', true);
        $(".continue-to-next-step.submit-fiwork-details input").show();
    }
    
    function previewImage(event) {
      const input = event.target;
      const file = input.files[0];
      const preview = document.getElementById('upload-preview');
      const previewContainer=document.getElementById("preview-img-container");
      
      if (file && file.type.match('image.*')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
          previewContainer.style.display = 'flex';
        };
        reader.readAsDataURL(file);
      } else {
        preview.src = '';
        previewContainer.style.display = 'none';
        alert('Пожалуйста, выберите изображение в формате jpg, jpeg или png.');
      }
    }
    
    function previewWorkImage(event){
    console.log("All is ok!");
    console.log("Dandytour");
      const input = event.target;
      const file = input.files[0];
      var previewContainer = $('.preview-work-img-container.template').clone();
      $(previewContainer).removeClass("template");
      $(previewContainer).addClass("loaded-work")
      var preview=$(previewContainer).find(".upload-work-preview")[0];
      
      if (file && file.type.match('image.*')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
            preview.onload = function() {
              updateCover();
            };
            $(previewContainer).css("display", "flex") 
        };
        reader.readAsDataURL(file);
        $(".load-works-container .add-works-container").prepend(previewContainer);
      } else {
        /*preview.src = '';
        previewContainer.style.display = 'none';*/
        alert('Пожалуйста, выберите изображение в формате jpg, jpeg или png.');
      }
    }
    
    function updateCover(){
        const coverSrc = $(".load-works-container .add-works-container .loaded-work").last().find("img.upload-work-preview").attr("src");
        
        if(!coverSrc){
            $(".loaded-cover-block .user-img").attr("src","");
            $(".loaded-cover-block").addClass("hidden");
            $(".load-cover-container .add-works-container .add-work-elem").removeClass("hidden");
        }else{
            $(".loaded-cover-block .user-img").attr("src",coverSrc);
            $(".loaded-cover-block").removeClass("hidden");
            cropImage("img-to-crop"); 
            $(".load-cover-container .add-works-container .add-work-elem").addClass("hidden");
        }
    }
    
    function removeParentElem(elem){
        $(elem).parent().remove();
        updateCover();
    }
    
    function hideParentElem(elem) {
        const $workElement = $(elem).closest('.add-work-elem');
        const workIndex = $workElement.attr('data-work-index');
        
        // Удаляем данные из хранилища
        if (workIndex && portfolioWorks[workIndex]) {
            delete portfolioWorks[workIndex];
        }
        
        if ($(".fiwork-portfolio-form .add-works-container .add-work-elem").length > 5) {
            $workElement.remove();
        } else {
            $workElement.find('.add-work-elem-loaded-container').addClass("hidden");
            // Сбрасываем индекс для пустых элементов
            $workElement.attr('data-work-index', $workElement.index());
        }
        
        indicateWorkCount();
    }
    function indicateWorkCount(){
        const workCount=0;
        const addWorkElemLength=$(".fiwork-portfolio-form .add-works-container .add-work-elem-loaded-container.hidden").length;
        const loadedElemLength=$(".fiwork-portfolio-form .add-works-container .add-work-elem").length;
        if(addWorkElemLength==5){
            $(".fiwork-portfolio-block .required-to-do").show();
            $(".fiwork-portfolio-header p.success").hide();
            $(".fiwork-portfolio-header p.work-count-indicator").show();
            $(".fiwork-portfolio-header p.work-count-indicator font").css("color","#f15b5b");
            $(".fiwork-portfolio-header p.work-count-indicator .count").text("0");
        }else if(addWorkElemLength>=1 && loadedElemLength<6){
            $(".fiwork-portfolio-block .required-to-do").show();
            $(".fiwork-portfolio-header p.success").hide();
            $(".fiwork-portfolio-header p.work-count-indicator").show();
            $(".fiwork-portfolio-header p.work-count-indicator font").css("color","#ffa800");
            $(".fiwork-portfolio-header p.work-count-indicator .count").text(5-addWorkElemLength);
        }else{
            $(".fiwork-portfolio-block .required-to-do").hide();
            $(".fiwork-portfolio-header p.success").show();
            $(".fiwork-portfolio-header p.work-count-indicator").hide();
        }
    }
    
    function submitForm(formContainer) {
        const $container = $(`.${formContainer}`);
        
        // Enable inputs in visible sections (where the hidden class is NOT present)
        $container.find('.create-fiwork-step-stage:not(.hidden) input, .create-fiwork-step-stage:not(.hidden) select, .create-fiwork-step-stage:not(.hidden) textarea').prop('disabled', false);
    
        // Disable inputs in hidden sections
        $container.find('.create-fiwork-step-stage.hidden input, .create-fiwork-step-stage.hidden select, .create-fiwork-step-stage.hidden textarea').prop('disabled', true);
        
        // Trigger the form submission
        $container.find('.form-trigger-button').trigger('click');
    }
    
    $(".fiwork-details-form").on("submit",function(e){
        e.preventDefault();
        $(".continue-to-next-step.submit-fiwork-files-description input").hide();
        $(".fiwork-details-form").addClass("filled");
        $(".fiwork-details-form-indicator").addClass("filled");
        $(".fiwork-files-and-description-form").addClass("active");
        $(".continue-to-next-step.submit-fiwork-files-and-description").removeClass('hidden');
        $(".fiwork-files-and-description-indicator").addClass("active");
    });
    
    
    $(".fiwork-files-and-description-form").on("submit",function(e){
        e.preventDefault();
        var formIsFilled=true;
        $(".fiwork-files-and-description-form .ql-editor").each(function() {
            if ($(this).html().length < 100) {
                // Здесь ты можешь добавить логику для обработки случая, если контент меньше 100 символов.
                // Например, можно вывести сообщение или подсветить поле.
                formIsFilled=false;
            }
        });
        
        if(!formIsFilled){
            alert("Формы описания меньше 100 символов");
            return 0;
        }
        
        $(".continue-to-next-step.submit-fiwork-files-and-description input").hide();
        $(".fiwork-files-and-description-form").addClass("filled");
        $(".fiwork-files-and-description-indicator").addClass("filled");
        $(".fiwork-price-and-options-form").addClass("active");
        $(".continue-to-next-step.submit-fiwork-price-and-options").removeClass("hidden");
        $(".fiwork-price-and-options-form-indicator").addClass("active");
        resizeFiworkInThreeVariants();
    });
    
    $(".fiwork-price-and-options-form").on("submit",function(e){
        e.preventDefault();
        $(".continue-to-next-step.submit-fiwork-price-and-options input").hide();
        $(".fiwork-price-and-options-form").addClass("filled");
        $(".fiwork-price-and-options-form-indicator").addClass("filled");
        $(".fiwork-portfolio-form").addClass("active");
        $(".continue-to-next-step.submit-fiwork-portfolio").removeClass("hidden");
        $(".fiwork-portfolio-form-indicator").addClass("active");
    });
    
    // Глобальное хранилище для работ портфолио
    let portfolioWorks = {};
    let currentEditingIndex = null;
    
    $(".add-work-modal-container").on("submit", function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const workData = {
            name: $('#add-work-name-input').val(),
            files: [],
            cover: null
        };
        
        // Сохраняем данные файлов
        $('.load-works-container .loaded-work').each(function() {
            const imgSrc = $(this).find('.upload-work-preview').attr('src');
            workData.files.push(imgSrc);
        });
        
        // Сохраняем обложку
        if (cropper) {
            const canvas = cropper.getCroppedCanvas({
                width: 400,
                height: 400
            });
            workData.cover = canvas.toDataURL('image/png');
        }
        
        // Сохраняем в хранилище
        const workIndex = currentEditingIndex !== null ? currentEditingIndex : generateNewWorkIndex();
        portfolioWorks[workIndex] = workData;
        
        // Обновляем UI
        updatePortfolioUI(workIndex, workData);
        
        // Очищаем и закрываем форму
        resetWorkModal();
        $(".add-work-modal-block").addClass("hidden");
        currentEditingIndex = null;
        
        indicateWorkCount();
    });
    
    function generateNewWorkIndex() {
        return 'work_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
    }
    
    function updatePortfolioUI(workIndex, workData) {
        let $targetElement;
        
        if (currentEditingIndex !== null) {
            // Редактируем существующий элемент
            $targetElement = $(`[data-work-index="${currentEditingIndex}"]`);
        } else {
            // Создаем новый элемент
            const $emptyElement = $(".fiwork-portfolio-container .add-work-elem .add-work-elem-loaded-container.hidden").first().parent();
            if ($emptyElement.length) {
                $targetElement = $emptyElement;
            } else {
                // Создаем новый элемент если все заполнены
                const $template = $(".fiwork-portfolio-container .add-work-elem").first().clone();
                $targetElement = $template;
                $(".fiwork-portfolio-container .add-works-container").append($targetElement);
            }
        }
        
        // Обновляем данные элемента
        $targetElement.attr('data-work-index', workIndex);
        const $loadedContainer = $targetElement.find('.add-work-elem-loaded-container');
        $loadedContainer.removeClass('hidden');
        $loadedContainer.find('.work-img').attr('src', workData.cover || workData.files[0]);
        
        // Обновляем обработчики событий
        setupPortfolioItemEventHandlers($targetElement);
    }
    
    function setupPortfolioItemEventHandlers($element) {
        $element.off('click').on('click', function() {
            $(".add-work-modal-block").removeClass("hidden");
            currentEditingIndex = null;
        });
        
        $element.find('.edit-icon').off('click').on('click', function(e) {
            e.stopPropagation();
            editLoadedContent(this);
        });
        
        $element.find('.delete-icon').off('click').on('click', function(e) {
            e.stopPropagation();
            const workIndex = $(this).closest('.add-work-elem').attr('data-work-index');
            if (workIndex && portfolioWorks[workIndex]) {
                delete portfolioWorks[workIndex];
            }
            hideParentElem(this);
        });
        
        $element.find('.resize-icon').off('click').on('click', function(e) {
            e.stopPropagation();
            // Логика для resize (если нужна)
        });
    }
    
    function editLoadedContent(element) {
        const $workElement = $(element).closest('.add-work-elem');
        const workIndex = $workElement.attr('data-work-index');
        
        if (!workIndex || workIndex === '0' || workIndex === '1' || workIndex === '2' || workIndex === '3' || workIndex === '4') {
            // Это пустой элемент без данных
            $(".add-work-modal-block").removeClass("hidden");
            currentEditingIndex = null;
            return;
        }
        
        const workData = portfolioWorks[workIndex];
        if (!workData) return;
        
        // Заполняем форму данными
        fillWorkModal(workData);
        currentEditingIndex = workIndex;
        
        // Показываем модальное окно
        $(".add-work-modal-block").removeClass("hidden");
    }
    
    function fillWorkModal(workData) {
        // Заполняем название работы
        $('#add-work-name-input').val(workData.name || '');
        $('.add-work-name-count').text(workData.name ? workData.name.length : 0);
        
        // Очищаем предыдущие превью
        $('.load-works-container .preview-work-img-container.loaded-work').remove();
        
        // Загружаем файлы
        if (workData.files && workData.files.length > 0) {
            workData.files.forEach((fileSrc, index) => {
                const $previewContainer = $('.preview-work-img-container.template').clone();
                $previewContainer.removeClass("template").addClass("loaded-work");
                $previewContainer.find('.upload-work-preview').attr('src', fileSrc);
                $previewContainer.css("display", "flex");
                $('.load-works-container .add-works-container').prepend($previewContainer);
            });
        }
        
        // Загружаем обложку
        if (workData.cover) {
            $('.loaded-cover-block .user-img').attr('src', workData.cover);
            $('.loaded-cover-block #img-to-crop').attr('src', workData.cover);
            $('.loaded-cover-block').removeClass('hidden');
            $('.load-cover-container .add-works-container .add-work-elem').addClass('hidden');
            
            // Инициализируем кроппер с сохраненной обложкой
            setTimeout(() => {
                cropImage("img-to-crop");
            }, 100);
        }
    }
    
    function resetWorkModal() {
        $(".add-work-modal-container").trigger("reset");
        $('.add-work-name-count').text('0');
        $('.load-works-container .preview-work-img-container.loaded-work').remove();
        $('.loaded-cover-block').addClass('hidden');
        $('.load-cover-container .add-works-container .add-work-elem').removeClass('hidden');
        
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
        
        currentEditingIndex = null;
    }
    
    /*Rich text editor*/
    function createQuill(fEditor, fToolbar, fCounter, fPlaceholder = "") {
        // Получаем DOM-элементы по селекторам
        const editorEl = document.querySelector(fEditor);
        const toolbarEl = document.querySelector(fToolbar);
        const counterEl = document.getElementById(fCounter);
    
        const quill = new Quill(editorEl, {
            modules: {
                toolbar: toolbarEl
            },
            theme: 'snow',
            placeholder: fPlaceholder
        });
    
        const maxChars = 1200;
        const minChars = 100;
    
        quill.on('text-change', () => {
            const plainText = quill.getText().trim();
            const charCount = plainText.length;
    
            // Ограничение максимума
            if (charCount > maxChars) {
                quill.deleteText(maxChars, charCount);
            }
    
            // Обновляем счётчик
            counterEl.textContent = `${charCount} из ${maxChars} символов (минимум ${minChars})`;
    
            // Цветовая подсветка
            if (charCount < minChars) {
                counterEl.style.color = "red";
            } else if (charCount >= maxChars) {
                counterEl.style.color = "orange";
            } else {
                counterEl.style.color = "#555";
            }
        });
    }
    
    // Инициализация двух редакторов
    createQuill(
        '#fiworkDescriptionEditor',
        '#fiworkDescriptionToolbar',
        'fiwork-description-char-counter'
    );
    
    createQuill(
        '#fiworkCustomerDescriptionEditor',
        '#fiworkCustomerDescriptionToolbar',
        'fiwork-customer-description-char-counter',
        'Чтобы выполнить ваш заказ, мне потребуется от вас задание. Опишите, что именно вы хотите получить, какие у вас предпочтения. Пришлите нужные файлы и доступы, если они нужны для выполнения заказа.'
    );

    /*End of rich text editor*/
    
    const input = document.getElementById('file-input');
    input.addEventListener('change', () => {
        if (input.files.length > 10) {
          alert("Вы можете загрузить не более 10 файлов");
          input.value = ""; // сбрасываем выбранные файлы
        } else {
          // можно вывести список файлов или другую обработку
          console.log("Файлы выбраны:", input.files);
        }
    });
    
    /*Crop image module*/
    var imageCrop;
    var cropper;
    function cropImage(id){
        imageCrop=document.getElementById(id);
        if (cropper) {
            cropper.destroy();
        }
        cropper = new Cropper(imageCrop, {
          aspectRatio: 2.7/1.8, // квадрат, можно убрать для свободного
          viewMode: 1,
          guides: true,  // сетка 3х3
        });
    }
    /*End of crop image module*/
</script>

<script>
    // Получаем элементы DOM
    const fileInput = document.getElementById('file-input');
    const fileDisplay = document.querySelector('.file-names-display');

    // Добавляем слушатель события 'change' к инпуту для файлов
    fileInput.addEventListener('change', (event) => {
        // Очищаем предыдущие имена файлов
        fileDisplay.innerHTML = ''; 

        // Получаем список выбранных файлов
        const files = event.target.files;

        if (files.length > 0) {
            // Создаем список <ul> для имен файлов
            const ul = document.createElement('ul');
            ul.style.listStyle = 'none'; // Опционально: убираем маркеры списка, чтобы сохранить вид, если стили не предусмотрены
            ul.style.paddingLeft = '0'; // Опционально: убираем отступ, если стили не предусмотрены

            // Перебираем каждый файл
            for (let i = 0; i < files.length; i++) {
                const fileName = files[i].name;
                const li = document.createElement('li');
                li.textContent = '✔ ' + fileName; // Добавляем иконку или текст для индикации
                
                // Опционально: можно добавить минимальный стиль, если нужно
                // li.style.fontSize = '0.9em';
                // li.style.marginTop = '5px';
                
                ul.appendChild(li);
            }
            
            // Вставляем список имен файлов в div для отображения
            fileDisplay.appendChild(ul);
        }
    });
</script>
<script>
// Функция для инициализации перетаскивания
function initializePortfolioDragAndDrop() {
    const portfolioContainer = document.querySelector('.fiwork-portfolio-container .add-works-container');
    
    if (portfolioContainer) {
        new Sortable(portfolioContainer, {
            animation: 150,
            ghostClass: 'portfolio-ghost',
            chosenClass: 'portfolio-chosen', 
            dragClass: 'portfolio-drag',
            handle: '.resize-icon', // Перетаскивание за иконку resize
            filter: '.delete-icon, .edit-icon', // Исключаем кнопки удаления и редактирования
            onStart: function(evt) {
                // Добавляем класс при начале перетаскивания
                evt.item.classList.add('dragging');
            },
            onEnd: function(evt) {
                // Убираем класс после перетаскивания
                evt.item.classList.remove('dragging');
                
                // Обновляем счетчик работ после перетаскивания
                indicateWorkCount();
                
                console.log('Порядок работ изменен');
            }
        });
    }
}

// Функция для блокировки/разблокировки кликов на иконках во время перетаскивания
function setupDragAndDropEventHandlers() {
    const portfolioContainer = $('.fiwork-portfolio-container');
    
    // Обработчики для иконок (оставляем вашу существующую логику)
    portfolioContainer.on('click', '.resize-icon', function(e) {
        e.stopPropagation();
        // Ваша существующая логика для resize
        console.log('Resize icon clicked');
    });
    
    portfolioContainer.on('click', '.delete-icon', function(e) {
        e.stopPropagation();
        hideParentElem(this);
    });
    
    portfolioContainer.on('click', '.edit-icon', function(e) {
        e.stopPropagation();
        editLoadedContent(this);
    });
}

// Инициализация при загрузке страницы
$(document).ready(function() {
    initializePortfolioDragAndDrop();
    setupDragAndDropEventHandlers();
    
    // Инициализируем обработчики для существующих элементов
    $('.fiwork-portfolio-container .add-work-elem').each(function() {
        setupPortfolioItemEventHandlers($(this));
    });
});
</script>
</html>
