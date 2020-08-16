<?php

namespace Chiron\Views\Bootloader;

use Chiron\Boot\Directories;
use Chiron\Bootload\AbstractBootloader;
use Chiron\PublishableCollection;
use Chiron\Console\Console;
use Chiron\Views\Command\ViewsListCommand;

final class ViewsCommandBootloader extends AbstractBootloader
{
    public function boot(Console $console): void
    {
        $console->addCommand(ViewsListCommand::getDefaultName(), ViewsListCommand::class);
    }
}
