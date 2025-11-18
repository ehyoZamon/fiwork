<?php
$header=<<<EOT
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css" />
    <link rel="stylesheet" href="/css/base.css"/>
    <header class="computer-header">
        <div class="nav-part1-container">
            <div class="nav-part1">
                <div class="logo-and-search-block">
                    <a href="#" class="logo-container">
                        <img src="/img/logo.svg" alt="logo" class="header-logo"/>
                    </a>
                    <div class="search-container">
                        <hr class="search-button-stick"><input type="text" placeholder="  Найти услуги" class="search-service-input" name="search-service">
                        <div class="search-button-container hidden">
                            <img src="/img/icons/bold-x-close.svg" alt="x-close" class="clear-search-icon"/>
                            <input type="button" value="Найти" class="search-content-button"/>
                        </div>
                    </div>
                </div>
                
                <div class="registration-and-login-block">
                    <input type="button" value="Зарегистрироваться" class="register-button">
                    <input type="button" value="Войти" class="login-button">
                </div>
            </div>
        </div>
        
        <div class="nav-part2-container">
            <div class="nav-part2">
                <ul>
                    <li>
                        <a href="#">Дизайн & Графика</a>
                        <div class="mega-menu">
                            <div class="mega-menu-column">
                              <h4>Логотип и брендинг</h4>
                              <a href="#">Логотипы <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">Фирменный стиль</a>
                              <a href="#">Визитки</a>
                              <a href="#">Брендирование и сувенирка</a>
                              
                              <h4>Презентации и инфографика</h4>
                              <a href="#">Презентации</a>
                              <a href="#">Инфографика</a>
                              <a href="#">Карта и схема</a>
                              
                              <h4>Арт и иллюстрации</h4>
                              <a href="#">Портрет, шарж, карикатура</a>
                              <a href="#">Иллюстрации и рисунки</a>
                              <a href="#">Дизайн игр</a>
                              <a href="#">Тату, принты</a>
                              <a href="#">Стикеры</a>
                              <a href="#">NFT арт</a>
                              <a href="#">Готовые шаблоны и рисунки</a>
                            </div>
                            
                            <div class="mega-menu-column with-border">
                              <h4>Веб и мобильный дизайн</h4>
                              <a href="#">Веб-дизайн <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">Мобильный дизайн</a>
                              <a href="#">Email-дизайн</a>
                              <a href="#">Баннеры и иконки <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">Юзабилити-аудит</a>
                              
                              <h4>Маркетплейсы и соцсети</h4>
                              <a href="#">Дизайн в соцсетях <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">Дизайн для маркетплейсов</a>
                              
                              <h4>Интерьер и экстерьер</h4>
                              <a href="#">Интерьер</a>
                              <a href="#">Дизайн домов и сооружений</a>
                              <a href="#">Ландшафтный дизайн</a>
                              <a href="#">Дизайн мебели</a>
                              
                              <h4>Обработка и редактирование</h4>
                              <a href="#">Отрисовка в векторе</a>
                              <a href="#">Фотомонтаж и обработка <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">3D-графика <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                            </div>
                            
                            <div class="mega-menu-column with-border">
                              <h4>Полиграфия</h4>
                              <a href="#">Брошюра и буклет</a>
                              <a href="#">Листовки и флаер</a>
                              <a href="#">Плакат и афиша</a>
                              <a href="#">Календарь и открытка</a>
                              <a href="#">Каталог, меню, книга</a>
                              <a href="#">Грамота и сертификат</a>
                              
                              <h4>Промышленный дизайн</h4>
                              <a href="#">Электроника и устройства</a>
                              <a href="#">Предметы и аксессуары</a>
                              <a href="#">Упаковка и этикетка</a>
                              
                              <h4>Наружная реклама</h4>
                              <a href="#">Билборды и стенды</a>
                              <a href="#">Витрины и вывески</a>
                            </div>
                        </div>
                    </li>
                    <li>
                    <a href="#">Разработка и IT</a>
                    </li>
                    <li>
                        <a href="#">Тексты и переводы</a>
                    </li>
                    <li>
                        <a href="#">SEO и трафик</a>
                    </li>
                    <li>
                        <a href="#">Аудио, видео, съемка</a>
                    </li>
                    <li>
                        <a href="#">Бизнес и жизнь</a>
                    </li>
                    <li>
                        <a href="#">Нейросети</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    
    <header class="phone-header">
        <div class="logo-burger-login-block">
            <div class="burger-container">
                <img src="/img/icons/burger.svg" alt="burger" class="burger-icon"/>
                <img src="/img/icons/mobile-menu-icons/close-menu-icon.svg" alt="close-menu" class="close-menu-icon"/>
            </div>
            <a href="#" class="mobile-logo-link">
                <img src="/img/logo.svg" alt="burger" class="mobile-logo-icon"/>
            </a>
            <div class="mobile-login-link">
                Войти
            </div>
        </div>
        
        <div class="mobile-navigation-menu">
            <!-- Главное меню -->
            <div class="menu" id="menu-main">
                <button onclick="openMenu('menu-categories')">Каталог услуг <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Полезное <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <a href="#" class="mobile-menu-nav-link">Помощь <img src="/img/icons/mobile-menu-icons/help-icon.svg" alt="menu-icon" class="menu-icon"/></a>
                <a href="#" class="mobile-menu-nav-link">Начать зарабатывать <img src="/img/icons/mobile-menu-icons/money-icon.svg" alt="menu-icon" class="menu-icon"/></a>
                <a href="#" class="mobile-menu-nav-link">Switch to English <img src="/img/icons/mobile-menu-icons/world-icon.svg" alt="menu-icon" class="menu-icon"/></a>
                <button style="background-color: #007bff; color: white; font-weight: bold;" class="mobile-menu-register-button">Регистрация</button>
                <div class="change-login-option">
                    <p>Уже зарегистрированы? <a class='go-to-login-link'>Войти</a></p>
                </div>
            </div>
            
            <!-- Категории -->
            <div class="menu hidden" id="menu-categories">
                <div class="header"><img src="/img/icons/mobile-menu-icons/back-icon.svg" alt="menu-icon" class="menu-icon back" onclick="openMenu('menu-main')"/><h3>Категории</h3></div>
                <button onclick="openMenu('menu-design')">Дизайн <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Разработка и IT <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Тексты и переводы <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>SEO и трафик <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Соцсети и маркетинг <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Аудио, видео, съёмка <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Бизнес и жизнь <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
            </div>
            
            <!-- Подкатегория: Дизайн -->
            <div class="menu hidden" id="menu-design">
                <div class="header"><img src="/img/icons/mobile-menu-icons/back-icon.svg" alt="menu-icon" class="menu-icon back" onclick="openMenu('menu-main')"/><h3>Дизайн</h3></div>
                <button onclick="openMenu('menu-branding')">Логотипы и брендинг <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Презентации и инфографика <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Арт и иллюстрации <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Веб и мобильный дизайн <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Интерьер и экстерьер <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Обработка и редактирование <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Полиграфия <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Промышленный дизайн <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Наружная реклама <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>ИИ-генерация изображений <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
            </div>
            
            <!-- Подкатегория: Логотипы и брендинг -->
            <div class="menu hidden" id="menu-branding">
                <div class="header"><img src="/img/icons/mobile-menu-icons/back-icon.svg" alt="menu-icon" class="menu-icon back" onclick="openMenu('menu-main')"/><h3>Логотипы и брендинг</h3></div>
                <button>Логотипы <img src="/img/icons/mobile-menu-icons/fire-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <a href="#" class="mobile-menu-nav-link">Фирменный стиль</a>
                <a href="#" class="mobile-menu-nav-link">Визитки</a>
                <a href="#" class="mobile-menu-nav-link">Брендирование и сувенирка</a>
            </div>
        </div>
        
        <form class="mobile-search-block">
            <h3>Покупайте фриланс-услуги в один клик</h3>
            <div class="mobile-search-input-container">
                <img src="/img/icons/search-icon.svg" alt="mobile-search-icon" class="mobile-search-icon"/>
                <input type="text" placeholder="Создать сайт на wix" class="mobile-search-input"/>
            </div>
            <input type="submit" value="Найти" class="search-input-submit"/>
        </form>
    </header>
    <div class="garlands-container">
        <div class="garland-container">
            <img src="/img/garlands.svg" alt="garlands" class="garlands-img"/>
        </div>
        <img src="/img/garland-switch.svg" alt="garland-switch" class="garland-switch"/>
    </div> 
