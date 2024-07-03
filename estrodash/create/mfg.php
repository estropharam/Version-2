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
            <label for="mfgName">Manufacturer Name</label>
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