<?php
include_once '../bootstrap.php';

$response_xml = '';
if(isset($_REQUEST['Digits'])) {
    if($_REQUEST['Digits'] == CONFERENCE_PASSWORD) {
        die(header('Location: /conference_enter.php'));
    } else {
        $response_xml .= stream(MESSAGE_INVALID_PIN);
    }
}

$response_xml .= gather(stream(MESSAGE_CONFERENCE_AUTH), $action = $_SERVER['REQUEST_URI'], $numDigits = strlen(CONFERENCE_PASSWORD));

echo render_xml($response_xml);