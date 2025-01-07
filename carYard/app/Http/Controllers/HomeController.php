<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
     public function index()
     {  
        return  View::make('index')
                            ->with('name', 'John Doe')
                            ->with('age', 40)
                            ->with('job', '<b> Software Developer </b>')
                            ->with('hobbies', ['Reading', 'Swimming', 'Coding'])
                            ->with ('country' , 'ke');
                   
     }



}
