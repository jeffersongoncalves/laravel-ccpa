<?php

namespace JeffersonGoncalves\Ccpa\Commands;

use JeffersonGoncalves\Ccpa\Ccpa;
use JeffersonGoncalves\Privacy\Commands\InventoryCommand as BaseInventoryCommand;

class InventoryCommand extends BaseInventoryCommand
{
    protected $signature = 'ccpa:inventory {--json : Output as JSON}';

    protected string $privacy = Ccpa::class;
}
