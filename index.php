<?php include("../program_fuzzy/perhitungan/perhitungan.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/css/stlye.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Algoritam fuzzy</title>
</head>

<body>
  <h1>Perhitungan Harga Coating</h1>


  <!-- form-start -->
  <form action="" method="POST" class="position-absolute top-50 start-50 translate-middle">
    <label for="layer" class="fs-4 fw-bold">Tebal Layer</label>
    <select name="layer" id="layer" class="form-select">
      <option value="0" selected>Silahkan Pilih Tebal Layer</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
    </select>



    <label for="jenis_mobil" class="fs-4 fw-bold">Jenis Mobil</label>
    <select name="jenis_mobil" id="jenis_mobil" class="form-select">
      <option value="0" selected>Silahkan Pilih Jenis Mobil</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>

    <?php
    if (isset($_GET["debug"])) {
      echo ('
      <label for="Uang" class="fs-4 fw-bold">Uang</label>
      <select name="Uang" id="Uang" class="form-select">
      <option value="0" selected>Silahkan Pilih jumlah Uang</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      </select>
      ');
    }
    ?>


    <div class="hasil">
      <?php
      echo spanbold("Jenis Mobil: ") . $_POST["jenis_mobil"];
      br();
      echo spanbold("Layer: ") . $_POST["layer"];
      br();

      // ubah tinggi .hasil dan form
      // echo "Uang: ";
      // echo $_POST["Uang"];
      // br();




      if (isset($_POST["layer"]) != "0" && isset($_POST["jenis_mobil"]) != "0") {
        hitung(
          $_POST["layer"],
          $_POST["jenis_mobil"]
        );
        br();
      } else {
        echo "";
      }
      ?>
    </div>

    <div class="fixed-bottom">
      <div class="d-grid gap-2 div-btn">
        <button class="btn" type="submit">
          <span class="fw-bold">Hitung</span>
        </button>
      </div>
    </div>
  </form>
  <!-- form-end -->



  <!-- Debug-start -->
  <!-- http://localhost:3000/index.php?debug -->
  <?php
  if (isset($_GET["debug"])) {
    echo '<div class="debug position-absolute top-50 translate-middle">';
    echo '<div class="hasil">';
    echo '<h4>Debug</h4>';
    echo spanbold("Jenis Mobil: ") . $_POST["jenis_mobil"];
    br();
    echo spanbold("Layer: ") . $_POST["layer"];
    br();
    echo spanbold("Uang: ") . $_POST["Uang"];
    br();

    br();
    debug_mobil($_POST["jenis_mobil"]);
    br();
    debug_layer($_POST["layer"]);
    br();
    debug_uang($_POST["Uang"]);
    br();

    echo "</div> </div>";
  }
  ?>
  <!-- Debug-end -->

  <!-- bootstarp -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>