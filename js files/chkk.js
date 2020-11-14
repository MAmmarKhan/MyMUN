$(document).ready(function(){
	$('form.ajax').on('submit',function() {
		var name = $("#f-name").val();
		var institue = $("#f-institue").val();
		var email = $("#f-email").val();
		var nameC = false;
		var emailC = false;
		if ((name.length > 3)&&(name.length < 20)) {
			if ((name.indexOf('0') == -1)&&(name.indexOf('1') == -1)&&(name.indexOf('2') == -1)&&(name.indexOf('3') == -1)) {
				nameC = true;
			}			
		}		
		if (email.length > 10) {
			if ((email.indexOf("@") != -1)&&(email.indexOf("@") < (email.length - 7))) {
				emailC = true;
			}			
		}
		if (nameC && emailC) {
			return true;
		}
		return false;		
	});
});
