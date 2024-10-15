<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./components.css">
    <link rel="icon" href="logo-pics\tree.png">

    <link rel="stylesheet" href="./products.css" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products</title>
    <style>
    .div {
        position: absolute;
        background-color: black;
        height: 50px;
        width: 100%;
        display: block;
    }

    .card {
        background: white;
        border-radius: 50px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        width: 400px;
        transition: transform 0.5s, border 0.5s, box-shadow 0.5s;
        text-align: center;
        transition: 0.5s all;
        cursor: pointer;
    }

    canvas {
        display: block;
    }

    .card:hover {
        transform: scale(1.1);
        transition: 0.5s all;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 1);
        border-color: transparent;
    }

    .card-planter {
        transition: 0.5s all;
        transition: transform 0.5s, border 0.5s, box-shadow 0.5s;
    }

    .card-planter:hover {
        transform: scale (1.15);

        transition: 0.5s all;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 1);
        border-color: transparent;
    }


    .planter-stand-card:hover {
        cursor: pointer;
        transform: scale(1.1);
        border-color: transparent;
        transition: 0.5s all;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 1);
    }

    @media screen and (max-width: 431px) {
        .card:hover {
            box-shadow: none;
            border: none;
            scale: 1;
        }
    }
    </style>
</head>
<!-- bar section -->
<div class="bar w-100 position-fixed color top-0">1</div>


<div class="indoor">
    <div class="cart">

        <i class="bi bi-cart-plus-fill"></i>
    </div>
    <h3 class="text"></h3>
    <div class="title">
        <h1 class="fw-bold display-4 text-capitalize">Indoor plants</h1>
        <div class="line"></div>
    </div>
    <div class="cards d-flex gap-lg-5 flex-wrap">
        <div class="card">
            <div class="card-image croton" id="croton">
                <img height="400px" src="pics/FG143ROIMG_0488MG_opt-e1667581033304.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content crotons">
                <h2 class="plant-name">Croton</h2>
                <p class="price">450 Rs</p>

                <button class="add-to-cart btn btn-outline-success fw-semi-bold croton" data-name="croton"
                    data-id="croton" data-price="450 ">
                    Add to Cart
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-image money">
                <img height="200px" src="pics/Money-Plant-Green_1.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content money-content">
                <h2 class="plant-name">Money plant</h2>
                <p class="price">250 Rs</p>

                <button class="add-to-cart btn btn-outline-success money" data-name="Money-Plant" data-price="250 "
                    data-id="money-plant">
                    Add to Cart
                </button>
            </div>
        </div>
        <div class="card dr">
            <div class="card-image dracena">
                <img height="100px" src="pics/Red_Leaf_Cordyline_bloomspace-768x768.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content dracena">
                <h2 class="plant-name">Dracena</h2>
                <p class="price">300 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Dracena" data-price="300 "
                    data-id="dracena">
                    Add to Cart
                </button>
            </div>
        </div>
        <div class="card dr">
            <div class="card-image spider">
                <img height="100px" src="pics/CHLOROPHYTUM-COMOSUM.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Spider</h2>
                <p class="price">250 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Spider" data-price="250"
                    data-id="spider">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image spider snake">
                <img height="100px" src="pics/snake.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Snake</h2>
                <p class="price">400 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Snake" data-price="400 " data-id="snake">
                    Add to Cart
                </button>
            </div>
        </div>
        <div class="card dr">
            <div class="card-image song-of-india">
                <img height="100px" src="pics/7j8u1hujoi2cthotsyfso2gdk5pgq6li.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Song of India</h2>
                <p class="price">450 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Song-of-india" data-price="450 "
                    data-id="song-of-india">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image syngonium">
                <img height="100px"
                    src="pics/pngtree-black-background-accentuates-the-freshness-of-green-arrowhead-vine-plant-photo-png-image_13336540.png"
                    alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Syngonium</h2>
                <p class="price">250 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Syngonium" data-price="250 "
                    data-id="syngonium">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image zz">
                <img height="100px" src="pics/4-zz-plant-piante-plants-1_grande.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Zz</h2>
                <p class="price">600 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Zz" data-price="600 " data-id="zz">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image zz">
                <img height="100px" src="pics/aloe.avif" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Alo Vera</h2>
                <p class="price">300 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Alo Vera" data-price="300 "
                    data-id="alo Vera">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image zz rubber">
                <img height="100px" src="pics/ficuselasticarobusta.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Rubber Plant</h2>
                <p class="price">650 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Rubber Plant" data-price="650 "
                    data-id="rubber plant">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image purple">
                <img height="100px" src="pics/B9FB6F31-3DB0-452C-B223-A4123CE27D2B_1200x.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Purple Shamrock</h2>
                <p class="price">350 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Purple Shamrock" data-price="350"
                    data-id="purple Shamrock">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image aglonema">
                <img height="100px" src="pics/ladyvalentinewithoutlogo_2048x.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Aglonema</h2>
                <p class="price">700 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Aglonema" data-price="700 "
                    data-id="aglonema">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image aglonema">
                <img height="100px" src="pics/Rhoeo var-910x1155.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Rheo Plant</h2>
                <p class="price">200 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Rheo Plant" data-price="200 "
                    data-id="Rheo plant">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image peace">
                <img height="100px" src="pics/2699.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Peace Lily</h2>
                <p class="price">400 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Peace Lily" data-price="400 "
                    data-id="peace Lily">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card dr">
            <div class="card-image alocasia">
                <img height="100px" src="pics/CC0036677-product_L.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Alocasia</h2>
                <p class="price">500 Rs</p>

                <button class="add-to-cart btn btn-outline-success" data-name="Alocasia" data-price="500 "
                    data-id="alocasia">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</div>
