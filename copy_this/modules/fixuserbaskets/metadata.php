<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'          => 'fixuserbaskets',
    'title'       => 'Fix Userbaskets Bug',
    'description' => 'Fixes the bug that users see contents of old orders in their baskets after logging in',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'thumbnail'   => '',
    'version'     => '1.0',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'oxbasket'    => 'fixuserbaskets/models/fixuserbaskets_oxbasket',
    ),
);