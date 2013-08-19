<?php
include_once '../bootstrap.php';

switch(@$_REQUEST['Digits']) {
    case '1':
        header('Location: /message_record.php');
    break;
    case '2':
        header('Location: /conference_auth.php');
    break;
    case '3':
        echo render_xml(dial(number(NUMBER_1)));
    break;
    case '4':
        echo render_xml(dial(number(NUMBER_2)));
    break;
    case '5':
        echo render_xml(stream(MESSAGE_CONFERENCE_INFO));
    break;
    default:
        echo render_xml(gather(stream(MESSAGE_ENTER_CALL), $action = $_SERVER['REQUEST_URI'], $numDigits = 1));
}