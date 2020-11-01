<!doctype html>
<html lang="en">
<?php
  session_start();
  if(isset($_SESSION['check'])){
    if($_SESSION['check'] != "wr"){
      header('location: ../');
    }
  }else{
    header('location: ../');
  }
?>
<head>
  <link rel="stylesheet" href="pop/swc.css">
    <?php
        require_once '../../page_util/head.php';
    ?>
</head>

<body>
    <?php
        include '../../page_util/menu.php';
    ?>

    
<br>
  <!-- ================ registration section start ================= -->
  <section class="contact-section section_padding">
    <div class="container" style="text-align: center;"><br><br>
    	<div class="form-group mt-3">
         <text><b>Select Your Membership Type</b></text><br><br>
         <button onclick="window.location.href='./lk/'" class="button button-contactForm btn_1">Local Members (Sri Lanka)</button> 
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <button onclick="window.location.href='./int/'" class="button button-contactForm btn_1">International Members</button>
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
        require_once '../../page_util/footer.php';
      ?>
<script src="pop/swc.js"></script>
<!-- contact js -->
<script src="../../js/jquery.ajaxchimp.min.js"></script>
<script src="../../js/jquery.form.js"></script>
<script src="../../js/jquery.validate.min.js"></script>
<script src="../../js/mail-script.js"></script>
<script src="../../js/contact.js"></script>

</body>

</html>