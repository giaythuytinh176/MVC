var base_url = 'http://localhost/MVC_shop_test';

$(document).ready(function () {
    $("#submitUpdate").on('click', function (e) {
        var brand_title = $('#brand_title').val();
        var brand_code = $('#brand_code').val();
        var parent_id = $('#parent_id').val();
        var category_id = $('#category_id').val();
        // console.log(brand_title);
        // console.log(brand_code);
        // console.log(parent_id);
        // console.log(parent_id);
        if (!(brand_title) || !(brand_code) || !(parent_id) || !(category_id)) {
            if (!(brand_title) && !(brand_code) && !(parent_id) && !(category_id)) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Brand Title, Brand Code, Parent Category is required field.</div>');
            } else if (!brand_code) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Brand Code is required field.</div>');
            } else if (!brand_title) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Brand Title is required field.</div>');
            } else if (!parent_id) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Parent Category is required field.</div>');
            } else if (!category_id) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Category ID is required field.</div>');
            }
        } else {
            $.ajax({
                type: "POST",
                url: base_url + "/admin/Ajax/UpdateBrand",
                data: {
                    brand_title: brand_title,
                    brand_code: brand_code,
                    parent_id: parent_id,
                    category_id: category_id,
                },
                cache: false,
                success: function (response) {
                    $('#EditResult').html('<div class="alert alert-success" role="alert">' + response + '</div>');
                }
            });
        }
    });
});

$(document).ready(function () {
    $("#submitAdd").on('click', function (e) {
        var category_title = $('#category_title').val();
        var category_code = $('#category_code').val();
        //console.log(category_title);
        //console.log(category_code);
        if (!(category_title) || !(category_code)) {
            if (!(category_title) && !(category_code)) {
                $('#AddResult').html('<div class="alert alert-danger" role="alert">Category Title, Category Code is required field.</div>');
            } else if (!category_code) {
                $('#AddResult').html('<div class="alert alert-danger" role="alert">Category Code is required field.</div>');
            } else if (!category_title) {
                $('#AddResult').html('<div class="alert alert-danger" role="alert">Category Title is required field.</div>');
            }
        } else {
            $.ajax({
                type: "POST",
                url: base_url + "/admin/Ajax/AddCategory",
                data: {
                    category_code: category_code,
                    category_title: category_title,
                },
                cache: false,
                success: function (response) {
                    if (response.includes("existed")) {
                        $('#AddResult').html('<div class="alert alert-danger" role="alert">' + response + '</div>');
                    } else {
                        $('#AddResult').html('<div class="alert alert-success" role="alert">' + response + '</div>');
                    }
                }
            });
        }
    });
});

$(document).ready(function () {
    $("#submitUpdate").on('click', function (e) {
        var brand_title = $('#brand_title').val();
        var brand_code = $('#brand_code').val();
        var parent_id = $('#parent_id').val();
        var category_id = $('#category_id').val();
        // console.log(brand_title);
        // console.log(brand_code);
        // console.log(parent_id);
        // console.log(parent_id);
        if (!(brand_title) || !(brand_code) || !(parent_id) || !(category_id)) {
            if (!(brand_title) && !(brand_code) && !(parent_id) && !(category_id)) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Brand Title, Brand Code, Parent Category is required field.</div>');
            } else if (!brand_code) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Brand Code is required field.</div>');
            } else if (!brand_title) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Brand Title is required field.</div>');
            } else if (!parent_id) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Parent Category is required field.</div>');
            } else if (!category_id) {
                $('#EditResult').html('<div class="alert alert-danger" role="alert">Category ID is required field.</div>');
            }
        } else {
            $.ajax({
                type: "POST",
                url: base_url + "/admin/Ajax/UpdateBrand",
                data: {
                    brand_title: brand_title,
                    brand_code: brand_code,
                    parent_id: parent_id,
                    category_id: category_id,
                },
                cache: false,
                success: function (response) {
                    $('#EditResult').html('<div class="alert alert-success" role="alert">' + response + '</div>');
                }
            });
        }
    });
});

