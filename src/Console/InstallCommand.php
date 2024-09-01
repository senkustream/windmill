<?php

namespace Senku\Windmill\Console;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use RuntimeException;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Process\Process;

#[AsCommand(name: 'windmill:install')]
class InstallCommand extends Command implements PromptsForMissingInput
{
    use InstallsBladeStack;

    /**
     * The name and signature of the console command.
     * 
     * @var string
     */
    protected $signature = 'windmill:install {stack : The development stack that should be installed (blade)}';

    /**
     * The console command description.
     * 
     * @var string
     */
    protected $description = 'Install the Windmill controllers and resources';

    /**
     * Execute the console command
     * 
     * @return int|null
     */
    public function handle()
    {
        if ($this->argument('stack') === 'blade') {
            return $this->installBladeStack();
        }

        $this->components->error('Invalid stack. Supported stacks are [blade]');

        return 1;
    }

    /**
     * Update the "package.json" file
     * 
     * @param callable $callback
     * @param bool $dev
     * @return void
     */
    protected static function updateNodePackages(callable $callback, $dev = true)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey]: [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }

    /**
     * Run the given commands
     * 
     * @param array $commands
     * @return void
     */
    protected function runCommands($commands)
    {
        $process = Process::fromShellCommandline(implode(' && ', $commands), null, null, null, null);

        if ('\\' !== DIRECTORY_SEPARATOR && file_exists('/dev/tty') && is_readable('/dev/tty')) {
            try {
                $process->setTty(true);
            } catch (RuntimeException $e) {
                $this->output->writeln(' <bg=yellow;fg=black> WARN </> '.$e->getMessage().PHP_EOL);
            }
        }

        $process->run(function ($type, $line) {
            $this->output->write('    ', $line);
        });
    }
}