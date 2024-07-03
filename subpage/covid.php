<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Responsibility</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/ICON/favicon-32x32.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        .image-container {
            width: 100%;
            max-width: 100%;
            height: 400px;
            overflow: hidden;
            position: relative;
            padding: 0;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .mis-open {
            background-color: rgba(255, 255, 255, 0.30);
            left: 2%;
            border-radius: 10px;
            text-align: left;
            height: 4em;
            width: auto;
            padding: auto;
            /* z-index: 200; */
        }

        .card {
            position: relative;
            width: 300px;
            height: 200px;
            background-color: #f2f2f2;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            perspective: 1000px;
            box-shadow: 0 0 0 5px #ffffff80;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card svg {
            width: 48px;
            fill: #333;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
        }

        .card__content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 20px;
            box-sizing: border-box;
            background-color: #f2f2f2;
            transform: rotateX(-90deg);
            transform-origin: bottom;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card:hover .card__content {
            transform: rotateX(0deg);
        }

        .card__title {
            margin: 0;
            font-size: 24px;
            color: #333;
            font-weight: 700;
        }

        .card:hover svg {
            scale: 0;
        }

        .card__description {
            margin: 10px 0 0;
            font-size: 14px;
            color: #777;
            line-height: 1.4;
        }
        
.card-body {
    color: white;
    background-color: #008DDA;
    /* color: #00224D; */
}
.carousel-indicators [data-bs-target]
{
    background-color: black;
}
    </style>
</head>
    <body>
        <div class="spinner-wrapper">
            <div class="spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                </div>
        </div>
        <!-- header start -->
        <header class="header">
            <div class="container">
                <div class="row v-center">
                    <div class="header-item item-left">
                        <div class="logo">
                            <a href="../index.php"><img id="logo1" src="../img/ESTRO.png" height="40px"></a>
                        </div>
                    </div>
                    <!-- menu start here -->
                    <div class="header-item item-center">
                        <div class="menu-overlay">
                        </div>
                        <nav class="menu">
                            <div class="mobile-menu-head">
                                <div class="go-back"><i class="fa fa-angle-left"></i></div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="menu-main">
                                <a style="text-decoration:none;color:black;font-weight: 500;"
                                    href="../index.php">Home</a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">Company <i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu mega-menu mega-menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">About</h4>
                                            <ul>
                                                <li><a href="../mission.php">Misson</a></li>
                                                <li><a href="../vision.php">Vision</a></li>
                                                <li><a href="../corporate.php">Corporate</a></li>
                                            </ul>
                                            <h4 class="title">Careers</h4>
                                            <ul>
                                                        <li><a href="./careers-sales.php">Sales & Management</a></li>
                                                        <li><a href="./careers-tech.php">Technical</a></li>
                                                    </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Awards</h4>
                                            <ul>
                                                <li><a href="./award.php">Ceremony</a></li>
                                            </ul>
                                            <h4 class="title">Collabs</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>

                                            <h4 class="title">Medicine</h4>
                                            <ul>
                                                <li><a href="./show_product.php">CNS</a></li>
                                                <li><a href="./show_product.php">DIV</a></li>

                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Heritage</h4>
                                            <ul>
                                                <li><a href="./csr.php">Company</a></li>
											<li><a href="./covid.php">CSR</a></li>
                                            </ul>
                                        </div>

                                        <div class="list-item">
                                            <img src="../img/top-view-hands-with-paper-cut-family.jpg">
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog <i clas s="fas fa-angle-down"></i></a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <li><a href="#">Standard Layout</a></li>
                                            <li><a href="#">Grid Layout</a></li>
                                            <li><a href="#">single Post Layout</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages <i class="fas fa-angle-down"></i></a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">Register</a></li>
                                            <li><a href="#">Faq</a></li>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <!-- -------------------------------------MENU -->
                                    <a href="#">Fatured <i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu mega-menu mega-menu-column-4">
                                        <div class="list-item text-center">
                                            <a href="#">
                                                <img src="../img/medicine/NERVISTRONG-FORTE.JPG" alt="new Product">
                                                <h5 style="font-size:3vh" class="title">Nervistrong Forte</h5>
                                            </a>
                                        </div>
                                        <div class="list-item text-center">
                                            <a href="#">
                                                <img src="../img/medicine/Estropam-Plus.JPG" alt="new Product">
                                                <h5 style="font-size:3vh" class="title">Estropam Plus</h5>
                                            </a>
                                        </div>
                                        <div class="list-item text-center">
                                            <a href="#">
                                                <img src="../img/medicine/Espanto-DSR.JPG" alt="new Product">
                                                <h5 style="font-size:3vh" class="title">Espanto-DSR</h5>
                                            </a>
                                        </div>
                                        <div class="list-item text-center">
                                            <a href="#">
                                                <img src="../img/medicine/Xontibac-C.JPG" alt="new Product">
                                                <h5 style="font-size:3vh" class="title">Xontibac-C</h5>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- menu end here -->
                    <div class="header-item item-right">
                        <a href="#"><i class="fas fa-search"></i></a>
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        <!-- mobile menu trigger -->
                        <div class="mobile-menu-trigger">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

            <div style="position: relative;" class="container-fluid">
                <div class="row">
                    <div class="image-container">
                        <img src="../img/covid.jpg" alt="ESTRO Responsibility">
                    </div>
                </div>
                <div style="position:absolute;top:70%;right:2%;" class="container-fluid">
                    <div class="row ">
                        <!-- <div class="col-sm-2">.</div> -->
                        <div class="mis-open col-4">
                            <h2 style="margin-left:2%;padding:16px;text-decoration: none;font: weight 600 ;color: white;">
                               COVID19</h2>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12  mt-3 ml-3">
                        <h1 style="font-size:3.5em;" class="hide">COVID-19 Relief Efforts</h1>
                        <p>In times of crisis, we extended a helping hand by distributing essential amenities to those in need. Witness the impact of our community-driven initiatives through these heartfelt images.</p>
                    </div>
                </div>
            </div>
            <div style="margin:2.8em 0;" class="container-fluid">
                <div class="row">
                    <div class="col-md-6">  <div class="card" style="width:100%;height: auto;">
                        <img src="../img/TEAMIMAGES/COVID_img2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><b style="font-size:1.2em;font-weight: 300;">Public awareness</b> Collaborating with health authorities and media outlets</h5>
                        </div>
                    </div></div>
                    <div class="col-md-6"><h1>Workplace Wellness:</h1><h3>During COVID-19, we raised public awareness through campaigns, educating about preventive measures like mask-wearing and hand hygiene. Collaborating with health authorities and media outlets, we disseminated vital information to curb transmission, fostering a safer environment for all.During COVID-19, we raised public awareness.</h3></div>
                </div>
            </div>
        

<div class="container-fluid mb-4">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/TEAMIMAGES/COVID_img3.png" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block">
            <h5 style="color: black;">Mask and Sanitizer Distribution</h5>
            <p style="color: black;">We swiftly distributed masks and raised awareness about sanitizer use, responding effectively to public health crises. Through collaboration with government agencies, healthcare providers, and community organizations, we ensured widespread access to essential supplies, mitigating the spread of diseases like COVID-19 and promoting community well-being.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/TEAMIMAGES/COVID_img5.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5 style="color: black;">Corporate Serenity: Embracing Wellness through Workplace Yoga</h5>
            <p style="color: black;">In the office sanctuary, employees flow through yoga poses, shedding stress with each breath. A serene balance emerges, fostering well-being amid the daily hustle.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/TEAMIMAGES/COVID_img6.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5 style="color: black;">Corporate Triumphs: Unveiling Joyful Moments Together</h5>
            <p style="color: black;">In the corporate hive, a symphony of success echoes as colleagues celebrate achievements. Laughter, clinking glasses, and shared victories weave a tapestry of camaraderie, turning milestones into memories.

            </p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<?php include './footer.php'; ?>
            <!-- -----------bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                crossorigin="anonymous"></script>
        
            <script src="../js/script.js"></script>
        </body>

</html>
