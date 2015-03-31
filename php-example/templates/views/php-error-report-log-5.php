<?php

function err ($message){

    $error = new Exception("Something weird happened");

    error_log($message . "\n" . $error);
}

err("Hey! Something weird just happened");
