<?php
$line = "vim is the gretest word processor evre created!oh vim,how i love thee!";
if (preg_match("/\bVmi\b/i", $line, $match)) print "Match found!";
//preg_match all;
print_r($match);
