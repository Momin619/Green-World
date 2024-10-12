<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./components.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="icon" href="pics/a_cool_logo_of_a_plant_website_for_menu_bar_with_title_green_world.jpeg">
    <link rel="stylesheet" href="./form.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Order Your Plants</title>
</head>

<body>
    <div class="image d-block border-dark border">

        <img src="Files/green-leaves-plant-aesthetic-5k-3840x2160-3559.jpg" alt="" width="400px">
    </div>
    <div class="form">
        <form action="./admin-panel.php" method="post">

            <div class="heading">
                <h1>Order Your Plants</h1>
            </div>
            <label for="">Fullname</label>
            <input name="name" required type="text" placeholder="Fullname" />
            <label for="">Email Address</label>
            <input name="email" required type="text" placeholder="Email Address" />
            <label for="">Phone Number</label>
            <input name="phone_number" required type="number" placeholder="Phone number" />
            <label for="">Shipping Address</label>
            <input name="shipping_address" required type="text" placeholder="Shipping Address" />
            <label for="">City</label>
            <input name="city" required type="text" placeholder="City" />
            <label for="">Plants</label>
            <div class="selectors">
                <select name="indoor_plant" id="">
                    <option value="">Indoor</option>
                    <option value="Alocasia">Alocasia</option>
                    <option value="Aglonema">Aglonema</option>
                    <option value="Alo Vera">Alo Vera</option>
                    <option value="Croton">Croton</option>
                    <option value="Dracena">Dracena</option>
                    <option value="Money Plant">Money Plant</option>
                    <option value="Spider">Spider</option>
                    <option value="Snake">Snake</option>
                    <option value="Song of India">Song of India</option>
                    <option value="Syngonium">Syngonium</option>
                    <option value="Rubber Plant">Rubber Plant</option>
                    <option value="Rheo Plant">Rheo Plant</option>
                    <option value="Zz Plant">Zz Plant</option>
                </select>

                <select name="outdoor_plant" id="">
                    <option value="1">Outdoor</option>
                    <option value="Bougonvelia">Bougonvelia</option>
                    <option value="Begonia">Begonia</option>
                    <option value="Copperleaf">Copperleaf</option>
                    <option value="Caladium">Caladium</option>
                    <option value="Canna Lily">Canna Lily</option>
                    <option value="Coleus">Coleus</option>
                    <option value="Crown of Throns">Crown of Throns</option>
                    <option value="Dahlia">Dahlia</option>
                    <option value="Fiscus">Fiscus</option>
                    <option value="Geranium">Geranium</option>
                    <option value="Hibiscus">Hibiscus</option>
                    <option value="Jasmine">Jasmine</option>
                    <option value="Lantanus">Lantanus</option>
                    <option value="Morning">Morning Glory</option>
                    <option value="Rose">Rose</option>
                </select>
            </div>

            <label for="" class="pay">Payment Options</label>
            <div class="radio-btns">
                <div class="inner">
                    <div class="cod">
                        <label class="radio for="">COD</label>
       
       </div>
     <div class=" online">
                            <label class="radio for="">Online </label>
     
     </div>
      </div>
      </div>

      <button type=" ">Order</button>
        </form>


    </div>


    <div class=" shadow underlay">
                                <div class="sidebar">
                                    <div class="content">
                                        <a href="./index.php" class=" ">Home</a>
                                        <a href="./about-us.php" class="">About Us</a>
                                        <a href="./products.php" class=" ">Products</a>
                                        <a href="./form.php" class="">Order</a>
                                        <a href="./projects.php" class="">Projects</a>
                                    </div>
                                </div>
                    </div>
                    <i class="bi bi-list display-1 "></i>
                    <script src="./app.js"></script>
</body>

</html>