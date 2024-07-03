<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["empId"];
    $name = $_POST["empName"];
    $desg = $_POST["empPosition"];
    $age = $_POST["empage"];
    $arcode = $_POST["emparcode"];
    $doj = $_POST["empdoj"];
    $add = $_POST["empadd"];
    try {
        require_once "../dbh.php";
        $conditionValue = $arcode;
        $sql = "SELECT AreaCode FROM area WHERE AreaName = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$conditionValue]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $arecode = $row["AreaCode"];
        }
        echo $arecode;
        try {
            $sqlS = "INSERT INTO employees (EmployeeID, Name, AreaCode) VALUES (?, ?, ?)";
            $stmtS = $pdo->prepare($sqlS);
            $stmtS->execute([$id, $name, $arecode]); // bind values
            echo "Added Successfully";
        } catch (PDOException $e) {
            echo "NOT ADDED" . $e->getMessage();
        }
        $sqlS=null;
        $stmtS=null;
    } catch (PDOException $e) {
        echo "query failed" . $e->getMessage();
    }
} else {
    header('Location:../index.php');
}
?>