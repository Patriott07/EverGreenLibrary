<?= view('./component/header-tw') ?>

<div class="gap-footer">
    <!-- Navbar -->
    <?= view('./component/NavbarAdminSlide') ?>
    <div class="container mx-auto flex gap-16 mt-8 justify-center items-center">
        <div class="w-fit">
            <!-- init to get error validation -->
            <?php validation_list_errors() ?>
            <!-- if error -->
            <?php if (session()->has('err')) { ?>
                <div class="d-flex flex-wrap">
                    <!-- err chip -->
                    <?php foreach (session('err') as $i_err) { ?>
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

            <form action="<?= session('url') ?>" class="my-3 md:w-10/12 pb-5" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <!-- Set cookie -->

                <div class="mb-3">
                    <label for="title">Title</label> <br>
                    <input type="text" id="title" name="title" class="form-control w-96" value="<?= session()->has('input') ? session('input')['title'] : old('title') ?>">
                </div>
                <div class="flex gap-4 mb-3">
                    <div class="mb-3">
                        <label for="Publisher">Penulis</label> <br>
                        <input type="text" id="Publisher" name="penulis" class="form-control w-96/2" value="<?= session()->has('input') ? session('input')['penulis'] : old('penulis') ?>">
                    </div>
                    <div class="">
                        <label for="Publisher">Publisher</label>
                        <input type="text" id="Publisher" name="publisher" class="form-control w-96/2" value="<?= session()->has('input') ? session('input')['publisher'] : old('publisher') ?>">
                    </div>
                </div>
                <div class="mb-3 gap-4 flex">

                    <div class="mb-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Choose image</label>
                        <input class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file" name="image">
                    </div>
                    <div class="">
                        <label for="date">Publication date</label>
                        <input type="date" id="date" name="publication_date" class="form-control w-96/2" value="<?= session()->has('input') ? session('input')['publication_date'] : old('publication_date') ?>">
                    </div>
                </div>
                <div class="flex gap-4">

                    <div class="mb-3">
                        <label for="Page">Page totals</label>
                        <input type="number" id="Page" name="total_pages" class="form-control w-96/2" value="<?= session()->has('input') ? session('input')['total_pages'] : old('total_pages') ?>">
                    </div>

                    <div class="mb-3">
                        <label for="Quantity">Quantity</label>
                        <input type="number" id="Quantity" name="quantity" class="form-control w-96/2" value="<?= session()->has('input') ? session('input')['quantity'] : old('quantity') ?>">
                    </div>

                </div>


                <div class="mb-3">
                    <label for="email mb-3">Description</label> <br>
                    <textarea style="padding:15px!important" id="email" name="description" class="form-control min-h-20 w-[26rem] fs-sm"><?= session()->has('input') ? session('input')['description'] : old('description') ?></textarea>
                </div>

                <div class="mb-3 flex gap-4">
                    <button type="submit" class="rounded-md px-3 py-2 bg-pureBlack border-none text-white font-medium">
                        Submit
                    </button>
                    <input type="reset" value="Reset" class="rounded-md px-3 py-2 bg-gray-200 border-none text-pureBlack font-medium">
                </div>
            </form>
        </div>
        <div class="w-fi">
            <img src="<?= base_url('./image/cat-1.png') ?>" alt="">
        </div>
    </div>
</div>


<?= view('./component/footer-tw') ?>