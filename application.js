
function createAudio(){   
		$.ajax({	
			url: 'ajaxcreateaudio.php',
			type: 'POST'						
		})		
		.done(function(msg) {			
			if(msg > 0)
			{
				$('#record-stop').show();
				$('#record-start').hide();
				$('#save-recording').show();		
				$('#file-name-current').append('<h3>Currently Recording to file: ' + msg + '.mp4</h3>');
				$('#save-audio-info').append('<input type="hidden" value="'+ msg.trim() +'" name="audio_id">');
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
	
	$('#record-stop').hide();
	
	
	
	
	
	
	$('#record-start').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
  		//$('#start-recording').hide();
  	
  		//$('#record-submit').val('Stop Recording');
  		createAudio();
	});
	
	
	$('#record-stop').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
  		$('#start-recording').hide();
		
		$('#file-name-result').append($('#file-name-current').text());
  		
	});
	
	
	
});