<?php

declare(strict_types=1);

namespace Chiron\Views\Bootloader;

use Chiron\Boot\Directories;
use Chiron\Bootload\AbstractBootloader;
use Chiron\PublishableCollection;

final class PublishViewsBootloader extends AbstractBootloader
{
    public function boot(PublishableCollection $publishable, Directories $directories): void
    {
        // copy the configuration template file from the package "config" folder to the user "config" folder.
        $publishable->add(__DIR__ . '/../../config/views.php.dist', $directories->get('@config/views.php'));
    }
}
