<?php
require_once('io.php');
?>

<fieldset>

<!-- Form Name -->
<legend>Add Words to Audio</legend>


<audio controls="controls">
  <source src="122.mp3" type="audio/mpeg">
</audio>

<div id="add-word">
	<div id="add-word-result">

	</div>
	<form name="saveform" id="save-audio-info" method="post" action="" class="form-horizontal" role="form">
		<!-- Text input-->
		<div class="form-group">
			<label class="col-lg-2 control-label" for="textinput">Word</label>
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
			<div class="col-sm-offset-2 col-sm-10">
				<button id="submit-word" name="savebutton" class="btn btn-success" method="post">Save</button>
			</div>
		</div>
	</form>
</div>

</fieldset>

