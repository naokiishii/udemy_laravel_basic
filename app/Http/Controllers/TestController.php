<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // Eloquent
        $values = Test::all();
        $count = Test::count();
        $first = Test::findOrFail(1);
        $whereAAA = Test::where('text', '=', 'aaa')->get();
        //        dd($values, $count, $first, $whereAAA);

        //query builder
        $query_builder = DB::table('tests')->where('text', '=', 'aaa')->select('id', 'text')->get();
        dd($query_builder);

        return view('tests.test', compact('values'));  // tests folder => test file under resources/views
    }
}