<div class="hr"></div>
<div class="outdoor">
    <div class="o-title">
        <h1 class="fw-bold display-4 text-black text-capitalize">
            Outdoor plants
        </h1>
        <div class="line1"></div>
    </div>
    <div class="cards1 d-flex flex-wrap gap-lg-5 gap-sm-5">
        <div class="card">
            <div class="card-image croton">
                <img height="400px" src="pics/acalypha.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content crotons">
                <h2 class="plant-name">Copperleaf Plant</h2>
                <p class="price">400 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Copperleaf Plant" data-price="400  "
                    data-id="Copperleaf Plant">
                    Add to Cart
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-image canna">
                <img height="400px" src="pics/CanFlame.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content crotons">
                <h2 class="plant-name">Canna Lily</h2>
                <p class="price">350 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Canna Lily" data-price="350 "
                    data-id="Canna Lily">
                    Add to Cart
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-image canna">
                <img height="400px" src="pics/Coleus-Green-Pink-Plant-2-500x500.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content crotons">
                <h2 class="plant-name">Coleus</h2>
                <p class="price">400 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Coleus" data-price="400 "
                    data-id="Coleus">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image canna glory">
                <img height="400px" src="pics/PhotoRoom_25651025_81815-PM.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content crotons">
                <h2 class="plant-name">Morning Glory</h2>
                <p class="price">450 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Morning Glory" data-price="450 "
                    data-id="Morning Glory">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image canna glory">
                <img height="400px" src="pics/PhotoRoom_25651025_90040-PM.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content crotons">
                <h2 class="plant-name">Pink Bougonvelia</h2>
                <p class="price">600 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Pink Bougonvelia" data-price="600 "
                    data-id="Pink Bougonvelia">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image canna glory">
                <img height="400px" src="pics/64437251.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content crotons">
                <h2 class="plant-name">Crown of Thorns</h2>
                <p class="price">350 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Crown of Thorns" data-price="350 "
                    data-id="Crown of Thorns">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image canna glory">
                <img height="400px" src="pics/POTTEDPLANTDAHLIAYLW25CM_HFA18IMSTYLW04232_01.webp"
                    alt="Elegant Monstera" />
            </div>
            <div class="card-content crotons">
                <h2 class="plant-name">Dahlia</h2>
                <p class="price">500 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Dahlia" data-price="500 "
                    data-id="Dahlia">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image canna caladium">
                <img height="" src="pics/caladium-carousal-6in.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Caladium</h2>
                <p class="price">500 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Caladium" data-price="500 "
                    data-id="Caladium">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image canna caladium">
                <img height="" src="pics/6591-Premium-Begonia-1.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Begonia</h2>
                <p class="price">400 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Begonia" data-price="400 "
                    data-id="Begonia">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image canna hibiscus">
                <img height="" src="pics/7f2bbbe5-1687-4b8e-a4f2-0c4cc894620e.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Hibicus</h2>
                <p class="price">550 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Hibicus" data-price="550 "
                    data-id="Hibicus">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image canna Fiscus">
                <img height="" src="pics/4FIRO3T281.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Fiscus</h2>
                <p class="price">450 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Fiscus" data-price="450 "
                    data-id="Fiscus">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image canna Fiscus lantana">
                <img height="" src="pics/PhotoRoom_25651025_73729-PM.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Lantanus</h2>
                <p class="price">600 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Lantanus" data-price="600 "
                    data-id="Lantanus">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image lantana">
                <img height="" src="pics/pclimage-ba159101493.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Geranium</h2>
                <p class="price">350 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Geranium" data-price="350 "
                    data-id="Geranium">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-image lantana rose">
                <img height="" src="pics/Pasadena.png" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Peach Rose</h2>
                <p class="price">400 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Peach Rose" data-price="400 "
                    data-id="Peach Rose">
                    Add to Cart
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-image lantana rose jasmine">
                <img height="" src="pics/PhotoRoom_25670105_15632 PM.webp" alt="Elegant Monstera" />
            </div>
            <div class="card-content">
                <h2 class="plant-name">Jasmine</h2>
                <p class="price">450 Rs</p>

                <button class="add-to-cart  btn btn-outline-success" data-name="Jasmine" data-price="450 "
                    data-id="Jasmine">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</div>
