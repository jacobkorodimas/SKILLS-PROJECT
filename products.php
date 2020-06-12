<?php 
    include("conn/db_connect.php"); 

    $sql = 'SELECT * FROM products';
    $stmt = $pdo->query($sql);
    $products = $stmt->fetchAll();
    $itemnum = count($products);

    // For search
    if(isset($_POST['submit'])){
        $amount = $_POST['amountsearch'];
        $pack = $_POST['packsearch'];
        if($pack != 'any' && $amount != 'any'){
            $sql = 'SELECT * FROM products WHERE (pack LIKE ? OR pack LIKE ?) AND size LIKE ? ';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$pack, 's'.$pack, $amount]);
            $products = $stmt->fetchAll();
            $itemnum = count($products);
        } else if($amount == 'any' && $pack != 'any'){
            $sql = 'SELECT * FROM products WHERE (pack LIKE ? OR pack LIKE ?)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$pack, 's'.$pack]);
            $products = $stmt->fetchAll();
            $itemnum = count($products);
        } else if ($amount != 'any' && $pack == 'any'){
            $sql = 'SELECT * FROM products WHERE size LIKE ?';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$amount]);
            $products = $stmt->fetchAll();
            $itemnum = count($products);
        }
    }
?>


<?php include('include/header.php'); ?>

<!-- Yellow Intro Stuff -->
    <header class="py-3 px-5 text-center text-dark bg-warning">
        <h1 class="display-4 mb-3">No CFCs, no propellants.</h1>
        <h3 class="display-5 mb-3">Our specially designed bottle allows us to capture and retain the freshness of the contents inside.</h2>
    </header>
    <div class="container text-center bg-warning p-3">
        <p class="lead"> Accompanying each of our bottles, we have paired an innovative spray cap, or our famous 2 in 1 built in mask for precision delivery, 
            allowing for maximum enjoyment of our products. Our product is good to the last drop – there will be no waste.
        </p>
        
        <!-- Products intro images -->
        <div class="row">
            <!-- Mask -->
            <div class="col mb-3 mb-md-0">
                <div id="maskcard" class="card align-items-center text-dark p-3" style="width: 18rem; height: 100%;">
                    <img src="img/spraymask.jpg" class="card-img-top w-75" alt="spray-mask-image">
                    <div class="card-title"> 2-IN-1 CAP & MASK </div>
                    <div class="card-body"> Check out our innovative 2 in 1 cap and mask. It allows for maximum portability, but also enjoyment of our fresh air at the same time!</div>
                </div>
            </div>
            <!-- Recycleable -->
            <div class="col mb-3 mb-md-0">
                <div id="maskcard" class="card align-items-center text-dark p-3 pt-4" style="width: 18rem; height:100%">
                    <img src="img/recycle.png" class="card-img-top w-75" alt="recycle-image">
                    <div class="card-title">RECYCLABLE</div>
                    <div class="card-body">All RapidAir products are recyclable!</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products MD+ Screen Section -->
    <div class="d-none d-md-block container py-4">
        <div class="row">
            <!-- Search Section -->
            <div class="col-3 text-center text-dark">
                <h2 class="mb-3">Search By:</h2>
                <form action="products.php" method="POST">
                    <label>Pack:</label>
                    <select name="packsearch" class="my-3">
                        <option value="any" selected="true">Any</option>
                        <option value="single">One Bottle</option>
                        <option value="twin">Twin Packs</option>
                        <option value="tri">Tri Packs</option>
                        <option value="five">Five Packs</option>
                        <option value="six">Six Packs</option>
                        <option value="ten">Ten Packs</option>
                    </select>
                    <br>
                    <label>Amount:</label>
                    <select name="amountsearch"  class="my-3">
                        <option value="any" selected="true">Any</option>
                        <option value="3.0">3L</option>
                        <option value="4.5">4.5L</option>
                        <option value="10.0">10L</option>
                    </select>
                    <br>
                    <input class="btn btn-warning" type="submit" name = "submit" value = "SEARCH">
                </form>
            </div>
            <!-- Product Display -->
            <div class="col-9 bg-dark text-light">
                <p class="lead my-3"><?php echo $itemnum;?> results.</p>
                <hr class="bg-light">
                <div class="row d-none d-md-flex">
                    <?php foreach ($products as $product): ?>
                        <div class="col-4">
                            <div class="card align-items-center text-center text-dark p-2 my-3">
                                <img src="img/<?php echo $product['pack'];?>.jpg" class="card-img-top" alt="<?php echo $product['name'];?>-img" style="width: 75%;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                    <p class="card-text">$<?php echo $product['price']; ?></p>
                                    <a href='productinfo.php?id=<?php echo $product['id']; ?>'' class="btn btn-primary">Details</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Products XS-Md Screen Section -->
    <div class="d-block d-md-none container py-4">

            <!-- Search Section -->
            <div class="bg-light text-center text-dark">
                <h2 class="mb-3">Search By:</h2>
                <form action="products.php" method="POST">
                    <label>Pack:</label>
                    <select name="packsearch" class="my-3">
                        <option value="any" selected="true">Any</option>
                        <option value="single">One Bottle</option>
                        <option value="twin">Twin Packs</option>
                        <option value="tri">Tri Packs</option>
                        <option value="five">Five Packs</option>
                        <option value="six">Six Packs</option>
                        <option value="ten">Ten Packs</option>
                    </select>
                    <br>
                    <label>Amount:</label>
                    <select name="amountsearch"  class="my-3">
                        <option value="any" selected="true">Any</option>
                        <option value="3.0">3L</option>
                        <option value="4.5">4.5L</option>
                        <option value="10.0">10L</option>
                    </select>
                    <br>
                    <input class="btn btn-warning" type="submit" name = "submit" value = "SEARCH">
                </form>
            <!-- Product Display -->
            <div class="bg-light text-dark">
                <p class="lead my-3"><?php echo $itemnum;?> results.</p>
                <hr class="bg-light">
                <div class="row d-block d-md-none">
                    <?php foreach ($products as $product): ?>
                        <div class="card align-items-center text-center text-dark p-2 my-3">
                            <img src="img/<?php echo $product['pack'];?>.jpg" class="card-img-top" alt="<?php echo $product['name'];?>-img" style="width: 50%;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                <p class="card-text">$<?php echo $product['price']; ?></p>
                                <a href="productinfo.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    
        
        
<?php include('include/footer.php'); ?>