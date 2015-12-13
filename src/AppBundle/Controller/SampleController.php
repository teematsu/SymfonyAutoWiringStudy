<?php
namespace AppBundle\Controller;

use AppBundle\GreetingService;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * アノテーションでルートを定義するコントローラの例。
 *
 * @Route("/sample", service="AppBundle\Controller\SampleController")
 */
class SampleController
{
    /** @var  GreetingService */
    private $greetingService;

    public function __construct(GreetingService $greetingService)
    {
        $this->greetingService = $greetingService;
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