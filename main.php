<?php
require_once('io.php');
?>

<h3>Record Audio</h3>


<div id="start-recording">
	<form action="" method="post">

		
		<input type="submit" value="Start Record" id="record-submit">

	</form>  
	
	
	
</div>


<div id="save-recording">
	<form action="" method="post">	
		Transcript:<br/>
		<textarea rows="5" cols="50">
		</textarea><br/>
		Title of Recording:<br/>
		<input type="text" name="title"><br/>
		<input type="submit" value="Save Recording" id="record-save">
	
	</form>  
</div>