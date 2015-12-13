<?php
/**
 * Created by PhpStorm.
 * User: tmatsu
 * Date: 2015/12/13
 * Time: 12:10
 */

namespace AppBundle;


class GreetingService
{
    public function sayHelloTo($name) {
        return "こんにちは、{$name} さん。";
    }
}