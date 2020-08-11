$(function(){

	function parseHash(newHash, oldHash){
	  crossroads.parse(newHash);
	}

	Handlebars.registerHelper("fullname", function(first_name, last_name) {
		return first_name + " " + last_name; 
	});

	Handlebars.registerHelper("displaystatus", function(status) {
		var thestatus = parseInt(status);
		if (thestatus === 0)        
         return "<span style='color: red; font-weight: bold'>not active</span>";
      else if (thestatus === 1)        
         return "<span style='color: green; font-weight: bold'>active</span>";
	});

	hasher.initialized.add(parseHash); //parse initial hash
	hasher.changed.add(parseHash); //parse hash changes
	hasher.init(); //start listening for history change

});