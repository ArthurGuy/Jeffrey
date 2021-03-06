<?php

namespace App\Console;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

class Application extends \Symfony\Component\Console\Application {

    /**
     * The exception handler instance.
     *
     * @var \Illuminate\Exception\Handler
     */
    protected $exceptionHandler;


    /**
     * Get the default input definitions for the applications.
     *
     * @return Symfony\Component\Console\Input\InputDefinition
     */
    protected function getDefaultInputDefinition()
    {
        $definition = parent::getDefaultInputDefinition();

        $definition->addOption($this->getEnvironmentOption());

        return $definition;
    }

    /**
     * Get the global environment option for the definition.
     *
     * @return Symfony\Component\Console\Input\InputOption
     */
    protected function getEnvironmentOption()
    {
        $message = 'The environment the command should run under.';

        return new InputOption('--env', null, InputOption::VALUE_OPTIONAL, $message);
    }

    /**
     * Render the given exception.
     *
     * @param  Exception  $e
     * @param  Symfony\Component\Console\Output\OutputInterface  $output
     * @return void
     */
    public function renderException($e, $output)
    {
        // If we have an exception handler instance, we will call that first in case
        // it has some handlers that need to be run first. We will pass "true" as
        // the second parameter to indicate that it's handling a console error.
        if (isset($this->exceptionHandler))
        {
            $this->exceptionHandler->handleConsole($e);
        }

        return parent::renderException($e, $output);
    }

    /**
     * Set the exception handler instance.
     *
     * @param  \Illuminate\Exception\Handler  $handler
     * @return void
     */
    public function setExceptionHandler($handler)
    {
        $this->exceptionHandler = $handler;
    }


}
