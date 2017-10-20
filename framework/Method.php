<?php
declare(strict_types=1);

namespace Framework;

class Method
{
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function get(): self
    {
        return new self('GET');
    }

    public static function post(): self
    {
        return new self('POST');
    }
}
