<?php

namespace Ybaruchel\EntityGenerator;

use Illuminate\Support\ServiceProvider;
use Ybaruchel\EntityGenerator\Commands\EntityGenerate;

class EntityGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }

	public function boot()
	{
		if ($this->app->runningInConsole()) {
			$this->commands([
				EntityGenerate::class,
			]);
		}
    }
}
