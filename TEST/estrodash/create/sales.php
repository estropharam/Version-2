  <?php
    $options = array();
    $products = array();
    $manufacturers = array();
    require_once '../dbh.php';
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
   