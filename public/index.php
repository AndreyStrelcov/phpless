<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use ExempleApp\HelloWorld;
use FastRoute\RouteCollector;
use Middlewares\FastRoute;
use Relay\Relay;
use Zend\Diactoros\ServerRequestFactory;
use function DI\create;
use function FastRoute\simpleDispatcher;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAnnotations(false);
$containerBuilder->addDefinitions([
    \ExempleApp\HelloWorld::class => \DI\create(\ExempleApp\HelloWorld::class)
]);
$container = $containerBuilder->build();

$routes = simpleDispatcher(function (RouteCollector $r)
{
   $r->get('/hello', HelloWorld::class);
});


$middlewareQueue[] = new FastRoute($route);
$middlewareQueue[] = new RequestHandler();

$requestHandler = new Relay($middlewareQueue);
$requestHandler->handle(ServerRequestFactory::fromGlobals());

$helloWorld = $container->get(\ExempleApp\HelloWorld::class);
$helloWorld->announce();