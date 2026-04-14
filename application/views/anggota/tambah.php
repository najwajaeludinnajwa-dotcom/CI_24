<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Tambah Anggota</h2>

<div class="card shadow">
    <div class="card-body">

<form method="post" action="<?= site_url('index.php/anggota/simpan'); ?>">

    <div class="form-group">
        <label>Nomor Anggota</label>
        <input type="text" name="nomor" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label>Tanggal Daftar</label>
        <input type="date" name="tanggal" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('index.php/anggota');?>" class="btn btn-secondary">Kembali</a>

</form>

    </div>
</div>
</div>