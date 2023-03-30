<?php
	session_start();
	$title = 'Become A Dealer | Cotton State Barns';
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

        <section class="section p-5 first-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="col">
                            <div class="full-banner">
                                <div class="banner-main">
                                    <a href="#" class="banner-hover img-hover">
                                        <img src="image/csb/BARNFINAL.jpg" class="img-fluid banner-bg-image" alt="banner-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    <div class="col-12 col-md-8">
                        <div class="p-5 border bg-light d-content">
                            <div class="title1">
                                <h1>Are you interested in becoming an authorized&nbsp;<span class="text-green">Cotton State Barns&nbsp;</span>dealer</h1>
                            </div>

                            <div class="row gx-5">
                                <div class="col description">
                                    If so, please complete the Dealer Inquiry Questionnaire form to help us learn more about your business location.
                                </div>
                            </div>
                            
                            <form class="inquiry-form">
                                <div class="row gx-1">
                                    <div class="col">
                                        <input type="text" name="firstName" placeholder="First Name">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="lastName" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row gx-1">
                                    <div class="col">
                                        <input type="text" name="companyName" placeholder="Company Name">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="streetAddress" placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="row gx-1">
                                    <div class="col">
                                        <input type="text" name="addressLine" placeholder="Address Line">
                                    </div>
                                </div>
                                <div class="row gx-1">
                                    <div class="col">
                                        <input type="text" name="city" placeholder="City">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="state" placeholder="State">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="zip" placeholder="ZIP">
                                    </div>
                                </div>
                                <div class="row gx-1">
                                    <div class="col">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row gx-1">
                                    <div class="col">
                                        <input type="text" name="addInformation" placeholder="Additonal Information">
                                    </div>
                                </div>
                                <div class="row gx-1">
                                    <div class="col">
                                        <input type="submit" name="submit" class="btn btn-style3" value="SUBMIT" />
                                    </div>
                                </div>
                            </form>
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