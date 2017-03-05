<?php

namespace App\Http\Controllers;
use App\CsvExport;
use App\Product;

class ExportController extends Controller
{
    /**
     * Exports all product data to a CSV file
     */
    public function exportProductToCSV(CsvExport $exporter)
    {
        $products = Product::orderBy('id', 'desc')->get();

        $array = $products->map(function($product, $key){
            return $product->format();
        });

        $exporter->export($array->all(), 'products');
    }

}
