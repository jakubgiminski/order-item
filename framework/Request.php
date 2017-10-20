<?php
declare(strict_types=1);

namespace Framework;

class Request
{
    public function getArgument(string $argumentName): string
    {
        return $argumentName;
    }
}
