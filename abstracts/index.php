<?php
 session_start();
 include '../config.php';
 include 'header.php';
?>

<main role="main">
    

    <br/>

    <div class="container">

        <div class="row">
            <div class="col-2 responsiv_block">
                <img src="../../static/mism2020/images/mism_logo_2020_300.png" style="width: 150px" alt="MISM 2020 Logo">
            </div>
            <div class="col-10">
                <h2 class="page-header">Samarkand International Symposium on Magnetism<br/>
                <small>July 2-6,  2023</small></h2>
                <hr>
           
            </div>
        </div>

    
    
    <br/>
    <br/>
    

    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <div class="card">
                <div class="card-header"><i class="fa fa-bracket" aria-hidden="true" style="margin-left:100px;"></i> Title of abstracts</div>
                <div class="card-body">
                    <form method="post" class="margin-top-md" action="" class="" enctype="multipart/form-data" id="upload">
                      <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                   <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="first_name" id="" name="first_name" required autofocus value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                   <i class="fa fa-user-tie"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="last_name" id="" name="last_name" required autofocus value="">
                        </div>
                    </div>

                   <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                   <i class="fa fa-comment-medical"></i>
                                </span>
                            </div>
                            <textarea class="form-control" type="text" placeholder="abstracts" id="" name="abstract" required autofocus></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa fa-key"></i>
                                </span>
                            </div>
                            <textarea class="form-control" type="text" placeholder="keywords" id="" name="keyword" required autofocus></textarea>
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa fa-envelope fa-fw"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Email" id="email" name="email" required autofocus> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa fa-phone fa-fw"></i>
                                </span>
                            </div>
                            <input class="form-control" type="" placeholder="Phonenumber" id="phone" name="phone" required autofocus> 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa-regular fa-file-word"></i>
                                </span>
                            </div>
                            <input class="form-control" style="margin:5px;" type="file" placeholder="file" id="" name="file" required>
                            
                        </div>
                    </div>

                    <? if($_SESSION['user']) :?>
                    <button class="btn btn-block marron" type="submit"  name="submit" style="color:#fff;">
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
    </div><br>

          <strong align="center" style="margin-left: 200px !important; color:red;" >  In the case of any problem with submission of abstract please send it by email  <span><a href="mailto:mism@magn.ru">mism@magn.ru</a></span></strong>


        <hr>

        <!-- Modal terms of use -->
        <div class="modal fade" id="termsScrollable" tabindex="-1" role="dialog" aria-labelledby="termsScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="termsScrollableTitle">Terms of use</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <h5>CONSENT TO THE PROCESSING OF PERSONAL DATA</h5>

                <!--   <p class="text-justify">An individual registering on the website mism.magn.ru agrees to accept this
                      Consent to the processing of personal data (hereinafter - the Consent). Acceptance of the Consent
                      is the sending of an application on the website. Acting freely, of his own free will and in his
                      interest, and also confirming his legal capacity, an individual gives his consent to the Lomonosov
                      Moscow State University, Physical Faculty, located at 119991, Moscow, Leninskie gory, d. 1, bld.2
                      (hereinafter referred to as the Site Administration), to process their personal data with the
                      following conditions:</p> -->

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

<?php include'js.php';
      include 'footer.php';
?>
</body>
</html>