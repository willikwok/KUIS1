<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa WILLI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:aqua">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" href="/">Data Mahasiswa</a>
              <a class="nav-link active" href="/matakuliah">Mata Kuliah</a>
              <a class="nav-link active" href="/detailkrs">Detail KRS</a>
              <a class="nav-link active" href="/krs">KRS</a>
              <a class="nav-link active" href="/term">Term</a>
            </div>
          </div>
        </div>
      </nav>

<br>
<br><p class="container">Nama : Willi</p>
<p class="container">Student ID : 03081200028</p>
<p class="container">Term : 1214</p>
<p class="container">Total SKS : 18</p>
<h3 class="container"> Data KRS </h3>

<table class="table table-dark table-striped container">
    <tr>
        <th>No</th>
        <th>Kode KRS </th>
        <th>StudentID </th>
        <th>Kode Term  </th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from krs");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[kode_krs]</td>
            <td>$tampil[StudentID]</td>
            <td>$tampil[kode_term]</td>
        <tr>";
        $no++;
    }
?>

  </body>
</html>
