<!doctype html>
<html lang="en">
<?php
  if(isset($_GET['lr'])){
    session_start();
    $_SESSION['check'] = "lr";
  }else if(isset($_GET['fr'])){
    session_start();
    $_SESSION['check'] = "fr";
  }else{
    session_start();
  }

  if(isset($_SESSION['check'])){
    if($_SESSION['check'] == "lr"){
      header('location: https://forms.office.com/Pages/ResponsePage.aspx?id=IVnGy3moa0KZFuBhG2D75TfVxligsdRKttmwZwrSIBNUOTVWTFRJU0I2QjFOVUdITzAxNE1DV0Y5Ui4u');
    }else if($_SESSION['check'] == "fr"){
      header('location: https://forms.office.com/Pages/ResponsePage.aspx?id=IVnGy3moa0KZFuBhG2D75TfVxligsdRKttmwZwrSIBNUOTVWTFRJU0I2QjFOVUdITzAxNE1DV0Y5Ui4u');
    }else{
      header('location: ../');
    }
  }else{
    header('location: ../');
  }
?>
</head>

<body>
</body>

</html>