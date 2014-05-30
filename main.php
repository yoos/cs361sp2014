<?php
require_once('io.php');
?>

<h2>Record Audio</h2>


<div id="start-recording">
	<form action="" method="post">
		<input type="submit" value="Start Record" id="record-submit">
	</form>  
	
	
	
</div>


<div id="save-recording">
	<div id="file-name-result">
		
		
	</div>
	<form action="" method="post">	
		Title of Recording:<br/>
		<input type="text" name="title"><br/>
		Transcript:<br/>
		<textarea rows="5" cols="50">
		</textarea><br/>
		
		<input type="submit" value="Save Recording Inforation" id="record-save">
	
	</form>  
</div>