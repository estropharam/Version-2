<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <!--------favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../img/ICON/favicon-32x32.png">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <!-- <link rel="stylesheet" type="text/css" href="../css/prod.css"> -->
  <title>Products</title>
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
                    <h4 class="title">Collabs</h4>
                    <ul>
                      <li><a href="#">Product List</a></li>
                      <li><a href="#">Product List</a></li>
                    </ul>

                    <h4 class="title">Medicine</h4>
                    <ul>
                      <li><a href="../subpage/product.php">CNS</a></li>
                      <li><a href="../subpage/product.php">DIV</a></li>

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
                    <img src="/img/top-view-hands-with-paper-cut-family.jpg">
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



  <table class="table table-bordered border-black">
    <thead>
      <tr>
        <th style="background-color:#3887BE; color: white;" scope="col">S.NO</th>
        <th style="background-color:#3887BE; color: white;">PRODUCT</th>
        <th style="background-color:#3887BE; color: white;text-align: center;">COMPOSITION</th>
        <th style="background-color:#3887BE; color: white;">INDICATIONS</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row"> 01.</th>
        <td>BOMYCES-250</td>
        <td>Lyophilized Saccharomyces Boulardii 282.5mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Bomyces-250</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Bomyces-250.JPG" alt="Bomyces-250" style="height:302px">
                </div>
                <div class="modal-footer">

                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal2">next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

        </a></td>
      </tr>
      <tr>
        <th scope="row">02.</th>
        <td>DIVORATE-ER 250</td>
        <td>Divalproex 250 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">DIVORATE-ER 250</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Divorate-ER.JPG" alt="DIVORATE-ER 250" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" style="z-index: 100;" data-bs-toggle="modal" data-bs-target="#exampleModal1">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal3">Next</button>

                </div>
              </div>
            </div>
          </div>
        </td>

        </a></td>
      </tr>


      <tr>
        <th scope="row">03.</th>
        <td>DIVORATE-ER 500</td>
        <td>Divalproex 500 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">DIVORATE-ER 500</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Divorate-ER.JPG" alt="DIVORATE-ER 500" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal2">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal4">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">04.</th>
        <td>DIVORATE-ER 750</td>
        <td>Divalproex 750 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal4">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">DIVORATE-ER 750</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Divorate-ER.JPG" alt="DIVORATE-ER 750" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal3">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal5">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <th scope="row">05.</th>
      <td>DIVORATE-ER 1000</td>
      <td>Divalproex 1000 mg</td>
      <td>
        <!-- Product POP UP And Close Button -->
        <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal5">
          VIEW
        </button>
        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">DIVORATE-ER 1000</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="../img/medicine/Divorate-ER.JPG" alt="Bomyces-250" style="height:302px">
              </div>
              <div class="modal-footer">
                <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal4">Previous</button>
                <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal6">Next</button>
              </div>
            </div>
          </div>
        </div>
      </td>

      </tr>
      <th scope="row">06.</th>
      <td>ESPANTO-40</td>
      <td>Pantoprazole 40 mg</td>
      <td>
        <!-- Product POP UP And Close Button -->
        <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal6">
          VIEW
        </button>
        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ESPANTO-40</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="../img/medicine/Espanto-40.JPG" alt="ESPANTO-40" style="height:302px">
              </div>
              <div class="modal-footer">
                <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal5">Previous</button>
                <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal7">Next</button>
              </div>
            </div>
          </div>
        </div>
      </td>

      </tr>
      <th scope="row">07.</th>
      <td>ESTROCIUM - D3 Plus</td>
      <td>Calcitrol 0.25mg + Calcium Carbonate 500mg +Zinc Sulphate
        Monohydate 7.5mg</td>
      <td>
        <!-- Product POP UP And Close Button -->
        <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal7">
          VIEW
        </button>
        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ESTROCIUM - D3 Plus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="../img/medicine/Estrocium-D3_Plus.JPG" alt="ESTROCIUM - D3 Plus" style="height:302px">
              </div>
              <div class="modal-footer">
                <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal6">Previous</button>
                <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal8">Next</button>
              </div>
            </div>
          </div>
        </div>
      </td>

      </tr>
      <tr>
        <th scope="row">08.</th>
        <td>ESTROPAM-5</td>
        <td>Escitalopram 5 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal8">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ESTROPAM-5</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Estropam.JPG" alt="ESTROPAM-5" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal7">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal9">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">09.</th>
        <td>ECTIN</td>
        <td>Ivermectin</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal9">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ECTIN</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="#" alt="ECTIN" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal8">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal10">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">10.</th>
        <td>ESTROPAM-10</td>
        <td>Escitalopram 10 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal10">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ESTROPAM-10</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Estropam.JPG" alt="ESTROPAM-10" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal9">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal11">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">11.</th>
        <td>NERVISTRONG - FORTE</td>
        <td>Methylcobalamin 1000 mcg + Thiamine 100mg + Pyridoxine 100mg+ Niacinamide 100mg+ D-panthenol 50mg inj</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal11">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">NERVISTRONG - FORTE</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/NERVISTRONG-FORTE.JPG" alt="NERVISTRONG - FORTE" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal10">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal12">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">12.</th>
        <td>ESTROPAM PLUS</td>
        <td>Escitalopram 10mg + Clonazepam 0.5mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal12">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ESTROPAM PLUS</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Estropam-Plus.JPG" alt="ESTROPAM PLUS" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal11">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal13">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">13.</th>
        <td>ESTROZYME 200ml</td>
        <td>Each 5ml: Diastase 50mg + Pepsin 10mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal13">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ESTROZYME 200ml</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Estrozyme.JPG" alt="ESTROZYME 200ml" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal12">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal14">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>

      <tr>
        <th scope="row">14.</th>
        <td>FLXT - 20</td>
        <td>Fluoxetine 20mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal14">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">FLXT - 20</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Flxt.JPG" alt="FLXT - 20" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal13">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal15">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">15.</th>
        <td>FLXT - 40</td>
        <td>Fluoxetine 40mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal15">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">FLXT - 40</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Flxt.JPG" alt="FLXT - 40" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal14">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal16">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">16.</th>
        <td scope="row">FLXT - 60</td>
        <td>Fluoxetine 60mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal16">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">FLXT - 60</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Flxt.JPG" alt="FLXT - 60" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal15">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal17">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">17</th>
        <td>IPRACHOLINE - P800</td>
        <td>Citicoline 500mg + Piracitam 800mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal17">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">IPRACHOLINE - P800</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Ipracholine-P.JPG" alt="IPRACHOLINE - P800" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal16">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal18">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">18</th>
        <td>JAPTRINE - 10</td>
        <td>Amitriptyline 10mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal18">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">JAPTRINE - 10</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Japtrine.JPG" alt="JAPTRINE - 10" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal17">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal19">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">19.</th>
        <td>JAPTRINE - 25</td>
        <td>Amitriptyline 25mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal19">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">JAPTRINE - 25</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Japtrine.JPG" alt="JAPTRINE - 25" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal18">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal20">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">20.</th>
        <td>JEOPRIDE - 100</td>
        <td>Amisulpride 100mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal20">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">JEOPRIDE - 100</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Jeopride.JPG" alt="JEOPRIDE - 100" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal19">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal49">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">21.</th>
        <td>JEOCALM-AP</td>
        <td>Acceclofenace 100mg + Paracetamol 325mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal49">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal49" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">JEOCALM-AP</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Jiocalm.JPG" alt="JEOCALM-AP" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal20">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal50">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <th scope="row">22.</th>
      <td>ESPANTO-DSR</td>
      <td>Pantoprazole 40mg + Dompridone 30mg</td>
      <td>
        <!-- Product POP UP And Close Button -->
        <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal50">
          VIEW
        </button>
        <div class="modal fade" id="exampleModal50" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ESPANTO-DSR</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="../img/medicine/Espanto-DSR.JPG" alt="ESPANTO-DSR" style="height:302px">
              </div>
              <div class="modal-footer">
                <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal49">Previous</button>
                <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal22">Next</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </td>

      </tr>
      <tr>
        <th scope="row">23.</th>
        <td>NERVISTRONG - OD</td>
        <td>Methylcobalamin 1500mcg,Alpha
          lipoic acid 100mg,Benfotiamine
          15mg,Vitamin B6 3mg,Cacium
          Pantothenate 25mg,Folic acid
          1.5mg,Zinc oxide
          22.5mg,Chromium
          picolinate 65mcg & Lutein 5mg
          tab</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal22">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">NERVISTRONG - OD</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Nervistrong-OD.JPG" alt="NERVISTRONG - OD" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal50">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal23">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>

      <tr>
        <th scope="row">24.</th>
        <td>NERVISTRONG
          INJECTABLE
        </td>
        <td>Methylcobalamin 1500
          mcg(Combipack) </td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal23">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">NERVISTRONG
                    INJECTABLE</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Nervistrong.jpg" alt="NERVISTRONG
                        INJECTABLE" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal22">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal24">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">25.</th>
        <td>EPRISPAS-AC</td>
        <td>Eprisone Hydrochloride150 mg + Acceclofenace 200mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal24">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">EPRISPAS-AC</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="#" alt="EPRISPAS-AC" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal23">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal25">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">26.</th>
        <td>JEOPRIDE - 200</td>
        <td>Methylcobalamin 1000 mcg + Thiamine
          100mg + Pyridoxine 100mg+
          Niacinamide 100mg+ D-panthenol
          50mg inj.</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal25">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">JEOPRIDE - 200</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Jeopride.JPG" alt="JEOPRIDE - 200" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal24">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal26">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">27.</th>
        <td>OLIPIN 2.5</td>
        <td>Olanzapine 2.5 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal26">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">OLIPIN 2.5</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Olipin.JPG" alt="OLIPIN 2.5" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal25">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal27">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">28.</th>
        <td>OLIPIN 5</td>
        <td>Olanzapine 5 mg </td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal27">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">OLIPIN 5</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Olipin.JPG" alt="OLIPIN 5" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal26">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal28">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">29.</th>
        <td>OLIPIN 7.5</td>
        <td>Olanzapine 7.5 mg </td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal28">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">OLIPIN 7.5</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Olipin.JPG" alt="OLIPIN 7.5" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal27">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal29">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">30.</th>
        <td>OLIPIN 10</td>
        <td>Olanzapine 10 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal29">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">OLIPIN 10</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Olipin.JPG" alt="OLIPIN 10" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal28">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal99">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">31.</th>
        <td>OLIPIN 15</td>
        <td>Olanzapine 15 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal99">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal99" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">OLIPIN 15</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Olipin.JPG" alt="OLIPIN 15" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal29">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal55">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>

      <tr>
        <th scope="row">32.</th>
        <td>OXZARO - 300</td>
        <td>Oxcarbazepine 300mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal55">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal55" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">OXZARO - 300</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Oxzaro.JPG" alt="OXZARO - 300" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal99">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal75">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>

      <tr>
        <th scope="row">33.</th>
        <td>OXZARO - 302</td>
        <td>Oxcarbazepine 302mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal75">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal75" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">OXZARO - 302</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Oxzaro.JPG" alt="OXZARO - 302" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal55">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal85">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">34.</th>
        <td>OXZARO - 150</td>
        <td>Oxcarbazepine 150mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal85">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal85" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">OXZARO -150</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Oxzaro.JPG" alt="OXZARO - 150" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal75">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal95">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">35.</th>
        <td>QFRESH - 50</td>
        <td>Quetiapine 50mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal95">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal95" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">QFRESH - 50</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Qfresh.JPG" alt="QFRESH - 50" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal85">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal105">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">36.</th>
        <td>QFRESH - 100</td>
        <td>Quetiapine 100mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal105">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal105" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">QFRESH - 100</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Qfresh.JPG" alt="QFRESH - 100" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal95">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal1105">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">37.</th>
        <td>STROVIT DROP</td>
        <td>Multi-Vitamins</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal1105">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal1105" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">STROVIT DROP</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Strovit_drop.JPG" alt="STROVIT DROP" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal105">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal11105">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">38.</th>
        <td>STROVIT SYP 200</td>
        <td>Omega 3 Fatty Acid, Green Tea
          Extract, Ginkgo Biloba, Ginseng
          Extract, Grape Seed Extract,
          Multimineral, Multivitamin with
          Antioxidents & Trace Element</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal11105">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal11105" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">STROVIT SYP 200</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Strovit.JPG" alt="STROVIT SYP 200" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal1105">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal225">Next</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">39.</th>
        <td>STROVIT - 4G</td>
        <td>Omega 3 Fatty Acid, Green Tea
          Extract, Ginkgo</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal225">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal225" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">STROVIT - 4G</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Strovit-4G.JPG" alt="STROVIT - 4G" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal11105">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal325">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">40.</th>
        <td>ZAPMIR - 7.5</td>
        <td>Mirtazepine - 7.5mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal325">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal325" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ZAPMIR - 7.5</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Zapmir.JPG" alt="ZAPMIR - 7.5" style="height:302px;width:500px">
                </div>
                <div class="modal-footer">

                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal225">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal40">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>

      <tr>
        <th scope="row">41.</th>
        <td>ZAPMIR - 15</td>
        <td>Mirtazepine - 15mg </td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal40">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal40" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ZAPMIR - 15</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Zapmir.JPG" alt="ZAPMIR - 15" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal325">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal41">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">42.</th>
        <td>ZEALPAM 0.25</td>
        <td>Clonazepam 0.25 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal41">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal41" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ZEALPAM 0.25</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Zealpam.JPG" alt="ZEALPAM 0.25" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal40">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal42">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">43.</th>
        <td>ZEALPAM 0.5</td>
        <td>Clonazepam 0.5 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal42">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal42" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ZEALPAM 0.5</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Zealpam.JPG" alt="ZEALPAM 0.5" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal41">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal43">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">44.</th>
        <td>ZEALPAM 1 </td>
        <td>Clonazepam 1 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal43">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal43" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ZEALPAM 1</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Zealpam.JPG" alt="ZEALPAM 1" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal42">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal44">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">45.</th>
        <td>ZEALPAM-EZ 0.5</td>
        <td>Etizolam 0.5</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal44">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal44" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ZEALPAM-EZ 0.5</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Zealpam-EZ.JPG" alt="ZEALPAM-EZ 0.5" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal43">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal45">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">46.</th>
        <td>ZILPOD 100 DT</td>
        <td>Cefpodoxim 100 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal45">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal45" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">ZILPOD 100 DT</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Zilpod.JPG" alt="ZILPOD 100 DT" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal44">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal46">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">47.</th>
        <td>EPRISPAS-SR</td>
        <td>Eprisone Hydrochloride150 mg</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal46">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal46" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">EPRISPAS-SR</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="#" alt="EPRISPAS-SR" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal45">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal47">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">48.</th>
        <td>NERVIPAS-CD3</td>
        <td>Alpha Lipoic Acid 200mg,
          Benfotiamine 150mg,calcium
          carbonate 500mg,chromium
          picolinate 200mg, Folic Acid 1.5
          mg Inosital 100mg,
          Methlcobalamin 1500mg,
          Pyridoxine Hydrochloride3mg &
          vitamin D3 1000 IU</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal47">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal47" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">NERVIPAS-CD3</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="#" alt="NERVIPAS-CD3" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal46">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal48">Next</button>
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">49.</th>
        <td>XONTIBAC C</td>
        <td>Ceftriaxone1gm</td>
        <td>
          <!-- Product POP UP And Close Button -->
          <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal48">
            VIEW
          </button>
          <div class="modal fade" id="exampleModal48" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">XONTIBAC C</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="../img/medicine/Xontibac-C.JPG" alt="XONTIBAC C" style="height:302px">
                </div>
                <div class="modal-footer">
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal47">Previous</button>
                  <button type="button" class="mine" data-bs-toggle="modal" data-bs-target="#exampleModal1">Back to first</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- -----------------------------------------------FOOTER -->
  <?php include './footer.php'; ?>
  <script>
    function subscribe() {
      // Get the email input value
      var email = document.getElementById("newsletter1").value;

      // Check if the email is blank
      if (email.trim() === "") {
        alert("Please fill the email address before subscribing.");
      } else {
        // Display an alert with the email address
        alert("Successfully Subscribed with: " + email);
        // You can add additional logic here to submit the form or perform other actions.
      }
      window.scrollTo({
        top: document.head.scrollHeight,
        behavior: 'smooth'
      });
    }
  </script>
  <script src="../js/script.js"></script>
  <!-- -----------bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>