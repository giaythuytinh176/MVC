<?php require_once "./src/admin/views/pages/blocks/header.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Chi tiết Case Study</h6>
                </div>
                <div class="card-body">
                    <?php
                    echo '<article class' . \MVC\controllers\ToolControllers::cut_str(file_get_contents("https://github.com/giaythuytinh176/MVC/blob/master/README.md"), '<article class', '</article>') . '</article>';
                    ?>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php require_once "./src/admin/views/pages/blocks/footer.php" ?>
