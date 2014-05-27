Database Structure and API
==========================

API
---
  * log\_sentence(audio, text)
    - param `audio`: Audio to save
    - param `text`: Audio transcript
    - return: Audio entry index
    - This will first store the audio and text to st_audio, grab the index
      number `n`, and save the audio as `n.mp3`. For this demo, however, we
      will copy a dummy audio file from disk rather than a live copy from
      memory.
  * tag\_word(index, word, start, end)
    - param `index`: Audio entry index output by `log_sentence`.
    - param `word`: Word.
    - param `start`: Word start time.
    - param `end`: Word end time.
    - Populate st\_words table.
  * get\_word(word)
    - param `word`: Word.
    - return: Array of all instances of word by audio file index and timestamps.

st\_audio
---------
Associates each audio file with a transcription of the sentence.

  * Audio index
  * Transcript

st\_words
---------
Pair word with sentence audio and timestamps (beginning and end of word). I.e.,
1-to-N relationship between words and audio files.

  * Word index
  * Word
  * Associated audio index
  * Start time
  * End time

