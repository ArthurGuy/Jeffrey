<?php

namespace App\Commands;

use App\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
//use Illuminate\Database\ConnectionResolverInterface as Resolver;

class Example extends Command {
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'example';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Description of the example command";
 
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->error("Do something usefull");
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array();
    }

}
