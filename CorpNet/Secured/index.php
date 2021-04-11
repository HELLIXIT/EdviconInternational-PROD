<!doctype html>
<html lang="en">
<?php
  session_start();
  if(isset($_SESSION['passed'])){
    header('location: https://edvicon-my.sharepoint.com/:f:/g/personal/info_edvicon_org/Eib61Lt7XVpMgS4BG6pLv7EBJk3GrkHO-w9vZZuSYAsTUA?e=Y95lqF');
  }else{
    header('location: ../../');
  }
?>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
</body>

</html>