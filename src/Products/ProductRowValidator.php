<?php

namespace App\Products;

use App\Importer\Contracts\RowValidatorInterface;

class ProductRowValidator implements RowValidatorInterface
{
    protected array $errors = [];

    public function validate(array $row): bool
    {
        return true;
    }

    public function errors(): array
    {
        return $this->errors;
    }
}
