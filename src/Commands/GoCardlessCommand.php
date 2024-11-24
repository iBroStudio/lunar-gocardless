<?php

namespace IBroStudio\GoCardless\Commands;

use Illuminate\Console\Command;

class GoCardlessCommand extends Command
{
    public $signature = 'lunar-gocardless';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
