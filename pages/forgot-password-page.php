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
    <link rel="stylesheet" href="/css/forgot-password-page.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/aside-accordion.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="/css/mobile-navigation-menu.css?v=<?= time(); ?>" />
    
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
            <div class="login-container">  
                <form method="POST" class="forgot-block">
                    <h2>Забыли пароль?</h2> 
                    
                    <div class="input-containers-wrapper">
                        <div class="input-container email-input-container">
                            <input 
                                type="email" 
                                placeholder="Email" 
                                class="auth-email-input" 
                                name="email-input"
                                maxlength="30"
                                minlength="8"
                            />
                        </div>
                        
                    </div>
                    
                    <input type="submit" value="Восстановить пароль" class="submit-form-button"/>
                    
                    <div class="form-message-block">
                        <div class="form-message email-not-found error hidden">
                            Email не найден
                        </div>
                    </div>
                    
                    <div class="alternative-auth-container" style="margin-top: 20px;">
                        <a href="#">Я вспомнил пароль</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    <?=$footer;?>
    <?=$modalWindows;?>

</body>
<script src="/js/jQuery/jquery-3.5.1.min.js"></script>
<script src="/js/swiper.js"></script>
<script src="/js/index.js?v=<?= time(); ?>"></script>
<script src="/js/mobile-navigation-menu.js?v=<?= time(); ?>"></script>    
<link rel="stylesheet" href="/css/swiper.css" />
<script>
     function togglePassword() {
        let input = document.getElementById("password-input");
        if (input.type === "password") {
            input.type = "text";
            $(".toggle-password").removeClass("hidden");
        } else {
            input.type = "password";
            $(".toggle-password").addClass("hidden");
        }
    }
    
    $(".forgot-block").on("submit", function (e) {
        let email = $("input[name='email-input']").val().trim();
        e.preventDefault();
        if (email.length<8) {
            $(".email-input-container").addClass("error");
        } else {
            $(".email-input-container").removeClass("error");
        }
        
        /*Временно*/
        $(".email-input-container").addClass("error").removeClass("filled");
        $(".email-not-found").removeClass("hidden");
        
         
    });
    
    $(".email-input-container input").on("input change",function(){
        $(this).closest(".input-container").removeClass("error");
        if($(this).val().length>8){
            $(this).closest(".input-container").addClass("filled");
            $(".email-not-found").addClass("hidden");
        }else{ 
            $(this).closest(".input-container").removeClass("filled");
        }
    });
</script>
</html>
