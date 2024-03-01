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
            <h1 class="mb-4">OOPPSS! 404</h1>
            <h3 class="ff2 mb-4">
            You seems going to far enough. until reach this page.
        </h3>
        <p>Let me help redirecting you to main page</p>
        <!-- button -->
        <a href="/">
            <button class="button-icon d-flex justify-content-between gap-2 align-items-center">
                <div class="text">
                    Redirect me
                </div>
                <div class="icon">
                    <img src="<?= base_url('./image/icon/send.png') ?>" alt="" srcset="">
                </div>
            </button>
        </a>
        </div>
        <div style="width: fit-content;" class="p-5">
            <img src="<?= base_url('./image/404-cute.jpg') ?>" alt="" srcset="">
        </div>
    </div>
</div>
<?= view('./component/footer-bs') ?>