<?php

namespace rckildea\BetterDebug;

use Facade\Ignition\Tabs\Tab as BaseTab;

class Tab extends BaseTab
{
    public function name(): string
    {
        return 'Better Debug';
    }

    public function component(): string
    {
        return 'ignition-better-debug';
    }

    public function registerAssets()
    {
        $this->script('ignition-better-debug', __DIR__.'/../dist/js/tab.js');
    }

    public function meta(): array
    {
        return [
            'title' => $this->name(),
        ];
    }
}
