  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class=" pull-right">
        <strong>Copyright &copy; BINARY CORPORATE 2018.</strong> All rights
        reserved.
      </div>
    </div>
    <!-- /.container -->
  </footer>

  
  <!-- jQuery 3 -->
<script src="/proj_telacc/asset1/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/proj_telacc/asset1/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- DataTables -->
<!-- <script src="/dbo/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script> -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="/proj_telacc/asset1/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>

<script type="text/javascript">

    $(function () {

        $("#lookup").dataTable();

        // survey ID TA
        $("#surveyIDTA").dataTable();

        // surveyer
        $("#surveyer").dataTable();

        //witel
        $("#tableWitel").dataTable();

        //sub witel
        $("#tableSubWitel").dataTable();

        //program
        $("#tableProgram").dataTable();

        //status
        $("#tableStatus").dataTable();

        //mitra
        $("#tableMitra").dataTable();

        //report work order
        $("#reportWorkOrder").dataTable();

        //report survey
        $("#reportSurvey").dataTable();

        //report instalasi
        $("#reportInstalasi").dataTable();

        //report
        $("#report").dataTable();

        //regist
        $("#registForm").dataTable();
    });
</script>

<!-- untuk <input class="read only" required="true"> -->
<script>
    $(".readonly").on('keydown paste', function(e){
        e.preventDefault();
    });
</script>