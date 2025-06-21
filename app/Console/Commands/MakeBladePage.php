<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeBladePage extends Command
{
    protected $signature = 'newpage {name}';
    protected $description = 'Create a new Blade view and route for the given page name';

    public function handle()
    {
        $name = strtolower($this->argument('name'));
        $title = ucfirst($name);

        $viewPath = resource_path("views/{$name}.blade.php");
        $routePath = base_path('routes/web.php');

        // 1. Create Blade File
        if (File::exists($viewPath)) {
            $this->error("❌ View '{$name}.blade.php' already exists.");
        } else {
            $template = <<<BLADE
@extends('layouts.app')

@section('title', '{$title}')

@section('content')
    {{-- Main Content for {$title} --}}
@endsection
BLADE;
            File::put($viewPath, $template);
            $this->info("✅ Blade view '{$name}.blade.php' created.");
        }

        // 2. Add Route to web.php if not already present
        $routeLine = "Route::view('/{$name}', '{$name}');";
        $webRoutes = File::get($routePath);

        if (str_contains($webRoutes, $routeLine)) {
            $this->warn("⚠️ Route for '/{$name}' already exists.");
        } else {
            File::append($routePath, "\n" . $routeLine);
            $this->info("✅ Route added to web.php: /{$name}");
        }
    }
}
