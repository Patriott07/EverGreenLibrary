<!-- 
  Halaman ini dibuat menggunakan tailwind
 -->

<!-- merender Header-tw.php -->
<?= view('./component/header-tw') ?>

<!-- Notification -->

<?php if (session()->has('suc')) { ?>

  <div id="message" class="absolute right-10 cursor-pointer top-5 mt-2 px-6 py-4 bg-white rounded-lg shadow w-3/12 z-20">
    <div class=" inline-flex items-center justify-between w-[100%]">
      <div class="inline-flex items-center">
        <img src="https://cdn-icons-png.flaticon.com/512/893/893257.png" alt="Messages Icon" class="w-6 h-6 mr-3">
        <h3 class="font-bold text-base text-gray-800">Messages</h3>
      </div>
      <p class="text-[10px] text-gray-500">
        Click to hide
      </p>
    </div>
    <p class="mt-1 text-sm">
      <?= session('suc') ?>
    </p>
  </div>

<?php } ?>



<!-- Hero section -->
<div class="flex bg-pureBlack h-[150vh] bg-blend-multiply bg-cover bg-fixed" style="background-image: url('https://uiii.ac.id/assets/images/1636690539-alfons-morales-YLSwjSy7stw-unsplash-2.jpg')">

  <div class="md:w-10/12 mx-auto">
    <!-- nav -->
    <nav class="bg-transparent w-full md:px-4 sm:px-0 z-20 top-0 start-0 ">
      <div class="flex flex-wrap items-center justify-between mx-auto p-4">
        <img src="<?= base_url('./image/logo-dark.png') ?>" class="" alt="Flowbite Logo">
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="/signin" type="submit" class="button-icon hover:shadow-2xl shadow-color4 bg-white flex justify-between mt-3 gap-2 items-center">
            <div class="text-pureBlack font-medium ">
              Sign in
            </div>
            <div class="icon">
              <img src="<?= base_url('./image/icon/send.png') ?>" alt="" srcset="">
            </div>
          </a>
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
          </button>
        </div>
        <div class="items-center justify-center hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col md:gap-3 p-4 md:p-0 mt-4 font-medium rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 ">
            <li>
              <a href="#home" class="block text-xm link-w-underline px-1 text-white" style="color: #fff!important" aria-current="page">Home</a>
            </li>
            <li>
              <a href="#about" class="block text-xm link-w-underline px-1" style="color: #fff!important">About</a>
            </li>
            <li>
              <a href="#fiture" class="block text-xm link-w-underline px-1 " style="color: #fff!important">Fiture</a>
            </li>
            <li>
              <a href="#gallery" class="block text-xm link-w-underline px-1" style="color: #fff!important">Gallery</a>
            </li>
            <li>
              <a href="#feedback" class="block text-xm link-w-underline px-1" style="color: #fff!important">Feedback</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="mt-8 flex justify-end">
      <div class="md:w-5/12 text-color1 text-[18px]">
        <p>
         Evergreen Library adalah situs untuk mendapatkan buku terbaru dengan mudah dan cepat. Jadikan setiap momenmu, momen bersama kami.
        </p>
        <a href="/signin" class="inline link-w-underline mt-3 text-sm">Saya ingin baca sekarang
        </a>
      </div>
    </div>

    <!-- content -->

    <div class="mt-3 flex justify-between items-end gap-6 group">
      <div class="md:w-8/12 text-color1 text-[18px]">
        <span class="text-[58px] font-bold">FIND NEW</span>
        <span class="text-[110px] font-bold md:ms-2 transition-all duration-1000  bg-gradient-to-tr from-green-600 to-purple-700 text-transparent group-hover:bg-gradient-to-br group-hover:from-green-300 delay-150 bg-clip-text">BOOKS</span>
        <div class="hover:opacity-50 transition-all duration-200 h-[350px] w-[100%] bg-top bg-fixed opacity-40 bg-blend-multiply" style="background-image: url('https://images.prismic.io/wellcomecollection/831aa0b9-4507-4ed3-b061-5e3ac58d2600_EP_000779_038_Full.jpg?w=1338&auto=compress%2Cformat&rect=0%2C0%2C4000%2C2250&q=50');">

        </div>

      </div>
      <div class="md:w-4/12 text-color1 text-[18px]">
        <div class="flex items-start justify-between gap-2">
          <div class="w-fit">
            <h1><span class="text-[58px] font-bold">IN</span></h1>
            <h1><span class="text-[70px] font-bold">YOUR</span></h1>
          </div>
          <div class="w-fit">
            <h1>
              <span class="text-[100px] transition-all duration-500 group-hover:bg-gradient-to-br text-transparent font-bold md:ms-2 bg-clip-text bg-gradient-to-tr from-green-600 to-purple-700">LIFE</span>
            </h1>
          </div>
        </div>

      </div>
    </div>

    <!--  -->
    <div class="flex md:mt-24 ">
      <div class="md:w-11/12 mx-auto flex justify-between items-center">
        <div class="w-fit text-[24px] text-color1">
          <p class="font-medium text-[14px]">
            Cirebon jakarta timur 12.
          </p>
        </div>
        <div class="w-fit">
          <a href="/signup" class="inline link-w-underline mt-3 text-sm">Join Members Evergeen
          </a>
        </div>
      </div>

    </div>
  </div>
