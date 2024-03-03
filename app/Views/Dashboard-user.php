<?= view('./component/header-bs') ?>
<?= view('./component/NavbarWithLogo-bs') ?>
<div class="container gap-footer">
    Ini haalmana dashbaord user
    <form action="/auth/logout" method="post">
        <?= csrf_field() ?>
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
</div>
<?= view('./component/footer-bs') ?>