(function($) {

	$(document).ready(function() {
		//for testing - console.log('valide');
		/*$("#examplePhone").mask("+880 - 9999 - 999 - 999",{placeholder:" "});*/

		$.mockjax({
			url: "http://localhost",
			type: "POST",
			response: function(settings) {
				var email = settings.data.emailAdd;
				var emails = ["faisal@ivivelabs.com", "read@ivivelabs.gov", "me@ivivelabs.com"];
				
				if ($.inArray(email, emails) !== -1) {
					this.responseText = "false";
				} else {this.responseText = "true";}
			},
			responseTime: 500
		});

		jQuery.validator.addMethod("emailIvive",
			function(value, element) {
				value = value.replace(/\s+/g, "");
				var pattern = /\w@ivivelabs.com/g;
				if (pattern.test(value)) {
					return true
				} else {
					return false;
				};
			},
			"Your email should be like 'yourname@ivivelabs.com'");

		jQuery.validator.addMethod("phoneGpNo",
			function(value, element) {
				value = value.replace(/\s+/g, "");

				if (value.length == 14 && value.match(/^\+88017[0-9]{8}$/)) {
					return true
				} else {
					return false;
				};
			},
			"Your phone no must be grameenphone");


		$("#myForm").validate({

			rules: {
				hadithNo: {
					required: true,
					digits: true,
					min: 1
				},

				tuhfaNo: {
					required: true,
					digits: true,
					min: 1
				},

				kitabNo: {
					required: true,
					digits: true,
					min: 1
				},

				baabNo: {
					required: true,
					digits: true,
					min: 1
				},

				item1: {
					required: true
				},

				item2: {
					required: true
				},

				item3: {
					required: true
				},

				emailAdd: {
					required: true,
					remote: {
						url: "http://localhost",
						type: "post",
						},
					emailIvive: true	
				},

				phoneNo: {
					required: true,
					phoneGpNo: true
				}

			},

			messages: {
				emailAdd: {
					remote: "This email is used"
				}
			},

			submitHandler: function(form) {
				form.submit();	
			},

			onfocusout: false

		});
	});
}(jQuery));
