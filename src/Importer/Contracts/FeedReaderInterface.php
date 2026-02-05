<?php

namespace App\Importer\Contracts;

interface FeedReaderInterface
{
    public function type(): string;

    public function read(string $path): iterable;
}
