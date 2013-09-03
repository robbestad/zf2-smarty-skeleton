<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(

    'metadata' => array(
        '/' => array(
            'title'=>'skeleton',
            'description'=>'',
            'keywords'=>'',
            'url'=>'http://',
            'image'=>'http://',
        ),
    ),

    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),


        ),
    ),

    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',

        ),
    ),
    'translator' => array(
        'locale' => 'nb_NO',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404.tpl',
        'exception_template'       => 'error/index.tpl',
        'template_map' => array(
                'layout/layout'           => __DIR__ . '/../view/layout/layout.tpl',
                'application/index/index' => __DIR__ . '/../view/application/index/index.tpl',
                'error/404'               => __DIR__ . '/../view/error/404.tpl',
                'error/index'             => __DIR__ . '/../view/error/index.tpl',

        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
            __DIR__ . '/../../view',
        ),
    ),
);
