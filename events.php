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
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Events</h2>
                            <p>Home<span>/</span>Events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        require_once './page_util/events.php';
        echo "<br><br><br>";
        require_once './page_util/footer.php';
    ?>
</body>
</html>