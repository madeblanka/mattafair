<!DOCTYPE html>
<html lang="en">

<head>
    <title>Matta Fair</title>
    <?php $this->load->view("user/_partials/head.php") ?>
</head>

<body>
    <?php $this->load->view("user/_partials/sidebar.php") ?>
    <div class="flex p-10 gap-10 md:flex-row flex-col">
        <div class="flex-[20%]">
            <img src="<?= base_url('user/assets/img/banner.jpg')?>" class="w-full h-full rounded-lg object-cover" alt="">
        </div>
        <div class="flex-[80%]">

            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?= base_url('user/assets/img/slider1.jpg')?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?= base_url('user/assets/img/slider2.jpg')?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?= base_url('user/assets/img/slider3.jpg')?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?= base_url('user/assets/img/slider4.jpg')?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?= base_url('user/assets/img/slider2.jpg')?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
    </div>
    <div class="justify-end align-end flex pr-10">
        <div class="w-[30%] right-0 ">
            <form>
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search ..." required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="px-10 py-24">
        <h1 class="text-5xl font-semibold mb-10 text-center">Free and Easy Package</h1>
        <div class="carousel-container overflow-hidden ">
            <div class="carousel flex transition-transform duration-300 md:gap-2 lg:gap-6 mx-auto">
                <!-- Your carousel items here -->
                <?php foreach($freeneasy as $f):?>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                        <?php $image = $this->Image_model->getbyIdpackagerow($f->id_package)?>
                            <img class="rounded-t-lg" src="<?= base_url('gallery/'.$image->image1)?>" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $f->hotel?></h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]"></p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">
                            <?php $p = $this->Threeday2n_model->getprice($f->id_package)?>
                            Start From MYR : <?= $p->c?></p>
                            <a href="<?= site_url('main/detailpackage/'.$f->id_package)?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
            <div class=" flex justify-center mt-4">
                <a href="<?= site_url('main/hotelall')?>">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">See All Hotel Packages</button>
                </a>
            </div>
            <!-- Navigation buttons -->
            <div class="carousel-nav flex justify-center mt-4">
                <button class="prev-btn cursor-pointer px-4 py-2 rounded-full bg-[#1f3b6f]  border border-gray-800"><i class="fa-solid fa-arrow-left text-white"></i></button>
                <button class="next-btn cursor-pointer px-4 py-2 rounded-full bg-[#1f3b6f]  border border-gray-800 ml-4"><i class="fa-solid fa-arrow-right text-white"></i></button>
            </div>
        </div>
    </div>




    <!-- tour package -->
    <div class="px-10 py-24">
        <h1 class="text-5xl font-semibold mb-10 text-center">Tour Package</h1>
        <div class="carousel-container overflow-hidden ">
            <div class="carousel1 flex  transition-transform duration-300 md:gap-2 lg:gap-6 mx-auto">
                <!-- Your carousel items here -->
                <?php foreach($tour as $t):?>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="<?= base_url('tour/'.$t->image)?>" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $t->name?></h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="<?= site_url('main/detailtour/'.$t->id_tour)?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
                </div>
            </div>
            <div class=" flex justify-center mt-4">
                <a href="<?= site_url('main/tourall')?>">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">See All Tour Packages</button>
                </a>
            </div>
            <!-- Navigation buttons -->
            <div class="carousel-nav flex justify-center mt-4">
                <button class="prev-btn1 cursor-pointer px-4 py-2 rounded-full bg-[#1f3b6f]  border border-gray-800"><i class="fa-solid fa-arrow-left text-white"></i></button>
                <button class="next-btn1 cursor-pointer px-4 py-2 rounded-full bg-[#1f3b6f]  border border-gray-800 ml-4"><i class="fa-solid fa-arrow-right text-white"></i></button>
            </div>
        </div>
    </div>




    <!-- tour+hotel package -->
    <div class="px-10 py-24">
        <h1 class="text-5xl font-semibold mb-10 text-center">Tour + Hotel Package</h1>
        <div class="carousel-container overflow-hidden ">
            <div class="carousel2 flex transition-transform duration-300 md:gap-2 lg:gap-6 mx-auto">
                <!-- Your carousel items here -->
                <?php foreach($hoteltour as $ht):?>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="./detail_hoteltour.php">
                            <img class="rounded-t-lg" src="<?= base_url('hoteltour/'.$ht->image)?>" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="./detail_hoteltour.php">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $ht->name?></h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.115.000</p>
                            <a href="<?= site_url('main/detailhoteltour/'.$ht->id_hoteltour)?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
            <div class=" flex justify-center mt-4">
                <a href="<?= site_url('main/hoteltourall')?>">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">See All Tour + Hotel Packages</button>
                </a>
            </div>
            <!-- Navigation buttons -->
            <div class="carousel-nav flex justify-center mt-4">
                <button class="prev-btn2 cursor-pointer px-4 py-2 rounded-full bg-[#1f3b6f]  border border-gray-800"><i class="fa-solid fa-arrow-left text-white"></i></button>
                <button class="next-btn2 cursor-pointer px-4 py-2 rounded-full bg-[#1f3b6f]  border border-gray-800 ml-4"><i class="fa-solid fa-arrow-right text-white"></i></button>
            </div>
        </div>
    </div>


    <?php $this->load->view("user/_partials/footer.php") ?>

    
</body>

</html>