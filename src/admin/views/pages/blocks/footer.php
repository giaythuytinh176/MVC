</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Codegym.vn 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript Must before databless-->
<script src="<?php echo \MVC\controllers\UrlControllers::url() ?>/src/admin/views/pages/index/vendor/jquery/jquery.min.js"></script>
<!--<script src="--><?php //echo \MVC\controllers\UrlControllers::url() ?><!--/src/admin/views/pages/index/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

<!-- Core plugin JavaScript-->
<script src="<?php echo \MVC\controllers\UrlControllers::url() ?>/src/admin/views/pages/index/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- dataTables core JavaScript-->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo \MVC\controllers\UrlControllers::url() ?>/src/admin/views/pages/index/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo \MVC\controllers\UrlControllers::url() ?>/src/admin/views/pages/index/js/demo/chart-area-demo.js"></script>
<script src="<?php echo \MVC\controllers\UrlControllers::url() ?>/src/admin/views/pages/index/js/demo/chart-pie-demo.js"></script>

<!-- icons for bt4 -->
<script src="https://kit.fontawesome.com/b12094d95b.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {//https://datatables.net/examples/styling/bootstrap4
        $('#ListProduct').DataTable({
            "pagingType": "full_numbers",
            'order': [],
            'columnDefs': [{
                "targets": [0, 4],//,//[0, 1],
                "orderable": false
            }]
        });

        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script>
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
</script>
</body>

</html>