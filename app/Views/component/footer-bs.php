<?php

/**
 * Disini tempat footer Bostrapp
 * ---
 * Disini berisi kumpulan javascript maupun link js external
 */
?>

<footer class="mt-4 container position-relative">
    <!-- Qoute -->

    <div class="box-qoute">
        <div class="mb-3">
            <img src="<?= base_url('./image/logo-large.png') ?>" alt="">
        </div>
        <div class="text">
            `` Semakin banyak aku membaca. semakin banyak aku berpikir. semakin aku belajar. semakin sadar bahwa aku. tak mengetahui apapun ``.
        </div>
        <div class="fs14 mt-3">
            ~ Evergeen
        </div>
    </div>

    <!-- content footer -->
    <hr>
    <div class="my-5 d-flex pt-4 justify-content-between">
        <div class="col-5 d-flex justify-content-center">
            <div class="col-9 text-center">
                <img src="<?= base_url('./image/logo-large.png') ?>" alt="">
                <div class="text-center gray fs14 mt-3">
                    Evergreen adalah platform library berbasis web. kami memudahkan anda yang suka membaca. hadir untuk indonesia maju!
                </div>
                <div class="mt-4 justify-content-around d-flex align-items-center">
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
        <div class="col offset-md-1">
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
        <div class="col">
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
        <div class="col">
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
        <div class="col">
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
    <div class="text-center">
        <div class="fs14 gray">
            @copyright 2024 All rights reserved | develop by : Patriott07 ryunex15 jipyy rrismawati nazwaa
        </div>
    </div>
</footer>

<!-- Script Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
    const handler_eye = document.getElementById('handler-eye');
    handler_eye.addEventListener('click', (e) => {
        // console.log(e, handler_eye.getAttribute('src'));
        const inputPass = document.getElementsByClassName('password-input');
        if(handler_eye.getAttribute('src') == `<?= base_url('./image/icon/eye-hide.png') ?>`){

            for (let i = 0; i < inputPass.length; i++) {
                inputPass[i].setAttribute('type', 'text');
            }
            handler_eye.setAttribute('src', `<?= base_url('./image/icon/eye-open.png') ?>` )

        }else{

            for (let i = 0; i < inputPass.length; i++) {
                inputPass[i].setAttribute('type', 'password');
            }
            handler_eye.setAttribute('src', `<?= base_url('./image/icon/eye-hide.png') ?>` )
            
        }
    })
</script>
</body>

</html>