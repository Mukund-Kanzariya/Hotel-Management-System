<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?=urlOf('assets/js/jquery.min.js')?>"></script>
	<script src="<?=urlOf('assets/plugins/simplebar/js/simplebar.min.js')?>"></script>
	<script src="<?=urlOf('assets/plugins/metismenu/js/metisMenu.min.js')?>"></script>
	<script src="<?=urlOf('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')?>"></script>
	<script src="<?=urlOf('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')?>"></script>
	<script src="<?=urlOf('assets/plugins/datatable/js/jquery.dataTables.min.js')?>"></script>
	<script src="<?=urlOf('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')?>"></script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>