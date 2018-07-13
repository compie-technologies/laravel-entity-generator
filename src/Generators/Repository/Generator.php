<?php

namespace Ybaruchel\EntityGenerator\Generators\Repository;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Ybaruchel\EntityGenerator\Generators\BaseGenerator;
use Illuminate\Contracts\Foundation\Application;

class Generator extends BaseGenerator
{
	public $type = 'repository';

	public function __construct(Filesystem $files, Application $laravel)
	{
		parent::__construct($files, $laravel);
	}

	public function handle($name)
	{
		return parent::handle($name);
	}

	/**
	 * Get the destination classes path.
	 *
	 * @param  string  $name
	 * @return array
	 */
	protected function getPaths($name): array
	{
		$name = Str::replaceFirst($this->rootNamespace(), '', $name);
		$name = str_replace('\\', '/', $name);

		$basePath = $this->laravel['path'].'/Models/Entities/Repositories/'.$name.'/';

		return [
			'repository' => $basePath.$name.'Repository.php',
			'service_provider' => $basePath.$name.'RepositoryServiceProvider.php',
			'interface' => $basePath.$name.'Interface.php'
		];
	}

	protected function getStub($classType)
	{
		return __DIR__.'/stubs/'.$classType.'.stub';
	}
}