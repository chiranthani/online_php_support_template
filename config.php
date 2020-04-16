<?php

$config_file = 'config/config_local.ini';

if (file_exists ($config_file)){ 
    $config = parse_ini_file($config_file, true); 
}else{
    echo ('Can not find file: '.$config_file.'<br>');
    die ('Configuration file doesn\'t exists.<br>');
}

// add code here

if (!$config){
    die ('Configuration file read error.<br>');
}else{
	//add code here
}


if (!$con_main) {
    die('Primary database connection error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

/* Template variables */
$template = array(
    'robots'            => '',
    'title'             => $title_prefix.$title_suffix,
    'page_preloader'    => true,
    'menu_scroll'       => true,
    'header_content'    => '',
    'active_page'       => basename($_SERVER['PHP_SELF'])
);
