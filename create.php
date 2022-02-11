<?php
//var_dump($_POST);exit();
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_workbench";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO `mercedes-amg`(id, Model, Pakket, Kleur, Trekhaak, Vermogen, Koppel) 
                                    VALUES (:id, :Model, :Pakket, :Kleur, :Trekhaak, :Vermogen, :Koppel)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':Model', $model);
    $stmt->bindParam(':Pakket', $pakket);
    $stmt->bindParam(':Kleur', $kleur);
    $stmt->bindParam(':Trekhaak', $trekhaak);
    $stmt->bindParam(':Vermogen', $vermogen);
    $stmt->bindParam(':Koppel', $koppel);

//    insert
    $id = null;
    $model = $_POST['model'];
    $pakket = $_POST['pakket'];
    $kleur = $_POST['kleur'];
    $trekhaak = $_POST['trekhaak'];
    $vermogen = $_POST['vermogen'];
    $koppel = $_POST['koppel'];
    //var_dump($stmt);exit();
    $stmt->execute();

    echo "Uw bestelling is ontvangen";
    header("Refresh:3; ./read.php");
    } catch (PDOException $e) {
    echo $e->getMessage();exit();
    header("Location: ./index.php");
}
$conn = null;
?>