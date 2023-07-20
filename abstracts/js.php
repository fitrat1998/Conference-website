<script src="../js/jquery-3.6.3.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/imask.min.js"></script>
<script src="../js/sweetalert.min.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/imask.min.js"></script>




<script type="text/javascript">
	//start of uploading
   $('#upload').submit(function(e) {
            e.preventDefault();
            let uploading = $('#upload').serialize();
            
            let formData = new FormData($("#upload")[0]);
        
            $.ajax({
                url : "valid.php",
                type : "POST",
                data:formData,
                contentType: false,
                processData: false,
                success:function(data) {
                    console.log(data);
                    if(data === "uploaded") {
                        swal("Good job!", "Congratulations your abstract uploaded successfully!", "success");

                         function up() {
                             window.location.href = "../profile/index.php";
                         }

                         const upload = setTimeout(up,1500);
                    }
                    else {
                        swal("Error!", data, "error");
                    }
                },
                error:function(xhr) {
                    alert("Internetda uzilish ro'y berdi"); 
                }
            });
         });

// end of uploading

//start of updating
    $("#update").submit(function(e) {
        e.preventDefault();
        let update = $('#update').serialize();   
        let update_form = new FormData($("#update")[0]);

       $.ajax({
                url : "form.php",
                type : "POST",
                data:update_form,
                contentType: false,
                processData: false,
                success:function(data) {
                    console.log(data);
                    if(data === "updated") {
                        swal("Good job!", "Congratulations your abstract uploaded successfully!", "success");

                         function update() {
                             window.location.href = "../profile/index.php";
                         }

                         const upd = setTimeout(update,200);
                    }
                    else {
                        swal("Error!",data, "error");
                    }
                }
                // error:function(xhr) {
                //     alert("Internetda uzilish ro'y berdi"); 
                // }
        });
    });
// end of updating

// start of phonemask

        var phoneMask = IMask(
         document.getElementById('phone'), {
            mask: '+{000}(00)000-00-00'
            });

        var phoneMask2 = IMask(
         document.getElementById('phone2'), {
            mask: '+{000}(00)000-00-00'
            });

       //end of phonemask
</script>