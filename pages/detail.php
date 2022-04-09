<?php include 'includes/header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="<?php echo $productInfo['image']; ?>" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h2 class="card-title">Product Name: <?php echo $productInfo['name']; ?></h2>
                        <h2 class="card-title">Product Price: <?php echo $productInfo['price']; ?></h2>
                        <h2 class="card-title">Current Stock: <?php echo $productInfo['stock']; ?></h2>
                        <h2 class="card-title">Product Description: <?php echo $productInfo['description']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>