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

            <!-- init to get error validation -->
            <?php validation_list_errors() ?>

            <?php if (isset($err)) { ?>
                <div class="d-flex flex-wrap">
                    <!-- err chip -->
                    <?php foreach ($err as $i_err) { ?>
                        <div class="err-form-chip">
                            <div class="d-flex justify-content-around align-items-center fs14">
                                <img src="<?= base_url('./image/icon/error.png') ?>" alt="">
                                <div class="text fs14 ms-2">
                                    <?= $i_err ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

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

            <form action="/auth/register" class="my-3 col-md-10" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="name">Username</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= isset($input) ? $input['name'] : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?= isset($input) ? $input['email'] : '' ?>">
                </div>
                <div class="mb-3 d-flex justify-content-between align-items-end">
                    <div class="col-md-11">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control password-input" value="<?= isset($input) ? $input['password'] : '' ?>">
                    </div>
                    <div class="w-fit-c">
                        <img class="e" src="<?= base_url('./image/icon/eye-hide.png') ?>" alt="" id="handler-eye">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" class="form-control password-input" value="<?= isset($input) ? $input['confirmpassword'] : '' ?>">
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
                        I have account. i want <a href="/signin">Login now</a>
                    </span>
                </div>

                <div class="form-check">
                    <input style="background-color: #7EE081!important; width:20px!important; height: 20px!important" class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        Iam ready and Aggre userAssigment
                    </label>
                </div>




            </form>
        </div>
        <div class="w-fit-c">
            <img src="<?= base_url('./image/img-register.png') ?>" alt="">
        </div>
    </div>
</div>

<?= view('./component/footer-bs') ?>