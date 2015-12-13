<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=devels',
			'username'   => 'root',
			'password'   => 'shrike',
		),
	),
    'items_per_page' => 10,
);
