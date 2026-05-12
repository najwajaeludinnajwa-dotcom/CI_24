<div class="container-fluid">
    <h3>laporan peminjaman </h3>
    <form method="get">
        <input type="month" name="bulan"value="<?= $bulan; ?>">
        <button type="submit" class="btn btn-primary btn-sm">Reset</a>



        <br>
        <a href="<?=site_url('peminjaman/cetak_peminjaman?bulan='$bulan); ?>"


        <table class="table table-bordered mt-3">
            <tr>
                <tb>