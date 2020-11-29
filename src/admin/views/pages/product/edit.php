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
            1-1
            from 1)</h1>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Edit Product</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php
                    if (!empty($_POST['btn'])) {
                        $errors = [];
                        $required_fields = ['product_name', 'price', 'description', 'img_link', 'img_list'];//, 'discount'
                        foreach ($_POST as $key => $value) {
                            if (empty($value) == true && in_array($key, $required_fields) == true) {
                                $errors[] = ucwords(str_replace("_", " ", $key)) . " is a required field.";
                            }
                        }
                        if (!empty($errors)) {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">" . implode("<br>", $errors) . "</div>";
                        } else {
                            (new \MVC\admin\controllers\ProductController())->UpdateProductbyID($data[0][1], $_POST);
                            echo '<div class="alert alert-success" role="alert">
                                Updated data sucessfully.
                             </div>';
                            (new \MVC\controllers\RenderControllers())->redirectAfterSecondPage("admin/products", 3);
                        }
                    }
                    ?>
                    <div id="results"></div>
                    <div class='table-responsive'>
                        <?php
                        $ProductDetail = (new \MVC\admin\Controllers\ProductController())->getAllCateOfProductbyID($data[0][1]);
                        $sout = '';
                        $sout .= '<form method="post">';
                        $sout .= '<table id="EditProduct" class="table table-borderless" cellspacing="0"
                               width="100%">
                            <thead class="text-white thead-dark">
                            <tr>
                                <th class="success" colspan="4">General Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Title</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="product_name" value="' . $ProductDetail['ProductName'] . '"></th>
                                <th></th> 
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Product Parent</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="category_parent" value="' . ucfirst($ProductDetail['category_parent']) . '" disabled></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Product Category</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="category_title" value="' . $ProductDetail['category_title'] . '" disabled></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Product SubCategory</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="category_sub" value="' . (empty($ProductDetail['spc_title']) ? "Don't have" : $ProductDetail['spc_title']) . '" disabled></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Price</th>
                                <th style="width: 30%" class="warning"><input type="number" class="form-control" name="price" value="' . $ProductDetail['price'] . '"></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Discount</th>
                                <th style="width: 30%" class="warning"><input type="number" class="form-control" name="discount" value="' . (!empty($ProductDetail['discount']) ? $ProductDetail['discount'] : 0) . '"></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Img link</th>
                                <th style="width: 30%" class="warning"><input type="text" class="form-control" name="img_link" value="' . $ProductDetail['img_link'] . '"></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Img list</th>
                                <th style="width: 30%" class="warning"><textarea type="text" class="form-control" name="img_list" rows="5">' . $ProductDetail['img_list'] . '</textarea></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="width: 30%" class="success">Description</th>
                                <th style="width: 30%" class="warning"><textarea type="text" class="form-control" name="description" rows="10">' . $ProductDetail['description'] . '</textarea></th>
                                <th></th>
                            </tr>
                             <tr><th style="text-align: center" colspan="4"><input class="btn btn-primary" type="submit" name="btn" value="Submit"></th></tr>
                            </tbody>
                        </table>';
                        $sout .= '</form>';
                        echo $sout;
                        ?>
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
