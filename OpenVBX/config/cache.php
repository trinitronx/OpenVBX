<?php

/**
 * Enable/disable the cache system
 * By default we are enabled and let the system choose the correct type
 */
$config['cache']['cache_enabled'] = false;

/**
 * Currently supported caches:
 * - memory: use memory for a per-page load cache
 * - apc: @todo use APC for the memory cache
 * - memcached: use memcached for the memory cache
 * 
 * @todo auto-detect cache availability
 */
$config['cache']['cache_type'] = 'apc';

/**
 * Default expiration time for cached items
 */
$config['cache']['default_expires'] = 3600;

/**
 * Default Memcache Settings
 */
$config['cache']['memcache'] = array(
	'servers' => array(
		'127.0.0.1'
	),
	'port' => '11211'
);