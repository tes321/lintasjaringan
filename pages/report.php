 <?php require_once('config/main.php'); 
$query=mysql_query("select * from user1");
?>


 <div class="row">
      <div class="col-sm-12">

        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Transactions</h3>
            <div class="pull-right">
              
                <a class="btn btn-success btn-xs" href="http://lintasjaringan.billingkita.com/index.php/report/transactions/?start=2020-04-01&amp;end=2020-04-28&amp;format=xls"> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Excel</a>
              
            </div>            
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="form-filter spacer">
              <form class="form-inline" action="" method="get" name="form-filter" id="form-filter">
                <div class="form-group">
                  <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control" value="2020-04-01" name="start" id="start">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control" value="2020-04-28" name="end" id="end">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>                
                <div class="form-group">
                    <select name="by" class="form-control">
<option value="" selected="selected"></option>
<option value="1">administrator</option>
<option value="400">nuriz zigzag</option>
<option value="422">xunin</option>
<option value="526">anurarafa</option>
<option value="394">fen</option>
</select>
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>                
              </form>
            </div>
            <div class="table-responsive">
              <table class="table table-condensed table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Client</th>
                    <th>Service</th>
                    <th>Rcv.By</th>
                  </tr>

                </thead>
                <tbody>

                                                        
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