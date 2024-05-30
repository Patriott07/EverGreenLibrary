<div class="bg-[#27272C]">
    <?= view('./component/header-tw') ?>
    <?= session()->has('sessionerror') ? "<script>alert('You cant acces backpack page. you have been order book.')</script>" : '' ?>

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
                                <a style="color: #4ade80!important" href="?categ=<?= $data['name_category'] ?>">
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
                <div class="text-4xl "><?= $judul ?></div>
                <br>
                <hr class="opacity-50">
                <br>
                <div class="me-auto mb-8">
                    <div class="text-end">Tampilkan berdasarkan : </div>
                    <ul class="flex gap-3 cursor-pointer justify-end text-sm text-green-400 underline underline-offset-4" style="text-decoration-color: white; text-decoration:underline!important">
                        <li><a style="color: #4ade80!important" href="?new=true">Terbaru</a></li>
                        <li><a style="color: #4ade80!important" href="?populer=true">Paling populer</a></li>
                        <li><a style="color: #4ade80!important" href="?liked=true">Paling disukai</a></li>
                    </ul>
                </div>

                <!-- card book -->

                <div class="flex flex-wrap  gap-x-6 gap-y-16 py-4">
                    <?php foreach ($books as $data) {
                        $slug = strtolower(str_replace(' ', '-', $data['title']));
                    ?>
                     
                        <a href="<?= base_url("/".session('name')."/book/$data[id]/$slug") ?>">
                            <div class="card hover:translate-y-[-12px] transition-all duration-300 group min-w-[250px] max-w-[250px] flex flex-col gap-3">
                                <?php if ($data['image'] == null) {
                                ?>
                                    <div class="min-h-[370px] max-h-[370px] bg-cover bg-center bg-black text-white font-semibold text-xl flex justify-center items-center">
                                        No image avaible
                                    </div>
                                    
                                    <?php
                                } else {
                                    ?>
                                    <div class="min-h-[370px] max-h-[370px] bg-cover bg-center bg-[url('<?= base_url("./image/uploaded/" . $data['image']) ?>')]">
                                    </div>

                                <?php
                                } ?>
                                <div class="title text-[18px] font-medium text-white"><?= $data['title'] ?> </div>
                                <div class="title text-[14px] font-medium text-white group-hover:text-green-400"><?= $data['penulis'] ?></div>
                            </div>
                        </a>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <?= view('./component/footer-tw') ?>
    </div>
</div>