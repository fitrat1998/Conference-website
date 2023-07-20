<?php
session_start();
if($_SESSION['check'] == "true") {
include'header.php'  
?>
<br/>
<div class="container">
   <div class="row">
      <div class="col-10">
         <h2 class="page-header">Samarkand International Symposium on Magnetism<br/>
            <small>July 2-6, 2023</small>
         </h2>
         <hr>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-4 offset-lg-4">
         <div class="card">
            <div class="card-header"><i class="fa fa-eraser" aria-hidden="true"></i> Reset password</div>
            <div class="card-body">
               <form method="post" action="#" class="" id="update_password">
                  <p class="help-block">Enter your email address below</p>
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fa 	fa-check"></i></span>
                        </div>
                        <input class="form-control" type="text" placeholder="Enter confirmation code" id="confirm" name="confirm" required>
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                        </div>
                        <input class="form-control" type="text" placeholder="Enter your new password" id="password" name="password" required>
                     </div>
                  </div>
                  <br/>
                  <button class="btn btn-block btn-danger" type="submit" value="login">Update  password</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<br/>
<br/>
<hr>
</div>
</main>

<?php
 include'footer.php';
 include 'js.php';
 ?>
<? }
else {
   header("Location:index.php");
}

