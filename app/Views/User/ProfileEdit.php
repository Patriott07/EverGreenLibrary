<div class="bg-[#27272C]">
    <?= view('./component/header-tw') ?>

    <div class="gap-footer font-mono">

        <div class="flex mx-auto items-start">
            <div class="md:w-3/12 min-h-[100vh] flex flex-col justify-center items-center py-8" style="border-right: 1px solid gray;">
                <div class="profile">
                    <div class="mx-auto photo bg-slate-400 w-[200px] h-[200px] rounded-full relative mb-3">
                        <div class="bg-green-400 w-8 h-8 rounded-full absolute bottom-0 right-9"></div>
                    </div>
                    <div class="text-white mb-4">
                        <div class="text-2xl text-center">Ferdi febriansyah</div>
                        <div class="text-sm text-center">Member Evergreen</div>
                    </div>

                    <div class="rounded-md p-1 text-sm font-semibold mx-auto text-green-400 w-fit">
                        Back to Dashboard
                    </div>
                </div>
            </div>


            <div class="md:w-8/12 py-8 px-16 text-white">
                <div class="text-4xl ">Edit Personal Profile</div>
                <br>
                <hr class="opacity-50">
                <br>

                <div class="text-sm text-white mt-4">
                    Basic Settings
                </div>

                <form class="py-8" action="" method="post">
                    <div class="mb-3">
                        <label for="Username">Username</label> <br>
                        <input type="text" class="px-4 py-2 mt-2 rounded-xl min-w-[400px] focus:translate-x-2 focus:outline-2 text-black outline-green-400 transition-all" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="notelp">No Ponsel</label> <br>
                        <input type="number" class="px-4 py-2 mt-2 rounded-xl min-w-[400px] focus:translate-x-2 focus:outline-2 text-black outline-green-400 transition-all" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="notelp">Jenis kelamin</label> <br>
                        <select type="text" class="px-4 py-2 mt-2 rounded-md min-w-[400px] focus:translate-x-2 focus:outline-2 text-black outline-green-400 transition-all" name="username">
                            
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea name="" id="" class="min-h-[100px] mt-4 min-w-[450px]" placeholder="Tulis alamatmu"></textarea>
                    </div>


                    <div class="w-2/12 mt-20">
                        <hr class="opacity-50">
                    </div>
    
                    <div class="text-sm text-white mt-4 mb-8">
                        Advance Settings
                    </div>

                    <div class="mb-3">
                        <label for="Username">Email address</label> <br>
                        <input type="email" class="px-4 py-2 mt-2 rounded-xl min-w-[400px] focus:translate-x-2 focus:outline-2 text-black outline-green-400 transition-all" name="username">
                    </div>

                    <div class="mb-3">
                        <label for="Username">Password</label> <br>
                        <input type="password" class="px-4 py-2 mt-2 rounded-xl min-w-[400px] focus:translate-x-2 focus:outline-2 text-black outline-green-400 transition-all" name="username">
                    </div>

                    <div class="flex mt-8 gap-6">
                        <button type="submit" class="py-2 px-4 rounded-md text-black bg-green-400 hover:bg-green-300">Submit</button>
                        <button type="button" class="text-white font-medium">Cancel Change</button>
                    </div>
                </form>
               




                <!-- bubble information -->
                <!-- <div class="flex gap-4">
                    <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                        <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                            <div class="font-bold text-color4 text-[40px]">
                                1700
                            </div>
                            <span class="font-medium text-color1">Telah meminjam buku sebanyak</span>
                        </div>
                        <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                        </div>

                    </div>

                    <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                        <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                            <div class="font-bold text-color4 text-[40px]">
                                45
                            </div>
                            <span class="font-medium text-color1">Memberikan kesan positif pada buku</span>
                        </div>
                        <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                        </div>

                    </div>
                </div> -->

                <!-- genre / category he like -->
                <!-- <div class="text-sm text-white mt-4">
                    The most books you like
                </div>
                <div class="flex gap-3 mt-3">
                    <div class="bg-green-400 py-1 px-2 rounded-md">Islamic</div>
                    <div class="bg-green-400 py-1 px-2 rounded-md">Horror</div>
                    <div class="bg-green-400 py-1 px-2 rounded-md">Romance</div>
                </div>

                <div class="w-2/12 my-4">
                    <hr class="opacity-50">
                </div> -->

                <!-- books last -->
                <!-- <div class="text-sm text-white py-4">
                    Last Book You choices
                </div>

                <div class="flex gap-4">
                    <a href="/<?= session('name') ? session('name') : '-' ?>/book/7/surat-cinta-dari-bidadari-surga">
                        <div class="card hover:translate-y-[-12px] transition-all duration-300 group min-w-[250px] max-w-[250px] flex flex-col gap-3">
                            <div class="min-h-[370px] max-h-[370px] bg-cover bg-center bg-[url('https://bukurepublika.id/wp-content/uploads/2020/02/cover-surat-cinta-bidadari-surga_depan-600x910.jpg')]">
                            </div>
                            <div class="title text-[18px] font-medium text-white">Surat Cinta Dari Bidadari Surga</div>
                            <div class="title text-[14px] font-medium text-white group-hover:text-green-400">Elsa nur fitria</div>
                        </div>
                    </a>
                    <a href="/<?= session('name') ? session('name') : '-' ?>/book/7/surat-cinta-dari-bidadari-surga">
                        <div class="card hover:translate-y-[-12px] transition-all duration-300 group min-w-[250px] max-w-[250px] flex flex-col gap-3">
                            <div class="min-h-[370px] max-h-[370px] bg-cover bg-center bg-[url('https://bukurepublika.id/wp-content/uploads/2020/02/cover-surat-cinta-bidadari-surga_depan-600x910.jpg')]">
                            </div>
                            <div class="title text-[18px] font-medium text-white">Surat Cinta Dari Bidadari Surga</div>
                            <div class="title text-[14px] font-medium text-white group-hover:text-green-400">Elsa nur fitria</div>
                        </div>
                    </a>
                    <a href="/<?= session('name') ? session('name') : '-' ?>/book/7/surat-cinta-dari-bidadari-surga">
                        <div class="card hover:translate-y-[-12px] transition-all duration-300 group min-w-[250px] max-w-[250px] flex flex-col gap-3">
                            <div class="min-h-[370px] max-h-[370px] bg-cover bg-center bg-[url('https://bukurepublika.id/wp-content/uploads/2020/02/cover-surat-cinta-bidadari-surga_depan-600x910.jpg')]">
                            </div>
                            <div class="title text-[18px] font-medium text-white">Surat Cinta Dari Bidadari Surga</div>
                            <div class="title text-[14px] font-medium text-white group-hover:text-green-400">Elsa nur fitria</div>
                        </div>
                    </a>
                </div> -->

                <!-- <div class="w-2/12 mt-8 mb-4">
                    <hr class="opacity-50">
                </div> -->

                <!-- books yang sedang dipinjam -->
                <!-- <div class="text-sm text-white py-4">
                    Buku yang sedang dipinjam
                </div>

                <div class="flex gap-4">
                    <a href="/<?= session('name') ? session('name') : '-' ?>/book/7/surat-cinta-dari-bidadari-surga">
                        <div class="card hover:translate-y-[-12px] transition-all duration-300 group min-w-[250px] max-w-[250px] flex flex-col gap-3">
                            <div class="min-h-[370px] max-h-[370px] bg-cover bg-center bg-[url('https://bukurepublika.id/wp-content/uploads/2020/02/cover-surat-cinta-bidadari-surga_depan-600x910.jpg')]">
                            </div>
                            <div class="title text-[18px] font-medium text-white">Surat Cinta Dari Bidadari Surga</div>
                            <div class="title text-[14px] font-medium text-white group-hover:text-green-400">Elsa nur fitria</div>
                        </div>
                    </a>
                    <a href="/<?= session('name') ? session('name') : '-' ?>/book/7/surat-cinta-dari-bidadari-surga">
                        <div class="card hover:translate-y-[-12px] transition-all duration-300 group min-w-[250px] max-w-[250px] flex flex-col gap-3">
                            <div class="min-h-[370px] max-h-[370px] bg-cover bg-center bg-[url('https://bukurepublika.id/wp-content/uploads/2020/02/cover-surat-cinta-bidadari-surga_depan-600x910.jpg')]">
                            </div>
                            <div class="title text-[18px] font-medium text-white">Surat Cinta Dari Bidadari Surga</div>
                            <div class="title text-[14px] font-medium text-white group-hover:text-green-400">Elsa nur fitria</div>
                        </div>
                    </a>
                    <a href="/<?= session('name') ? session('name') : '-' ?>/book/7/surat-cinta-dari-bidadari-surga">
                        <div class="card hover:translate-y-[-12px] transition-all duration-300 group min-w-[250px] max-w-[250px] flex flex-col gap-3">
                            <div class="min-h-[370px] max-h-[370px] bg-cover bg-center bg-[url('https://bukurepublika.id/wp-content/uploads/2020/02/cover-surat-cinta-bidadari-surga_depan-600x910.jpg')]">
                            </div>
                            <div class="title text-[18px] font-medium text-white">Surat Cinta Dari Bidadari Surga</div>
                            <div class="title text-[14px] font-medium text-white group-hover:text-green-400">Elsa nur fitria</div>
                        </div>
                    </a>
                </div> -->


                <!-- table history peminjaman -->

                <!-- <div class="w-2/12 mt-16">
                    <hr class="opacity-50">
                </div>

                <div class="text-sm text-white pb-8 pt-2">
                    History peminjaman buku
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right bg-gray-900 text-gray-400">
                        <thead class="text-xs bg-gray-700text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Buku yang dipinjam
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah Buku
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    tanggal pinjam
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    tanggal kembali
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=" border-b bg-gray-800/80 border-gray-700 hover:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-500 hover:underline" style="color:#31C48D!important">Dipinjam</a>
                                </td>
                            </tr>
                            <tr class=" border-b bg-gray-800/80 border-gray-700 hover:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-500 hover:underline" style="color:#31C48D!important">Dikembalikan</a>
                                </td>
                            </tr>
                            <tr class=" border-b bg-gray-800/80 border-gray-700 hover:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-500 hover:underline" style="color:#31C48D!important">Dikembalikan</a>
                                </td>
                            </tr>
                            <tr class=" border-b bg-gray-800/80 border-gray-700 hover:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-500 hover:underline" style="color:#31C48D!important">Dipinjam</a>
                                </td>
                            </tr>
                            <tr class=" border-b bg-gray-800/80 border-gray-700 hover:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-500 hover:underline" style="color:#31C48D!important">Dikembalikan</a>
                                </td>
                            </tr>
                            <tr class=" border-b bg-gray-800/80 border-gray-700 hover:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-500 hover:underline" style="color:#31C48D!important">Dikembalikan</a>
                                </td>
                            </tr>
                            <tr class=" border-b bg-gray-800/80 border-gray-700 hover:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-500 hover:underline" style="color:#31C48D!important">Dipinjam</a>
                                </td>
                            </tr>
                            <tr class=" border-b bg-gray-800/80 border-gray-700 hover:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-500 hover:underline" style="color:#31C48D!important">Dikembalikan</a>
                                </td>
                            </tr>
                            <tr class=" border-b bg-gray-800/80 border-gray-700 hover:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-500 hover:underline" style="color:#31C48D!important">Dikembalikan</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div> -->

            </div>
        </div>
    </div>

    <div class="bg-white">
        <?= view('./component/footer-tw') ?>
    </div>
</div>