<?php 
include_once('header.php'); 

/*
	Constant Variables
*/




?>

<fieldset>

<!-- Form Name -->
<legend>Record Audio</legend>

<div id="start-recording">
	<div id="file-name-current">
	</div>
	<form name="recordingform" method="post" action="" class="form-horizontal" role="form">
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-10">
				<button type="submit" value="Start Recording" id="record-start" name="startbutton" class="btn btn-primary" method="post">Start Recording</button>
				<button type="submit" value="Stop Recording" id="record-stop" name="stopbutton" class="btn btn-primary" method="post">Stop Recording</button>
			</div>
		</div>
	</form>
</div>

<audio controls="controls" id="audio-player">
  <source src="122.mp3" type="audio/mpeg">
</audio>



<div id="file-name-result">
</div>
<div id="save-recording">
	<form name="saveform" id="save-audio-info" method="post" action="" class="form-horizontal" role="form">
		<!-- Text input-->
		<div class="form-group">
			<label class="col-lg-2 control-label" for="textinput">Title of Recording</label>
			<div class="col-lg-10">
				<input id="audio_title" name="textinput" class="form-control input-md" type="text" />				
			</div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
			<label class="col-lg-2 control-label" for="textarea">Transcript</label>
			<div class="col-lg-10">
				<textarea id="audio_transcript" class="form-control" rows="6" id="textarea" name="textarea"></textarea>				
			</div>
		</div>

		<!-- Save button -->
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-10">
				<button id="record-save" name="savebutton" class="btn btn-success" method="post">Save</button>
			</div>
		</div>
	</form>
</div>

</fieldset>

<?php include_once('footer.php'); ?>

	
