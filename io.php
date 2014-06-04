<?php

require_once('dbconfig.php');
mysql_connect(DB_HOST, DB_USER, DB_PASS);
@mysql_select_db(DB_NAME) or die( "Unable to select database");


/*
 * @brief Insert row into st_audio table.
 *
 * @return: st_audio index if successful, -1 otherwise.
 */
function create_audio()
{
	$query = "insert into st_audio (text, title) values('','')";

	if(mysql_query($query)) {
		$id = mysql_insert_id();
		return $id;
	}
	else {
		return -1;
	}	
}


/*
 * @brief 
 *
 * updates information on audio transcript
 *
 * @param audio_id: Audio to save
 * @param title: Audio title
 * @param text: Audio transcript
 * @return: 1 if successful, -1 otherwise.
 */
function edit_audio($audio_id, $title, $text)
{
	/* Make new entry in database */
	$query = "update st_audio set title = '$title', text = '$text' where audio_id = '$audio_id'";

	if(mysql_query($query)) {
		return 1;
	}
	else {
		return -1;
	}

}





/*
 * @brief 
 *
 * This will first store the audio and text to st_audio, grab the index
 * number n, and save the audio as n.mp3. For this demo, however, we
 * will copy a dummy audio file from disk rather than a live copy from
 * memory.
 *
 * @param audio: Audio to save
 * @param text: Audio transcript
 * @return: Audio entry index if successful, -1 otherwise.
 */
function log_sentence($audio, $text)
{
	/* Make new entry in database */
	$query = "insert into st_audio values ('', '$text')";

	if(mysql_query($query)) {
		echo "Logged sentence\n";
	}
	else {
		return -1;
	}

	/* Save audio using database entry index */
	$id = mysql_insert_id();

	/* TODO(yoos): file I/O */

	return $id;
}

/*
 * @brief Populate st_words table.

 * @param audio_id: Audio entry index output by log_sentence.
 * @param word: Word.
 * @param start: Word start time.
 * @param end: Word end time.
 *
 * @return: Word index if successful, -1 otherwise.
 */
function tag_word($audio_id, $word, $start, $end)
{
	$query = "insert into st_words values ('', '$word', '$audio_id', '$start', '$end')";

	if(mysql_query($query)) {
		echo "Tagged word '$word' in audio $audio_id at $start ending $end\n";
	}
	else {
		return -1;
	}

	$id = mysql_insert_id();
	return $id;
}

/*
 * @brief Get word instances for later playback.
 *
 * @param `word`: Word.
 * @return: Array of all instances of word by audio file index and timestamps.
 */
function get_word($word)
{
	$query = "select audio_id, start, end
		      from st_words
		      where word='$word'";
	$result = mysql_query($query);
	$num    = mysql_num_rows($result);

	$i=0;
	$words = array();
	while ($i < $num) {
		$words[$i] = array(mysql_result($result, $i, 'audio_id'),
			               mysql_result($result, $i, 'start'),
			               mysql_result($result, $i, 'end'));
		printf("<p>Got instance in %d at %f</p>", $words[$i][0], $words[$i][1]);

		$i++;
	}
	printf("<p>Retrieved %d instances of %s</p>", sizeof($words), $word);

	return $words;
}
?>

