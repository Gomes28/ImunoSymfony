<?php

namespace ContainerAPFWrOF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerFailedMessagesRetry_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_failed_messages_retry.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $containerRef = $container->ref;

        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.messenger_failed_messages_retry.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:failed:retry', [], 'Retry one or more messages from the failure transport', false, #[\Closure(name: 'console.command.messenger_failed_messages_retry', class: 'Symfony\\Component\\Messenger\\Command\\FailedMessagesRetryCommand')] function () use ($containerRef): \Symfony\Component\Messenger\Command\FailedMessagesRetryCommand {
            $container = $containerRef->get();

            return ($container->privates['console.command.messenger_failed_messages_retry'] ?? $container->load('getConsole_Command_MessengerFailedMessagesRetryService'));
        });
    }
}
