<?php
namespace Jessynt\LaravelEasySMS;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * Class Facade
 * @package Jessynt\LaravelEasySMS
 */
class EasySMS extends LaravelFacade
{
    public static function getFacadeAccessor()
    {
        return 'easysms';
    }
}