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
    <link rel="stylesheet" href="/css/category-page.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/category-accordion.css?v=<?= time(); ?>" />
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
            <div class="category-block">
                <h1 class="category-name-header">
                    Дизайн
                </h1>
                
                <div class="category-container">
                    <div class="category-container-subcategories">
                        <!-- Mobile filter toggle button -->
                        <button class="mobile-filter-toggle">
                            Фильтры и подкатегории
                            <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                        </button>
                        <div class="category-accordion mobile-filter-content">
                            <div class="category-accordion-item">
                              <button class="category-accordion-header active">
                                 Логотип и брендинг
                                <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                              </button>
                              <div class="category-accordion-body">
                                    <a href="#" target="_blank">Логотипы <span class="subcategory-service-num">574</span></a>
                                    <a href="#" target="_blank">Фирменный стиль <span class="subcategory-service-num">568</span></a>
                                    <a href="#" target="_blank">Визитки <span class="subcategory-service-num">1345</span></a>
                                    <a href="#" target="_blank">Брендирование и сувенирка <span class="subcategory-service-num">317</span></a>
                              </div>
                            </div>
                            
                            <div class="category-accordion-item">
                              <button class="category-accordion-header active">
                                 Презентации и инфографика
                                <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                              </button>
                              <div class="category-accordion-body">
                                    <a href="#" target="_blank">Презентации <span class="subcategory-service-num">356</span></a>
                                    <a href="#" target="_blank">Инфографика <span class="subcategory-service-num">415</span></a>
                                    <a href="#" target="_blank">Карта и схема <span class="subcategory-service-num">125</span></a>
                              </div>
                            </div>
                            
                            <div class="category-accordion-item">
                              <button class="category-accordion-header active">
                                 Арт и иллюстрации
                                <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                              </button>
                              <div class="category-accordion-body">
                                    <a href="#" target="_blank">Портрет, шарж и карикатура <span class="subcategory-service-num">356</span></a>
                                    <a href="#" target="_blank">Иллюстрации и рисунки <span class="subcategory-service-num">234</span></a>
                                    <a href="#" target="_blank">Дизайн игр <span class="subcategory-service-num">653</span></a>
                                    <a href="#" target="_blank">Тату, принты <span class="subcategory-service-num">345</span></a>
                                    <a href="#" target="_blank">Стикеры <span class="subcategory-service-num">654</span></a>
                                    <a href="#" target="_blank">NFT Art <span class="subcategory-service-num">123</span></a>
                                    <a href="#" target="_blank">Готовые шаблоны и рисунки <span class="subcategory-service-num">987</span></a>
                              </div>
                            </div>
                            
                            
                            
                            <div class="category-accordion-item">
                              <button class="category-accordion-header active">
                                 Веб и мобильный дизайн
                                <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                              </button>
                              <div class="category-accordion-body">
                                    <a href="#" target="_blank">Веб-дизайн <span class="subcategory-service-num">356</span></a>
                                    <a href="#" target="_blank">Мобильный дизайн <span class="subcategory-service-num">234</span></a>
                                    <a href="#" target="_blank">Email дизайн  <span class="subcategory-service-num">653</span></a>
                                    <a href="#" target="_blank">Баннеры и иконки<span class="subcategory-service-num">345</span></a>
                                    <a href="#" target="_blank">Юзабили-аудит <span class="subcategory-service-num">654</span></a>
                              </div>
                            </div>
                            
                            <div class="category-accordion-item">
                              <button class="category-accordion-header active">
                                 Маркетинг и соц-сети
                                <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                              </button>
                              <div class="category-accordion-body">
                                    <a href="#" target="_blank">Дизайн в соц-сетях <span class="subcategory-service-num">356</span></a>
                                    <a href="#" target="_blank">Дизайн для маркетплейсов <span class="subcategory-service-num">234</span></a>
                              </div>
                            </div>
                            
                            
                            <div class="category-accordion-item">
                              <button class="category-accordion-header active">
                                 Интерьер и экстерьер
                                <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                              </button>
                              <div class="category-accordion-body">
                                    <a href="#" target="_blank">Интерьер <span class="subcategory-service-num">356</span></a>
                                    <a href="#" target="_blank">Дизайн домов и сооружений <span class="subcategory-service-num">234</span></a>
                                    <a href="#" target="_blank">Ландшафтный дизайн <span class="subcategory-service-num">356</span></a>
                                    <a href="#" target="_blank">Дизайн мебели <span class="subcategory-service-num">234</span></a>
                              </div>
                            </div>
                            
                            
                            <div class="category-accordion-item">
                              <button class="category-accordion-header active">
                                 Обработка и редактирование
                                <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                              </button>
                              <div class="category-accordion-body">
                                    <a href="#" target="_blank">Отрисовка в векторе <span class="subcategory-service-num">356</span></a>
                                    <a href="#" target="_blank">Фотомонтаж и обработка <span class="subcategory-service-num">234</span></a>
                                    <a href="#" target="_blank">3D-графика <span class="subcategory-service-num">356</span></a>
                              </div>
                            </div>
                            
                            <div class="category-accordion-item">
                              <button class="category-accordion-header active">
                                Полиграфикя
                                <span class="plus"><img src="/img/icons/open.svg" class="open-icon" alt="open-icon"></span>
                              </button>
                              <div class="category-accordion-body">
                                    <a href="#" target="_blank">Брошюра и буклет <span class="subcategory-service-num">356</span></a>
                                    <a href="#" target="_blank">Листовки и флаер <span class="subcategory-service-num">234</span></a>
                                    <a href="#" target="_blank">Календарь и открытка<span class="subcategory-service-num">234</span></a>
                                    <a href="#" target="_blank">Каталог, меню, книга <span class="subcategory-service-num">154</span></a>
                                    <a href="#" target="_blank">Грамота и сертификат <span class="subcategory-service-num">575</span></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="category-container-blocks">
                        <a href="#" class="category-elem">
                            <img src="/img/ads/ad1.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Логотипы</p>
                        </a>
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/app-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Фирменный стиль</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/mobile-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Визитки</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/taplink.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Брендирование и сувенирка</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ux-ui-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Презентации</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ad1.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Инфографика</p>
                        </a>
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/app-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Карта и схема</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/mobile-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Портрет, шарж, карикатура</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/taplink.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Иллюстрации и рисунки</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ux-ui-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Дизайн игр</p>
                        </a>
                        
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ad1.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Тату, принты</p>
                        </a>
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/app-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Стикеры</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/mobile-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>NFT АРТЫ</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/taplink.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Готовые шаблоны и рисунки</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ux-ui-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Веб-дизайн</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ad1.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Мобильный дизайн</p>
                        </a>
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/app-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Email-дизайн</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/mobile-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Баннеры и иконки</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/taplink.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Юзабилити-аудит</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ux-ui-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Дизайн в соцсетях</p>
                        </a>
                        
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ad1.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Интерьер</p>
                        </a>
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/app-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Дизайн домов и сооружений</p>
                        </a>
                        
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ad1.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Дизайн домов и сооружений</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/mobile-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Ландшафтный дизайн</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/taplink.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Дизайн мебели</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ux-ui-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Отрисовка в векторе</p>
                        </a>
                        
                        
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ux-ui-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Фотомонтаж и обработка</p>
                        </a>
                        
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ad1.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>3D-графика</p>
                        </a>
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/app-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Брошюра и буклет</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/mobile-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Листовки и флаер</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/taplink.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Плакат и афиша</p>
                        </a>
                        
                        <a href="#"  class="category-elem">
                            <img src="/img/ads/ux-ui-design.webp" alt="category-banner" class="category-banner-img"/>
                            <div class="category-banner-black-shadow"></div>
                            <p>Календарь и открытки</p>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?=$footer;?>
    <?=$modalWindows;?>

</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>
<script src="/js/category-accordion.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.mobile-filter-toggle');
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            const content = this.nextElementSibling;
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
        });
    }
});
</script>
</html>