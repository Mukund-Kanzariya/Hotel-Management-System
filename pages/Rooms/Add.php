<?php

require('../../includes/init.php');

// $permissions = authenticate('Rooms', 1);
// if ($permissions['AddPermission'] != 1)
//     header('Location: ./index');

$query="SELECT * FROM `roomtypes`";
$row=select($query);

include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>

<div class="page-wrapper">
			<div class="page-content">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="<?= urlOf('assets/images/login-images/room.jpg') ?>" class="img-fluid auth-img-cover-login" width="1000" alt=""/>
							</div>
						</div>
						
					</div>

					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right bg-light align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="<?= urlOf('assets/images/logo-icon.png') ?>" width="60" alt="">
									</div>
									<div class="text-center mb-4">
										<h5 class="">Add Room</h5>
									</div>
									<div class="form-body">
										<form class="row g-3">
											
										<div class="col-md-12">
										<label  class="form-label">RoomType</label>
										<select id="roomtypeid" class="form-select">
											<option selected>Choose RoomType...</option>
                                            <?php foreach($row as $data) {?>
											<option value="<?= $data['Id'] ?>"><?= $data['Name'] ?></option>
                                            <?php } ?>
										</select>
									    </div>
											<div class="col-12">
												<label  class="form-label">RoomNumber</label>
													<input type="text" class="form-control border-end-0" id="roomnumber"  placeholder="Enter roomnumber" autofocus>
											</div>
                                            <div class="col-12">
												<label  class="form-label">Price</label>
													<input type="text" class="form-control border-end-0" id="price"  placeholder="Enter Price">
											</div>
                                            <div class="col-12">
												<label  class="form-label">IsAvailable</label>
													<input type="text" class="form-control border-end-0" id="isavailable"  placeholder="Enter yes=1 no=0">
											</div>

                                            <div class="col-12">
												<div class="d-grid">
													<button type="button" class="btn btn-light" onclick="sendData()">ADD</button>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
<?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');

?>

<script>
	function sendData(){
		// window.alert($('#roomtypeid').val());
		$.ajax({
			url:'../../api/Rooms/insert.php',
			type:'POST',
			data: {
				roomtypeid:$('#roomtypeid').val(),
				roomnumber:$('#roomnumber').val(),
				price:$('#price').val(),
				isavailable:$('#isavailable').val()
			},
			success:function(response){
				if(response==0)
				// return window.location='../../pages/Rooms';

				window.alert("Data Added Successfully....");
				window.location.href='./index.php';

			}
		})
	}
</script>

<?php

include pathOf('includes/pageEnd.php');

?>