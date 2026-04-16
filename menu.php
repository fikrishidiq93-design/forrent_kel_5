<?php include 'components/navbar.php'; ?>
<?php include 'data-anggota.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Anggota</title>

<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<div class="hero">
  <h1>Anggota Kelas</h1>
  <p>20 mahasiswa STI Angkatan 2024</p>
</div>

<div class="container">

  <div class="search">
    <i class="fa fa-search"></i>
    <input type="text" placeholder="Cari Nama Atau NIM">
  </div>

  <div class="grid">
    <?php foreach($anggota as $a): ?>
      <div class="card">
        <div class="circle"><?= strtoupper($a['nama'][0]); ?></div>
        <h3><?= $a['nama']; ?></h3>
        <p><?= $a['nim']; ?></p>
      </div>
    <?php endforeach; ?>
  </div>

</div>

<?php include 'components/footer.php'; ?>

</body>
</html>