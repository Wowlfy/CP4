<?php

namespace ContainerVET7V31;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminJobTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AdminJobType' shared autowired service.
     *
     * @return \App\Form\AdminJobType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AdminJobType.php';

        return $container->privates['App\\Form\\AdminJobType'] = new \App\Form\AdminJobType();
    }
}
