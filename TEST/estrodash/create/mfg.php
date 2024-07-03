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
    $sql = "SELECT Manufacturer FROM manufacturer ;";
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manufacturer Input Form</title>
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
    <h2 class="text-center mb-4">Manufacturer Input Form</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="../insertmfg.php" method="POST">
          <div class="form-group">
            <label for="mfgid">Manufacture Code</label>
            <input type="text" class="form-control" id="mfgid" name="mfgid" required>
          </div>
          <div class="form-group">
            <label for="mfgName">Manufacturer</label>
            <input type="text" class="form-control" id="mfgName" name="mfgName" required>
          </div>
          <div class="form-group">
            <label for="mfgmail">Email</label>
            <input type="text" class="form-control" id="mfgmail" name="mfgmail" required>
          </div>
          <div class="form-group">
            <label for="mfgph">Phone No.</label>
            <input type="text" class="form-control" id="mfgph" name="mfgph" required>
          </div>
          <div class="form-group">
            <label for="mfgadd">Address </label>
            <input type="text" class="form-control" id="mfgadd" name="mfgadd" required>
          </div>
          <div class="form-group">
            <label for="lino">LicenseNo</label>
            <input type="text" class="form-control" id="lino" name="lino" required>
          </div>
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