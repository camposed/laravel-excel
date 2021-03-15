<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;


class UsersExportController extends Controller
{

    public function export($request)
    {

        return (new UsersExport)->forId(request('id'))->download('users.xlsx');        
        
    }


}