</div>




<!-- Start Section -->
<!-- <section id="home" class="p-10 mx-8 mt-24">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="w-full self-center px-4">
        <h1 class="text-lg font-bold text-emerald-900">-Selamat Datang Di <span class="block mt-1 text-5xl font-bold text--800">EverGreen Library</span></h1>
        <p class="mt-2 mb-10 text-slate-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" class="text-base self-start py-3 px-4  text-white bg-emerald-600 font-semibold rounded-full hover:shadow-lg hover:bg-emerald-400">Jelajahi sekarang</a>
      </div>
    </div>
    Menambahkan Image di sebelah kanan untuk deskop 
    <div class="w-full self-end px-4">
      <div class="mt-10">
        <img src="" alt="">
      </div>
    </div>
  </div>
</section>
-->


<!-- about -->
<div class="mt-9 flex justify-center" id="about">
  <div class="container md:w-10/12 py-4">
    <div class="text-center font-bold text-5xl mb-16">About</div>
    <div class="flex gap-4 justify-between items-center">
      <div class="md:w-6/12">
        <div class="text-xm text-gray-500 my-4">Hover me</div>
        <div style="overflow-x: auto;">

          <!-- <div class="container-card flex items-center gap-3 flex-nowrap">
            <div class="w-fit">
              <h1 class="text-5xl mx-2 font-medium">
                S <br>
                T <br>
                A <br>
                R <br>
                T <br>
              </h1>
            </div>
            <div data-index="0" class="card-person grayscale hover:grayscale-0" style="background-image: url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
              <span>
                Patriot Abdi Nuruzzaki
              </span>
              <p class="person-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae dolorum explicabo eveniet quidem reiciendis maxime suscipit velit dolores minima?
              </p>

            </div>
            <div data-index="1" class="card-person">
              <span>
                Patriot Abdi Nuruzzaki
              </span>
              <p class="person-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae dolorum explicabo eveniet quidem reiciendis maxime suscipit velit dolores minima?
              </p>

            </div>
            <div data-index="2" class="card-person">
              <span>
                Patriot Abdi Nuruzzaki
              </span>
              <p class="person-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae dolorum explicabo eveniet quidem reiciendis maxime suscipit velit dolores minima?
              </p>

            </div>
           

            <div class="w-fit">
              <h1 class="text-5xl mx-2 font-medium">
                E <br>
                N <br>
                D <br>
              </h1>
            </div>

          </div> -->

          <div class="swiper" id="swiper1">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper gap-4">
              <!-- Slides -->
              <div class="swiper-slide">
                <div data-index="0" class="card-person grayscale hover:grayscale-0" style="background-image: url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                  <span>
                    Patriot Abdi Nuruzzaki
                  </span>
                  <p class="person-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae dolorum explicabo eveniet quidem reiciendis maxime suscipit velit dolores minima?
                  </p>

                </div>
              </div>
              <div class="swiper-slide">
                <div data-index="0" class="card-person grayscale hover:grayscale-0" style="background-image: url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                  <span>
                    Jahdan Pandita
                  </span>
                  <p class="person-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae dolorum explicabo eveniet quidem reiciendis maxime suscipit velit dolores minima?
                  </p>

                </div>
              </div>
              <div class="swiper-slide">
                <div data-index="0" class="card-person grayscale hover:grayscale-0" style="background-image: url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                  <span>
                    Ang Badarudin
                  </span>
                  <p class="person-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae dolorum explicabo eveniet quidem reiciendis maxime suscipit velit dolores minima?
                  </p>

                </div>
              </div>
              <div class="swiper-slide">
                <div data-index="0" class="card-person grayscale hover:grayscale-0" style="background-image: url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                  <span>
                    Rismawati Wahyu H
                  </span>
                  <p class="person-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae dolorum explicabo eveniet quidem reiciendis maxime suscipit velit dolores minima?
                  </p>

                </div>
              </div>
              <div class="swiper-slide">
                <div data-index="0" class="card-person grayscale hover:grayscale-0" style="background-image: url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
                  <span>
                    Nazwa Cantika
                  </span>
                  <p class="person-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae dolorum explicabo eveniet quidem reiciendis maxime suscipit velit dolores minima?
                  </p>

                </div>
              </div>
              
            </div>
            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination"></div> -->

            <!-- If we need navigation buttons -->

            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
          </div>
        </div>

        <div class="text-xm text-gray-500 mt-16" id="job">Leader Ui Designer | Frontend | Backend</div>

      </div>
      <div class="md:w-5/12 text-justify">
        <p class="text-sm">
          Evergreen Library adalah wadah pengetahuan yang inklusif dan progresif. Sebagai pusat kegiatan literasi komunitas, kami berkomitmen untuk memberikan akses yang luas dan kesempatan belajar yang berkelanjutan bagi semua. Dengan koleksi yang kaya dan beragam, kami membangun inspirasi, pengetahuan, dan koneksi yang mendorong pertumbuhan intelektual dan budaya. Melalui program-program inovatif, layanan interaktif, dan kolaborasi dengan mitra lokal, kami bertujuan untuk menciptakan ruang yang ramah, merangsang, dan memberdayakan. Evergreen Library adalah tempat di mana impian diterjemahkan menjadi karya, dan kehidupan diperkaya dengan cerita yang tak terbatas.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Fitur -->
