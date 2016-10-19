$(window).load(function() {
    $('form').get(0).reset();
});

$(function() {
	$("#file_form").on('change', function(){
	readURL(this);
	});
});

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#image').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}