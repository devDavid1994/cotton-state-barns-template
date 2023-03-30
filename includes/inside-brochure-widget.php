<div>
	<img src="image/logo2.png" class="img-fluid" alt="banner-image">
	<img src="image/brochure.png" class="img-fluid" alt="banner-image" style="width:280px">
</div>
<div class="d-brochure-content">
	<h3>Cotton State Barns</h3>
	<span>Enter your full name and email address to view or download our dealer brochure.</span>
</div>
<form class="brochure-content">
	<input type="text" name="fullName" id="name" placeholder="Your Full Name">
	<input type="text" name="email" id="email" placeholder="Your Email Address">
	<input type="hidden" id="dealer_id" value="<?= !$_SESSION['dealer_info'] ? null :  $_SESSION['dealer_info']->id ?>">
</form>
<button class="btn btn-style3 inside-brochure-btn brochure-action" data-type="catalog">VIEW CATALOG</button>
<button class="btn btn-style3 inside-brochure-btn btn-extra-style brochure-action" data-type="price_sheet">VIEW PRICE SHEET</button>