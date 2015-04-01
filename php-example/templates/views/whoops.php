<?php

if ("debug") {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler( new \Whoops\Handler\PrettyPageHandler );
    $whoops->register();
}
