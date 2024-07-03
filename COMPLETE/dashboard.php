<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link  >
       <? echo "<link rel="stylesheet"  type='text/css' href="./css/style.css" />"; ?>
        <title>ESTRO</title>
       <style>
          .p-3 {
        padding: 1rem !important;
        margin-top: 82px;
    }
    img, svg {
        vertical-align: middle;
        height: 67px;
    }
    .logo1{
        height: 80px;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
body{
    font-family: "Roboto Condensed", sans-serif;
    /* background-color: #35374B; */
}
/* ul li{
    list-style-type:none;
    display: inline-block;
    margin-left:40px;
    
}

ul
{  
    display: inline-block;
    position: absolute;
    left: 70%;
    color: rgb(255, 255, 255);
} */
.saletop {
    background-color: #344955;
    margin: 5px;
    border-radius: 8px;
    padding: 10px 20px;
    z-index: 1;
    width: auto;
}
/* .saletop {
    background-color:#344955;
    padding: 20px;
    border-bottom: 1px solid #ccc;
} */
.salemid{
    background-color: #344955;
    margin:0 5px;
    color: white;
    border-radius: 8px;
    padding:10px 20px;
    z-index: 0;
}
#billdate{
    position: absolute;
    left: 79%;
    display: inline-block;
}


.saletop ul {
    list-style-type: none;
    /* padding: 16px 3px; */
}

.saletop ul li {
    display: inline-block;
    margin-right: 20px;
}

.salemid {
    padding: 20px;
    margin: 3px 6px;
}

#table {
    width: 100%;
    margin-top: 10px;
    border-collapse: collapse;
}

#table th,
#table td {
    border: 0.5px solid #ddd;
    padding: 4px;
    background-color: #78A083;
    text-align: right;
    text-align: center;
    font-size: 12px;
}   

#table th {
    background-color: #f2f2f2;
    font-size: 12px;
}

#add_product {
    /* margin-top: 16px; */
    height: 36px;
    margin: 16px 0;
}
.remove_product {
    background-color: #ff0000;
    color: white;
    border: none;
    padding: 3px 6px;
    cursor: pointer;
    border-radius: 4px;
}

.remove_product:hover {
    background-color: #d32f2f;
    
}
img, svg {
    vertical-align: middle;
    height: 1rem;
}
 /* .over {
    background-color: rgb(73, 246, 96);
    height: 60px;
    border: 1px solid black;
    overflow: scroll;
  }  */
  .none{
    max-width: 300px;
    height:250px;
    color: #000000;
    border: #000000;
    border-style:solid ;
    margin: 20px 0;
    border-radius: 6px;
    display: inline-block;
    padding: 10px;
    background-color: #78A083;
  } */
  .out{
    background-color: #00c8ff;
    margin: 10px;
    
    position: absolute;
    left:20px;
  } 
   .form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: var(--bs-body-color);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: var(--bs-body-bg);
    background-clip: padding-box;
    border: var(--bs-border-width) solid var(--bs-border-color);
    border-radius: var(--bs-border-radius);
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.form-control {
    max-width: 157px;
    margin-right: 500px;
    margin-left: 8px;
    display: inline-block;
}
label {
    
    display: inline-block;
    padding: 2px 0px;
    margin: 5px -2px;
}
#el{
    
        text-align: right;
        color: rgb(0, 0, 0);
        padding: 10px 53px;
        font-size: 27px;
        font-weight: 600;
 } 
 .bg-body-tertiary {
    /* margin: 12px; */
    border-radius:4px;
    padding: 10px;
}
#grab{
    font-size: 1rem;
            color: white;
            padding: 5px 0; 
}
button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    height: 28px;
    margin: -1px 15px;
}
#val{
    font-weight: 700;
    color: #000000;
}
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
    border-radius: 4px;
  
}
  

    
       </style>
    </head>
    <body>
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html"><img class="logo1" src="Images/ESTRO-lOGO.png"></h2></a>
              <button class="navbar-toggler" type ="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Admin</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Create
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./create/emp.php"> Employee</a></li>
                        <li><a class="dropdown-item" href="./create/area.php"> Area</a></li>
                        <li><a class="dropdown-item" href="./create/stockist.php">Stockist</a></li>
                        <li><a class="dropdown-item" href="./create/mfg.php">Manufacturer</a></li>
                        <li><a class="dropdown-item" href="./create/product.php">Product</a></li></ul></li>
                        <li><a class="dropdown-item" href="./create/sales.PHP">sALES</a></li></ul></li>
                        
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sales
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./create/drpdwn.php">Primary Sales</a></li>
                        <li><a class="dropdown-item" href="#">Secondary Sales</a></li>
                        <li><a class="dropdown-item" href="#">Collection</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Yearly Report</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Purchase
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./create/emp.php"> Employee</a></li>
                        <li><a class="dropdown-item" href="./create/area.php"> Area</a></li>
                        <li><a class="dropdown-item" href="./create/mfg.php">Manufacturer</a></li>
                        <li><a class="dropdown-item" href="#">Product</a></li></ul></li>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="./create/drpdwn.php">Stock Management</a>
                    </li>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="./create/sales.PHP">Outstandings</a>
                    </li>
                 
                  <!-- <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form> -->
                </div>
              </div>
            </div>
          </nav>
       <div class="container-fluid cards text-bg-dark p-3">
        <div class="row" >
            <div class="col">
                <div class="card" style="width: 18rem;">
                    
                    <div class="card-body">
                      <h2 class="card-title">Primary Sales</h2>
                      <p class="card-text">0</p>
                      
                    </div>
                  </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                   
                    <div class="card-body">
                      <h2 class="card-title">Secondary Sales</h2>
                      <p class="card-text">0</p>
                      
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    
                    <div class="card-body">
                      <h2 class="card-title">Collection </h2>
                      <p class="card-text">0</p>
                     
                    </div>
                  </div>
            </div>
        </div>
       </div>
       <!-- <h1 class="cards">HELLO CARD</h1> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
       </div>
    </body>

    </html>