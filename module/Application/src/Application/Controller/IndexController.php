<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Application;
use Application\Form\ApplicationForm;

class IndexController extends AbstractActionController
{

    public function getMetadata()
    {
        $metadata=array(
            'title'=>$config['metadata']['/helse/']['title'],
            'description'=>$config['metadata']['/helse/']['description'],
            'keywords'=>$config['metadata']['/helse/']['keywords'],
            'url'=>$config['metadata']['/helse/']['url'],
            'image'=>$config['metadata']['/helse/']['image'],

            );

        return $metadata;
    }

    public function indexAction()
    {

            return new ViewModel(
                array(
                 'userAgent' => $_SERVER['HTTP_USER_AGENT'],
                 'metadata'=>json_encode($this->getMetadata()),

                )
            );
    }

}
