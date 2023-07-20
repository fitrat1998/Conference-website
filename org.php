<?php
   session_start();
   include 'config.php';
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
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item dropdown newfont">
                        <a href="about/index.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="about/topics/index.php">Main topics</a>
                           <a class="dropdown-item" href="about/dates/index.php">Important dates</a>
                           <a class="dropdown-item" href="about/fees/index.php">Registration fees</a>
                           <a class="dropdown-item" href="about/plenary/index.php">Plenary speakers</a>
                           <a class="dropdown-item" href="about/abstracts/index.php">Submission of abstracts</a>
                           <a class="dropdown-item" href="about/visa/index.php">VISA</a>
                        </div>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="contacts/index.php">Contacts</a>
                     </li>
                     <?php if(!$_SESSION['user']) :?>
                     <li class="nav-item ">
                        <a class="nav-link" href="reg.php">Registration</a>
                     </li>
                     <? else :?>
                     <p></p>
                     <? endif;?>
                     <li class="nav-item ">
                        <a class="nav-link" href="accommodation/index.php">Accommodation</a>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="org.php">Organizers</a>
                     </li>
                     <li class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Participants</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="abstracts/index.php">Submission of abstracts</a>
                           <a class="dropdown-item" href="transportation.php">Transportation</a>
                        </div>
                        <?php if($_SESSION['user']) :?>
                     <li class="nav-item ">
                        <a class="nav-link" href="manuscript.php">Manuscripts</a>
                     </li>
                     <? else :?>
                     <p></p>
                     <? endif;?>
                     <li class="nav-item ">
                        <a class="nav-link" href="program.php">Programm</a>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="excursion.php">Excursion</a>
                     </li>
                  </ul>
                  <?php if($_SESSION['user']) : ?>  
                  <ul class="navbar-nav mr-4 right">
                     <li class="nav-item ">
                        <a class="nav-link" href="abstracts/index.php"><i class="fa-solid fa-upload"></i> Submission</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="profile.php">
                        <i class="fa-solid fa-user"></i> <?=$_SESSION['user'];?></a>
                        </a>
                        </a>
                     </li>
                  </ul>
                  <? else :?>
                  <ul class="navbar-nav mr-4 right">
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="accounts/login/index.php">
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
                  <li class="menu-link"><a href="index.php"><i class="fa fa-house"> Home</i></a></li>
                  <li class="menu-link"><a href="about/index.php"><i class="fa fa-list"> About</i></a></li>
                  <li class="menu-link"><a href="contacts/index.php"> <i class="fa fa-phone"> Contacts</i></a></li>
                  <li class="menu-link"><a href="reg.php"><i class="fa fa-user-plus"> Registration</i></a></li>
                  <li class="menu-link"><a href="accomodation/index.php"><i class="fa fa-hotel"> Accommodation</i></a></li>
                  <li class="menu-link"><a href=""><i class="fa fa-people-group"> Organizers </i></a></li>
                  <li class="menu-link"><a href="transportation.php"> <i class="fa fa-train"> Transportation</i></a></li>
                  <li class="menu-link"><a href="programm.php"><i class="fa fa-table"> Programm</i></a></li>
                  <li class="menu-link"><a href="excursion.php"><i class="fa fa-mountain-sun"> Excursion</i></a></li>
                  <?php if($_SESSION['user']) :?>
                  <li class="menu-link">
                     <a class="" href="submit.php"><i class="fa-solid fa-upload"> Submission</i></a>
                  </li>
                  <li class="menu-link">
                     <a href="profile.php">
                     <i class="fa-solid fa-user"> <?=$_SESSION['user'];?></i>
                     </a>
                  </li>
                  <? else :?>
                  <li class="menu-link">
                     <a class="" href="accounts/login/index.php">
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
      <br />
      <div class="container">
         <div class="row">
            <div class="col-2">
               <img src="static/mism2020/images/mism_logo_2020_300.png" style="width: 120px;" alt="MISM 2020 Logo">
            </div>
            <br><br>
            <div class="col-10">
                <center><b><font face="Arial,Helvetica"><font size=+2>Conference organizers</font></font></b>
