<script src="../../js/jquery-3.6.3.min.js"></script>
<script src="../../js/jquery.dataTables.min.js"></script>
<script src="../../js/imask.min.js"></script>
<script src="../../js/sweetalert.min.js"></script>
<script src="../../js/menu.js"></script>

<script type="text/javascript">
	$('#reset').submit(function(e) {
		e.preventDefault();

		let mail = $('#reset').serialize();

		$.ajax({
			url : "send_confirm_code.php",
			type : "POST",
			data : mail,
			success:function(data) {
				console.log(data);
				if(data === "inserted") {

					swal("Good job","Confirm code send to your email","success");

					function refsend() {
						window.location.href = "update_password.php";
					}

					const mk = setTimeout(refsend,300);
				}
				else {
					swal("Error",data,"error");
				}
			},
			error:function(xhr) {
				alert("Connecting error");
			}
		});

	});

	// update password
   $('#update_password').submit(function(e) {
   	  e.preventDefault();

   	  let pass = $('#update_password').serialize();

   	  $.ajax({
   	  	 url : "confirm.php",
   	  	 type : "POST",
   	  	 data : pass,
   	  	 success:function(data) {
   	  	 	console.log(data);
   	  	 	if(data === "updated") {

				swal("Good job","your password has been updated successfully","success");

				function reloc() {
					window.location.href = "../../profile/index.php";
				}


				const suc = setTimeout(reloc,300);
			}
			else {
					swal("Error",data,"error");
			}
   	  	 },
   	  	 error:function(xhr) {
   	  	 	alert('Error connecting');
   	  	 }
   	  })
   });
</script>
