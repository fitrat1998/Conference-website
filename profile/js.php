 <script src="../js/jquery-3.6.3.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/imask.min.js"></script>
<script src="../js/sweetalert.min.js"></script>

 <script type="text/javascript">
            $('#delete').submit(function(e){
               e.preventDefault();
               
               let del = $('#delete').serialize();

               $.ajax({
                   url : "../abstracts/delete.php",
                   type : "POST",
                   data : del,
                   success:function(data) {
                      console.log(data);
                      if(data === "") {
                        swal("Good job!", "Your abstract deleted successfully", "success");

                        function refresh_delete() {
                          window.location.reload();
                        }

                        const del_abs = setTimeout(refresh_delete,1000)
                      }
                      else {
                         swal("Error!", data, "error");
                      }
                   }
               });

            });

            $('#delete_script').submit(function(e){
               e.preventDefault();
               
               let del_script = $('#delete_script').serialize();

               $.ajax({
                   url : "../manuscript/delete.php",
                   type : "POST",
                   data : del_script,
                   success:function(data) {
                      console.log(data);
                      if(data === "") {
                        swal("Good job!", "Your manuscript deleted successfully", "success");

                        function ref() {
                          window.location.reload();
                        }

                        const delt_script = setTimeout(ref,1000)
                      }
                      else {
                         swal("Error!", data, "error");
                      }
                   }
               });

            });
          </script>