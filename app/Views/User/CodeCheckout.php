<div class="bg-[#27272C]">
    <?= view('./component/header-tw') ?>

    <div class="gap-footer font-mono">

        <div class="flex min-h-[100vh] pt-[25vh] mx-auto items-center justify-center">
            <div class="w-fit">
                <div class="text-center mx-auto">
                    <div class="text-4xl font-semibold text-white">Your Code Checkout is</div>
                    <div class="w-40 mx-auto mb-4 mt-2">
                        <hr class="opacity-50">
                        <br>
                    </div>
                    <div class="text-xl font-semibold text-white mb-5">$34t1kksaiiiqyeoo002993</div>
                    <div class="text-normal w-fit p-2 mx-auto font-semibold rounded-md bg-color5 text-white mb-8">Copy to my clipboard</div>

                    <div class="p-12 bg-white/20 mx-0 rounded-md text-white max-w-[650px] mb-6">
                        <h1 class="text-xl font-medium text-left ">How to exchange code checkout?</h1>
                        <ol class="mt-4 flex flex-col gap-3">
                            <li class="text-left">1. Go to Evergreen Library</li>
                            <li class="text-left">2. Cari buku yang ingin anda pinjam</li>
                            <li class="text-left">3. Jika kesusahan mencari buku yang anda inginkan, kamu diberi kebebasan untuk bertanya kepada staff Evergreen</li>
                            <li class="text-left">4. Setelah mengambil beberapa buku yang sesuai seperti yang anda isi diformulir, pergi menuju ruang peminjaman.</li>
                            <li class="text-left">5. Selanjutnya berikan code checkout kepada staff Evergreen</li>
                            <li class="text-left">6. Enjoy your book!</li>
                    </div>

                    <div class="text-center flex flex-col gap-4">
                        <div class="text-2xl text-color4">Dont Forget to copy or capture the code.</div>
                        <a href="/<?= session('name') ?>/dashboard">
                            <div class="text-[18px] text-white underline-offset-4" style="text-decoration: underline!important;">
                                Bring me back
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <?= view('./component/footer-tw') ?>
    </div>
</div>