$(document).ready(function () {
    $("#submitSubCate").on('click', function (e) {
        var sub_title = $('#sub_title').val();
        var sub_code = $('#sub_code').val();
        var sub_cate_id = $('#sub_cate_id').val();
        var category_id = $('#category_id').val();
        var sub_parent_id = $('#sub_parent_id').val();
        // console.log(sub_title);
        // console.log(sub_code);
        // console.log(sub_cate_id);
        // console.log(category_id);
        // console.log(sub_parent_id);
        if (!(sub_title) || !(sub_code) || !(sub_cate_id) || !(category_id) || !(sub_parent_id)) {
            if (!(sub_title) && !(sub_code) && !(sub_cate_id) && !(category_id) && !(sub_parent_id)) {
                $('#SubCateResult').html('<div class="alert alert-danger" role="alert">Sub Category Title, Sub Category Code, Sub Category ID, Category Product ID, Parent Category ID is required field.</div>');
            } else if (!sub_title) {
                $('#SubCateResult').html('<div class="alert alert-danger" role="alert">Sub Category Title is required field.</div>');
            } else if (!sub_code) {
                $('#SubCateResult').html('<div class="alert alert-danger" role="alert">Sub Category Code is required field.</div>');
            } else if (!sub_cate_id) {
                $('#SubCateResult').html('<div class="alert alert-danger" role="alert">Sub Category ID is required field.</div>');
            } else if (!category_id) {
                $('#SubCateResult').html('<div class="alert alert-danger" role="alert">Category Product ID is required field.</div>');
            } else if (!sub_parent_id) {
                $('#SubCateResult').html('<div class="alert alert-danger" role="alert">Parent Category ID is required field.</div>');
            }
        } else {
            $.ajax({
                type: "POST",
                url: base_url + "/admin/Ajax/UpdateSubCate",
                data: {
                    sub_title: sub_title,
                    sub_code: sub_code,
                    sub_cate_id: sub_cate_id,
                    category_id: category_id,
                    sub_parent_id: sub_parent_id,
                },
                cache: false,
                success: function (response) {
                    $('#SubCateResult').html('<div class="alert alert-success" role="alert">' + response + '</div>');
                }
            });
        }
    });
});

$(document).ready(function () {
    $("#submitAddBrand").on('click', function (e) {
        var brand_title = $('#brand_title').val();
        var brand_code = $('#brand_code').val();
        var parent_id = $('#parent_id').val();
        console.log(brand_title);
        console.log(brand_code);
        console.log(parent_id);
        if (!(brand_title) || !(brand_code) || !(parent_id)) {
            if (!(brand_title) && !(brand_code) && !(parent_id)) {
                $('#AddResultBrand').html('<div class="alert alert-danger" role="alert">Brand Title, Brand Code, Parent Category is required field.</div>');
            } else if (!brand_code) {
                $('#AddResultBrand').html('<div class="alert alert-danger" role="alert">Brand Code is required field.</div>');
            } else if (!brand_title) {
                $('#AddResultBrand').html('<div class="alert alert-danger" role="alert">Brand Title is required field.</div>');
            } else if (!parent_id) {
                $('#AddResultBrand').html('<div class="alert alert-danger" role="alert">Parent Category is required field.</div>');
            }
        } else {
            $.ajax({
                type: "POST",
                url: base_url + "/admin/Ajax/AddBrand",
                data: {
                    brand_title: brand_title,
                    brand_code: brand_code,
                    parent_id: parent_id,
                },
                cache: false,
                success: function (response) {
                    if (response.includes("existed")) {
                        $('#AddResultBrand').html('<div class="alert alert-danger" role="alert">' + response + '</div>');
                    } else {
                        $('#AddResultBrand').html('<div class="alert alert-success" role="alert">' + response + '</div>');
                    }
                }
            });
        }
    });
});

$(document).ready(function () {
    $('.mystatusbrand').on('click', function () {
        var id_bid = this.id;
        var bid = id_bid.slice(11, id_bid.length);//11 = statusbrand
        // console.log(id_bid);
        // console.log(bid);
        $.ajax({
            type: "POST",
            url: base_url + "/admin/Ajax/StatusBrand",
            data: {
                id: bid,
            },
            cache: false,
            success: function (response) {
                //console.log(response);
                //$('#scu' + parent_id).html(response);
                $('#bu' + bid).html(response.replace(" Brand", ""));
                //alert(response);
            }
        });
    });
});

$(document).ready(function () {
    $('.mystatussubcategory').on('click', function () {
        var id_sub = this.id;
        var sub = id_sub.slice(17, id_sub.length);//17 = statussubcategory
        // console.log(id_sub);
        // console.log(sub);
        $.ajax({
            type: "POST",
            url: base_url + "/admin/Ajax/StatusSubCate",
            data: {
                id: sub,
            },
            cache: false,
            success: function (response) {
                $('#subcu' + sub).html(response.replace(" Sub Category", ""));
            }
        });
    });
});

