<?php

/**
 * Disini tempat footer tailwind
 * ---
 * Disini berisi kumpulan javascript maupun link js external
 */
?>


<script>
    var swiper = new Swiper(".swiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        enabled: true,
        paused: false,
        // centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var swiperGallery = new Swiper(".swiper-2", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

    const swiper1El = document.getElementById('swiper1');
    swiper1El.addEventListener('mouseover', () => {
        swiper.enabled = false;
    })

    swiper1El.addEventListener('mouseout', () => {
        swiper.enabled = true;
    })
</script>


<!-- Tempat menyimpan script js pribadi -->
<script src="<?= base_url('./js/script.js') ?>"></script>

</body>

</html>