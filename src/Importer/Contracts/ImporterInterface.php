<?php

namespace App\Importer\Contracts;

interface ImporterInterface
{
    public function key(): string;

    public function import(string $path, string $type);
}