<br><b><i><font size=+1><a href="http://sism.samdu.uz">Samarkand International Symposium on Magnetism 2023</a></font></i></b><br>
<p><b>President of National Organizing Committee <i><a href="https://www.samdu.uz/en/pages/u_rektori">Rustam Ibragimovich  Xalmuradov </a></i></b></center>
               <hr>
            </div>
         </div>
        

<hr WIDTH="90%" ALIGN=CENTER>
<center><font >Chairmen Nikolai Perov, Alexander Granovsky</font></center>
<hr WIDTH="90%" ALIGN=CENTER>
<center><font size=+2>International Advisory Committee</font></center>

<center><table BORDER=0 CELLSPACING=0 CELLPADDING=0 COLS=3 WIDTH="90%" >
<ul>
<tr>
<td>
<li><font size=+1>Sergio Caprara (Italy)</font>
<li><font size=+1>Michael Farle  (Germany)</font>
<li><font size=+1>Dino Fiorani  (Italy)</font>
<li><font size=+1>Evangelos Hristoforou (Greece)</font>
<li><font size=+1>Mitsuteru Inoue (Japan)</font>
<li><font size=+1>Sunita Keshri (India)</font>
</td>

<td>
<li><font size=+1>Nikolay Mushnikov (Russia)</font>
<li><font size=+1>Sergey  Nikitov  (Russia)</font>
<li><font size=+1> Agung Nugroho (Indonesia)</font>
<li><font size=+1>Sergey Ovchinnikov  (Russia)</font>
<li><font size=+1>Stuart S.P. Parkin (Germany)</font>
<li><font size=+1>Roman   Pisarev (Russia)</font>
</td>
<td>
<li><font size=+1>Theo Rasing (Germany)</font>
<li><font size=+1>Kyung-Ho Shin (Korea)</font>
<li><font size=+1>Vladimir Ustinov   (Russia)</font>
<li><font size=+1>Manuel Vazquez (Spain)</font>
<li><font size=+1>Anatoly Vedyaev (Russia)</font>
<li><font size=+1>Anatoly Zvezdin (Russia)</font>
</td>
</tr>
</ul>
</table></center>
<hr WIDTH="90%" ALIGN=CENTER>
<center><font size=+2>National Organizing  Committee </font></center>

<center><table BORDER=0 CELLSPACING=0 CELLPADDING=0 COLS=2 WIDTH="90%" >
<tr>
<td>
<br><font size=+1>Hakim Khushvaktov - Vice rector of Samarkand state university named after Sharof Rashidov for scientific works and innovations</font>
<br><font size=+1>Akhatov Akmal - Vice Rector of Samarkand state university named after Sharof Rashidov for international cooperation </font>
<br><font size=+1>Akmal Yarmukhamedov - Director of Engineering Physics Institute of Samarkand state university named after Sharof Rashidov</font>
<br><font size=+1>Rustam Rajabov - Head of General Physics department Engineering Physics Institute of Samarkand state university named after Sharof Rashidov</font>
<br><font size=+1>Оblakul Кuvandikov - Engineering Physics Institute of Samarkand state university named after Sharof Rashidov</font>
<br><font size=+1>Komil Mukimov - National University of Uzbekistan</font>
<br><font size=+1>Uygun Valiev - National University of Uzbekistan</font>
<br><font size=+1>Elvira Ibragimova - Institute of Nuclear Physics Academy of Science Republic of Uzbekistan</font>
<br><font size=+1>Mirzo Sharipov - Bukhara institute of engineering and technology</font>
<br><font size=+1>Davron Djuraev - Bukhara state university</font>
</td>

<td>
<br><font size=+1>Uktam Usarov - Samarkand Architectural and Construction Institute</font>
<br><font size=+1>Abdugani Eshkulov - Tashkent State Technical University</font>
<br><font size=+1>Eshkuvvat Arzikulov - Engineering Physics Institute of Samarkand state university named after Sharof Rashidov </font>
<br><font size=+1>Ilkhomjon Subkhankulov - Engineering Physics Institute of Samarkand state university named after Sharof Rashidov </font>
<br><font size=+1>Nurliboy  Hamraev - Engineering Physics Institute of Samarkand state university named after Sharof Rashidov </font>
<br><font size=+1>Maysara Salakhitdinova - Engineering Physics Institute of Samarkand state university named after Sharof Rashidov  </font>
<br><font size=+1>Davron  Imamnazarov - Engineering Physics Institute of Samarkand state university named after Sharof Rashidov </font>
<br><font size=+1>Zokir Shodiev - Engineering Physics Institute of Samarkand state university named after Sharof Rashidov </font>
<br><font size=+1>Bakhtiyor Amonov - Engineering Physics Institute of Samarkand state university named after Sharof Rashidov </font>
<br><font size=+1> </font>
</td>

