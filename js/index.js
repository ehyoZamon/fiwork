window.onload=function(){
  const swiper = new Swiper('.similar-to-search-swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    autoHeight: false,
    loop: true,
    observer: true, // Watch for DOM changes
    observeParents: true, // Watch parent elements too
    navigation: {
      nextEl: '.btn-next',
      prevEl: '.btn-prev',
    },
    breakpoints: {
      600: {
          slidesPerView: 2,
      },
      830: {
        slidesPerView: 3,
      },
      1100: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 5,
      }
    },
  });
  
   const additionalServicesSwiper = new Swiper('.additional-services-swiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      autoHeight: false,
      observer: true,
      observeParents: true,
      navigation: {
        nextEl: '.next-carousel-button',
        prevEl: '.prev-carousel-button',
      },
      breakpoints: {
        400: { slidesPerView: 2,},
        830: { slidesPerView: 3 },
        1100: { slidesPerView: 4 },
        1400: { slidesPerView: 5 },
      },
      on: {
        slideChange: function () {
          const prevButton = document.querySelector('.prev-carousel-button');
          if (this.isBeginning) {
            prevButton.style.display = 'none';
          } else {
            prevButton.style.display = '';
          }
        },
        // Инициализируем скрытие кнопки при старте
        init: function () {
          const prevButton = document.querySelector('.prev-carousel-button');
          if (this.isBeginning) {
            prevButton.style.display = 'none';
          }
        }
      }
    });
    
    /*$(".swiper-hidden").removeClass("swiper-hidden");*/

    $(".registration-and-login-block .register-button, .mobile-menu-register-button").on("click",function(){
       $(".fiwork-register-modal-container").removeClass("hidden"); 
    });

    $(".close-fiwork-register-modal").on("click",function(){
        $(".fiwork-register-modal-container").addClass("hidden");
    });
    
    $(".registration-and-login-block .login-button").on("click",function(){
       $(".fiwork-login-modal-container").removeClass("hidden"); 
    });

    $(".close-fiwork-login-modal").on("click",function(){
        $(".fiwork-login-modal-container").addClass("hidden");
    });
    
    $(".close-check-register-modal").on("click",function(){
        $(".check-register-modal-container").addClass("hidden"); 
    });
    
    $(".close-check-login-modal").on("click",function(){
       $(".check-login-modal-container").addClass("hidden"); 
    });
    
    $(".cookie-ok-button").on("click", function() {
        $(".cookies-policy-container").fadeOut({duration: 1000});
    });
    
    $(".user-header-menu .orderer-user-type").on("click",function(){
        $(".user-header-menu .user-type").removeClass("selected");
        $(this).addClass("selected");
        $(".user-header-menu .receive-orders").removeClass("active");
    });
    
    $(".user-header-menu .freelancer-user-type").on("click",function(){
        $(".user-header-menu .user-type").removeClass("selected");
        $(this).addClass("selected");
        $(".user-header-menu .receive-orders").addClass("active");
    });
    
    $(".go-to-register-link").on("click",function(){
        $(".fiwork-register-modal-container").removeClass("hidden");
        $(".fiwork-login-modal-container").addClass("hidden");
    });
    
    $(".go-to-login-link").on("click",function(){
        $(".fiwork-register-modal-container").addClass("hidden");
        $(".fiwork-login-modal-container").addClass("hidden");
    });
    
    $(".mobile-login-link").on("click",function(){
        $(".fiwork-login-modal-container").removeClass("hidden"); 
    });
    
    $(".phone-header .burger-icon").on("click",function(){
        $(".phone-header").addClass("menu-activated"); 
        openMenu('menu-main'); 
    });
    
    $(".phone-header .close-menu-icon").on("click",function(){
        $(".phone-header").removeClass("menu-activated"); 
    });
    
    $(".user-header-avatar, .user-header-burger").on("click",function(e){
        e.stopPropagation();
        $(".user-header-menu").toggleClass("hidden");
    });
    
    $("body").on("click",function(){
        $(".user-header-menu").addClass("hidden");
    });
    
    $(".user-header-menu").on("click",function(e){
        e.stopPropagation();
    });
    
    $(".user-header-menu .switch input").on("change", function() {
        $(".user-header-menu .receive-orders-text .receive-order-text").removeClass("active");
        
        if ($(this).is(":checked")) {
            $(".user-header-menu .receive-orders-text .receiving-orders").addClass("active"); 
        } else {
            $(".user-header-menu .receive-orders-text .not-working").addClass("active");
        }
    });
    
    $(".search-service-input").on("input", function () {
        if ($(this).val().trim().length > 0) {
            $(".search-button-container").removeClass("hidden");
        } else {
            $(".search-button-container").addClass("hidden");
        }
    });
    
    $(".clear-search-icon").on("click",function(){
        $(".search-button-container").addClass("hidden");
        $(".search-service-input").val('');  
    }); 

    
    /*Check-register-modal logic*/
    const inputs = document.querySelectorAll('.check-register-modal-container .code-input');

    inputs.forEach((input, index) => {
      input.addEventListener('input', () => {
        if (input.value.length === 1 && index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
      });

      input.addEventListener('keydown', (e) => {
        if (e.key === "Backspace" && input.value === '' && index > 0) {
          inputs[index - 1].focus();
        }
      });
    });
    
    let timerDuration = 120; // кол. секунд
    let timerInterval;
    let checkRegisterTimerGoing=0;
    
    function startTimer() {
        if(checkRegisterTimerGoing!=0){
            return 0;
        }
        checkRegisterTimerGoing=1;
        let timeLeft = timerDuration;
        $(".check-register-modal-container #resendBtn").addClass("disabled");
        updateTimer(timeLeft);

        timerInterval = setInterval(function() {
            timeLeft--;
            updateTimer(timeLeft);

            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                checkRegisterTimerGoing=0;
                $(".check-register-modal-container #timer").text("");
                $(".check-register-modal-container #resendBtn").removeClass("disabled");
            }
        }, 1000);
    }

    function updateTimer(sec) {
        let m = Math.floor(sec / 60);
        let s = sec % 60;
        $(".check-register-modal-container #timer").text(` (${m}:${s < 10 ? "0"+s : s})`);
    }

    // клик по кнопке "Отправить повторно"
    $(".check-register-modal-container #resendBtn").click(function(e) {
        e.preventDefault();
        if (!$(this).hasClass("disabled")) {
            console.log("Код отправлен повторно!");
            startTimer();
        }
    });

    $(".register-modal-form-next-button").on("click",function(){
        $(".fiwork-register-modal-container").addClass("hidden");
        $(".check-register-modal-container").removeClass("hidden");
        startTimer();
        
    });
    
    $(".back-to-register-form-button").on("click",function(){
        $(".check-register-modal-container").addClass("hidden");
        $(".fiwork-register-modal-container").removeClass("hidden");
    });
    
    /*End of check-register-modal logic*/
    
    
    /*Check-login-modal logic*/
    const checkLoginInputs = document.querySelectorAll('.check-login-modal-container .code-input');

    checkLoginInputs.forEach((input, index) => {
      input.addEventListener('input', () => {
        if (input.value.length === 1 && index < inputs.length - 1) {
          checkLoginInputs[index + 1].focus();
        }
      });

      input.addEventListener('keydown', (e) => {
        if (e.key === "Backspace" && input.value === '' && index > 0) {
          checkLoginInputs[index - 1].focus();
        }
      });
    });
    
    let loginTimerDuration = 120; // кол. секунд
    let loginTimerInterval;
    let checkLoginTimerGoing=0;
    
    function loginStartTimer() {
        if(checkLoginTimerGoing!=0){
            return 0;
        }
        
        checkLoginTimerGoing=1;
        let loginTimeLeft = timerDuration;
        $(".check-login-modal-container #resendBtn").addClass("disabled");
        loginUpdateTimer(loginTimeLeft);

        loginTimerInterval = setInterval(function() {
            loginTimeLeft--;
            loginUpdateTimer(loginTimeLeft);

            if (loginTimeLeft <= 0) {
                clearInterval(loginTimerInterval);
                checkLoginTimerGoing=0;
                $(".check-login-modal-container #timer").text("");
                $(".check-login-modal-container #resendBtn").removeClass("disabled");
            }
        }, 1000);
    }

    function loginUpdateTimer(sec) {
        let m = Math.floor(sec / 60);
        let s = sec % 60;
        $(".check-login-modal-container #timer").text(` (${m}:${s < 10 ? "0"+s : s})`);
    }

    // клик по кнопке "Отправить повторно"
    $(".check-login-modal-container #resendBtn").click(function(e) {
        e.preventDefault();
        if (!$(this).hasClass("disabled")) {
            console.log("Код отправлен повторно!");
            loginStartTimer();
        }
    });

    $(".login-modal-form-next-button").on("click",function(){
        $(".fiwork-login-modal-container").addClass("hidden");
        $(".check-login-modal-container").removeClass("hidden");
        loginStartTimer();
    });
    
    $(".back-to-login-form-button").on("click",function(){
        $(".check-login-modal-container").addClass("hidden");
        $(".fiwork-login-modal-container").removeClass("hidden");
    });
    
    /*End of check-register-modal logic*/
    
    /*accordion*/
      document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
          header.classList.toggle('active');
    
          const body = header.nextElementSibling;
          if (header.classList.contains('active')) {
            body.style.display = 'flex';
          } else {
            body.style.display = 'none';
          }
        });
      });
    /*end of accordion*/
}