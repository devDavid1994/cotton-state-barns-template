//Set which site should be used to pull data from
//const site = 'https://test.systemavo.com';
const site = 'https://test.systemavo.com';

$('document').ready(function(){

	$('#openLocationChange').click(function() {
		$('#changelocalModal').modal('show');
	});

	$('#changeLocationBnt').click(changeLocation);

	if (navigator.geolocation && !dealerInfo) {
		navigator.geolocation.getCurrentPosition(getClosestDealer);
	}
});

function changeLocation()
{
	var zip =  $('#zipcode').val();

	if(!zip) { alert('Please enter a zipcode.'); return; }

	$.ajax({
		type: "POST",
		url: '/includes/change-dealership.php',
		data: { zip: zip },
		success: function (res, status) {

			console.log(res);

			if (status == 'success' && res.success) {
				$('#dealer_info').removeClass('hide');
				$('#dealer_name').text(res.data[0].name + ', ' + res.data[0].state);
				$('#dealer_addr').text(res.data[0].address + ' ' + res.data[0].city  + ' ' + res.data[0].state);
				$('#dealer_phone').text(res.data[0].phone);
				$('#dealer_id').val(data[0].id);
			} else {
				$('#dealer_name').text('No dealer found.');
				$('#dealer_info').removeClass('hide');
			}

			$('#changelocalModal').modal('hide');
		},
		error: function() {

		}
	});




	/*if (zip != '') {
		$.get(url + zip + '/50/1', function(res, status){

			if (status == 'success' && res.success) {
				$('#dealer_info').removeClass('hide');
				$('#dealer_name').text(res.data[0].name + ', ' + res.data[0].state);
				$('#dealer_addr').text(res.data[0].address + ' ' + res.data[0].city  + ' ' + res.data[0].state);
				$('#dealer_phone').text(res.data[0].phone);
			} else {
				$('#dealer_name').text('No dealer found.');
				$('#dealer_info').removeClass('hide');
			}

			$('#changelocalModal').modal('hide');
		});
	}*/
}

function getClosestDealer(position) {

	//Only load if the dealerInfo global is null
	if(!dealerInfo)
	{
		// var url = site + '/api/get_closest_dealership/';
		var lat = position.coords.latitude;
		var lng = position.coords.longitude;

		$.ajax({
			type: "POST",
			url: '/includes/load-closest-dealer.php',
			data: {lat: lat, lng: lng},
			success: function (res, status) {

				if (status === 'success' && res.success) {
					$('#dealer_info').css('display', 'block');
					$('#dealer_name').text(res.data.name + ', ' + res.data.state);
					$('#dealer_addr').text(res.data.address + ' ' + res.data.city + ' ' + res.data.state);
					$('#dealer_phone').text(res.data.phone);
					$('#dealer_id').val(res.data.id);
				} else {
					$('#dealer_name').text('No dealer found.');
					$('#dealer_info').css('display', 'none');
				}
			},
			error: function () {

			}
		});
	}
}

function setDealerInfo()
{

}

