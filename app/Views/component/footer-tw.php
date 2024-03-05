<?php

/**
 * Disini tempat footer tailwind
 * ---
 * Disini berisi kumpulan javascript maupun link js external
 */
?>
<div class="flex justify-center mt-[80px]">
    <footer class="mt-4 md:w-10/12 mx-auto relative">
        <!-- Qoute -->

        <div class="box-qoute">
            <div class="mb-3">
                <img src="<?= base_url('./image/logo-large.png') ?>" alt="">
            </div>
            <div class="text">
                `` Semakin banyak aku membaca. semakin banyak aku berpikir. semakin aku belajar. semakin sadar bahwa aku. tak mengetahui apapun ``.
            </div>
            <div class="text-sm mt-3">
                ~ Evergeen
            </div>
        </div>

        <!-- content footer -->
        <hr>
        <div class="my-12 flex pt-12 justify-between">
            <div class="md:w-5/12 flex justify-center">
                <div class="md:9/12 text-center">
                    <img src="<?= base_url('./image/logo-large.png') ?>" alt="">
                    <div class="text-center gray text-sm mt-3">
                        Evergreen adalah platform library berbasis web. kami memudahkan anda yang suka membaca. hadir untuk indonesia maju!
                    </div>
                    <div class="mt-4 justify-around flex items-center">
                        <div class="fw-bold">Social :</div>
                        <div>
                            <img src="<?= base_url('./image/icon/facebook.png') ?>" alt="">
                        </div>
                        <div>
                            <img src="<?= base_url('./image/icon/twitter.png') ?>" alt="">
                        </div>
                        <div>
                            <img src="<?= base_url('./image/icon/instagram.png') ?>" alt="">
                        </div>
                        <div>
                            <img src="<?= base_url('./image/icon/youtube.png') ?>" alt="">
                        </div>
                        <div>
                            <img src="<?= base_url('./image/icon/bi_github.png') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-auto md:ms-16">
                <p class="link-header">Navigate</p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Login</a>
                </p>
                <p>
                    <a href="">Register</a>
                </p>
                <p>
                    <a href="">Start Quick</a>
                </p>
            </div>
            <div class="w-auto">
                <p>Navigate</p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Home</a>
                </p>
            </div>
            <div class="w-auto">
                <p>Navigate</p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Home</a>
                </p>
            </div>
            <div class="w-auto">
                <p>Navigate</p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Home</a>
                </p>
                <p>
                    <a href="">Home</a>
                </p>
            </div>
        </div>
        <hr>
        <div class="text-center mt-4">
            <div class="text-sm gray">
                @copyright 2024 All rights reserved | develop by : Patriott07 ryunex15 jipyy rrismawati nazwaa
            </div>
        </div>
    </footer>
</div>


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