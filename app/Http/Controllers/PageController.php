<?php

    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class PageController extends Controller
    {
        
        public function home()
        {
            return view('welcome');

        } 

        public function api()
        {
            return view('apidashboard');

        }    

        public function contact()
        {
            return view('contact');

        }
    }
