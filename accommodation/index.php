<?php
 session_start();
 include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sism 2023">
    <meta name="author" content="cyberarea">
    <link rel="shortcut icon" href="static/mism2020/images/favicon.ico"/>
    <title>SISM 2023 | Accommodation </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../static/mism2020/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../static/mism2020/css/mism.css" rel="stylesheet">
    <link href="../../static/mism2020/css/responsive.css" rel="stylesheet">
    <link href="../../static/mism2020/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../../static/mism2020/bower_components/font-awesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="../../static/mism2020/bower_components/font-awesome/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <script src="../../static/mism2020/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../static/mism2020/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>


<!-- /Yandex.Metrika counter -->

<header>
<div class="responsiv__block"  id="responsiv__block">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top marron">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="../../index.php">Home</a>
             </li>
        <li class="nav-item dropdown newfont">
            <a href="../about/index.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu">
             <a class="dropdown-item" href="../about/topics/index.php">Main topics</a>
             <a class="dropdown-item" href="../about/dates/index.php">Important dates</a>
             <a class="dropdown-item" href="../about/fees/index.php">Registration fees</a>
             <a class="dropdown-item" href="../about/plenary/index.php">Plenary speakers</a>
             <a class="dropdown-item" href="../about/abstracts/index.php">Submission of abstracts</a>
            <a class="dropdown-item" href="../about/visa/index.php">VISA</a>
            </div>
        </li> 
        <li class="nav-item ">
            <a class="nav-link" href="../contacts/index.php">Contacts</a>
        </li>
        <?php if(!$_SESSION['user']) :?>
              <li class="nav-item ">
                  <a class="nav-link" href="../reg.php">Registration</a>
              </li>
              <? else :?>
                <p></p>
        <? endif;?>
        <li class="nav-item ">
            <a class="nav-link" href="../accommodation/index.php">Accommodation</a>
        </li>      
         <li class="nav-item ">
            <a class="nav-link" href="../org.php">Organizers</a>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Participants</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../abstracts/index.php">Submission of abstracts</a>
              <a class="dropdown-item" href="transportation.php">Transportation</a>
            </div>
        <?php if($_SESSION['user']) :?>
                  <li class="nav-item ">
                      <a class="nav-link" href="../manuscript/index.php">Manuscripts</a>
                  </li>
        <? else :?>
                <p></p>
        <? endif;?>
        <li class="nav-item ">
            <a class="nav-link" href="../program.php">Programm</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="../excursion.php">Excursion</a>
        </li>
        
    </ul>
      <?php if($_SESSION['user']) : ?>  
           <ul class="navbar-nav mr-4 right">
                <li class="nav-item ">
                     <a class="nav-link" href="../abstracts/index.php"><i class="fa-solid fa-upload"></i> Submission</a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link" href="../profile/index.php">
                          <i class="fa-solid fa-user"></i> <?=$_SESSION['user'];?></a>
                        </a>
                    </a>
                </li>
           </ul>
           <? else :?>
            <ul class="navbar-nav mr-4 right">
                <li class="nav-item dropdown">
                        <a class="nav-link" href="../accounts/login/index.php">
                          <i class="fa-solid fa-user"></i>Sign in 
                        </a>
                    </a>
                </li>
           </ul>
           <? endif;?>
        </div>
    </nav>
    
</div>
<div class="responsive__menu" >
  <div class="reposiv__menu-block-icon-add">
    <i class="fa-solid fa-bars  reposiv__menu-icon-add"></i>
  </div>
</div>
<div class="responsive__menu-remove" >
 
</div>


<div class="responsiv__menu-modal">
  <div class="responsiv__modal-link">
     <div class="reposiv__menu-block-icon-remove">
       <i class="fa-sharp fa-regular fa-circle-xmark reposiv__menu-icon-remove responsive__menu-remove"></i>
     </div>
        <ul class="responsive__ul-menu">
          <li class="menu-link"><a href="../index.php"><i class="fa fa-house"> Home</i></a></li>
          <li class="menu-link"><a href="../about/index.php"><i class="fa fa-list"> About</i></a></li>
          <li class="menu-link"><a href="../contacts/index.php"> <i class="fa fa-phone"> Contacts</i></a></li>
          <li class="menu-link"><a href="../reg.php"><i class="fa fa-user-plus"> Registration</i></a></li>
          <li class="menu-link"><a href="../accommodation/index.php"><i class="fa fa-hotel"> Accommodation</i></a></li>
          <li class="menu-link"><a href="../org.php"><i class="fa fa-people-group"> Organizers </i></a></li>
          <li class="menu-link"><a href="../transportation.php"> <i class="fa fa-train"> Transportation</i></a></li>
          <li class="menu-link"><a href="../programm.php"><i class="fa fa-table"> Programm</i></a></li>
          <li class="menu-link"><a href="../excursion.php"><i class="fa fa-mountain-sun"> Excursion</i></a></li>
          <li class="menu-link"><a href="../manuscript/index.php"><i class="fa-solid fa-upload"> Manuscripts</i></a></li>

          <?php if($_SESSION['user']) :?>
          <li class="menu-link">
                     <a class="" href="../abstracts/index.php"><i class="fa-solid fa-upload"> Submission</i></a>
                </li>
         <li class="menu-link">
            <a href="../profile/index.php">
              <i class="fa-solid fa-user"> <?=$_SESSION['user'];?></i>
            </a>
         </li>
           <? else :?>
         <li class="menu-link">
              <a class="" href="../accounts/login/index.php">
                <i class="fa-solid fa-user"> Sign in </i>
              </a>
           </li>
           <? endif;?>
         </ul>
     </div>
  </div>
