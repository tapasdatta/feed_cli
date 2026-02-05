<?php

namespace App\Importer\Contracts;

interface RepositoryInterface
{
    public function saveBatch(array $rows): void;
}