EOT;

$userHeader=<<<EOT
    <div class="garlands-container">
        <div class="garland-container">
            <img src="/img/garlands.svg" alt="garlands" class="garlands-img"/>
        </div>
        <img src="/img/garland-switch.svg" alt="garland-switch" class="garland-switch"/>
    </div> 
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/base.css?v=<?= time(); ?>"/>
    <header class="computer-header">
        <div class="nav-part1-container">
            <div class="nav-part1">
                <div class="logo-and-search-block">
                    <a href="#" class="logo-container">
                        <img src="/img/logo.svg" alt="logo" class="header-logo"/>
                    </a>
                    <div class="search-container">
                        <hr class="search-button-stick"><input type="text" placeholder="  Найти услуги" class="search-service-input" name="search-service">
                        <div class="search-button-container hidden">
                            <img src="/img/icons/bold-x-close.svg" alt="x-close" class="clear-search-icon"/>
                            <input type="button" value="Найти" class="search-content-button"/>
                        </div>
                    </div>
                </div>
                
                <div class="user-header">
                    <div class="user-header-nav">
                        <a href="#">Услуги</a>
                        <a href="#">Заказы</a>
                        <a href="#">Биржа</a>
                        <a href="#">Портфолио</a>
                        <a href="#" class="chat active">Чат <div class="unread-messages">77</div></a>
                    </div>
                    
                    <div class="balance">
                        <div class="current-balance">900 ₽</div>
                        <div class="vertical-line"></div>
                        <div class="balance-text">Баланс</div>
                    </div>
                    <img src="/img/icons/user-header-burger.svg" alt="burder" class="user-header-burger"/>
                    <div class="user-header-avatar active">
                        <div class="img-container">
                            <img src="/img/user-avatars/user-avatar8.png" alt="user-avatar" class="user-avatar"/>
                        </div>
                        <div class="user-avatar-status">
                        </div>
                    </div>
                    
                    <div class="user-header-menu hidden">
                        <div class="part1">
                            <div class="premium-container active"><img src="/img/icons/grey-diamond.svg" alt="grey-diamond" class="grey-diamond"/><img src="/img/icons/blue-diamond.svg" alt="blue-diamond" class="blue-diamond"/>Premium</div>
                            <div class="user-name">Андрей Иванов</div>
                            <div class="user-username">andreycode <img src="/img/icons/copy.svg" alt="copy-icon" class="copy-icon"/></div>
                            <div class="receive-orders active">
                                <div class="receive-orders-text"><span class="not-working receive-order-text active">Не работаю</span><span class="receiving-orders receive-order-text">Принимаю заказы</span> 
                                <img src="/img/icons/round-question-icon.svg" alt="round-question" class="round-question-icon"/>
                                </div>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>
                        <div class="part2">
                            <div class="user-type-block">
                                <div class="orderer-user-type user-type">
                                    Я покупатель
                                </div>
                                <div class="freelancer-user-type user-type selected">
                                    Я продавец
                                </div>
                            </div>
                            <div class="user-header-menu-nav">
                                <a href="#"><img src="/img/icons/user-header-menu/user-settings.svg" alt="profile-icon"/>Профиль</a>
                                <a href="#"><img src="/img/icons/user-header-menu/settings.svg" alt="profile-icon"/>Настройки</a>
                                <a href="#"><img src="/img/icons/user-header-menu/help.svg" alt="profile-icon"/>Помощь</a>
                                <a href="#"><img src="/img/icons/user-header-menu/quit.svg" alt="profile-icon"/>Выйти</a>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        <div class="nav-part2-container">
            <div class="nav-part2">
                <ul>
                    <li>
                        <a href="#">Дизайн & Графика</a>
                        <div class="mega-menu">
                            <div class="mega-menu-column">
                              <h4>Логотип и брендинг</h4>
                              <a href="#">Логотипы <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">Фирменный стиль</a>
                              <a href="#">Визитки</a>
                              <a href="#">Брендирование и сувенирка</a>
                              
                              <h4>Презентации и инфографика</h4>
                              <a href="#">Презентации</a>
                              <a href="#">Инфографика</a>
                              <a href="#">Карта и схема</a>
                              
                              <h4>Арт и иллюстрации</h4>
                              <a href="#">Портрет, шарж, карикатура</a>
                              <a href="#">Иллюстрации и рисунки</a>
                              <a href="#">Дизайн игр</a>
                              <a href="#">Тату, принты</a>
                              <a href="#">Стикеры</a>
                              <a href="#">NFT арт</a>
                              <a href="#">Готовые шаблоны и рисунки</a>
                            </div>
                            
                            <div class="mega-menu-column with-border">
                              <h4>Веб и мобильный дизайн</h4>
                              <a href="#">Веб-дизайн <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">Мобильный дизайн</a>
                              <a href="#">Email-дизайн</a>
                              <a href="#">Баннеры и иконки <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">Юзабилити-аудит</a>
                              
                              <h4>Маркетплейсы и соцсети</h4>
                              <a href="#">Дизайн в соцсетях <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">Дизайн для маркетплейсов</a>
                              
                              <h4>Интерьер и экстерьер</h4>
                              <a href="#">Интерьер</a>
                              <a href="#">Дизайн домов и сооружений</a>
                              <a href="#">Ландшафтный дизайн</a>
                              <a href="#">Дизайн мебели</a>
                              
                              <h4>Обработка и редактирование</h4>
                              <a href="#">Отрисовка в векторе</a>
                              <a href="#">Фотомонтаж и обработка <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                              <a href="#">3D-графика <img src="/img/icons/fire.svg" alt="fire icon" class="fire-icon"/></a>
                            </div>
                            
                            <div class="mega-menu-column with-border">
                              <h4>Полиграфия</h4>
                              <a href="#">Брошюра и буклет</a>
                              <a href="#">Листовки и флаер</a>
                              <a href="#">Плакат и афиша</a>
                              <a href="#">Календарь и открытка</a>
                              <a href="#">Каталог, меню, книга</a>
                              <a href="#">Грамота и сертификат</a>
                              
                              <h4>Промышленный дизайн</h4>
                              <a href="#">Электроника и устройства</a>
                              <a href="#">Предметы и аксессуары</a>
                              <a href="#">Упаковка и этикетка</a>
                              
                              <h4>Наружная реклама</h4>
                              <a href="#">Билборды и стенды</a>
                              <a href="#">Витрины и вывески</a>
                            </div>
                        </div>
                    </li>
                    <li>
                    <a href="#">Разработка и IT</a>
                    </li>
                    <li>
                        <a href="#">Тексты и переводы</a>
                    </li>
                    <li>
                        <a href="#">SEO и трафик</a>
                    </li>
                    <li>
                        <a href="#">Аудио, видео, съемка</a>
                    </li>
                    <li>
                        <a href="#">Бизнес и жизнь</a>
                    </li>
                    <li>
                        <a href="#">Нейросети</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    

    <header class="phone-header">
        <div class="logo-burger-login-block">
            <div class="burger-container">
                <img src="/img/icons/burger.svg" alt="burger" class="burger-icon"/>
                <img src="/img/icons/mobile-menu-icons/close-menu-icon.svg" alt="close-menu" class="close-menu-icon"/>
            </div>
            <a href="#" class="mobile-logo-link">
                <img src="/img/logo.svg" alt="burger" class="mobile-logo-icon"/>
            </a>
            <div class="mobile-login-link">
                Войти
            </div>
        </div>
        
        <div class="mobile-navigation-menu">
            <!-- Главное меню -->
            <div class="menu" id="menu-main">
                <button onclick="openMenu('menu-categories')">Каталог услуг <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Полезное <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <a href="#" class="mobile-menu-nav-link">Помощь <img src="/img/icons/mobile-menu-icons/help-icon.svg" alt="menu-icon" class="menu-icon"/></a>
                <a href="#" class="mobile-menu-nav-link">Начать зарабатывать <img src="/img/icons/mobile-menu-icons/money-icon.svg" alt="menu-icon" class="menu-icon"/></a>
                <a href="#" class="mobile-menu-nav-link">Switch to English <img src="/img/icons/mobile-menu-icons/world-icon.svg" alt="menu-icon" class="menu-icon"/></a>
                <button style="background-color: #007bff; color: white; font-weight: bold;" class="mobile-menu-register-button">Регистрация</button>
                <div class="change-login-option">
                    <p>Уже зарегистрированы? <a class='go-to-login-link'>Войти</a></p>
                </div>
            </div>
            
            <!-- Категории -->
            <div class="menu hidden" id="menu-categories">
                <div class="header"><img src="/img/icons/mobile-menu-icons/back-icon.svg" alt="menu-icon" class="menu-icon back" onclick="openMenu('menu-main')"/><h3>Категории</h3></div>
                <button onclick="openMenu('menu-design')">Дизайн <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Разработка и IT <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Тексты и переводы <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>SEO и трафик <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Соцсети и маркетинг <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Аудио, видео, съёмка <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Бизнес и жизнь <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
            </div>
            
            <!-- Подкатегория: Дизайн -->
            <div class="menu hidden" id="menu-design">
                <div class="header"><img src="/img/icons/mobile-menu-icons/back-icon.svg" alt="menu-icon" class="menu-icon back" onclick="openMenu('menu-main')"/><h3>Дизайн</h3></div>
                <button onclick="openMenu('menu-branding')">Логотипы и брендинг <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Презентации и инфографика <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Арт и иллюстрации <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Веб и мобильный дизайн <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Интерьер и экстерьер <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Обработка и редактирование <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Полиграфия <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Промышленный дизайн <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>Наружная реклама <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <button>ИИ-генерация изображений <img src="/img/icons/mobile-menu-icons/open-submenu-icon.svg" alt="menu-icon" class="menu-icon"/></button>
            </div>
            
            <!-- Подкатегория: Логотипы и брендинг -->
            <div class="menu hidden" id="menu-branding">
                <div class="header"><img src="/img/icons/mobile-menu-icons/back-icon.svg" alt="menu-icon" class="menu-icon back" onclick="openMenu('menu-main')"/><h3>Логотипы и брендинг</h3></div>
                <button>Логотипы <img src="/img/icons/mobile-menu-icons/fire-icon.svg" alt="menu-icon" class="menu-icon"/></button>
                <a href="#" class="mobile-menu-nav-link">Фирменный стиль</a>
                <a href="#" class="mobile-menu-nav-link">Визитки</a>
                <a href="#" class="mobile-menu-nav-link">Брендирование и сувенирка</a>
            </div>
        </div>
        
        <form class="mobile-search-block">
            <h3>Покупайте фриланс-услуги в один клик</h3>
            <div class="mobile-search-input-container">
                <img src="/img/icons/search-icon.svg" alt="mobile-search-icon" class="mobile-search-icon"/>
                <input type="text" placeholder="Создать сайт на wix" class="mobile-search-input"/>
            </div>
            <input type="submit" value="Найти" class="search-input-submit"/>
        </form>
    </header>
