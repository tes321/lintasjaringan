<?php require_once('config/main.php'); 
$query=mysql_query("select * from user1");
?>


<div class="row">
      <div class="col-sm-12">

        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Invoices</h3>

            <div class="pull-right">
              <button class="btn btn-primary btn-xs hide" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Search
              </button>
                              <a class="btn btn-success btn-xs" href="http://lintasjaringan.billingkita.com/index.php/invoice/add" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Invoice</a>
                          </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <div class="collapse in" id="collapseExample">
              <div class="well well-sm">            

                <form class="form-inline" action="" method="get" name="form-filter" id="form-filter">
                  <div class="form-group">
                    <select class="form-control" name="y" placeholder="year">
                      <option value="">year</option>
                                              <option value="2020" selected="">2020</option>
                                              <option value="2019">2019</option>
                                              <option value="2018">2018</option>
                                              <option value="2017">2017</option>
                                              <option value="2016">2016</option>
                                              <option value="2015">2015</option>
                                          </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="m" placeholder="month">
                      <option value="">month</option>
                                              <option value="1">January</option>
                                              <option value="2">February</option>
                                              <option value="3">March</option>
                                              <option value="4" selected="">April</option>
                                              <option value="5">May</option>
                                              <option value="6">June</option>
                                              <option value="7">July</option>
                                              <option value="8">August</option>
                                              <option value="9">September</option>
                                              <option value="10">October</option>
                                              <option value="11">November</option>
                                              <option value="12">December</option>
                                          </select>               
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="status" placeholder="status">
                      <option value="">status</option>
                                              <option value="unpaid">unpaid</option>
                                              <option value="paid">paid</option>
                                              <option value="cancelled">cancelled</option>
                                          </select>
                  </div>                
                  <button type="submit" class="btn btn-default" name="submit" value="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>                
                </form>

              </div>
            </div>


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