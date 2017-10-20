<?php
declare(strict_types=1);

namespace Framework;

class Route
{
    private $method;

    private $url;

    private $controllerName;

    private $actionName;

    private function __construct(
        Method $method,
        string $url,
        string $controllerName,
        string $actionName
    ) {
        $this->method = $method;
        $this->url = $url;
        $this->controllerName = $controllerName;
        $this->actionName = $actionName;
    }

    public static function get(string $url, string $controllerName, string $actionName): self
    {
        return new self(Method::get(), $url, $controllerName, $actionName);
    }

    public static function post(string $url, string $controllerName, string $actionName): self
    {
        return new self(Method::post(), $url, $controllerName, $actionName);
    }

    public function getMethod(): Method
    {
        return $this->method;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getControllerName(): string
    {
        return $this->controllerName;
    }

    public function getActionName(): string
    {
        return $this->actionName;
    }
}
