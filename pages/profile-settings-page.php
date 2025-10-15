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
    <link rel="stylesheet" href="/css/profile-settings-page.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
        
</head>
<body>
    <?=$userHeader;?>
    
    <div class="main-block">
        <div class="main-container">
            <div class="profile-settings-block">
                <h2>Настройки профиля</h2>
                <div class="profile-settings-container">
                    <div class="aside-block">
                        <div class="user-settings-block">
                            <div class="user-block">
                                <div class="user-avatar-container">
                                    <img src="/img/freelancer-avatars/freelancer3.webp" alt="freelancer-avatar" class="freelancer-avatar"/>
                                </div>
                                <div class="user-name-and-username">
                                    <div class="user-name">Андрей</div>
                                    <div class="user-username">andreycode</div> 
                                </div>
                            </div>
                            
                            <div class="user-settings-container">
                                <div class="user-setting selected" target="settings-part1">
                                    <div class="user-setting-text">
                                        <img src="/img/portfolio-settings-page/settings-icon.svg" alt="settings-icon" class="settings-icon setting-icon"/>
                                        Доступ и данные
                                    </div>
                                    <img src="/img/portfolio-settings-page/chevron-right.svg" alt="chevron-right-icon" class="chevron-right-icon setting-icon"/>
                                </div>
                                
                                <div class="user-setting" target="settings-part2">
                                    <div class="user-setting-text">
                                        <img src="/img/portfolio-settings-page/profile-icon.svg" alt="profile-icon" class="profile-icon setting-icon"/>
                                        Профиль
                                    </div>
                                    <img src="/img/portfolio-settings-page/chevron-right.svg" alt="chevron-right-icon" class="chevron-right-icon setting-icon"/>
                                </div>
                                
                                
                                <div class="user-setting" target="settings-part5">
                                    <div class="user-setting-text">
                                        <img src="/img/portfolio-settings-page/finances.svg" alt="finances-icon" class="finances-icon setting-icon"/>
                                        Финансы
                                    </div>
                                    <span>Карта 5678</span>
                                </div>
                                
                                <div class="user-setting" target="settings-part4">
                                    <div class="user-setting-text">
                                        <img src="/img/portfolio-settings-page/bell.svg" alt="bell-icon" class="bell-icon setting-icon"/>
                                        Уведомления
                                    </div>
                                    <span>Включены</span>
                                </div>
                                
                                <div href="#" class="user-setting">
                                    <div class="user-setting-text">
                                        <img src="/img/portfolio-settings-page/quit-icon.svg" alt="quit-icon" class="quit-icon setting-icon"/>
                                        Выйти
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="additional-settings-block">
                            <h3>Настройки</h3>
                            <div class="additional-settings-container">
                                <div class="additional-setting">
                                    <div class="setting-name">
                                        Тема сайта
                                    </div>
                                    
                                    <div class="setting-values-container">
                                        <span class="setting-value-text">Светлая</span> <img src="/img/portfolio-settings-page/chevron-bottom.svg" alt="chevron-bottom" class="chevron-bottom-icon"/>
                                        <div class="setting-values-list">
                                            <ul>
                                                <li class="active">Светлая</li>
                                                <li>Тёмная</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="additional-setting">
                                    <div class="setting-name">
                                        Язык
                                    </div>
                                    
                                    <div class="setting-values-container">
                                        <span class="setting-value-text">Русский</span> <img src="/img/portfolio-settings-page/chevron-bottom.svg" alt="chevron-bottom" class="chevron-bottom-icon"/>
                                        <div class="setting-values-list">
                                            <ul>
                                                <li class="active">Русский</li>
                                                <li>English</li>
                                                <li>Беллорусский</li>
                                                <li>Арабский</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="additional-setting">
                                    <div class="setting-name">
                                        Валюта
                                    </div>
                                    
                                    <div class="setting-values-container">
                                        <span class="setting-value-text">Российский рубль</span> <img src="/img/portfolio-settings-page/chevron-bottom.svg" alt="chevron-bottom" class="chevron-bottom-icon"/>
                                        <div class="setting-values-list">
                                            <ul>
                                                <li class="active">Российский рубль</li>
                                                <li>US Dollar</li>
                                                <li>Белорусский рубль</li>
                                                <li>ОАЕ Дирхам</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="profile-settings-content">
                        <div class="settings-part1 settings-part">
                            <div class="phone-container">
                                <label>Номер телефона</label>
                                <div class="phone-input">
                                    <input type="text" value="+7****52****" name="user-phone">
                                    <img src="/img/portfolio-settings-page/edit-pencil.svg" alt="edit-icon" class="edit-icon"/>
                                </div>
                            </div>
                            
                            <div class="email-container">
                                <label>Email</label>
                                <div class="email-input">
                                    <input type="text" placeholder="Ваша почта" name="user-email">
                                </div>
                            </div>
                            
                            <div class="time-container">
                                <label>Часовой пояс</label>
                                <select id="select-section" class="time-select" name="fiwork-section" required>
                                    <option value="utc05">(UTC +05:00) Россия / Екатеринбург</option>
                                </select>
                            </div>
                            
                            <div class="change-password-container">
                                <div class="new-password">
                                    <input type="text" placeholder="Новый пароль" name="new-password">
                                    <img src="/img/portfolio-settings-page/seen-icon.svg" alt="seen-icon" class="seen-icon"/>
                                </div>
                                <div class="repeat-password">
                                    <input type="text" placeholder="Новый пароль (еще раз)" name="repeat-password">
                                    <img src="/img/portfolio-settings-page/seen-icon.svg" alt="seen-icon" class="seen-icon"/>
                                </div>
                            </div>
                            
                            <div class="save-button-container">
                                <input type="button" value="Сохранить"/><div class="delete-account">Удалить учетную запись</div>
                            </div>
                        </div>
                        
                        <div class="settings-part2 settings-part hidden">
                            <div class="user-profile-container">
                                <div class="user-avatar-container">
                                    <div class="img-container">
                                        <img src="/img/freelancer-avatars/freelancer3.webp" alt="freelancer-avatar" class="freelancer-avatar-img"/>
                                    </div>
                                    <div class="controls-container">
                                        <input type="button" value="Изменить"/>
                                        <input type="button" value="Удалить"/>
                                    </div>
                                </div>
                                <div class="user-data-container">
                                    <div class="name-container">
                                        <label>Имя</label>
                                        <div class="name-input-confirm-wrapper">
                                            <div class="name-input">
                                                <input type="text" placeholder="Андрей Протасов" name="user-name">
                                            </div>
                                            <div class="confirm-yourself">
                                                <div class="confirm-yourself-container">
                                                    <img src="/img/icons/document.svg" alt="document-icon" class="document-icon"/>
                                                    Подтверждение личности
                                                </div>
                                                <img src="/img/icons/chevron-right.svg" alt="chevron-right-icon" class="chevron-right-icon"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="specialty-container">
                                        <label>Вы по специальности</label>
                                        <div class="specialty-input">
                                            <input type="text" placeholder="Ui-mobile & Web developer" class="specialty-input-text" maxlength="50" name="user-specialty">
                                            <div class="specialty-values-list">
                                                <ul>
                                                    <li class="active">Ui-mobile & Web developer</li>
                                                    <li>Мобильный разработчик</li>
                                                    <li>Web-разработчик</li>
                                                    <li>Figma дизайнер</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="specialty-text-counter">
                                            <span class="specialty-text-count">25</span>&nbsp;из 50 символов (минимум 5)
                                        </div>
                                    </div>
                                    
                                    <div class="location-container">
                                        <div class="country-container">
                                            <label>Страна</label>
                                            <input type="text" placeholder="Страна"/>
                                        </div>
                                        <div class="city-container">
                                            <label>Город (по желанию)</label>
                                            <input type="text" placeholder="Город"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="information-about-you-container">
                                <label>
                                    Информация о вас
                                </label>
                                <textarea class="about-you-textarea">Я старший мобильный (Android и IOS)  а также веб разработчик.
