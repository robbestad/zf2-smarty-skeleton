<?php
define ('ALLOW_EXTERNAL', TRUE);
define ('FILE_CACHE_DIRECTORY', '');
define ('MAX_FILE_SIZE', 524288); //512KB
define ('MAX_WIDTH', 768); 
define ('MAX_HEIGHT', 768); 
define ('NOT_FOUND_IMAGE', '/images/sol_logo_40x40.png');
define ('ERROR_IMAGE', '/images/sol_logo_40x40.png');
if(! defined('OPTIPNG_ENABLED') )       define ('OPTIPNG_ENABLED', true);
if(! defined('OPTIPNG_PATH') )          define ('OPTIPNG_PATH', '/opt/local/bin/optipng'); //This will run first because it gives better compression than pngcrush. 
if(! defined('PNGCRUSH_ENABLED') )      define ('PNGCRUSH_ENABLED', true);
if(! defined('PNGCRUSH_PATH') )         define ('PNGCRUSH_PATH', '/opt/local/bin/pngcrush'); //This will only run if OPTIPNG_P
define ('MEMORY_LIMIT', '10M'); 
define('ALLOW_ALL_EXTERNAL_SITES',FALSE);
define('ALLOWED_SITES',array ('csp.picsearch.com','www.sol.no'));
