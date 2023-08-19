<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/_partials/head.php") ?>
    <title>Room Details</title>
</head>

<body class="bg-gray-100">
    <?php $this->load->view("user/_partials/sidebar.php") ?>
    <?php foreach($package as $p):?>
    <section class="p-10">
        <div class="bg-white p-10 rounded-xl">
            
            <div class="flex md:flex-row flex-col gap-5 ">
                <?php foreach($image as $i):?>
                <div class="flex gap-5 md:w-2/3 ">
                    <a data-lightbox="image-1" href="<?= base_url('gallery/'.$i->image1)?>" alt="">
                        <img src="<?= base_url('gallery/'.$i->image1)?>" class="rounded-lg w-full h-full object-cover" alt="">
                    </a>
                </div>
                <div class="flex flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                    <a data-lightbox="image-1" href="<?= base_url('gallery/'.$i->image2)?>" class="rounded-lg w-full  md:full object-cover" alt="">
                        <img src="<?= base_url('gallery/'.$i->image2)?>" class="rounded-lg w-full  md:h-full object-cover" alt="">
                    </a>
                    <div class="object-cover w-full overflow-hidden  aspect-video bg-red-400 cursor-pointer rounded-xl relative group">
                        <a data-lightbox="image-1" href="<?= base_url('gallery/'.$i->image3)?>">

                            <div class="flex rounded-xl z-50 opacity-100 h-full cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white  items-center">
                                <div>
                                    <div class="transform-gpu   p-4 space-y-3 text-xl text-center  pb-10 transform ">
                                        <div class="font-semibold text-xs md:text-2xl">See more picture....</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  href="<?= base_url('gallery/'.$i->image3)?>">
                            <img alt="" class="rounded-lg w-full  md:full object-cover" src="<?= base_url('gallery/'.$i->image3)?>" />
                        </a>
                    </div>
                </div>
                <div class="hidden flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                    <a data-lightbox="image-1" href="<?= base_url('gallery/'.$i->image4)?>" class="rounded-lg w-full  md:full object-cover" alt="">
                        <img src="<?= base_url('gallery/'.$i->image4)?>" class="rounded-lg w-full  md:h-full object-cover" alt="">
                    </a>
                    <a data-lightbox="image-1" href="<?= base_url('gallery/'.$i->image5)?>" class="rounded-lg w-full  md:full object-cover" alt="">
                        <img src="<?= base_url('gallery/'.$i->image5)?>" class="rounded-lg w-full  md:h-full object-cover" alt="">
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach?>
        <div class="bg-white p-10 rounded-xl mt-10 flex-[50%]">
                <form>

                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Check-in/Checkout</label>
                        <div class="flex ">

                            <div date-rangepicker class="flex items-start md:items-center flex-col md:flex-row w-full">
                                <input name="start" type="date" id="checkinDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                <span class="mx-4 text-gray-500">to</span>
                                <input name="end" type="date" id="checkoutDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                            </div>
                        </div>
                        <p id="error" class="text-red-600 mt-2"></p>
                    </div>
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                        <div class="flex flex-col md:flex-row gap-10 ">
                            <div class="flex flex-col w-full">
                                <h1 class=" text-sm font-thin mr-4 mb-2 ">Adult</h1>
                                <input type="number" min="1" id="adult" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex">
                            <div class="flex flex-col w-full gap-5">
                                <h1 class="text-sm font-thin mr-4 mb-2">Child</h1>

                                <input type="number" min="0" id="child" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>

                                <div class="block" id="inputContainer">
                                    <label for="baby" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Choose Child Bed Option</label>
                                    <select id="baby"  class=" block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="cwb">Child With Bed</option>
                                        <option value="cnb">Child No Bed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Extend Night</label>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Room</label>
                        <div class="flex">
                            <input type="number" id="jml_kamar" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                            <!-- <h1 class="ml-4 text-sm font-thin mr-4 justify-center align-center self-center">/ Room </h1> -->
                        </div>

                        <label for="countries" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Choose Bed Type</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="single">Single</option>
                            <option value="twin">Twin</option>
                            <option value="triple">Triple</option>
                        </select>

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
        <div class="flex flex-col md:flex-row gap-5">
            <div class="bg-white p-10 rounded-xl mt-10 flex-[50%]">
            <h1 class="font-bold text-3xl "><?= $p->hotel?>  </h1>
            <h1 class="font-semibold text-md   mt-6">Start From </h1>
            <?php $c = $this->Threeday2n_model->getprice($p->id_package)?>
            <h1 class="font-bold italic text-lg  mb-10  ">MYR. <?= number_format($c->a,2)?> / room / night</h1>
                <h1 class="font-thin text-md"></h1>
                    
            </div>
            <div class="bg-white p-10 rounded-xl mt-10 flex-[50%]">
                <form action="<?= site_url('main/addcart')?>" method="post"  enctype="multipart/form-data">
                    <input type="hidden" name="sessionuser" value="<?= $this->input->ip_address()?>">
                    <input type="hidden" name="id_room" value="<?= $p->id_package?>">
                    <input type="hidden" name="id_tour" value="0">
                    <input type="hidden" name="id_additional" value="0">
                    <input type="hidden" name="id_hoteltour" value="0">
                    <input type="hidden" name="price" value="<?= $c->a,2?>">
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Check-in/Checkout</label>
                        <div class="flex ">
                            <div date-rangepicker class="flex items-start md:items-center flex-col md:flex-row w-full">
                                <input name="checkin" type="date" id="checkinDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                <span class="mx-4 text-gray-500">to</span>
                                <input name="checkout" type="date"  id="checkoutDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                            </div>
                        </div>
                        <p id="error" class="text-red-600 mt-2"></p>
                    </div>
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                        <div class="flex flex-col md:flex-row gap-10 ">
                            <div class="flex flex-col w-full">
                                <h1 class=" text-sm font-thin mr-4 mb-2 ">Adult</h1>
                                <input type="number" name="adult" min="1" id="adult" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                            </div>
                            <div class="flex flex-col w-full">
                                <h1 class=" text-sm font-thin mr-4 mb-2 ">Child</h1>
                                <input type="number" name="child" min="1" id="child" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <div class="flex">
                            <?php $f = $this->Threeday2n_model->getprice($p->id_package)?>
                            <input type="hidden" value="<?= $f->a?>" id="a">
                            <input type="hidden" value="<?= $f->b?>" id="b">
                            <input type="hidden" value="<?= $f->c?>" id="c">
                            <input type="hidden" value="0.85" id="diskon">
                            
                            <input type="text" name="price" id="price" value=""class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                        </div>
                    </div>

                    <button type="submit" class="w-full text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Book</button>
                </form>
            </div>
        </div>
    </section>
    <?php endforeach?>
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

        <script>
    const adultInput = document.getElementById("adult");
    const childInput = document.getElementById("child");
    const childPriceInput = document.getElementById("diskon");
    const aSpan = document.getElementById("a");
    const bSpan = document.getElementById("b");
    const cSpan = document.getElementById("c");
    const totalPriceSpan = document.getElementById("price");
    adultInput.addEventListener("input", updateTotalPrice);
    childInput.addEventListener("input", updateTotalPrice);

    function updateTotalPrice() {
        const adult = parseInt(adultInput.value);
        const childPrice = parseFloat(childPriceInput.value);
        const child = childInput.value
        let pricePerRoom = 0;
        // Retrieve the total price value directly from the element
        // console.log(childPrice)

        if(adult >0 && adult < 5 )
        {
            console.log(typeof(adult)  )
            console.log('a')
            const total = aSpan.value;
            pricePerRoom = total * adult + (total * childPrice*(child));
        }
        else if(adult>4 && adult <8)
        {
            console.log('b')

            const total = bSpan.value;
            pricePerRoom = total * adult + (total * childPrice*(child));

        }
       else
        {
            console.log('c')

            const total = cSpan.value;
            pricePerRoom = total * adult + (total * childPrice*(child));
            
        }
        console.log(pricePerRoom)
        console.log(totalPriceSpan.textContent)
        // Perform your calculation based on the total and numRooms
        // Update the total price display
        totalPriceSpan.value = pricePerRoom.toFixed(2);
    }
    </script>

<?php $this->load->view("user/_partials/footer.php") ?>
    <script>
        
        tailwind.config = {
          darkMode: 'class',
        }
        document.getElementById('checkinDate').valueAsDate = new Date();
    </script>
    <script src="<?=base_url('user/scripts/childInput.js')?>"></script>
    <script src="<?=base_url('user/scripts/dateRange.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="<?=base_url('user/scripts/input.js')?>"></script>
    <script src="<?=base_url('user/scripts/index.js')?>"></script>
    

</body>

</html>