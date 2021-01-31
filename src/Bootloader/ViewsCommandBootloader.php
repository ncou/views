<?php

namespace Chiron\Views\Bootloader;

use Chiron\Core\Directories;
use Chiron\Core\Container\Bootloader\AbstractBootloader;
use Chiron\Console\Console;
use Chiron\Views\Command\ViewsListCommand;

final class ViewsCommandBootloader extends AbstractBootloader
{
    public function boot(Console $console): void
    {
        $console->addCommand(ViewsListCommand::getDefaultName(), ViewsListCommand::class);
    }
}