EOT;

$footer=<<<EOT
<footer>
        <div class="footer-container computer-version">
            <div class="footer-col1">
                <img src="/img/grey-logo.svg" alt="grey logo" class="footer-logo"/>
                <p>
                    Онлайн-сервис для сотрудничества заказчиков и специалистов. Заказчики найдут здесь исполнителя для разовых и постоянных задач, а фрилансеры — интересные проекты и достойный заработок.
                </p>
                
                <div class="social-sites-container">
                    <a href="#" target="_blank"><img src="/img/icons/twitter.svg" class="twitter-icon grey-icon" alt="twitter icon"/><img src="/img/icons/colorful-twitter.webp" class="twitter-icon colorful-icon" alt="twitter icon"/></a>
                    <a href="#" target="_blank"><img src="/img/icons/vk.svg" class="vk-icon grey-icon" alt="vk icon"/><img src="/img/icons/colorful-vk.webp" class="vk-icon colorful-icon" alt="vk icon"/></a>
                    <a href="#" target="_blank"><img src="/img/icons/dzen.svg" class="dzen-icon grey-icon" alt="dzen icon"/><img src="/img/icons/colorful-dzen.webp" class="dzen-icon colorful-icon" alt="dzen icon"/></a>
                    <a href="#" target="_blank"><img src="/img/icons/telegram.svg" class="telegram-icon grey-icon" alt="telegram icon"/><img src="/img/icons/colorful-telegram.webp" class="telegram-icon  colorful-icon" alt="telegram icon"/></a>
                    <a href="#" target="_blank"><img src="/img/icons/skolkovo.svg" class="skolkovo-icon grey-icon" alt="skolkovo icon"/><img src="/img/icons/colorful-skolkovo.webp" class="skolkovo-icon  colorful-icon" alt="skolkovo icon"/></a>
                </div>
            </div>
            
            <div class="footer-col2 footer-nav-col">
                <h3>Компания</h3>
                <a href="#" target="_blank">О проекте</a>
                <a href="#" target="_blank">Вакансии</a>
                <a href="#" target="_blank">Документация</a>
                <a href="#" target="_blank">Частые вопросы</a>
            </div>
            
            <div class="footer-col3 footer-nav-col">
                <h3>Заказчикам</h3>
                <a href="#" target="_blank">Как заказать услуги</a>
                <a href="#" target="_blank">Способы оплаты</a>
                <a href="#" target="_blank">Начать покупки</a>
                <a href="#" target="_blank">Кейсы</a>
            </div>
            
            
            <div class="footer-col4 footer-nav-col">
                <h3>Исполнителям</h3>
                <a href="#" target="_blank">Как зарабатывать на Fiwork</a>
                <a href="#" target="_blank">Мобильное приложение</a>
                <a href="#" target="_blank">Способы вывода</a>
            </div>
        </div>
        
        <div class="mobile-footer-container mobile">
            <div class="footer-accordion-nav footer-accordion-block">
                <div class="accordion">
                    <div class="accordion-item">
                      <button class="accordion-header">
                         Компания
                        <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                      </button>
                      <div class="accordion-body">
                            <a href="#" target="_blank">О проекте</a>
                            <a href="#" target="_blank">Вакансии</a>
                            <a href="#" target="_blank">Документация</a>
                            <a href="#" target="_blank">Частые вопросы</a>
                      </div>
                    </div>
                    
                    <div class="accordion-item">
                      <button class="accordion-header">
                         Заказчикам
                        <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                      </button>
                      <div class="accordion-body">
                            <a href="#" target="_blank">Как заказать услуги</a>
                            <a href="#" target="_blank">Способы оплаты</a>
                            <a href="#" target="_blank">Начать покупки</a>
                            <a href="#" target="_blank">Кейсы</a>
                      </div>
                    </div>
                    
                    <div class="accordion-item">
                      <button class="accordion-header">
                         Исполнителям
                        <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                      </button>
                      <div class="accordion-body">
                            <a href="#" target="_blank">Как зарабатывать на Fiwork</a>
                            <a href="#" target="_blank">Мобильное приложение</a>
                            <a href="#" target="_blank">Способы вывода</a>
                      </div>
                    </div>
                </div>
            </div>
            
            <div class="mobile-additional-apps-block">
                <div class="mobile-additional-apps-container">
                    <div class="mobile-additional-apps-links">
                        <a href="#"><img src="/img/fiwork-on-google-play.svg" class="fiwork-on-google-play" alt="fiwork-google-play"/></a>
                        <a href="#"><img src="/img/fiwork-on-appstore.svg" class="fiwork-on-appstore" alt="fiwork-on-appstore"/></a>
                    </div>
                    <div class="social-sites-enter-links">
                        <a href="#" target="_blank"><img src="/img/icons/vk.svg" class="vk-icon grey-icon" alt="vk icon"/><img src="/img/icons/colorful-vk.webp" class="vk-icon colorful-icon" alt="vk icon"/></a>
                        <a href="#" target="_blank"><img src="/img/icons/dzen.svg" class="dzen-icon grey-icon" alt="dzen icon"/><img src="/img/icons/colorful-dzen.webp" class="dzen-icon colorful-icon" alt="dzen icon"/></a>
                        <a href="#" target="_blank"><img src="/img/icons/telegram.svg" class="telegram-icon grey-icon" alt="telegram icon"/><img src="/img/icons/colorful-telegram.webp" class="telegram-icon  colorful-icon" alt="telegram icon"/></a>
                    </div>
                </div>
            </div> 
        </div>
    </footer>
    
