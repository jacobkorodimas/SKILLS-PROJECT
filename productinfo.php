<?php 
    include('conn/db_connect.php');

    if(isset($_GET['id'])){
        $sql = 'SELECT * FROM products WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_GET['id']]);
        $product = $stmt->fetch();
    }

?>

<?php include('include/header.php'); ?>

    <header class="py-3 px-5 text-center text-dark bg-warning">
        <h1 class="display-4 mb-3"><?php echo $product['name']; ?></h1>
    </header>
    <div class="container d-block align-items-center text-center bg-warning p-3">
        <p class="lead mb"><?php echo $product['description'];?></h2>
        <div class="my-4">
            <img id="productinfoimg" src="img/<?php echo $product['pack'];?>.jpg" alt="<?php echo $product['name'];?>-img">
        </div>
        <h2 class="display-4 mb-3">$<?php echo $product['price']; ?></h2>
        <!-- Reviews -->
        <h3><u>Reviews of Our Products:</u></h2>
        <div id="reviews-carousel" class="carousel slide my-4" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h4>Great Quality!</h3>
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">I enjoy getting a breath of fresh air every now and then!</p>
                        <footer class="blockquote-footer">John Doe,<cite title="Source Title"> Satisfied Customer</cite></footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <h3>Super Refreshing!</h3>
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Rapid Air cleanses my lungs and I feel my stress decreasing!</p>
                        <footer class="blockquote-footer">Jane Doe,<cite title="Source Title"> Satisfied Customer</cite></footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <h3>Easy to Use!</h3>
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">With the 2-in-1 Mask and Bottle, breathing fresh air is easy!</p>
                        <footer class="blockquote-footer">Asmodon,<cite title="Source Title"> Eater of Worlds</cite></footer>
                    </blockquote>
                </div>
            </div>
            <a class="carousel-control-prev d-none d-md-flex" href="#reviews-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next d-none d-md-flex" href="#reviews-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
 

<?php include('include/footer.php'); ?>