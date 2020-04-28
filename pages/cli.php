<?php require_once('config/main.php'); 
$query=mysql_query("select * from user1");
?>


<div class="row">
      <div class="col-sm-12">

        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">CLIENTS</h3>

            <div class="pull-right">
              <button class="btn btn-primary btn-xs hide" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Search
              </button>
                              <a class="btn btn-success btn-xs" href="http://lintasjaringan.billingkita.com/index.php/invoice/add" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Invoice</a>
                          </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <div class="table-responsive">
              <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-condensed table-bordered dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                <thead>
                  <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Inv. ID#: activate to sort column ascending" style="width: 43px;">Inv. ID#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Client: activate to sort column ascending" style="width: 162px;">Client</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 410px;">Product</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 41px;">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 53px;">Due Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 37px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Pay &amp;amp; Msg: activate to sort column ascending" style="width: 59px;">Pay &amp; Msg</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 55px;">Action</th></tr>

                </thead>
                <tbody>
                </tbody>
            </table></div></div></div></div>
                                        
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
 <script type="text/javascript">
   $(document).ready(function() {
    $('#tabel').dataTable({
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true
      });
   });
</script>