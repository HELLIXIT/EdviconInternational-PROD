<!doctype html>
<html lang="en">
<?php
  ob_start();
  session_start();
  if(isset($_GET['lr'])){
    $_SESSION['check'] = "lr";
  }else if(isset($_GET['fr'])){
    $_SESSION['check'] = "fr";
  }

  if(isset($_SESSION['check'])){
    if($_SESSION['check'] == "lr"){
      header('location: https://forms.office.com/Pages/ResponsePage.aspx?id=IVnGy3moa0KZFuBhG2D75TfVxligsdRKttmwZwrSIBNUOTVWTFRJU0I2QjFOVUdITzAxNE1DV0Y5Ui4u');
      ob_end_flush();
      die();
    }else if($_SESSION['check'] == "fr"){
      header('location: https://forms.office.com/Pages/ResponsePage.aspx?id=IVnGy3moa0KZFuBhG2D75TfVxligsdRKttmwZwrSIBNUOTVWTFRJU0I2QjFOVUdITzAxNE1DV0Y5Ui4u');
      ob_end_flush();
      die();
    }else{
      header('location: ../');
      ob_end_flush();
      die();
    }
  }else{
    header('location: ../');
    ob_end_flush();
      die();
  }
?>
</head>

<body>
</body>

</html>