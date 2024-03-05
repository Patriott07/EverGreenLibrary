<!-- 
  Halaman ini dibuat menggunakan tailwind
 -->

<!-- merender Header-tw.php -->
<?= view('./component/header-tw') ?>


<!-- Start Navbar -->

<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
  <div class="container">
    <div class="flex items-center justify-between relative">
      <div class="px-4">
        <a href="home" class="block py-4 px-5"><?= view('./component/NavbarWithLogo-bs') ?></a>
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
<section id="home" class="p-10 mx-8 mt-24">
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


<!-- about -->
<div class="mt-9 flex justify-center">
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
                <div data-index="0" class="card-person  rounded-lg grayscale hover:grayscale-0" style="background-image: url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D');">
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
                    Patriot Abdi Nuruzzaki
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
<div class="mt-9 flex justify-center bg-green-400">
    <div class="container md:w-10/12 px-16 pt-16">
      <div class="font-bold text-5xl ff1 text-color2">FITUR DI</div>
      <div class="font-bold text-9xl ff1 text-color2">EverGreen</div>
    </div>
</div>
<div class=" bg-green-400 pt-8 pb-16">
    <div class="container md:ml-[13%] w-screen">
     <div class="card-feature group flex w-[250px] h-[300px] bg-pureBlack hover:shadow-3xl hover:shadow-color1 hover:bg-pureBlack/90">
       <div class="content text-sm bg-color1 group-hover:p-4 overflow-hidden">
        <span class="text-2xl font-medium">#1</span>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quaerat. Eaque in, odio autem assumenda laborum dicta velit tenetur, officia eos ipsa, tempora voluptatum repellendus nemo a! Reiciendis, sapiente saepe!
       </div>
        <h1 class="text-6xl text-center font-bold m-auto text-color1 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Hover me</h1>
     </div>
    </div>
</div>


<!-- Gallery -->
<div class="mt-9 flex justify-center">
  <div class="container md:w-10/12">
    <div class="swiper-2">
      <div class="swiper-wrapper">
        <div class="swiper-slide w-96 mb-8">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
        </div>
        <div class="swiper-slide w-96">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
        </div>
        <div class="swiper-slide w-96">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide w-96">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide w-96">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
      </div>
      <div class="text-end mt-8 text-pureBlack swiper-pagination"></div>
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