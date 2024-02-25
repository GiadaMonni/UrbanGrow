document.addEventListener("DOMContentLoaded", function() {
    const menuIcon = document.getElementById("menuIcon");
    const dropdown = document.querySelector(".dropdown");
  
    menuIcon.addEventListener("click", function() {
        menuIcon.classList.toggle("active");
    });
  });


var swiper = new Swiper(".swiper.mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    autoplay: {
        delay: 3000,
      },
  });

