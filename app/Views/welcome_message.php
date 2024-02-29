<!-- 
  Halaman ini dibuat menggunakan tailwind
 -->

<!-- merender Header-tw.php -->
<?= view('./component/header-tw') ?>

<!-- Test logo -->
<?= view('./component/NavbarWithLogo-bs')?>


<!-- Start Navbar -->
<nav class="bg-white border-gray-200 dark:bg-emerald-800">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
    <!-- Logo di navbar beserta slogan brand -->
      <!-- <img src="#" class="h-8" alt="#" /> -->
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">#</span>
  </a>
  <div class="flex md:order-2">
    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
      </svg>
      <span class="sr-only">Search</span>
    </button>
    <div class="relative hidden md:block">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search icon</span>
      </div>
      <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for some books">
    </div>
    <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
      <div class="relative mt-3 md:hidden">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </div>
        <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-emerald-700 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
      </div>
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg bg-emerald-100 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        <li>
        <a href="#" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:bg-transparent md:p-0">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:bg-transparent md:p-0">About</a>
        </li>
        <li>
        <a href="#" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:bg-transparent md:p-0">Library</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->


<!-- Start Section -->
<section id="home" class="p-10 mx-8">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4">
                <h1 class="text-base font-semibold text-emerald-900">Selamat Datang Di <span class="block mt-1 text-2xl font-bold text--800">EVERGREENLIBRARY</span></h1>
                <p class="mt-2 mb-10 text-slate-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>


                <a href="#" class="text-base self-start py-3 px-4  text-white bg-emerald-600 font-semibold rounded-full hover:shadow-lg hover:bg-emerald-400">Jelajahi sekarang</a>
            </div>
        </div>
        <!-- Menambahkan Image di sebelah kanan untuk deskop -->
        <div class="w-full self-end px-4">
        <div class="mt-10">
            <img src="" alt="">
        </div>
        </div>
    </div>
</section>

<!-- merender footer-tw.php -->
<?= view('./component/footer-tw') ?>
