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
    <link rel="stylesheet" href="/css/my-portfolio.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css"/>
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
            <div class="my-portfolio-block">
                <div class="my-portfolio-nav">
                    <a href="#"><img src="/img/icons/operations-page/home-icon.svg" class="home-icon" alt="home-icon"/></a>
                    <img src="/img/icons/operations-page/separator.svg" class="separator-icon" alt="separator-icon"/>
                    <span>Мое портфолио</span> 
                </div>
                
                <div class="my-portfolio-container">
                    <div class="aside-block">
                        <div class="add-new-work">
                            <img src="/img/my-portfolio-page/plus.svg" alt="plus-icon" class="plus-icon"/>
                            Добавить новую работу
                        </div>
                        
                        <div class="your-works-by-category-block">
                            <h3>Ваши работы по категориям</h3>
                            <div class="your-works-by-category-container">
                                <p>Дизайн <span>(0)</span></p>
                                <p>Разработка и IT <span>(0)</span></p>
                                <p>Тексты и переводы <span>(0)</span></p>
                                <p>SEO и трафик <span>(0)</span></p>
                                <p>Соцсети и реклама <span>(0)</span></p>
                                <p>Аудио, видео, съемка <span>(0)</span></p>
                                <p>Бизнес и жизнь <span>(0)</span></p>
                                <p>Мобильные приложения <span>(0)</span></p>
                                <p>Карты, кредиты, займы <span>(0)</span></p>
                                <p>Работа с криптовалютой <span>(0)</span></p>
                                <p>Маркетплейсы <span>(0)</span></p>
                                <p>Прочее <span>(0)</span></p>
                            </div>
                        </div>
                        
                        <div class="import-portfolio-block">
                            <h3>Импортировать портфолио</h3>
                            <p>Вы можете перенести портфолио из любой другой фриланс биржи или своего сайта в один клик</p>
                            <div class="import-from-other-platforms">
                                <div class="platform">
                                    <img src="/img/my-portfolio-page/kwork-icon.svg" alt="kwork-icon" class="platform-icon"/>
                                    <img src="/img/my-portfolio-page/pointer.svg" alt="pointer-icon" class="pointer-icon"/>
                                    <div class="import-platform-description">
                                        Перенести портфолио из Kwork
                                    </div>
                                </div>
                                <div class="platform">
                                    <img src="/img/my-portfolio-page/fl-icon.svg" style="left: 50px;" alt="fl-icon" class="platform-icon"/>
                                    <img src="/img/my-portfolio-page/pointer.svg" alt="pointer-icon" class="pointer-icon"/>
                                    <div class="import-platform-description">
                                        Перенести портфолио из Fl
                                    </div>
                                </div>
                                <div class="platform">
                                    <img src="/img/my-portfolio-page/fi-icon.svg" style="left: 100px;" alt="fi-icon" class="platform-icon"/>
                                    <img src="/img/my-portfolio-page/pointer.svg" alt="pointer-icon" class="pointer-icon"/>
                                    <div class="import-platform-description">
                                        Перенести портфолио из Fi
                                    </div>
                                </div>
                                <div class="platform">
                                    <img src="/img/my-portfolio-page/up-icon.svg" style="left: 140px;" alt="up-icon" class="platform-icon"/>
                                    <img src="/img/my-portfolio-page/pointer.svg" alt="pointer-icon" class="pointer-icon"/>
                                    <div class="import-platform-description">
                                        Перенести портфолио из UP
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-portfolio-content">
                        <div class="my-portfolio-header">
                            <h3>В этом разделе хранится все ваше портфолио, которое видят клиенты.</h3>
                            <div class="seen-container">
                                1926 просмотров за месяц
                                <img src="/img/my-portfolio-page/seen.svg" alt="seen-icon" class="seen-icon"/>
                            </div>
                        </div>
                        
                        <div class="my-portfolio-content-wrapper">
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>
                                    
                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner1.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner2.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon"  onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner3.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon"  onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner4.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner5.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner6.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner7.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner8.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner9.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner10.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner11.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner12.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner1.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner2.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-elem">
                                <div class="portfolio-details-container">
                                    <img src="/img/my-portfolio-page/delete.svg" alt="delete-icon" class="delete-icon" onclick="openDeleteModalBlock(this);"/>
                                    <img src="/img/my-portfolio-page/edit.svg" alt="edit-icon" class="edit-icon" onclick="editPortfolio(this);"/>
                                    <img src="/img/my-portfolio-page/attach.svg" alt="attach-icon" class="attach-icon"/>

                                    <div class="portfolio-name">Разработка мобильного приложения</div>
                                    <div class="portfolio-section">
                                        Мобильные приложения
                                        <div class="portfolio-seen">
                                            <img src="/img/my-portfolio-page/white-seen.svg" alt="white-seen-icon" class="white-seen-icon"/>
                                            <span class="count">
                                                9
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-banner-container">
                                    <img src="/img/my-portfolio-page/banner3.webp" alt="portfolio-banner" class="portfolio-banner"/>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="delete-portfolio-modal-block hidden">
    <div class="delete-portfolio-modal-container">
        <div class="delete-portfolio-modal-header">
            <h3>Удалить работу</h3>
            <img src="/img/icons/x-close.svg" alt="x-close-icon" class="x-close-icon"/>
        </div>
        <p>
            Удалить работу? Если работа привязана к кворку или заказу,
            она будет удалена и оттуда.
        </p>
        
        <div class="control-buttons">
            <input type="button" class="cancel-button" value="Отмена"/>
            <input type="button" class="delete-button" value="Удалить"/>
        </div>
    </div>
