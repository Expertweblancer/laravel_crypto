$(document).ready(function(){
	$('#regdiv').hide();
	$('#jquery-bootstrap-toggle').change(function(){
		if ($(this).prop("checked")==true) {
			$('#logindiv').show();
			$('#regdiv').hide();
		}
		else {
			$('#logindiv').hide();
			$('#regdiv').show();
		}
	});
})

function validate_contact(){
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var subject = $("#subject").val();
	var message = $("#message").val();
 

	if (name == "" || email == "" || phone == ""  || subject == "" || message == "" ) {

		if (name == "") {
			$("#error_name").show();
		}
		else {
			$("#error_name").hide();
		}
		if (email == "") {
			$("#error_email").show();
		}
		else {
			$("#error_email").hide();
		}
		if (phone == "") {
			$("#error_phone").show();
		}
		else {
			$("#error_phone").hide();
		}
		if (subject == "") {
			$("#error_subject").show();
		}
		else {
			$("#error_subject").hide();
		}
		if (message == "") {
			$("#error_message").show();
		}
		else {
			$("#error_message").hide();
		}
		 

		return false;
	}
	else {
		return true;
	}
}

function blank_me(id) {

	var value = $("#" + id).val();

	var error_id = "error_" + id;

	if (value == "") {
		$("#" + error_id).show();
	}
	else {
		$("#" + error_id).hide();
	}
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});