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
      header('location: https://forms.gle/3wNoUCKCL83vY9Lh7');
    }else if($_SESSION['check'] == "fr"){
      header('location: https://forms.gle/AZapBTxz5RH7JaxN6');
    }else{
      header('location: ../');
    }
  }else{
    header('location: ../');
  }
?>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
</body>

</html>