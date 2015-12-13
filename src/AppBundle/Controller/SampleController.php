<?php
namespace AppBundle\Controller;

use AppBundle\GreetingService;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * アノテーションでルートを定義するコントローラの例。
 *
 * @Route("/sample")
 */
class SampleController
{
    /** @var  GreetingService */
    private $greetingService;

    public function __construct()
    {
        $this->greetingService = new GreetingService();
    }

    /**
     * @Route("/hello/{name}")
     */
    public function helloAction($name)
    {
        $message = $this->greetingService->sayHelloTo($name);
        return new Response('<html><body>' . $message . '</body></html>');
    }

}