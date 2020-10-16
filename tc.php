<!doctype html>
<html lang="en">

<head>
    <?php
        require_once './page_util/head.php';
    ?>
</head>

<body>
    <?php
        require_once './page_util/menu.php';
    ?>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Terms and Conditions</h2>
                            <p>Home<span>/</span>Terms and Conditions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <?php
        require_once './page_util/termsandconditions.php';
        echo "<br><br>";
        require_once './page_util/footer.php';
    ?>
</body>

</html>