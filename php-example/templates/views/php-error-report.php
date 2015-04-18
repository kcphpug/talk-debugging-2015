<?php
// Enable Error Reporting on Specific levels
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
// Report all errors except E_NOTICE
    error_reporting(E_ALL & ~E_NOTICE);
// or, everything except Deprecated Notices
    error_reporting(E_ALL & ~E_DEPRECATED);
// Turn on or Off writing errors to browser:
    ini_set('display_errors','on');
    ini_set('display_errors','off');