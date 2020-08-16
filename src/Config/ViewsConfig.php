<?php

declare(strict_types=1);

namespace Chiron\Views\Config;

use Nette\Schema\Expect;
use Nette\Schema\Schema;
use Chiron\Config\AbstractInjectableConfig;
use Chiron\Config\InjectableInterface;

final class ViewsConfig extends AbstractInjectableConfig
{
    protected const CONFIG_SECTION_NAME = 'views';

    protected function getConfigSchema(): Schema
    {
        return Expect::structure([
            'extension' => Expect::string()->nullable(),
            'paths' => Expect::arrayOf('string')->default([directory('@views')]),
        ]);
    }

    public function getExtension(): ?string
    {
        return $this->get('extension');
    }

    public function getPaths(): array
    {
        return $this->get('paths');
    }
}
