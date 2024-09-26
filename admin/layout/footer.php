<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Peringatan !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Keluar ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="login/logout.php" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</div>



<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script> - developed by
                <b><a href="https://indrijunanda.gitlab.io/" target="_blank">SHIZUKI</a></b>
            </span>
        </div>
    </div>

    <div class="container my-auto py-2">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script> - distributed by
                <b><a href="https://themewagon.com/" target="_blank">WAGONR</a></b>
            </span>
        </div>
    </div>
</footer>
<!-- Footer -->
</div>
</div>
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/js/ruang-admin.min.js"></script>
<script src="assets/vendor/chart.js/Chart.min.js"></script>
<script src="assets/js/demo/chart-area-demo.js"></script>
<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Select2 -->
<script src="assets/vendor/select2/dist/js/select2.min.js"></script>


<!-- Page level custom scripts -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover

        // Select2 Single  with Placeholder
        $('.select2-single-placeholder').select2({
            placeholder: "== Pilih Kategori ==",
            allowClear: true
        });
    });
</script>
</body>

</html>