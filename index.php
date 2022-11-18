<?php
include("../program_fuzzy/perhitungan/perhitungan.php");
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

  <form action="" method="POST" class="position-absolute top-50 start-50 translate-middle">
    <label for="layer" class="fs-4 fw-bold">Tebal Layer</label>
    <select name="layer" id="layer" class="form-select" aria-label="Default select example">
      <option value="0" selected>Open this select menu</option>
      <option value="1">1 - sedikit</option>
      <option value="2">2 - sedikit</option>
      <option value="3">3 - sedang</option>
      <option value="4">4 - sedang</option>
      <option value="5">5 - banyak</option>
      <option value="6">6 - banyak</option>
      <option value="7">7 - banyak</option>
    </select>



    <label for="jenis_mobil" class="fs-4 fw-bold">Jenis Mobil</label>
    <select name="jenis_mobil" id="jenis_mobil" class="form-select" aria-label="Default select example">
      <option value="0" selected>Open this select menu</option>
      <option value="13">13 - Kecil</option>
      <option value="14">14 - Kecil</option>
      <option value="15">15 - sedang</option>
      <option value="16">16 - sedang</option>
      <option value="17">17 - sedang</option>
      <option value="18">18 - besar</option>
      <option value="19">19 - besar</option>
      <option value="20">20 - besar</option>
    </select>

    <div class="hasil">
      <?php
      echo "Jenis Mobil: ";
      echo $_POST["jenis_mobil"];
      br();
      echo "Layer: ";
      echo $_POST["layer"];
      br();



      if ($_POST["layer"] != "0" && $_POST["jenis_mobil"] != "0") {
        // hitung(
        //   $_POST["layer"],
        //   $_POST["jenis_mobil"]
        // );
        echo
        mobil_kecil($_POST["jenis_mobil"]);
        mobil_sedang($_POST["jenis_mobil"]);
        mobil_besar($_POST["jenis_mobil"]);
      } else {
        echo "0";
      }
      ?>
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