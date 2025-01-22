<?php
$production_URL = 'https://www.smartidp.ai';
$development_URL = 'http://192.168.1.15/Git Hub/smart_idp/';

// Determine the environment
if ($_SERVER['SERVER_NAME'] == '192.168.1.15') {
    define('BASE_PATH', $development_URL);
} else {
    define('BASE_PATH', $production_URL);
}
// var_dump(BASE_PATH);
// exit;
// Now BASE_PATH will be set correctly depending on the environment 
?>
