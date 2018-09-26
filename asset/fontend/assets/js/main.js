$(document).ready(function() {
	$(".jobs").mCustomScrollbar();
	$(".events").mCustomScrollbar();
	$(".news").mCustomScrollbar();
	$(".background").mCustomScrollbar();

	/*
	* Gallery Page
	* Modal Gallery
	*/
	$('.pop').click(function(e) {
		e.preventDefault();
		$('.imagepreview').attr('src', $(this).find('img').attr('src'));
		$('#imagemodal').modal('show');   
	});

	$('#data-table').DataTable({
		"bSort": false
	});

	$('#data-table-25').DataTable({
		"bSort": false,
		"iDisplayLength": 25,
		//"bFilter": false,
		"bLengthChange": false,
		"bInfo": false
	});

});