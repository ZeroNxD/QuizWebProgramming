<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class WriterController extends Controller
{
    public function ShowPage(){
        $DataScienceCategory = Category::with(['courses' => function($query){
             $query->first();
        }])->where('name', 'Data Science')->first();
 
        $NetworkSecurityCategory = Category::with(['courses' => function($query){
             $query->first();
        }])->where('name', 'Network Security')->first();
 
        return view('Page.WriterPage', compact('DataScienceCategory', 'NetworkSecurityCategory'));
     }

     public function ShowPageDSWriter(){
        $DataScienceCategory = Category::with(['courses' => function($query){
             $query->get();
        }])->where('name', 'Data Science')->first();
 
        return view('Page.CategoryPageDSWriter', compact('DataScienceCategory'));
     }

     public function ShowPageNSWriter(){
        $NetworkSecurityCategory = Category::with(['courses' => function($query){
            $query->get();
       }])->where('name', 'Network Security')->first();
        return view('Page.CategoryPageNSWriter', compact('NetworkSecurityCategory'));
     }
}
