<?php
include_once '../bootstrap.php';

echo render_xml(
    stream(MESSAGE_RECORD_PROMPT) . record('/message_send.php', $playBeep=true)
);