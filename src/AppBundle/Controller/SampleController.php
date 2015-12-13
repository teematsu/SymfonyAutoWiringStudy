<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * アノテーションでルートを定義するコントローラの例。
 *
 * @Route("/sample")
 */
class SampleController
{
    /**
     * @Route("/hello/{name}")
     */
    public function helloAction($name)
    {
        $message = "こんにちは {$name} さん。";
        return new Response('<html><body>' . $message . '</body></html>');
    }

}