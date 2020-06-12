<?php
    include('conn/db_connect.php');
    if(isset($_GET['id'])){
        $sql = 'SELECT * FROM cities WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_GET['id']]);
        $city = $stmt->fetch();

    }
?>

<?php include('include/header.php'); ?>

    <div class="container">
        <div class="bg-warning p-3">
            <h2 class="display-4"><?php echo($city['city_name']); ?> </h2>
            <p class="lead"><?php echo($city['description_one']); ?></p>
        </div>
        <hr>
        <div class="row">
            <div class="col-3 mr-3">
                <p><strong><?php echo($city['prev_ranking']); ?></strong></p>
                <p class="mr-auto"><strong><?php echo($city['population_of']); ?></strong></p>
                <a class="btn btn-primary text-center mt-5" href="products.php" role="button">Browse Products</a>
            </div>
            <div class="col-8">
                <p><?php echo($city['description_two']); ?></p>
            </div>
        </div>
    </div>

<?php include('include/footer.php'); ?>