EOT;

$modalWindows=<<<EOT
    <div class="cookies-policy-wrapper">
        <div class="cookies-policy-container">
            <img src="/img/icons/cookies.svg" alt="cookie" class="cookie-icon"/>
            <p>
                Использую сайт fiwork, вы соглашаетесь с тем, что мы используем <a href="#">файлы cookie.</a> 
            </p>
            <input type="button" class="cookie-ok-button" value="Ok"/>
        </div>
    </div>

<div class="fiwork-register-modal-container hidden">
    <div class="fiwork-register-modal">
        <img src="/img/icons/x-close.svg" class="x-close-icon close-fiwork-register-modal" alt="x-close-icon"/> 
        <div class="fiwork-register-modal-header">
            <img src="/img/icons/featured-icon.svg" alt="featured icon" class="featured-icon"/>
            <h3>Создать учетную запись</h3>
            <p>это займет не более 5 минут</p>
        </div>
        <div class="fiwork-register-modal-usertype">
            <div class="role-switch">
                <input type="radio" name="user-role" id="seller" value="seller" checked>
                <label for="seller">Я продавец</label>
            
                <input type="radio" name="user-role" id="buyer" value="buyer">
                <label for="buyer">Я покупатель</label>
            </div>
        </div>
        <form class="fiwork-register-modal-form">
            <input type="text" placeholder="Введите email или телефон" name="new-user-login" class="new-user-login"/> 
            <input type="button" value="Далее" class="register-modal-form-next-button"/> 
            <fieldset>
                <legend>Или</legend>
                <a href="#">
                    <img src="/img/icons/vk-blue.svg" alt="vk-icon" class="vk-blue-icon"/>
                    <span>Продолжить с Вконтакте</span>
                </a>
                
                <a href="#">
                    <img src="/img/icons/telegram-blue.svg" alt="vk-icon" class="telegram-blue-icon"/>
                    <span>Продолжить с Telegram</span>
                </a>
                
                <a href="#">
                    <img src="/img/icons/yandex-red-icon.svg" alt="yandex-icon" class="yandex-red-icon"/>
                    <span>Продолжить с Яндекс</span>
                </a>
            </fieldset>
        </form>
    
        <div class="change-login-option">
            <p>Уже зарегистрированы? <a class='go-to-login-link'>Войти</a></p>
        </div>
    </div>
