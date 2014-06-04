
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
				$('#file-name-current').append('<h3>Currently Recording to file: 122.mp4</h3>');
				$('#save-audio-info').append('<input type="hidden" value="'+ msg.trim() +'" name="audio_id">');
			}
		})
		.fail(function(){	
			
		});
	
}	




function editAudio(){  
	
	var audio_id = '122';
	var title = $('#audio_title').val();
	var transcript = $('#audio_transcript').val();

	$.ajax({	
		url: 'ajaxeditaudio.php',
		type: 'POST',
		data: {p_audio_id:audio_id, p_title:title, p_transcript:transcript}								
						
	})		
	.done(function(msg) {			
		if(msg > 0)
		{
			$('#file-name-result').empty();
			$('#file-name-result').append('<h3>Sucessfully Saved information to file: 122.mp4</h3>');
			$('#save-recording').hide();				
		}		
	})
	.fail(function(){			
		
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
		$('#save-recording').show();		
		$('#file-name-result').append('<h3>Recording Saved to file: 122.mp4</h3><h4>Use this form to update this recordings information</h4>');  		
	});

	$('#record-save').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
  		//$('#start-recording').hide();
  	
  		//$('#record-submit').val('Stop Recording');
  		editAudio();
	});	



});