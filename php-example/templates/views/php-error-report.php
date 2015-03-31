<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

error_reporting(E_ALL & ~E_DEPRECATED);


ini_set('display_errors','on');
ini_set('display_errors','off');