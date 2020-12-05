<?php


namespace BX\Router\Interfaces;

use BX\Router\ResponseHandler;
use Psr\Http\Server\MiddlewareInterface;

interface RestAppInterface
{
    /**
     * @return AppFactoryInterface
     */
    public function getFactory(): AppFactoryInterface;

    /**
     * Добавляем сервис в DI контейнер
     * @param string $name
     * @param $serviceInstance
     * @return void
     */
    public function setService(string $name, $serviceInstance);

    /**
     * @param ResponseHandler $responseHandler
     * @return void
     */
    public function setResponseHandler(ResponseHandler $responseHandler);

    /**
     * @param MiddlewareInterface $middleware
     * @return void
     */
    public function registerMiddleware(MiddlewareInterface $middleware);

    /**
     * @return RouterInterface
     */
    public function getRouter(): RouterInterface;

    /**
     * @return void
     */
    public function run();
}
