<?php

namespace Abbas-bz\MapsApi\Commands;

use Illuminate\Console\Command;

class MapsApiCommand extends Command
{
    public $signature = 'maps-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
