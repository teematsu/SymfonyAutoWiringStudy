<?php
namespace AppBundle\Controller;

use AppBundle\GreetingService;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

/**
 * アノテーションでルートを定義するコントローラの例。
 *
 * @Route("/sample", service="AppBundle\Controller\SampleController")
 */
class SampleController
{
    /** @var  GreetingService */
    private $greetingService;

    /** @var  EngineInterface */
    private $templating;

    public function __construct(GreetingService $greetingService, EngineInterface $engineInterface)
    {
        $this->greetingService = $greetingService;
        $this->templating = $engineInterface;
    }

    /**
     * @Route("/hello/{name}")
     */
    public function helloAction($name)
    {
        $message = $this->greetingService->sayHelloTo($name);
        return $this->templating->renderResponse('AppBundle:Sample:index.html.twig', ['message' => $message]);
    }

}