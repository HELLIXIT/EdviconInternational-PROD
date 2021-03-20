<!doctype html>
<html class="no-js" lang="zxx">
<?php 
   if($_POST["code"]) {
      $certCode = $_POST['code'];
   }else if($_GET["code"]) {
      $certCode = $_GET['code'];
   }else{
    echo "<script> location.replace('./index.html'); </script>";
   }
   
?>
<style>
.resp-sharing-button__link,
.resp-sharing-button__icon {
  display: inline-block
}

.resp-sharing-button__link {
  text-decoration: none;
  color: #fff;
  margin: 0.5em
}

.resp-sharing-button {
  border-radius: 5px;
  transition: 25ms ease-out;
  padding: 0.5em 0.75em;
  font-family: Helvetica Neue,Helvetica,Arial,sans-serif
}

.resp-sharing-button__icon svg {
  width: 1em;
  height: 1em;
  margin-right: 0.4em;
  vertical-align: top
}

.resp-sharing-button--small svg {
  margin: 0;
  vertical-align: middle
}

/* Non solid icons get a stroke */
.resp-sharing-button__icon {
  stroke: #fff;
  fill: none
}

/* Solid icons get a fill */
.resp-sharing-button__icon--solid,
.resp-sharing-button__icon--solidcircle {
  fill: #fff;
  stroke: none
}

.resp-sharing-button--twitter {
  background-color: #55acee
}

.resp-sharing-button--twitter:hover {
  background-color: #2795e9
}

.resp-sharing-button--pinterest {
  background-color: #bd081c
}

.resp-sharing-button--pinterest:hover {
  background-color: #8c0615
}

.resp-sharing-button--facebook {
  background-color: #3b5998
}

.resp-sharing-button--facebook:hover {
  background-color: #2d4373
}

.resp-sharing-button--tumblr {
  background-color: #35465C
}

.resp-sharing-button--tumblr:hover {
  background-color: #222d3c
}

.resp-sharing-button--reddit {
  background-color: #5f99cf
}

.resp-sharing-button--reddit:hover {
  background-color: #3a80c1
}

.resp-sharing-button--google {
  background-color: #dd4b39
}

.resp-sharing-button--google:hover {
  background-color: #c23321
}

.resp-sharing-button--linkedin {
  background-color: #0077b5
}

.resp-sharing-button--linkedin:hover {
  background-color: #046293
}

.resp-sharing-button--email {
  background-color: #777
}

.resp-sharing-button--email:hover {
  background-color: #5e5e5e
}

.resp-sharing-button--xing {
  background-color: #1a7576
}

.resp-sharing-button--xing:hover {
  background-color: #114c4c
}

.resp-sharing-button--whatsapp {
  background-color: #25D366
}

.resp-sharing-button--whatsapp:hover {
  background-color: #1da851
}

