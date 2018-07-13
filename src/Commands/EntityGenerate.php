<?php

namespace Ybaruchel\EntityGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Ybaruchel\EntityGenerator\Generators\Repository\Generator as RepositoryGenerator;
use Ybaruchel\EntityGenerator\Generators\Service\Generator as ServiceGenerator;

class EntityGenerate extends Command
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $signature = 'make:entity {name}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new Entity';

	/**
	 * The type of class being generated.
	 *
	 * @var string
	 */
	protected $type = 'Entity';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @param RepositoryGenerator $repositoryGenerator
	 * @param ServiceGenerator $serviceGenerator
	 * @return void
	 */
	public function handle(RepositoryGenerator $repositoryGenerator, ServiceGenerator $serviceGenerator)
	{
		$model = Str::studly(class_basename($this->argument('name')));

		$this->call('make:model', [
			'name' => 'Models/Entities/' . $model,
		]);

		$this->info($repositoryGenerator->handle($this->argument('name')));

		$this->info($serviceGenerator->handle($this->argument('name')));
	}
}
