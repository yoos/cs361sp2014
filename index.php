<?php 
include_once('header.php'); 
?>



<!-- Form Name -->
<legend>List of Audio Recordings</legend>



<?php

	$audio = get_audio_list();
    
	foreach ($audio as $a)
	{
		 echo '<h4>' . $a[2] . ' <a href="addwordshome.php?audio_id='. $a[0] .'"">Add Words</a></h4>';
		 echo  $a[1] .'</br>';
		 echo '<audio controls="controls">';
		 echo '<source src="' . $a[0]  . '.mp3" type="audio/mpeg">';
		 echo '</audio></br>';
	}
?>


<?php include_once('footer.php'); ?>

	