• Web-языки: php, css, html, js
• Mobile-языки: kotlin, java, swift, dart
• Базы-данных: mySQLi, mongoDB, redis, postgreSQL
• Дизайн: figma, adobe photoshop
• Системы управления: wordpress, joomla, drupal, bitrix, opencart, самописные
• Web-фреймворки: vue, laravel, django, ruby
• Mobile-фреймворки: react native, xamarin, flutter
                                   
                                </textarea> 
                                <div class="information-about-you-counter">
                                    <div class="generate-by-ai-text">Сгенерировать с помощью ИИ<img src="/img/icons/gemini.svg" alt="ai-icon" class="ai-icon"/> </div><div class="information-about-you-counter-text"><span>427</span>&nbsp; из 1200 символов</div>                                        
                                </div>
                            </div>
                            
                            <div class="skills-container">
                                <label>Навыки (<span class="skills-count">12</span>/12)</label>
                                <div class="add-new-skill-container">
                                    <div class="add-new-skill-wrapper">
                                        <div class="add-new-input-container">
                                            <input type="text" maxlength="35" placeholder="Начните писать навык" class="add-new-input"/>
                                            <input type="button" value="Добавить" class="confirmNewSkill" onclick="confirmNewSkill()"/>
                                        </div>
                                        <div class="add-new-skill-counter">
                                            <span class="add-new-skill-count">0</span>&nbsp;из 35 символов
                                        </div>
                                    </div>
                                    <div class="cancel-new-skill-wrapper">
                                        <div class="cancel-button">
                                            Отмена
                                        </div>
                                    </div>
                                </div>
                                <div class="skills-wrapper">
                                    <div class="skill skill-template">
                                        <span class="skill-description">Kotlin</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);" class="delete-icon"/>
                                        </div>
                                    </div>
                                    
                                    <div class="skill">
                                        <span class="skill-description">Kotlin</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);" class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">Java</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);" class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">Frontend</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);" class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">Vue</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);" class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">Androd studio</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);" class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">Backend</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);" class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">HTML & CSS</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);" class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">Xcode</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);" class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">Flutter</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);"  class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">Dart</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);"  class="delete-icon"/>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <span class="skill-description">Figma</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);"  class="delete-icon"/>
                                        </div>
                                    </div>
                                    
                                    <div class="skill">
                                        <span class="skill-description">Swift</span>
                                        <div class="controls">
                                            <img src="/img/portfolio-settings-page/edit.svg" onclick="makeSkillEditable(this);" alt="edit-icon" class="edit-icon"/>
                                            <img src="/img/portfolio-settings-page/trash-icon.svg" alt="delete-icon" onclick="deleteSkill(this);"  class="delete-icon"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-skill">
                                    <img src="/img/icons/plus-add-icon.svg" alt="add-icon" class="add-icon">
                                    Добавить навык
                                </div>
                            </div>
                            
                            <div class="routine-and-submit-button">
                                <div class="routine-container">
                                    <div class="routine-header">
                                        <label>Расписание работы</label>
                                        <div class="round-question-container">
                                            <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                            <div class="round-question-description">
                                                Укажите, в какие часы вы обычно работаете на сайте. Эта информация будет видна пользователям.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="time-container">
                                        <span>c</span><input type="time" name="time-from"/><span>до</span><input type="time" name="time-to"/><span>часов (местное время)</span>
                                    </div>
                                    <div class="overall-time">Всего: 23 часа</div>
                                </div>
                                <input type="submit" value="Сохранить"/>
                            </div>
                        </div>
                        
                        <div class="settings-part3 settings-part hidden">
                            <div class="banner-container">
                                <img src="/img/portfolio-settings-page/verify-banner.svg" alt="verify-banner" class="verify-banner"/> 
                            </div>
                            <div class="settings-container settings-container-part1">
                                <div class="description">
                                    <h2>Верификация</h2>
                                    <p>Верификация — это процесс подтверждения того, что профиль действительно принадлежит человеку, чьи имя, фамилия и фотография совпадают с паспортом и селфи.<br>
                                        Если проверка пройдена, профиль получает особую отметку</p>
                                </div>
                                <div class="radio-container">
                                    <div class="radio-box active">
                                        <div class="radio-box-text">
                                            <div class="img-container">
                                                <img src="/img/portfolio-settings-page/document2-icon.svg" alt="document-icon" class="document-icon"/>
                                            </div>
                                            Паспорт
                                        </div>
                                        <input type="radio" class="verification-radio" name="verification-type" checked/>
                                    </div>
                                    <div class="radio-box">
                                        <div class="radio-box-text">
                                            <div class="img-container">
                                                <img src="/img/portfolio-settings-page/document1-icon.svg" alt="document-icon" class="document-icon"/>
                                            </div>
                                            National ID Card
                                        </div>
                                        <input type="radio" class="verification-radio" name="verification-type"/>
                                    </div>
                                </div>
                                
                                <div class="form-container">
                                    <div class="input-box">
                                        <div class="input-container">
                                            <label>Страна, выдавшая удостоверение личности</label>
                                            <select id="select-country" class="country-select" name="select-country" required>
                                                <option value="" disabled selected>Выберите страну</option>
                                                <option value="ru">Россия</option>
                                                <option value="kz">Казахстан</option>
                                            </select> 
                                        </div>
                                    </div>
                                    
                                    <div class="input-box">
                                        <div class="input-container">
                                            <label>Регион</label>
                                            <select id="select-region" class="region-select" name="select-region" required>
                                                <option value="" disabled selected>Выберите регион</option>
                                            </select> 
                                        </div>
                                        <div class="input-container">
                                            <label>Город</label>
                                            <select id="select-city" class="city-select" name="select-city" required>
                                                <option value="" disabled selected>Выберите город</option>
                                            </select> 
                                        </div>
                                    </div>
                                    
                                    <div class="input-box">
                                        <div class="input-container">
                                            <label>Адрес</label>
                                            <input type="text" placeholder="Введите адрес прописки" class="address-input" name="address-input" required/>
                                        </div>
                                        <div class="input-container">
                                            <label>Индекс</label>
                                            <input type="text" placeholder="Введите ваш индекс" class="index-input" name="index-input" required/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="add-works-container">
                                    <div class="upload-cover-container">
                                        <img src="/img/icons/green-round-plus.svg" alt="green-round-plus" class="round-plus-icon"/>
                                            <span>Загрузите фото<br> 
                                                с лицевой стороной вашего документа</span>
                                        
                                        <input type="file" id="upload-input" class="upload-input" accept=".jpg,.jpeg,.png" onchange="previewImage(event)" name="fiwork-cover" required>
                                        <div class="preview-img-container">
                                            <img id="upload-preview" class="upload-preview" alt="Превью обложки" />
                                        </div>
                                    </div>
                                    
                                    <div class="upload-cover-container">
                                        <img src="/img/icons/green-round-plus.svg" alt="green-round-plus" class="round-plus-icon"/>
                                        <span>Загрузите фото<br> 
                                                с вашим лицом и документов в руке</span>
                                        
                                        
                                        <input type="file" id="upload-input" class="upload-input" accept=".jpg,.jpeg,.png" onchange="previewImage(event)" name="fiwork-cover" required>
                                        <div class="preview-img-container">
                                            <img class="upload-preview" alt="Превью обложки" />
                                        </div>
                                    </div>
                                    
                                    <div class="send-to-verify-container">
                                        <p>После проверки все данные обезличиваются, а фотографии удаляются.</p>
                                        <input type="submit"  value="Отправить на проверку">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="settings-container loading-settings-container settings-container-part2">
                                <div class="loading-container loading-box loader">
                                    <div class="loading-name">🔍 Документы на проверке<span class="dots"></span></div>
                                    <p>Обычно эта процедура занимает не более 15 минут, но иногда нам требуется больше времени.</p>
                                </div>
                                
                                <div class="loading-container loading-box loader">
                                    <div class="loading-name">👀 Сканируем взглядом<span class="dots"></span></div>
                                    <p>Бегаем глазами по вашим документам...</p>
                                </div>
                                
                                <div class="loading-container loading-box loader">
                                    <div class="loading-name">🔍 Сверяем факты<span class="dots"></span></div>
                                    <p>Сверяем данные так тщательно, будто ищем иголку в стоге сена.</p>    
                                </div>
                                
                                <div class="loading-container loading-box loader">
                                    <div class="loading-name">📸 Смотрим на фото<span class="dots"></span></div>
                                    <p>Смотрим на фото и думаем: ого, какая совпадуха!</p>    
                                </div>
                                
                                <div class="loading-container loading-box loader">
                                    <div class="loading-name">🤔 Сопоставляем детали<span class="dots"></span></div>
                                    <p>Проверяем, как настоящий детектив из сериалов.</p>    
                                </div>
                                
                                <div class="loading-container loading-box loader">
                                    <div class="loading-name">✅ Сравниваем данные</div>
                                    <p>Ещё несколько минут — и верификация завершена!</p>    
                                </div>
                                
                                <div class="loading-container loading-box hidden">
                                    <div class="loading-name">✅ Проверка пройдена</div>
                                    <p>Мы убедились, что профиль принадлежит реальному человеку.</p>    
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="settings-part settings-part5 hidden">
                            <div class="finances-block">
                                <form class="finances-details">
                                    <div class="select-finances-types">
                                        <select class="time-select" name="select-get-money-type">
                                            <option value="" selected disabled>Выберите способ вывода</option>
                                            <option value="sber">Сбербанк</option>
                                            <option value="t-bank">T-банк</option>
                                            <option value="alfa-bank">Альфа-банк</option>
                                            <option value="ozon-bank">Озон банк</option>
                                            <option value="youmoney">Юmoney</option>
                                            <option value="webmoney">Webmoney</option>
                                            <option value="cryptomus">Cryptomus</option>
                                            <option value="ton">TON</option>
                                            <option value="usdt">USDT (TRC-20)</option>
                                        </select>
                                        <input type="text" id="wallet-number-input" class="wallet-number-input" placeholder="Укажите номер кошелька" name="waller-number-input"/>
                                    </div>
                                    <input type="submit" value="Добавить" class="submit-finances-details"/>
                                </form>
                                
                                <div class="finances-container">
                                    <div class="finances-container-header">
                                        <h3>Популярные способы</h3>
                                        <div class="grafik-vyvoda">
                                            <span>График вывода средств</span>
                                            <img src="/img/icons/round-question-icon.svg" alt="round-question-icon" class="round-question-icon"/>
                                        </div>
                                    </div>
                                
                                    <div class="finances-container-wrapper">
                                        <div class="finance-elem sber">
                                            <img src="/img/portfolio-settings-page/finance-icons/sber.png" alt="sber-icon" class="sber-icon"/>
                                            <div class="finance-elem-details">
                                                <div class="finance-elem-name">Сбербанк</div>
                                                <div class="finance-elem-number">+79321434145</div>
                                            </div>
                                        </div>
                                    
                                        <div class="finance-elem t-bank">
                                            <img src="/img/portfolio-settings-page/finance-icons/t-bank.svg" alt="tbank-icon" class="tbank-icon"/>
                                            <div class="finance-elem-details">
                                                <div class="finance-elem-name">Т-банк</div>
                                                <div class="finance-elem-number">Не указано</div>
                                            </div>
                                        </div>
                                        
                                        <div class="finance-elem alfa-bank">
                                            <img src="/img/portfolio-settings-page/finance-icons/alfa-bank.svg" alt="alfa-icon" class="alfa-icon"/>
                                            <div class="finance-elem-details">
                                                <div class="finance-elem-name">Альфа-Банк</div>
                                                <div class="finance-elem-number">+79321434145</div>
                                            </div>
                                        </div>
                                        
                                        <div class="finance-elem ozon-bank">
                                            <img src="/img/portfolio-settings-page/finance-icons/ozonbank.svg" alt="ozon-icon" class="ozon-icon"/>
                                            <div class="finance-elem-details">
                                                <div class="finance-elem-name">Озон Банк</div>
                                                <div class="finance-elem-number">+79321434145</div>
                                            </div>
                                        </div>
                                        
                                        <div class="finance-elem youmoney">
                                            <img src="/img/portfolio-settings-page/finance-icons/youmoney.svg" alt="youmoney-icon" class="youmoney-icon"/>
                                            <div class="finance-elem-details">
                                                <div class="finance-elem-name">Юmoney</div>
                                                <div class="finance-elem-number">41001703602389</div>
                                            </div>
                                        </div>
                                        
                                        <div class="finance-elem webmoney">
                                            <img src="/img/portfolio-settings-page/finance-icons/webmoney.svg" alt="webmoney-icon" class="webmoney-icon"/>
                                            <div class="finance-elem-details">
                                                <div class="finance-elem-name">Webmoney</div>
                                                <div class="finance-elem-number">Не указано</div>
                                            </div>
                                        </div>
                                        
                                        <div class="finance-elem visa">
                                            <img src="/img/portfolio-settings-page/finance-icons/visa.svg" alt="visa-icon" class="visa-icon"/>
                                            <div class="finance-elem-details">
                                                <div class="finance-elem-name">Банковская карта</div>
                                                <div class="finance-elem-number">Не указано</div>
                                            </div>
                                        </div>
                                        
                                        <div class="finance-elem ton">
                                            <img src="/img/portfolio-settings-page/finance-icons/ton.svg" alt="ton-icon" class="ton-icon"/>
                                            <div class="finance-elem-details">
                                                <div class="finance-elem-name">TON</div>
                                                <div class="finance-elem-number">EQCq9a8KxY3fVb2LLFEF</div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="finance-elem usdt">
                                            <img src="/img/portfolio-settings-page/finance-icons/usdt.svg" alt="usdt-icon" class="usdt-icon"/>
                                            <div class="finance-elem-details">
                                                <div class="finance-elem-name">USDT TRC-20</div>
                                                <div class="finance-elem-number">EQCq9a8KxY3fVb2Lfe2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="settings-part settings-part4 hidden">
                            <form class="control-notifications">
                                <h2>Управление уведомлениями</h2>
                                <p>Некоторые письма отключить не получится - они необходимы для работы на Fiwork.</p>
                                <div class="control-notification-setting">
                                    <input type="checkbox" class="control-notification-setting-checkbox"/>
                                    <div class="control-notification-setting-details">
                                        <div class="control-notification-setting-name">Аккаунт и безопасность</div>
                                        <div class="control-notification-setting-description">Подтверждение действий с аккаунтом: смена пароля, телефона, email, реквизитов карт и т.п.</div>
                                    </div>
                                </div>
                                
                                <div class="control-notification-setting">
                                    <input type="checkbox" class="control-notification-setting-checkbox"/>
                                    <div class="control-notification-setting-details">
                                        <div class="control-notification-setting-name">Заказы</span></div>
                                        
                                        <div class="control-notification-setting inner-setting">
                                            <input type="checkbox" class="control-notification-setting-checkbox"/>
                                            <div class="control-notification-setting-details">
                                                <div class="control-notification-setting-name">События в заказах</div>
                                                <div class="control-notification-setting-description">Изменение статусов заказов, информирование по арбитражам</div>
                                            </div>
                                        </div>
                                        
                                        <div class="control-notification-setting inner-setting">
                                            <input type="checkbox" class="control-notification-setting-checkbox"/>
                                            <div class="control-notification-setting-details">
                                                <div class="control-notification-setting-name">Новые сообщения в заказах</div>
                                                <div class="control-notification-setting-description">Уведомления о новых сообщениях в заказах</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="control-notification-setting">
                                    <input type="checkbox" class="control-notification-setting-checkbox"/>
                                    <div class="control-notification-setting-details">
                                        <div class="control-notification-setting-name">Отзывы</div>
                                        <div class="control-notification-setting-description">Оповещение об отзывах и ответах на отзывы</div>
                                    </div>
                                </div>
                                
                                <div class="control-notification-setting">
                                    <input type="checkbox" class="control-notification-setting-checkbox"/>
                                    <div class="control-notification-setting-details">
                                        <div class="control-notification-setting-name">Чат</span></div>
                                        
                                        <div class="control-notification-setting inner-setting">
                                            <input type="checkbox" class="control-notification-setting-checkbox"/>
                                            <div class="control-notification-setting-details">
                                                <div class="control-notification-setting-name">Сообщения, требующие ответа в течение 24 ч. <span>(для продавцов)</span></div>
                                                <div class="control-notification-setting-description">Напоминание вовремя ответить на сообщение, требующее обязательного ответа</div>
                                            </div>
                                        </div>
                                        
                                        <div class="control-notification-setting inner-setting">
                                            <input type="checkbox" class="control-notification-setting-checkbox"/>
                                            <div class="control-notification-setting-details">
                                                <div class="control-notification-setting-name">Прочие сообщения</div>
                                                <div class="control-notification-setting-description">Оповещения о новых сообщениях в чате</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="control-notification-setting last-setting">
                                    <input type="checkbox" class="control-notification-setting-checkbox"/>
                                    <div class="control-notification-setting-details">
                                        <div class="control-notification-setting-name">Биржа</span></div>
                                        
                                        <div class="control-notification-setting inner-setting">
                                            <input type="checkbox" class="control-notification-setting-checkbox"/>
                                            <div class="control-notification-setting-details">
                                                <div class="control-notification-setting-name">Уведомления о ваших проектах и откликах на Бирже <span>(для покупателей)</span></div>
                                                <div class="control-notification-setting-description">Важная информация о статусе вашего проекта и полученных откликах</div>
                                            </div>
                                        </div>
                                        
                                        <div class="control-notification-setting inner-setting">
                                            <input type="checkbox" class="control-notification-setting-checkbox"/>
                                            <div class="control-notification-setting-details">
                                                <div class="control-notification-setting-name">Новые проекты на Бирже <span>(для продавцов)</span></div>
                                                <div class="control-notification-setting-description">Информация о новых проектах, размещенных в ваших любимых рубриках. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <input type="submit" value="Сохранить" class="submit-settings-button">
                            </form>
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
    $(".aside-block .setting-values-list li").on("click",function(){
        $(this).parent().find("li").removeClass("active");
        $(this).parent().parent().parent().find(".setting-value-text").text($(this).html()); 
        $(this).addClass("active");
    });
    
    $(".specialty-input .specialty-values-list li").on("click",function(){
        $(this).parent().find("li").removeClass("active");
        $(this).parent().parent().parent().find(".specialty-input-text").val($(this).html());
        $(this).addClass("active");
    });
    
    $(".settings-part3 .radio-box").on('click',function(){
        $(this).find("input[type='radio']").trigger("click");
    });
    
    $(".settings-part3 .radio-box input[type='radio']").on("click",function(e){
        e.stopPropagation();
        $(".settings-part3 .radio-box").removeClass("active");
        $(this).parent().addClass("active");
    });
    
    $(".confirm-yourself").on("click",function(){
        $(".settings-part").addClass("hidden");
        $(".settings-part3").removeClass("hidden");
    });
    
    $(".user-setting").on("click",function(){
        $(".settings-part").addClass("hidden");
        $("."+$(this).attr("target")).removeClass("hidden");
        $(".user-setting").removeClass("selected");
        $(this).addClass("selected");
    });
    
    function previewImage(event) {
      var input = event.target;
      var file = input.files[0];
      var preview = $(input).parent().find(".upload-preview");
      var previewContainer=$(event.target).parent().find(".preview-img-container");
      console.log(previewContainer);
      if (file && file.type.match('image.*')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          $(preview).attr("src", e.target.result);
          $(previewContainer).css("display",'flex');
        };
        reader.readAsDataURL(file);
      } else {
        $(preview).attr(src, '');
        $(previewContainer).css("display",'none');
        alert('Пожалуйста, выберите изображение в формате jpg, jpeg или png.');
      }
    }
    
    $(".dots").each(function(){
       animateDots(this); 
    });
    
    function animateDots(dots){
        let i = 0;
        setInterval(() => {
          i = (i % 3) + 1; // от 1 до 3
          dots.textContent = ".".repeat(i);
        }, 500); // каждые 0.5 сек меняем
    }
    
    function deleteSkill(elem){
        $(elem).parent().parent().remove();
        updateSkillsCount();
    }
    
    function makeSkillEditable(elem){
        $(".new-skill").remove();
        $(".editableSkill").removeClass("editableSkill");
        $(elem).parent().parent().addClass("editableSkill")
        $(".add-new-input").val($(".editableSkill").find(".skill-description").text());
        $(".add-new-skill-count").text($(".add-new-input").val().length);
        updateSkillsCount();
    }

    function updateSkill(){
        $(".editableSkill").find(".skill-description").text($(".add-new-input").val());
        $(".new-skill").find(".skill-description").text($(".add-new-input").val());
        $(".add-new-skill-count").text($(".add-new-input").val().length);
    }
    
    function checkSkillToDelete(){
        if($(".editableSkill").find(".skill-description").text().length==0){
            $(".editableSkill").remove();
            updateSkillsCount();
        }
    }
    
    function updateSkillsCount(){
        $(".skills-container").find(".skills-count").text($(".skills-container .skills-wrapper").find(".skill").length-1);
        if($(".skills-wrapper .skill").length>=13){
            if($(".new-skill").length==0 && $(".editableSkill").length==0){
                $(".skills-container .add-new-skill-container").hide();
            }else{
                $(".skills-container .add-new-skill-container").show();
            }
        }else{
            $(".skills-container .add-new-skill-container").show();
        }
    }
    
    updateSkillsCount();
    
    $(".add-new-input").on("change input",function(){
        updateSkill();
        console.log($(".add-new-input").val().length);
        if($(".add-new-input").val().length==0){
            $(".new-skill").remove();
        }
        
        if($(".editableSkill").length==0){
            if($(".new-skill").length==0){
                if($(".skills-wrapper .skill").length<13){
                    if($(".skills-container .add-new-input").val().length!=0){
                        $(".skills-wrapper .skill-template").clone().removeClass("skill-template").addClass("new-skill").appendTo(".skills-wrapper");
                        updateSkill();
                    }
                }
            }
        }
    });
    
    function confirmNewSkill(){
        $(".new-skill").removeClass("new-skill");
        $(".skills-container .add-new-input").val("");
        updateSkillsCount();
    }
    
    
    $(".add-new-input").on("focusout",function(){
        checkSkillToDelete();   
        if($(".editableSkill").length!=0){
            $(".editableSkill").removeClass("editableSkill");
            $(".add-new-input").val("");
            updateSkillsCount(); 
        }
    });
    
    
    /*$(function(){
      const $containers = $('.loading-container');
      if (!$containers.length) return;
    
      let idx = 0;
      const SWITCH_MS = 2000; // 3 секунды между переключениями
      const DOT_MS = 500;     // 0.5 секунды смена точек
      let dotCount = 0;
    
      // Показываем первый блок
      $containers.fadeOut(200).eq(idx).fadeIn(200);
    
      // Анимация точек для активного (видимого) блока
      const dotTimer = setInterval(() => {
        dotCount = (dotCount % 3) + 1; // 1..3
        $containers.eq(idx).find('.dots').text('.'.repeat(dotCount));
      }, DOT_MS);
    
      // Переключение блоков каждые SWITCH_MS
      const switchTimer = setInterval(() => {
        $containers.eq(idx).fadeOut(200, function() {
          // опционально: очистим точки у скрываемого блока
          $(this).find('.dots').text('');
          // следующий индекс
          idx = (idx + 1) % $containers.length;
          $containers.eq(idx).fadeIn(200);
        });
      }, SWITCH_MS);
    
      // Очистка таймеров при выгрузке страницы (хорошая практика)
      $(window).on('unload beforeunload', function(){
        clearInterval(dotTimer);
        clearInterval(switchTimer);
      });
    });*/
</script>
</html>
