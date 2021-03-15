<?php

namespace App\Imports;

use App\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductsImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Product::create([
                'name' => $row[0],
                'description' => $row[1],
                'serial' => $row[2],
                'stock' => $row[3],

            ]);
        }
    }
}