$(document).ready(function () {
    $('.mystatusproduct').on('click', function () {
        var id_sp = this.id;
        var product_id = id_sp.slice(13, id_sp.length);//13 = statusproduct
        // console.log(id_sp);
        // console.log(product_id);
        $.ajax({
            type: "POST",
            url: base_url + "/admin/Ajax/StatusProduct",
            data: {
                id: product_id,
            },
            cache: false,
            success: function (response) {
                //console.log(response);
                //$('#sp' + product_id).html(response);
                $('#spu' + product_id).html(response.replace(" Product", ""));
                //alert(response);
            }
        });
    });
});

$(document).ready(function () {
    $('.mystatuscategory').on('click', function () {
        var id_sc = this.id;
        var parent_id = id_sc.slice(14, id_sc.length);//14 = statuscategory
        // console.log(id_sc);
        // console.log(parent_id);
        $.ajax({
            type: "POST",
            url: base_url + "/admin/Ajax/StatusCategory",
            data: {
                id: parent_id,
            },
            cache: false,
            success: function (response) {
                //console.log(response);
                //$('#scu' + parent_id).html(response);
                $('#scu' + parent_id).html(response.replace(" Category", ""));
                //alert(response);
            }
        });
    });
});

$(document).ready(function () {//https://datatables.net/examples/styling/bootstrap4
    $('#ListProduct').DataTable({
        "pagingType": "full_numbers",
        'order': [],
        'columnDefs': [{
            "targets": [0, 3, 7],//,//[0, 1],
            "orderable": false
        }]
    });

    $('.dataTables_length').addClass('bs-select');
});

$(document).ready(function () {//https://datatables.net/examples/styling/bootstrap4
    $('#ListCategory').DataTable({
        "pagingType": "full_numbers",
        'order': [],
        'columnDefs': [{
            "targets": [0, 5],
            "orderable": false
        }]
    });

    $('.dataTables_length').addClass('bs-select');
});

$(document).ready(function () {//https://datatables.net/examples/styling/bootstrap4
    $('#ListBrand').DataTable({
        "pagingType": "full_numbers",
        'order': [],
        'columnDefs': [{
            "targets": [0, 5],
            "orderable": false
        }]
    });

    $('.dataTables_length').addClass('bs-select');
});

$(document).ready(function () {//https://datatables.net/examples/styling/bootstrap4
    $('#ListSubCate').DataTable({
        "pagingType": "full_numbers",
        'order': [],
        'columnDefs': [{
            "targets": [0, 7],
            "orderable": false
        }]
    });

    $('.dataTables_length').addClass('bs-select');
});

$(document).ready(function () {
//https://gist.github.com/seayxu/6f4e5024206eb7cae5651c376929ad09
    $(function () {
        //button select all or cancel
        $("#select-all").click(function () {
            var all = $("input.select-all")[0];
            all.checked = !all.checked
            var checked = all.checked;
            $("input.select-item").each(function (index, item) {
                item.checked = checked;
            });
        });
        //button select invert
        $("#select-invert").click(function () {
            $("input.select-item").each(function (index, item) {
                item.checked = !item.checked;
            });
            checkSelected();
        });
        //button get selected info
        $("#selected").click(function () {
            var items = [];
            $("input.select-item:checked:checked").each(function (index, item) {
                items[index] = item.value;
            });
            if (items.length < 1) {
                alert("no selected items!!!");
            } else {
                var values = items.join(',');
                console.log(values);
                var html = $("<div></div>");
                html.html("selected:" + values);
                html.appendTo("body");
            }
        });
        //column checkbox select all or cancel
        $("input.select-all").click(function () {
            var checked = this.checked;
            $("input.select-item").each(function (index, item) {
                item.checked = checked;
            });
        });
        //check selected items
        $("input.select-item").click(function () {
            var checked = this.checked;
            console.log(checked);
            checkSelected();
        });

        //check is all selected
        function checkSelected() {
            var all = $("input.select-all")[0];
            var total = $("input.select-item").length;
            var len = $("input.select-item:checked:checked").length;
            console.log("total:" + total);
            console.log("len:" + len);
            all.checked = len === total;
        }
    });
});
