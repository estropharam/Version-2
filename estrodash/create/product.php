<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Input Form</title>
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
    <h2 class="text-center mb-4">Product Input Form</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="../insertpro.php" method="POST">
          <div class="form-group">
            <label for="proid">Product ID</label>
            <input type="text" class="form-control" id="proid" name="proid" required>
          </div>
          <div class="form-group">
            <label for="proname">Product Name</label>
            <input type="text" class="form-control" id="proname" name="proname" required>
          </div>
          <div class="form-group">
            <label for="mfgid">Manufacture Code</label>
            <input type="text" class="form-control" id="mfgid" name="mfgid" required>
          </div>
          <div class="form-group">
            <label for="btchid">Batch ID</label>
            <input type="text" class="form-control" id="btchid" name="btchid" required>
          </div>
          <div class="form-group">
            <label for="hsn">HSN</label>
            <input type="text" class="form-control" id="hsn" name="hsn" required>
          </div>
          <div class="form-group">
            <label for="ptr">PTR</label>
            <input type="text" class="form-control" id="ptr" name="ptr" required>
          </div>
          <div class="form-group">
            <label for="pts">PTS</label>
            <input type="text" class="form-control" id="pts" name="pts" required>
          </div>
          <div class="form-group">
            <label for="pkg"> PKG</label>
            <input type="text" class="form-control" id="pkg" name="pkg" required>
          </div>
          <div class="form-group">
            <label for="exp">EXP </label>
            <input type="date" class="form-control" id="exp" name="exp" required>
          </div>
          <div class="form-group">
            <label for="rate"> Rate</label>
            <input type="text" class="form-control" id="rate" name="rate" required>
          </div>
          <div class="form-group">
            <label for="mrp"> MRP</label>
            <input type="text" class="form-control" id="mrp" name="mrp" required>
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