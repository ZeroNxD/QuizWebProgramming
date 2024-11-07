<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class HomeController extends Controller
{
    public function ShowPage(){
       $DataScienceCategory = Category::with(['courses' => function($query){
            $query->first();
       }])->where('name', 'Data Science')->first();

       $NetworkSecurityCategory = Category::with(['courses' => function($query){
            $query->first();
       }])->where('name', 'Network Security')->first();

       return view('Page.Homepage', compact('DataScienceCategory', 'NetworkSecurityCategory'));
    }
}
