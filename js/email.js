$('document').ready(function(){

	//Setup listener on view button
	$('.brochure-action').on('click', sendBrochureMessage);
	$('#dealerInfoBtn').on('click', sendDealerMessage);

});

function sendBrochureMessage()
{
	//Ensure we have a name and email address filled out
	if(!$("#name").val()) { alert('Please enter your full name.'); return; }
	if(!$("#email").val()) { alert('Please enter your email address.'); return; }
	if(!$("#dealer_id").val()) { alert('Please select a dealership from the top of the page.'); return; }

	//Setup the URL to the email endpoint
	var url = 'https://test.systemavo.com/EmailApi/sendBrochure'
	 //var url = 'https://avo.test/EmailApi/sendBrochure';

	//Get the element that was clicked
	var curElm = $(this);

	//Get the type
	var type = $(curElm).attr('data-type');

	//Setup the form data
	var formData = {
		name: $('#name').val(),
		email: $('#email').val(),
		dealer_id: $('#dealer_id').val()
	};

	//Submit the data to the email api endpoint
	$.ajax({
		type: "POST",
		url: url,
		data: formData ,
		success: function (response) {

			//If the vew catalog button was shown, open a new window to show the catalog or price sheet
			if(type === 'catalog')
			{
				window.open("/downloads/catalog_" + response.brochure_group.toLowerCase() + ".pdf", "_blank");
			}
			else
			{
				window.open("/downloads/price_sheet_" + response.dealer_state.toUpperCase() + ".pdf", "_blank");
			}
		},
		error: function() {

		}
	});
}

function sendDealerMessage()
{
	var formData = $('#dealer-form').serialize();

	var url = 'https://test.systemavo.com/EmailApi/sendDealer'
	//var url = 'https://avo.test/EmailApi/sendDealer';

	$.ajax({
		type: "POST",
		url: url,
		data: formData ,
		success: function () {
			alert('Your message has been successfully sent.');
			$('input').val('');
		},
		error: function() {

		}
	});
}

