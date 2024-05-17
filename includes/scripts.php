<script src="<?=urlOf('assets/js/bootstrap.bundle.min.js')?>"></script>
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

	<script src="<?=urlOf('assets/js/index.js')?>"></script>

	<!--app JS-->
	<script src="<?=urlOf('assets/js/app.js')?>"></script>

	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>




	<!--ADD scripts-->
	<script src="<?=urlOf('assets/js/jquery.min.js')?>"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--plugins-->
	<script src="<?=urlOf('assets/js/jquery.min.js')?>"></script>
	<script>
	$(".switcher-btn").on("click", function() {
		$(".switcher-wrapper").toggleClass("switcher-toggled")
	}), $(".close-switcher").on("click", function() {
		$(".switcher-wrapper").removeClass("switcher-toggled")
	}),


	$('#theme1').click(theme1);
    $('#theme2').click(theme2);
    $('#theme3').click(theme3);
    $('#theme4').click(theme4);
    $('#theme5').click(theme5);
    $('#theme6').click(theme6);
    $('#theme7').click(theme7);
    $('#theme8').click(theme8);
    $('#theme9').click(theme9);
    $('#theme10').click(theme10);
    $('#theme11').click(theme11);
    $('#theme12').click(theme12);
    $('#theme13').click(theme13);
    $('#theme14').click(theme14);
    $('#theme15').click(theme15);

    function theme1() {
      $('body').attr('class', 'bg-theme bg-theme1');
    }

    function theme2() {
      $('body').attr('class', 'bg-theme bg-theme2');
    }

    function theme3() {
      $('body').attr('class', 'bg-theme bg-theme3');
    }

    function theme4() {
      $('body').attr('class', 'bg-theme bg-theme4');
    }
	
	function theme5() {
      $('body').attr('class', 'bg-theme bg-theme5');
    }
	
	function theme6() {
      $('body').attr('class', 'bg-theme bg-theme6');
    }

    function theme7() {
      $('body').attr('class', 'bg-theme bg-theme7');
    }

    function theme8() {
      $('body').attr('class', 'bg-theme bg-theme8');
    }

    function theme9() {
      $('body').attr('class', 'bg-theme bg-theme9');
    }

    function theme10() {
      $('body').attr('class', 'bg-theme bg-theme10');
    }

    function theme11() {
      $('body').attr('class', 'bg-theme bg-theme11');
    }

    function theme12() {
      $('body').attr('class', 'bg-theme bg-theme12');
    }

	function theme13() {
		$('body').attr('class', 'bg-theme bg-theme13');
	  }
	  
	  function theme14() {
		$('body').attr('class', 'bg-theme bg-theme14');
	  }
	  
	  function theme15() {
		$('body').attr('class', 'bg-theme bg-theme15');
	  }

	</script>

<!--table scripts-->

<script src="<?=urlOf('assets/js/bootstrap.bundle.min.js')?>"></script>
	<!--plugins-->
	<script src="<?=urlOf('assets/js/jquery.min.js')?>"></script>
	<script src="<?=urlOf('assets/plugins/simplebar/js/simplebar.min.js')?>"></script>
	<script src="<?=urlOf('assets/plugins/metismenu/js/metisMenu.min.js')?>"></script>
	<script src="<?=urlOf('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')?>"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="<?=urlOf('assets/js/app.js')?>"></script>


	<!-- new -->

	<script src="<?= urlOf('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<!--plugins-->
	<script src="<?= urlOf('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= urlOf('assets/plugins/simplebar/js/simplebar.min.js') ?>"></script>
	<script src="<?= urlOf('assets/plugins/metismenu/js/metisMenu.min.js') ?>"></script>
	<script src="<?= urlOf('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') ?>"></script>
	<script src="<?= urlOf('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') ?>"></script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="<?= urlOf('assets/js/index.js') ?>"></script>
	<!--app JS-->
	<script src="<?= urlOf('assets/js/app.js') ?>"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>