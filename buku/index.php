<?php


require "../config.php";
// // susunan mysqli_query variable koneksinya, query
// $buku = mysqli_query($connect, "SELECT * FROM buku");
$buku = mysqli_query($connect, "SELECT penerbit.nama, buku.* FROM buku INNER JOIN penerbit ON buku.penerbit = penerbit.id");


// hasilnya  adalah array asosiative
// var_dump(mysqli_fetch_assoc($kategori));
// var_dump(mysqli_fetch_row($kategori));
// var_dump(mysqli_fetch_array($kategori));

//  var_dump($kategori);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<ul class="nav nav-tabs justify-content-center bg-success">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="../penerbit/index.php">Penerbit</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">Buku</a>
  </li>
</ul>
    <div class="container ">
        <h3 class="mt-5 fw-bold text-center">Manajemen Buku</h3>
        <p class="text-center">copyright by muhammad firdaus @2023</p>

        <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama buku</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">penerbit</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($buku as $data) {
      # code...
    ?>
    <tr>
      <th scope="row"> <?= $no++ ?></th>
      <td> <?= $data["kode"] ?> </td>
      <td> <?= $data["kategori"] ?> </td>
      <td> <?= $data["nama_buku"] ?> </td>
      <td><?= number_format($data["harga"], 0, ",", ".") ?></td>
      <td> <?= $data["stok"] ?> </td>
      <td> <?= $data["nama"] ?> </td>
      <td>
        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
        <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
      </td>
    </tr>
  <?php
   }
  ?>
  
    
    
  </tbody>
</table>
    </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/ab1e1626c3.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>