<?php


// require "config.php";
// susunan mysqli_query variable koneksinya, query
// $kategori = mysqli_query($connect, "SELECT * FROM kategori");


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
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<ul class="nav nav-tabs justify-content-center bg-success">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="penerbit/index.php">Penerbit</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="buku/index.php">Buku</a>
  </li>
</ul>
    <div class="container ">
        <h3 class="mt-5 fw-bold text-center">Aplikasi Manajemen Penerbit & Buku</h3>
        <p class="text-center">copyright by muhammad firdaus @2023</p>
    </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/ab1e1626c3.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>