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
        <div class="w-8/12 bg-gray-400 h-[200px]"></div>
        <div class="w-4/12 bg-gray-400 h-[200px]"></div>
      </div>
      <!-- row2 -->
      <div class="flex gap-[24px] mb-[24px] group">
        <div class="w-3/12 h-[400px] ">
          <h2 class="text-7xl font-medium">Our Library</h2>
          <img src="<?= base_url('./image/icon/up_64_black.png') ?>" alt="" class="mt-4 group-hover:pt-8 duration-400 transition-all">
        </div>
        <div class="w-5/12 bg-gray-400 h-[400px]"></div>
        <div class="w-4/12 bg-gray-400 h-[400px]"></div>
      </div>
      <!-- row3 -->
      <div class="flex gap-[24px] mb-[24px]">
        <div class="w-4/12 bg-gray-400 h-[200px]"></div>
        <div class="w-8/12 bg-gray-400 h-[200px]"></div>
      </div>
      <!-- row4 -->
      <div class="flex gap-[24px] mb-[24px]">
        <div class="w-4/12 bg-gray-400 h-[200px]"></div>
        <div class="w-4/12 bg-gray-400 h-[200px]"></div>
        <div class="w-4/12 bg-gray-400 h-[200px]"></div>
      </div>
    </div>
  </div>
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