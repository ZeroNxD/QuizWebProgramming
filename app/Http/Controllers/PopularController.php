<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class PopularController extends Controller
{
    public function ShowPage(){
        return view('Page.PopularPage');
    }
}