<div class="mt-9 flex justify-center bg-pureBlack">
  <div class="container md:w-10/12 px-16 pt-16">
    <div class="font-bold text-5xl ff1 text-color1">FITUR DI</div>
    <div class="font-bold text-9xl ff1 text-color1">EverGreen</div>
  </div>
</div>
<div class=" bg-pureBlack pt-8 pb-16">
  <div style="overflow-x: auto;">
    <div class="container flex flex-nowrap gap-[30px] md:ml-[13%] w-screen">
      <!-- Card feature -->
      <div class="card-feature group flex max-w-[250px] min-w-[250px] min-h-[300px] max-h-[300px] bg-pureBlack shadow-4xl hover:shadow-[white] hover:bg-pureBlack/90">
        <div class="content text-sm bg-color1 group-hover:p-4 overflow-hidden">
          <span class="text-2xl font-medium">#1</span>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quaerat. Eaque in, odio autem assumenda laborum dicta velit tenetur, officia eos ipsa, tempora voluptatum repellendus nemo a! Reiciendis, sapiente saepe!
        </div>
        <h1 class="text-6xl text-center font-bold m-auto text-color1 bg-clip-text text-transparent bg-gradient-to-r hover:bg-gradient-to-l from-pink-500 to-violet-500 ">Hover me</h1>
      </div>

      <div class="card-feature group flex max-w-[250px] min-w-[250px] min-h-[300px] max-h-[300px] bg-pureBlack shadow-4xl hover:shadow-[white] hover:bg-pureBlack/90">
        <div class="content text-sm bg-color1 group-hover:p-4 overflow-hidden">
          <span class="text-2xl font-medium">#1</span>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quaerat. Eaque in, odio autem assumenda laborum dicta velit tenetur, officia eos ipsa, tempora voluptatum repellendus nemo a! Reiciendis, sapiente saepe!
        </div>
        <h1 class="text-6xl text-center font-bold m-auto text-color1 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Hover me</h1>
      </div>

      <div class="card-feature group flex max-w-[250px] min-w-[250px] min-h-[300px] max-h-[300px] bg-pureBlack shadow-4xl hover:shadow-[white] hover:bg-pureBlack/90">
        <div class="content text-sm bg-color1 group-hover:p-4 overflow-hidden">
          <span class="text-2xl font-medium">#1</span>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quaerat. Eaque in, odio autem assumenda laborum dicta velit tenetur, officia eos ipsa, tempora voluptatum repellendus nemo a! Reiciendis, sapiente saepe!
        </div>
        <h1 class="text-6xl text-center font-bold m-auto text-color1 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Hover me</h1>
      </div>

      <div class="card-feature group flex max-w-[250px] min-w-[250px] min-h-[300px] max-h-[300px] bg-pureBlack shadow-4xl hover:shadow-[white] hover:bg-pureBlack/90">
        <div class="content text-sm bg-color1 group-hover:p-4 overflow-hidden">
          <span class="text-2xl font-medium">#1</span>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quaerat. Eaque in, odio autem assumenda laborum dicta velit tenetur, officia eos ipsa, tempora voluptatum repellendus nemo a! Reiciendis, sapiente saepe!
        </div>
        <h1 class="text-6xl text-center font-bold m-auto text-color1 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Hover me</h1>
      </div>
      <div class="card-feature group flex max-w-[250px] min-w-[250px] min-h-[300px] max-h-[300px] bg-pureBlack shadow-4xl hover:shadow-[white] hover:bg-pureBlack/90">
        <div class="content text-sm bg-color1 group-hover:p-4 overflow-hidden">
          <span class="text-2xl font-medium">#1</span>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quaerat. Eaque in, odio autem assumenda laborum dicta velit tenetur, officia eos ipsa, tempora voluptatum repellendus nemo a! Reiciendis, sapiente saepe!
        </div>
        <h1 class="text-6xl text-center font-bold m-auto text-color1 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Hover me</h1>
      </div>

    </div>
  </div>
