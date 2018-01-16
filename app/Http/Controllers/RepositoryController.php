<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function lista()
    {
    	return response()->json( "teste" );
    }
}
