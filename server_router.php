<?php

if (file_exists($_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME']))
    return false;
elseif (file_exists($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'index.php'))
    include $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'index.php';
else
    return false;
