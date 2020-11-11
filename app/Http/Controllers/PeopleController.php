<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function list(){
    $people = People::all();
     return view('list', ['people' => $people]);
		}



     public function addPeople(Request $request)
    {
        $fields = request()->validate([
            'nombre' => 'required'
        ]);
        People::create($fields);
       return redirect()->route('list');
    }
}