</div>


<div class="add-work-modal-block hidden">
    <form class="add-work-modal-container">
        <div class="add-work-modal-header">
            <h3 class="present-your-services">Презентуйте свои услуги</h3>
            <h3 class="edit-portfolio-h3">Редактировать работу в портфолио</h3>
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
            
            <div class="add-work-details-container">
                <div class="add-work-details-header">
                    <label>Рубрика</label>
                    <span class="required-to-do">Обязательно</span>
                </div>
                <div class="add-work-details-controls">
                    <select id="select-section" name="fiwork-section" required>
                        <option value="" disabled selected>Выберите рубрику</option>
                        <option value="design">Дизайн</option>
                        <option value="it-development">Разработка и ИТ</option>
                    </select>
                    
                    <select id="select-subcategory" name="fiwork-subcategory" class="hidden" required>
                        <option value="" disabled selected>Выберите рубрику</option>
                        <option value="logo-and-branding" class="design select-section-option" value="logo-and-branding">Логотип и брендинг</option>
                        <option value="website-dev" class="it-development select-section-option" value="website-dev">Создание сайта</option>
                        <option value="mobile-dev" class="it-development select-section-option" value="mobile-dev">Мобильные приложения</option>
                    </select>
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
                
                <div class="create-fiwork-step-stage create-fiwork-step-type select-subtype-container hidden create-fiwork-step-stage2 mobile-dev">
                    <div class="step-stage-name">
                        Платформа
                    </div>
                    <div class="step-stage-form">
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-mobile-dev-platform1" name="fiwork-subtype"/>
                            <label for="fiwork-mobile-dev-platform1">iOS</label>
                        </div>
                        
                        <div class="fiwork-type-container">
                            <input type="radio" required  id="fiwork-mobile-dev-platform2" name="fiwork-subtype"/>
                            <label for="fiwork-mobile-dev-platform2">Android</label>
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
            </div>
            
            <div class="attach-work-to-portfolio-container">
                <label>Привязать работу к моему кворку</label>
                <select id="select-work" name="work-to-attach" required>
                    <option value="" disabled selected>Не выбрано</option>
                    <option value="work1">Работа 1</option>
                    <option value="work2">Работа 2</option>
                </select>
            </div>
            
            <div class="load-works-container">
                <div class="load-works-header">
                    <h3>Загрузите изображения или видео</h3>
                    <span class="done">Минимум 1 изображение</span>
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
<script>
    var lastSelectedElemToDelete;
    
    $(".delete-portfolio-modal-block .x-close-icon, .delete-portfolio-modal-block .cancel-button").on("click",function(){
        $(".delete-portfolio-modal-block").addClass("hidden");
    });
    
    $(".delete-portfolio-modal-block .delete-button").on("click",function(){
       $(lastSelectedElemToDelete).remove(); 
       $(".delete-portfolio-modal-block").addClass("hidden");
    });
    
    $(".add-work-modal-block #select-section").on("change",function(){
       $(".add-work-modal-block .select-section-option").hide();
       $(".add-work-modal-block").find("."+$(this).val()).show();
       $(".add-work-modal-block #select-subcategory").removeClass("hidden");
       $(".add-work-modal-block .create-fiwork-step-stage2").addClass("hidden");
       $(".add-work-modal-block #select-subcategory").val("");
    });
    
    $(".add-work-modal-block #select-subcategory").on("change",function(){
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
    
    function openDeleteModalBlock(elem){
        lastSelectedElemToDelete=$(elem).parent().parent();
        $(".delete-portfolio-modal-block").removeClass("hidden");
    }
    
    function editPortfolio(elem){
        $(".create-fiwork-step-stage2").addClass("hidden");
        $(".add-work-modal-container").trigger("reset"); 
        const img=$(elem).parent().parent().find(".portfolio-banner-container").find("img").attr("src");
        lastSelectedPortfolio=$(elem).parent().parent();
        $(".add-work-modal-block .loaded-work").remove();
        previewWorkImage('',img);
        $(".add-work-modal-block").removeClass("hidden");
        $(".add-work-modal-block .add-work-modal-header").addClass("done");
        $(".add-work-modal-block .load-works-header span").addClass("done");
    }
    
    $(".add-work-modal-block .x-close-icon").on("click",function(){
       $(".add-work-modal-block").addClass("hidden"); 
    });
    
    $(".add-work-elem .edit-icon, .add-work-elem .resize-icon, .add-work-elem .delete-icon").on("click",function(e){
        e.stopPropagation();
    });
    
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
    
    function previewWorkImage(event,previewImg){
        
        if(event.target!=undefined){
            var input = event.target;
            var file = input.files[0];
        }
      
      var previewContainer = $('.preview-work-img-container.template').clone();
      $(previewContainer).removeClass("template");
      $(previewContainer).addClass("loaded-work")
      var preview=$(previewContainer).find(".upload-work-preview")[0];
      
      if(!previewImg){
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
      }else{
          preview.src=previewImg;
          preview.onload=function(){
              updateCover();
          };
          $(previewContainer).css("display","flex");
          $(".load-works-container .add-works-container").prepend(previewContainer);
      }
      checkForPreviewWork();
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
        checkForPreviewWork();
    }
    
    function hideParentElem(elem){
        if($(".fiwork-portfolio-form .add-works-container .add-work-elem-loaded-container").length>5){
            $(elem).parent().parent().remove();
        }else{
            $(elem).parent().addClass("hidden");
        }
    }
    
    var lastSelectPortfolio;
     $(".add-work-modal-container").on("submit",function(e){
        e.preventDefault();
        $(this).trigger("reset");
        $(".add-work-modal-block .preview-work-img-container.loaded-work").remove();
        $(".add-work-modal-block .loaded-cover-block").addClass("hidden");
        $(".load-cover-container .add-works-container .add-work-elem").removeClass("hidden");
        $(".add-work-modal-block").addClass("hidden");
        //some code
        if(cropper){
            const canvas = cropper.getCroppedCanvas({
                width: 400,
                height: 400
            });
            const result=canvas.toDataURL('image/png');
            $(lastSelectedPortfolio).find(".portfolio-banner-container img").attr("src",result); 
        }
    });
    
    /*Rich text editor*/
    function createQuill(fEditor,fToolbar,fCounter,fPlaceholder=""){
        const quill = new Quill(fEditor, {
          modules: {
            toolbar: fToolbar
          },
          theme: 'snow',
          placeholder: fPlaceholder
        });
    
        const counter = document.getElementById(fCounter);
        const maxChars = 1200;
        const minChars = 100;
    
        // Count plain text length
        quill.on('text-change', () => {
          const plainText = quill.getText().trim(); // Убираем лишние пробелы и переносы
          const charCount = plainText.length;
          counter.textContent = `${charCount} из ${maxChars} символов (минимум ${minChars})`;
    
          // Можно добавить визуальную подсветку или блокировку отправки, если нужно
        });
    }
    
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
    
    function checkForPreviewWork(){
        previewImgCount=$(".add-work-modal-block .loaded-work").length;
        if(previewImgCount>0){
            $(".add-work-modal-block .load-works-header span").addClass("done");
            $(".add-work-modal-block .add-work-modal-header").addClass("done");
        }else{
            $(".add-work-modal-block .load-works-header span").removeClass("done");
            $(".add-work-modal-block .add-work-modal-header").removeClass("done");
        }
    }
</script>
</html>
