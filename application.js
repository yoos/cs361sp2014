
function createAudio(){   
		$.ajax({	
			url: 'ajaxcreateaudio.php',
			type: 'POST'						
		})		
		.done(function(msg) {			
			if(msg > 0)
			{
				$('#save-recording').show();		
				$('#file-name-result').append('<h3>Recording will be save to file: ' + msg + '.mp4</h3>');
			}
			else
			{				
				alert('error db ' + msg);
				$('#newsletter-error').show();
				$('#newsletter-error').text('Sorry, we messed up! We did not get your email. Try again or call us.');
			}	
		})
		.fail(function(){
				alert('fail');			
			$('#newsletter-error').show();				
			$('#newsletter-error').text('Sorry, we messed up! We did not get your email. Try again or call us.');		
		});
	
}	



$(function() {

	
	$('#save-recording').hide();
	
	
	
	
	
	
	
	
	$('#record-submit').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
  		//$('#start-recording').hide();
  	
  		$('#record-submit').val('Stop Recording');
  		createAudio();
	});
	
});