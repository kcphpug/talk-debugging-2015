<?php
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors','off');
ini_set("log_errors",1);
ini_set("error_log","../logs/error.log");

error_log("Hey!  Here I am!");