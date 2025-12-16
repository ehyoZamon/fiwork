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
    <link rel="stylesheet" href="/css/register-page.css?v=<?= time(); ?>" />
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
                <form method="POST" class="registration-block">
                    <h2>Регистрация</h2> 
                    <div class="role-switch" style="margin-top: 20px;">
                        <input type="radio" name="user-role" id="seller" value="seller" checked="">
                        <label for="seller">Я продавец</label>
                    
                        <input type="radio" name="user-role" id="buyer" value="buyer">
                        <label for="buyer">Я покупатель</label>
                    </div>
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
                            <span class="input-error-text">Это обязательное поле</span>
                        </div>
                        
                        <div class="input-container password-input-container">
                            <input type="password" placeholder="Пароль" id="password-input" minlength="8" maxlength="30" class="auth-password-input" name="password-input"/> 
                            
                            <span class="input-error-text">Это обязательное поле</span>
                            <div class="password-eye-container toggle-password hidden" onclick="togglePassword()">
                                <img src="/img/icons/password-visible.svg" class="password-visible-icon" alt="password-visible"/>
                                <img src="/img/icons/password-hidden.svg" class="password-hidden-icon" alt="password-invisible"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-description">
                        Не менее 8 символов, включая цифры, заглавные и 
                        строчные буквы, специальные символы
                    </div>
                    
                    <div class="input-containers-wrapper">
                        <div class="input-container username-input-container">
                            <input 
                                type="text" 
                                placeholder="Имя пользователя" 
                                class="auth-username-input" 
                                name="username-input"
                                maxlength="40"
                                minlength="3"
                            />
                            <span class="input-error-text">Это обязательное поле</span>
                        </div>
                    </div>
                    
                    <div class="checkbox-container personal-data-agreement-container">
                        <input type="checkbox" id="personal-data-agreement" required>
                        <label for="personal-data-agreement">
                            Я даю <font style="color: #367fee;">согласие</font> на обработку персональных данных
                        </label>
                    </div>
                    
                    <div class="checkbox-container">
                        <input type="checkbox" id="newsletter-agreement" required>
                        <label for="newsletter-agreement">
                            Я даю <font style="color: #367fee;">согласие</font> на обработку персональных данных
                        </label>
                    </div>
                    
                    <input type="submit" value="Продолжить" class="submit-form-button"/>
                    
                    <div class="form-message-block">
                        <div class="form-message success hidden">
                            Вы успешно зарегистрировались
                        </div>
                    </div>
                    
                    <div class="input-description">
                        Продолжая вы принимаете условия <a href="#">договора оферты</a>
                    </div>
                    
                    
                    <div class="alternative-container">
                        <div class="horizontal-line"></div>
                        <span>или</span>
                        <div class="horizontal-line"></div>
                    </div>
                    
                    <div class="login-by-social-sites-container">
                        <a href="#">
                            <img src="/img/login-page/login-telegram.svg" alt="login-telegram" class="login-telegram"/>
                        </a>
                        
                        <a href="#">
                            <img src="/img/login-page/login-google.svg" alt="login-google" class="login-google"/>
                        </a>
                    
                        <a href="#">
                            <img src="/img/login-page/login-apple.svg" style="width: 24px;" alt="login-apple" class="login-apple"/>
                        </a>
                        
                        <a href="#">
                            <img src="/img/login-page/login-yandex.svg" alt="login-yandex" class="login-yandex"/>
                        </a>
                        
                        <a href="#">
                            <img src="/img/login-page/login-qr.svg" alt="login-qr" class="login-qr"/>
                        </a>
                    </div>
                    
                    <div class="alternative-auth-container">
                        Уже есть аккаунт?&nbsp;<a href="#">Войти</a>
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
    
    $(".registration-block").on("submit", function (e) {
        let email = $("input[name='email-input']").val().trim();
        let password = $("input[name='password-input']").val().trim();
        let username= $("input[name='username-input'").val().trim();
        if (email.length<8) {
            e.preventDefault();
            $(".email-input-container").addClass("error");
        } else {
            $(".email-input-container").removeClass("error");
        }
        
        if(password.length<8){
            e.preventDefault();
            $(".password-input-container").addClass("error");
        }else{
            $(".password-input-container").removeClass("error");
        } 
        
        if(username.length<3){
            e.preventDefault();
            $(".username-input-container").addClass("error");
        }else{ 
            $(".username-input-container").removeClass("error");
        }
    });
    
    $(".password-input-container input, .email-input-container input").on("input change",function(){
        $(this).closest(".input-container").removeClass("error");
        if($(this).val().length>8){
            $(this).closest(".input-container").addClass("filled");
        }else{ 
            $(this).closest(".input-container").removeClass("filled");
        }
    });
    
    $(".username-input-container input").on("input change",function() {
        $(this).closest(".input-container").removeClass("error");
        if($(this).val().length>3){
            $(this).closest(".input-container").addClass("filled");
        }else{ 
            $(this).closest(".input-container").removeClass("filled");
        }
    }); 

    
</script>
</html>
