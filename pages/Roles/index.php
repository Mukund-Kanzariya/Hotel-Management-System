<?php

require ('../../includes/init.php');
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>

		   <!--end header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">roles DATA</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Role Name</th>
										<th>Modify</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>10</td>
										<td>Maneger</td>
										<td><a href="#" class="btn btn-primary active" aria-current="page">Update</a></td>
										<td><a href="#" class="btn btn-danger active" aria-current="page">Delete</a></td>
									</tr>
								<tfoot>
								<tr>
										<th>Sr.No</th>
										<th>Role Name</th>
										<th>Modify</th>
										<th>Delete</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
	
<?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');
include pathOf('includes/pageEnd.php');

?>
