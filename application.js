var fakeAudioID = 122;


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
				$('#file-name-current').append('<h3>Currently Recording to file: ' + fakeAudioID + '.mp4</h3>');
				$('#save-audio-info').append('<input type="hidden" value="'+ msg.trim() +'" name="audio_id">');
			}
		})
		.fail(function(){	
			
		});	
}	

function editAudio(){  
	
	var audio_id = fakeAudioID;
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
			$('#file-name-result').append('<h3>Successfully Saved information to file: ' + fakeAudioID + '.mp4</h3><h2><a href="addwordshome.php?audio_id=' + fakeAudioID + '">Add Words</a> to this File.</h2>');
			$('#save-recording').hide();				
		}		
	})
	.fail(function(){			
		
	});
}	

function addWord(){  
	
	var audio_id = $('#audio_id').val();
	var word = $('#word').val();
	var start_time = $('#start_time').val();
	var end_time = $('#end_time').val();

	$.ajax({	
		url: 'ajaxaddword.php',
		type: 'POST',
		data: {p_audio_id:audio_id, p_word:word, p_start_time:start_time, p_end_time:end_time}								
						 
	})		
	.done(function(msg) {			
		if(msg > 0)
		{
			$('#add-word-result').empty();
			$('#add-word-result').append('<h3>Successfully Saved ' + word + ' to file: '+ audio_id +'.mp4</h3>');
			$('#word').val('');
			$('#start_time').val('');
			$('#end_time').val('');
		}		
	})
	.fail(function(){			
		
	});
}	

$(function() {
	
	$('#save-recording').hide();	
	$('#record-stop').hide();	
	$('#audio-player').hide();	

	$('#record-start').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
 		//createAudio();

 		$('#record-stop').show();
		$('#record-start').hide();			
		$('#file-name-current').append('<h3>Currently Recording to file: ' + fakeAudioID + '.mp4</h3>');
		$('#save-audio-info').append('<input type="hidden" value="'+ fakeAudioID +'" name="audio_id">');

	});	
	
	$('#record-stop').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
  		$('#start-recording').hide();
		$('#save-recording').show();		
		$('#audio-player').show();	
		$('#file-name-result').append('<h3>Recording Saved to file: '+ fakeAudioID +'.mp4</h3><h4>Use this form to update this recordings information</h4>');  		
	});

	$('#record-save').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
  		editAudio();
	});	

	$('#submit-word').on("click", function(event) { 		
  		event.stopPropagation();
  		event.preventDefault();  	
  		addWord();
	});	
});