<?php
/**
Plugin Name: CC Comment Plugin
Plugin URI: http://www.tjonsienfat.net
Description: This plugin sends an email when a comment is made
Author: Mike T-S-F
Version: 1.0
Author URI: http://www.tjonsienfat.net
*/

function cc_comment() {
    global $_REQUEST;

    $to = "m.t.s.f@planet.nl";
    $subject = "New comment posted @ yourblog" . $_REQUEST['subject'];
    $message = "Message from: " . $_REQUEST['name'] . " at email: " . $_REQUEST['email'] . ": \n" . $_REQUEST['comments'];
	mail($to,$subject,$message);
}

add_action('comment_post','cc_comment');