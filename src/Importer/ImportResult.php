<?php

namespace App\Importer;

final class ImportResult
{
    public int $processed = 0;
    public int $skipped = 0;
    public array $errors = [];
}
