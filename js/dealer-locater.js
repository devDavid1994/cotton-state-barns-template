//Set which site should be used to pull data from
//const site = 'https://test.systemavo.com';
const site = 'https://test.systemavo.com';

function getClosestDealer(position)
{
	var url = site + '/api/get_closest_dealership/';
	var lat = position.coords.latitude;
	var lng = position.coords.longitude;
//           lat = 39.772401; lng = -89.63333;
	$.get(url + lat + '/' + lng + '/1', function(res, status){
		if (status == 'success' && res.success) {
			$('#dealer_info').css('display', 'block');
			$('#dealer_name').text(res.data.name + ', ' + res.data.state);
			$('#dealer_addr').text(res.data.address + ' ' + res.data.city  + ' ' + res.data.state);
			$('#dealer_phone').text(res.data.phone);
		} else {
			$('#dealer_name').text('No dealer found.');
			$('#dealer_info').css('display', 'none');
		}
	});
}

$(function(){
	$('#openLocationChange').click(function() {
		$('#changelocalModal').modal('show');
	});

	$('#changeLocationBnt').click(function(){
		var zip =  $('#zipcode').val();

		var url = site + '/api/dealershiplocater/';

		if (zip != '') {
			$.get(url + zip + '/50/1', function(res, status){

				console.log(res);

				if (status == 'success' && res.success) {
					$('#dealer_info').css('display', 'block');
					$('#dealer_name').text(res.data[0].name + ', ' + res.data[0].state);
					$('#dealer_addr').text(res.data[0].address + ' ' + res.data[0].city  + ' ' + res.data[0].state);
					$('#dealer_phone').text(res.data[0].phone);
				} else {
					$('#dealer_name').text('No dealer found.');
					$('#dealer_info').css('display', 'none');
				}

				$('#changelocalModal').modal('hide');
			});
		}
	});
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(getClosestDealer);
	} else {
		alert("Geolocation is not supported by this browser.");
	}
});