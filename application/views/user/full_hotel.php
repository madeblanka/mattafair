<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/_partials/head.php") ?>
    <title>Mattafair - All Hotel Package</title>
</head>

<body>
<?php $this->load->view("user/_partials/sidebar.php") ?>

    <div class="px-10 py-24">
        <h1 class="text-5xl font-semibold mb-10 text-center">All Hotel Package</h1>
        <div class="carousel-container overflow-hidden ">
            <div class="carousel flex flex-wrap transition-transform duration-300 md:gap-2 lg:gap-6 mx-auto">
                <!-- Your carousel items here -->
                <?php foreach($hotel as $h):?>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="<?= site_url('user/hotel/'.$h->image)?>" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $h->name?></h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.115.000</p>
                            <a href="<?= site_url('main/detailhotel/'.$h->id_hotel)?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
    </div>

    <?php $this->load->view("user/_partials/footer.php") ?>
</body>

</html>