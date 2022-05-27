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
                if ($_GET['a'] == 'shop') {
                    require 'views/shop/shop.php';
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

    <!-- js: for populating products -->
    <script src="assets/js/populate_product.js"></script>

    <?php
    // for lowest price products
    $column = 'id';
    $order_by = 'DESC';
    $variable_name = 'shop_products';
    $global_transaction ->filter_list_products($column, $order_by, $variable_name);

   
     ?>

     <script>

        $(document).ready(()=>{

            populate_products_on_div('products_div', shop_products, 3);
            });
     </script>

</body>


</html>