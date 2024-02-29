<!-- 
  Halaman ini dibuat menggunakan tailwind
 -->

<!-- merender Header-tw.php -->
<?= view('./component/header-tw') ?>

<!-- Test logo -->
<?= view('./component/NavbarWithLogo-bs')?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="/public/css/style.css">
<!-- Start Navbar -->

<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
  <div class="container">
    <div class="flex items-center justify-between relative">
      <div class="px-4">
        <a href="home" class="block py-4"><?= view('./component/NavbarWithLogo-bs')?></a>
      </div>
      <div class="flex items-center px-4">
        <button id="hamburger" name="hamburger" type="button" class=" block absolute right-4">
          <span class="w-[30px] h-[2px] my-2 block bg-emerald-900"></span>
          <span class="w-[30px] h-[2px] my-2 block bg-emerald-900"></span>
          <span class="w-[30px] h-[2px] my-2 block bg-emerald-900"></span>
        </button>
      </div>
    </div>
  </div>

</header>

<!-- End Navbar -->


<!-- Start Section -->
<section id="home" class="p-10 mx-8 mt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4">
                <h1 class="text-lg font-bold text-emerald-900">-Selamat Datang Di <span class="block mt-1 text-5xl font-bold text--800">EverGreen Library</span></h1>
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

<script src="public/js/script.js"></script>

<!-- merender footer-tw.php -->
<?= view('./component/footer-tw') ?>
