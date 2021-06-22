<!doctype html>
<html lang="en">
<?php
  //session_start();
  if(isset($_GET['lr'])){
    $_SESSION['check'] = "lr";
  }else if(isset($_GET['fr'])){
    $_SESSION['check'] = "fr";
  }

  if(isset($_SESSION['check'])){
    if($_SESSION['check'] == "lr"){
      echo "<script>location.href='https://forms.office.com/Pages/ResponsePage.aspx?id=IVnGy3moa0KZFuBhG2D75TfVxligsdRKttmwZwrSIBNUOTVWTFRJU0I2QjFOVUdITzAxNE1DV0Y5Ui4u';</script>";
      //header('location: https://forms.office.com/Pages/ResponsePage.aspx?id=IVnGy3moa0KZFuBhG2D75TfVxligsdRKttmwZwrSIBNUOTVWTFRJU0I2QjFOVUdITzAxNE1DV0Y5Ui4u');
      //exit();
    }else if($_SESSION['check'] == "fr"){
      echo "<script>location.href='https://forms.office.com/Pages/ResponsePage.aspx?id=IVnGy3moa0KZFuBhG2D75TfVxligsdRKttmwZwrSIBNUOTVWTFRJU0I2QjFOVUdITzAxNE1DV0Y5Ui4u';</script>";
      //header('location: https://forms.office.com/Pages/ResponsePage.aspx?id=IVnGy3moa0KZFuBhG2D75TfVxligsdRKttmwZwrSIBNUOTVWTFRJU0I2QjFOVUdITzAxNE1DV0Y5Ui4u');
      //exit();
    }else{
      echo "<script>location.href='../';</script>";
      //header('location: ../');
      //exit();
    }
  }else{
    echo "<script>location.href='../';</script>";
    //header('location: ../');
    //exit();
  }
?>
</head>

<body>
</body>

</html>