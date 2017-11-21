<?php

namespace App\Http\Controllers;
use App\Account;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request )
    {
        if($request->has('search')){
            $accounts = Account::search($request->input('search'))->get();
        }
        return response()->json($accounts);
    }
}
