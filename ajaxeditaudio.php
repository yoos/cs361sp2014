<?php
   
   include_once('io.php'); 
   
   echo edit_audio($_POST["p_audio_id"],$_POST["p_title"],$_POST["p_transcript"]);
   
?>