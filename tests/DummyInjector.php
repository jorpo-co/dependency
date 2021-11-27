<?php declare(strict_types=1);

namespace Jorpo\Dependency;

class DummyInjector implements Injector
{
    public function alias(string $original, string $alias): static
    {
        return $this;
    }

    public function define(string $name, array $args): static
    {
        return $this;
    }

    public function delegate(string $name, callable $callback): static
    {
        return $this;
    }

    public function make(string $name, array $arguments = []): mixed
    {
        return new $name;
    }

    public function param(string $name, mixed $value): static
    {
        return $this;
    }

    public function prepare(string $name, callable $callback): static
    {
        return $this;
    }

    public function share(mixed $item): static
    {
        return $this;
    }
}
