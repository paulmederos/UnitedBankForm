$(function () {
	$("#step1_submit").click(function () {
	    // validate and process form
	    // first hide any error messages
	    $('.error').hide();
	
	    var site_name = $("input#site_name").val();
	    var email = $("input#email").val();
	    var message = $("textarea#message").val();
	    
	    if (site_name == "") { $("input#site_name").focus(); $("input#site_name").css({ backgroundColor: "#ffd3c9" }); return false; }
	
	    var dataString = 'name=' + name + '&email=' + email + '&message=' + encodeURIComponent(message);
	
	    $.ajax({
	        type: "POST",
	        url: "sendMessage.php",
	        data: dataString,
	        success: function () {
	            $('#contact-form').html("<div id='message-success'></div>");
	            $('#message-success').html("<h6>Contact Form Submitted!</h6>").append("<p>We will be in touch soon.</p>").hide().fadeIn(1500, function () {
	                $('#message-success');
	            });
	        }
	    });
	    return false;
	}); // End the #submit click function
}); // End anonymous function

$(document).ready(function () {
	$("input#site_name").select().focus();
	createTimeline();
});

function createTimeline(){
	$('#timeline').html(function(){
		var line = '<ul>';
		for ( i=1; i<=10; i++ ) { line += ('<li id=\"t_step'+i+'\">Step '+i+'</li>\n'); }
		line += '</ul>';
		return line;		
	});
}

// on Click for Save
	// Validate data
	// Send data to database
	// Disable button - 1.) Apply ".saved" class, 2.) Change value to "Step X is Saved!", 3.) Add disabled="disabled"
	// Change Timeline text color to #bfd255





