<?php

namespace ecommerce\Http\Controllers;

use Illuminate\Http\Request;
use ReflectionClass;

class MainController extends Controller
{

  public function consultar(Request $request){

    $uri = explode("/",$request->path());

    $reflection = new ReflectionClass("ecommerce\\".ucfirst($uri[1]));

    $class = $reflection->newInstance();

    return response()->json($class->all());

  }


}
