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
    <link rel="stylesheet" href="/css/goals_users.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        
</head>
<body>
    <?=$userHeader;?>
   
    <div class="main-block">
        <div class="main-container">
            <div class="goals-users">
                <h1 class="page-header">👨‍💻 Пользователи в реальном времени</h1>
                <p class="page-description">Здесь каждый новый зарегистрированный пользователь — это не просто цифра, а подтверждение того, что наш труд приносит плоды.</p>
                
                <div class="progress-block">
                    <img src="/img/goals-users/salute.webp" alt="salute-img" class="salute-img"/>
                    <div class="progress-num">0</div>
                    <div class="progress-description">«Как чистый лист бумаги — всё впереди!» 📄</div>
                </div>
                
                <div class="progress-bar-block">
                    <div class="progress-container">
                      <div class="progress-bar">
                        <div class="progress-fill"></div>
                        <div class="progress-avatar"><img src="/img/goals-users/goals-users-avatar.webp" alt="goals-users-avatar" class="goals-users-avatar"></div>
                        <div class="progress-text"><span class="special-colored">1,000</span>&nbsp;/ 5,000</div>
                      </div>
                    </div>
                    <div class="goal-text">4,000 осталось до цели</div>
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
    $(".select-menu input[type='button']").on("click",function(){
       $(".select-menu input[type='button'").removeClass("selected");
       $(this).addClass("selected");
    });
    
    $(".give-feedback-modal-container .close-icon, .give-feedback-modal-container .cancel-button").on("click",function(){
        $(".give-feedback-modal-block").addClass("hidden"); 
    });
</script>
</html>
