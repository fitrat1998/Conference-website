<?php
 session_start();
 include '../../config.php';
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
    <title>SISM 2023 | Home </title>
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
            <a href="about/index.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu">
             <a class="dropdown-item" href="../topics/index.php">Main topics</a>
             <a class="dropdown-item" href="../dates/index.php">Important dates</a>
             <a class="dropdown-item" href="../fees/index.php">Registration fees</a>
             <a class="dropdown-item" href="../plenary/index.php">Plenary speakers</a>
             <a class="dropdown-item" href="../abstracts/index.php">Submission of abstracts</a>
            <a class="dropdown-item" href="../visa/index.php">VISA</a>
            </div>
        </li> 
        <li class="nav-item ">
            <a class="nav-link" href="../../contacts/index.php">Contacts</a>
        </li>
        <?php if(!$_SESSION['user']) :?>
              <li class="nav-item ">
                  <a class="nav-link" href="../../reg.php">Registration</a>
              </li>
              <? else :?>
                <p></p>
        <? endif;?>
        <li class="nav-item ">
            <a class="nav-link" href="../../accommodation/index.php">Accommodation</a>
        </li>      
         <li class="nav-item ">
            <a class="nav-link" href="../../org.php">Organizers</a>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Participants</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../../abstracts/index.php">Submission of abstracts</a>
              <a class="dropdown-item" href="../../transportation.php">Transportation</a>
            </div>
        <?php if($_SESSION['user']) :?>
                  <li class="nav-item ">
                      <a class="nav-link" href="../../manuscript/index.php">Manuscripts</a>
                  </li>
        <? else :?>
                <p></p>
        <? endif;?>
        <li class="nav-item ">
            <a class="nav-link" href="../../program.php">Programm</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="../../excursion.php">Excursion</a>
        </li>
        
    </ul>
      <?php if($_SESSION['user']) : ?>  
           <ul class="navbar-nav mr-4 right">
                <li class="nav-item ">
                     <a class="nav-link" href="../../abstracts/index.php"><i class="fa-solid fa-upload"></i> Submission</a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link" href="../../profile/index.php">
                          <i class="fa-solid fa-user"></i> <?=$_SESSION['user'];?></a>
                        </a>
                    </a>
                </li>
           </ul>
           <? else :?>
            <ul class="navbar-nav mr-4 right">
                <li class="nav-item dropdown">
                        <a class="nav-link" href="../../accounts/login/index.php">
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
          <li class="menu-link"><a href="../../index.php"><i class="fa fa-house"> Home</i></a></li>
          <li class="menu-link"><a href="../index.php"><i class="fa fa-list"> About</i></a></li>
          <li class="menu-link"><a href="../../contacts/index.php"> <i class="fa fa-phone"> Contacts</i></a></li>
          <li class="menu-link"><a href="../../reg.php"><i class="fa fa-user-plus"> Registration</i></a></li>
          <li class="menu-link"><a href="../../accomodation/index.php"><i class="fa fa-hotel"> Accommodation</i></a></li>
          <li class="menu-link"><a href="../../org.php"><i class="fa fa-people-group"> Organizers </i></a></li>
          <li class="menu-link"><a href="../../transportation.php"> <i class="fa fa-train"> Transportation</i></a></li>
          <li class="menu-link"><a href="../../programm.php"><i class="fa fa-table"> Programm</i></a></li>
          <li class="menu-link"><a href="../../excursion.php"><i class="fa fa-mountain-sun"> Excursion</i></a></li>
          <li class="menu-link"><a href="../../manuscript/index.php"><i class="fa-solid fa-upload"> Manuscripts</i></a></li>
          
          <?php if($_SESSION['user']) :?>
          <li class="menu-link">
                     <a class="" href="../../abstracts/index.php"><i class="fa-solid fa-upload"> Submission</i></a>
                </li>
         <li class="menu-link">
            <a href="../../profile/index.php">
              <i class="fa-solid fa-user"> <?=$_SESSION['user'];?></i>
            </a>
         </li>
           <? else :?>
         <li class="menu-link">
              <a class="" href="../../accounts/login/index.php">
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