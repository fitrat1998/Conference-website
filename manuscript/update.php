
<?php
include '../config.php';

 $id = $_GET['id'];

 $sql = mysqli_query($con,"SELECT * FROM manuscripts WHERE id = '$id'");
 $res = mysqli_fetch_assoc($sql);

?>
<?include'../header.php';?><br><br><hr>
<div class="row">
        <div class="col-lg-4 offset-lg-4">
            <div class="card">
                <div class="card-header" style="text-align:center !important;"><i class="fa fa-bracket" aria-hidden="true" ></i>Updating</div>
                <div class="card-body">
                    <form method="POST" class="margin-top-md" enctype="multipart/form-data" id="update">
                   
                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                   <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="first_name" id="" name="first_name" required autofocus value="<?=$res['first_name'];?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                   <i class="fa fa-user-tie"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="last_name" id="" name="last_name" required autofocus value="<?=$res['last_name'];?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa-regular fa-file-word"></i>
                                </span>
                            </div>
                            <input class="form-control" style="margin:5px;" type="file" placeholder="file" id="" name="file" required value="<?=$res['file'];?>">
                            
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?=$res['id'];?>">

                    <? if($_SESSION['user']) :?>
                    <button class="btn btn-block marron" type="submit"  name="update" style="color:#fff;">
                      <i class="fa fa-upload"></i>
                    Upload</button>
                    <? else :?>
                      <button class="btn btn-block marron" style="color:#fff;" disabled>
                      <i class="fa fa-upload"></i>
                    <? endif;?>
                   
                    </form>
                    <br/>
                </div>
                
            </div>
        </div>
    </div>	
                

<br><hr>
<?include'../footer.php';?>
<?include'js.php';?>

</body>
</html>
