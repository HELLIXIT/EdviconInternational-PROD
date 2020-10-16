<!doctype html>
<html lang="en">
<head>
    <?php
        require_once './page_util/head.php';
    ?>
        <script src="./history/js/jquery.js"></script>
        <script src="./history/js/timeline.min.js"></script>
        <link rel="stylesheet" href="./history/css/bootstrap.min.css" />
        <link rel="stylesheet" href="./history/css/timeline.min.css" />
</head>
<body>
    <?php
        require_once './page_util/menu.php';
    ?>
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Hostory of Edvicon International</h2>
                            <p>Home<span>/</span>History</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
            <br />
            <h3 align="center"><a href="">Our Journey</a></a></h3><br />
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="timeline">
                        <div class="timeline__wrap">
                            <div class="timeline__items">
                            <?php
                            $h = fopen("https://docs.google.com/spreadsheets/d/e/2PACX-1vRoCfIPqT54OzyrkmmUOh7W1ias1im7QVhFkZug9tqzpjXWi9hlB0yT7AxM21_PRKuE0K0Ldh5aVyFR/pub?gid=1906379865&single=true&output=csv", "r");
                            $data = fgetcsv($h, 0, ",");
                            while (($data = fgetcsv($h, 0, ",")) !== FALSE) 
                            {
                            ?>
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        <h2><?php echo $data[1]; ?></h2>
                                        <h5><?php echo $data[2]; ?></h5>
                                        <p><?php echo $data[3]; ?></p>
                                        <p><a href="<?php echo $data[4]; ?>" target="_blank">Click Here</a></p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
<script>
$(document).ready(function(){
    jQuery('.timeline').timeline();
});
</script>