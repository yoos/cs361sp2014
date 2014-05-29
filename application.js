
$(function() {

	
	$('#save-recording').hide();
	
	
	
	$('#record-submit').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
  		//$('#start-recording').hide();
  		$('#save-recording').show();
  		$('#record-submit').val('Stop Recording');
  		
	});
	
});