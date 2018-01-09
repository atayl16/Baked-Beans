<?php 
# This is the main configuration file
# Only non sensitive files for this file as its in github
# sensitive file are #included.

# host and base URL etc
$host = "https://www.turbotas.co.uk";
$basedir = "/webapps/beantest1";
$URL = $host . $basedir;

# Include Directory
$include = "inc/";

# Database
include $include . 'dbsettings.inc.php';

?>