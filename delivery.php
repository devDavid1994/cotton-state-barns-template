<?php
	session_start();
	$title = 'Delivery | Cotton State Barns';
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
										<img src="image/4D9A3097.jpeg" class="img-fluid banner-bg-image" alt="banner-image" style="width: 100%;">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row gx-5 gy-5">
					<div class="col-12 col-md-8">
						<div class="p-5 border bg-light d-content">
							<div class="title">
								<img src="image/banner-2.png" class="img-fluid float-right" alt="banner-image">
								<h1><span class="text-green">Free</span> Delivery and Set-up!</h1>
							</div>

							<div class="row gx-5">
								<div class="col description">
									We offer free delivery and set-up within a 50-mile radius of your dealer. No ground
									prep is necessary if site is no more than 3' out of level in any direction. Wooden
									leveling blocks will be provided free-of-change to level your building provided your
									site is no more than 1' out of level in any direction (customer provided concrete blocks
									must be used if more than 1' out of level in any direction). All sites must be accessible
									to trucks, trailers, and set-up equipment, and RTO sites cannot require crossing
									adjacent properties for access.
								</div>
							</div>

							<div class="row gx-5">
								<div class="col-xl-8 col-lg-12 description">
									All necessary permits(and/or legal requirements of any kind) regarding any aspect of purchasing
									or renting a Cotton State barn are the sole responsibility of the customer, as well as all
									determinations regarding ground conditions and site suitability. We are not - nor are our affiliates - responsible
									for any above ground or underground damages which may result from a delivery attempt, nor are we&nbsp;
									responsible for removing obstacles(such as fences tree limbs, etc.).
								</div>
								<div class="col-xl-4 col-lg-12" class="banner-image" style="text-align: center;">
									<img src="image/banner-1.png" alt="banner-image" class="banner-image1 img-reversal">
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