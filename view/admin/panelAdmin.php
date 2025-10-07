<?php

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - Database CinemaTix</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="d-flex">
    <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
      <h4 class="text-center">🎬 Admin CinemaTix</h4>
      <ul class="nav flex-column mt-4">
        <li class="nav-item"><a href="#" class="nav-link text-white">Dashboard</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Users</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Film</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Studio</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Kursi</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Jadwal</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Booking</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Pembayaran</a></li>
      </ul>
    </nav>

    <div class="container-fluid p-4">
      <h2>Dashboard</h2>
      <p>Selamat datang di panel admin database CinemaTix.</p>

      <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5>Data Film</h5>
          <button class="btn btn-primary btn-sm">+ Tambah Film</button>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th>Rating Usia</th>
                <th>Poster</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Avengers: Endgame</td>
                <td>Action</td>
                <td>180 menit</td>
                <td>13+</td>
                <td><img src="poster.jpg" width="50"></td>
                <td>
                  <button class="btn btn-warning btn-sm">Edit</button>
                  <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

