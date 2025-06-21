<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Export\Exporter;


class ExportStaticSite extends Command
{
    protected $signature = 'site:export-static';
    protected $description = 'Export the Laravel site as static HTML files';

    public function handle()
    {
        $this->info('Exporting static site...');

        Exporter::create()
            ->baseUrl('http://127.0.0.1:8000') // make sure your server is running
            ->destinationDirectory('static-version') // output folder
            ->includeAssets()
            ->withPages([
                '/home',
                '/about',
                '/skills',
            ])
            ->export();

        $this->info('Static site export complete!');
    }
}
