<?php 

    include('conn/db_connect.php');

    $feedbackMessage = '';
    $errors = array('email' => '', 'fullname' => '', 'message' => '');

    if(isset($_POST['submit'])){
        // Check feedback
        if(empty($_POST['feedback'])){
            $errors['message'] = 'Please write a message before sending!';
        }
        //Check Email
        if(empty($_POST['email'])){
            $errors['email'] = 'Please include your email.';
        } else {
            $email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
        }
        //Check Name
        if(empty($_POST['fullname'])){
			$errors['fullname'] = 'A full name is required';
		} else{
			$fullname = $_POST['fullname'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $fullname)){
				$errors['fullname'] = 'Names must be letters and spaces only.';
			}
        }
        // Insert into table
        if(!array_filter($errors)){
            $sql = 'INSERT INTO feedback (inputtext, fullname, email) VALUES (?, ?, ?)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$_POST['feedback'], $_POST['fullname'], $_POST['email']]);
            $feedbackMessage = 'Thank you for your feedback!';
        }
    }
?>




<?php include('include/header.php'); ?>
    <header>
        <h2 class="display-2 text-center mb-3">Contact Us</h2>
        <hr>
        <h2 class="display-4 text-center my-5">RapidAir has 4 locations with full-service stores.</h2>
    </header>
    <!-- Locations -->
    <div class="container">
        <div id="locations" class="row">
            <!-- Calgary -->
            <div class="col-12 col-md-6 my-3">
                <div class="card"">
                    <img src="img/calgary.jpg" class="card-img-top" alt="downtown-calgary">
                    <div class="card-body">
                        <h5 class="card-title">Calgary</h5>
                        <a class="stretched-link" href="https://www.calgary.ca/SitePages/cocis/wmp/mapping-framework/map/cocis-map.htm#9c1657_8dee3f/12" target="_blank"></a>
                        <p class="card-text">Our downtown Calgary store is located on the Bow River, steps away from restaurants, shops & the downtown core.</p>
                        <p class="card-text text-center text-muted">Eau Claire <br> Calgary, AB</p>
                    </div>
                </div>
            </div>
            <!-- Edmonton -->
            <div class="col-12 col-md-6 my-3">
                <div class="card"">
                    <img src="img/edmonton.jpg" class="card-img-top" alt="downtown-edmonton">
                    <div class="card-body">
                        <h5 class="card-title">Edmonton</h5>
                        <a class="stretched-link" href="https://maps.edmonton.ca/map.aspx" target="_blank"></a>
                        <p class="card-text">Located near the river valley, our store is steps from the parliament buildings & downtown core.</p>
                        <p class="card-text text-center text-muted">Oxbridge Place<br> Edmonton, AB</p>
                    </div>
                </div>
            </div>
            <!-- Leth -->
            <div class="col-12 col-md-6 my-3">
                <div class="card"">
                    <img src="img/lethbridge.jpg" class="card-img-top" alt="downtown-lethbridge">
                    <div class="card-body">
                        <h5 class="card-title">Lethbridge</h5>
                        <a class="stretched-link" href="https://gis.lethbridge.ca/lethexplorer/" target="_blank"></a>
                        <p class="card-text">Situated in the mall, we are only a minutes walk from downtown Lethbridge.</p>
                        <p class="card-text text-center text-muted">Park Place Mall<br> Lethbridge, AB</p>
                    </div>
                </div>
            </div>
            <!-- Fort Mac -->
            <div class="col-12 col-md-6 my-3">
                <div class="card"">
                    <img src="img/fortmac.webp" class="card-img-top" alt="downtown-fort-mac">
                    <div class="card-body">
                        <h5 class="card-title">Fort McMurray</h5>
                        <a class="stretched-link" href="https://satellites.pro/Fort_McMurray_map#56.724502,-111.375790,14" target="_blank"></a>
                        <p class="card-text">Our Fort McMurray store is right downtown.</p>
                        <p class="card-text text-center text-muted">Peter Pond Mall<br> Fort McMurray, AB</p>
                    </div>
                </div>
            </div>
        </div>   

        <!-- Contact Form -->
        <h2 class="display-5 text-center my-3">GET IN TOUCH!</h2>
        <p class="lead">
            Bottling perfection out in the wilderness is a painstaking and lengthy process, and we'd love to hear from you!
            Please use the form to send us your message or ideas. Or simply pop in and say, hi!
        </p>

        <form class="text-center"action="contact.php" method="POST">
            <!-- Email -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input name="email" type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Email error -->
            <p class="text-danger"p><?php echo $errors['email']; ?></p>
            <!-- Name -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                </div>
                <input name="fullname" type="text" class="form-control" placeholder="Your Full Name" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Name error -->
            <p class="text-danger"><?php echo $errors['fullname']; ?></p>
            <!-- Message -->
            <div class="input-group">
                <textarea name="feedback" class="form-control" placeholder="Write us a message!" aria-label="With textarea"></textarea>
            </div>
            <!-- Message error -->
            <p class="text-danger"><?php echo $errors['message']; ?></p>
            <!-- Feedback good -->
            <p class="lead text-success"><?php echo $feedbackMessage; ?></p>
            <input class="btn btn-secondary" type="submit" name = "submit" value = "SEND">
        </form>
        <p class="d-block text-center text-muted mt-5">
            22 1139 AVE NW <br>
            EDMONTON AB T5M 2N0 <br>
            info@rapidair.com <br>
            780.302.0635
        </p>
    </div>


<?php include('include/footer.php'); ?>