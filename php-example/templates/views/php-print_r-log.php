<?php
function err ($message,$data=null){

    $error = new Exception("Something weird happened");
    $error .= "\n" . print_r( $data ,true);

    error_log($message . "\n" . $error);
}

$data = array(
    'one' => 'a somewhat long string!',
    'two' => array(),
    'three' => 'x',
    'four' => range(0, 5),
);

err("Dump my info to the log",array($data,'Server'=>$_SERVER,'Post'=>$_POST));