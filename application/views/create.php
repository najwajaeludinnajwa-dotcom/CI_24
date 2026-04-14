<?php include "views/layout/header.php"; ?>

<form method="POST" action="index.php?action=store">
<input type="text" name="nomor_anggota" class="form-control mb-2" placeholder="Nomor Anggota" required>
<input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
<textarea name="alamat" class="form-control mb-2" placeholder="Alamat"></textarea>
<input type="text" name="telepon" class="form-control mb-2" placeholder="Telepon">
<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
<input type="date" name="tanggal_daftar" class="form-control mb-2">

<button class="btn btn-success">Simpan</button>
</form>

<?php include "views/layout/footer.php"; ?>