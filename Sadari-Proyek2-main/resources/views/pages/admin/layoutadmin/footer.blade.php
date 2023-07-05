<!-- /.content-wrapper -->
{{-- <footer class="main-footer"> --}}
    {{-- <strong>Copyright &copy; 2022 <a href="https://lte.io">Gosadari</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div> --}}
{{-- </footer> --}}
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('lte') }}/plugins/jquery/jquery.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('lte') }}/plugins/jquery-ui/jquery-ui.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte') }}/plugins/bootstrap/js/bootstrap.bundle.js"></script>
<!-- lte App -->
<script src="{{ asset('lte') }}/dist/js/adminlte.js"></script>
<!-- DataTables & Plugins -->
<script src="{{ asset('lte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('lte') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('lte') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('lte') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@yield('javascript')
</body>

</html>
