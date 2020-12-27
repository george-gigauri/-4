<?php

namespace App\Http\Controllers;

use App\Models\Index;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $model=new index();
        return $model->test();
    }
}