</div>

<div class="fiwork-login-modal-container hidden">
    <div class="fiwork-login-modal">
        <img src="/img/icons/x-close.svg" alt="x-close-icon" class="x-close-icon close-fiwork-login-modal"/>
        <div class="fiwork-login-modal-header">
            <img src="/img/icons/login-icon.svg" alt="login-icon" class="login-icon"/>
            <h3>Войдите в свою учетную запись</h3>
            <p>Пожалуйста, введите свои данные.</p>
        </div> 
        
        
        <form class="fiwork-login-modal-form">
            <label for="user-login">Электронная почта или телефон</label>
            <input id="user-login" type="text" placeholder="user@example.com" name="new-user-login" class="new-user-login"/> 
            <div class="remember-me-container">
                <div class="remember-me-checkbox">
                    <input type="checkbox" name="remember-me" class="remember-me-checkbox-input"/>
                    <span>Запомнить меня</span>
                </div>
                
                <a href="#" class="forgot-password-link">
                    Забыли пароль?
                </a>
            </div> 
            <input type="button" value="Войти" class="login-modal-form-next-button"/>
            <div class="social-sites-enter-links">
                <a href="#">
                    <img src="/img/icons/vk-grey.svg" alt="vk-grey" class="vk-grey-icon grey-icon"/>
                    <img src="/img/icons/vk-square-blue.svg" alt="vk-square-blue" class="vk-square-blue-icon colorful-icon"/>
                </a>
                <a href="#">
                    <img src="/img/icons/yandex-grey.svg" alt="yandex-grey" class="yandex-grey-icon grey-icon"/>
                    <img src="/img/icons/yandex-square-red.svg" alt="yandex-red-icon" class="yandex-square-red-icon colorful-icon"/>
                </a>
                <a href="#">
                    <img src="/img/icons/telegram-grey.svg" alt="telegram-grey" class="telegram-grey-icon grey-icon"/>
                    <img src="/img/icons/telegram-square-blue.svg" alt="telegram-square-blue" class="telegram-square-blue-icon colorful-icon"/>
                </a>
            </div>
            <div class="change-login-option">
                <p>Нет аккаунта? <a class='go-to-register-link'>Зарегистрироваться</a></p>
            </div>
        </form>
    </div>
