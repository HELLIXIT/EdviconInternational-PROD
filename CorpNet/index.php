<!doctype html>
<html lang="en">
<?php
  if(isset($_GET['corplogin'])){
    session_start();
    $_SESSION['passed'] = "true";
  }else{
    session_start();
  }

  if(isset($_SESSION['passed'])){
    header('location: ./Secured/');
  }else{
    header('location: ../../');
  }
?>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
</body>

</html>