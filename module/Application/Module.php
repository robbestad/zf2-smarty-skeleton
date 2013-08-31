<?php
/**
 * Zend Framework 2 Skeleton Application 
 *
 * @link      https://github.com/svenanders/zf2-smarty-skeleton for the canonical source repository
 * @copyright Copyright (c) Scandinavia Online AS. (http://www.sol.no)
 * @license   Commercial License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Application\View\Helper\AbsoluteUrl;
use Application\View\Helper\GetPath;
use Application\View\Helper\GetRole;
use Application\View\Helper\VideoId;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $e->getApplication()->getServiceManager()->get('viewhelpermanager')->setFactory(
            'controllerName', function($sm) use ($e) {

            $viewHelper = new View\Helper\ControllerName($e->getRouteMatch());

            return $viewHelper;
            }
        );
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                // the array key here is the name you will call the view helper by in your view scripts
                'absoluteUrl' => function($sm) {
                    $locator = $sm->getServiceLocator(); // $sm is the view helper manager, so we need to fetch the main service manager

                    return new AbsoluteUrl($locator->get('Request'));
                },
                'getPath' => function($sm) {
                    $locator = $sm->getServiceLocator(); // $sm is the view helper manager, so we need to fetch the main service manager

                    return new GetPath();
                },
                'getRole' => function($sm){
                    $locator = $sm->getServiceLocator(); // $sm is the view helper manager, so we need to fetch the main service manager

                    return new GetRole();
                },

                'videoId' => function($sm){
                    $locator = $sm->getServiceLocator();

                    return new VideoId();
                }

            ),
        );
    }

}