<div class="hr1"></div>
<div class="planters">
    <div class="p-title">
        <h1 class="display-4">Planters</h1>
        <div class="line2"></div>
    </div>
    <div class="moveable">
        <div class="cards-planter d-flex flex-wrap gap-lg-5">
            <div class="card-planter">
                <div class="card-image first">
                    <img height="" src="sample-background-images/remove-background-images/1-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter">
                        <h2 class="plant-name">Tray garden</h2>
                        <p class="price">2500 Rs</p>

                        <button class="add-to-cart  btn btn-outline-success" data-name="Tray garden" data-price="2500 "
                            data-id="Tray garden">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-planter">
                <div class="card-image first second">
                    <img height="" src="sample-background-images/remove-background-images/2-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter">
                        <h2 class="plant-name">Tray garden</h2>
                        <p class="price">3000 Rs</p>

                        <button class="add-to-cart  btn btn-outline-success" data-name="Tray garden" data-price="3000 "
                            data-id="Tray garden">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-planter">
                <div class="card-image first second third">
                    <img height="" src="sample-background-images/remove-background-images/4-removebg-preview (1).png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter Saturn">
                        <h2 class="plant-name"> Bloem Saturn Planter</h2>
                        <p class="price">600 Rs</p>

                        <button class="add-to-cart  btn btn-outline-success" data-name="Bloem Saturn Planter"
                            data-price="600 " data-id="Bloem Saturn Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-planter">
                <div class="card-image first second third four Rounded-image">
                    <img height="" src="sample-background-images/remove-background-images/5-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter Rounded">
                        <h2 class="plant-name">Plastic Planter</h2>
                        <p class="price">300 Rs</p>

                        <button class="add-to-cart  btn btn-outline-success" data-name="Plastic Planter"
                            data-price="300 " data-id="Plastic Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>


            <div class="card-planter">
                <div class="card-image first second third four">
                    <img height="" src="sample-background-images/remove-background-images/6-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter pebble">
                        <h2 class="plant-name">Pebble Planter</h2>
                        <p class="price">400 Rs</p>

                        <button class="add-to-cart  btn btn-outline-success" data-name="Pebble Planter"
                            data-price="400 " data-id="Pebble Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>


            <div class="card-planter">
                <div class="card-image first second third four seven floral">
                    <img height="" src="sample-background-images/remove-background-images/7-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter Black">
                        <h2 class="plant-name">Black Floral Planter</h2>
                        <p class="price">400 Rs</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="Black Floral Planter"
                            data-price="400 " data-id="Black Floral Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>


            <div class="card-planter">
                <div class="card-image first second third four seven">
                    <img height="" src="sample-background-images/remove-background-images/8-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter">
                        <h2 class="plant-name">
                            Tray garden</h2>
                        <p class="price">2000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="Tray garden" data-price="2000 "
                            data-id="Tray garden">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>

            <div class="card-planter">
                <div class="card-image first second third four seven">
                    <img height="" src="sample-background-images/remove-background-images/9-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter Cactus">
                        <h2 class="plant-name">Cactus Tray garden</h2>
                        <p class="price">400 Rs</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="Cactus Tray garden"
                            data-price="400 " data-id="Cactus Tray garden">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>



            <div class="card-planter">
                <div class="card-image first second third four seven">
                    <img height="" src="sample-background-images/remove-background-images/10-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter metal">
                        <h2 class="plant-name">Metal planter</h2>
                        <p class="price">800 Rs /-</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="Metal planter" data-price="800 "
                            data-id="Metal planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>


            <div class="card-planter">
                <div class="card-image first second third four seven">
                    <img height="" src="sample-background-images/remove-background-images/11-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter Resin">
                        <h2 class="plant-name">Resin Planter</h2>
                        <p class="price">3000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="Resin Planter" data-price="3000 "
                            data-id="Resin Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>


            <div class="card-planter">
                <div class="card-image first second third four  op1">
                    <img height="" src="sample-background-images/remove-background-images/12-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter White ">
                        <h2 class="plant-name">White Round Planter</h2>
                        <p class="price">2000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="White Round Planter"
                            data-price="2000 " data-id="White Round Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>


            <div class="card-planter">
                <div class="card-image first second third four  op1 op2">
                    <img height="" src="sample-background-images/remove-background-images/13-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter Bowl">
                        <h2 class="plant-name"> White Bowl Planter</h2>
                        <p class="price">2000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="White Bowl Planter"
                            data-price="2000 " data-id="White Bowl Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>

            <div class="card-planter">
                <div class="card-image first second third four  op1 op2">
                    <img height="" src="sample-background-images/remove-background-images/14-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter Cinnamic">
                        <h2 class="plant-name"> Ceramic Planter</h2>
                        <p class="price">4000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="Ceramic Planter"
                            data-price="4000 " data-id="Ceramic Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>

            <div class="card-planter">
                <div class="card-image first second third four  op1 op2">
                    <img height="" src="sample-background-images/remove-background-images/15-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter wood">
                        <h2 class="plant-name">Wooden Planter </h2>
                        <p class="price">2500 Rs</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="Wooden Planter"
                            data-price="2500 " data-id="Wooden Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>


            <div class="card-planter">
                <div class="card-image first second third four  op1 op2">
                    <img height="" src="sample-background-images/remove-background-images/3-removebg-preview.png"
                        alt="Elegant Monstera" />
                </div>
                <div class="main">
                    <div class="card-content-planter Ceramic">
                        <h2 class="plant-name">Ceramic Planter</h2>
                        <p class="price">3000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success" data-name="Ceramic Planter"
                            data-price="3000 " data-id="Ceramic Planter">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>


        </div>

        <div class="last-hr"></div>
        <div class="planters-stand">
            <div class="p-title pl">
                <h1 class="display-4 fw-bolder">
                    Planters Stand
                </h1>
            </div>

            <div class="line3">

            </div>


            <div class="planter-stand-cards d-flex gap-lg-5 flex-wrap">
                <div class="planter-stand-card">
                    <div class="card-image ">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/1-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m"> Metal Planter Stand</h2>
                        <p class="price  stand-price">6000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn" data-name="Metal Planter Stand"
                            data-price="6000 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image ">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/2-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p"> Metal Planter Stand</h2>
                        <p class="price  stand-price">9000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn" data-name="Metal Planter Stand"
                            data-price="9000 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image ">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/3-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m"> Metal Planter Stand</h2>
                        <p class="price  stand-price">10000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn" data-name="Metal Planter Stand"
                            data-price="10000 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image ">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/4-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m"> Metal Planter Stand</h2>
                        <p class="price  stand-price">14000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn" data-name="Metal Planter Stand"
                            data-price="14000 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image unique ">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/5-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m"> Metal Planter Stand</h2>
                        <p class="price  stand-price">6000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Metal Planter Stand"
                            data-price="6000 " data-id="Metal Planter Stan">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image un ">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/6-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m"> Metal Planter Stand</h2>
                        <p class="price  stand-price"> 12000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Metal Planter Stand"
                            data-price="12000 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image width ">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/7-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m1"> Wooden Planter Stand</h2>
                        <p class="price  stand-price">4000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Wooden Planter Stand"
                            data-price="4000 " data-id="Wooden Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image width wooden">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/8-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m"> Metal Planter Stand</h2>
                        <p class="price  stand-price">3000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Metal Planter Stand"
                            data-price="3000 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image   plant1">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/9-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m">Metal Planter Stand </h2>
                        <p class="price  stand-price">8000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Metal Planter Stand "
                            data-price="8000 " data-id="Metal Planter Stand ">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image   plant2">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/10-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m1">Wooden Planter Stand </h2>
                        <p class="price  stand-price">1500 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Wooden Planter Stand"
                            data-price="1500 " data-id="Wooden Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image   plant3">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/11-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m1"> Wooden Planter Stand</h2>
                        <p class="price  stand-price">5000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Wooden Planter Stand"
                            data-price="5000 " data-id="Wooden Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image   plant3 plant4">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/12-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m">Metal Planter Stand</h2>
                        <p class="price  stand-price">8000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Metal Planter Stand"
                            data-price="8000 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image   ">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/13-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons">
                        <h2 class="plant-name s-p m"> Metal Planter Stand</h2>
                        <p class="price  stand-price">5500 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Metal Planter Stand"
                            data-price="5500 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image shop  ">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/14-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons ">
                        <h2 class="plant-name s-p m"> Metal Planter Stand</h2>
                        <p class="price  stand-price">5000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Metal Planter Stand"
                            data-price="5000 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <div class="planter-stand-card">
                    <div class="card-image   last-shop">
                        <img height=""
                            src="sample-background-images/remove-background-images-planter-stand/15-p-removebg-preview.png"
                            alt="Elegant Monstera" />
                    </div>
                    <div class="card-content stand crotons ">
                        <h2 class="plant-name s-p m">Metal Planter Stand </h2>
                        <p class="price  stand-price">6000 Rs</p>

                        <button class="add-to-cart btn btn-outline-success stand-btn " data-name="Metal Planter Stand"
                            data-price="6000 " data-id="Metal Planter Stand">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="shadow underlay">
            <div class="sidebar ">
                <div class="content">
                    <a href="./index.php" class=" ">Home</a>
                    <a href="./about-us.php" class="">About Us</a>
                    <a href="./products.php" class=" ">Products</a>
                    <a href="./form.php" class="">Order</a>
                    <a href="./projects.php" class="">Projects</a>
                </div>

            </div>
        </div>


    </div>
    <div class="content_2">
        <a href="./index.php" class="anchor">Home</a>
        <a href="./about-us.php" class="anchor">About Us</a>
        <a href="./products.php" class="anchor">Products</a>
        <a href="./form.php" class="anchor">Order</a>
        <a href="./projects.php" class="anchor">Projects</a>
    </div>
    <div class="clip">
        <h5 class="number"></h5>
    </div>
    <div class="cartmenu">
        <ul id="cart-items"></ul>
    </div>


    <div class="underlay2"></div>

    <i class="bi bi-list display-1 -absolute">


        <script src="./app.js"></script>
        </body>

</html>