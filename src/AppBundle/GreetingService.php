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
    /** @var  CapitalizationService */
    private $capitalizationService;

    public function __construct(CapitalizationService $capitalizationService)
    {
        $this->capitalizationService = $capitalizationService;
    }

    public function sayHelloTo($name) {
        return "こんにちは、" . $this->capitalizationService->capitalize($name) . " さん。";
    }
}