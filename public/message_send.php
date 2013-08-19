<?php
include_once '../bootstrap.php';

$message = <<<MESSAGE
New {$_REQUEST['RecordingDuration']} second recording: {$_REQUEST['RecordingUrl']}.
MESSAGE;

if(mail(RECORDING_EMAIL, RECORDING_SUBJECT, $message))
    echo render_xml(stream(MESSAGE_RECORD_THANKS) . hangup());
else
    echo render_xml(stream(MESSAGE_RECORD_ERROR) . hangup());