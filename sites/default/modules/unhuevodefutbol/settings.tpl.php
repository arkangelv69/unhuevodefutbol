<?php

$update_free_access = FALSE;
$drupal_hash_salt = 'o0ono2NHLyDjgEN6Oj1g_aYplq-GkhmPGCM4S0g7rCU';
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);
$conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';
$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'database' => '##BBDD##',
      'username' => '##USERNAME##',
      'password' => '##PASS##',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => array (
        'default' => '',
		'variable' => '##NUMBER##_',
		'cache_bootstrap' => '##NUMBER##_',
		'search_index' => '##NUMBER##_',
		'search_dataset' => '##NUMBER##_',
		'search_node_links' => '##NUMBER##_',
		'search_total' => '##NUMBER##_',
		'cache_field'  => '##NUMBER##_',
		'cache' => '##NUMBER##_',
		'cache_menu' => '##NUMBER##_',
      ),
    ),
  ),
);
$drupal_hash_salt = '6gpt-2hx_5B3UduLTh705yGenvLe6A1cPZiXnHNomHo';

$conf['entrelineas_number'] = ##NUMBER##;
$conf['entrelineas_meses'] = '##DATE##';
$cookie_domain = '##DOMAIN##';
$conf['sites_nuevo'] = '/home/entrelineas/vhosts/revistaentrelineas.es.new/sites/all/sites_nuevo.txt';
$conf['sites_anteriores'] = '/home/entrelineas/vhosts/revistaentrelineas.es.new/sites/all/sites.txt';
$conf['site_offline']=1;