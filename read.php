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
    $stmt = $conn->prepare("SELECT `id`, `Model`, `Pakket`, `Kleur`, `Trekhaak`, `Vermogen`, `Koppel` 
                                    FROM `mercedes-amg`");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

    $tableRows = "";
    foreach ($stmt->fetchAll() as $key=>$value){
        $tableRows .= "<tr>
                        <td>$value->id</td>
                        <td>$value->Model</td>
                        <td>$value->Pakket</td>
                        <td>$value->Kleur</td>
                        <td>$value->Trekhaak</td>
                        <td>$value->Vermogen</td>
                        <td>$value->Koppel</td>
                        <td><a href='update.php?id=$value->id'><i class='bi bi-pencil-square'></i></></td>
                        <td><a href='delete.php?id=$value->id'><i class='bi bi-x-circle'></i></></td>
                        </tr>";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<h1 style="text-align: center">Bestellingen</h1>
<div class="row">
    <div class="col-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Model</th>
                <th scope="col">Pakket</th>
                <th scope="col">Kleur</th>
                <th scope="col">Trekhaak</th>
                <th scope="col">Vermogen</th>
                <th scope="col">Koppel</th>
            </tr>
            </thead>
            <tbody>
            <?php
            echo $tableRows
            ?>

