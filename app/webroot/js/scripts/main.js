$(function() {
	//InfractionEditForm
	/*$("#InfractionEditForm").submit(function(){
		return validateRequiredFields();
	});*/
	/*$('.spinner').spinner({
			step: 0.5,
			numberFormat: "n"
		});*/
});

/**
* Validate required fields
**/
function validateRequiredFields() {
	('.valid-required').each(function(index) {
		$(this).css('border-color: #B94A48;');
		return false;
	});
}