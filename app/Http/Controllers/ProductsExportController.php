<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductsExportController extends Controller
{

    public function importExportView()
    {
       return view('import');
    }

    public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    public function import() 
    {
  
        Excel::import(new ProductsImport,request()->file('file'));
           
        return back()->with('status','Se realizado la importacion !!!');
    }

}
