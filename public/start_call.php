<?php
include_once '../bootstrap.php';

switch(@$_REQUEST['Digits']) {
    case '1':
        header('Location: /message_record.php');
    break;
    case '2':
        header('Location: /conference_auth.php');
    break;
    default:
        echo render_xml(gather(stream(MESSAGE_ENTER_CALL), $action = $_SERVER['REQUEST_URI'], $numDigits = 1));
}