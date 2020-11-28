<?php require_once "./src/admin/views/pages/blocks/header.php" ?>
<style>
    .table thead th {
        background-color: #4e73df !important;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products (displaying records
            1-<?php echo count((new \MVC\admin\Controllers\ProductController())->getAllProduct()); ?>
            from <?php echo count((new \MVC\admin\Controllers\ProductController())->getAllProduct()); ?>)</h1>
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
                <!-- Card Body -->
                <div class="card-body">
                    <div class='table-responsive'>
                        <table id="ListProduct" class="table table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th style="width: 1%">
                                    <input type="checkbox" class="select-all checkbox" name="select-all"/>
                                </th>
                                <th style="width: 2%">#</th>
                                <th style="width: 32%" class="success">Title</th>
                                <th style="width: 50%" class="warning">Product Information</th>
                                <th style="width: 10%" class="warning">Price</th>
                                <th style="width: 5%" class="danger"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $sout = '';
                            if (empty((new \MVC\admin\Controllers\ProductController())->getAllProductbyView()['errors'])) {
                                foreach ((new \MVC\admin\Controllers\ProductController())->getAllProductbyView() as $key => $value) {
                                    $NameProductToString = \MVC\Controllers\ToolControllers::ConvertName($value);
                                    $sout .= '                            <tr>
                                <td class="active">
                                    <input type="checkbox" class="select-item checkbox" name="select-item"
                                           value="' . $value['product_id'] . '"/>
                                </td>
                                <td>' . ($key + 1) . '</td>
                                <td class="success">' . $value['ProductName'] . '</td>
                                <td class="warning">' . substr($value['description'], 0, 200) . ' ...</td>
                                <td class="warning">' . number_format($value['price']) . ' đ</td>
                                <td class="danger">
                                       <a href="' . \MVC\controllers\UrlControllers::url("admin/products/edit/" . $value['product_id']) . '"><i class="fas fa-edit" title="Edit Product"></i></a>
                                       <a href="' . \MVC\controllers\UrlControllers::url("admin/products/action/" . $value['product_id']) . '"><i class="fas fa-ban" title="Active/Disable Product"></i></a>
                                       <a href="' . \MVC\controllers\UrlControllers::url("category/".$value['category_parent']."/".$value['pc_code']."/" . $value['product_id'] . "-$NameProductToString.html") . '" target="_blank"><i class="fas fa-external-link-alt" title="Open this product"></i></a>
                                </td>
                            </tr>';
                                }
                            } else {
                                $sout .= "No product.";
                            }
                            echo $sout; ?>
                            </tbody>
                        </table>
                        <!--                        <button id="select-all" class="btn button-default">SelectAll/Cancel</button>-->
                        <!--                        <button id="select-invert" class="btn button-default">Invert</button>-->
                        <!--                        <button id="selected" class="btn button-default">GetSelected</button>-->
                        </body>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php require_once "./src/admin/views/pages/blocks/footer.php" ?>
