<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

$dataDir = __DIR__ . '/../../../data';
if (!is_dir($dataDir)) {
    $dataDir = __DIR__ . '/../../data';
}

return array(
  'phpSettings'   => array(
        'display_startup_errors'        => false,
        'display_errors'                => false,
        'error_reporting'                => 'E_NONE',
        'max_execution_time'            => 60,
        'date.timezone'                 => 'Europe/Oslo',
        'mbstring.internal_encoding'    => 'UTF-8',
  ),  
	'view_manager' => array(
        'smarty' => array(
            'cache_dir' => $dataDir.'/cache',
            'compile_dir' => $dataDir.'/compile',
            'error_reporting' => 'E_ALL ~ E_NOTICE',
            'debugging'=>"on"
        )
    )
);
