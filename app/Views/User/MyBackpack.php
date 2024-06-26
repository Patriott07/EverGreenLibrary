<div class="bg-[#27272C]">
    <?= view('./component/header-tw') ?>

    <div class="container gap-footer font-mono">

        <!-- navigasi modal -->
        <?= session()->has('sessionerror') ? "<script>alert('You cant acces orderPage. There nothing to order.')</script>" : '' ?>

        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <form action="/pinjam" method="post" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Form peminjaman
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <div>
                            <div class="input-grouping mb-4">
                                <div class="mb-2">
                                    <label for="" class="font-semibold">Awal peminjaman</label>
                                </div>
                                <input type="date" name="tgl_pinjam" id="" class="p-2 rounded-md min-w-[250px]" value="<?= $date ?>" readonly>
                            </div>
                            <div class="input-grouping mb-4">
                                <div class="mb-2">
                                    <label for="" class="font-semibold">Waktu pengembalian</label>
                                </div>
                                <input type="date" name="tgl_kembali" id="" class="p-2 rounded-md min-w-[250px]">
                                <div class="text-[12px] text-slate-400 mt-2">Batas peminjaman 7 hari dari awal peminjaman</div>
                            </div>
                            <div class="mt-12 flex gap-3 items-center">
                                <input type="number" name="jumlah_buku" id="" value="<?= count($books) ?>" class="p-2 rounded-md w-fit max-w-20" readonly>
                                <div class="text-sm">Buku yang dibawa</div>
                            </div>
                            <div class="mt-6">
                                <div class="mb-2">
                                    <label for="" class="font-semibold">Denda Hukuman</label>
                                </div>
                                <div class="flex gap-3 items-center">
                                    <div class="text-sm">Rp. </div>
                                    <input type="number" name="denda" id="" value="<?=  count($books) * 20000 ?>" class="p-2 rounded-md w-fit max-w-40" readonly>
                                </div>
                                <div class="text-[12px] text-slate-400 mt-2">Sanksi denda yang dibayar ketika melanggar peraturan</div>
                            </div>
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button style="background-color: #2f2f2f!important;" data-modal-hide="default-modal" type="submit" class=" text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900  bg-white rounded-lg  hover:bg-gray-100 hover:text-blue-700">Close Modal</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- botttom navigasi -->
        <?php if (count($books) > 0) {
        ?>
            <div class="fixed bottom-0 left-0 z-20 w-screen p-4 hover:py-12 duration-300  flex justify-center items-center bg-gray-800">
                <div class="w-fit">
                    <div class="text-sm text-green-400 cursor-pointer" data-modal-target="default-modal" data-modal-toggle="default-modal">
                        Checkout now
                    </div>

                    <!-- <div class="btn rounded-md p-1 bg-white font-semibold text-center">Checkout</div> -->
                </div>
            </div>
        <?php
        } ?>

        <div class="flex container mx-auto items-start">
            <div class="md:w-2/12 min-h-[100vh] pt-[15vh] flex flex-col justify-center items-center" style="border-right: 1px solid gray;">
                <div class="flex flex-col gap-2">
                    <a href="/<?= session('name') ?>/dashboard">
                        <div class="text-[24px] text-green-400">Library</div>
                    </a>
                    <ul class="list-none font-bold text-green-400/60 cursor-pointer">
                        <?php foreach ($categ as $data) {
                        ?>
                            <li>
                                <a style="color: #4ade80!important" href="/<?= session('name') ?>/dashboard/?categ=<?= $data['name_category'] ?>">
                                    <?= $data['name_category'] ?>
                                </a>
                            </li>

                        <?php
                        } ?>
                    </ul>
                    <div class="text-[20px] text-green-400">
                        <a href="/profile/dashboard" class="text-[18px] text-green-400" style="color: rgb(74, 222, 128)!important;">
                            Account
                        </a>
                    </div>
                    <div class="text-[20px] text-green-400">
                        <a href="/backpack/dashboard" class="text-[18px] text-green-400" style="color: rgb(74, 222, 128)!important;">
                            myBackpack
                        </a>
                    </div>
                    <div class="text-[20px] text-green-400">
                        <a href="/my-order/dashboard" class="text-[18px] text-green-400" style="color: rgb(74, 222, 128)!important;">
                            myOrder
                        </a>
                    </div>
                    <form action="/auth/logout" method="post" class="text-[18px] text-green-400">
                        <button type="submit">Logout</button>
                    </form>

                </div>
            </div>



            <div class="md:w-10/12 py-8 px-16 text-white">
                <div class="text-4xl ">My Backpack</div>

                <br>
                <hr class="opacity-50">
                <?php if (count($books) < 1) {
                ?>
                    <div class="text-2xl py-3">No items seems here. lets take out some books</div>

                <?php
                } ?>
                <br>
                <!-- items in backpack -->
                <?php foreach ($books as $i => $book) {
                ?>


                    <div class="flex flex-col gap-8">
                        <div class="w-fit flex items-center gap-8">
                            <?php if ($book['image'] == null) {
                            ?>
                                <div class="min-h-[360px] min-w-[250px] max-w-[250px] bg-cover mb-3 bg-center flex justify-center items-center text-white text-xl font-semibold bg-black">
                                    No image avaible
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="min-h-[360px] min-w-[250px] max-w-[250px] bg-cover mb-3 bg-center
                                bg-[url('<?= base_url("./image/uploaded/" . $book['image']) ?>')]">

                                </div>
                            <?php
                            }
                            ?>

                            <div class="max-w-[350px] flex items-center">
                                <div>
                                    <div class="text-3xl mb-1 font-medium"><?= $book['title'] ?></div>
                                    <div class="text-normal mb-2 text-green-400">
                                        <?= $book['total_pages'] ?> Halaman
                                    </div>

                                    <div class="w-10 mb-2">
                                        <br>
                                        <hr class="opacity-50">
                                    </div>
                                    <p>Tersedia <?= $book['quantity'] ?> Buku lagi</p>
                                </div>

                                <!-- <div class="flex items-start mb-5">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="<?= $book['id'] ?>" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                    </div>
                                    <label for="remember" class="ms-2 text-sm font-medium text-white">Checkout me</label>
                                </div> -->
                            </div>
                            <form action="/backpack/items/<?= $i ?>/delete" method="get">
                                <button type="submit">
                                    <div class="bg-red-600 text-1xl text-white py-2 px-4">x</div>
                                </button>
                            </form>
                        </div>

                    </div>
                <?php
                } ?>

            </div>
        </div>
    </div>

    <div class="bg-white">
        <?= view('./component/footer-tw') ?>
    </div>
</div>