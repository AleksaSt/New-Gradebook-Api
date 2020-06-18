<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorsRequest;
use App\Professor;
use Illuminate\Http\Request;

class ProfessorsController extends Controller
{
    public function index(){
        return Professor::all();
    }

    public function store(ProfessorsRequest $request){
        return Professor::create($request->all());
    }
}
