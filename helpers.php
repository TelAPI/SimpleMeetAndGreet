<?php
function render_xml($xml_content) {
    header('Content-Type: application/xml');
    
    return <<<XML
<?xml version="1.0" encoding="utf-8"?>
<Response>{$xml_content}</Response>
XML;
}

/** VERB SHORTCUTS **/
function conference($conference_id, $beep = true) {
    return dial(generate_verb('Conference', $conference_id, array(
        'beep'  => $beep ? 'true' : 'false'
    )));
}

function dial($inner_content) {
    return generate_verb('Dial', $inner_content);
}

function gather($inner_content, $action = null, $numDigits = null) {
    return generate_verb('Gather', $inner_content, array(
        'action'    => $action,
        'numDigits' => $numDigits
    ));
}

function generate_attr($k, $v) {
    return " {$k}=\"{$v}\"";
}

function generate_verb($verb_type, $inner_content = null, $attrs = array()) {
    $attr_string = ' ';
    
    if($attrs) {
        foreach($attrs as $k => $v)
            $attr_string .= generate_attr($k, $v);
    }

    return "<{$verb_type}{$attr_string}>{$inner_content}</{$verb_type}>";
}

function hangup() {
    return generate_verb('Hangup');
}

function number($address) {
    return dial(generate_verb('Number', $address));
}

function play($url) {
    return generate_verb('Play', $url);
}

function record($action, $playBeep = false) {
    return generate_verb('Record', null, array(
        'action'        => $action,
        'background'    => 'false',
        'playBeep'      => $playBeep ? 'true' : 'false'
    ));
}

function say($message) {
    return generate_verb('Say', $message);
}

function stream($inner_content) {
    $stream_method = strtolower(VERB_TYPE);
    
    return $stream_method($inner_content);
}