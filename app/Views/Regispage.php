<!-- 
    File ini dibuat menggunakan boostrap
 -->

<?= view('./component/header-bs') ?>

<div class="gap-footer container">
    <?= view('./component/NavbarWithLogo-bs') ?>
    <div class="d-flex justify-content-between align-items-center">
        <div class="col-md-6">
            <div class="ff1 fw-b fs40 ">
                Register
            </div>
            <div class="ff1 fw-m fs18 mb-3">
                EverGreen Library
            </div>

            <form action="" class="my-3 col-md-8" method="post">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" class="form-control">
                </div>
                
                <div class="mb-3 a-dash d-flex justify-content-between align-items-center">
                    <button type="submit" class="button-icon d-flex justify-content-between gap-2 align-items-center">
                        <div class="text ff1">
                            Submit
                        </div>
                        <div class="icon">
                            <img src="<?= base_url('./image/icon/send.png') ?>" alt="" srcset="">
                        </div>
                    </button>
                    <span class="">
                        I have account <a href="/signin">Login</a>
                    </span>
                </div>



            </form>
        </div>
        <div class="w-fit-c">
            <img src="<?= base_url('./image/img-register.png') ?>" alt="">
        </div>
    </div>
</div>

<?= view('./component/footer-bs') ?>