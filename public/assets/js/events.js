$(function(){

	$(document.body).on("submit", "#loginform", function(e) {

		e.preventDefault();

		//get the value from the form
		var login = $("#loginformusername").val();
		var password = $("#loginformpassword").val();
		
		//why not just serialized the form?
		//the formid is not the same as the one in the api
		var formData = new FormData();
	 	formData.append("login", login);
	 	formData.append("password", password);

		$.ajax({
         type: "post", //not restful => php not recognize put
         url: 'api/processlogin.php',
         enctype: 'multipart/form-data', 
         processData: false,
         contentType: false,    
         data: formData,            
         dataType: "json",
		   success: function(data){

            if (data.loginStatus) {

               bootbox.alert("Login successful");

               sessionStorage.setItem("ownerlogin", data.login);

               //redirect to the /#home
		         window.location.href = "#home";

            } 
            else {

               bootbox.alert("Login failed [" + data.errorMessage + "] - please try again!");
            }
		   },
		   error: function() {
		      console.log("error login [" + data.errorMessage + "]");
		   }
		});
	});

	//guest register form
	$(document.body).on("submit", "#registerform", function(e) {

		e.preventDefault();

		//get the value from the form
		var login = $("#registerformusername").val();
		var password = $("#registerformpassword").val();
		
		//why not just serialized the form?
		//the formid is not the same as the one in the api
		var formData = new FormData();
	 	formData.append("login", login);
	 	formData.append("password", password);

		$.ajax({
         type: "post", //not restful => php not recognize put
         url: 'api/processregistration.php',
         enctype: 'multipart/form-data', 
         processData: false,
         contentType: false,    
         data: formData,            
         dataType: "json",
		   success: function(data){

            if (data.registrationStatus) {

               bootbox.alert("Registration successful");

               //redirect to the /#home
		         window.location.href = "#login";

            } 
            else {

               bootbox.alert("Registration failed [" + data.errorMessage + "] - please try again!");
            }
		   },
		   error: function() {
		      console.log("error");
		   }
		});

	});
});