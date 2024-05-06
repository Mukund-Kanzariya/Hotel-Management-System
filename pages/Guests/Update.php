<?php

require('../../includes/init.php');

$room="SELECT * FROM `rooms`";
$data=select($room);

$id=$_GET['updateid'];
$query="SELECT * FROM `guests` WHERE Id=?";
$param=[$id];
$row=selectOne($query,$param);

include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>

	<!--wrapper-->
	<div class="page-wrapper">
			<div class="page-content">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="<?= urlOf('assets/images/login-images/guest.jpg') ?>" class="img-fluid auth-img-cover-login" width="1000" alt=""/>
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
										<h5 class="">Update Guest</h5>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<input type="hidden" id="id" value="<?= $id ?>">
										  <div class="col-md-12">
											<label  class="form-label">AllotedRoomNo</label>
											<select id="allotedroomno" class="form-select" autofocus>
												<option selected>Choose RoomNumber...</option>
                                        	    <?php foreach($data as $rooms) {?>
												<option value="<?= $rooms['Id']?>"><?= $rooms['RoomNumber'] ?></option>
                                        	    <?php } ?>
											</select>
									    	</div>
                                           
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Name</label>
													<input type="text" class="form-control border-end-0" id="name" value="<?= $row['Name'] ?>" >
											</div>
                                            <div class="col-12">
												<label for="inputChoosePassword" class="form-label">Mobile No</label>
													<input type="text" class="form-control border-end-0" id="mobile" value="<?= $row['MobileNo'] ?>">
											</div>
                                            <div class="col-12">
												<label for="inputChoosePassword" class="form-label">Address</label>
													<input type="text" class="form-control border-end-0" id="address" value="<?= $row['Address'] ?>">
											</div>
                                            <div class="col-12">
												<label for="inputChoosePassword" class="form-label">E-mail</label>
													<input type="text" class="form-control border-end-0" id="email" value="<?= $row['Email'] ?>">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">CheckInTime</label>
													<input type="text" class="form-control border-end-0" id="intime" value="<?= $row['InTime']?>">
											</div> <div class="col-12">
												<label for="inputChoosePassword" class="form-label">CheckOutTime</label>
													<input type="text" class="form-control border-end-0" id="outtime" value="<?= $row['OutTime']?>">
											</div>
											<div class="col-12">
												<label  class="form-label">TotalPrice</label>
													<input type="text" class="form-control border-end-0" id="price" vlaue="<?= $row['TotalPrice']?>">
											</div>
											<div class="col-12">
												<label for="inputfile" class="form-label">IdentityImageFile</label>
													<input type="file" class="form-control border-end-0" id="image"  value="<?= $row['IdentityImageFile'] ?>">
											</div>
											
											
											<div class="col-12">
												<div class="d-grid">
													<button type="button" class="btn btn-light" onclick="updateData()">Save Changes</button>
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
	function updateData(){
		var form = new FormData();
			form.append('id',$('#id').val());
            form.append('allotedroomno', $('#allotedroomno').val());
            form.append('name', $('#name').val());
            form.append('mobile', $('#mobile').val());
            form.append('address', $('#address').val());
            form.append('email', $('#email').val());
            form.append('intime', $('#intime').val());
            form.append('outtime', $('#outtime').val());
            form.append('price', $('#price').val());
            form.append('image', $('#image')[0].files[0]);

            $.ajax({
                url: '../../api/Guests/update.php',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success: function(response) {
					// console.log(response.success);
                    if (response.success !== true)
                        return;

					window.alert("Guests Updated Successfully.....");
					window.location.href='./index.php';
					
                }
            })
	}
</script>

<?php

include pathOf('includes/pageEnd.php');

?>
