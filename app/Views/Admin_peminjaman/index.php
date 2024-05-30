<?= view('./component/header-tw') ?>
<!-- navbar dan slider content -->

<div class="gap-footer">
    <!-- Navbar -->
    <?= view('./component/NavbarAdminSlide') ?>


    <!-- section 3 -->
    <div class="container p-16 min-h-[75vh] mt-8 ms-auto bg-[#F4F4F4] rounded-l-[30px]">
        <div class="text-[48px] font-bold">
            Peminjaman
        </div>

        <!-- bubble information -->
        <div style="overflow-y: auto;">
            <div class="flex mt-4 gap-4">
                <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                    <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                        <div class="font-bold text-color4 text-[40px]">
                            1700
                        </div>
                        <span class="font-medium text-color1">Request Peminjaman</span>
                    </div>
                    <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                    </div>

                </div>
                <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                    <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                        <div class="font-bold text-color4 text-[40px]">
                            1700
                        </div>
                        <span class="font-medium text-color1">Sedang Dipinjam</span>
                    </div>
                    <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                    </div>

                </div>
                <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                    <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                        <div class="font-bold text-color4 text-[40px]">
                            1700
                        </div>
                        <span class="font-medium text-color1">Telah Selesai</span>
                    </div>
                    <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                    </div>

                </div>
                <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                    <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                        <div class="font-bold text-color4 text-[40px]">
                            1700
                        </div>
                        <span class="font-medium text-color1">Over Deadline</span>
                    </div>
                    <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                    </div>

                </div>
            </div>
        </div>

        <!-- bubble content -->
        <div class="flex flex-col gap-8 justify-between mt-8">
            <div class="bg-white p-6 rounded-[30px]">
                <div class="relative overflow-x-auto shadow-xl sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Request Order
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                                Click the button to confirm the Request orders
                            </p>

                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Code Checkout
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah_buku
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name books
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if (count($requests) > 0) {
                                foreach ($requests as $data) {
                            ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <?= $data['code'] ?>
                                        </th>
                                        <td class="px-6 py-4">
                                            <?= $data['name'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="p-2 bg-blue-500 text-white w-fit rounded-full font-semibold">
                                                <?= $data['status'] ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $data['jumlah_buku'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $data['title_book'] ?>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <form action="/admin/peminjaman/accept/order" method="post">
                                                <input type="text" value="<?= $data['id'] ?>" name="id_peminjaman" hidden>
                                                <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Accept Orders</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            <?php
                            } ?>


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-white p-6 rounded-[30px]">
                <div class="relative overflow-x-auto shadow-xl sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Return Orders
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                                Click the button to confirm the return
                            </p>

                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Code Checkout
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah_buku
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name books
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                <!-- <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th> -->
                            </tr>
                        </thead>
                        <tbody>

                            <?php if (count($returns) > 0) {
                                foreach ($returns as $data) {
                            ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <?= $data['code'] ?>
                                        </th>
                                        <td class="px-6 py-4">
                                            <?= $data['name'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="p-2 bg-blue-500 text-white w-fit rounded-full font-semibold">
                                                <?= $data['status'] ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $data['jumlah_buku'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $data['title_book'] ?>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <form action="/admin/peminjaman/accept/return" method="post">
                                                <input type="text" value="<?= $data['id'] ?>" name="id_peminjaman" hidden>
                                                <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Accept returns</button>
                                            </form>
                                        </td>
                                    </tr>

                            <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>


            <div class="bg-white p-6 rounded-[30px]">
                <div class="relative overflow-x-auto shadow-xl sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            All of peminjaman.

                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Code Checkout
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah_buku
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name books
                                </th>
                    
                            </tr>
                        </thead>
                        <tbody>

                            <?php if (count($peminjaman) > 0) {
                                $i = 0;
                                foreach ($peminjaman as $data) {
                            ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">
                                            <?= ++$i ?>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <?= $data['code'] ?>
                                        </th>
                                        <td class="px-6 py-4">
                                            <?= $data['name'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="p-2 bg-blue-500 text-white w-fit rounded-full font-semibold">
                                                <?= $data['status'] ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $data['jumlah_buku'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $data['title_book'] ?>
                                        </td>
                                        
                                    </tr>

                            <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>




</div>

<script>
    const btnLogoutForm = document.getElementById('logout');
    const disLogout = document.getElementById('disLogout');
    disLogout.addEventListener('click', () => {
        btnLogoutForm.click();
        console.log('logout')
    });
</script>

<?= view('./component/footer-tw') ?>