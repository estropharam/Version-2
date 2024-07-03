    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD APPLICATION</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
    
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">iNOTES</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST['name'];
    $subj = $_POST['subj'];
    $pass = $_POST['desc'];

    echo '<div class="alert alert-success" role="alert">
    Your name is ' . $email . ' and subject is ' . $subj . ' and content is ' . $pass . '</div>';

    $sql = "INSERT INTO `to_do` (`NAME`, `SUBJECT`, `DESCRIPTION`) VALUES ('$email', '$subj', '$pass') LIMIT 3;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Database connected and values inserted successfully";
    } else {
        echo "Insertion of value failed </br>----->" . mysqli_error($conn);
    }
    $sql="SELECT * FROM `crud`.`to_do`;";
    $result=mysqli_query($conn,$sql);
    
    //find the number of rows 
    $num=mysqli_num_rows($result);
    echo '<h1>'.$num.'</h1>';
    
    if($num>0)
    {
      while($row=mysqli_fetch_assoc($result))
      {
        echo $row['ID']." ".$row['NAME']." ".$row['DESCRIPTION'];
        echo "</br>";
      }
    }
}
?>

        <div class="container-fluid my-4">
            <form  action="./index.php" method="post">
            <h1 style="color:red;">ADD work+</h1>
                <div class="mb-3">
                    <label for="DESCRIPTION-TEXT" class="form-label"><h5>Name</h5></label>
                    <input name="name" > 
                </div>
                <div class="mb-3">
                    <label for="DESCRIPTION-TEXT" class="form-label"><h5>Subject</h5></label>
                    <textarea name="subj"  class="form-control" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="DESCRIPTION-TEXT" class="form-label"><h5>Description</h5></label>
                    <textarea name="desc"  class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group">
                </div>
                <div style="display: flex;justify-content: center;"> <button type="submit"
                        class="btn btn-primary">Submit</button></div>
            </form>
        </div>
        

    <div style="padding:0 2em;" class="container-fluid">
        <h1>WORK LIST</h1>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        
    </tbody>
    </table>

    </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>

    </html>