        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Company Responsibility</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
            <link rel="icon" type="image/png" sizes="16x16" href="../img/ICON/favicon-32x32.png">
            <link rel="stylesheet" type="text/css" href="../css/style.css">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

                body {
                    font-family: "Nanum Gothic", sans-serif;
                }

                .g-3,
                .gy-3 {
                    --bs-gutter-y: 2rem;
                }

                .g-3,
                .gx-3 {
                    --bs-gutter-x: 1rem;
                }

                .bg-light {
                    --bs-bg-opacity: 1;
                    /* background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important; */
                    background-color: #EEEDEB;
                }

                @media(max-width:450px)
                {
                    .row-cols-1>* {
                    flex: 0 0 auto;
                    width: 50%;
                }

                p {
                    margin-top: 0;
                    margin-bottom: 1rem;
                    /* line-height: 0.8; */
                    font-size: 0.8em;
                }
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
                                    <a style="text-decoration:none;color:black;font-weight: 500;" href="../index.php">Home</a>
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
                                                <!-- <h4 class="title">Collabs</h4>
                                                <ul>
                                                    <li><a href="#">Product List</a></li>
                                                    <li><a href="#">Product List</a></li>
                                                </ul> -->

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


            <main style="background-image: linear-gradient(272deg, #00224D, lightblue, lightblue);">
                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img style="width:auto;height:400px;" src="../img/product_page_bottle_estro.png">
                                    </div>
                                </div>
                            </div>
                            <h1 id="one" class="hide lead" style="color:black;"> Empowering Health, One Dose at a Time, Experience the Commitment to Quality, Innovation, and Care with Every Product We Create.</h1>
                            <a href="#" class="btn btn-primary my-2">Enquire Now!</a>
                            <a href="#" class="btn btn-secondary my-2">Follow</a>

                        </div>
                    </div>
                </section>

                <div class="album py-5 bg-light">
                    <h2 style="display:flex;margin-bottom:1em;margin-left:0.5em;font-size:3em">Advanced Medical Products for Better Health</h2>
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Bomyces-250.JPG">

                                    <div class="card-body">
                                        <h4>BOMYCES-250</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Espanto-DSR.JPG">

                                    <div class="card-body">
                                        <h4>Espanto-DSR</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Xontibac-C.JPG">

                                    <div class="card-body">
                                        <h4>Xontibac-C</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Nervistrong-OD.JPG">

                                    <div class="card-body">
                                        <h4>Nervistrong-OD</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Strovit-4G.JPG">

                                    <div class="card-body">
                                        <h4>Strovit-4G</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Estropam-Plus.JPG">

                                    <div class="card-body">
                                        <h4><Estropam-Plus>Estropam-Plus</Estropam-Plus></h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Estropam.JPG">

                                    <div class="card-body">
                                        <h4>Estropam</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Estrocium-D3_Plus.JPG">

                                    <div class="card-body">
                                        <h4>Estrocium-D3 Plus</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Qfresh.JPG">

                                    <div class="card-body">
                                        <h4>Qfresh</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../img/medicine/Flxt.JPG">

                                    <div class="card-body">
                                        <h4>Flxt</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>



            <?php include './footer.php'; ?>
            <!-- -----------bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

            <script src="../js/script.js"></script>
            <script>
                function myFunction() {
                    document.getElementById("demo").innerHTML = "Iframe is loaded.";
                }
            </script>
        </body>

        </html>