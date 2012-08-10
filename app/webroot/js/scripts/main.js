// relative app path
var site_root = '/compambiental';

$(function() {
	// Ajax callbacks
	$(document).ajaxStart(function(){
    	$("#loading").css('display','block');
	}).ajaxStop(function(){
	    $("#loading").hide();
	});

	$('#InfractorNumeroDocumento').blur(function() {
  		searchInfractor();
	});

	$('#InfractorTipoDocumento').change(function() {
  		searchInfractor();
	});
});

/**
* Ajax search infractor
*/
function searchInfractor() {
	$.ajax({
        	url: site_root+"/infractors/get_infractors/",
            dataType: "json",
            type: "POST",
            data: {numero_documento: $('#InfractorNumeroDocumento').val(),tipo_persona: $('#InfractorTipoDocumento').val()},
            success: function(data) {
            	if(data[0]) {
	            	showInfractorData(data[0].Infractor);
	            } else {
	            	resetInfractorData();
	            }
            },
            error: function(jqXHR, textStatus, errorThrown) {
            	console.log('error ajax: ' + jqXHR + ';' + textStatus + ';' + errorThrown);
            	resetInfractorData();
            }
        });
}

/**
* Load at Comparendo/form input´s infractor data
*/
function showInfractorData(infractor) {
	if(infractor) {
		$("#InfractorNombre").val(infractor.nombre_razon_social);
		$("#InfractorDireccion").val(infractor.direccion);
		$("#InfractorTelefono").val(infractor.telefono);
		$("#InfractorEmail").val(infractor.email);
		disableInfractorInputs(true);
	}
}

/**
* Reset at Comparendo/form input´s infractor data
*/
function resetInfractorData() {
	disableInfractorInputs(false);
	$("#InfractorNombre").val("");
	$("#InfractorDireccion").val("");
	$("#InfractorTelefono").val("");
	$("#InfractorEmail").val("");
}

/**
* Enable / disable Infractor input´s
*/
function disableInfractorInputs(enable) {
	$("#InfractorNombre").prop('disabled', enable);
	$("#InfractorDireccion").prop('disabled', enable);
	$("#InfractorTelefono").prop('disabled', enable);
	$("#InfractorEmail").prop('disabled', enable);
}

/**
* Validate required fields
**/
function validateRequiredFields() {
	('.valid-required').each(function(index) {
		$(this).css('border-color: #B94A48;');
		return false;
	});
}