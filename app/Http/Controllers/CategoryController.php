<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class CategoryController extends Controller
{
    public function ShowPageDS(){
        $DataScienceCategory = Category::with(['courses' => function($query){
            $query->get();
       }])->where('name', 'Data Science')->first();
       return view('Page.CategoryPageDS', compact('DataScienceCategory'));
    }

    public function ShowPageMachineLearning(){
        $DataScienceCategory = Category::with(['courses' => function($query){
            $query->get();
       }])->where('name', 'Data Science')->first();
        return view('DataScience.MachineLearning', compact('DataScienceCategory'));
    }

    public function ShowPageDeepLearning(){
        $DataScienceCategory = Category::with(['courses' => function($query){
            $query->get();
       }])->where('name', 'Data Science')->first();
        return view('DataScience.DeepLearning', compact('DataScienceCategory'));
    }

    public function ShowPageNLP(){
        $DataScienceCategory = Category::with(['courses' => function($query){
            $query->get();
       }])->where('name', 'Data Science')->first();
        return view('DataScience.NaturalLanguageProcessing', compact('DataScienceCategory'));
    }

    public function ShowPageNS(){
        $NetworkSecurityCategory = Category::with(['courses' => function($query){
            $query->get();
       }])->where('name', 'Network Security')->first();
       return view('Page.CategoryPageNS', compact('NetworkSecurityCategory'));
    }

    public function ShowPageSoftwareSecurity(){
        $NetworkSecurityCategory = Category::with(['courses' => function($query){
            $query->get();
       }])->where('name', 'Network Security')->first();
        return view('NetworkSecurity.SoftwareSecurity', compact('NetworkSecurityCategory'));
    }

    public function ShowPageNetworkAdministration(){
        $NetworkSecurityCategory = Category::with(['courses' => function($query){
            $query->get();
       }])->where('name', 'Network Security')->first();
        return view('NetworkSecurity.NetworkAdministration', compact('NetworkSecurityCategory'));
    }

    public function ShowPagePNT(){
        $NetworkSecurityCategory = Category::with(['courses' => function($query){
            $query->get();
       }])->where('name', 'Network Security')->first();
        return view('NetworkSecurity.PopularNetworkTechnology', compact('NetworkSecurityCategory'));
    }
}
