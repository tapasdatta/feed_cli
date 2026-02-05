<?php

namespace App\Products;

use App\Importer\Contracts\RowMapperInterface;

class ProductRowMapper implements RowMapperInterface
{
    public function map(array $row): array
    {
        return [
            'gtin' => trim($row['gtin']),
            'language' => strtolower($row['language']),
            'title' => trim($row['title']),
            'picture' => $row['picture'],
            'description' => $row['description'],
            'price' => (float) $row['price'],
            'stock' => (int) $row['stock'],
        ];
    }
}
