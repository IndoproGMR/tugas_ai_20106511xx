<?php
include("../program_fuzzy/perhitungan/perhitungan.php");
echo $x;

echo (hitung(3, 5));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/stlye.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <h1>Perhitungan Harga Coating</h1>

    <form action="" method="GET" class="position-absolute top-50 start-50 translate-middle">
        <label for="layer" class="fs-4 fw-bold">Tebal Layer</label>
        <select name="layer" id="layer" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <label for="jenis_mobil" class="fs-4 fw-bold">Jenis Mobil</label>
        <select name="jenis_mobil" id="jenis_mobil" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <div class="hasil">
            <?php echo (hitung($_GET["layer"], $_GET["jenis_mobil"])); ?>
        </div>

        <div class="fixed-bottom">
            <div class="d-grid gap-2 div-btn">
                <button class="btn" type="submit">Hitung</button>
            </div>
        </div>
    </form>

    <!-- asdw -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>