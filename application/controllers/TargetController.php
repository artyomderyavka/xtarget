<?php


namespace Target\Controllers;


use FastMicroKernel\Components\Controller;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class TargetController extends Controller
{
    public function getTargets(RequestInterface $request, array $arguments): ResponseInterface
    {
        $queryParams = $request->getQueryParams();
        $requestDto = $this->getContainer()->get('applicationDtoFactory')->getPickTargetsRequestDto($queryParams);
        echo "<pre>"; var_dump($queryParams, $requestDto);

        $responseDto = $this->getContainer()->get('domainDeliveryTargetService')->pickTargets($requestDto);
        die;
    }
}