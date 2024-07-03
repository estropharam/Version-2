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
        .image-container {
            width: 100%;
            max-width: 100%;
            height: 400px;
            overflow: hidden;
            position: relative;
            padding: 0;
        }

        .custom-file-input {
            display: none;
        }

        .custom-file-label {
            cursor: pointer;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .mis-open {
            background-color: #A7E6FF;
            left: 2%;
            border-radius: 10px;
            text-align: left;
            height: 4em;
            width: auto;
            padding: auto;
            /* z-index: 200; */
            color: rgb(0, 0, 0);
            -webkit-text-stroke: 0.20000px rgb(95, 95, 95);
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

        .carousel-indicators [data-bs-target] {
            background-color: black;
        }


        body {
            margin-top: 20px;
        }

        .p-15px {
            padding: 15px;
        }

        .border-color-gray {
            border-color: #f2f3fa;
        }

        .border-all-1 {
            border: 1px solid;
        }

        .hover-top {
            position: relative;
            top: 0;
        }

        .m-15px-tb {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .overlay-link {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border: 0;
        }

        .border-radius-50 {
            border-radius: 50%;
        }

        .icon-50 {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 21px;
        }

        .white-color {
            color: #ffffff;
        }

        .theme-bg {
            background-color: #0050d8;
        }

        .icon-50 i.number {
            font-style: normal;
        }

        .icon-50 i {
            line-height: 50px;
        }

        .p-20px-l {
            padding-left: 20px;
        }

        .p-10px-lr {
            padding-left: 10px;
            padding-right: 10px;
        }

        .p-0px-tb {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .border-radius-15 {
            border-radius: 15px;
        }

        .white-color {
            color: #ffffff;
        }

        .theme2nd-bg {
            background-color: #53d267;
        }

        .m-0px {
            margin: 0px;
        }

        .font-small {
            font-size: .75rem;
            line-height: 1rem;
        }

        .green-bg-alt {
            background-color: rgba(17, 226, 121, 0.1);
        }

        .green-bg {
            background-color: #11e279;
        }

        .green-after:after {
            background-color: #11e279;
        }

        .green-before:before {
            background-color: #11e279;
        }

        .green-color-alt {
            color: rgba(17, 226, 121, 0.65);
        }

        .green-color {
            color: #11e279;
        }

        .blue-bg-alt {
            background-color: rgba(21, 178, 236, 0.1);
        }

        .blue-bg {
            background-color: #15b2ec;
        }

        .blue-after:after {
            background-color: #15b2ec;
        }

        .blue-before:before {
            background-color: #15b2ec;
        }

        .blue-color-alt {
            color: rgba(21, 178, 236, 0.65);
        }

        .blue-color {
            color: #15b2ec;
        }

        .pink-bg-alt {
            background-color: rgba(241, 38, 153, 0.1);
        }

        .pink-bg {
            background-color: #f12699;
        }

        .pink-after:after {
            background-color: #f12699;
        }

        .pink-before:before {
            background-color: #f12699;
        }

        .pink-color-alt {
            color: rgba(241, 38, 153, 0.65);
        }

        .pink-color {
            color: #f12699;
        }

        .body-bg-alt {
            background-color: rgba(113, 128, 150, 0.1);
        }

        .body-bg {
            background-color: #718096;
        }

        .body-after:after {
            background-color: #718096;
        }

        .body-before:before {
            background-color: #718096;
        }

        .body-color-alt {
            color: rgba(113, 128, 150, 0.65);
        }

        .body-color {
            color: #718096;
        }

        .white-color-light {
            color: rgba(255, 255, 255, 0.65);
        }

        .bg-transparent {
            background-color: transparent;
        }

        .theme-g-bg {
            background: linear-gradient(to right, #0050d8, #002a72);
        }

        .dark-g-bg {
            background: linear-gradient(50deg, #273444 0, #272b44 100%);
        }

        .yellow-bg {
            background-color: #ffbe3d;
        }

        .border-radius-50 {
            border-radius: 50%;
        }

        .icon-50 {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 21px;
        }

        .box-shadow-only-hover:hover {
            box-shadow: 0 1.5rem 4rem rgba(22, 28, 45, 0.1);
        }

        .border-color-gray {
            border-color: #f2f3fa !important;
        }

        .border-all-1 {
            border: 1px solid;
        }

        .titles {
            width: 100%;
            font-size: 1.5em;
        }

        input[type="file"]::file-selector-button {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #fmor {
            background-color: #01204E;
            color: rgb(0 6 48);
            padding: 2.6%;
            padding-bottom: 2%;
            border-radius: 54px 0 1px 0px;
            background-image: linear-gradient(88deg, lightblue, #1156be);
            margin-right: -7px;
        }

        .btn-primary {
            background-image: linear-gradient(88deg, #1156be, lightblue);
            color: black;
        }

        @media(max-width: 583px) {
            #fmor {
                background-color: #01204E;
                color: rgb(255, 255, 255);
                padding: 2%;
                padding-bottom: 2%;
                border-radius: 0;
                background-image: linear-gradient(88deg, lightblue, #1156be);
                margin-right: -7px;
            }

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
        <!-- <-------------------header-end--------------->

        <body>
            <div style="position: relative;" class="container-fluid">
                <div class="row">
                    <div class="image-container">
                        <img src="../img/careers.jpg" alt="ESTRO Responsibility">
                    </div>
                </div>
                <div style="position:absolute;top:70%;right:2%;" class="container-fluid">
                    <div class="row ">
                        <!-- <div class="col-sm-2">.</div> -->
                        <div class="mis-open col-4">
                            <h2 style="margin-left:2%;padding:16px;text-decoration: none;font: weight 600 ;">CAREERS
                            </h2>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12  mt-3 ml-3">
                        <h1 style="font-size:3.5em;display: inline;" class="hide">Unlock Your Potential!</h1>

                        <div style="padding-left: 15px;">

                        </div>
                    </div>
                </div>
            </div>
            <section style="margin-top:4%;" class="section">
                <div class="container">
                    <div class="row md-m-25px-b m-45px-b justify-content-center text-center">
                        <div class="col-lg-8">
                            <h3 class="h1 m-15px-b">Job Positions</h3>
                            <!-- <p class="m-0px font-2">Luper is a HTML5 template based on Sass and Bootstrap 4 with modern and creative multipurpose design you can use it as a startups.</p> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 m-15px-tb">
                            <div style="background-color: #EEEEEE;border-radius: 23px;" class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px">
                                <!-- <a class="overlay-link" href="#"></a> -->
                                <div class="icon-50 theme-bg white-color border-radius-50 d-inline-block">
                                    <i style="font-size: 0.8em;" class="number">HR</i>
                                </div>
                                <div class="p-20px-l media-body">
                                    <span class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15">Full
                                        time</span>
                                    <h6 class="m-5px-tb"><b>Human Resources (HR) Professional</b></h6>
                                    <p>Estro Pharmaceuticals Pvt. Ltd. is looking for a dynamic and experienced Human Resources (HR) Professional to join our team. The HR Professional will play a crucial role in managing and enhancing our workforce by recruiting, developing, and retaining top talent.</p>
                                    <p class="m-0px font-small">
                                    <H6>INDIA,UP</H6>
                                    </p>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Apply
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 m-15px-tb">
                            <div style="background-color: #EEEEEE;border-radius: 23px;" class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px">
                                <!-- <a class="overlay-link" href="#"></a> -->
                                <div class="icon-50 green-bg white-color border-radius-50 d-inline-block">
                                    <i class="number">DA</i>
                                </div>
                                <div class="p-20px-l media-body">
                                    <span class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15">Full
                                        time</span>
                                    <h6 class="m-5px-tb"><b>Data Analyst</b></h6>
                                    <p>Estro Pharmaceuticals Pvt. Ltd. is seeking a skilled and analytical Data Analyst to join our team. The Data Analyst will be instrumental in transforming data into actionable insights, supporting strategic decisions, and enhancing business performance through comprehensive data analysis and reporting.</p>
                                    <p class="m-0px font-small">
                                    <H6>INDIA,UP</H6>
                                    </p>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        Apply
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 m-15px-tb">
                            <div style="background-color: #EEEEEE;border-radius: 23px;" class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px">
                                <!-- <a class="overlay-link" href="#"></a> -->
                                <div class="icon-50 yellow-bg white-color border-radius-50 d-inline-block">
                                    <i class="number"> ITS</i>
                                </div>
                                <div class="p-20px-l media-body">
                                    <span class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15">Full
                                        time</span>
                                    <h6 class="m-5px-tb"><b>IT Support Specialist</b></h6>
                                    <p>Estro Pharmaceuticals Pvt. Ltd. is a leading pharmaceutical company dedicated to advancing healthcare through innovative solutions. Our team is committed to excellence, and we are seeking a skilled IT Support Specialist to join our dynamic IT department.</p>
                                    <p class="m-0px font-small">
                                    <h6>INDIA,UP</h6>
                                    </p>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                        Apply
                                    </button>
                                </div>
                            </div>
                        </div>

            </section>




            <!-- Modal-1 -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="exampleModalLabel">Business Development</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div style="padding: 7px;" class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>HR Professional
                                        </h3>
                                        <p>Estro Pharmaceuticals Pvt. Ltd. is hiring a Healthcare Executive to play a crucial role in our team. Your responsibilities will include:</p>
                                        <ul style="list-style: circle;">
                                            <li>Oversee the recruitment and selection process to attract, hire, and retain qualified candidates.
                                            </li>
                                            <li> Develop and implement HR policies and procedures in alignment with company goals.</li>
                                            <li>Manage employee relations, including conflict resolution and fostering a positive work environment.</li>
                                            <li>Maintain employee records and manage HR databases.</li>
                                            <li>Develop and implement compensation and benefits programs.</li>
                                            <li>Handle disciplinary actions and terminations when necessary.</li>
                                        </ul>
                                        <p>Please submit your resume and cover letter detailing your qualifications and experience.</p>
                                        <p>We look forward to welcoming a dedicated HR Professional to our team at Estro Pharmaceuticals Pvt. Ltd.!</p>
                                    </div>
                                    <div style="padding: 0;" class="col-lg-6">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div style="padding: 0%;" col-12>
                                                    <form id="fmor" target="none">
                                                        <div class="row" style="margin-right: 0%;">
                                                            <div class="col-6">
                                                                <tittle class="titles">First Name:*</tittle>
                                                                <input style="width: 100%;" placeholder="" name="firstname" width="100%" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <tittle class="titles">Last Name:*</tittle>
                                                                <input style="width: 100%;" placeholder="" name="firstname" width="100%" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <tittle class="titles">Phone:*</tittle>
                                                                <input type="number" display: block;" placeholder="" name="firstname" width="100%" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <tittle class="titles">Email:*</tittle>
                                                                <input type="email" placeholder="" name="firstname" width="100%">
                                                            </div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div class="col-12">
                                                            <tittle class="titles">Experience:</tittle>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div>
                                                                <div>
                                                                    <tittle class="titles">:</tittle>
                                                                </div>
                                                                <select style="width: 20%;height: 47px;border-radius: 0.3em;text-align: center;border: none;">
                                                                    <option>Select</option>
                                                                    <option>HR</option>
                                                                    <option>DA</option>
                                                                    <option>ITS</option>
                                                                </select>
                                                                <tittle for="fileInput">
                                                                    Upload your CV:
                                                                </tittle>
                                                                <input type="file" id="fileInput">
                                                            </div>
                                                        </div>
                                                        <div style="display: flex;justify-content: center;margin-top:28px;width:100% ">
                                                            <button style="width: 100%;" type="Submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal-2-->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="exampleModalLabel">Business Development</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div style="padding: 7px;" class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>Data Analyst
                                        </h3>
                                        <p>We are seeking a Data Analyst to join our team. In this role, you will analyze data, create reports, and provide insights to help drive business decisions. The ideal candidate will have experience with SQL, Excel, and data visualization tools.

                                        <h5>Responsibilities</h5>
                                        <ul style="list-style: circle;">
                                            <li>Analyze and interpret data trends.</li>
                                            <li>Create reports and dashboards.</li>
                                            <li>Collaborating on delivering high-quality healthcare solutions.</li>
                                            <li>Support decision-making with data-driven insights.</li>
                                        </ul>
                                        <h5>Qualifications:</h5>
                                        <ul style="list-style: circle;">
                                            <li>Bachelor’s degree in a relevant field.</li>
                                            <li>1+ years of experience in data analysis.</li>
                                            <li>Proficiency in SQL and Excel.</li>
                                        </ul>
                                        <p>Feel free to choose or adapt any of these descriptions based on what you’re looking for in a Data Analyst,Feel free to adjust any of these based on the specific needs and focus of your position.</p>
                                        <p>We look forward to welcoming new members to our dedicated team at Estro Pharmaceuticals Pvt. Ltd.!</p>
                                    </div>
                                    <div style="padding: 0;" class="col-lg-6">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div style="padding: 0%;" col-12>
                                                    <form id="fmor" target="none">
                                                        <div class="row" style="margin-right: 0%;">
                                                            <div class="col-6">
                                                                <tittle class="titles">First Name:*</tittle>
                                                                <input style="width: 100%;" placeholder="" name="firstname" width="100%" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <tittle class="titles">Last Name:*</tittle>
                                                                <input style="width: 100%;" placeholder="" name="firstname" width="100%" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <tittle class="titles">Phone:*</tittle>
                                                                <input type="number" display: block;" placeholder="" name="firstname" width="100%" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <tittle class="titles">Email:*</tittle>
                                                                <input type="email" placeholder="" name="firstname" width="100%">
                                                            </div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div class="col-12">
                                                            <tittle class="titles">Experience:</tittle>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div>
                                                                <div>
                                                                    <tittle class="titles">Role:</tittle>
                                                                </div>
                                                                <select style="width: 20%;height: 47px;border-radius: 0.3em;text-align: center;border: none;">
                                                                    <option>Select</option>
                                                                    <option>HR</option>
                                                                    <option>DA</option>
                                                                    <option>ITS</option>
                                                                </select>
                                                                <tittle for="fileInput">
                                                                    Upload your CV:
                                                                </tittle>
                                                                <input type="file" id="fileInput">
                                                            </div>
                                                        </div>
                                                        <div style="display: flex;justify-content: center;margin-top:28px;width:100% ">
                                                            <button style="width: 100%;" type="Submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal2-->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="exampleModalLabel">Business Development</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div style="padding: 7px;" class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>IT Support Specialist
                                        </h3>
                                        <p>The IT Support Specialist is responsible for providing technical support to employees, maintaining IT systems, and ensuring the smooth operation of all technology-related functions. This role requires a blend of technical expertise, problem-solving skills, and the ability to work collaboratively with various departments.

                                        <h5>Responsibilities</h5>
                                        <ul style="list-style: circle;">
                                            <li>Technical Support: Provide end-user support for hardware, software, and network issues. Troubleshoot and resolve technical problems efficiently and effectively.</li>
                                            <li>System Maintenance: Perform routine maintenance on IT systems, including updates, backups, and monitoring system performance.</li>
                                            <li>Network Administration: Assist in managing network infrastructure, including configuration, troubleshooting, and ensuring network security.</li>
                                            <li>Software Installation: Install and configure software applications and ensure they are up-to-date.</li>
                                        </ul>
                                        <h5>Qualifications:</h5>
                                        <ul style="list-style: circle;">
                                            <li>Education: Bachelor’s degree in Information Technology, Computer Science, or a related field.</li>
                                            <li>Skills: Strong knowledge of Windows and macOS operating systems, networking concepts, and common software applications. Proficiency in troubleshooting hardware and software issues.</li>
                                            <li>Soft Skills: Excellent communication and interpersonal skills. Ability to work both independently and as part of a team. Strong problem-solving abilities and attention to detail.</li>
                                        </ul>
                                        <p>Feel free to choose or adapt any of these descriptions based on what you’re looking for in a Data Analyst,Feel free to adjust any of these based on the specific needs and focus of your position.</p>
                                        <p>We look forward to welcoming new members to our dedicated team at Estro Pharmaceuticals Pvt. Ltd.!</p>
                                    </div>
                                    <div style="padding: 0;" class="col-lg-6">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div style="padding: 0%;" col-12>
                                                    <form id="fmor" target="none">
                                                        <div class="row" style="margin-right: 0%;">
                                                            <div class="col-6">
                                                                <tittle class="titles">First Name:*</tittle>
                                                                <input style="width: 100%;" placeholder="" name="firstname" width="100%" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <tittle class="titles">Last Name:*</tittle>
                                                                <input style="width: 100%;" placeholder="" name="firstname" width="100%" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <tittle class="titles">Phone:*</tittle>
                                                                <input type="number" display: block;" placeholder="" name="firstname" width="100%" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <tittle class="titles">Email:*</tittle>
                                                                <input type="email" placeholder="" name="firstname" width="100%">
                                                            </div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div class="col-12">
                                                            <tittle class="titles">Experience:</tittle>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div>
                                                                <div>
                                                                    <tittle class="titles">Role:</tittle>
                                                                </div>
                                                                <select  style="width: 20%;height: 47px;border-radius: 0.3em;text-align: center;">
                                                                    <option>Select</option>
                                                                    <option>HR</option>
                                                                    <option>DA</option>
                                                                    <option>ITS</option>
                                                                </select>
                                                                <tittle for="fileInput">
                                                                    Upload your CV:
                                                                </tittle>
                                                                <input type="file" id="fileInput">
                                                            </div>
                                                        </div>
                                                        <div style="display: flex;justify-content: center;margin-top:28px;width:100% ">
                                                            <button style="width: 100%;" type="Submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color:#EEEEEE;" class="container-fluid">
                <div style="padding: 2% 1%; " class="row">
                    <h2 style="display: flex;justify-content: center;padding-bottom:2%;font-size: 3em;">Why Join Us
                        </h2>
                        <div class="crd col-md-6">
                            <div class="col-2"><svg style="color: #FF7F3E;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm8.096 10.803L6 6.707v2.768a.5.5 0 0 1-1 0V5.5a.5.5 0 0 1 .5-.5h3.975a.5.5 0 1 1 0 1H6.707l4.096 4.096a.5.5 0 1 1-.707.707" />
                                </svg></div>
                            <h2 style="margin-top: 15px;">Growth and Development Opportunities</h2>
                            <div class="col-12">We believe in nurturing talent and providing continuous learning
                                opportunities. Our employees are encouraged to pursue professional development
                                through training programs, workshops, and mentorship, ensuring they grow both
                                personally and professionally.</div>
                        </div>
                        <div class="crd col-md-6">
                            <div class="col-2"><svg style="color: #FF7F3E;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                </svg>
                            </div>
                            <h2 style="margin-top: 15px;">Collaborative Work Environment</h2>
                            <div class="col-12">Our success is built on collaboration and teamwork. We foster an
                                inclusive and supportive work culture where diverse perspectives are valued, and
                                innovative ideas are welcomed. Employees work together across departments to achieve
                                common goals and make meaningful contributions.</div>
                        </div>
                        <div class="crd col-md-6">
                            <div class="col-2"><svg style="color: #FF7F3E;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0" />
                                </svg></div>
                            <h3 style="margin-top: 15px;">Impactful Work</h3>
                            <div class="col-12">Join us to make a real difference in the world. Our work directly
                                impacts the lives of patients globally, and each team member plays a crucial role in
                                this mission. Experience the fulfillment that comes from knowing your efforts are
                                contributing to improved health outcomes and quality of life.

                                Ready to take the next step in your career? Explore our current job openings and
                                submit your application today!</div>
                        </div>
                </div>
            </div>
            </div>
            <?php include './footer.php'; ?>
            <!-- -----------bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

            <script src="../js/script.js"></script>
        </body>

</html>