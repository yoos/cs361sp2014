<?php
require_once('io.php');
?>

<p>
	
<h3>Record Audio</h3>	
	
<form action="" method="post">

	Transcript:<br/>
	<textarea rows="5" cols="50">
	</textarea><br/>
	Title of Recording:<br/>
	<input type="text" name="title"><br/>
	<input type="submit" value="Record" id="record-submit">

</form>

	
Sentence log test:

<?php
$audio_id = log_sentence(0, "test");
?>
</p>

<p>
Word tag test:

<?php
tag_word($audio_id, "car", 1.2, 3.4);
?>
</p>

<p>
Word retrieval test:

<?php
get_word("banana");
?>
</p>

