<?php

define('APP_PATH',__DIR__.'/');
define('VISTAS_PATH',APP_PATH.'vistas/');
define('HELPER_PATH',APP_PATH.'private/helper/');

include_once HELPER_PATH.'ComunHelper.php';

define('BASE_URL_PROJECT',ComunHelper::base_url());