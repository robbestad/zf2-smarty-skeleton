Zend Framework 2 Skeleton Application Using Smarty 3
=======================

Introduction
------------
Zend Framework 2 Skeleton Application

		Built using ZF2 MVC layer
		Using Smarty 3 Templating Language
		And no.. it's _not_ the same as the official skeleton application


Installation
------------

Clone the repository by issuing the following command:
    
    cd my/project/dir
    git clone https://github.com/svenanders/zf2-smarty-skeleton.git 

Then update the project:

    cd zf2-smarty-skeleton
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar` available.)

Configuration
--------------------

Steps:

1. Create a folder named 'data' pararell width 'current' containing 'cache', 'SmartyModule', 'compile' and 'log'. All dirs should be writeable by the www-data user.

2. You must set your apache-config to 'AllowOverride All'
   e.g:
   <Directory "/storage/home/xxx/www/zf2-smarty-skeleton/public">
       AllowOverride All
   </Directory>


Updates
--------------------
    From time to time you should update packages

    cd zf2-smarty-skeleton
    php composer.phar self-update
    php composer.phar update


Virtual Host
------------
Afterwards, set up a virtual host to point to the public/ directory of the
project and you should be ready to go!

