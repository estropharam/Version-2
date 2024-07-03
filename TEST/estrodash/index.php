<?php
    $options = array();
    $products = array();
    $manufacturers = array();
    require_once './dbh.php';
    try {
      $sql = "SELECT StkName FROM stockists;";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $options = $stmt->fetchAll(PDO::FETCH_ASSOC);
      // $pdo = null;
      try {
        $sqls = "SELECT ProductName FROM products;";
        $stmts = $pdo->prepare($sqls);
      $stmts->execute();
      $products = $stmts->fetchAll(PDO::FETCH_ASSOC);
      //  $pdo = null;
      try {
        $sqlss = "SELECT Manufacturer FROM manufacturer;";
        $stmtss = $pdo->prepare($sqlss);
      $stmtss->execute();
      $manufacturers = $stmtss->fetchAll(PDO::FETCH_ASSOC);
      //  $pdo = null;
      
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    ?>
    <!DOCTYPE html>
          <html lang="en">

          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
              <link href="./sales.css" rel="stylesheet">
              <title>Document</title>
          </head>
          <header>

          </header>
          <body>
            <div class="container-fluid saletop">
              <ul>
                <li>
                  <p><b>Balance: ₹ </b>0</p>
                </li>
                <li>
                  <p><b>Due Amount: ₹ </b>0</p>
                </li>
              </ul>
              <h6 id="grab" > <b>SALE BILL</b> : COUNT</h6>
            </div>
            <div class="salemid">
          <form action="./drpdwn.php" method="POST">
            <label>PARTY NAME</label>
            <select  class="table-primary" id="stkName" name="stkName">
                    <option value="<?php echo" "; ?>"><?php echo " ";?></option>
                    <?php foreach($options as $option):?>
                        <option value="<?php echo $option['StkName']; ?>"><?php echo $option['StkName']; ?></option>
                    <?php endforeach; ?>
          </select>
          <label>BillNo</label>
            <input type="text" name="billno" id="billno">
            <div id="billdate">
            <label >Bill Date</label>
            <input type="date" name="billdate">
            </div>
          </form>
            </div>
        

          <div class="salemid">
          <table style="margin-top: 10px;" id="table">
            <thead class="table-primary">
              <tr id="new">
              <th scope="col">SNo.</th>
                <th scope="col">Product Name</th>
                <th scope="col">MFG Name</th>
                <th scope="col">Pack</th>
                <th scope="col">Qty</th>
                <th scope="col">Batch</th>
                <th scope="col">Free</th>
                <th scope="col">Rate</th>
                <th scope="col">Disc%</th>
                <th scope="col">Amt</th>
                <th scope="col">Action</th>
                <th></th>
              </tr>
                    </thead>
            <tbody>
              <tr>
                <td id="val">1</td>
                <td><select  class="table-primary" id="proname" name="proname">
                    <option value="<?php echo" "; ?>"><?php echo " ";?></option>
                    <?php foreach($products as $product):?>
                        <option value="<?php echo $product['ProductName']; ?>"><?php echo $product['ProductName']; ?></option>
                    <?php endforeach; ?>
          </select></td>
                <!--  -->
                <td>
                <select  class="table-primary" id="mfgName" name="mfgName">
                    <option value="<?php echo" "; ?>"><?php echo " ";?></option>
                    <?php foreach($manufacturers as $manufacturer):?>
                        <option value="<?php echo $manufacturer['Manufacturer']; ?>"><?php echo $manufacturer['Manufacturer']; ?></option>
                    <?php endforeach; ?>
          </select></td>
                <td><input style="max-width:40px" type="text" name="packing[]"></td>
                <td><input style="max-width:40px" type="text" name="Qty[]"></td>
                <td><input style="max-width:40px" type="text" name="batch[]"></td>
                <td><input style="max-width:40px" type="text" name="free[]"></td>
                <td><input style="max-width:40px" type="text" name="rate[]"></td>
                <td><input style="max-width:40px" type="text" name="disc[]"></td>
                <td><input style="max-width:40px" type="text" name="amt[]"></td>
                <td><button type="button" class="remove_product"><img src="../Images/326606_delete_icon.png" height="20%" alt="delITEm" ></button></td>
                <td><a  target="_blank" href="./product.php"><button type="button" class="edit_product"><img src="../Images/create-note-svgrepo-com.png" height="20%" alt="delITEm" ></button></a></td>
              </tr>
            </tbody>
            <thead class="table-primary">
              <tr id="new">
                <th scope="col">0.00</th>
                <th scope="col"></th>
                <th scope="col">0.00</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">goods value</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">0.00</th>
                <th scope="col"></th>
              </tr>
            </thead>
          </table>
          <button type="button" class="btn btn-success" id="add_product">Add Product</button>
          <button type="button" class="btn btn-warning" id="add_product" type="submit">Generate Invoice</button>
          </div>
          
        
          
    <div class="salemid">
          <div class="album py-5 bg-body-tertiary">
      <class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" ><title>Discount Info</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Discount Info</text></svg>
              <div class="card-body">
                <h6 style="color: black";>Total Item Disc:</h6>
                <br>
                <h6 style="color: black";>Scheme</h6>
              
                <div class="d-flex justify-content-between align-items-center">
                  
                  <small class="text-body-secondary"> </small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title></title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Tax Info</text></svg>
              <div class="card-body">
                <p style="color: black;">IGST 0.00%: ₹ 0.00</p>
                
                <div class="d-flex justify-content-between align-items-center">
                
                  <small class="text-body-secondary"> </small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
    <div class="card shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#55595c"></rect>
        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Additional Details</text>
      </svg>
      <div class="card-body">
        <table class="table" style="color: black;">
          <thead>
            <tr>
              <th>Additional Details</th>
              <th>%</th>
              <th>(₹) Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> </td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td> </td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td> </td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
        </div>
      
  <h6 id="el">Invoice Value: ₹0.00</h6>
  </div>
  </div>


            <!-- -----------------------------------scriptt for removing and adding new product -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function () {
          // Add product row
          $("#add_product").click(function () {
            var rowCount = $('#table tbody tr').length + 1;
            var newRow = '<tr id="val"><td>' + rowCount + '<td><select  class="table-primary" id="proname" name="proname"> <option value="<?php echo" "; ?>"><?php echo " ";?></option> <?php foreach($products as $product):?><option value="<?php echo $product['ProductName']; ?>"><?php echo $product['ProductName']; ?></option>   <?php endforeach; ?>  </select></td><td> <select  class="table-primary" id="mfgName" name="mfgName"><option value="<?php echo" "; ?>"><?php echo " ";?></option><?php foreach($manufacturers as $manufacturer):?><option value="<?php echo $manufacturer['Manufacturer']; ?>"><?php echo $manufacturer['Manufacturer']; ?></option><?php endforeach; ?></select></td><td><input style="max-width:40px" type="text" name="packing[]"></td><td><input style="max-width:40px" type="text" name="qty[]"></td><td><input style="max-width:40px" type="text" name="batch[]"></td><td><input style="max-width:40px"  type="text" name="free[]"></td><td><input style="max-width:40px"  type="text" name="rate[]"></td><td><input style="max-width:40px"  type="text" name="disc[]"></td><td><input style="max-width:40px"  type="text" name="amt[]"></td><td><button style="max-width:40px" type="button" class="remove_product"><img src="../Images/326606_delete_icon.png" height="20%" alt="delITEm" ></button></td> <td><a  target="_blank" href="./product.php"><button type="button" class="edit_product"><img src="../Images/create-note-svgrepo-com.png" height="20%" alt="delITEm" ></button></a></td>';
            $("#table").append(newRow);
          });

          // Remove product row
          $(document).on("click", ".remove_product", function () {
            $(this).closest("tr").remove();
            updateSerialNumbers();
          });

          // Update serial numbers after removal
          function updateSerialNumbers() {
            $('#table tbody tr').each(function (index) {
              $(this).find('td:first').text(index + 1);
            });
          }
        });
      </script>

          </body>
          </html>