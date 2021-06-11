<?php

namespace ContainerRr7MbuZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerConsumeMessagesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_consume_messages' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\ConsumeMessagesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/ConsumeMessagesCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/RoutableMessageBus.php';

        $container->privates['console.command.messenger_consume_messages'] = $instance = new \Symfony\Component\Messenger\Command\ConsumeMessagesCommand(new \Symfony\Component\Messenger\RoutableMessageBus(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messenger.bus.default' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
        ], [
            'messenger.bus.default' => '?',
        ]), ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService())), ($container->privates['messenger.receiver_locator'] ?? ($container->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')), []);

        $instance->setName('messenger:consume');

        return $instance;
    }
}
