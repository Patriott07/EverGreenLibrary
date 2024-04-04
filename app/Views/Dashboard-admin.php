<?= view('./component/header-tw') ?>
<!-- navbar dan slider content -->

<div class="gap-footer">
    <!-- Navbar -->
    <?= view('./component/NavbarAdminSlide')?>
   
    <!-- section 1 -->
    <div class="container p-16 min-h-[75vh] mt-8 ms-auto bg-[#F4F4F4] rounded-l-[30px]">
        <div class="text-[48px] font-bold">
            Quick information
        </div>

        <!-- Jika sukses -->
        <?php if (isset($suc)) { ?>
            <div class="flex flex-wrap">
                <!-- suc chip -->
                <div class="suc-form-chip">
                    <div class="flex justify-around items-center fs14">
                        <img src="<?= base_url('./image/icon/success.png') ?>" alt="">
                        <div class="text fs14 ms-2">
                            <?= $suc ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- bubble information -->
        <div style="overflow-y: auto;">
            <div class="flex mt-4 gap-4">
                <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                    <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                        <div class="font-bold text-color4 text-[40px]">
                            1700
                        </div>
                        <span class="font-medium text-color1">Members Evergreen</span>
                    </div>
                    <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                    </div>

                </div>
                <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                    <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                        <div class="font-bold text-color4 text-[40px]">
                            132
                        </div>
                        <span class="font-medium text-color1">Books On Evergreen</span>
                    </div>
                    <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                    </div>

                </div>
                <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                    <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                        <div class="font-bold text-color4 text-[40px]">
                            17008
                        </div>
                        <span class="font-medium text-color1">Books have been checkout</span>
                    </div>
                    <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                    </div>

                </div>
                <div class="chipInformation group hover:opacity-90 rounded-[30px] min-w-[300px] bg-color2 p-3 flex justify-between">
                    <div class="group-hover:ps-4 transition-all duration-300 ps-2">
                        <div class="font-bold text-color4 text-[40px]">
                            1700
                        </div>
                        <span class="font-medium text-color1">Category Books</span>
                    </div>
                    <div class="w-8 h-8 rounded-full group-hover:bg-white group-hover:opacity-85 bg-gray-400">

                    </div>

                </div>
            </div>
        </div>

        <!-- bubble content -->
        <div class="flex justify-between mt-8">
            <div class="md:w-[49%] bg-white p-6 rounded-[30px]">
                <div class="relative overflow-x-auto shadow-xl sm:rounded-lg hover:translate-x-[-28px] hover:translate-y-[-36px] hover:min-w-full transition-all duration-[400ms]">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Our products
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p>
                            <button class="px-4 py-1 rounded-lg text-[14px] mt-3 font-medium text-color1 bg-color2 shadow">Insert new data</button>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                <td class="px-6 py-4 text-center">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="md:w-[49%] bg-white p-6 rounded-[30px]">
                <div class="relative overflow-x-auto shadow-xl sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Our products
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p>
                            <button class="px-4 py-1 rounded-lg text-[14px] mt-3 font-medium text-color1 bg-color2 shadow">Insert new data</button>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- section 2 -->
    <div class="container mt-8 p-16 pr-0 min-h-[75vh] ms-auto bg-pureBlack rounded-l-[30px]">
        <div class="text-[48px] text-color1 font-bold">
            Latest Feedback Evergreen
        </div>

        <!-- Comment -->
        <div class="flex gap-6 flex-wrap mt-8">
            <div class="card-feedback hover:translate-y-[-70px] hover:z-20 group items-end bg-color2 hover:bg-color2/80 md:w-[380px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
                <!-- image -->
                <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0 ts-02-03" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                </div>
                <div class="w-8/12 text-color2 ts-03-01">
                    <div class="overflow-hidden group-hover:overflow-visible">
                        <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                            Amelia
                            <span class="p-2 text-[12px] text-pureBlack bg-color4 opacity-0 group-hover:opacity-100 rounded-full w-fit">
                                Pengguna Evergreen
                            </span>
                        </p>

                    </div>
                    <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[380px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
                <!-- image -->
                <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0 ts-02-03" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                </div>
                <div class="w-8/12 text-color2 ts-03-01">
                    <div class="overflow-hidden group-hover:overflow-visible">
                        <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                            Amelia
                            <span class="p-2 text-[12px] text-pureBlack bg-color4 opacity-0 group-hover:opacity-100 rounded-full w-fit">
                                Pengguna Evergreen
                            </span>
                        </p>

                    </div>
                    <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[380px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
                <!-- image -->
                <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0 ts-02-03" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                </div>
                <div class="w-8/12 text-color2 ts-03-01">
                    <div class="overflow-hidden group-hover:overflow-visible">
                        <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                            Amelia
                            <span class="p-2 text-[12px] text-pureBlack bg-color4 opacity-0 group-hover:opacity-100 rounded-full w-fit">
                                Pengguna Evergreen
                            </span>
                        </p>

                    </div>
                    <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[380px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
                <!-- image -->
                <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0 ts-02-03" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                </div>
                <div class="w-8/12 text-color2 ts-03-01">
                    <div class="overflow-hidden group-hover:overflow-visible">
                        <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                            Amelia
                            <span class="p-2 text-[12px] text-pureBlack bg-color4 opacity-0 group-hover:opacity-100 rounded-full w-fit">
                                Pengguna Evergreen
                            </span>
                        </p>

                    </div>
                    <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="card-feedback hover:translate-y-[-70px] hover:z-20 group items-end bg-color2 hover:bg-color2/80 md:w-[380px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
                <!-- image -->
                <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0 ts-02-03" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                </div>
                <div class="w-8/12 text-color2 ts-03-01">
                    <div class="overflow-hidden group-hover:overflow-visible">
                        <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                            Amelia
                            <span class="p-2 text-[12px] text-pureBlack bg-color4 opacity-0 group-hover:opacity-100 rounded-full w-fit">
                                Pengguna Evergreen
                            </span>
                        </p>

                    </div>
                    <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[380px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
                <!-- image -->
                <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0 ts-02-03" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                </div>
                <div class="w-8/12 text-color2 ts-03-01">
                    <div class="overflow-hidden group-hover:overflow-visible">
                        <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                            Amelia
                            <span class="p-2 text-[12px] text-pureBlack bg-color4 opacity-0 group-hover:opacity-100 rounded-full w-fit">
                                Pengguna Evergreen
                            </span>
                        </p>

                    </div>
                    <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- section 3 -->
    <div class="container p-16 min-h-[75vh] mt-8 ms-auto bg-[#F4F4F4] rounded-l-[30px]">
        <div class="text-[48px] font-bold">
            History peminjaman
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
        <div class="flex justify-between mt-8">
            <div class="md:w-[49%] bg-white p-6 rounded-[30px]">
                <div class="relative overflow-x-auto shadow-xl sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Our products
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p>
                            <button class="px-4 py-1 rounded-lg text-[14px] mt-3 font-medium text-color1 bg-color2 shadow">Insert new data</button>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                <td class="px-6 py-4 text-center">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="md:w-[49%] bg-white p-6 rounded-[30px]">
                <div class="relative overflow-x-auto shadow-xl sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Our products
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p>
                            <button class="px-4 py-1 rounded-lg text-[14px] mt-3 font-medium text-color1 bg-color2 shadow">Insert new data</button>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- section 4 | The most positive  -->
    <div class="container mt-8 p-16 pr-0 min-h-[75vh] ms-auto bg-pureBlack rounded-l-[30px]">
        <div class="text-[48px] text-color1 font-bold">
            The Most Positive Review Books
        </div>

        <!-- card collection -->
        <div style="overflow-x: auto;" class="mt-8">
            <div class="flex gap-4">
                <div class="card relative group hover:shadow-xl hover:shadow-gray-50/20">
                    <div class="canvas w-[280px] flex items-end h-[360px] bg-gray-400/30">
                        <div class="group-hover:p-3 bg-pureBlack overflow-hidden h-0 group-hover:h-[60%] transition-all duration-[400ms] text-color1">
                            <h2 class="font-medium text-xl mb-3">
                                Hujan tak pernah pulang
                            </h2>
                            <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repellat magni molestias, labore culpa architecto eius. Aut possimus optio similique.</p>
                        </div>
                    </div>
                    <div class="hover:bg-orange-500 w-fit py-2 px-4 group-hover:px-6 rounded-r-full font-medium text-[18px] bg-color2 text-color1 absolute left-[-8px] top-[-8px] transition-all duration-500">#01</div>
                    <div class="hover:bg-orange-500 duration-500 group-hover:right-[85%] transition-all w-fit py-2 px-4 rounded-full text-sm bg-orange-400 absolute right-0 bottom-8 translate-x-1/2 translate-y-1/2">Detail</div>
                </div>
            </div>
        </div>


    </div>

    <!-- section 5 | The most Worst  -->
    <div class="container mt-8 p-16 pr-0 min-h-[75vh] ms-auto bg-pureBlack rounded-l-[30px]">
        <div class="text-[48px] text-color1 font-bold">
            The Most Worst Review Books
        </div>

        <!-- card collection -->
        <div style="overflow-x: auto;" class="mt-8">
            <div class="flex gap-4">
                <div class="card relative group hover:shadow-xl hover:shadow-gray-50/20">
                    <div class="canvas w-[280px] flex items-end h-[360px] bg-gray-400/30">
                        <div class="group-hover:p-3 bg-pureBlack overflow-hidden h-0 group-hover:h-[60%] transition-all duration-[400ms] text-color1">
                            <h2 class="font-medium text-xl mb-3">
                                Hujan tak pernah pulang
                            </h2>
                            <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repellat magni molestias, labore culpa architecto eius. Aut possimus optio similique.</p>
                        </div>
                    </div>
                    <div class="hover:bg-orange-500 w-fit py-2 px-4 group-hover:px-6 rounded-r-full font-medium text-[18px] bg-color2 text-color1 absolute left-[-8px] top-[-8px] transition-all duration-500">#01</div>
                    <div class="hover:bg-orange-500 duration-500 group-hover:right-[85%] transition-all w-fit py-2 px-4 rounded-full text-sm bg-orange-400 absolute right-0 bottom-8 translate-x-1/2 translate-y-1/2">Detail</div>
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
    })
</script>

<?= view('./component/footer-tw') ?>