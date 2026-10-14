<?php

namespace Edwinpeligro85\LaravelShippingCost\Commands;

use Illuminate\Console\Command;

class LaravelShippingCostCommand extends Command
{
    public $signature = 'laravel-shipping-cost';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
