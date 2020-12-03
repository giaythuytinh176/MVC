<?php require_once "./src/admin/views/pages/blocks/header.php" ?>
<style>
    .table thead th {
        background-color: #4e73df !important;
    }

    img {
        max-width: 75% !important;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products (displaying records
            1-<?php echo count((new \MVC\admin\controllers\ProductController())->getAllProduct()); ?>
            from <?php echo count((new \MVC\admin\controllers\ProductController())->getAllProduct()); ?>)</h1>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Tất cả các sản phẩm</h5>
                </div>
                <div id="DelRowMessage"></div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class='table-responsive'>
                        <?php echo \MVC\admin\controllers\ProductController::PrintListProduct(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php require_once "./src/admin/views/pages/blocks/footer.php" ?>
