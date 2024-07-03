<?php
require_once '../dbh.php';
try {
  
    
    $sql = "SELECT Manufacturer FROM manufacturer";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    foreach($data as $x);
    echo $x['Manufacturer'];
    echo "</pre>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>