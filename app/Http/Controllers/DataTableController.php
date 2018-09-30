<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTable;
class DataTableController extends Controller
{
    //
    public function dataTableView()
    {
    		return view('data');
    }

    public function dataTableData()
    {
    	$data=\App\DataTable::all();
    	// return $data;
    	 return datatables($data)->toJson();
    	
    }
}
