<?php

namespace Senku\Windmill\Console;

use Illuminate\Filesystem\Filesystem;

trait InstallsBladeStack
{
    /**
     * Install the Blade Windmill stack.
     * 
     * @return int|null
     */
    protected function installBladeStack()
    {
        // NPM Packages
        $this->updateNodePackages(function ($packages) {
            return [
                '@tailwindcss/forms' => '^0.5.7',
                'autoprefixer' => '^10.4.20',
                'postcss' => '^8.4.33',
                'tailwindcss' => '^3.4.10',
            ] + $packages;
        });

        // Views
        (new Filesystem)->ensureDirectoryExists(resource_path('views'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/views', resource_path('views'));

        // Public assets
        copy(__DIR__.'/../../stubs/default/public/chart-bars.js', public_path('chart-bars.js'));
        copy(__DIR__.'/../../stubs/default/public/chart-default.js', public_path('chart-default.js'));
        copy(__DIR__.'/../../stubs/default/public/chart-doughnut.js', public_path('chart-doughnut.js'));
        copy(__DIR__.'/../../stubs/default/public/chart-lines.js', public_path('chart-lines.js'));
        copy(__DIR__.'/../../stubs/default/public/focus-trap.js', public_path('focus-trap.js'));
        copy(__DIR__.'/../../stubs/default/public/init-alpine.js', public_path('init-alpine.js'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/public/images', public_path('images'));

        // Routes
        copy(__DIR__.'/../../stubs/default/routes/web.php', base_path('routes/web.php'));

        // Tailwind / Vite
        copy(__DIR__.'/../../stubs/default/tailwind.config.js', base_path('tailwind.config.js'));
        copy(__DIR__.'/../../stubs/default/postcss.config.js', base_path('postcss.config.js'));
        copy(__DIR__.'/../../stubs/default/vite.config.js', base_path('vite.config.js'));
        copy(__DIR__.'/../../stubs/default/resources/css/app.css', resource_path('css/app.css'));
        copy(__DIR__.'/../../stubs/default/resources/js/app.js', resource_path('js/app.js'));

        // Windmill helper
        (new Filesystem)->ensureDirectoryExists(base_path('windmill'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/windmill', base_path('windmill'));

        // Append Windmill helper to composer.json
        $composer = json_decode(file_get_contents(base_path('composer.json')), true);
        if (isset($composer['autoload']['files'])) {
            array_push($composer['autoload']['files'], 'windmill/helper.php');
        } else {
            $composer['autoload']['files'] = [
                "windmill/helper.php"
            ];
        }
        file_put_contents(base_path('composer.json'), json_encode($composer, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL);

        // Run composer dump-autoload
        $this->components->info('Autoload composer');
        $this->runCommands(['composer dump-autoload']);

        $this->components->info('Installing and building Node dependencies.');

        if (file_exists(base_path('pnpm-lock.yaml'))) {
            $this->runCommands(['pnpm install', 'pnpm run build']);
        } else if (file_exists(base_path('yarn.lock'))) {
            $this->runCommands(['yarn install', 'yarn run build']);
        } else {
            $this->runCommands(['npm install', 'npm run build']);
        }

        $this->line('');
        $this->components->info('Windmill scaffolding installed successfully.');
    }
}