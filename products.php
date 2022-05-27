<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Clouds to You</title>
    <?php require 'includes/site/head.php'; ?>
</head>

<body class="home bg-grey">
    <div class="page-wrapper">
        <?php require 'includes/site/header.php'; ?>
        <!-- End of Header -->
        <!-- Start of Main -->
        <main class="main">



            <?php
            if (isset($_GET['a'])) {
                if ($_GET['a'] == 'product_detail') {
                    require 'views/shop/product_detail.php';
                } else {
                    goto default_;
                }
            } else {
                default_:
                require 'views/shop/shop.php';
            }

            ?>


        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->

        <?php require 'includes/site/footer.php'; ?>
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper -->

    <?php require 'includes/site/bottom_page.php'; ?>

</body>


</html>