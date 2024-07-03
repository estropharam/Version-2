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
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Input Form</title>
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
    <h2 class="text-center mb-4">Employee Input Form</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="./create/employeeformhandler.php" method="POST">
          <div class="form-group">
            <label for="empId">EmployeeID</label>
            <input type="text" class="form-control" id="empId" name="empId" >
          </div>
          <!-- <div class="form-group">
            <label for="empcode">Employee Code</label>
            <input type="text" class="form-control" id="empcode" name="empcode" >
          </div> -->
          <div class="form-group">
            <label for="empName">Name</label>
            <input type="text" class="form-control" id="empName" name="empName" required>
          </div>
          <div class="form-group">
            <label for="empPosition">Designation</label>
            <input type="text" class="form-control" id="empPosition" name="empPosition" required>
          </div>
          <div class="form-group">
            <label for="empSalary">Age</label>
            <input type="text" class="form-control" id="empage" name="empage" required>
          </div>
          <div class="form-group">
            <label for="emparcode">AreaName</label>
            <ul>
              <select  class="form-control" id="emparcode" name="emparcode">
            <option value="<?php echo "Select"; ?>"><?php echo "Select"; ?></option>
            <?php foreach($options as $option): ?>
             
                <option value="<?php echo $option['AreaName']; ?>"><?php echo $option['AreaName']; ?></option>
                
            <?php endforeach; ?>
        </select>
            <a href = "./area.php">Create</a>
            </ul>
          </div>
          <div class="form-group">
            <label for="empDepartment">DOJ</label>
            <input type="date" class="form-control" id="empdoj" name="empdoj" required>
          </div>
          <div class="form-group">
            <label for="empDepartment">Address</label>
            <input type="text" class="form-control" id="empadd" name="empadd" required>
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