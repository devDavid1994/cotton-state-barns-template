<?php
	session_start();
	$title = 'Rent To Own | Cotton State Barns';
?>

<!DOCTYPE html>
<html lang="en">
    <head>

		<?php include 'includes/header.php'; ?>
        <link rel="stylesheet" type="text/css" href="css/style6.css">
        <link rel="stylesheet" type="text/css" href="css/responsive3.css">
    </head>
    <body>

        <!-- header start -->
        <?php include 'includes/site-header.php'; ?>
        <!-- header end -->

        <section class="section p-1 p-md-5 first-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="col">
                            <div class="full-banner">
                                <div class="banner-main">
                                    <a href="#" class="banner-hover img-hover">
                                        <img src="image/home4-banner.jpg" class="img-fluid banner-bg-image" alt="banner-image">
                                    </a>
                                    <div class="full-banner-conten banner-slogan">
                                        <h1 class="text-green">RENT-TO-OWN</h1>
                                        <h3>
                                            36, 48, & 60
                                            <p>MONTH CONTRACT OPTIONS</p>
                                        </h3>
                                        <p>
                                            Our Rent-To-Own program allows customers to rent the barns with NO CREDIT CHECK when purchasing is not an option.
                                            There is no credit application to fill out and you are not required to keep the barn.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    <div class="col-12 col-md-8">
                        <div class="p-5 border bg-light d-content">
                            <div class="row gx-5 gy-2">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <image href="image/csb/svg/barn.svg" />
                                    </svg>
                                    <p class="d-title">
                                        OWN THE BARN
                                    </p>
                                    <p class="d-description">
                                        After all the contract obligations are met, the barn is yours to keep.
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <image href="image/csb/svg/credit-card.svg" />
                                    </svg>
                                    <p class="d-title">
                                        NO CREDIT CHECKS
                                    </p>
                                    <p class="d-description">
                                        Low credit score? Not a problem!
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <image href="image/csb/svg/ban.svg" />
                                    </svg>
                                    <p class="d-title">
                                        STOP ANY TIME
                                    </p>
                                    <p class="d-description">
                                        Stop renting at any time without affecting your credit rating.
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <image href="image/csb/svg/fee.svg" />
                                    </svg>
                                    <p class="d-title">
                                        NO PENALTY FEES
                                    </p>
                                    <p class="d-description">
                                        Want to pay off your barn early? No problem! We won't charge you any extra fees.
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <image href="image/csb/svg/coin.svg" />
                                    </svg>
                                    <p class="d-title">
                                        NO MONEY DOWN
                                    </p>
                                    <p class="d-description">
                                        Option allows you to waive the security deposit and purchase a barn on our Rent-To-Own 
                                        contracts without putting any money down. *Not available for all sheds or for all contracts.
                                        See dealer for details.
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <image href="image/csb/svg/salary.svg" />
                                    </svg>
                                    <p class="d-title">
                                        90 DAY SAME AS CASH
                                    </p>
                                    <p class="d-description">
                                        On all Rent-To-Own contracts means if the barn is paid off completely within 90 days of delivery then
                                        there will be no rental fees.
                                    </p>
                                </div>
                            </div>
                            <div class="row gx-5">
                                <div class="col">
                                    <h2 class="text-green">Key points to consider</h2>
                                </div>
                            </div>
                            <div class="row gx-5">
                                <div class="col-12 col-md-6">
                                    <p class="d-title align-left">
                                        90 day same as cash:
                                    </p>
                                    <p class="d-description align-left">
                                        <ul class="a">
                                            <li>Starts the same day as delivery.</li>
                                            <li>Requires monthly payments as normal.</li>
                                            <li>Tax is still required.</li>
                                            <li>Requires all applied fees to be paid off first.</li>
                                            <li>Security deposit is refunded after the barn is paid off and does not apply to the balance.</li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <p class="d-title align-left">
                                        No money down:
                                    </p>
                                    <p class="d-description align-left">
                                        <ul class="a">
                                            <li>Available for on lot barns only.</li>
                                            <li>Is available in 36 month and 48 month contracts.</li>
                                            <li>Limited application on larger barn sizes and some styles.</li>
                                            <li>Security deposit may be required if there are any complications with the initial monthly payments.</li>
                                        </ul>
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
            /*$(".main-wrap").hide();
            $(".vegamenu-title").click(function() {
                $(".main-wrap").slideToggle("fast");
            });*/
        </script>
    </body>
</html>