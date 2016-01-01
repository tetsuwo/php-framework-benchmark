<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class OrmController extends Controller
{
    public function index()
    {
        $q = DB::table('item')
            ->select('*')
            ->orderBy('id', 'ASC')
            ->take(1000);

        $items = $q->get();

        return view('item.index', ['items' => $items]);
    }
}
