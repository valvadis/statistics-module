<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

/**
 * List of enabled modules for this application.
 *
 * This should be an array of module namespaces used in the application.
 */
return [
    'Zend\ServiceManager\Di',
    'Zend\Log',
    'Zend\Mail',
    'Zend\Filter',
    'Zend\Paginator',
    'Zend\Cache',
    'Zend\Db',
    'Zend\Mvc\Console',
    'Zend\Mvc\I18n',
    'Zend\Session',
    'Zend\I18n',
    'Zend\Form',
    'Zend\Hydrator',
    'Zend\Router',
    'Zend\Validator',
    'Zend\InputFilter',
    'Zend\Navigation',
    'Zend\Mvc\Plugin\Identity',
    'Zend\Mvc\Plugin\FlashMessenger',
    'DoctrineModule',
    'DoctrineORMModule',
    'ZendDeveloperTools',
    'Statistics',
];
