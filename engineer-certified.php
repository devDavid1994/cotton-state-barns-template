<?php
	session_start();
	$title = 'Engineer Certified | Cotton State Barns';
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
                                        <img src="image/4D9A2530.jpg" class="img-fluid banner-bg-image" alt="banner-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    <div class="col-12 col-md-8">
                        <div class="p-5 border bg-white d-content">
                            <div class="title">
                                <div class="row gx-5">
                                    <div class="col-lg-12 col-xl-6">
                                        <h1 class="text-green">Engineer Certified</h1>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 title-image">
                                        <img src="image/csb/sq_badgeicon_4.jpg" class="img-fluid" alt="banner-image" />
                                    </div>
                                </div>
                            </div>


                            <div class="row gx-5">
                                <div class="col description">
                                    Our Standard non-metal barns are engineer-certified, meet IBC standards, and are classified as
                                    Minor Storage Facilites (Occupancy Category 1) that are not intended for any other use (metal barns&nbsp;
                                    are not certified, nor do we guarantee code compliance in evey jurisdiction for any barn). Higher snow
                                    load and wind load packages can be added for an additional cost (see "Options" and/or ask the dealer for details).
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
            // $(".main-wrap").hide();
            // $(".vegamenu-title").click(function() {
            //     $(".main-wrap").slideToggle("fast");
            // });
        </script>
    </body>
</html>