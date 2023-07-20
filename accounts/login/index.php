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
    <title>SISM 2023 | Login </title>
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
            <a href="../../about/index.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu">
             <a class="dropdown-item" href="../../about/topics/index.php">Main topics</a>
             <a class="dropdown-item" href="../../about/dates/index.php">Important dates</a>
             <a class="dropdown-item" href="../../about/fees/index.php">Registration fees</a>
             <a class="dropdown-item" href="../../about/plenary/index.php">Plenary speakers</a>
             <a class="dropdown-item" href="../../about/abstracts/index.php">Submission of abstracts</a>
            <a class="dropdown-item" href="../../about/visa/index.php">VISA</a>
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

<main role="main">
    


    <br/>

    <div class="container">

        <div class="row">
            <div class="col-2 responsiv__block">
                <img src="../../static/mism2020/images/mism_logo_2020_300.png" style="width: 150px" alt="MISM 2020 Logo">
            </div>
            <div class="col-10">
                <h2 class="page-header">Samarkand International Symposium on Magnetism<br/>
                <small>July 2-6, 2023</small></h2>
                <hr>
               
            </div>
        </div>

    
    
    <br/>
    <br/>
    

    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <div class="card">
                <div class="card-header" ><i class="fa fa-lock" aria-hidden="true" style="margin-left:120px; "></i> Login </div>
                <div class="card-body">
                    <form method="post" class="margin-top-md" id="login"> 

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                            </div>
                            <input class="form-control" type="text" placeholder="Email" id="id_username" name="email" required autofocus>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key fa-fw"></i></span>
                            </div>
                            <input class="form-control" type="password" placeholder="Password" id="id_password" name="password" required>
                            
                        </div>
                    </div>

                    <button class="btn btn-block marron" type="submit" value="login" style="color: #fff;"><i class="fa fa-unlock" aria-hidden="true" ></i> Sign in</button>
                    
                    </form>
                    <br/>
                    <a href="/../../reg.php" style="color:#008080;">Sign Up <i class="fa-solid fa-user-plus"></i></a>
                    
                    <br/>
                    <a href="../resetpass/index.php" style="color:#008080;">Forgot password?</a>
                </div>
            </div>
        </div>
    </div>



        <hr>

        <!-- Modal terms of use -->
        <div class="modal fade" id="termsScrollable" tabindex="-1" role="dialog" aria-labelledby="termsScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="" style="color:#008080;" id="termsScrollableTitle">Terms of use</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <h5>CONSENT TO THE PROCESSING OF PERSONAL DATA</h5>

                  <p class="text-justify">An individual registering on the website mism.magn.ru agrees to accept this
                      Consent to the processing of personal data (hereinafter - the Consent). Acceptance of the Consent
                      is the sending of an application on the website. Acting freely, of his own free will and in his
                      interest, and also confirming his legal capacity, an individual gives his consent to the Lomonosov
                      Moscow State University, Physical Faculty, located at 119991, Moscow, Leninskie gory, d. 1, bld.2
                      (hereinafter referred to as the Site Administration), to process their personal data with the
                      following conditions:</p>

                  <ol>
                      <li>The current version of the Consent, which is a public document, is available to any Internet
                          user by clicking on the link &quot;Terms of use&quot;. The Site Administration has the right to
                          make changes to this Consent. When making changes to the Consent, the Site Administration
                          notifies users of this by posting a new version of the Consent on the Site no later than 10
                          days before the relevant changes take effect.
                      </li>
                      <li>In case of disagreement of the user with the terms of this Consent, the use of the Site and
                          its services should be immediately terminated.
                      </li>
                      <li>This Consent is given to the processing of personal data, both without the use of automation
                          tools, and with their use.
                      </li>
                      <li>Consent is given to the processing of the following personal data:
                          <ul>
                              <li>personal data that is not special or biometric, and the minimum necessary for
                                  registration on the Site: last name, first name, middle name, gender, date of birth,
                                  email address.
                              </li>
                              <li>provided by users using the editing section of their pages on the Website
                                  https://mism.magn.ru/accounts/profile/
                              </li>
                          </ul>
                      </li>
                      <li>Personal data that is not special or biometric: surname, name, patronymic; E-mail address.
                      </li>
                      <li>Personal data is not publicly available.</li>
                      <li>Purpose of processing personal data: registration in the system of accounting and analysis of
                          scientific activities of employees of organizations.
                      </li>
                      <li>During the processing of personal data, the following actions will be performed: collection;
                          record; systematization; accumulation; storage; clarification (update, change); extraction;
                          using; transfer (provision, access); blocking; removal; destruction.
                      </li>
                      <li>Personal data is processed before it leaves the public offer.</li>
                      <li>Consent may be revoked by the personal data subject or his representative by sending a written
                          statement to the Site Administration at the address indicated at the beginning of this
                          Consent.
                      </li>
                      <li>In case of withdrawal by the subject of personal data or his representative of consent to the
                          processing of personal data of Lomonosov Moscow State University, Physical Faculty has the
                          right to continue processing personal data without the consent of the personal data subject if
                          there are grounds specified in clauses 2&ndash;11 of p. 1 of a. 6, p. 2 of a. 10 and p.2 of
                          a.11 of Federal Law No. 152-FL &quot;On Personal Data&quot; dated 07/27/2006.
                      </li>
                      <li>This consent is valid all the time until the termination of the processing of personal data
                          specified in clauses 6 and 7 of this Consent.
                      </li>
                  </ol>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>

</main>
 
<script src="../../js/jquery-3.6.3.min.js"></script>
<script src="../../js/imask.min.js"></script>
<script src="../../js/sweetalert.min.js"></script>
    <script type="text/javascript">

       //login
       $('#login').submit(function(e) {
         e.preventDefault();
         
         let form = $('#login').serialize();

         $.ajax({
          url:'valid.php',
          type: 'post',
          data: form,
          success:function(data) {
            console.log(data);
           if(data === "loged"){
                swal("Good job!", "Successfully registered", "success"); 

                function redirect() {

                window.location.href = "../../profile/index.php";

                }

                const time =setTimeout(redirect,2000);
            }
            else {
                swal("Error!",data, "error");
            }
          }
         // error:function(xhr) {
         //     alert("Internetda uzilish ro'y berdi"); 
         //    }
         });

       });
    </script>

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