</div>


<!-- Gallery -->
<div>

  <div class="text-center py-16">
    <span class="text-9xl font-bold">Gallery</span>
    <span class="text-4xl font-medium">Evergreen Library</span>
  </div>

  <div class="flex">
    <div class="md:w-10/12 mx-auto">
      <!-- row1 -->
      <div class="flex gap-[24px] mb-[24px]">
        <div class="w-8/12 bg-gray-400 h-[500px] bg-[url('https://images.unsplash.com/photo-1568667256549-094345857637?q=80&w=1430&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center"></div>
        <div class="w-4/12 bg-gray-400 h-[500px] bg-[url('https://images.unsplash.com/photo-1555116505-38ab61800975?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGxpYnJhcnl8ZW58MHwxfDB8fHww')] bg-cover bg-center"></div>
      </div>
      <!-- row2 -->
      <div class="flex gap-[24px] mb-[24px] group">
        <div class="w-3/12 h-[400px] ">
          <h2 class="text-7xl font-medium">Our Library</h2>
          <img src="<?= base_url('./image/icon/up_64_black.png') ?>" alt="" class="mt-4 group-hover:pt-8 duration-400 transition-all">
        </div>
        <div class="w-5/12 bg-gray-400 h-[400px] bg-[url('https://images.unsplash.com/photo-1568667256531-7d5ac92eaa7a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGxpYnJhcnl8ZW58MHwxfDB8fHww')] bg-center bg-cover"></div>
        <div class="w-4/12 bg-gray-400 h-[400px] bg-[url('https://images.unsplash.com/photo-1476081718509-d5d0b661a376?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGxpYnJhcnl8ZW58MHwxfDB8fHww')] bg-center bg-cover"></div>
      </div>
      <!-- row3 -->
      <div class="flex gap-[24px] mb-[24px]">
        <div class="w-4/12 bg-gray-400 h-[400px] bg-cover bg-center bg-[url('https://plus.unsplash.com/premium_photo-1681681082129-1b81d47b28fb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fGxpYnJhcnl8ZW58MHwxfDB8fHww')]"></div>
        <div class="w-8/12 bg-gray-400 h-[400px] bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1544185310-0b3cf501672b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjh8fGxpYnJhcnl8ZW58MHwxfDB8fHww')]"></div>
      </div>
      <!-- row4 -->
      <div class="flex gap-[24px] mb-[24px]">
        <div class="w-4/12 bg-gray-400 h-[300px] bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1595315342809-fa10945ed07c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDB8fGxpYnJhcnl8ZW58MHwxfDB8fHww')]"></div>
        <div class="w-4/12 bg-gray-400 h-[300px] bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1564910443496-5fd2d76b47fa?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fGxpYnJhcnl8ZW58MHwxfDB8fHww')]"></div>
        <div class="w-4/12 bg-gray-400 h-[300px] bg-cover bg-center bg-[url('https://plus.unsplash.com/premium_photo-1661964081818-32d09be259c4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzQxfHxsaWJyYXJ5fGVufDB8MXwwfHx8MA%3D%3D')]"></div>
      </div>
    </div>
  </div>
  <div class="mt-9 flex justify-center">
    <div class="container md:w-10/12">
      <div class="swiper-2">
        <div class="swiper-wrapper">
          <div class="swiper-slide w-96 mb-8">
            <img src="https://images.unsplash.com/photo-1643981816389-5a637f803b18?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzc4fHxsaWJyYXJ5fGVufDB8MXwwfHx8MA%3D%3D" />
          </div>
          <div class="swiper-slide w-96">
            <img src="https://images.unsplash.com/photo-1571074995607-2a845a372d40?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzc5fHxsaWJyYXJ5fGVufDB8MXwwfHx8MA%3D%3D" />
          </div>
          <div class="swiper-slide w-96">
            <img src="https://images.unsplash.com/photo-1619448473282-bdcea8020cdd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzk1fHxsaWJyYXJ5fGVufDB8MXwwfHx8MA%3D%3D" />
          </div>
          <div class="swiper-slide w-96">
            <img src="https://images.unsplash.com/photo-1598431275159-816fed9c4191?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzk2fHxsaWJyYXJ5fGVufDB8MXwwfHx8MA%3D%3D" />
          </div>
          <div class="swiper-slide w-96">
            <img src="https://images.unsplash.com/photo-1566314748936-ad5426525f3e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDA5fHxsaWJyYXJ5fGVufDB8MXwwfHx8MA%3D%3D" />
          </div>
        </div>
        <div class="text-end mt-8 text-pureBlack swiper-pagination"></div>
      </div>
    </div>
  </div>
