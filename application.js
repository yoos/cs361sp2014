
$(function() {

	
	$('#record-submit').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
  		
  		$('#record-submit').val('Stop');
  		
	});
	
});