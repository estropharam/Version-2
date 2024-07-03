<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "estrobase"; // Change this to your database name

$options = array();

// Check if the form is submitted


try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to fetch options
    // $sql = "SELECT Pool FROM area";
    $sql = "SELECT AreaName FROM area;";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // Execute statement
    $stmt->execute();

    // Fetch all options
    $options = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close connection
    $conn = null;
    try {
      // Create a PDO connection
      $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      // Set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      // SQL query to fetch options
      // $sql = "SELECT Pool FROM area";
      $sql = "SELECT AreaName FROM area;";
      // Prepare statement
      $stmt = $conn->prepare($sql);
      // Execute statement
      $stmt->execute();
  
      // Fetch all options
      $options = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
      // Close connection
      $conn = null;
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
  <title>Stockist Input Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles */
    body {
      background-color: #f8f9fa;
    }
    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .form-group label {
      font-weight: bold;
    }
    .btn-primary {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Stockist Input Form</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="./stockistformhandler.php" method="POST">
        <div class="form-group">
            <label for="stkid">Stockist ID</label>
            <input type="text" class="form-control" id="stkid" name="stkid" required>
          </div>
          <div class="form-group">
            <label for="stkName">Stockist Name</label>
            <input type="text" class="form-control" id="stkName" name="stkName" required>
          </div>
          <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state" required>
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
          </div>
          <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
          </div>
          <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
          </div>
          <div class="form-group">
            <label for="hq">Headquarters</label>
            <input type="text" class="form-control" id="hq" name="hq" required>
          </div>
          <div class="form-group">
            <label for="marriageAnniversary">Marriage Anniversary</label>
            <input type="date" class="form-control" id="marriageAnniversary" name="marriageAnniversary">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="form-group">
            <label for="contactPerson">Contact Person</label>
            <input type="text" class="form-control" id="contactPerson" name="contactPerson" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="pin">PIN</label>
            <input type="text" class="form-control" id="pin" name="pin" required>
          </div>
          <div class="form-group">
            <label for="gstin">GSTIN</label>
            <input type="text" class="form-control" id="gstin" name="gstin" required>
          </div>
          <div class="form-group">
            <label for="pan">PAN</label>
            <input type="text" class="form-control" id="pan" name="pan" required>
          </div>
          <div class="form-group">
            <label for="dlNumber1">DL Number 1</label>
            <input type="text" class="form-control" id="dlNumber1" name="dlNumber1" required>
          </div>
          <div class="form-group">
            <label for="dlNumber2">DL Number 2</label>
            <input type="text" class="form-control" id="dlNumber2" name="dlNumber2">
          </div>
          <div class="form-group">
            <label for="arename">AreaName</label>
            <ul>
              <select  class="form-control" id="emparcode" name="emparcode">
            <option value="<?php echo "Select"; ?>"><?php echo "Select"; ?></option>
            <?php foreach($options as $option): ?>
             
                <option value="<?php echo $option['AreaName']; ?>"><?php echo $option['AreaName']; ?></option>
                
            <?php endforeach; ?>
        </select>
            <a href = "./area.php">Create</a>
            </ul>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
