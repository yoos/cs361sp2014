<?php
	$audio_id = $_GET["audio_id"];
	include_once('header.php'); 
?>

<fieldset>

<!-- Form Name -->
<legend>Add Words to Audio</legend>

<?php

	$audio = get_audio($audio_id);
    echo '<h3>' .$audio[0][2] . '</h3>';
    echo '<p>' .$audio[0][1] . '</p></br>';
?>


<audio controls="controls">
  <source src="<?php echo $audio[0][0] ?>.mp3" type="audio/mpeg">
</audio>
</br></br>

<div id="add-word">
	<div id="add-word-result">

	</div>
	<form name="saveform" id="save-audio-info" method="post" action="" class="form-horizontal" role="form">

		<input id="audio_id" name="textinput" class="form-control input-md" type="hidden" value="<?php echo $audio[0][0] ?>"/>	
		<!-- Text input-->
		<div class="form-group">
			<label class="col-lg-2 control-label" for="textinput">Enter Word</label>
			<div class="col-lg-10">
				<input id="word" name="textinput" class="form-control input-md" type="text" />		
			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-lg-2 control-label" for="textinput">Start Time (in seconds)</label>
			<div class="col-lg-10">
				<input id="start_time" name="textinput" class="form-control input-md" type="text" />
			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-lg-2 control-label" for="textinput">End Time (in seconds)</label>
			<div class="col-lg-10">
				<input id="end_time" name="textinput" class="form-control input-md" type="text" />	
			</div>
		</div>

		<!-- Save button -->
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-10">
				<button id="submit-word" name="savebutton" class="btn btn-success" method="post">Save</button>
			</div>
		</div>
	</form>
</div>

</fieldset>

<?php include_once('footer.php'); ?>

	
