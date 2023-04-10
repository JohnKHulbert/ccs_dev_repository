$("#info_div").html('<a href="http://www.google.com">Follow Chasing Comet Studios on Social Media</a>');

var objHulbert = {};

var objNames = {};

objHulbert["firstname"] = "John";
objHulbert["lastname"] = "Hulbert";
objHulbert["address1"] = "10335";
objHulbert["address2"] = "FM 455 W";
objHulbert["city"] = "Sanger";
objHulbert["state"] = "Texas";
objHulbert["zip"] = "76266";

objNames["John"] = "Fatmin";
objNames["Swisher"] = "Drunkard";
objNames["Beck"] = "Silly-face";

$.each(objNames, function(key, val) {
    $("#info_names").append($('<option>', {value:key, text:val}));
});

var objkey;

objkey = "city";

//var info_btn = document.getElementById("info_btn");
var info_btn = $("#info_btn");

//info_btn.addEventListener('click', function() {
info_btn.on('click', function() {

	
	// document.getElementById("info_div").innerHTML = objHulbert[key];
	$("#info_div").html(objHulbert[objkey]);
	
 }, false);
 
 var lastname = objHulbert["lastname"];
 
 $("#info_div2").html(lastname);
 
 $("#info_email").val("test");
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 