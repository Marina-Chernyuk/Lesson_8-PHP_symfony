<?php

namespace ContainerK2r6CbD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Authenticator_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.authenticator.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        return $container->privates['security.firewall.authenticator.main'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([], ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.event_dispatcher.main'] ?? $container->getSecurity_EventDispatcher_MainService()), 'main', ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), true, true, []));
    }
}
