
$(document).ready(function()
{
	// Call the main function
var url=$("#baseurl").val();
	new vpb_multiple_file_uploader
	({
		vpb_form_id: "vasplus_form_id", // Form ID
		autoSubmit: true,

		vpb_server_url: url+"fancyupload/do_upload" // PHP file for uploading the browsed files
	});
});
