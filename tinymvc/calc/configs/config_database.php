<?php

/**
 * database.php
 *
 * application database configuration
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

$config['default']['plugin'] = 'TinyMVC_PDO'; // plugin for db access
$config['default']['type'] = 'mysql';      // connection type
$config['default']['host'] = '35.165.104.196';  // db hostname
$config['default']['name'] = 'polpaicodb';     // db name
$config['default']['user'] = 'polpaico';     // db username
$config['default']['pass'] = 'polpaico123';     // db password
$config['default']['persistent'] = false;  // db connection persistence?

?>