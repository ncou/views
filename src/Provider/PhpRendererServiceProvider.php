<?php

namespace Chiron\Views\Provider;

use Chiron\Views\Engine\PhpRenderer;
use Chiron\Views\TemplateRendererInterface;
use Chiron\Core\Container\Provider\ServiceProviderInterface;
use Chiron\Container\BindingInterface;

final class PhpRendererServiceProvider implements ServiceProviderInterface
{
    public function register(BindingInterface $container): void
    {
        // bind to the default engine (basic php-renderer) only if there is not already a binding.
        if (! $container->bound(TemplateRendererInterface::class)) {
            $container->singleton(TemplateRendererInterface::class, PhpRenderer::class);
        }
    }
}
