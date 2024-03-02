<?php

/**
 * File ini dibuat menggunakan boostrap
 */

?>

<?= view('./component/header-bs.php') ?>
<?= view('./component/NavbarWithLogo-bs.php') ?>
<div class="container align-items-center gap-footer">
    <div class="row align-items-center justify-content-between">
        <div class="col-md-6">
            <h1 class="mb-4 ff1 fw-bold">OOPPSS! 404</h1>
            <h3 class="ff2 mb-4">
                You seems going to far enough. until reach this page.
            </h3>
            <p class="ff1">Let me help redirecting you to main page</p>
            <!-- button -->
            <a href="/">
                <button class="button-icon d-flex justify-content-between gap-2 align-items-center">
                    <div class="text ff1">
                        Redirect me
                    </div>
                    <div class="icon">
                        <img src="<?= base_url('./image/icon/send.png') ?>" alt="" srcset="">
                    </div>
                </button>
            </a>
        </div>
        <div style="position: relative; width:fit-content;">
            <img style="" class="" src="<?= base_url('./image/404-image.png') ?>" alt="" srcset="">
        </div>

    </div>
</div>
<?= view('./component/footer-bs') ?>