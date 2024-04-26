<?= view('./component/header-tw') ?>

<div class="gap-footer">
    <!-- Navbar -->
    <?= view('./component/NavbarAdminSlide') ?>
    <div class="container mx-auto my-8">
        <div class="md:w-6/12 ps-8" >
            <span class="text-5xl font-semibold">Deleted Document</span> <br>
             <span class="text-2xl font-medium">Evergreen Library Books</span>
        </div>
        <div class="flex gap-16 justify-center flex-wrap items-center">
        <table class="md:w-7/12 hover:shadow-2xl bg-white text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul buku | Penulis
                        </th>
                       
                        <th scope="col" class="px-6 py-3">
                            Halaman Buku | quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                <?php if (count($data) < 1) {
                ?>
                    <?php echo "data kosong" ?>
                <?php
                } else {
                ?>
                    <tbody>
                        <?php
                        $i = 1; foreach ($data as $fData) {
                        ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 duration-500 transition-all dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    <?= $i++ ?>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $fData['title'] ?> | <?= $fData['penulis'] ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $fData['total_pages'] ?> Halaman | Tersisa <?= $fData['quantity'] ?>
                                </td>
                                <td class="px-6 py-4 flex gap-4">
                                    <form action="/admin/books/restore" method="post">
                                        <input type="text" name="id_book" hidden value="<?= $fData['id']?>">
                                        <button type="submit" class="text-blue-400 font-medium bg-transparent border-0 outline-none">Restore</button>
                                    </form>
                                    <form action="/admin/books/forgedelete" method="post">
                                        <input type="text" name="id_book" hidden value="<?= $fData['id']?>">
                                        <button type="submit" class="text-red-700 font-medium text-left bg-transparent border-0 outline-none">Delete Permanent</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        } ?>

                    </tbody>
                <?php
                } ?>
            </table>

            <div class="w-fit">
                <img src="<?= base_url('./image/cat-1.png') ?>" alt="">
            </div>
        </div>


    </div>
</div>


<?= view('./component/footer-tw') ?>