<div class="bg-[#27272C]">
    <?= view('./component/header-tw') ?>

    <div class="container gap-footer font-mono">

        <div class="flex container mx-auto items-start">

            <div class="md:w-2/12 min-h-[100vh] pt-[15vh] flex flex-col justify-center items-center" style="border-right: 1px solid gray;">
                <div class="flex flex-col gap-2">
                    <a href="/<?= session('name') ?>/dashboard">
                        <div class="text-[24px] text-green-400">Library</div>
                    </a>
                    <ul class="list-none font-bold text-green-400/60 cursor-pointer">
                        <?php foreach ($categ as $data) {
                        ?>
                            <li>
                                <a style="color: #4ade80!important" href="/<?= session('name') ?>/dashboard?categ=<?= $data['name_category'] ?>">
                                    <?= $data['name_category'] ?>
                                </a>
                            </li>

                        <?php
                        } ?>
                    </ul>
                    <div class="text-[20px] text-green-400">
                        <a href="/profile/dashboard" class="text-[18px] text-green-400" style="color: rgb(74, 222, 128)!important;">
                            Account
                        </a>
                    </div>
                    <div class="text-[20px] text-green-400">
                        <a href="/backpack/dashboard" class="text-[18px] text-green-400" style="color: rgb(74, 222, 128)!important;">
                            myBackpack
                        </a>
                    </div>
                    <div class="text-[20px] text-green-400">
                        <a href="/my-order/dashboard" class="text-[18px] text-green-400" style="color: rgb(74, 222, 128)!important;">
                            myOrder
                        </a>
                    </div>
                    <form action="/auth/logout" method="post" class="text-[18px] text-green-400">
                        <button type="submit">Logout</button>
                    </form>

                </div>
            </div>


            <div class="md:w-10/12 py-8 px-16 text-white">
                <div class="text-4xl ">Detail Book</div>
                <br>
                <hr class="opacity-50">
                <br>
                <!-- detail -->
                <div class="flex gap-8">
                    <div class="w-fit">
                        <?php if ($book[0]['image'] != '' || $book[0]['image'] != null) {
                        ?>

                            <div class="min-h-[360px] min-w-[250px] max-w-[250px] bg-cover mb-3 bg-center
                            bg-[url('<?= base_url("./image/uploaded/" . $book[0]['image']) ?>')]">

                            </div>

                        <?php
                        } else {
                        ?>
                            <div class="min-h-[360px] min-w-[250px] max-w-[250px] bg-cover bg-center bg-black text-white font-semibold text-xl flex justify-center items-center">
                                No image avaible
                            </div>
                        <?php
                        } ?>

                        <div class="text-sm font-semibold text-green-400">
                            <?php foreach ($book[0]['category'] as $categ) {
                            ?>
                                <span class="me-2"><?= $categ['name_category'] ?></span>
                            <?php
                            } ?>
                            <!-- <span class="me-2">Romance</span>
                            <span class="me-2">Comedy</span> -->
                        </div>
                    </div>

                    <div class="w-fit flex flex-col gap-6">
                        <div class="svg flex gap-6 text-green-400">
                            <div class="flex items-center">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="love">
                                    <path fill="#ff5855" d="M11.332 6.03c-3.517 0-6.368 2.438-6.368 6.872 0 4.434 5.944 8.705 11.039 13.286 5.095-4.581 11.065-8.797 11.065-13.286 0-4.489-2.851-6.872-6.368-6.872-1.855 0-3.533 1.384-4.697 2.749-1.164-1.357-2.823-2.749-4.67-2.749z"></path>
                                    <path fill="none" stroke="#f2f0e7" stroke-linecap="round" stroke-linejoin="round" d="M24.394 13.368c-.013-2.496-1.284-4.255-3.17-5.087"></path>
                                </svg>
                                <?= $book[0]['disukai'] ?>
                            </div>
                            <div class="flex items-center">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="eye" width="32" height="32">
                                    <g>
                                        <g>
                                            <ellipse cx="24" cy="38.2" fill="#45413c" opacity=".15" rx="13.6" ry="1.9"></ellipse>
                                            <path fill="#fff" d="M45.8 20c0 3.7-8 12.1-21.8 12.1S2.2 23.8 2.2 20 10.1 8 24 8s21.8 8.3 21.8 12z"></path>
                                            <path fill="#e0e0e0" d="M24 13.8c10.9 0 18.1 5.1 20.7 9.1.7-1.1 1.1-2.1 1.1-2.9 0-3.7-7.9-12-21.8-12S2.2 16.3 2.2 20c0 .8.4 1.8 1.1 2.9 2.6-3.9 9.8-9.1 20.7-9.1z"></path>
                                            <path fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M45.8 20c0 3.7-8 12.1-21.8 12.1S2.2 23.8 2.2 20 10.1 8 24 8s21.8 8.3 21.8 12z"></path>
                                            <path fill="#656769" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M24 10.8c13.1 0 20.7 8.2 20.8 12 .7-1.1 1-2 1-2.8 0-3.7-7.9-12-21.8-12S2.2 16.3 2.2 20c0 .8.3 1.7 1 2.8.1-3.7 7.7-12 20.8-12z"></path>
                                            <circle cx="24" cy="20" r="9" fill="#b89558"></circle>
                                            <path fill="#947746" d="M30.2 13.6c1.1 1.4 1.8 3.2 1.8 5.1 0 4.4-3.6 8.1-8.1 8.1s-8.1-3.6-8.1-8.1c0-1.9.7-3.7 1.8-5.1-1.5 1.6-2.6 3.9-2.6 6.4 0 5 4 9 9 9s9-4 9-9c0-2.5-1.1-4.8-2.8-6.4z"></path>
                                            <circle cx="24" cy="20" r="9" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></circle>
                                            <circle cx="24" cy="20" r="4" fill="#525252" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></circle>
                                            <circle cx="20.6" cy="15.8" r="3.1" fill="#fff" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></circle>
                                        </g>
                                    </g>
                                </svg>
                                <?= $book[0]['dilihat'] ?>
                            </div>
                        </div>

                        <div class="title">
                            <div class="text-3xl font-medium"><?= $book[0]['title'] ?></div>
                            <div>Was Published at <?= $book[0]['publication_date'] ?> | <?= $book[0]['total_pages'] ?> halaman</div>
                        </div>

                        <div class="decription">
                            <div class="mb-3">
                                <?= $book[0]['description'] ?>
                            </div>
                            <hr>

                            <div class="flex mt-4 gap-6">
                                <div>
                                    <p>Ditulis oleh <span class="text-green-400"><?= $book[0]['penulis'] ?></span></p>
                                    <p>Dipublish oleh <span class="text-green-400"><?= $book[0]['publisher'] ?></span></p>
                                </div>
                                <form action="/pinjamBook" method="post" id="pinjamForm">
                                    <input type="number" name="book_id" value="<?= $book[0]['id'] ?>" hidden>
                                    <button id="pinjamButton" type="submit" style="background-color: #F44336;" class="p-2 hover:opacity-80 text-white rounded-md">Pinjam sekarang</button>
                                </form>

                                <script>
                                    document.getElementById("pinjamForm").addEventListener("submit", function(event) {
                                        alert('This books, has been add to your backpack.');
                                    });
                                </script>

                                <form action="/likeBook" method="post" id="likeForm">
                                    <input type="number" name="book_id" value="<?= $book[0]['id'] ?>" hidden>
                                    <button type="submit" class="p-2 hover:text-green-400 text-white rounded-md">Like </button>
                                </form>

                                <script>
                                    document.getElementById("likeForm").addEventListener("submit", function(event) {
                                        alert('Thanks for giving appericiation!');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- hampir serupa -->
                <?php if (count($relate) >= 3) {
                ?>
                    <div class="flex gap-8 mt-24">
                        <div class="flex-col flex gap-8">
                            <div class="w-fit">
                                <div class="min-h-[360px] min-w-[250px] max-w-[250px] bg-cover mb-3 bg-center
                                        bg-[url('<?= base_url("./image/uploaded/" . $relate[0]['image']) ?>')]">
                                </div>
                                <div class="text-sm font-semibold">
                                    <a href="/<?= session('name') ?>/book/<?= $relate[0]['id'] ?>/ <?= strtolower(str_replace(' ', '-', $relate[0]['title'])) ?>" class="me-2" style="color:#4ade80!important">Show detail book</a>
                                </div>
                            </div>
                            <div class="w-fit gap-6">
                                <div class="min-h-[360px] min-w-[250px] max-w-[250px] bg-cover mb-3 bg-center
                                        bg-[url('<?= base_url("./image/uploaded/" . $relate[1]['image']) ?>')]">
                                </div>
                                <div class="text-sm font-semibold">
                                    <a href="/<?= session('name') ?>/book/<?= $relate[1]['id'] ?>/ <?= strtolower(str_replace(' ', '-', $relate[0]['title'])) ?>" class="me-2" style="color:#4ade80!important">Show detail book</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-4xl pe-24">
                                Beberapa Buku Dari Penulis Yang Sama.
                            </div>

                            <div class="flex mt-8">
                                <div class="w-fit">
                                    <div class="min-h-[360px] min-w-[250px] max-w-[250px] bg-cover mb-3 bg-center
                                        bg-[url('<?= base_url("./image/uploaded/" . $relate[2]['image']) ?>')]">
                                    </div>
                                    <div class="text-sm font-semibold">
                                        <a href="/<?= session('name') ?>/book/<?= $relate[2]['id'] ?>/ <?= strtolower(str_replace(' ', '-', $relate[0]['title'])) ?>" class="me-2" style="color:#4ade80!important">Show detail book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>


                <hr class="opacity-50 mt-8">

                <!-- feedback -->
                <div class="my-12 text-3xl">
                    <?= count($comments) > 0 ? "Apa kata mereka" : "Jadilah yang pertama menanggapi"  ?>
                </div>

                <?php if (count($comments) > 0) {
                ?>
                    <div class="flex mt-4 gap-8 flex-col">
                        <?php foreach ($comments as $data) {
                        ?>
                            <?php if ($data['keterangan'] == 'ganjil') {
                            ?>
                                <div class="card flex gap-4">
                                    <div class="profile <?= $data['image'] == null || empty($data['image']) ? "bg-black" : "bg-[url('http://localhost:8080/image/asset/$data[image]')]" ?> rounded-full bg-cover bg-center w-20 h-20">

                                    </div>
                                    <div class="content">
                                        <div class="flex gap-8 justify-between items-end mb-2">
                                            <div class="name text-green-400 text-sm mb-3"><?= $data['name'] ?></div>
                                            <div class="flex gap-2">
                                                <?php for ($i = 0; $i < $data['rating']; $i++) {
                                                ?>
                                                    <img width="32" height="16" src="<?= base_url('./image/asset/star.png') ?>" alt="">
                                                <?php
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="bg-slate-400 p-4 max-w-[550px]" style="border-radius: 0px 30px 30px 30px;">
                                            <p>
                                                <?= $data['content'] ?>
                                            </p>
                                            <p class="pt-4 text-sm text-[#1f1f1f]">
                                                <?= $data['tanggal'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="card flex gap-4 ms-auto">
                                    <div class="content">
                                        <div class="flex gap-8 justify-between items-end mb-2">
                                            <div class="name text-green-400 text-sm mb-3"><?= $data['name'] ?></div>
                                            <div class="flex gap-2">
                                                <?php for ($i = 0; $i < $data['rating']; $i++) {
                                                ?>
                                                    <img width="32" height="16" src="<?= base_url('./image/asset/star.png') ?>" alt="">
                                                <?php
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="bg-slate-400 p-4 max-w-[550px]" style="border-radius: 0px 30px 30px 30px;">
                                            <p>
                                                <?= $data['content'] ?>
                                            </p>
                                            <p class="pt-4 text-sm text-[#1f1f1f]">
                                                <?= $data['tanggal'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="profile bg-black rounded-full w-20 h-20">

                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        <?php
                        } ?>
                    </div>
                <?php
                } ?>

                <div class="my-20">
                    <style>
                        ::placeholder {
                            color: white !important;
                            opacity: 1;
                            /* Untuk memastikan warna tetap solid */
                        }
                    </style>
                    <form action="/sendComment" method="post" class="w-fit me-auto font-mono">
                        <div class="flex items-start gap-6">
                            <div class="profile bg-black rounded-full w-20 h-20">

                            </div>
                            <div>
                                <input type="number" name="book_id" value="<?= $book[0]['id'] ?>" hidden>
                                <label for="" class="text-green-400 mb-6"><?= strtoupper(session('name')) ?></label> <br>
                                <textarea name="message" style="height: fit-content!important; background-color: #94a3b8!important; color:white!important; font-size:16px!important;" class="rounded-none text-[16px]" name="" id="" cols="100" rows="3" placeholder="Type something about this book.."></textarea>
                            </div>
                            <div class="flex flex-col gap-4">
                                RATE
                                <select name="rating" id="" class="text-black">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <button type="submit" style="background-color: #2f2f2f!important; " class="p-2 mt-auto h-fit w-fit rounded-md">Send Feedback</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <?= view('./component/footer-tw') ?>
    </div>
</div>