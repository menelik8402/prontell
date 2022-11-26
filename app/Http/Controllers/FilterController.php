<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filter;

class FilterController extends Controller
{
    public function index()
    {
        $filters = Filter::all();

        return response()->json($filters, 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 
                                   'Charset' => 'utf-8'],
                                    JSON_UNESCAPED_UNICODE);
       
    }

    public function getGiftByFilter($filter)
    {
        $filter = Filter::where('description',$filter)->first();

        return response()->json($filter->gifts, 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 
                           'Charset' => 'utf-8'],
                            JSON_UNESCAPED_UNICODE);
    }

}
