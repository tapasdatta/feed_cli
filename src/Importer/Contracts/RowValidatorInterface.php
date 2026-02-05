<?php

namespace App\Importer\Contracts;

interface RowValidatorInterface
{
    public function validate(array $row): bool;

    public function errors(): array;
}
