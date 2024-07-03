
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
          <h6> <b>SALE BILL</b> : COUNT</h6>
        </div>
        <div class="salemid">
      <form action="./drpdwn.php" method="POST">
        <label>PARTY NAME</label>
        <input type="text" name="partyname" id="partyname">
        <label>BillNo</label>
        <input type="text" name="billno" id="billno">
        <div id="billdate">
        <label >Bill Date</label>
        <input type="date" name="billdate">
      </div>

      <table style="margin-top: 10px;" id="table">
        <thead class="table-primary">
          <tr id="new">
          <th scope="col">Serial No.</th>
            <th scope="col">Product Name</th>
            <th scope="col">MFG Name</th>
            <th scope="col">Pack</th>
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
            <td>1</td>
            <td><input type="text" name="product_name[]"></td>
            <td><input type="text" name="Manufacture_name[]"></td>
            <td><input style="max-width:36px" value="pack" type="text" name="packing[]"></td>
            <td><input style="max-width:36px" type="text" name="batch[]"></td>
            <td><input style="max-width:36px" type="text" name="free[]"></td>
            <td><input style="max-width:36px" type="text" name="rate[]"></td>
            <td><input style="max-width:36px" type="text" name="disc[]"></td>
            <td><input style="max-width:36px" type="text" name="amt[]"></td>
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
            <th scope="col">Goods Value</th>
            <th scope="col"></th>
            
            <th scope="col">0.00</th>
            <th></th>
          </tr>
        </thead>

      </table>
      <button type="button" class="btn btn-success" id="add_product">Add Product</button>
      <button type="button" class="btn btn-warning" id="add_product" type="submit">Generate Invoice</button>
      <br>
      <div class="none">
      <p>
       Discount Info: <?php echo "DISCOUNT INFO" ?>
       <div>
       <p>Total item Disc: <?php echo "TOATAL ITEM INFO" ?><p>
      <p>Scheme <?php echo "SCHEME IF ANY" ?></p>
      </div>
      </p>
      </div>
      <div class="none">
      <p>
       Discount Info: <?php echo "DISCOUNT INFO" ?>
       <div>
       <p>Total item Disc: <?php echo "TOATAL ITEM INFO" ?><p>
      <p>Scheme <?php echo "SCHEME IF ANY" ?></p>
      </div>
      </p>
      </div>
      <div style="width: 399px;" class="none">
      <p>
       Discount Info: <?php echo "DISCOUNT INFO" ?>
       <div>
       <p>Total item Disc: <?php echo "TOATAL ITEM INFO" ?><p>
      <p>Scheme <?php echo "SCHEME IF ANY" ?></p>
      </div>
      </p>
      </div>
        </div>
        
      </form>
        <!-- -----------------------------------scriptt for removing and adding new product -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      // Add product row
      $("#add_product").click(function () {
        var rowCount = $('#table tbody tr').length + 1;
        var newRow = '<tr><td>' + rowCount + '<td><input type="text" name="product_name[]"></td><td><input type="text" name="Manufacture_name[]"></td><td><input style="max-width:36px" type="text" name="packing[]"></td><td><input style="max-width:36px" type="text" name="batch[]"></td><td><input style="max-width:36px"  type="text" name="free[]"></td><td><input style="max-width:36px"  type="text" name="rate[]"></td><td><input style="max-width:36px"  type="text" name="disc[]"></td><td><input style="max-width:36px"  type="text" name="amt[]"></td><td><button style="max-width:36px" type="button" class="remove_product"><img src="../Images/326606_delete_icon.png" height="20%" alt="delITEm" ></button></td> <td><a  target="_blank" href="./product.php"><button type="button" class="edit_product"><img src="../Images/create-note-svgrepo-com.png" height="20%" alt="delITEm" ></button></a></td>';
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






