<?php 
include 'components/navbar.php';
include 'data/matkul.php';
include 'data/jadwal.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Akademik</title>

<link rel="stylesheet" href="style.css">
<script defer src="script.js"></script>

</head>
<body>

<div class="hero">
  <h1>Akademik</h1>
  <p>Informasi perkuliahan, jadwal, dan materi kelas STI</p>
</div>

<div class="section">

  <h2 class="title">Daftar Mata Kuliah</h2>

  <!-- SEARCH -->
  <div class="search">
    <input type="text" id="searchInput" placeholder="Cari mata kuliah...">
  </div>

  <div class="table-box">

  <table id="tableMatkul">
    <thead>
      <tr>
        <th onclick="sortTable(0)">Kode ⬍</th>
        <th onclick="sortTable(1)">Mata Kuliah ⬍</th>
        <th onclick="sortTable(2)">SKS ⬍</th>
        <th onclick="sortTable(3)">Dosen ⬍</th>
        <th>Materi</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach($matkul as $m): ?>
      <tr>
        <td><?= $m['kode'] ?></td>
        <td><?= $m['nama'] ?></td>
        <td><?= $m['sks'] ?></td>
        <td><?= $m['dosen'] ?></td>
        <td><a href="#">📄</a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>

  </table>

</div>

</div>

<!-- FILTER JADWAL -->
<div class="section">

  <h2 class="title">Jadwal Perkuliahan</h2>

  <div class="filter">
    <button onclick="filterHari('all')">Semua</button>
    <button onclick="filterHari('Senin')">Senin</button>
    <button onclick="filterHari('Selasa')">Selasa</button>
    <button onclick="filterHari('Rabu')">Rabu</button>
    <button onclick="filterHari('Kamis')">Kamis</button>
    <button onclick="filterHari('Jumat')">Jumat</button>
  </div>

 <div class="jadwal-grid">

<?php foreach($jadwal as $hari => $list): ?>
  <div class="jadwal-card" data-hari="<?= $hari ?>">

    <h3>📅 <?= $hari ?></h3>

    <?php foreach($list as $j): ?>
      <div class="item">
        <p class="nama"><?= $j['nama'] ?></p>
        <span class="jam"><?= $j['jam'] ?></span>
      </div>
    <?php endforeach; ?>

  </div>
<?php endforeach; ?>

</div>
</div>

<?php include 'components/footer.php'; ?>
</body>
</html>