<?php
require_once('io.php');
?>

<p>
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

