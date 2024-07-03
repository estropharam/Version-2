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
    .awards-section {
    background-color: #f8f9fa;
    padding: 60px 0;
    }

    .section-title {
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-weight: bold;
    }

    .section-subtitle {
    font-size: 1.25rem;
    margin-bottom: 40px;
    color: #6c757d;
    }

    .award-item {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 466px;}

    .award-image {
    max-height: 308px;
    margin-bottom: 23px;
}

    .award-title {
    font-size: 1.5rem;
    margin-bottom: 10px;
    font-weight: bold;
    }

    .award-description {
    font-size: 1rem;
    color: #6c757d;
    }

        </style>
    </head>

    <body>

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
                                                    <li><a href="../corporate.php">Company</a></li>
                                                <li><a href="../subpage/covid.php">CSR</a></li>
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
                                        <a href="#">Featured <i class="fa fa-angle-down"></i></a>
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

            <body>
                <div style="position: relative;" class="container-fluid">
                    <div class="row">
                        <div class="image-container">
                            <img src="../img/Beige Aesthetic Pastel Collage Memories Moodboard Portrait Photo Collage.png" alt="ESTRO Responsibility">
                        </div>
                    </div>
                    <div style="position:absolute;top:70%;right:2%;" class="container-fluid">
                        <div class="row ">
                            <!-- <div class="col-sm-2">.</div> -->
                            <div class="mis-open col-4">
                                <h2 style="margin-left:2%;padding:16px;text-decoration: none;font: weight 600 ;">
                                Awards</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="awards" class="awards-section py-5">
                    <div class="container">
                    <div class="row">
                        <div class="col text-center mb-4">
                        <h2 class="section-title">Celebrating Excellence and Achievements</h2>
                        <p class="section-subtitle">Our dedicated team members are honored for their outstanding contributions and commitment to excellence in the pharmaceutical industry.</p>
                        </div>
                    </div>
                    <div class="row">
                       
                        <!-- Award Item -->
                        <div class="col-md-4 mb-4">
                        <div class="award-item text-center">
                            <img src="../img/award/448143672_980791294054412_6038987969612771716_n.jpg" alt="Award 2" class="award-image img-fluid">
                            <h3 class="award-title">Honoring Our Sales Champions</h3>
                            <p class="award-description">We proudly recognize the exceptional performance and unwavering dedication of our sales team. Their daily commitment drives our success and fuels our continuous growth.</p>
                        </div>
                        </div>
                         <!-- Award Item -->
                         <div class="col-md-4 mb-4">
                            <div class="award-item text-center">
                                <img src="../img/award/chief.jpg" alt="Award 1" class="award-image img-fluid">
                                <h3 class="award-title">Honoring Our Esteemed Guest</h3>
                                <p class="award-description">We are privileged to host a special ceremony to honor our distinguished guest, recognizing their outstanding contributions and unwavering support to our mission.</p>
                            </div>
                            </div>
                        <!-- Award Item -->
                        <div class="col-md-4 mb-4">
                        <div class="award-item text-center">
                            <img src="../img/award/448150940_980791190721089_3482298943334792268_n.jpg" alt="Award 3" class="award-image img-fluid">
                            <h3 class="award-title">Spotlight on Our Exceptional Team</h3>
                            <p class="award-description">Description: Highlighting the accomplishments and dedication of our esteemed employees, whose contributions drive innovation and excellence in the pharmaceutical field.






                            </p>
                        </div>
                        </div>
                        <!-- More Award Items can be added similarly -->
                    </div>
                    </div>
                </section>
                

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
