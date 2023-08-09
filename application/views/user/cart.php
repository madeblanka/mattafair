<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('user/style/style.css')?>">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Matta Fair</title>
</head>

<body>
<?php $this->load->view("user/_partials/sidebar.php") ?>
    <div class="h-auto bg-gray-100 pt-20">
        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="rounded-lg md:w-2/3">
                <?php foreach($cart as $c):?>
                <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                <?php $image = $this->Image_model->getbyIdroomrow($c->id_room)?>
                <?php $room = $this->Room_model->getidroomrow($c->id_room)?>
                    <img src="<?= site_url('gallery/'.$image->image1)?>" alt="product-image" class="w-full rounded-lg sm:w-40" />
                    <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                        <div class="mt-5 sm:mt-0">
                            <h2 class="text-lg font-bold text-gray-900"><?= $room->name?></h2>
                            <p class="mt-1 text-xs text-gray-700">MYR <?= number_format($c->price,2)?></p>
                        </div>
                        <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                            <div class="flex items-center border-gray-100">
                                <span class="minus cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50 decrease-btn"> - </span>
                                <input class="h-10 w-10 border bg-white text-center text-xs outline-none" type="text" value="<?= $c->qty?>" readonly />
                                <span class="plus cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50 increase-btn"> + </span>
                               
                            </div>
                            <div class="flex items-center space-x-4">
                                <p class="text-sm">MYR <?= number_format($c->total_price,2)?></p>
                                <a href="<?php echo site_url('main/deletecart/'.$c->id_cart) ?>"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fa-solid fa-x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
            <!-- Sub total -->
            <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">

                <hr class="my-4" />
                <div class="flex justify-between">
                    <p class="text-lg font-bold">Total</p>
                    <div class="">
                        <p class="mb-1 text-lg font-bold">
                            <?php
                                $total = 0; 
                            foreach($cart as $c){
                                $total = $total + intval($c->total_price);
                            }
                            echo "MYR " . number_format($total,2);?>
                            
                        </p>
 
                    </div>
                </div>
                <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button>
            </div>
        </div>
    </div>


<?php $this->load->view("user/_partials/footer.php") ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.minus').forEach(function(minusBtn) {
                minusBtn.addEventListener('click', function() {
                    var input = this.parentNode.querySelector('input');
                    var count = parseInt(input.value) - 1;
                    count = count < 1 ? 1 : count;
                    input.value = count;
                    input.dispatchEvent(new Event('change'));
                });
            });

            document.querySelectorAll('.plus').forEach(function(plusBtn) {
                plusBtn.addEventListener('click', function() {
                    var input = this.parentNode.querySelector('input');
                    if (parseInt(input.value) >= 10) {
                        alert("maximum limit reached, you can buy only 10 items");
                        event.preventDefault(); // Prevent the default action (e.g., form submit or link navigation)
                    } else {
                        input.value = parseInt(input.value) + 1;
                        input.dispatchEvent(new Event('change'));
                        
                    }
                });
            });
        });
        var productCounter = {
            count: 1,
            incrementCounter: function() {
                if (this.count < 10) {
                    return this.count = this.count + 1;
                } else {
                    alert("maximum limit reached, you can buy only 10 items");
                    return this.count;
                }

            },
            decrementCounter: function() {
                if (this.count > 1) {
                    return this.count = this.count - 1;
                } else {
                    alert("Minimum product you can buy only 1");
                    return this.count = 1;
                }
            },
            resetCounter: function() {
                return this.count = 0;
            }

        };


        var displayCout = document.getElementById('displayCounter');
        displayCout.innerHTML = 1;
        document.getElementById('increment').onclick = function() {
            displayCout.innerHTML = productCounter.incrementCounter();
        }
        document.getElementById('decrement').onclick = function() {
            displayCout.innerHTML = productCounter.decrementCounter();
        }
        document.getElementById('reset').onclick = function() {
            displayCout.innerHTML = productCounter.resetCounter();
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="<?= base_url('user/scripts/index.js')?>"></script>
</body>

</html>