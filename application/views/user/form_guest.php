<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('user/style/style.css') ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Form Guest</title>
</head>

<body>
    <section>
        <div class="bg-gray-100 h-screen flex ">
            <div class="w-[70%] bg-white mx-auto p-10 rounded-lg shadow-md  justify-center align-center self-center ">
                <form action="<?= site_url('main/booked') ?>" enctype="multipart/form-data" method="post">
                    <?php foreach ($cart as $c) : ?>
                        <?php $booked = $this->Booked_model->getidbooked() ?>
                        <input type="hidden" name="id_booked[]" value="<?php foreach ($booked as $b) {
                                                                            echo intval($b) + 1;
                                                                        } ?>">
                        <input type="hidden" name="id_room[]" value="<?= $c->id_room ?>">
                        <input type="hidden" name="id_tour[]" value="<?= $c->id_tour ?>">
                        <input type="hidden" name="id_additional[]" value="<?= $c->id_additional ?>">
                        <input type="hidden" name="id_hoteltour[]" value="<?= $c->id_hoteltour ?>">
                        <input type="hidden" name="person[]" value="<?= $c->person ?>">
                        <input type="hidden" name="adult[]" value="<?= $c->adult ?>">
                        <input type="hidden" name="child[]" value="<?= $c->child ?>">
                        <input type="hidden" name="datebook[]" value="<?= $c->datebook ?>">
                        <input type="hidden" name="checkin[]" value="<?= $c->checkin ?>">
                        <input type="hidden" name="checkout[]" value="<?= $c->checkout ?>">
                        <input type="hidden" name="price[]" value="<?= $c->price ?>">
                        <input type="hidden" name="qty[]" value="<?= $c->qty ?>">
                        <input type="hidden" name="total_price[]" value="<?= $c->total_price ?>">
                    <?php endforeach ?>
                    <h1 class="text-xl mb-10 font-semibold">Invoice</h1>
                    <div class="bg-[white] rounded-b-md">
                        <div class="p-9">
                            <div class="flex flex-col mx-0 mt-8">
                                <table class="min-w-full divide-y divide-slate-500">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-normal text-slate-700 sm:pl-6 md:pl-0">
                                                Description
                                            </th>
                                            <th scope="col" class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-700 sm:table-cell">
                                                Quantity
                                            </th>
                                            <th scope="col" class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-700 sm:table-cell">
                                                Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($cart as $c):?>
                                        <tr class="border-b border-slate-200">
                                            <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
                                            <?php $room = $this->Room_model->getidroomrow($c->id_room)?>
                                                <div class="font-medium text-slate-700"><?= $room->name?></div>
                                                <div class="mt-0.5 text-slate-500 sm:hidden">
                                                    1 unit at $0.00
                                                </div>
                                            </td>
                                            <td class="hidden px-3 py-4 text-sm text-right text-slate-500 sm:table-cell">
                                                <?= $c->qty?>
                                            </td>
                                            <td class="hidden px-3 py-4 text-sm text-right text-slate-500 sm:table-cell">
                                                <?= number_format($c->price,2)?>
                                            </td>
                                        </tr>
                                        <?php endforeach?>
                                        <!-- Here you can write more products/tasks that you want to charge for-->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="row" colspan="3" class="hidden pt-4 pl-6 pr-3 text-sm font-normal text-right text-slate-700 sm:table-cell md:pl-0">
                                                Total
                                            </th>
                                            <th scope="row" class="pt-4 pl-4 pr-3 text-sm font-normal text-left text-slate-700 sm:hidden">
                                                Total
                                            </th>
                                            <td class="pt-4 pl-3 pr-4 text-sm font-normal text-right text-slate-700 sm:pr-6 md:pr-0">
                                            <?php
                                                    $total = 0; 
                                                foreach($cart as $c){
                                                    $total = $total + intval($c->total_price);
                                                }
                                                echo "MYR " . number_format($total,2);?>
                                                <br>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>


                    </div>
                </form>


            </div>
    </section>
    <section>
        <div class="bg-gray-100 h-screen flex ">
            <div class="w-[70%] bg-white mx-auto p-10 rounded-lg shadow-md  justify-center align-center self-center ">
                <form action="<?= site_url('main/booked') ?>" enctype="multipart/form-data" method="post">
                    <?php foreach ($cart as $c) : ?>
                        <?php $booked = $this->Booked_model->getidbooked() ?>
                        <input type="hidden" name="id_booked[]" value="<?php foreach ($booked as $b) {
                                                                            echo intval($b) + 1;
                                                                        } ?>">
                        <input type="hidden" name="id_room[]" value="<?= $c->id_room ?>">
                        <input type="hidden" name="id_tour[]" value="<?= $c->id_tour ?>">
                        <input type="hidden" name="id_additional[]" value="<?= $c->id_additional ?>">
                        <input type="hidden" name="id_hoteltour[]" value="<?= $c->id_hoteltour ?>">
                        <input type="hidden" name="person[]" value="<?= $c->person ?>">
                        <input type="hidden" name="adult[]" value="<?= $c->adult ?>">
                        <input type="hidden" name="child[]" value="<?= $c->child ?>">
                        <input type="hidden" name="datebook[]" value="<?= $c->datebook ?>">
                        <input type="hidden" name="checkin[]" value="<?= $c->checkin ?>">
                        <input type="hidden" name="checkout[]" value="<?= $c->checkout ?>">
                        <input type="hidden" name="price[]" value="<?= $c->price ?>">
                        <input type="hidden" name="qty[]" value="<?= $c->qty ?>">
                        <input type="hidden" name="total_price[]" value="<?= $c->total_price ?>">
                    <?php endforeach ?>
                    <h1 class="text-xl mb-10 font-semibold">Form Guest</h1>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="address" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="zipcode" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Zip Code</label>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6" style="align-items: self-end;">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
                            <select id="countries" name="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="MY">Malaysia</option>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="state" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">State</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="mobilenumber" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number </label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" name="email" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>
                    </div>
                    <div class="flex w-full p-4 gap-4">

                        <div class="flex flex-1 items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="bordered-radio-1" name="radio" type="radio" value="<?php
                                $total = 0; 
                            foreach($cart as $c){
                                $total = $total + intval($c->total_price);
                            }
                            echo number_format($total,2);?>" name="bordered-radio" class=" type w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full Payment</label>
                        </div>
                        <div class="flex flex-1 items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input checked id="bordered-radio-2"  name="radio"  type="radio" value="100" name="bordered-radio" class=" type w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-2" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deposit Payment</label>
                        </div>
                    </div>

                    <div class="flex p-4 justify-end w-[50%] align-end self-end ml-auto">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            Total :
                        </span>
                        <h1 type="text" id="total-payment" class="p-5 rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly></h1>
                    </div>
                    <div class="justify-end flex-col w-[50%] gap-5 p-4 align-end self-end flex ml-auto">

                        <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cash</button>
                        
                        <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Internet Payment Gateaway</button>
                    </div>

                </form>


            </div>
    </section>


    <?php $this->load->view("user/_partials/footer.php") ?>

    <script>
        tailwind.config = {
            darkMode: 'class',
        }
        const jsonUrl = 'https://raw.githubusercontent.com/samayo/country-json/master/src/country-by-abbreviation.json';

        fetch(jsonUrl)
            .then(response => response.json())
            .then(data => {
                // Call the functions to populate the input fields and display the selected names
                Object.keys(data).forEach(function(prop) {
                    // `prop` is the property name
                    // `data[prop]` is the property value
                    console.log(data[prop].abbreviation, data[prop].country)
                    var sel = document.createElement("option");
                    sel.innerHTML = data[prop].country;
                    sel.value = data[prop].abbreviation;
                    document.getElementById("countries").appendChild(sel);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>

    <script>
      $(document).ready(function () {
        $(".type").change(function () {
          var radioValue = $(".type:checked").val();
          if (radioValue) {
            var buttonText = radioValue;
            $("#total-payment").text(buttonText);
          }
        });
      });
    </script>
    <script src="<?= base_url('/user/scripts/index.js') ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>