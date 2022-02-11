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
<h1 style="text-align: center">Bestel uw Mercedes AMG</h1>

<form action="./create.php" method="post">
    <div class="form-group">
        <label for="modelFormControlSelect2">Model</label>
        <select class="form-control" id="modelFormControlSelect2" name="model">
            <option>A-class</option>
            <option>B-class</option>
            <option>C-class</option>
            <option>D-class</option>
            <option>E-class</option>
        </select>
    </div>
    <div class="form-group">
        <label for="optionFormControlSelect2">Optie pakket</label>
        <select class="form-control" id="optionFormControlSelect2" name="pakket">
            <option>low</option>
            <option>basic</option>
            <option>medium</option>
            <option>high</option>
            <option>ultra</option>
        </select>
    </div>
    <div class="form-group  ">
        <label class="form-label for="exampleColorInput" class="form-label">Kleur</label>
        <input type="color" class="form-control form-control-color" id="exampleColorInput" name="kleur" value="#563d7c" title="Choose your color">
    </div>
    <div class="form-check">
        <input class="form-check-input"  type="radio" name="trekhaak" id="exampleRadios1" value="wel" checked>
        <label class="form-check-label" for="exampleRadios1">
            Wel trekhaak
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="trekhaak" id="exampleRadios2" value="geen">
        <label class="form-check-label" for="exampleRadios2">
            Geen trekhaak
        </label>
    </div>
    <div class="form-group">
        <label class="form-label for="exampleVermogenInput">Maximaal vermogen</label>
        <input type="number" id="exampleVermogenInput" name="vermogen">
    </div>
    <div class="form-group">
        <label class="form-label for="exampleKoppelInput">Maximaal koppel</label>
        <input type="number" id="exampleKoppelInput" name="koppel">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>