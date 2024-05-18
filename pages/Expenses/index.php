<?php

require ('../../includes/init.php');

$UserId = $_SESSION['UserId'];
$permissions = authenticate('Expenses', $UserId);

$query="SELECT * FROM `expenses`";
$row=select($query);
$index=1;

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
					<?php if ($permissions['AddPermission'] == 1) { ?>
					<div class="ms-auto">
					<button type="button" class="btn btn-light"><a href="Add">ADD EXPENSE</a></button>
					</div>
					<?php } ?>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">EXPENSES DATA</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<?php if($permissions['ViewPermission']==1) { ?>
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Expense Name</th>
										<th>Amount</th>
										<?php if ($permissions['EditPermission'] == 1) { ?>
                                                <th>Modify</th>
                                            <?php } ?>
                                            <?php if ($permissions['DeletePermission'] == 1) { ?>
                                                <th>Delete</th>
                                            <?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php if ($permissions['ViewPermission'] == 1) { 
										 foreach($row as $data) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $data['Name'] ?></td>
										<td><?= $data['Amount'] ?></td>
										<?php if($permissions['EditPermission'] == 1) { ?>
										<td><a href="Update?updateid=<?= $data['Id'] ?>" class="btn btn-primary active" aria-current="page">Update</a></td>
										<?php } ?>
										<?php if($permissions['DeletePermission']==1) { ?>
										<td><button class="btn btn-danger active" aria-current="page" onclick="deleteData(<?= $data['Id'] ?>)">Delete</button></td>
										<?php } ?>
									</tr>
									<?php } } ?>
								<tfoot>
								<tr>
										<th>Sr.No</th>
										<th>Expense Name</th>
										<th>Amount</th>
										<?php if($permissions['EditPermission'] == 1) {?>
										<th>Modify</th>
										<?php }?>
										<?php if($permissions['DeletePermission'] == 1) {?>
										<th>Delete</th>
										<?php }?>
									</tr>
								</tfoot>
							</table>
							<?php } ?>
						</div>
					</div>
				</div>
	
<?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');

?>

<script>
	function deleteData(id){
		if(confirm("Are you sure you want to delete this data.....???"));

		$.post('../../api/Expenses/delete.php',{
			id:id,
			success:function(response){
				window.alert("Data Deleted .....!!!");
				window.location.href='../../pages/Expenses';
			}
		})
	}
</script>

<?php

include pathOf('includes/pageEnd.php');

?>
