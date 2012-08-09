$(function() {
	//InfractionEditForm
	$("#InfractionEditForm").submit(function(){
		return validateRequiredFields();
	});
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