<?php
require_once('io.php');
?>

<h2>Record Audio</h2>


<div id="start-recording">
	<div id="file-name-current">
		
		
	</div>
	<form action="" method="post">
		<input type="submit" value="Start Recording" id="record-start">
		<input type="submit" value="Stop Recording" id="record-stop">
	</form>  
	
	
	
</div>


<div id="save-recording">
	<div id="file-name-result">
		
		
	</div>
	<form action="" method="post" id="save-audio-info">	
		Title of Recording:<br/>
		<input type="text" name="title"><br/>
		Transcript:<br/>
		<textarea rows="5" cols="50">
		</textarea><br/>
		
		<input type="submit" value="Save Recording Information" id="record-save">
	
	</form>  
</div>