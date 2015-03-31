<?php

$error = new Exception("Something weird happened");
error_log($error->getTraceAsString());