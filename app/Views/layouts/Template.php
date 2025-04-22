<!-- Connection to css n js -->
<link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/style.css">
<script src="/assets/libs/bootstrap/js/bootstrap.min.js"></script>

<!-- navbar -->
<?php echo $this->include('layouts/navbar'); ?>

<!-- header -->
<?php
if ($title == 'Home') {
    echo $this->include('layouts/header-home');
} else {
    echo $this->include('layouts/header');
}
?>

<!-- Isi konten halaman -->
<?= $this->renderSection('content'); ?>

<!-- Footer -->
<?= $this->include('layouts/footer'); ?>