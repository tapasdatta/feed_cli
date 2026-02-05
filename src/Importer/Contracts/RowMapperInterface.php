<?php

namespace App\Importer\Contracts;

interface RowMapperInterface
{
    public function map(array $row): array;
}
