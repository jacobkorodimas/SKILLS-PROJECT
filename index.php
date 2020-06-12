<?php 
    include('include/header.php');
?>

    <!-- Showcase -->
    <div class="jumbotron jumbotron-fluid text-center text-light d-flex justify-content-center align-items-center">
        <div>
            <h1 class="display-2 mb-3">Breathe Cleaner</h1>
            <p class="lead mb-5">We are commited delivering the best air possible.</p>
            <p><a href="products.php" class="btn btn-primary btn-lg">View Products</a></p>
        </div>
    </div>

    <!-- BELOW FOLD -->
    <!-- Bottling Air info -->
    <div class="container">
        <!-- capturing fresh air -->
        <div id="captureair" class="py-3 px-5">
            <h2 class="text-center display-5">How do we capture Fresh Air?</h2>
            <p>Wonder how we get fresh air from the mountains and into your hands?
                It’s quite the process, and it involves state of the art compression and delivery systems to ensure only
                the highest quality air gets to your lungs. Being the leader in a revolutionary product is difficult,
                but we make it look as easy as 1, 2, 3, 4, 5!
            </p>
        </div>
        <hr>
        <!-- bottling locations -->
        <div class="container mb-5">
            <h2 class="text-center display-5" style="font-variant: small-caps;">bottling locations</h2>
            <p>What’s on the top of your mind when you think about glacier mountains and sprawling green forest? For most, it’s
                a striking view, an untouched landscape, and deep breaths of pure, natural air. That’s what we
                pictured when we started thinking about serving the best air to people around the world.
            </p>
            <p>The Rocky Mountains of Canada are a protected UNESCO World Heritage Site. Here is where RapidAir
                captures and bottles some the highest quality air in the world. We want our customers to experience
                breathing the way it was intended. Free of city pollution, fragrances and waste; our Banff and Lake
                Louise lines of clean air are unmatchable in quality.
            </p>
            <div class="row d-block d-md-flex">
                <!-- BANFF -->
                <div class="col">
                    <button class="btn btn-primary d-flex mx-auto mb-2" type="button" data-toggle="collapse" data-target="#banff-collapse" aria-expanded="false" aria-controls="banff-collapse">
                        Banff Air</button>
                    <div class="collapse mt-2 mb-5" id="banff-collapse">
                        <div class="card card-body"> 
                            The town of Banff is one of the most iconic areas in the entire Rocky Mountains. Just steps
                            from glacier white peaks, delicate streams and amazing plants and animals. In the heart of the
                            Rocky Mountains of Canada lies the small town of Banff. Filled with quaint shops and remarkable
                            views, it's only a small trip off the beaten path and you find yourself surrounded by impressive
                            nature. We chose to bottle air from Banff because it's so memorable. People who visit this place
                            instantly are drawn into the purity of the nature surrounding them. You breathe deeper and
                            begin feeling healthier. Banff is more than just incredible mountain air, it's an emotional
                            experience that we wanted to share with everyone.
                        </div>
                    </div>
                </div>

                <!-- LAKE LOUISE -->
                <div class="col">
                    <button class="btn btn-primary d-flex mx-auto mb-2" type="button" data-toggle="collapse" data-target="#louise-collapse" aria-expanded="false" aria-controls="louise-collapse">
                        Lake Louise Air</button>
                    <div class="collapse mt-2 mb-0" id="louise-collapse">
                        <div class="card card-body"> 
                            For nature lovers, Lake Louise is a favourite destination. A picture perfect emerald lake is
                            crowned by white-tipped mountain ranges. The giant blue lake instantly pulls you in as it
                            contrasts with lush green trees and white tipped Rocky Mountains. In the winter, it becomes
                            a paradise of powdery white snow.
                            It’s here that the mighty Rocky Mountains are defined, and it’s here that we bottle nature’s
                            best air. The cool, humid atmosphere makes you feel alive, and that’s what we want our
                            customers to feel.
                            Lake Louise was a clear choice for us to bottle our Rocky Mountain air from. It's clean and
                            fresh, but it also makes you feel on top of the world when you're surrounded by a crown of
                            mountain tops. We want our customers to breathe in a sense of wonder along with a feeling of
                            healthy air.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits -->
    <div class="container">
        <!-- Benefits info -->
        <div class="card p-3 text-center">
            <h2 class="card-title mt-4">BENEFITS</h2>
            <p class="lead">Our senses can tell the difference between poor air and quality breathing.</p>
            <p class="card-body">Just like bottled water, premium air is a growing industry because people are noticing
                the difference. Now with RapidAir, anyone can access this high quality, convenient and affordable luxury experience.
                Our highest priority is the health and well being of families. Fresh air plays a vital role in the
                physical and emotional wellness of people at all ages, and every role in the household can benefit from breathing
                cleaner. The struggle has been that clean air hasn’t been easily affordable or accessible. RapidAir exists to
                support the health of families in a convenient and cost-effective way. We offer pure mountain air in an
                easy to use can that offers dozens of clean breaths for use by your entire family.
            </p>
        </div>
        
        <!-- Carousel -->
        <div id="benefits-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#benefits-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#benefits-carousel" data-slide-to="1"></li>
                <li data-target="#benefits-carousel" data-slide-to="2"></li>
                <li data-target="#benefits-carousel" data-slide-to="3"></li>
                <li data-target="#benefits-carousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <!-- Work -->
                <div class="carousel-item active">
                    <img src="img/work.jpg" class="d-block w-100" alt="work-image">
                    <div class="carousel-caption">
                        <h5>Rapid for Work</h5>
                        <p class="d-none d-md-block">There’s no vacation from being a leader and provider for your
                            family. Late nights and hard work are a way of life, so what are you doing to stay healthy?
                            The revitalization of fresh air is remarkably effective.
                        </p>
                    </div>
                </div>
                <!-- Students -->
                <div class="carousel-item">
                    <img src="img/school2.webp" class="d-block w-100" alt="student-image">
                    <div class="carousel-caption">
                        <h5>Rapid for Students</h5>
                        <p class="d-none d-md-block">Excelling at studies requires a focused mind and the energy to
                            complete your studies. But the stress of timelines and commitments quickly drains your body,
                            and performance suffers.
                        </p>
                    </div>
                </div>
                <!-- Mothers -->
                <div class="carousel-item">
                    <img src="img/mother.jpeg" class="d-block w-100" alt="mother-image">
                    <div class="carousel-caption">
                        <h5>Rapid for Mothers</h5>
                        <p class="d-none d-md-block">Mothers and pregnant women understand that chemicals can be
                            extremely harmful to your body and your children’s. Still, you need a way to keep awake and
                            command the household in a natural way.
                        </p>
                    </div>
                </div>
                <!-- Children -->
                <div class="carousel-item">
                    <img src="img/children.jpg" class="d-block w-100" alt="child-image">
                    <div class="carousel-caption">
                        <h5>Rapid for Children</h5>
                        <p class="d-none d-md-block">Developing bodies need ideal ingredients to grow optimally. Clean,
                            healthy lungs are what you want for active children to reach their potential.
                        </p>
                    </div>
                </div>
                <!-- Grandparents -->
                <div class="carousel-item">
                    <img src="img/grandparents.jpg" class="d-block w-100" alt="grandparent-image">
                    <div class="carousel-caption">
                        <h5>Rapid for Grandparents</h5>
                        <p class="d-none d-md-block">Having multiple generations in the household is a blessing. As we
                            age, our body needs the right materials to keep it moving. Simple, easy breaths of RapidAir
                            are a great way to have your grandparents feeling better and continue being a vital part of
                            your family.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Carousel Previous/Next Buttons -->
            <a class="carousel-control-prev" href="#benefits-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon d-none d-md-block" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#benefits-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon d-none d-md-block" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

<?php
    include('include/footer.php');
?>