   
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/imask.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script type="text/javascript">
  
$('#reg-form').submit(function(e) {
    e.preventDefault();

    let form = $('#reg-form').serialize();
    
    $.ajax({
        url : "auth.php",
        type : "POST",
        data: form,
        success:function(data) {
            console.log(data);
            if(data === "inserted"){

                swal("Good job!", "Successfully registered", "success");

                function reg() {
                window.location.href = "accounts/login/index.php";
                }
                function rel() {
                  location.reload();
                }
                const mttime = setTimeout(reg,2000);
                const reload = setTimeout(rel,2200);
            }
            else {
                if(data === "exists") {
                  swal("Error!", "Written email or password already registered", "error");
                }
                else {
                  swal("Error!", "Error registeration", "error");
                }
            }
        }
        // error:function(xhr) {
        //      alert("Internetda uzilish ro'y berdi"); 
        // }
    });

});

     //datatable
        $(document).ready(function () {
        $('#example').DataTable( {
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false
                 } );

        }); 
        // $('#example').DataTable();
       //end of datatable

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
                             window.location.href = "profile.php";
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
                             window.location.href = "profile.php";
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

   
    </script>