</div>

<!-- most viewed books -->
<div class="py-28 bg-pureBlack flex">
  <div class="md:w-10/12 mx-auto">
    <div class="flex justify-between items-center">
      <div class="md:w-fit">
        <div class="w-[400px] bg-slate-300 h-[500px]"></div>
      </div>
      <div class="md:w-7/12">
        <div class="text-[18px] rounded-full bg-color3 p-2 font-medium inline">
          #1 The most people like it book on our library
        </div>
        <div class="text-5xl text-color4 font-bold mt-4 ">
          Janji hujan tak pulang.
        </div>

        <p class="mt-4 text-sm text-color5">
          Penulis : James Brian | Filosofis, Tairtale, Fisika | Publisher : AgendaCompny
        </p>

        <div class="mt-8 text-color1">
          <span class="text-[28px]">Sinopsis : </span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea aliquam necessitatibus, maiores architecto asperiores ratione praesentium nostrum cupiditate quisquam quidem deserunt voluptas esse! Laboriosam, et modi natus doloremque beatae facilis.
        </div>


      </div>
    </div>
  </div>
</div>

<!-- feedback -->
<div class="py-8 bg-color4 flex relative">
  <div class="md:w-10/12 bg-white mx-auto">
    <div class="flex py-24">
      <div class="md:w-10/12 bg-white mx-auto">
        <h2 class="text-[80px] text-pureBlack font-medium">Feedback</h2>
        <h2 class="text-[30px] text-pureBlack font-bold">FOR EVERGREEN LIBRARY</h2>
        <div class="flex">
          <form class="w-screen mx-auto" method="post" action="/form/feedback/evergreen">
            <textarea class="mt-4 text-medium rounded-2xl h-[170px]" style="max-width: 100%; width:100%; font-size:16px!important; border: 1px solid gray;" id="" cols="100%" rows="8" name="content" required></textarea>
            <div class="mt-2 text-sm text-gray-500">Give me some feedback. quick</div>
            <button type="submit" class="button-icon flex justify-between mt-3 gap-2 items-center">
              <div class="text ff1">
                Submit
              </div>
              <div class="icon">
                <img src="<?= base_url('./image/icon/send.png') ?>" alt="" srcset="">
              </div>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <img src="<?= base_url('./image/image-ffedback.png') ?>" alt="" class="absolute bottom-[90px] right-10 translate-y-1/2" style="z-index: 9">
