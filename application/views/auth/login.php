<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>login dulu bro</title>

<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
<link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

<style>
/* BAGIAN KIRI TANPA FOTO */
.bg-login-kosong {
    background-color: #f8f9fc;
    min-height: 100%;
}
</style>

</head>

<body class="bg-gradient-primary">

<div class="container">
<div class="row justify-content-center">
<div class="col-xl-10 col-lg-12 col-md-9">

<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">

<div class="row">

<!-- KIRI TANPA FOTO -->
<div class="col-lg-6 d-none d-lg-block bg-login-kosong"></div>

<!-- KANAN (FORM LOGIN) -->
<div class="col-lg-6">
<div class="p-5">

<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
</div>

<?php if ($this->session->flashdata('error')): ?>
<div class="alert alert-danger text-center">
    <?= $this->session->flashdata('error'); ?>
</div>
<?php endif; ?>

<form class="user" method="post" action="<?= site_url('login/proses');?>">

<div class="form-group">
    <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
</div>

<div class="form-group">
    <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
</div>

<div class="form-group">
    <div class="custom-control custom-checkbox small">
        <input type="checkbox" class="custom-control-input" id="remember">
        <label class="custom-control-label" for="remember">Remember Me</label>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-user btn-block">
    Login
</button>

</form>

<hr>

<div class="text-center">
    <a class="small" href="#">Forgot Password?</a>
</div>

<div class="text-center">
    <a class="small" href="#">Create an Account!</a>
</div>

</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

</body>
</html>