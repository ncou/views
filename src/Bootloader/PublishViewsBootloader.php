<?php

declare(strict_types=1);

namespace Chiron\Views\Bootloader;

use Chiron\Core\Directories;
use Chiron\Core\Container\Bootloader\AbstractBootloader;
use Chiron\Publisher\Publisher;

final class PublishViewsBootloader extends AbstractBootloader
{
    public function boot(Publisher $publisher, Directories $directories): void
    {
        // copy the configuration template file from the package "config" folder to the user "config" folder.
        $publisher->add(__DIR__ . '/../../config/views.php.dist', $directories->get('@config/views.php'));
    }
}