.resp-sharing-button--hackernews {
background-color: #FF6600
}
.resp-sharing-button--hackernews:hover, .resp-sharing-button--hackernews:focus {   background-color: #FB6200 }

.resp-sharing-button--vk {
  background-color: #507299
}

.resp-sharing-button--vk:hover {
  background-color: #43648c
}

.resp-sharing-button--facebook {
  background-color: #3b5998;
  border-color: #3b5998;
}

.resp-sharing-button--facebook:hover,
.resp-sharing-button--facebook:active {
  background-color: #2d4373;
  border-color: #2d4373;
}

.resp-sharing-button--twitter {
  background-color: #55acee;
  border-color: #55acee;
}

.resp-sharing-button--twitter:hover,
.resp-sharing-button--twitter:active {
  background-color: #2795e9;
  border-color: #2795e9;
}

.resp-sharing-button--linkedin {
  background-color: #0077b5;
  border-color: #0077b5;
}

.resp-sharing-button--linkedin:hover,
.resp-sharing-button--linkedin:active {
  background-color: #046293;
  border-color: #046293;
}

.resp-sharing-button--whatsapp {
  background-color: #25D366;
  border-color: #25D366;
}

.resp-sharing-button--whatsapp:hover,
.resp-sharing-button--whatsapp:active {
  background-color: #1DA851;
  border-color: #1DA851;
}
</style>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edvicon International | Certificate Validation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://www.edvicon.org/validate/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="https://www.edvicon.org/validate/img/logo.png" alt="" style="width: 40%;">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_green" href="https://edvicon.tawk.help">
                                        <i class="flaticon-chat"></i>
                                        <span>Service Portal</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    

    <?php 
    $the_big_array = []; 
    $certCodeGet = "";
    $certNameGet = "";
    $certIssueDateGet = "";
    $certCourseGet = "";

      if (($h = fopen("https://docs.google.com/spreadsheets/d/e/2PACX-1vRG1zBfFALOUyniEgZd4AdKJiqNeuoTDTnyv8XwHbiwmG4WdqaRAoZIPRb7QAFNXnPH6tDxDZT3ErOH/pub?gid=1319707412&single=true&output=csv", "r")) !== FALSE) 
        {
          // Convert each line into the local $data variable
          while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
          { 
            if($data[1]==$certCode){
                $the_big_array[] = $data;   
                $certCodeGet = $data[1];
                $certNameGet = $data[2];
                $certIssueDateGet = $data[3]; 
                $certCourseGet = $data[4];
            }
          }
          
          if($certCodeGet == null){
            echo "<script> location.replace('./verification_failed.php'); </script>";
          }
          fclose($h);
        }

    ?>

    <div class="bradcam_area breadcam_bg overlay2">
        <h3>Certificate Verified!</h3>
    </div>

    <div class="about_boxes">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                        <div class="single_box">
                            <h3><?php echo $certNameGet; ?></h3>
                            <p>Issued To</p>
                        </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                        <div class="single_box">
                            <h3><?php echo $certCourseGet; ?></h3>
                            <p>Awarded In Recognition</p>
                        </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single_box">
                        <h3><?php echo $certCodeGet; ?></h3>
                        <p>Certificate Numebr</p>
                    </div>
                </div>
                
                <div class="col-xl-6 col-md-6">
                    <div class="single_box">
                        <h3><?php echo $certIssueDateGet; ?></h3>
                        <p>Issued Date</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                        <div class="single_box">
                            <!-- <img src="https://edvicon.github.io/Certification/Certs/<?php echo $certCodeGet; ?>.png" alt="" style="width: 100%;"> -->
                            <!-- <img src="https://raw.githubusercontent.com/edvicon/Certification/master/Certs/<?php echo $certCodeGet; ?>.png" alt="" style="width: 100%;"> -->
                            <img src="https://cert.edvicon.org/Certs/<?php echo $certCodeGet; ?>.png" alt="" style="width: 100%;">
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                        <div class="single_box">
                            <!-- Sharingbutton Facebook -->
                            <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=https://cert.edvicon.org/Certs/<?php echo $certCodeGet; ?>.png" target="_blank" rel="noopener" aria-label="Share on Facebook">
                              <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
                                </div>Share on Facebook</div>
                            </a>

                            <!-- Sharingbutton Twitter -->
                            <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?url=https://cert.edvicon.org/Certs/<?php echo $certCodeGet; ?>.png" target="_blank" rel="noopener" aria-label="Share on Twitter">
                              <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
                                </div>Share on Twitter</div>
                            </a>

                            <!-- Sharingbutton LinkedIn -->
                            <a class="resp-sharing-button__link" href="https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&name=<?php echo $certCourseGet; ?>&organizationId=31565990&certUrl=https://cert.edvicon.org/Certs/<?php echo $certCodeGet; ?>.png&certId=<?php echo $certCodeGet; ?>" target="_blank" rel="noopener" aria-label="Share on LinkedIn">
                              <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 21.5h-5v-13h5v13zM4 6.5C2.5 6.5 1.5 5.3 1.5 4s1-2.4 2.5-2.4c1.6 0 2.5 1 2.6 2.5 0 1.4-1 2.5-2.6 2.5zm11.5 6c-1 0-2 1-2 2v7h-5v-13h5V10s1.6-1.5 4-1.5c3 0 5 2.2 5 6.3v6.7h-5v-7c0-1-1-2-2-2z"/></svg>
                                </div>Share on LinkedIn</div>
                            </a>

                            <!-- Sharingbutton WhatsApp -->
                            <a class="resp-sharing-button__link" href="whatsapp://send?text=https://cert.edvicon.org/Certs/<?php echo $certCodeGet; ?>.png" target="_blank" rel="noopener" aria-label="Share on WhatsApp">
                              <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z"/></svg>
                                </div>Share on WhatsApp</div>
                            </a>

                        </div>
                </div>
            </div>
        </div>
    </div>


    <div class="have_question">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 ">
                        <div class="single_border">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-md-4 col-lg-6">
                                    <h3>Have any Question?</h3>
                                </div>
                                <div class="col-xl-6 col-md-8 col-lg-6">
                                    <div class="chat">
                                        <a class="boxed_btn_green2" href="https://www.edvicon.org/contact.html">
                                                Contact Edvicon
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>