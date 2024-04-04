<?= view('./component/header-tw') ?>
<div class="gap-footer">
    <!-- modal -->
    <!-- Modal toggle -->
    <div class="flex justify-center m-5">
        <button id="readProductButton" data-modal-target="readProductModal" data-modal-toggle="readProductModal" class="block text-black bg-orange-400 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
            Show read modal
        </button>
    </div>

    <!-- Main modal -->
    <div id="readProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                        <h3 class="font-semibold " id="modal-title">

                        </h3>
                        <p class="font-bold text-sm text-gray-600">
                            <span id="modal-totalPages">

                            </span>
                            <span id="modal-publisher">

                            </span>
                        </p>
                    </div>
                    <div>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="readProductModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                </div>
                <div id="modal-image">

                </div>
                <dl>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Sinopsis</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400" id="modal-description"></dd>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Category</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400 flex gap-2" id="modal-category"></dd>
                </dl>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-3 sm:space-x-4">
                        <a href="" id="modal-edit-act">
                            <button type="button" class="text-white inline-flex items-center bg-pureBlack hover:bg-pureBlack/100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                </svg>
                                Edit
                            </button>
                        </a>
                    </div>
                    <a href="" id="modal-delete-act">
                        <button type="button" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                            <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            Delete
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Navbar -->
    <?= view('./component/NavbarAdminSlide') ?>

    <!-- splash component -->
    <div id="splashScreen" class="splash h-[100vh] w-screen z-[50] bg-white fixed top-0 left-0 flex items-center flex-col justify-center">
        <!-- <div id="box1" class="w-0 h-0 animation-rotate absolute z-[52] top-0 left-0 mx-auto bg-[#8364e8]/95 shadow-2xl transition-all duration-700 hover:w-screen hover:h-screen"></div> -->
        <div id="box1" class="w-0 h-0 animation-rotate absolute z-[51] top-0 left-0 mx-auto bg-color4/80 shadow-2xl transition-all duration-700 hover:w-screen hover:h-screen"></div>
        <!-- <div id="box2" class="w-0 h-0 animation-rotate absolute z-[51] bottom-0 right-0 mx-auto bg-[#96c6ea]/90 shadow-2xl transition-all duration-700 hover:w-screen hover:h-screen"></div> -->
        <div id="box2" class="w-0 h-0 animation-rotate absolute z-[51] bottom-0 right-0 mx-auto bg-[#96c6ea]/70 shadow-2xl transition-all duration-700 hover:w-screen hover:h-screen"></div>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
        <div class="relative z-[53]">
            <dotlottie-player class="m-0 p-0 z-20 animation-ping" src="https://lottie.host/203ddcd2-21d0-4bdf-805a-d65302281b21/tVrOEAmD3i.json" background="transparent" speed="1" style="width: 350px; height: 350px;" loop autoplay>
            </dotlottie-player>
            <h2 id="text1" class="font-bold text-center text-3xl translate-y-4 opacity-0 transition-all duration-300">Welcome, In Evergreen</h2>
            <h2 id="text2" class="font-bold text-center text-1xl transition-all duration-500 opacity-0">Bring your day to shine. Please wait. . .</h2>
        </div>
    </div>

    <!-- script splash -->
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            const splashScreen = document.getElementById('splashScreen');
            const box1 = document.getElementById('box1')
            const box2 = document.getElementById('box2')
            const text1 = document.getElementById('text1')
            const text2 = document.getElementById('text2')

            await new Promise((resolve, reject) => setTimeout(() => resolve(), 900));
            box2.classList.add('rounded-full');
            box2.classList.add('w-60');
            box2.classList.add('h-60');
            await new Promise((resolve, reject) => setTimeout(() => resolve(), 900));
            box1.classList.add('rounded-full');
            box1.classList.add('w-60');
            box1.classList.add('h-60');
            text1.classList.add('opacity-100')
            text1.classList.remove('translate-y-4')

            await new Promise((resolve, reject) => setTimeout(() => resolve(), 500));
            box1.classList.remove('rounded-full');
            box1.classList.add('rounded-r-full');
            box2.classList.remove('rounded-full');
            box2.classList.add('rounded-l-full');
            await new Promise((resolve, reject) => setTimeout(() => resolve(), 200));
            // box2.classList.add('w-60');
            box2.classList.add('h-[100vh]');
            box2.classList.remove('h-60');
            await new Promise((resolve, reject) => setTimeout(() => resolve(), 200));
            // box1.classList.add('w-60');
            box1.classList.remove('h-60');
            box1.classList.add('h-[100vh]');
            await new Promise((resolve, reject) => setTimeout(() => resolve(), 500));
            box1.classList.remove('rounded-r-full');
            box1.classList.add('rounded-r-md');
            box2.classList.remove('rounded-l-full');
            box2.classList.add('rounded-l-md');
            box1.classList.add('opacity-80');
            box2.classList.add('opacity-80');
            await new Promise((resolve, reject) => setTimeout(() => resolve(), 500));
            box1.classList.remove('w-60');
            box1.classList.add('w-screen');
            box2.classList.remove('w-60');
            box2.classList.add('w-screen');
            text1.classList.add('text-white');
            await new Promise((resolve, reject) => setTimeout(() => resolve(), 900));
            text2.classList.remove('opacity-0')
            text2.classList.add('opacity-100')
            text2.classList.add('translate-y-4')
            await new Promise((resolve, reject) => setTimeout(() => resolve(), 3000));
            splashScreen.classList.add('opacity-30');
            await new Promise((resolve, reject) => setTimeout(() => resolve(), 200));
            splashScreen.classList.add('invisible');



        })
    </script>

    <!-- Icon left -->
    <div class="fixed bg-pureBlack hover:pr-12 hover:gap-8 hover:z-40 duration-200 transition-all left-0 top-0 h-[100vh] w-fit p-4 flex flex-col justify-center items-center gap-6">
        <a href="/admin/dashboard">
            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="dashboard">
                <path fill="none" d="M0 0h24v24H0V0z"></path>
                <path d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z" fill="#34a853" class="color000000 svgShape"></path>
            </svg>
        </a>
        <a href="/admin/books/form">
            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="Add">
                <path d="M12 1C5.926 1 1 5.925 1 12s4.926 11 11 11 11-4.925 11-11S18.074 1 12 1zm5 12h-4v4h-2v-4H7v-2h4V7h2v4h4v2z" fill="#34a853" class="color000000 svgShape"></path>
            </svg>
        </a>
        <a href="/admin/books/deleted">
            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="Recycle">
                <path fill="#34a853" d="M8 3.1l1.4 2.2-1.6 1.1 1.3.3 2.8.6.6-2.7.4-1.4-1.8 1.1-2-3.3H6.9L4.3 5.3l1.7 1zM16 12l-2.7-4.3-1.7 1 2 3.3H11v-2l-3 3 3 3v-2h3.7zM2.4 12l1.4-2.3 1.7 1.1-.9-4.2-2.8.7-1.3.3 1.6 1L0 12l1.3 2H7v-2z" class="color444444 svgShape"></path>
            </svg>
        </a>




    </div>

    <!-- seach engine -->
    <!-- <div class="absolute left-8 top-8 mt-8">
        <form class="max-w-md mx-auto min-w-1/2">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" class=" min-w-[100%] p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div> -->

    <div class="mt-16 container ms-auto bg-[#f4f4f4] p-8 rounded-l-[40px]">
        <!-- Jika sukses -->
        <?php

        use App\Libraries\Auth_lib;

        if (isset($suc)) { ?>
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

        <!-- if error -->
        <?php if (session()->has('err')) { ?>
            <div class="d-flex flex-wrap">
                <!-- err chip -->
                <?php foreach (session('err') as $i_err) { ?>
                    <div class="err-form-chip">
                        <div class="flex justify-around items-center fs14">
                            <img src="<?= base_url('./image/icon/error.png') ?>" alt="">
                            <div class="text fs14 ms-2">
                                <?= $i_err ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>


        <!-- bubble information -->
        <div style="overflow-y: auto;">
            <div class="flex my-4 gap-4">
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
    </div>

    <div class="my-4 container ms-auto relative">
        <div class="relative group">

            <div class="z-20 transition-all relative duration-500 group-hover:translate-x-6 group-hover:opacity-95">
                <span class="text-[120px] text-color2 font-bold">Collections.</span>
                <span class="text-[30px] text-color2 font-bold">Books</span>
            </div>

            <!-- absolute -->
            <div class="absolute top-0 left-0 transition-all duration-500 delay-500 group-hover:left-3">
                <span class="text-[120px] text-color4 font-bold">Collections.</span>
                <span class="text-[30px] text-color4 font-bold">Books</span>
            </div>
        </div>
    </div>

    <div class="container ms-auto bg-[#f4f4f4] p-16 rounded-l-[40px]">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <div class="flex gap-4">
                    <div>
                        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                            <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                            </svg>
                            Last 30 days
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last day</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 7 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 30 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last month</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last year</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="/admin/books/form" class="rounded-xl text-pureBlack font-medium cursor-pointer px-3 py-1 hover:bg-white">Insert Document</a>
                </div>

                <label for="table-search" class="sr-only">Search</label>
                <form class="relative" method="get">
                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="inputSearch" name="s" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                </form>
            </div>

            <table class="w-full hover:shadow-2xl bg-white text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul buku | Penulis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cover buku
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
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
                        <?php foreach ($data as $fData) {
                        ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-color4/80 hover:translate-y-[-8px] hover:z-20 duration-500 transition-all hover:bg-color4/80 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    <?= $fData['id'] ?>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $fData['title'] ?> | <?= $fData['penulis'] ?>
                                </th>
                                <td class="px-6 py-4 fs-sm">
                                    Click detail to see image
                                    <!-- <div class="px-12 py-16 bg-cover grayscale hover:grayscale-0 hover:translate-y-[-12px] duration-500 bg-[url('<?= base_url('/image/uploaded/') . $fData['image'] ?>')]"></div> -->
                                </td>
                                <td class="px-6 py-4">
                                    <?php
                                    if (count($fData['category']) >= 1) {
                                        foreach ($fData['category'] as $category) {
                                    ?>
                                            <div class="px-3 py-1 rounded-md w-fit text-[12px] bg-pureBlack/85 hover:bg-pureBlack/100 duration-200 text-color1 mb-2"><?= $category['name_category'] ?></div>
                                        <?php }
                                    } else {
                                        ?>
                                        <div class="px-3 py-1 rounded-md w-fit text-[12px] bg-red-600/95 hover:bg-red-600/100 duration-200 text-color1 mb-2">Empty Category</div>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $fData['total_pages'] ?> Halaman | Tersisa <?= $fData['quantity'] ?>
                                </td>
                                <td class="px-6 py-4 flex justify-start items-center">
                                    <a data-modal-target="readProductModal" data-modal-toggle="readProductModal"
                                     onclick="handleDataModal(this,'/admin/books/form?a=e&obji=<?= $authLib->textToHash($fData['id']) ?>','')" data-modalphp="<?= htmlspecialchars(json_encode($fData)) ?>" class="font-medium hover:text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                    <a href="/admin/books/form?a=e&obji=<?= $authLib->textToHash($fData['id']) ?>" class="font-medium hover:text-blue-600 dark:text-blue-500 hover:underline ms-3">Edit</a>
                                    <a href="">
                                        <svg class="w-6 h-6 text-gray-800 hover:text-red-600 transition-all duration-200 dark:text-white ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        } ?>

                    </tbody>
                <?php
                } ?>
                <script>
                    const handleDataModal = (e, linkEdit, linkDelete
                    ) => {
                        // console.log('data :', e.getAttribute('data-modalphp'));
                        const data = JSON.parse(e.getAttribute('data-modalphp'));
                        const bgurl = '<?= base_url('/image/uploaded/') ?>' + data.image;
                        // const urlEdit = `/admin/books/form?a=e&obji=<?php // echo $authLib->textToHash(?>${data.id}<?php //)?>`;
                        document.getElementById('modal-edit-act').setAttribute('href', linkEdit)
                        document.getElementById('modal-delete-act').setAttribute('href', linkDelete)
                        document.getElementById('modal-title').innerHTML = data.title;
                        document.getElementById('modal-totalPages').innerHTML = data.total_pages + " Lembar ";
                        document.getElementById('modal-publisher').innerHTML = " | Publisher " + data.publisher;
                        document.getElementById('modal-description').innerHTML = data.description;
                        if (data.image == null) {

                            document.getElementById('modal-image').innerHTML = `<div class="mb-3 font-semibold px-16 py-24 text-color4 text-[18px] mt-5 bg-pureBlack w-fit">There No <br> image avaible <br> Try add first</div>`;
                        } else {
                            document.getElementById('modal-image').innerHTML = `<div class="mb-3 px-24 py-32 mt-5 bg-cover bg-no-repeat bg-[url(` + `'<?= base_url('/image/uploaded/') ?>${data.image}'` + `)] w-fit"></div>`;
                        }
                        if (data.category.length > 0) {
                            var str = "";
                            data.category.forEach(elem => {
                                str += `<div class="px-3 py-1 rounded-md w-fit text-[12px] bg-pureBlack/85 hover:bg-pureBlack/100 duration-200 text-color1 mb-2">${elem.name_category}</div>`
                            });

                            document.getElementById('modal-category').innerHTML = str;
                        } else {
                            document.getElementById('modal-category').innerHTML = ` <div class="px-3 py-1 rounded-md w-fit text-[12px] bg-red-600/95 hover:bg-red-600/100 duration-200 text-color1 mb-2">Empty Category</div>`;
                        }
                        console.log(data, e, linkEdit);

                    }
                </script>

            </table>
        </div>
    </div>

    <!-- Pagination -->
    <nav class="flex mt-4 mx-auto md:w-8/12 items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
        </ul>
    </nav>



</div>
</div>

<?= view('./component/footer-tw') ?>