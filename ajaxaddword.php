<?php
   
   include_once('io.php'); 
   
   echo tag_word($_POST["p_audio_id"],$_POST["p_word"],$_POST["p_start_time"],$_POST["p_end_time"]);
  
   
?>