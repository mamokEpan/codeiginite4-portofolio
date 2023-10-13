<?= $this->extend('layout/template'); ?>
<!-- ni adalah pernyataan yang digunakan untuk menghubungkan
atau "meng-extend" tampilan dengan tampilan layout/template. 
Tampilan layout biasanya berisi elemen-elemen tampilan yang 
akan ada di setiap halaman, seperti header, footer, dan navigasi. 
Dengan meng-extend layout, Anda dapat memasukkan konten halaman yang berbeda ke dalam tampilan layout yang sama. -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-house-alt"></i>Dashboard</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">



    </div>
</div>

<?= $this->endSection(); ?>
