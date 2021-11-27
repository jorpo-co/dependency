<?php declare(strict_types=1);

namespace Jorpo\Dependency;

interface Injector
{
    public function alias(string $original, string $alias): static;
    public function define(string $name, array $args): static;
    public function delegate(string $name, callable $callback): static;
    public function make(string $name, array $arguments = []): mixed;
    public function param(string $name, mixed $value): static;
    public function prepare(string $name, callable $callback): static;
    public function share(mixed $item): static;
}
