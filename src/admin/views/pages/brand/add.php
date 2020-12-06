<?php require_once "./src/admin/views/pages/blocks/header.php" ?>
<style>
    .table thead th {
        background-color: #4e73df !important;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Add Brand</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="AddResultBrand"></div>
                    <div class='table-responsive'>
                        <?php echo \MVC\admin\controllers\CategoryControllers::PrintAddBrand(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php require_once "./src/admin/views/pages/blocks/footer.php" ?>
