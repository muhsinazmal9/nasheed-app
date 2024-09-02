<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name? : The name of the service}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');

        if (is_null($name)) {
            $name = $this->ask('Enter the name of the service');

            if (is_null($name)) {
                $this->error('You must specify a name for the service');
                return;
            }
        }

        $path = "Services/{$name}";

        // execute command
        $this->call('make:class', [
            'name' => $path,
        ]);

        $this->info('Service created successfully.');
    }
}

