<?php
 session_start();
include '../config.php';
 
 $mail = $_SESSION['email'];
 $exists = mysqli_query($con,"SELECT * FROM submit WHERE email = '$mail'");
 $rows = mysqli_fetch_assoc($exists);

 $sql = mysqli_query($con,"SELECT * FROM manuscripts WHERE email = '$mail'");
 $res = mysqli_fetch_assoc($sql);

 if($_SESSION['user']) {
?>
<!Doctype html>
<html>
   <head>
       <meta name="description" content="Sism 2023">
    <meta name="author" content="cyberarea">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/mism2020/images/favicon.ico"/>
    <title>Sism 2023 | Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../../static/mism2020/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../static/mism2020/css/mism.css" rel="stylesheet">
    <link href="../../../static/mism2020/css/responsive.css" rel="stylesheet">
    <link href="../../../static/mism2020/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../../../static/mism2020/bower_components/font-awesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../../static/mism2020/bower_components/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="../../../static/mism2020/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../../static/mism2020/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <link href='../css/bootstrap.min.css' rel='stylesheet'>
      <link href='../css/style.css' rel='stylesheet'>
      <link href='../css/materialdesignicons.css' rel='stylesheet'>
      <script type='text/javascript' src='../js/jquery-3.6.3.min.js'></script>
      <style>::-webkit-scrollbar {
         width: 8px;
         }
         /* Track */
         ::-webkit-scrollbar-track {
         background: #; 
         }
         /* Handle */
         ::-webkit-scrollbar-thumb {
         background: #; 
         }
         /* Handle on hover */
         ::-webkit-scrollbar-thumb:hover {
         background: #; 
         } 
         }
      </style>
   </head>
   <?php include"header.php";?>
   <body className='snippet-body'>
   <!-- start of header -->
     <!-- end of header -->
      <div class="page-content page-container" id="page-content">
         <div class="padding">
            <div class="container d-flex justify-content-center">
               <div class="col-xl-12 col-md-12">
                  <div class="card user-card-full">
                     <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                           <div class="card-block text-center text-white">
                              <div class="m-b-25">
                                 <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Personal information</h6>
                                 <img src="../images/avatar.png" class="img-radius" alt="User-Profile-Image" width="125">
                              </div>

                              <h6 class="f-w-600">
                                <i class="fa fa-user" style=""></i> 
                                <?=$_SESSION['user'];?>
                              </h6><hr>

                              <p>
                                <i class="fa fa-globe"></i> <?=$_SESSION['country'];?>
                              </p><hr>
                           <a class="btn text-white" href="exit.php">
                             <i class="fa fa-arrow-up-right-from-square"></i> Logout
                           </a>
                            </i>

                           </div>
                        </div>
                        <div class="col-sm-8">
                           <div class="card-block">
                              <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Account information</h4>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Email</p><hr>
                                    <h6 class="text-muted f-w-400"><?=$_SESSION['email'];?></h6>
                                 </div>
                                 <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Password</p><hr>
                                    <h6 class="text-muted f-w-400"><?=$_SESSION['password'];?></h6>
                                 </div>

                              </div>
                              <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                              <div class="row">
                                 
                                 <div class="col-sm-6">
                                    <!-- <p class="m-b-10 f-w-600">Most Viewed</p> -->
                                    <h6 class="text-muted f-w-400 btn">
                                      <? if($rows['file']) :?>
                                      <a href="../abstracts/files/<?=$rows['file'];?>"><?=$rows['file'];?></a>
                                      <? else :?>
                                        <a href="<?=$rows[''];?>">You haven't upload anything yet.</a>
                                      <? endif ;?>
                                    </h6>
                        
                                 </div>
                                  <div class="col-sm-6">
                                    <!-- <p class="m-b-10 f-w-600">Most Viewed</p> -->
                                    <h6 class="text-muted f-w-400 btn">
                                      <? if($res['file']) :?>
                                      <a href="../manuscript/files/<?=$res['file'];?>"><?=$res['file'];?></a>
                                      <? else :?>
                                        <a href="<?=$rows[''];?>">You haven't upload anything yet.</a>
                                      <? endif ;?>
                                    </h6>
                        
                                 </div>
                                 <div class="col-sm-6">
                                    <!-- <p class="m-b-10 f-w-600">name</p> --> 
                                    <h6 class="text-muted f-w-400"><button class="btn bnt-current">Abstracts</button></h6>

                                    <form id="delete" method="post">
                                    <h6 class="text-muted f-w-400">
                                      <input type= "hidden" name="id" value="<?=$rows['id'];?>">
                                      <button  type="submit" class="btn bnt-delete">Delete</button></h6>
                                    </form>

                                    <h6 class="text-muted f-w-400"><a href="../abstracts/update.php?id=<?=$rows['id'];?>"><button type="button" class="btn btn-warning">Update</button></a></h6>
                                 </div>
                                  <div class="col-sm-6">
                                    <!-- <p class="m-b-10 f-w-600">name</p> --> 
                                    <h6 class="text-muted f-w-400"><button class="btn bnt-current">Manuscripts</button></h6>

                                    <form id="delete_script" method="post">
                                    <h6 class="text-muted f-w-400">
                                      <input type= "hidden" name="id" value="<?=$res['id'];?>">
                                      <button  type="submit" class="btn bnt-delete">Delete</button></h6>
                                    </form>

                                    <h6 class="text-muted f-w-400"><a href="../manuscript/update.php?id=<?=$res['id'];?>"><button type="button" class="btn btn-warning">Update</button></a></h6>
                                 </div>
                              </div><hr>
                             
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div><hr>
      <?include'footer.php';?>
      <?include'js.php';?>
         

    </body>
  </html>

    <? } else {

      header("Location:../index.php");
   
    }
 ?>



