<?php
	session_start();
	$title = 'Dimensions | Cotton State Barns';
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
                                        <img src="image/4D9A3098.jpg" class="img-fluid banner-bg-image special" alt="banner-image">
                                    </a>
                                    <div class="full-banner-conten banner-slogan">
                                        <h1 class="text-green">Dimensions</h1>
                                        <p>
                                            Due to D.O.T. regulations our 12', 14', and 16' wide buildings are labeled with nominal values
                                            that are not the exact measurements of the interior or exterior widths (or eave widths) of our barns (eave widths vary by model).
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
                            <img src="image/csb/Diagram widths.gif" class="img-fluid wide-image" alt="banner-image">
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    <div class="col-12 col-md-8">
                        <div class="row gx-5 gy-2 vertical-banner">
                            <div class="col">
                                <div class="full-banner">
                                    <div class="banner-main">
                                        <a class="banner-hover img-hover vertical-banner-image">
                                            <img src="image/4D9A3099.jpg" class="img-fluid" alt="banner-image">
                                        </a>
                                    </div>
                                    <div class="full-banner-conten banner-slogan vertical-slogan">
                                        <h1>Considering a</h1>
                                        <h1 class="text-green">Deluxe Porch?</h1>
                                        <button type="button" class="btn btn-style3 extra-btn-style diagram-btn">SEE THE DIAGRAM</button>
                                    </div>
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