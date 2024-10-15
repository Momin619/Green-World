<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./components.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="icon" href="logo-pics\tree.png">
    <link rel="stylesheet" href="./form.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Order Your Plants</title>
    <style>
    .pay {
        position: absolute;
        bottom: 18%;
        left: 0.5%;

    }

    .radio-btns {
        display: flex;
        gap: 1rem;
        position: absolute;
        top: 84%;
        left: 27%
    }

    .cod-style,
    .online-style {
        padding: 0.5rem;
        background-color: white;
        color: green;
        width: 210px;
        border-radius: 20px;
        font-weight: bold;
        text-align: center;
        transition: 0.3s all;
        cursor: pointer;
    }

    .online-style:hover {
        background-color: green;
        color: white;

    }

    .cod-style:hover {
        background-color: green;
        color: white;
    }




    .selectors {
        position: absolute;
        top: 73%;
    }

    label {
        letter-spacing: 2px;
    }

    input::placeholder {
        letter-spacing: 2px;
        text-transform: capitalize;
    }

    @media only screen and (max-width:431px) {

        .cod-style,
        .online-style {
            padding: 0.5rem;
            background-color: white;
            color: green;
            width: 130px;
            border-radius: 20px;
            font-weight: bold;
            text-align: center;
            transition: 0.3s all;
            cursor: pointer;
        }

        .radio-btns {
            position: absolute;
            left: 9%;
            top: 82%;
        }

        .pay {
            position: absolute;
            top: 77%;
            left: 5%;
        }

        .selectors {
            position: absolute;
            top: 62%;
        }

        button {
            position: absolute;
            bottom: 5%;
        }
    }
    </style>
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

            <input class="capitalize-input" name="name" autocomplete="name" required type="text"
                placeholder="Fullname" />

            <label for="email">Email Address</label>
            <input class="capitalize-input" name="email" autocomplete="email" required type="email"
                placeholder="Email Address" />

            <label for="phone_number">Phone Number</label>
            <input class="capitalize-input" name="phone_number" autocomplete="tel" required type="tel"
                placeholder="Phone number" minlength="11" maxlength="11" pattern="\d{11}" />

            <label for="shipping_address">Shipping Address</label>
            <input class="capitalize-input" name="shipping_address" autocomplete="shipping street-address" required
                type="text" placeholder="Shipping Address" />

            <label for="city">City</label>
            <input class="capitalize-input" name="city" autocomplete="address-level2" required type="text"
                placeholder="City" />
            <label for="">Plant</label>
            <div class="selectors">
                <select name="indoor_plant" id="">
                    <option value="None">Indoor</option>
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
                    <option value="None">Outdoor</option>
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

            <label for="" style="" class="pay">Payment Options</label>
            <div style=";" class="radio-btns">
                <div style="" class="payment-option cod-style" id="cod" onclick="selectPaymentOption('COD')">COD</div>
                <div style="  " class="payment-option online-style" id="online" onclick="selectPaymentOption('Online')">
                    Online</div>
            </div>
            <input type="hidden" name="delivery_option" id="delivery_option" required>
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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const inputFields = document.querySelectorAll('.capitalize-input');

        inputFields.forEach(function(inputField) {
            inputField.addEventListener('input', function() {
                // Check if the input field is not the email field
                if (this.name !== 'email') {
                    this.value = this.value.toLowerCase().replace(/\b\w/g,
                        function(char) {
                            return char.toUpperCase();
                        });
                }
            });
        });
    });
    document.querySelector('input[name="phone_number"]').addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, ''); // Remove non-digit characters
        if (this.value.length > 12) {
            this.value = this.value.slice(0, 11); // Trim the input to 10 digits
        }
    });

    function selectPaymentOption(option) {
        // Update the hidden input field
        document.getElementById('delivery_option').value = option;

        // Remove 'selected' class from all options
        const options = document.querySelectorAll('.payment-option');
        options.forEach(opt => {
            opt.classList.remove('selected');
        });

        // Add 'selected' class to the clicked option
        document.getElementById(option.toLowerCase()).classList.add('selected');
    }
    </script>
</body>

</html>