</header>

<script type="text/javascript">
   document.querySelector(".reposiv__menu-icon-remove").addEventListener("click", ()=>{
  
        document.querySelector(".responsiv__menu-modal").classList.remove("responsiv__menu-modal-active");
    })

   document.querySelector(".reposiv__menu-block-icon-add").addEventListener("click", ()=>{
        
        document.querySelector(".responsiv__menu-modal").classList.add("responsiv__menu-modal-active");
    })
</script>

<main class="">
    <div class="row ">
            <div class="col-2 responsiv__block">
                <img src="../static/mism2020/images/mism_logo_2020_300.png" style="width: 150px" alt="MISM 2020 Logo">
            </div>
            <div class="col-10">
                <h2 class="page-header">Samarkand International Symposium on Magnetism SISM-2023<br/>
                <small>July 2-6, 2023</small></h2>
                <hr>
                </div>
            </div>
        </div>

  <div class="container">
   
    <div class="list-group">
     <ul>
      <h3>There are numerous hotels aroun Samarkand State University</h3>
    <h4>We recommende below : </h4>
        <li href="#" class="list-group-item list-group-item-action ">
           Zarafshan Parkside Hotel <span style="margin-left:300px !important;">from $110</span>
           <span style="margin-left:300px !important;"><a href="https://www.booking.com/hotel/uz/zarafshon-parkside.ru.html" target="_blank">for booking</a></span>
        </li>

        <li href="#" class="list-group-item list-group-item-action ">
           Boulevard Palace Hotel <span style="margin-left:312px !important;">from $50-70$</span>
           <span style="margin-left:280px !important;"><a href="https://www.booking.com/hotel/uz/boulevard-palace.ru.html" target="_blank">for booking</a></span>
        </li>

        <li href="#" class="list-group-item list-group-item-action ">
           Yangi-sharq Hotel <span style="margin-left:345px !important;">from $55</span>
           <span style="margin-left:315px !important;"><a href="https://www.tripadvisor.ru/Hotel_Review-g298068-d9811215-Reviews-Yangi_Sharq_Hotel-Samarkand_Samarqand_Province.html" target="_blank">for booking</a></span>
        </li>

        <li href="#" class="list-group-item list-group-item-action ">
           Meros Hotel <span style="margin-left:380px !important;">from $55-70$</span>
           <span style="margin-left:285px !important;"><a href="https://www.booking.com/hotel/uz/butik-otel-meros.ru.html" target="_blank">for booking</a></span>
        </li>

        <li href="#" class="list-group-item list-group-item-action ">
           Ishonch Hotel <span style="margin-left:370px !important;">from $55</span>
           <span style="margin-left:320px !important;"><a href="https://https://www.tripadvisor.ru/Hotel_Review-g298068-d12336881-Reviews-Hotel_Ishonch-Samarkand_Samarqand_Province.html" target="_blank">for booking</a></span>
        </li>
    </ul>
</div>

  

  </div>
</main>
<br><br>
  <footer class="container ">
            <div class="reponsive__footer">
            <p class="">
            <a href="javascript:void();" data-target="#termsScrollable" data-toggle="modal" href="#" style="color:#008080;">Terms of use</a>
            <b style="margin-left: 300px;">Copyright &copy; 2022 &middot; SISM-2023 Organizers &middot;</b>
            <a href="#" style="margin-left: 300px; color:#008080;" >Back to top</a>
            </p>
        </div>

        <div class="responsive-menu-footer">
          <b style="copyright">Copyright &copy; 2022 &middot; SISM-2023 Organizers &middot;</b><br>
 
          <a href="javascript:void();" data-target="#termsScrollable" data-toggle="modal" href="#" style="color:#008080;">Terms of use</a><br>
          <span style="justify-content:right!important; color:#008080; "> <a href="#" style=" color:#008080;" >Back to top</a></span>
        
        </div>  
  </footer>
 </div>
</body>
</html>