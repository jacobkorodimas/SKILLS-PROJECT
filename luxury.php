<?php 
    include('conn/db_connect.php');
    $sql = 'SELECT * FROM cities';
    $stmt = $pdo->query($sql);
    $cities = $stmt->fetchAll();

?>

<?php include('include/header.php'); ?>
    <header class="text-center bg-warning p-3">
        <h1 class="display-4 mb-5">Rapid Air is expanding into offering the top 100 cities of the world air.</h1>
        <h2 class="display-5">WHAT WE DO</h2>
        <p class="lead">
            We capture the air using our patented air capturing system and then we filter it so its almost as clean as our Banff and Lake Louise Air. 
            We then bottle it and ship it right to you!
        </p>
    </header>
    <hr>
    <div class="container">
        <p class="lead text-center">Pick a City, then choose your product package!</p>
        <div class="row">
            <?php foreach($cities as $city): ?>
                <!-- Larger Screens -->
                <div class="col-3 d-none d-sm-block">
                    <a class="badge badge-light" href="luxuryinfo.php?id=<?php echo $city['id'];?>"><?php echo $city['city_name'];?></a>
                </div>
                <!-- Smaller Screens -->
                <div class="col-12 text-center d-block d-sm-none">
                    <a class="badge badge-light" href="luxuryinfo.php?id=<?php echo $city['id'];?>"><?php echo $city['city_name'];?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
<?php include('include/footer.php'); ?>