<!doctype html>
<html lang="en">
<?php
  if(isset($_GET['tc'])){
    session_start();
    $_SESSION['check'] = "tr";
    header('location: ./validate/');
  }
?>
<head>
  <link rel="stylesheet" href="pop/swc.css">
    <?php
        require_once '../page_util/head.php';
    ?>
</head>

<body>
    <?php
        include '../page_util/menu.php';
    ?>

    
<br>
  <!-- ================ registration section start ================= -->
  <section class="contact-section section_padding">
    <div class="container" style="text-align: center;"><br><br>
    	<div class="form-group mt-3">
        <div style="text-align: left;">
           <text><b>To proceed with the application process, follow the steps below.</b></text><br><br>
           <text><b>01. Join Edvicon International Telegram channel for registration using below button.</b></text><br>
           <text><b>02. Use the registration link mentioned in the channel.</b></text><br>
           <text><b>03. Use the community invitation link to join Edvicon International Telegram Community.</b></text><br><br>
        </div>
         <button onclick="window.location.href='https://t.me/EdviconEduRegistration'" class="button button-contactForm btn_1" style="background: skyblue; color: blue;">Join and Get Registration Link (Telegram)</button> 
      </div>
    </div>
 </section>
  <!-- <div id="boxes">
    <div style="top: 50%; left: 50%; display: none;" id="dialog" class="window"> 
      <div id="san">
      <a href="#" class="close agree"><img src="pop/close-icon.png" width="25px" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
      <img src="pop/Web_Announcement.gif" width="75%">
      </div>
    </div>
    <div style="width: 100%; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
  </div> -->

  <!-- ================ registration section end ================= -->

      <?php
        require_once '../page_util/footer.php';
      ?>
<script src="pop/swc.js"></script>
<!-- contact js -->
<script src="../js/jquery.ajaxchimp.min.js"></script>
<script src="../js/jquery.form.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/mail-script.js"></script>
<script src="../js/contact.js"></script>

</body>

</html>