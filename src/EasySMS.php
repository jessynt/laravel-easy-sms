<?php
declare(strict_types=1);

namespace Jessynt\LaravelEasySMS;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * Class Facade
 * @package Jessynt\LaravelEasySMS
 */
class EasySMS extends LaravelFacade
{
    public static function getFacadeAccessor(): string
    {
        return 'easysms';
    }
}