<!doctype html>
<html lang="en">
<?php
  session_start();
  if(isset($_SESSION['check'])){
    if($_SESSION['check'] != "tr"){
      header('location: ../');
    }else{
      session_destroy();
    }
  }else{
    header('location: ../');
  }
?>
<head>
    <?php
        require_once '../../../page_util/head.php';
    ?>
</head>

<body>
    <?php
        require_once '../../../page_util/menu.php';
    ?>

    
<br>
  <!-- ================ registration section start ================= -->
  <section class="contact-section section_padding">
    <div class="container" ><br><br>
    	<div class="form-group mt-3">
         <text><b>If below form does not load properly (Recommended for Mobile Devices), </b></text><br>
         <button onclick="window.open('https://forms.gle/AZapBTxz5RH7JaxN6', '_blank');" class="button button-contactForm btn_1">Click Here</button>
      </div>
      <div class=" d-sm-block mb-5 pb-4" align="center">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSexbItYQ1Uc1q_b26skvqjfDgwBmk0UHdtVXi84W8_iZhaZOA/viewform?embedded=true" style="width: 100%; height: 1600px;" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
      </div>
    </div>
 </section>

  <!-- ================ registration section end ================= -->

      <?php
        require_once '../../../page_util/footer.php';
      ?>

<!-- contact js -->
<script src="../../../js/jquery.ajaxchimp.min.js"></script>
<script src="../../../js/jquery.form.js"></script>
<script src="../../../js/jquery.validate.min.js"></script>
<script src="../../../js/mail-script.js"></script>
<script src="../../../js/contact.js"></script>

</body>

</html>