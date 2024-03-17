<?php

namespace ChrisReedIO\ShippoSDK\Commands;

use Illuminate\Console\Command;

class ShippoSDKCommand extends Command
{
    public $signature = 'laravel-shippo-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