</div>

<!-- feedback collection -->
<div class="py-24 bg-pureBlack flex relative">
  <div class="md:w-10/12 mx-auto">
    <div class="text-center text-color1 py-16">
      <span class="text-8xl font-bold">Feedback.</span>
      <span class="text-4xl font-medium ms-4">Evergreen Library Members.</span>
    </div>

    <!-- text -->
    <div class="mt-8 flex justify-end items-end gap-4">
      <img src="<?= base_url('./image/icon/up_64_black.png') ?>" alt="">
      <div class="w-80">
        <p class="text-2xl text-color1">
          Testimony langsung dari penikmat Evergreen. Secara singkat dan cepat.
        </p>
        <a href="" class="inline link-w-underline mt-3 text-sm">Saya ingin kirim feedback
        </a>
      </div>
    </div>

    <!-- card -->
    <div class="md:w-10/12 mx-auto py-32">
      <div class="flex gap-6 flex-wrap justify-around items-end">
        <!-- card feedback -->
        <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[450px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
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
        <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[450px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
          <!-- image -->
          <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
          </div>
          <div class="w-8/12 text-color2">
            <div class="overflow-hidden group-hover:overflow-visible">
              <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                Amelia
                <span class="p-2 text-[12px] text-pureBlack bg-color4 invisible group-hover:visible rounded-full w-fit">
                  Pengguna Evergreen
                </span>
              </p>

            </div>
            <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
            </p>
          </div>
        </div>
        <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[450px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
          <!-- image -->
          <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
          </div>
          <div class="w-8/12 text-color2">
            <div class="overflow-hidden group-hover:overflow-visible">
              <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                Amelia
                <span class="p-2 text-[12px] text-pureBlack bg-color4 invisible group-hover:visible rounded-full w-fit">
                  Pengguna Evergreen
                </span>
              </p>

            </div>
            <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
            </p>
          </div>
        </div>
        <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[450px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
          <!-- image -->
          <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
          </div>
          <div class="w-8/12 text-color2">
            <div class="overflow-hidden group-hover:overflow-visible">
              <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                Amelia
                <span class="p-2 text-[12px] text-pureBlack bg-color4 invisible group-hover:visible rounded-full w-fit">
                  Pengguna Evergreen
                </span>
              </p>

            </div>
            <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
            </p>
          </div>
        </div>
        <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[450px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
          <!-- image -->
          <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
          </div>
          <div class="w-8/12 text-color2">
            <div class="overflow-hidden group-hover:overflow-visible">
              <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                Amelia
                <span class="p-2 text-[12px] text-pureBlack bg-color4 invisible group-hover:visible rounded-full w-fit">
                  Pengguna Evergreen
                </span>
              </p>

            </div>
            <p class="text-sm text-color1 py-2 blur-sm group-hover:blur-none">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, cum? Lorem ipsum dolor sit amet.
            </p>
          </div>
        </div>
        <div class="card-feedback group items-end bg-color2 hover:bg-color2/80 md:w-[450px] rounded-3xl p-5 flex gap-5 transition-all duration-300 delay-200">
          <!-- image -->
          <div class="w-[150px] h-[150px] rounded-lg bg-cover bg-no-repeat grayscale group-hover:grayscale-0" style="background-image: url('https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
          </div>
          <div class="w-8/12 text-color2">
            <div class="overflow-hidden group-hover:overflow-visible">
              <p class="transition-all duration-400 text-baseline text-color4 font-medium">
                Amelia
                <span class="p-2 text-[12px] text-pureBlack bg-color4 invisible group-hover:visible rounded-full w-fit">
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


    <!-- text -->
    <div class="mt-8 flex justify-start items-end gap-4">
      <img src="<?= base_url('./image/icon/up_64_black.png') ?>" alt="">
      <div class="w-[400px]">
        <p class="text-2xl text-color1">
          Banyak orang merasakan mudahnya menggunakan Evergreen Library. <br>
          Tunggu apalagi ayo jadi bagian dari kami!
        </p>
      </div>
    </div>
  </div>

</div>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



<!-- merender footer-tw.php -->
<!-- <?php // view('./component/footer-tw') 
      ?> -->
<!-- merender footer-tw.php -->
<?= view('./component/footer-tw') ?>