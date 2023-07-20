<script src="../js/jquery-3.6.3.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/imask.min.js"></script>
<script src="../js/sweetalert.min.js"></script>
<script src="../js/menu.js"></script>
<script type="text/javascript">
	//start of manuscript uploading
$('#manuscript').submit(function(e) {
    e.preventDefault();
    
    let manu = $('#manuscript').serialize();
            
    let ajaxmanu = new FormData($("#manuscript")[0]);

    $.ajax({
        url : "scripts.php",
        type: "POST",
        data : ajaxmanu,
        contentType: false,
        processData: false,
        success:function(data) {
            console.log(data);
            if(data === "uploaded") {
                swal("Congratulations","Your manuscript successfully uploaded","success");
                function header() {
                    window.location.href = "../profile/index.php";
                }

                const red = setTimeout(header,300);
            }
            else {
                swal("Error",data,"error");
            }
        },
        error:function(xhr) {
            alert("Error connecting");
        }
    })
});
//end of manuscript updating

$('#update').submit(function(e) {
    e.preventDefault();
    
    let upd = $('#update').serialize();
            
    let update = new FormData($("#update")[0]);

    $.ajax({
        url : "update_script.php",
        type: "POST",
        data : update,
        contentType: false,
        processData: false,
        success:function(data) {
            console.log(data);
            if(data === "updated") {
                swal("Congratulations","Your manuscript successfully uploaded","success");
                function header() {
                    window.location.href = "../profile/index.php";
                }

                const red = setTimeout(header,300);
            }
            else {
                swal("Error",data,"error");
            }
        },
        error:function(xhr) {
            alert("Error connecting");
        }
    })
});
//end of manuscript updating

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
