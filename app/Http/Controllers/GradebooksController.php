<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gradebook;
use App\Http\Requests\GradebooksRequest;

class GradebooksController extends Controller
{
    public function index(){
      return Gradebook::paginate(2);
    }

    public function store(GradebooksRequest $request){
      return Gradebook::create($request->all());
    }
}
