<div class="bg-[#27272C]">
    <?= view('./component/header-tw') ?>

    <div class="container gap-footer font-mono">

        <!-- navigasi modal -->
        <?php
            if(session()->has('returnMessageSucces')){
                $msg = session('returnMessageSucces');
                echo "<script>alert('$msg')</script>";
            }
        ?>

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
                <div class="text-4xl ">My Order|<span style="font-size: 14px;" class="font-bold text-green-400">Code : <?= $peminjaman['code'] ?></span></div>

                <br>
                <hr class="opacity-50">
                <div class="flex-col flex gap-2 font-semibold text-[18px] py-6">
                    <div class="">Date Checkout : <?= $peminjaman['tgl_pinjam'] ?></div>
                    <div class="">Date return : <?= $peminjaman['tgl_kembali'] ?></div>
                    <div class="">Ordered book : <?= $peminjaman['jumlah_buku'] ?></div>
                    <div class="flex gap-4 items-center">
                        <div class="">Status</div>
                        <div class="bg-white text-blue-600 px-4 py-2 font-bold rounded-xl text-sm"><?= $peminjaman['status'] ?></div>
                    </div>

                    <!-- user info -->
                    <div class="p-6 my-4 rounded-md bg-white/20 flex flex-col gap-2 max-w-[60%]">
                        <div>
                            Name : <?= $user['name'] ?>
                        </div>
                        <div>

                            Email : <?= $user['email'] ?>
                        </div>
                        <div>

                            jenis kelamin : <?= $user['jenis_kelamin'] ?>
                        </div>
                        <div>

                            No telp. <?= $user['telp'] ?>
                        </div>
                        <div class="text-sm">
                            Alamat : <?= $user['alamat'] ?>
                        </div>
                    </div>

                    <div class="">Denda terlambat pengembalian : </div>
                    <div class="">
                        Rp.<span class="text-[48px] text-red-600">20.000</span>/book.
                    </div>
                    <div style="overflow-x: auto;">
                        <div class="flex gap-6 mt-6">
                            <div class="max-w-[150px] min-h-[400px] min-w-[150px] flex justify-center items-center font-semibold text-[18px] text-white">
                                Detail ordered book :
                            </div>

                            <?php foreach ($books as $book) {
                                $slug = strtolower(str_replace(' ', '-', $book['title']));
                            ?>


                                <div class="text-white flex-col flex gap-2 hover:translate-x-4 duration-300">

                                    <?php if ($book['image'] == null) {
                                    ?>
                                        <!-- <div class="min-h-[370px] max-h-[370px] bg-cover bg-center bg-black text-white font-semibold text-xl flex justify-center items-center">
                                            No image avaible
                                        </div> -->
                                        <div class="max-w-[300px] min-h-[400px] min-w-[300px] bg-cover bg-center bg-black text-white font-semibold text-xl flex justify-center items-center">
                                            No image avaible
                                        </div>

                                    <?php
                                    } else {
                                    ?>

                                        <div class="max-w-[300px] min-h-[400px] min-w-[300px] bg-cover bg-center bg-[url('<?= base_url("./image/uploaded/" . $book['image']) ?>')]">

                                        </div>

                                    <?php
                                    } ?>


                                    <div class="text-[18px]"><?= $book['title'] ?></div>
                                    <a href="/<?= session('name') ?>/book/<?= $book['id'] ?>/<?= $slug ?>">

                                        <div class="text-sm font-bold text-green-400">give rating now.</div>
                                    </a>

                                </div>
                            <?php
                            }
                            ?>


                        </div>
                    </div>

                    <form action="/return" method="post" class="flex justify-between items-center mt-16">
                        <div class="text-sm md:w-4/12">
                            Note : When you ordered a book. system block you to order another book, makesure to return the book to read more book
                        </div>
                        <div class="text-sm md:w-4/12 flex flex-col gap-3">
                            <div class="text-[20px] font-semibold">3 days left.</div>
                            <input type="number" name="id_peminjaman" class="text-black" value="<?= $peminjaman['id'] ?>" hidden>
                            <button type="submit" class="text-[16px] font-semibold p-3 bg-green-400 w-fit rounded-md">Ajukan Pengembalian</button>
                        </div>
                    </form>

                </div>



            </div>
        </div>
    </div>

    <div class="bg-white">
        <?= view('./component/footer-tw') ?>
    </div>
</div>