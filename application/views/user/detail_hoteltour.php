<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tour Package Detail</title>
</head>

<body class="bg-gray-100">
    <?php include "./partials/navbar.php" ?>

    <section class="p-10">
        <div class="bg-white p-10 rounded-xl">
            <h1 class="font-bold text-3xl ml-2">Myanmar 5D + Hotel Swadikap</h1>
            <h1 class="font-thin text-md mb-10 ml-3">Tour + Hotel</h1>
            <div class="flex md:flex-row flex-col gap-5 ">
                <div class="flex gap-5 md:w-2/3 ">
                    <a data-lightbox="image-1" href="./assets/img/slider1.jpg" alt="">
                        <img src="./assets/img/slider1.jpg" class="rounded-lg w-full h-full object-cover" alt="">
                    </a>
                </div>
                <div class="flex flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                    <a data-lightbox="image-1" href="./assets/img/slider2.jpg" class="rounded-lg w-full  md:full object-cover" alt="">
                        <img src="./assets/img/slider2.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                    </a>
                    <div class="object-cover w-full overflow-hidden  aspect-video bg-red-400 cursor-pointer rounded-xl relative group">
                        <a data-lightbox="image-1" href="./assets/img/slider3.jpg">

                            <div class="flex rounded-xl z-50 opacity-100 h-full cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white  items-center">
                                <div>
                                    <div class="transform-gpu   p-4 space-y-3 text-xl text-center  pb-10 transform ">
                                        <div class="font-semibold text-xs md:text-2xl">See more picture....</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  href="./assets/img/slider3.jpg">
                            <img alt="" class="rounded-lg w-full  md:full object-cover" src="./assets/img/slider3.jpg" />
                        </a>
                    </div>
                </div>
                <div class="hidden flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                    <a data-lightbox="image-1" href="./assets/img/slider2.jpg" class="rounded-lg w-full  md:full object-cover" alt="">
                        <img src="./assets/img/slider2.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                    </a>
                    <a data-lightbox="image-1" href="./assets/img/slider3.jpg" class="rounded-lg w-full  md:full object-cover" alt="">
                        <img src="./assets/img/slider3.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                    </a>
                </div>
            </div>
        </div>
        </div>

        <div class="flex flex-col md:flex-row gap-5">
            <div class="bg-white p-10 rounded-xl mt-10 flex-[50%]">
                <h1 class="font-thin text-md ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia facere delectus minima ipsum. Ipsa autem, sunt facere, voluptatem provident, dolore animi possimus laboriosam sapiente dolorem ullam non enim excepturi magni? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus repellat maxime reprehenderit debitis repellendus ex, expedita veniam cumque vero voluptatem iure alias cupiditate quia. Modi, nostrum temporibus! Sunt, aperiam veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut rerum necessitatibus commodi quo alias, dolorem, dicta harum eligendi exercitationem laudantium qui ducimus architecto voluptates similique repudiandae! In numquam nam non.</h1>

            </div>
            <div class="bg-white p-10 rounded-xl mt-10 flex-[50%]">
                <form>

                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Checkin</label>
                        <div class="flex ">

                            <div date-rangepicker class="flex items-start md:items-center flex-col md:flex-row w-full">
                                <input name="start" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                            </div>

                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                        <div class="flex flex-col md:flex-row gap-10 ">
                            <div class="flex flex-col w-full">
                                <h1 class=" text-sm font-thin mr-4 mb-2 ">Adult</h1>
                                <input type="number" min="1" id="adult" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                            </div>
                            <div class="flex flex-col w-full">
                                <h1 class=" text-sm font-thin mr-4 mb-2 ">Child</h1>
                                <input type="number" min="1" id="child" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <div class="flex">
                            <h1 class="text-md font-bold mr-4 justify-center align-center self-center">MYR</h1>
                            <h1 class="text-md font-bold mr-4 justify-center align-center self-center">1.100.000</h1>
                            <!-- <input type="text" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required> -->
                            <!-- <h1 class="ml-4 text-sm font-thin mr-4 justify-center align-center self-center">Room / Pax / Package</h1> -->
                        </div>
                    </div>

                    <button type="submit" class="w-full text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Book</button>
                </form>
            </div>
        </div>
    </section>
    <!-- tour package -->
    <div class="px-10 py-24">
        <h1 class="text-3xl font-semibold mb-10 text-center">Related Post</h1>
        <div class="carousel-container overflow-hidden ">
            <div class="carousel1 flex  transition-transform duration-300 md:gap-2 lg:gap-6 mx-auto">
                <!-- Your carousel items here -->
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include "./partials/footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="./scripts/input.js"></script>
    <script src="./scripts/index.js"></script>
</body>

</html>