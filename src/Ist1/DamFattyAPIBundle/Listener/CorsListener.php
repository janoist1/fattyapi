<?php
namespace Ist1\DamFattyAPIBundle\Listener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

/**
 * Cross-origin resource sharing (CORS)
 *
 * Class CorsListener
 * @package Ist1\DamFattyAPIBundle\Listener
 */
class CorsListener
{
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();

        if ($event->getRequest()->getMethod() == 'OPTIONS') {
            $response->setStatusCode(Response::HTTP_OK);
        }

        $response->headers->set('Access-Control-Allow-Headers', 'origin, content-type, accept, authorization');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET,POST,HEAD,DELETE,PUT,OPTIONS');
    }
}