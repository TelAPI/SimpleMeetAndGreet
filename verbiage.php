<?php
// SAY or PLAY, please ensure all verbiage constants are URLs if you're using PLAY
defined('VERB_TYPE') or define('VERB_TYPE', 'SAY');

if(VERB_TYPE == 'SAY') {
    defined('MESSAGE_ENTER_CALL') or define('MESSAGE_ENTER_CALL', 'Press 1 to leave a message. Press 2 to enter a conference.');
    defined('MESSAGE_CONFERENCE_AUTH') or define('MESSAGE_CONFERENCE_AUTH', 'Please enter the conference PIN.');
    defined('MESSAGE_INVALID_PIN') or define('MESSAGE_INVALID_PIN', 'Invalid PIN number provided.');
    defined('MESSAGE_RECORD_ERROR') or define('MESSAGE_RECORD_ERROR', 'We could not save your recording. Please try again later.');
    defined('MESSAGE_RECORD_PROMPT') or define('MESSAGE_RECORD_PROMPT', 'Please leave a message after the tone.');
    defined('MESSAGE_RECORD_THANKS') or define('MESSAGE_RECORD_THANKS', 'Thank you for leaving a message!');
    defined('MESSAGE_CONFERENCE_INFO') or define('MESSAGE_CONFERENCE_INFO', 'General conference info here!');
} elseif(VERB_TYPE == 'PLAY') {
    defined('MESSAGE_ENTER_CALL') or define('MESSAGE_ENTER_CALL', 'http://example.com/audio.mp3');
    defined('MESSAGE_CONFERENCE_AUTH') or define('MESSAGE_CONFERENCE_AUTH', '');
    defined('MESSAGE_INVALID_PIN') or define('MESSAGE_INVALID_PIN', '');
    defined('MESSAGE_RECORD_ERROR') or define('MESSAGE_RECORD_ERROR', '');
    defined('MESSAGE_RECORD_PROMPT') or define('MESSAGE_RECORD_PROMPT', '');
    defined('MESSAGE_RECORD_THANKS') or define('MESSAGE_RECORD_THANKS', '');
    defined('MESSAGE_CONFERENCE_INFO') or define('MESSAGE_CONFERENCE_INFO', '');
}