</tr>
</table></center>
<hr WIDTH="90%" ALIGN=CENTER>
<center><font size=+2>Program Committee</font></center>

<center><table BORDER=0 CELLSPACING=0 CELLPADDING=0 COLS=3 WIDTH="90%" >
<tr>
<td>
<font size=+1>A. Granovsky (chairman)</font>
</td>
<td>
<font size=+1>K. Kimel (vice-chairman) </font>
</td>
<td>
<font size=+1>A. Pyatakov (vice-chairman) </font>
</td>
</tr>
<tr>
<td><font size=+1>Maysara Salakhitdinova (scientific secretary)</font></td>
<td><font size=+1></font>
</td>
<td></td>
</tr>
<tr></tr>

<tr>
<td>
<font size=+1>Yu. Raikher</font>
</td>
<td>
<font size=+1>K. Kimel</font>
</td>
<td>
<font size=+1>E.M. Ibragimova</font>
</td>
</tr>
<tr>
<td>
<font size=+1>A. Vasiliev</font>
</td>
<td>
<font size=+1>L. Panina</font>
</td>
<td>
<font size=+1>B. Aronzon</font>
</td>
</tr>
<tr>
<td>
<font size=+1>V. Koledov</font>
</td>
<td>
<font size=+1>A. Vinogradov</font>
</td>
<td>
<font size=+1>A. Smirnov</font>
</td>
</tr>
<tr>
<td>
<font size=+1>S.Streltsov</font>
</td>
<td>
<font size=+1>V. Khovaylo </font>
</td>
<td>
<font size=+1>L.Tagirov</font>
</td>
</tr>
<tr>
<td>
<font size=+1>G. Kurlyandskaya </font>
</td>
<td>
<font size=+1>A.Zhukov</font>
</td>
<td>
<font size=+1>M. Zhuravlev</font>
</td>
</tr>
<tr>
<td>
<font size=+1>N. Pugach </font>
</td>
<td>
<font size=+1>О. Кuvandikov</font>
</td>
<td>
<font size=+1>V. Rodionova</font>
</td>
</tr>
<tr>
<td>
<font size=+1>Yu. Pastushenkov</font>
</td>
<td>
<font size=+1>K. Zvezdin</font>
</td>
<td>
<font size=+1>K. Rozanov </font>
</td>
</tr>
<tr>
<td>
<font size=+1>V. Shavrov</font>
</td>
<td>
<font size=+1>А. Kirilyuk</font>
</td>
<td>
<font size=+1>A. Kalashnikova</font>
</td>
</tr>
<tr>
<td>
<font size=+1>A. Semisalova</font>
</td>
<td>
<font size=+1>V. Belotelov</font>
</td>
<td>
<font size=+1>A.  Murtazaev</font>
</td>
</tr>
<tr>
<td>
<font size=+1>K.Mukimov</font>
</td>
<td>
<font size=+1>N. Bebenin</font>
</td>
<td>
<font size=+1>U.Usarov</font>
</td>
</tr>


</table></center>

<hr WIDTH="90%" ALIGN=CENTER>
<center><i><font size=-1>Please send your wishes to</font></i>
<br><font size=+1><a href="mailto:mism@magn.ru">mism<a href="mailto:mism@magn.ru"><img SRC="email.jpg" ALT="E-mail" BORDER=0 height=45 width=40 align=CENTER></a>
magn.ru</a></font></center>
  
      </div>
      <br><br>
      <hr>
      <?php include'footer.php';?>
      <script src="js/jquery-3.6.3.min.js"></script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
         //datatable
               $(document).ready(function () {
                 $('#example').DataTable();
               //       $('#example').DataTable( {
               // "bPaginate": false,
               // "bFilter": false,
               // "bInfo": false
               //          } );
         
               });
              //end of datatable
      </script>
   </body>
</html>