</div>


<div class="check-register-modal-container hidden">
    <div class="check-register-modal">
        <img src="/img/icons/x-close.svg" alt="x-close-icon" class="x-close-icon close-check-register-modal"/>
        <div class="check-register-modal-header">
            <img src="/img/icons/sent-code-message.svg" alt="code-message-icon" class="code-message-icon"/>
            <h3>Мы отправили код</h3>
            <p>Отправили его на номер: <span class="bold-text">+7 963 257 7779</span></p>
        </div> 
        
        <form class="check-register-modal-form">
            <div class="code-container">
                <input type="text" maxlength="1" class="code-input" />
                <input type="text" maxlength="1" class="code-input" />
                <input type="text" maxlength="1" class="code-input" />
                <input type="text" maxlength="1" class="code-input" />
            </div>
            <p class="resend">
              Не пришел код? <a href="#" id="resendBtn" class="disabled">Отправить повторно</a>
              <span id="timer"></span>
            </p>
            
            <div class="control-buttons">
                <input type="button" value="Назад" class="back-to-register-form-button"/>
                <input type="button" value="Далее" class="continue-register-button"/>
            </div>
        </form>
    </div>
</div>


<div class="check-login-modal-container hidden">
    <div class="check-login-modal">
        <img src="/img/icons/x-close.svg" alt="x-close-icon" class="x-close-icon close-check-login-modal"/>
        <div class="check-login-modal-header">
            <img src="/img/icons/sent-code-message.svg" alt="code-message-icon" class="code-message-icon"/>
            <h3>Мы отправили код</h3>
            <p>Отправили на его почту:  <span class="bold-text">olivia@untitledui.com</span></p>
        </div> 
        
        <form class="check-login-modal-form">
            <div class="code-container">
                <input type="text" maxlength="1" class="code-input" />
                <input type="text" maxlength="1" class="code-input" />
                <input type="text" maxlength="1" class="code-input" />
                <input type="text" maxlength="1" class="code-input" />
            </div>
            
            <p class="resend">
              Не пришел код? <a href="#" id="resendBtn" class="disabled">Отправить повторно</a>
              <span id="timer"></span>
            </p>
            
            <div class="control-buttons">
                <input type="button" value="Назад" class="back-to-login-form-button"/>
                <input type="button" value="Далее" class="continue-login-button"/>
            </div>
        </form>
    </div>
</div>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>
EOT;
?>