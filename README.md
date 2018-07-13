# Laravel Entity Generator - SOA

[![Build Status](https://travis-ci.org/ybaruchel/laravel-entity-generator.svg?branch=master)](https://travis-ci.org/ybaruchel/laravel-entity-generator)
[![Latest Stable Version](https://poser.pugx.org/ybaruchel/laravel-entity-generator/version.png)](https://packagist.org/packages/ybaruchel/laravel-entity-generator)
[![Total Downloads](https://poser.pugx.org/ybaruchel/laravel-entity-generator/d/total.png)](https://packagist.org/packages/ybaruchel/laravel-entity-generator)
[![Packagist License](https://poser.pugx.org/ybaruchel/laravel-entity-generator/license.png)](http://choosealicense.com/licenses/mit/)

========

**Laravel Entity Generator**

Laravel 5.5 repository design pattern generator with SOA(Service Oriented Arcitecture) inspired from this blog post: http://dfg.gd/blog/decoupling-your-code-in-laravel-using-repositiories-and-services.

## Installation

```php
composer require ybaruchel/laravel-entity-generator
```

## Usage
```
php artisan make:entity Example
```

It will generate the following structure by default configuration:

```
app
└── Entities
    |   └── Example.php
    ├── Repositories
    |   └── Example
    |       ├── ExampleRepository.php
    |       ├── ExampleRepositoryServiceProvider.php
    |       └── ExampleInterface.php
    └── Services
        └── Example
            ├── ExampleFacade.php
            ├── ExampleService.php
            └── ExampleServiceServiceProvider.php
```

Then add the service providers to the providers array in config/app.php :

```php
'providers' => [

    App\Repositories\Example\ExampleRepositoryServiceProvider::class,
    App\Services\Example\ExampleServiceServiceProvider::class,
```

If you want to use the facade, add this to your facades in app.php:

```php

'aliases' => [

    'ExampleFacade' => App\Services\Example\ExampleFacade::class,

```

## TODO
- PSR refactor
- Error handling
- Options
