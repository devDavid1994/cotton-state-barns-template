<?php
	session_start();
	$title = 'About Us | Cotton State Barns';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php include 'includes/header.php'; ?>
		<!-- style -->
		<link rel="stylesheet" type="text/css" href="css/style6.css">
		<link rel="stylesheet" type="text/css" href="css/responsive3.css">
    </head>
    <body>
        
        <!-- header start -->
        <?php include 'includes/site-header.php'; ?>
        <!-- header end -->

        <section class="section p-5 first-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="col">
                            <div class="full-banner">
                                <div class="banner-main">
                                    <a href="#" class="banner-hover img-hover">
                                        <img src="image/home3-banner.jpg" class="img-fluid banner-bg-image" alt="banner-image">
                                    </a>
                                    <div class="full-banner-conten banner-slogan">
                                        <h1>The Difference is <h1 class="text-green">Our Quality!</h1></h1>
                                        <p>
                                            At Cotton State Barns we remain dedicated to the old-fashioned precepts of HONESTY, INTEGRITY, WORK ETHIC,
                                            and QUALITY. These time-proven values are the bedrock of our company, and we strive to maintain them in 
                                            everything we do!
                                        </p>
                                        <p>
                                            From manufacturing to delivery, we want the craftsmanship and quality of our products to exceed every reasonable 
                                            expectation, and the professionalism and courtesy of our service to be second to none!
                                        </p>
                                        <p>
                                            Why set such high standards? Because it is the only way we can offer the best, most affordable storage solutions to
                                            our customers, and the only way we can deserve their trust!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    <div class="col-12">
                        <div class="col bg-white sq-badgeicon">
                            <img src="image/csb/sq_badgeicon_1.jpg" class="img-fluid" alt="banner-image">
                            <img src="image/csb/sq_badgeicon_2.jpg" class="img-fluid" alt="banner-image">
                            <img src="image/csb/sq_badgeicon_3.jpg" class="img-fluid" alt="banner-image">
                            <img src="image/csb/sq_badgeicon_4.jpg" class="img-fluid" alt="banner-image">
                            <img src="image/csb/sq_badgeicon_5.jpg" class="img-fluid" alt="banner-image">
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    <div class="col-12 col-md-8">
                        <div class="p-5 border bg-light d-content">
                            <div class="title1">
                                <h1 class="text-green">AFTER ALL, HIGH-QUALITY, LONG-LASTING STORAGE BUILDINGS ARE WHAT WE DO, AND WE INSIST ON DOING THEM RIGHT!</h1>
                            </div>

                            <div class="row gx-5">
                                <div class="col d-title">
                                    <p>
                                        <i class="fa fa-check-square-o"></i>
                                        We Ensure that All Exposed Natural Wood is Pressure-Treated (including trim, ground skids, floor joists, and natural wood siding).
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>We Build All Our Roofs with 29 Gauge Metal or 30-Year Dimensional Shingles.
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>
                                        We Insist Our Floor Joists be Constructed of Sturdy 2"x6" Lumber Mounted on 4"x6" Notched Ground Skids Laid Out on 16" Centers (12"
                                        centers are standard in all garage models).
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>We Offer Premium Sidings: LP Smartside, 29 Gauge Metal, or T1-11
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>We Construct Durable Floorings: 5/8" Pressure-Treated Plywood or 5/8" Tongue-n-Groove Smooth Finish
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>We Install Diamond-Plated Thresholds on Most Models.
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i> We Use Only Top-Quality Paints, Sealants, and Urethane.
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>We Use No-Rust Galvanized Ring-Shanked Nails.
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>We Install Hurricane Straps in Every Barn.
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>
                                        We Use Engineer Approved Metal Truss Connector Plates for Stronger, More Reliable Trusses (also used in our wood doors).
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>We Include Rubber Door Stops (to prevent damage).
                                    </p>
                                    <p>
                                        <i class="fa fa-check-square-o"></i>We Provide Locks and Keys.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="p-3 border bg-light d-content-right">
                           <?php include 'includes/inside-brochure-widget.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php include 'includes/footer.php'; ?>

        <script>
            $(".main-wrap").hide();
            $(".vegamenu-title").click(function() {
                $(".main-wrap").slideToggle("fast");
            });
        </script>
    </body>
</html>