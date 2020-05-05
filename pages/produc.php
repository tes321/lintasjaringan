<?php require_once('config/main.php'); 
$result = $konek->query("select * from user1");
?>
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Data User ( Terdapat <?php echo $row = $result->num_rows; ?> Data)</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    <?php if (isset($_SESSION['username'])): ?>
    <a href="" style="margin-bottom: 10px;" class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> Tambah Data User</a>
    <?php endif; ?>
    <br>
		<table class="table table-bordered" id="tabel">
		<thead>
			 <tr>
		    <th>NO</th>
		    <th>NAMA</th>
			<th>PRICE</th>
			<th>CYCLE</th>
			<th>ACTION</th>
		    <?php if (isset($_SESSION['username'])): ?>
		    <th></th>
			<?php endif; ?>
		  </tr>
		</thead>
		<tbody>
		
		</tbody>
		</table>
	</div>
</div>

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