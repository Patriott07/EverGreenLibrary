<?= view('./component/header-bs') ?>
<?= view('./component/NavbarWithLogo-bs') ?>
<div class="container gap-footer">

    Halamn dashboard admin

    <!-- Jika sukses -->
    <?php if (isset($suc)) { ?>
        <div class="d-flex flex-wrap">
            <!-- suc chip -->
            <div class="suc-form-chip">
                <div class="d-flex justify-content-around align-items-center fs14">
                    <img src="<?= base_url('./image/icon/success.png') ?>" alt="">
                    <div class="text fs14 ms-2">
                        <?= $suc ?>
                    </div>
                </div>
            </div>

        </div>
    <?php } ?>

    <form action="/auth/logout" method="post">
        <?= csrf_field() ?>
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
</div>

<?= view('./component/footer-bs') ?>