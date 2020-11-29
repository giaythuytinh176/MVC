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
                url: "http://localhost/MVC_shop_test/admin/Ajax/AddCategory",
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
    $('.mystatusproduct').on('click', function () {
        var id_sp = this.id;
        var product_id = id_sp.slice(13, id_sp.length);//13 = statusproduct
        // console.log(id_sp);
        // console.log(product_id);
        $.ajax({
            type: "POST",
            url: "http://localhost/MVC_shop_test/admin/Ajax/StatusProduct",
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
            url: "http://localhost/MVC_shop_test/admin/Ajax/StatusCategory",
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

// $('#statusproduct').click(function() {
//     $.load('http://localhost/MVC_shop_test/admin/Ajax/StatusProduct', function(e){
//         console.log(e);
//     });
// });
// $(document).click(function () {
//     $('#statusproduct').load('http://localhost/MVC_shop_test/admin/Ajax/StatusProduct', function (e) {
//
//     });
// });

// $(document).click(function () {
//     jQuery.ajax({
//         type: "POST",
//         url: "http://localhost/MVC_shop_test/admin/Ajax/StatusProduct",
//         data: 'id=' + $("#statusproduct").val(),
//         cache: false,
//         success: function (response) {
//             console.log(response);
//             $('statusproduct').text('TEXT TO INSERT');
//             //alert("Record successfully updated");
//         }
//     });
// });

// $(document).ready(function () {
//     $(document).on("click", "#statusproduct", function () {
//         var product_id = $("#statusproduct[" + product_id + "]").val();
//         $.ajax({
//             type: "POST",
//             url: "http://localhost/MVC_shop_test/admin/Ajax/StatusProduct",
//             data: {
//                 id: product_id,
//             },
//             cache: false,
//             success: function (response) {
//                 console.log(response);
//                 $('#sp[' + product_id + "]").html(response);
//                 //alert(response);
//             }
//         });
//     });
// });

// function StatusProduct(id) {// use onclick="StatusProduct(id)"
//     jQuery.ajax({
//         type: "POST",
//         url: "http://localhost/MVC_shop_test/admin/Ajax/StatusProduct",
//         data: {
//             id: id,
//         },
//         cache: false,
//         error: function (response) {
//             alert("failed");
//             console.log(response);
//         },
//         success: function (response) {
//             alert("success");
//             console.log(response); // Inspect this in your console
//         }
//     });
// }
