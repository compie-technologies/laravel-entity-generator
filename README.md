# Laravel Entity Generator

[![Build Status](https://travis-ci.org/ybaruchel/laravel-entity-generator.svg?branch=master)](https://travis-ci.org/ybaruchel/laravel-entity-generator)
[![Latest Stable Version](https://poser.pugx.org/ybaruchel/laravel-entity-generator/version.png)](https://packagist.org/packages/ybaruchel/laravel-entity-generator)
[![Total Downloads](https://poser.pugx.org/ybaruchel/laravel-entity-generator/d/total.png)](https://packagist.org/packages/ybaruchel/laravel-entity-generator)
[![Packagist License](https://poser.pugx.org/ybaruchel/laravel-entity-generator/license.png)](http://choosealicense.com/licenses/mit/)

========

**Laravel Entity Generator**

## Installation

```php
composer require ybaruchel/laravel-entity-generator
```

## Example
```
php artisan make:entity Post
```

Then add the service providers to the providers array in config/app.php :

```php
'providers' => [

    App\Repositories\Post\PostRepositoryServiceProvider::class,
    App\Services\Post\PostServiceServiceProvider::class,
```

If you want to use the facade, add this to your facades in app.php:

```php

'aliases' => [

    'PostFacade' => App\Services\Post\PostFacade::class,

```