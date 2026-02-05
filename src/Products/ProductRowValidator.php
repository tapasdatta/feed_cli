<?php

namespace App\Products;

use App\Entity\Product;
use App\Importer\Contracts\RowValidatorInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ProductRowValidator implements RowValidatorInterface
{
    protected array $errors = [];

    public function __construct(private ValidatorInterface $validator)
    {
        //
    }

    public function validate(array $row): bool
    {
        $product = new Product();

        $errors = $this->validator->validate($product);

        if (count($errors) > 0) {
            foreach ($errors as $violation) {
                $this->errors[] = [
                    'field'   => $violation->getPropertyPath(),
                    'message' => $violation->getMessage(),
                    'value'   => $violation->getInvalidValue(),
                ];
            }

            return false;
        }

        return true;
    }

    public function errors(): array
    {
        return $this->errors;
    }
}
